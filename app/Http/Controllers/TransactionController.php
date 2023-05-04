<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function history()
    {
        // Get the first user from the database
        $user = User::first();

        // Get the transaction data for the user
        $transactions = Transaction::where('user_id', $user->id)->get();

        // Pass the user and transaction data to the view
        return view('transaction-history', [
            'user' => $user,
            'transactions' => $transactions
        ]);
    }
}
