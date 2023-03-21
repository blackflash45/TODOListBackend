<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTodo extends Model
{
    public $table = "addtodo";
    protected $fillable = [
        'Addtodo','startTime','endTime'
    ];
    use HasFactory;
}
