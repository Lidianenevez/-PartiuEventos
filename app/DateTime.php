<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DateTime extends Model
{
    protected $table = 'datetime_eventos';

    public $timestamps = false;
    /**
	 * Get the eventos that owns the date time.
	 */
	public function evento()
	{
		return $this->belongsTo('App\Evento', 'fk_evento_id');
	}
}
