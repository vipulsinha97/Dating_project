<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Just Swipe</title>
    <style>
        * {
  font-family: 'montserrat', sans-serif;
}

body {
  margin: 0;
  padding: 0;
}

.page {
  background: #f1f1f1;
  display: flex;
  flex-wrap: wrap;
}

.col {
  flex: 1;
  height: 100vh;
  position: relative;
}

.countdown-col {
  background: url(assets/images/bg-cs.png) no-repeat center;
  background-size: cover;
}

.time {
  color: #fff;
  text-transform: uppercase;
  width: 90%;
  display: flex;
  justify-content: center;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.time span {
  padding: 0 14px;
  font-size: 10px;
}

.time span div {
  font-size: 40px;
}

.newslatter {
  width: 90%;
}

.newslatter h4 {
  font-style: italic;
  font-size: 12px;
}

.newslatter input, .newslatter button {
  display: block;
  margin: 12px auto;
  width: 100%;
  max-width: 400px;
  box-sizing: border-box;
  padding: 14px 20px;
  border-radius: 30px;
  border: 1px solid #ddd;
  outline: none;
}

.newslatter-button {
  background: linear-gradient(125deg, #3498db, #34495e);
  color: #fff;
  cursor: pointer;
  transition: 0.4s;
}

.newslatter-button:hover {
  opacity: 0.7;
}


@media screen and (max-width: 900px) {
  .col {
    flex: 100%;
  }
}
    </style>
</head>
<body>
<div class="page">
  <div class="countdown-col col">
    <div class="time middle">
      <span><div id="days">12</div> Days</span>
      <span><div id="hours">06</div> Hours</span>
      <span><div id="minutes">35</div> Minutes</span>
      <span><div id="seconds">54</div> Seconds</span>
    </div>
  </div>
  <div class="newsletter-col col">
    <div class="newslatter middle">
      <h2>Not Just Swipe Coming Soon</h2>
      <h4>Subscribe to get notification when we start</h4>
      <form>
        <input type="text" placeholder="Enter Your Email"/>
        <button type="button" class="newslatter-button">Subscribe</button>
      </form>
    </div>
  </div>
</div>
<script>
    let comingDate = new Date('Nov 8, 2024 13:12:00')

let d = document.getElementById('days')
let h = document.getElementById('hours')
let m = document.getElementById('minutes')
let s = document.getElementById('seconds')

let x = setInterval(function() {
  let now = new Date()
  let selisih = comingDate.getTime() - now.getTime()

  let days    = Math.floor(selisih / (1000 * 60 * 60 * 24))
  let hours   = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60))
  let minutes = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60))
  let seconds = Math.floor(selisih % (1000 * 60) / 1000)

  d.innerHTML = getTrueNumber(days)
  h.innerHTML = getTrueNumber(hours)
  m.innerHTML = getTrueNumber(minutes)
  s.innerHTML = getTrueNumber(seconds)

  if (selisih < 0) {
    clearInterval(x)
    d.innerHTML = '00'
    h.innerHTML = '00'
    m.innerHTML = '00'
    s.innerHTML = '00'
  }
}, 1000)

function getTrueNumber(x) {
  if (x < 10) return '0' + x
  else return x
}
</script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
@include("includes/top")
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/homepage-style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Chat Template</title>
    <!-- Bootstrap 5 CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        /* Custom styles for video chat */
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            position: relative;
        }
        .video-feed {
            border: 2px solid #ddd;
            width: 80%;
            height: 100%;
            object-fit: cover;
        }
        .video-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
            display: flex;
            gap: 15px;
        }
        .video-controls button {
            color: white;
            border: none;
            background-color: transparent;
            font-size: 20px;
        }
    </style>
</head>
<body>

    <!-- Video Chat Container -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Video Chat Room</h2>
                <div class="video-container">
                    <!-- Video Feed -->
                    <video id="main-video" class="video-feed" autoplay muted></video>

                    <!-- Controls -->
                    <div class="video-controls">
                        <button id="muteBtn" title="Mute/Unmute"><i class="bi bi-mic"></i></button>
                        <button id="videoBtn" title="Start/Stop Video"><i class="bi bi-camera-video"></i></button>
                        <button id="endCallBtn" title="End Call"><i class="bi bi-phone-slash"></i></button>
                    </div>
                </div>

                <!-- Additional Participants (small video feeds) -->
                <div class="d-flex justify-content-center mt-3">
                    <div class="participant-video">
                        <video id="participant1" class="video-feed" autoplay></video>
                    </div>
                    <div class="participant-video mx-2">
                        <video id="participant2" class="video-feed" autoplay></video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.min.js"></script>

    <script>
        // JavaScript for basic controls (mute, video toggle, and end call)
        const muteBtn = document.getElementById("muteBtn");
        const videoBtn = document.getElementById("videoBtn");
        const endCallBtn = document.getElementById("endCallBtn");
        const mainVideo = document.getElementById("main-video");

        let isMuted = false;
        let isVideoOn = true;

        // Mute/Unmute
        muteBtn.addEventListener("click", () => {
            isMuted = !isMuted;
            mainVideo.muted = isMuted;
            muteBtn.innerHTML = isMuted ? '<i class="bi bi-mic-mute"></i>' : '<i class="bi bi-mic"></i>';
        });

        // Start/Stop Video
        videoBtn.addEventListener("click", () => {
            isVideoOn = !isVideoOn;
            mainVideo.style.display = isVideoOn ? "block" : "none";
            videoBtn.innerHTML = isVideoOn ? '<i class="bi bi-camera-video"></i>' : '<i class="bi bi-camera-off"></i>';
        });

        // End Call
        endCallBtn.addEventListener("click", () => {
            alert("Call Ended");
            // Ideally, stop the video feed here
        });
    </script>
    
    @include("includes/footer")

    @include("includes/bottom")
</body>
</html>
