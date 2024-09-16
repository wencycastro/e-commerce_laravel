<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $email = "wcastro@wup.edu.ph";
        $name = "Wency";
        return view('user\profile')
            ->with("email", $email)
            ->with("name", $name);
    }
}
