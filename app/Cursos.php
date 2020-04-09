<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use Searchable;

    protected $fillable = ['nome', 'descricao', 'autor'];
}
