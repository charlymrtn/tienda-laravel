<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'description', 'price'
    ];

    public static $rules = [
        'description' => 'required|min:5|max:100',
        'price' => 'required|numeric|min:1|max:1000'
    ];
    public static $messages = [
        'description.required' => 'la descripción es requerida.',
        'price.required' => 'el precio es requerido.',
        'description.min' => 'la descripción mínima es de 5 carácteres.',
        'description.max' => 'la descripción máxima es de 100 carácteres.',
        'price.min' => 'el precio mínimo es de 1 peso.',
        'price.max' => 'el precio máximo es de 1000 pesos.',
    ];

    protected $dates = ['created_at','updated_at'];
}
