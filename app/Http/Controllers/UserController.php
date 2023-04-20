<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function show(Request $request) {
        return Inertia::render('User/Show', ['user' => [
            'name' => 'Tom',
            'page' => 'Show'
        ]]);
    }
}
