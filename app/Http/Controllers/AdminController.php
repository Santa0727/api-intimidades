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

	private function filterSofts($lang)
	{
		return CoupleSoft::where('lang', $lang)->get()->map(function($soft) {
			return [
				'id' => $soft->id,
				'type' => $soft->type,
				'gender' => $soft->gender,
				'value' => $soft->value,
				'shot' => $soft->shot,
				'lang' => $soft->lang
			];
		});
	}

	public function getSofts(Request $request)
	{
		return response()->json([
			'eng' => $this->filterSofts('ENG'),
			'rus' => $this->filterSofts('RUS'),
			'spa' => $this->filterSofts('SPA'),
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
			'gender' => 'required|in:F,M',
			'type' => 'required|in:D,Q',
			'value' => 'required',
			'shot' => 'required|integer'
		]);
		$result = CoupleSoft::where('id', $request->id)->first()->update($request->except(['id']));
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

	private function filterHots($lang)
	{
		return CoupleHot::where('lang', $lang)->get()->map(function ($hot) {
			return [
				'id' => $hot->id,
				'type' => $hot->type,
				'gender' => $hot->gender,
				'value' => $hot->value,
				'shot' => $hot->shot,
				'lang' => $hot->lang
			];
		});
	}

	public function getHots(Request $request)
	{
		return response()->json([
			'eng' => $this->filterHots('ENG'),
			'rus' => $this->filterHots('RUS'),
			'spa' => $this->filterHots('SPA'),
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
			'gender' => 'required|in:F,M',
			'type' => 'required|in:Q,D',
			'value' => 'required',
			'shot' => 'required'
		]);
		$result = CoupleHot::where('id', $request->id)->first()->update($request->except(['id']));
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
