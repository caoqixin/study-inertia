<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class SettingController extends Controller
{
    public function index(): ResponseFactory|Response
    {
        return inertia('Settings');
    }
}
