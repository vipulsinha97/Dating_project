<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PasswordResetController extends Controller
{
    public function requestReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        // Generate a unique token
        $token = Str::random(60);

        if ($user)
        {
            // Store in the password_resets table
            User::where('email', $request->email)->update(
                [
                    'remember_token' => Hash::make($token),
                ]
            );

            // Send email with reset link
            $resetLink = url("/reset-password?token=$token&email=" . urlencode($user->email));

            Mail::send('emails.password_reset', ['resetLink' => $resetLink], function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Reset Your Password');
            });

            return back()->with(['success' => 'Password reset link sent to your email.']);
        }
        else
        {
            return back()->with(['fail' => 'Password reset link has not been sent to your email.']);
        }
    }

    public function showResetForm(Request $request)
    {
        return view('resetPassword', ['email' => $request->email, 'token' => $request->token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:password_resets,email',
            'token' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $resetEntry = User::where('email', $request->email)->first();

        if (!$resetEntry || !Hash::check($request->token, $resetEntry->remember_token)) {
            return response()->json(['message' => 'Invalid token'], 400);
        }

        // Update user password
        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Delete the reset token after use
        User::where('email', $request->email)->update(['reset_token' => null]);

        return response()->json(['message' => 'Password reset successful']);
    }
}
