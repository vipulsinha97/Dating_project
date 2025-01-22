<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        navLinks.forEach(nav => {
          nav.classList.remove('active');
          nav.querySelector('img').src = nav.getAttribute('data-inactive-src');
        });
        this.classList.add('active');
        this.querySelector('img').src = this.getAttribute('data-active-src');
      });
    });
  });
</script>
<!-- toggle password and eye icons -->
<script>
  document.querySelectorAll('.toggle-password').forEach(item => {
    item.addEventListener('click', function() {
      const input = this.previousElementSibling;
      if (input.type === 'password') {
        input.type = 'text';
        this.innerHTML = '<i class="fas fa-eye" style="color: #A8A9A9;"></i>';
      } else {
        input.type = 'password';
        this.innerHTML = '<i class="fas fa-eye-slash" style="color: #A8A9A9;"></i>';
      }
    });
  });
</script>



<!-- The Modal  Your Trust Our Priority START-->
<div class="modal no-border" id="yourTrust">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bord-none">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body align-center ytop">
        <img class="mb-2" src="{{asset('assets/images/accept.svg')}}" />
        <h4 class="modal-title my-4">Your Trust Our Priority</h4>
        <p class="para-text my-4">By proceeding to create your profile, you agree to our Terms of Service and Privacy policy</p>
        <div class="modalbtnmain">
          <button type="button" class="btn btn-decline" data-bs-dismiss="modal">Decline</button>
          <button type="button" id="submitData1" class="btn btn-accept">Accept</button>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer bord-none">

      </div>
    </div>
  </div>
</div>


<!-- The Modal  Received START-->
<div class="modal no-border" id="receivedModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bord-none">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body align-center ytop">
        <img class="mb-2" src="{{asset('assets/images/rafiki.png')}}" />
        <h4 class="modal-title my-4">Received</h4>
        <p class="para-text my-4">We’ve received your application. We screen each of our applicants to ensure we have the best and genuine profiles. We will call you per the preferred time. After screening, you can pay for the event within a 24 hour window and secure your seat for the event.</p>
        <div class="modalbtnmain">
          <button type="button" id="submitData2" class="btn btn-accept">Accept</button>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer bord-none">

      </div>
    </div>
  </div>
</div>

<!-- The Modal  forget password START-->
<div class="modal no-border" id="forgetPassword">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bord-none">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body align-center ytop">
        <h4 class="modal-title my-4">Forgot Password</h4>
        <div class="mb-4">
          <form action="">
            <div class="input-group bb-1-light0">
              <input type="email" class="form-control email" id="" name="" placeholder="Enter your email" value="">
            </div>
            <div id="" class="error-message"></div>
          </form>
        </div>
        <div class="modalbtnmain">
          <button type="button" id="submitData3" class="btn btn-accept">SUBMIT</button>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer bord-none">

      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script> 
<script>
  //flash data
  setTimeout(function() {
            $('#success').fadeOut('fast');
            $('#success2').fadeOut('fast');
            $('#fail').fadeOut('fast');
            $('#fail2').fadeOut('fast');
        }, 4000);
</script>