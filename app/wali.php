<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $table ='walis';
    protected $fillable=['nama','alamat','umur','pekerjaan'];

    public $timestamps = true;
}
