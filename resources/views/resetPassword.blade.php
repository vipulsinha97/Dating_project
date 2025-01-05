<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    @include("includes/top")
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    @include("includes/header")
    <main>
        <section class="resetpass-main my-5">
            <div class="container-fluid mt-0">
                <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <h1 class="title-abtus mb-5">Reset Password</h1>
                        <form action="">
                            <div class="mb-4">
                                <div class="input-group bb-1-light0">
                                    <input type="password" class="form-control newpass" id="" name="" placeholder="Enter new password">
                                </div>
                                <div id="error-newpass" class="error-message"></div>
                            </div>

                            <div class="mb-4">
                                <div class="input-group bb-1-light0">
                                    <input type="password" class="form-control forgetconfirmpass" id="" name="" placeholder="Confirm password">
                                </div>
                                <lable id="message"></lable>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </section>
    </main>

    @include("includes/footer")
    @include("includes/bottom")

    <script src="assets/js/homepage-script.js"></script>
</body>

</html>