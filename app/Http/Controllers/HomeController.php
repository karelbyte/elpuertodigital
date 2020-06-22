<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('start');
    }

    public function getQuestion(Request $request){

        $data = $request->all();

        Mail::to($request->input('email'))->send(new ClientMail($data));

        Mail::to('desarrollos@elpuertodigital.com')->send(new DesarrollosMail($data));

        return redirect('/');

    }
}
