<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lagu extends Model
{
 
    protected $table = 'lagu';
    protected $fillable = ['judul_lagu', 'penyanyi', 'lirik_lagu', 'tahun_lagu'];
}
