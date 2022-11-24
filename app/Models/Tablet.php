<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $table = 'tablets';
    use HasFactory;
    public $guarded = ['id'];
}
