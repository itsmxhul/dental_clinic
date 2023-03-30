@include('header')
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Registration </h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Registration </li>
            </ul>
        </div>
    </div>
</section>
<section class="w3l-contact-11 py-5" id="contact">
    <div class="container py-md-5 py-4">
        <h3 class="title-style text-center mb-5"><span>Registration </h3>
        {{-- <div class="row text-center mb-5 pb-lg-5 pb-sm-4">
            <div class="col-lg-3 col-sm-6 contact-info">
                <i class="fas fa-map-marked-alt"></i>
                <h4>Location</h4>
                <p>London, 235 Terry, 10001</p>
            </div>
            <div class="col-lg-3 col-sm-6 contact-info mt-md-0 mt-4">
                <i class="fas fa-headset"></i>
                <h4>Phone</h4>
                <p><a href="tel:+44 987 654 321">+44 123 984 439</a></p>
            </div>
            <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                <i class="fas fa-envelope-open-text"></i>
                <h4>Email</h4>
                <p><a href="mailto:mail@example.com" class="email">mail@example.com</a></p>
            </div>
            <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                <i class="fas fa-user-clock"></i>
                <h4>Working Hours</h4>
                <p>24 Hours</p>
            </div>
        </div> --}}
        <div class="form-inner-cont mx-auto" style="max-width:800px">
            <form action="" method="post" class="signin-form">
                @csrf
                <div class=" align-form-map">
                    <div class="col-sm-6 m-auto form-input">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="col-sm-6 form-input m-auto">
                        <input type="email" name="email" id="email" placeholder="Email" required="" />
                    </div>
                    <div class="col-sm-6 form-input m-auto">
                        <input type="password" name="password" placeholder="Password" class="contact-input">
                    </div>
                    {{-- {{-- <div class="col-sm-6 form-input">
                        <input type="text" name="subject" placeholder="Subject" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="number" name="phone" placeholder="Phone Number" class="contact-input">
                    </div>
                </div>
                <div class="form-input">
                    <textarea placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
                </div> --}}
                <div class="submit text-center">
                    <button type="submit" class="btn btn-style">Registration
                        </button>
                        <a href="login">Login here!</a>
                </div>
            </form>
        </div>
    </div>
</section>

@include('footer')
