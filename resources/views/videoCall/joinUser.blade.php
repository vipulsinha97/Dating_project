<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Stream</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/agoraVideo/main.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
</head>
<style>
    .hidden {
    display: none;
}
</style>
<body>
@if(!session()->has('meeting'))
    <input type="text" id="linkname" placeholder="Enter your name">
@endif
<input type="hidden" id="linkUrl" value="{{ url('joinMeeting') }}/{{ $meeting->url }}">

<button id="join-btn2">Join Stream</button>
<button id="join-btns" onclick="copyLink()">Copy link</button>

<div id="stream-wrapper" class="hidden">
    <div id="video-streams"></div>
    <div id="stream-controls" class="hidden">
        <button id="leave-btn">Leave Stream</button>
        <button id="mic-btn">Mic On</button>
        <button id="camera-btn">Camera On</button>
    </div>
</div>

<input id="appid" type="hidden" value="{{ $meeting->app_id }}" readonly>
<input id="token" type="hidden" value="{{ $meeting->token }}" readonly>
<input id="channel" type="hidden" value="{{ $meeting->channel }}" readonly>
<input id="urlId" type="hidden" value="{{ $meeting->url }}" readonly>

<script src="{{ asset('assets/agoraVideo/AgoraRTC_N-4.7.3.js') }}"></script>
<script src="{{ asset('assets/agoraVideo/main.js') }}"></script>
<script>
$(document).ready(function () {
    // Function to copy the meeting link
    function copyLink() {
        const urlPage = window.location.href;
        const tempInput = $('<input>');
        $('body').append(tempInput);
        tempInput.val(urlPage).select();
        document.execCommand('copy');
        tempInput.remove();
        $('#join-btns').text('URL COPIED').prop('disabled', true);
    }

    // Event listener for the "Copy Link" button
    $('#join-btns').click(copyLink);

    // Join Stream button logic
    $('#join-btn2').click(function () {
        const name = $('#linkname').val().trim();

        if (!name) {
            alert('Please enter your name');
            return;
        }

        saveUserName(name);
        $('#stream-wrapper').removeClass('hidden');
        $('#stream-controls').removeClass('hidden');
    });

    // Function to save the user's name
    function saveUserName(name) {
        const url = "{{ url('saveUserName') }}";
        const random = "{{ session()->get('random_user') }}";
        const urlId = $('#urlId').val();

        $.ajax({
            url: url,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                url: urlId,
                name: name,
                random: random
            },
            type: 'POST',
            success: function (result) {
                console.log('Name saved successfully:', result);
            },
            error: function (xhr, status, error) {
                console.error('Failed to save name:', error);
            }
        });
    }
});
</script>
</body>
</html>