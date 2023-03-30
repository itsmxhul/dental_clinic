@include('header')
<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Contact Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- contact section -->
<section class="w3l-contact-11 py-5" id="contact">
    <div class="container py-md-5 py-4">
        <h3 class="title-style text-center mb-5"><span>Contact </span> Us</h3>
        <div class="row text-center mb-5 pb-lg-5 pb-sm-4">
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
        </div>
        <div class="form-inner-cont mx-auto" style="max-width:800px">
            <form action="" method="post" class="signin-form">
                @csrf
                <div class="row align-form-map">
                    <div class="col-sm-6 form-input">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="email" name="email" id="email" placeholder="Email" required="" />
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="text" name="subject" id="subject" placeholder="Subject" class="contact-input">
                    </div>
                    <div class="col-sm-6 form-input">
                        <input type="number" name="phone" id="phone" placeholder="Phone Number" class="contact-input">
                    </div>
                </div>
                <div class="form-input">
                    <textarea placeholder="Message" id="message" name="message" id="w3lMessage" required=""></textarea>
                </div>
                <div class="submit text-right">
                    <button type="submit" class="btn btn-style">Submit
                            Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- map -->
<div class="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30688732.24452748!2d64.39960623510422!3d20.12640595398467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1678779944118!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe> --}}
</div>
<!-- //contact section -->
@include('footer')
