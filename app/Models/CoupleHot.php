<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoupleHot extends Model
{
	use HasFactory;

	protected $fillable = [
		'type', 'gender', 'value', 'shot', 'lang'
	];

	protected $hidden = [
		'created_at', 'updated_at',
	];
}
