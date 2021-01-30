<?php

namespace App\Http\Controllers;

use App\Models\SoftRate;
use Illuminate\Http\Request;

class RateController extends Controller
{
	public function rateCoupleSoft(Request $request)
	{
		$this->validate($request, [
			'soft_id' => 'required|exists:couple_softs,id',
			'rate' => 'required|integer'
		]);
		return response()->json(SoftRate::create($request->only(['soft_id', 'rate'])));
	}
}
