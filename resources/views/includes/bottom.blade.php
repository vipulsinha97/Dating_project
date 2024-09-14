<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="{{asset('assets/js/jquery-3.5.1.slim.min.js')}}"></script> -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
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
<script>
    document.querySelectorAll('.toggle-password').forEach(item => {
        item.addEventListener('click', function() {
            const input = this.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                this.innerHTML = '<img src="{{asset('assets/images/mage_eye-off.svg')}}" />';
            } else {
                input.type = 'password';
                this.innerHTML = '<img src="{{asset('assets/images/ion_mail-outline.svg')}}" />';
            }
        });
    });
</script>