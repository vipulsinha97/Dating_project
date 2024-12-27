<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;
use App\Models\User;

class UserController extends Controller
{

    //Function to approve the user

    public function approveUser($id)
    {
        $user = User::where('id', $id)->first();
        $user->status = 'activate';
        $user->save();

        return redirect('/admin/dashboard/pending-request');
    }

    // Function to disapprove the user

    public function disapproveUser($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect('/admin/dashboard/pending-request');
    }
}
