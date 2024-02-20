<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;
 //$fillable: evitamos asignación masiva.   
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    /*
    protected static function boot(){
        parent::boot();
        static::creating(function($project)){
            $project->user_id=auth()->id();
        }
    }
    */

}
