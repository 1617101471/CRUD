<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    protected $table = 'cobas';

    protected $fillable = ['nama','status'];
    public $timestamps = true;
}
