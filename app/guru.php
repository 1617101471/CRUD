<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table='gurus';
    protected $fillable=['nama','mata_pelajaran'];

    public $timestamps = true;
}
