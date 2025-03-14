<?php

namespace App\Http\Controllers;


class ComponentController extends Controller
{
    public function show($component)
    {
        return view("mazer.$component", [
            'title' => ucfirst($component),
            'menu' => true,
            'submenu' => true,
        ]);
    }
}

