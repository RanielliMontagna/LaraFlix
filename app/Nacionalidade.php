<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    protected $table = 'nacionalidades';
    protected $fillable = ['descricao'];
}
