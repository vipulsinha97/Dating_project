<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Stream</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/agoraVideo/main.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
</head>
<body>
@if(!session()->has('meeting'))
    <input type="text" id="linkname" placeholder="Enter your name">
@endif
<input type="hidden" id="linkUrl" value="{{ url('joinMeeting') }}/{{ $meeting->url }}">
<button id="join-btn" style="display: none;"></button>
<button id="join-btn2">Join Stream</button>
<button id="join-btns" onclick="copyLink()">Copy link</button>

<div id="stream-wrapper" style="height: 100%; display: none;">
    <div id="video-streams"></div>
    <div id="stream-controls">
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
function copyLink() {
    var urlPage = window.location.href;
    var temp = $("<input>");
    $("body").append(temp);
    temp.val(urlPage).select();
    document.execCommand("copy");
    temp.remove();
    $('#join-btns').text('URL COPIED');
}

$('#join-btn2').click(function() {
    var name = $('#linkname').val();
    if (name === '' || name.length < 1) {
        alert("Enter your name");
        return;
    } else {
        saveUserName(name);
        $('#join-btn').click();
        document.getElementById('stream-wrapper').style.display = 'block';
        document.getElementById('stream-controls').style.display = 'flex';
    }
});

function saveUserName(name) {
    var url = "{{ url('saveUserName') }}";
    var random = "{{ session()->get('random_user') }}";
    var urlId = $('#urlId').val();
    $.ajax({
        url: url,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {
            'url': urlId,
            'name': name,
            'random': random
        },
        type: 'post',
        success: function(result) {
            console.log("Name saved successfully");
        }
    });
}
</script>
</body>
</html>
