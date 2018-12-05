<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	protected $table = 'evento';

	/**
	 * Get the post that owns the comment.
	 */
	public function user()
	{
		return $this->belongsTo('App\User', 'fk_user_id');
	}

	/**
	 * Get the post that owns the comment.
	 */
	public function city()
	{
		return $this->belongsTo('App\Cidade', 'cidade');
	}
}
