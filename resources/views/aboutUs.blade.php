<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    @include("includes/header")
    <main>
        <section class="aboutus-main">
            <div class="container-fluid mt-0">
                <div class="row">
                    <div class="bannersec">
                        <h1 class="title-abtus mb-5">About us</h1>
                        <img class="mt-5 mb-5" src="assets/images/about-banner.png" />
                    </div>

                    <div class="about-contentsec mt-5 mb-5">
                        <h2 class="mb-5">Introducing<br>
                         Not Just Swipe</h2>
                        <h4 class="mb-5">Where Romance Transcends the Usual,<br>
                         Elevating Every Interaction to an Art Form.</h4>
                        <p class="aboutpara mb-5">Prepare to immerse yourself in a realm where connections are cultivated with care and intention. With Not Just Swipe, each event is thoughtfully curated to ensure you encounter only the most intriguing matches from the crowd. Anticipate discovering someone who captures your interest, with an impressive likelihood of encountering one or more matches at every gathering. It's a promise of unparalleled connections.But Not Just Swipe offers more than just fleeting moments. Our online platform seamlessly integrates with our live events, leveraging state-of-the-art technology to enhance your virtual matches with the magic of real-world chemistry.</p>
                        <div class="know-more">
                            <button type="button" class="btn btn-primary0 about-btn">
                            Know more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include("includes/footer")
    @include("includes/bottom")

    <script src="assets/js/homepage-script.js"></script>
</body>

</html>