<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){

    	$posts = Auth::user()->posts()->get();

    	return response()->json(['data' => $posts], 200, [], JSON_NUMERIC_CHECK);

    }
}
