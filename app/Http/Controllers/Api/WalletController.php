<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WalletResource;
use App\Models\Transaction;

class WalletController extends Controller
{


   // question c
    public function index()
    {
        $wallets = Wallet::all();
        return response()->json($wallets);
    }

    /// question d
    public function usersWalletDetails()
    {
        return WalletResource::collection(Wallet::with('transactions')->paginate(50));
    }


}
