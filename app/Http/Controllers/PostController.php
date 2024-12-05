<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function say(){
        return "Hello From Post Controller File";
    } 
    public function welcome(){
        return "Welcome Everyone From Post Controller File";
    } 
}
