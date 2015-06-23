<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {
        $people = [

            'Christian Wansart',
            'Anna Nass',
            'Axel Schweiß',
            'Peter Enis'

        ];
        return view('pages.about')->with([
            'first' => 'Michael',
            'last' => 'Kotzjan',
            'people' => $people
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
