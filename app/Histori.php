<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    protected $db = 'uasskd';
    protected $table = 'histori';
    protected $fillable =['plain','key','cipher','jenis','metode'];
}
