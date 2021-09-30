@extends('layouts.main')

@section('content')
    

<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>Contact <span>me</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">LET'S CONTACT NOW !</h3>
                <p class="open-sans-font mb-3">Jangan ragu untuk menghubungi saya. Saya selalu terbuka untuk mendiskusikan proyek baru, ide kreatif atau peluang untuk menjadi bagian dari visi Anda.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">E-mail</span>bhisma@undiksha.ac.id
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">Whatsapp</span>+6287 8654 88316
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="https://web.facebook.com/profile.php?id=100009321356400"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="instagram"><a title="Instagram" href="https://www.instagram.com/bhismaputran"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="youtube"><a title="Youtube" href="https://www.youtube.com/IMBPNChannel"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="whatsapp"><a title="Whatsapp" href="https://wa.me/6287865488316"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <form class="contactform" method="post" action="http://slimhamdi.net/tunis/dark/php/process-form.php">
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" placeholder="YOUR NAME">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" placeholder="YOUR EMAIL">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" placeholder="YOUR SUBJECT">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                <button type="submit" class="btn btn-contact">Send Message</button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>

@endsection