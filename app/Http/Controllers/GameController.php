<?php

namespace App\Http\Controllers;

use App\Models\CoupleHot;
use App\Models\CoupleSoft;
use App\Models\Dare;
use App\Models\Dice;
use App\Models\Question;
use Illuminate\Http\Request;

class GameController extends Controller
{
	public function getDares(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'type' => 'required|in:MUL,FF,MM,MF'
		]);
		return response()->json(Dare::where('lang', $request->lang)->where('type', $request->type)->get()->map(function($dare) {
			return [
				'id' => $dare->id,
				'value' => $dare->value,
				'shot' => $dare->shot
			];
		}));
	}

	public function getQuestions(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'type' => 'required|in:MUL,FF,MM,MF'
		]);
		return response()->json(Question::where('lang', $request->lang)->where('type', $request->type)->get()->map(function($question) {
			return [
				'id' => $question->id,
				'value' => $question->value,
				'shot' => $question->shot
			];
		}));
	}

	public function getDices(Request $request)
	{
		$this->validate($request, ['lang' => 'required|in:ENG,RUS,SPA']);
		$result = Dice::where('lang', $request->lang)->where('level', 0)->first();
		return response()->json([
			'place' => json_decode($result->place),
			'action' => json_decode($result->action)
		]);
	}

	public function getSoftDares(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'gender' => 'required|in:M,F'
		]);
		return response()->json(CoupleSoft::where([
			['type', 'D'],
			['lang', $request->lang],
			['gender', $request->gender]
		])->get()->map(function ($dare) {
			return [
				'id' => $dare->id,
				'value' => $dare->value,
				'shot' => $dare->shot
			];
		}));
	}

	public function getSoftQuestions(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'gender' => 'required|in:M,F'
		]);
		return response()->json(CoupleSoft::where([
			['type', 'Q'],
			['lang', $request->lang],
			['gender', $request->gender]
		])->get()->map(function ($dare) {
			return [
				'id' => $dare->id,
				'value' => $dare->value,
				'shot' => $dare->shot
			];
		}));
	}

	public function queryCoupleSoft($type, $lang, $gender) {
		return CoupleSoft::where([['type', $type], ['lang', $lang], ['gender', $gender]])->get()->map(function ($dare) {
			return [
				'id' => $dare->id,
				'value' => $dare->value,
				'shot' => $dare->shot
			];
		});
	}

	public function getCoupleSoft(Request $request)
	{
		try {
			return response()->json([
				'questions' => [
					'eng' => [
						'M' => $this->queryCoupleSoft('Q', 'ENG', 'M'),
						'F' => $this->queryCoupleSoft('Q', 'ENG', 'F'),
					],
					'rus' => [
						'M' => $this->queryCoupleSoft('Q', 'RUS', 'M'),
						'F' => $this->queryCoupleSoft('Q', 'RUS', 'F'),
					],
					'spa' => [
						'M' => $this->queryCoupleSoft('Q', 'SPA', 'M'),
						'F' => $this->queryCoupleSoft('Q', 'SPA', 'F'),
					]
				],
				'dares' => [
					'eng' => [
						'M' => $this->queryCoupleSoft('D', 'ENG', 'M'),
						'F' => $this->queryCoupleSoft('D', 'ENG', 'F'),
					],
					'rus' => [
						'M' => $this->queryCoupleSoft('D', 'RUS', 'M'),
						'F' => $this->queryCoupleSoft('D', 'RUS', 'F'),
					],
					'spa' => [
						'M' => $this->queryCoupleSoft('D', 'SPA', 'M'),
						'F' => $this->queryCoupleSoft('D', 'SPA', 'F'),
					]
				]
			]);
		} catch (\Throwable $th) {
			return response()->json(['error' => $th->getMessage()], 500);
		}
	}

	public function getHotDares(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'gender' => 'required|in:M,F'
		]);
		return response()->json(CoupleHot::where([
			['type', 'D'],
			['lang', $request->lang],
			['gender', $request->gender]
		])->get()->map(function ($dare) {
			return [
				'id' => $dare->id,
				'value' => $dare->value,
				'shot' => $dare->shot
			];
		}));
	}

	public function getHotQuestions(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'gender' => 'required|in:M,F'
		]);
		return response()->json(CoupleHot::where([
			['type', 'Q'],
			['lang', $request->lang],
			['gender', $request->gender]
		])->get()->map(function ($dare) {
			return [
				'id' => $dare->id,
				'value' => $dare->value,
				'shot' => $dare->shot
			];
		}));
	}
}
