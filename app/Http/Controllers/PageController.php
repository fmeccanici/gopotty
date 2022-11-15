<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function redirect(Request $request, ?string $url = null)
    {
        if ($url === null)
        {
            $url = '';
        } else {
            $url .= '/';
        }

        if ($url === 'guide/')
        {
            $url = 'gids/';
        }

        return view('redirect', [
            'url' => $url
        ]);
    }
}
