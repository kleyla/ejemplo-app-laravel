<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public static function getAll()
    {
        $array = ["Tarea 1", "Tarea 2", "Tarea 3", "Tarea 4"];
        return $array;
    }
}
