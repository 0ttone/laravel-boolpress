<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[ 
          'title',
          'content',
          'img'  

    ];
}
//campi che potranno essere popolati x evitare casini con 
//in caso di migration con aggiunta colonne bisogna aggiornarla - 

//MIGLIORE LA SOLUZIONE DI UNA private fuction in PostController che riassuma la definizione
//degli oggetti