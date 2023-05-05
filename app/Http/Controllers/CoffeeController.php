<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class CoffeeController extends Controller
{
    public function buy(Request $request)
    {
        $coffee = $request->input('coffee');
        $user = User::first();

        $transaction = new Transaction;
        $transaction->user_id = $user->id;
        $transaction->date = date('Y-m-d');
        $transaction->coffee = $coffee;
        $transaction->save();

        // Redirect back to the coffee list page
        return redirect('/coffee-list')->with('success', 'Coffee purchased successfully!');
    }

}
