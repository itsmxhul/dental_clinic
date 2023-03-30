@include('header')
<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Appointment</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Appointment</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<section class="w3l-content-sec py-5">
    <div class="container py-md-5 py-4">
        <div class="form-content ml-sm-left mx-auto">
            <h3 class="title-style text-center mb-5">Make an <span>Appointment</span></h3>
            <form action="" method="post">
                @csrf
                <div class="row mb-1">
                    <div class="col-md-6 mb-4">
                        <label for="inputtextname" class="form-label">Your Name</label>
                        <input type="text" name="name"  id="name" placeholder="Full Name" required="">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="inputtextnumber" class="form-label">Your Phone Number</label>
                        <input type="number" name="phone" id="phone" placeholder="Contact Number" required="">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6 mb-4">
                        <label for="inputtextnumber"  class="form-label">Your Available Services</label>
                        <select class="form-select" name="services" id="services" aria-label="Default select example">
                                <option selected="">Select</option>
                                <option value="Complete Whitening Pack">Complete Whitening Pack</option>
                                <option value="Sedation Dentistry">Sedation Dentistry</option>
                                <option value="Dental Cleaning">Dental Cleaning</option>
                                <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                <option value="Fissure Sealants">Fissure Sealants</option>
                                <option value="Cleaning with Air Flow">Cleaning with Air Flow</option>
                                <option value="Aligning the Teeth">Aligning the Teeth</option>
                                <option value="Child’s First Dental Visit">Child’s First Dental Visit</option>
                                <option value="Another">Another</option>
                            </select>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="inputtextnumber" class="form-label">Select Doctor</label>
                        <select class="form-select" name="doctors" id="doctors" aria-label="Default select example">
                                <option selected="">Select</option>
                                <option value="Dr. John Doe">Dr. John Doe</option>
                                <option value="Dr. Martin Ker">Dr. Martin Ker</option>
                                <option value="Dr. Alexander">Dr. Alexander</option>
                                <option value="Dr. Eliz Wilson">Dr. Eliz Wilson</option>
                                <option value="Other">Other</option>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="inputtextnumber" class="form-label">Select Date</label>
                        <input type="date" name="date" id="date" required="">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="inputtextnumber" class="form-label">Select Time</label>
                        <input type="time" name="time" id="time" required="">
                    </div>
                </div>
                <div class="text-end">
                    <button class="btn btn-style mt-sm-3">Book Appointment</button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('footer')
