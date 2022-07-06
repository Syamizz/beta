<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkaunController extends Controller
{
    public function pelayarAkaun()
    {
        return view('akaun.pelayarAkaun');
    }
}
