<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\Node;
use App\Models\RadioLine;

use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function index()
    {
        
       $nodes = Node::all();
       
       $lines = RadioLine::all();

        return Inertia::render('Nodes/Index',['nodes'=>$nodes, 'lines' =>$lines]);
    }
}
