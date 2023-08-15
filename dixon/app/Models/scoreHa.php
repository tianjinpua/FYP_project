<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scoreHa extends Model
{
    use HasFactory;
    protected $table = 'scoresHa';
    protected $primaryKey = 'id';
    protected $fillable = ['score'];
}
