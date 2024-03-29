<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dice extends Model
{
	use HasFactory;

	protected $fillable = [
		'place', 'action', 'level', 'lang'
	];

	protected $hidden = [
		'created_at', 'updated_at',
	];
}
