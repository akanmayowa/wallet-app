<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
        ///question e
        public function walletCounter()
        {
            $wallet_data = [
                    'users_counter' => User::select('id')->get()->count(),
                    'wallets_counter' => Wallet::select('id')->get()->count(),
                    'total_wallet_balance' => Transaction::select('amount')->get()->sum(),
                    'total_transactions_volume' => Transaction::select('id')->get()->count(),
            ];
            return response()->json($wallet_data);
        }


        //question f
        public function TransferFunds(Request $request)
        {
            $request->validate([
                'name' => 'required|max:255',
                'sender_id' => 'required|integer|min:1',
                'receiver_id' => 'required|integer|min:1',
                'description' =>'required|string|max:255',
                'charges' => 'required|numeric',
                'amount' => 'required|numeric',
                'transaction_date' => 'required|date',
                'wallet_id' => 'required|integer|min:1',
              ]);
              $transafer_fund_data = Transaction::create($request->all());
              return response()->json(["success" => true, "message" => "Fund Transfer successfully !","data" => $transafer_fund_data], 201);
        }
  }
