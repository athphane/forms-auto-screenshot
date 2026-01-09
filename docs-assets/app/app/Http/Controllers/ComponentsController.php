<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function show($component)
    {
        return view("components.{$component}");
    }
}
