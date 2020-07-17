<?php

namespace App\Http\Controllers;

use App\MenuEntry;

class MenuController extends Controller
{
    public function getMenu()
    {
        $menu = MenuEntry::with('sizes')->get();
        $response = [
            'menu' => $menu
        ];
        return response()->json($response, 200);
    }
}
