<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class HomeController extends Controller
{
    public function index(): ResponseFactory|Response
    {
        return inertia('Home');
    }
}
