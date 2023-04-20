<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index(Request $request) {
        return Inertia::render('Pages/User/Show.vue', ['user' => [
            'name' => 'Tom',
            'page' => 'Show'
        ]]);
    }
}
