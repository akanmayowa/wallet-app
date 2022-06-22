<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wallet;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'description',
        'charges',
        'amount',
        'transaction_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }


}
