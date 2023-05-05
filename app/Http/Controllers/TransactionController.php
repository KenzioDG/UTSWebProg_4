<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function history()
    {
        $user = User::first();
        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('transaction-history', [
            'user' => $user,
            'transactions' => $transactions,
        ]);
    }
}
