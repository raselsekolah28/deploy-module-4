<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::paginate(10);

        return view("dashboard.transactions.index", compact("transactions"));
    }

    public function detail($id) {
        $transaction = Transaction::find($id);

        return view("dashboard.transactions.detail", compact("transaction"));
    }
}
