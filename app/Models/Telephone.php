<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    protected $table = 'telephones';
    use HasFactory;
    public $guarded = ['id'];
}
