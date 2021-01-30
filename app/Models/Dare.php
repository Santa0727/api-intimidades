<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dare extends Model
{
	use HasFactory;

	protected $fillable = [
		'type', 'gender', 'shot', 'lang'
	];
}
