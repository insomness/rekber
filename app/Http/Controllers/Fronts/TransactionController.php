<?php

namespace App\Http\Controllers\Fronts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('fronts.transactions.index');
    }
}
