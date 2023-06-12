<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class LoginController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        return inertia('Auth/Login');
    }
}
