<?php

namespace App\Http\Controllers;

use App\Models\MyDare;
use Illuminate\Http\Request;

class MyDareController extends Controller
{
	public function __construct()
	{
		$this->middleware(['api', 'jwt']);
	}

	public function index(Request $request)
	{
		$this->validate($request, ['lang' => 'required|in:ENG,RUS,SPA']);
		return response()->json(MyDare::where('user_id', auth()->id())->where('lang', $request->lang)->get()->map(function($m) {
			return [
				'id' => $m->id,
				'value' => $m->value
			];
		}));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'lang' => 'required|in:ENG,RUS,SPA',
			'value' => 'required'
		]);
		return response()->json(MyDare::create([
			'user_id' => auth()->id(),
			'value' => $request->value,
			'lang' => $request->lang
		]));
	}

	public function show(MyDare $myDare)
	{
		return response()->json($myDare->only(['value', 'lang']));
	}


	public function update(Request $request, MyDare $myDare)
	{
		return response()->json($myDare->update($request->only(['value'])));
	}

	public function destroy(MyDare $myDare)
	{
		return response()->json($myDare->delete());
	}
}
