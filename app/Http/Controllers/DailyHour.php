<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyHour extends Controller
{
    /**
    * Purpose of the function
    *
    * @param Type $var var explanation
    */
    public function edit(Request $request)
    {
        dd($request);
        return 'hola desde edit';
    }

    /**
    * Purpose of the function
    *
    * @param Type $var var explanation
    */
    public function store()
    {
        return 'hola desde store';
    }
}
