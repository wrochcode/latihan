<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // protected $table = 'another_table';
    protected $table = 'tasks';
    protected $fillable = ['list'];
    // protected $guarded = [];
}
