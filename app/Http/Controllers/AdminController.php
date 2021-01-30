<?php

namespace App\Http\Controllers;

use App\Models\CoupleHot;
use App\Models\CoupleSoft;
use App\Models\Dare;
use App\Models\Dice;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('admin');
	}

	private function filterQuestions($type, $lang)
	{
		return Question::where('type', $type)->where('lang', $lang)->get()->map(function ($q) {
			return [
				'id' => $q->id,
				'shot' => $q->shot,
				'value' => $q->value
			];
		});
	}

	public function getQuestions(Request $request)
	{
		return response()->json([
			'eng' => $this->filterQuestions($request->type, 'ENG'),
			'rus' => $this->filterQuestions($request->type, 'RUS'),
			'spa' => $this->filterQuestions($request->type, 'SPA')
		]);
	}

	public function createQuestion(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'type' => 'required|in:MUL,FF,MM,MF',
			'value' => 'required',
			'shot' => 'required|integer'
		]);
		return response()->json(Question::create($request->all()));
	}

	public function updateQuestion(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|exists:questions,id',
			'value' => 'required',
			'shot' => 'required|integer'
		]);
		return response()->json(Question::where('id', $request->id)->first()->update($request->only(['value', 'shot'])));
	}

	public function deleteQuestion(Request $request)
	{
		$this->validate($request, ['id' => 'required|exists:questions,id']);
		return response()->json(Question::where('id', $request->id)->first()->delete());
	}

	private function filterDares($type, $lang)
	{
		return Dare::where('type', $type)->where('lang', $lang)->get()->map(function ($d) {
			return [
				'id' => $d->id,
				'shot' => $d->shot,
				'value' => $d->value
			];
		});
	}

	public function getDares(Request $request)
	{
		return response()->json([
			'eng' => $this->filterDares($request->type, 'ENG'),
			'rus' => $this->filterDares($request->type, 'RUS'),
			'spa' => $this->filterDares($request->type, 'SPA'),
		]);
	}

	public function createDare(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'type' => 'required|in:MUL,FF,MM,MF',
			'value' => 'required',
			'shot' => 'required|integer'
		]);
		return response()->json(Dare::create($request->all()));
	}

	public function updateDare(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|exists:dares,id',
			'value' => 'required',
			'shot' => 'required|integer'
		]);
		return response()->json(Dare::where('id', $request->id)->first()->update($request->only(['value', 'shot'])));
	}

	public function deleteDare(Request $request)
	{
		$this->validate($request, ['id' => 'required|exists:dares,id']);
		return response()->json(Dare::where('id', $request->id)->first()->delete());
	}

	public function getDice(Request $request)
	{
		$result = Dice::where('lang', $request->lang)->where('level', 0)->first();
		return response()->json([
			'place' => json_decode($result->place),
			'action' => json_decode($result->action)
		]);
	}

	public function replaceDice(Request $request)
	{
		$this->validate($request, ['place' => 'required', 'action' => 'required', 'lang' => 'required|in:ENG,RUS,SPA']);
		try {
			return response()->json(
				Dice::where('lang', $request->lang)->where('level', 0)->first()->update([
					'place' => json_encode($request->place),
					'action' => json_encode($request->action)
				])
			);
		} catch (\Throwable $th) {
			return response()->json(['error' => 'Invalid info'], 401);
		}
	}

	private function filterSofts($type, $gender, $lang)
	{
		return CoupleSoft::where([['type', $type], ['gender', $gender], ['lang', $lang]])->get()->map(function ($c) {
			return [
				'id' => $c->id,
				'shot' => $c->shot,
				'value' => $c->value
			];
		});
	}

	public function getSofts(Request $request)
	{
		return response()->json([
			'eng' => $this->filterSofts($request->type, $request->gender, 'ENG'),
			'rus' => $this->filterSofts($request->type, $request->gender, 'RUS'),
			'spa' => $this->filterSofts($request->type, $request->gender, 'SPA'),
		]);
	}

	public function createSoft(Request $request)
	{
		$this->validate($request, [
			'gender' => 'required|in:F,M',
			'value' => 'required',
			'shot' => 'required|integer',
			'lang' => 'required|in:ENG,RUS,SPA',
			'type' => 'required|in:D,Q'
		]);
		$result = CoupleSoft::create($request->all());
		return response()->json($result);
	}

	public function updateSoft(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|exists:couple_softs,id',
			'value' => 'required',
			'shot' => 'required'
		]);
		$result = CoupleSoft::where('id', $request->id)->first()->update($request->only(['value', 'shot']));
		return response()->json($result);
	}

	public function deleteSoft(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|exists:couple_softs,id'
		]);
		$result = CoupleSoft::where('id', $request->id)->first()->delete();
		return response()->json($result);
	}

	private function filterHots($type, $gender, $lang)
	{
		return CoupleHot::where([['type', $type], ['gender', $gender], ['lang', $lang]])->get()->map(function ($h) {
			return [
				'id' => $h->id,
				'shot' => $h->shot,
				'value' => $h->value
			];
		});
	}

	public function getHots(Request $request)
	{
		return response()->json([
			'eng' => $this->filterHots($request->type, $request->gender, 'ENG'),
			'rus' => $this->filterHots($request->type, $request->gender, 'RUS'),
			'spa' => $this->filterHots($request->type, $request->gender, 'SPA'),
		]);
	}

	public function createHot(Request $request)
	{
		$this->validate($request, [
			'gender' => 'required|in:F,M',
			'value' => 'required',
			'shot' => 'required|integer',
			'lang' => 'required|in:ENG,RUS,SPA',
			'type' => 'required|in:Q,D'
		]);
		$result = CoupleHot::create($request->all());
		return response()->json($result);
	}

	public function updateHot(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|exists:couple_hots,id',
			'value' => 'required',
			'shot' => 'required'
		]);
		$result = CoupleHot::where('id', $request->id)->first()->update($request->only(['value', 'shot']));
		return response()->json($result);
	}

	public function deleteHot(Request $request)
	{
		$this->validate($request, [
			'id' => 'required|exists:couple_hots,id'
		]);
		$result = CoupleHot::where('id', $request->id)->first()->delete();
		return response()->json($result);
	}
}
