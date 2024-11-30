<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\MeetingEntry;
use App\Models\UserMeeting;

class MeetingController extends Controller
{
    // Create or enter meeting frontend page
    public function meetingUser()
    {
        return view('videoCall/createMeeting');
    }

    // Meeting create functionality
    public function createMeeting()
    {
        $uid = rand(11111, 99999);
        $name = 'agora' . rand(1111, 9999);
        $meetingData = createAgoraProject($name);

        $meetingInfo = new UserMeeting();
        $meetingInfo->user_id = Auth::user()->id;
        $meetingInfo->app_id = $meetingData->project->vendor_key;
        $meetingInfo->appCertificate = $meetingData->project->sign_key;
        $meetingInfo->channel = $meetingData->project->name;
        $meetingInfo->uid = $uid;
        $meetingInfo->save();

        $token = createToken($meetingData->project->vendor_key, $meetingData->project->sign_key, $meetingData->project->name);

        $meetingTokenData = UserMeeting::where('uid', $uid)->first();
        $meetingTokenData->token = $token;
        $meetingTokenData->url = generateRandomString();
        $meetingTokenData->save();

        if (Auth::user()->id == $meetingTokenData->user_id) {
            Session::put('meeting', $meetingTokenData->url);
        }

        return redirect('joinMeeting/' . $meetingTokenData->url);
    }

    public function joinMeeting($url = '')
    {
        $meeting = UserMeeting::where('url', $url)->first();

        if (isset($meeting->id)) {
            $meeting->app_id = trim($meeting->app_id);
            $meeting->appCertificate = trim($meeting->appCertificate);
            $meeting->channel = trim($meeting->channel);
            $meeting->token = trim($meeting->token);

            if (!Auth::user()) {
                $random_user = rand(111111, 999999);
                Session::put('random_user', $random_user);
                $this->createEntry($meeting->user_id, $random_user, $meeting->url, $meeting->channel);
            } else {
                $this->createEntry($meeting->user_id, Auth::user()->id, $meeting->url, $meeting->channel);
                Session::put('random_user', Auth::user()->id);
            }

            return view('videoCall.joinUser', get_defined_vars());
        } else {
            return response("Meeting does not exist", 404);
        }
    }

    public function createEntry($user_id, $random_user, $url, $channel)
    {
        $entry = new MeetingEntry();
        $entry->user_id = $user_id;
        $entry->random_user = $random_user;
        $entry->url = $url;
        $entry->status = 0;
        $entry->channel = $channel;
        $entry->save();
    }

    public function saveUserName(Request $request)
    {
        $saveName = MeetingEntry::where(['random_user' => $request->random, 'url' => $request->url])->first();
        $saveName->name = $request->name;
        $saveName->status = 1;
        $saveName->save();
    }
}
