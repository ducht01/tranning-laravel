<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function avatar()
    {
        return view('avatar');
    }

    public function post(Request $request )
    {
        Cookie::queue('name', 'Lê Chí Huy', 5);

        echo $request->cookie('name');

        // $value = $request->cookie('username');
        // dd($value);
        // return back()->withInput();

        // $request->flashOnly(['username', 'email']);
        // return $request->input('user.name');
        // dump($request->query('id'));
        // dump($request->input('products.*.name'));
        // dd($request->products);
    }

    public function process_avartar( Request $request)
    {
        dd($request->all());
    }

}
