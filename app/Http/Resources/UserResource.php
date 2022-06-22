<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'email' => $this->email,
            'bvn_number'=>$this->description,
            'nim' => $this->nim,
            'address' => $this->address,
            'sex' => $this->sex,
            'phone_number' => $this->phone_number,
            'created_at' => (string) $this->created_at,
            'minimum_balance' => $this->minimum_balance,
            'interest_rate' => $this->interest_rate,
            'wallet_id' => $this->wallet_id,
            'receiver_id' => $this->receiver_id,
            'description' => $this->description,
            'charges'=> $this->charges,
            'amount' => $this->amount
        ];
    }
}
