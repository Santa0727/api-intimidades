<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftRate extends Model
{
	use HasFactory;

	protected $fillable = [
		'soft_id', 'rate'
	];
}
