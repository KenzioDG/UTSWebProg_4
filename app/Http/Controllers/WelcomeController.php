<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{

    public function welcome()
    {
        date_default_timezone_set('Asia/Jakarta');
        $name = User::first()->name;
        $loyalty = User::first()->loyalty;
        $hour = date('H');
        if ($hour >= 5 && $hour < 12) {
            $greeting = 'Good morning';
        } else if ($hour >= 12 && $hour <= 18) {
            $greeting = 'Good afternoon';
        } else {
            $greeting = 'Good evening';
        }
        return view('welcome', compact('greeting', 'name', 'loyalty'));
    }
}
