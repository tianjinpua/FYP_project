<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scoreNo extends Model
{
    use HasFactory;
    protected $table = 'scoresNo';
    protected $primaryKey = 'id';
    protected $fillable = ['score'];
}