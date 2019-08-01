<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nivel extends Model
{
    protected $table = 'nivel';
    protected $fillable = ['nome'];
    use softDeletes;
    /*
    public function usuario(){
        return $this->hasMany('App\Usuario');
    }
    */
}
