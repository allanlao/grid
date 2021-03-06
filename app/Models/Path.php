<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  
        'description',
        'latA',
        'lngA',
        'latB',
        'lngB',
        'type',
];

public function nodes(){
    return $this->belongsTo(Node::class);
}

}
