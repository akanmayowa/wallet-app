<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;


class UserController extends Controller
{


    ///question a
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    ///question b
    public function userWalletTransactionDetails()
    {
        return UserResource::collection(User::with('transactions','wallet')->paginate(50) );
    }



}
