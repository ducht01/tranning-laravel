<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeLanguage( Request $request) {
        // dd($request->language);

        $lang = $request->language;
        $language = config('app.locale');
        if ($lang == 'en') {
            $language = 'en';
        }
        if ($lang == 'vi') {
            $language = 'vi';
        }
        $request->session()->put('language',$language);
        
        return redirect()->back();
    }
}
