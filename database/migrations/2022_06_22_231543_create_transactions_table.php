<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('sender_id')->unsigned();
            $table->bigInteger('wallet_id')->unsigned();
            $table->bigInteger('receiver_id');
            $table->text('description');
            $table->decimal('charges',10,2);
            $table->decimal('amount',10,2);
            $table->timestamp('transaction_date');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
