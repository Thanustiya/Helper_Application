<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpersController extends Controller
{
    public function checkHelper(){
        $val = getMessage();
        $userData =getUserData();
        return $userData;
    }
}
