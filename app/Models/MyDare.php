<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyDare extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id', 'value', 'lang'
	];

	protected $hidden = [
		'created_at', 'updated_at',
	];
}
