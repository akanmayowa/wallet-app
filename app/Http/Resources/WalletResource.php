<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
{

    public function toArray($request)
    {
         return [

                    'id' => $this->id,
                    'name' => $this->name,
                    'minimum_balance' => $this->minimum_balance,
                    'interest_rate' => $this->interest_rate,
                    'user_id' => $this->user_id,
                    'wallet_id' => $this->wallet_id,
                    'sender_id' => $this->sender_id,
                    'receiver_id' => $this->receiver_id,
                    'description' => $this->description,
                    'charges' => $this->charges,
                    'amount'=> $this->amount,
                    'transaction_date' => (string) $this->transaction_date,

                ];
    }
}
