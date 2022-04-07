<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $fillable = [
         'name',
         'type',
         'description',
         'location',
         'lat',
         'long',
         'status',
         


    ];
}
