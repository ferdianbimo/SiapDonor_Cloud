<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $pageTitle }}</title>
</head>
<body>
    @extends('app')
    @extends('navbar')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/landing.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Welcome to SiapDonor</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Donate Blood, Save Lives!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/group-doctors.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                    <h1 class="display-5 mb-4">We Help Our Clients To Care With Others</h1>
                    <p class="mb-4">We invite you to join our community of donors and supporters. Whether you are a first-time donor or a regular participant,
                        your contribution is invaluable. Together, we can make a significant impact and ensure that blood is available when it is needed most.
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Why Donate</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>Every two seconds, someone needs blood. Donating blood is a simple, selfless act that can save up to three
                                    lives with just one donation. Blood is essential for surgeries, cancer treatment, chronic illnesses, and traumatic injuries.
                                     Your contribution can provide hope and health to patients in critical need.</p>
                                {{-- <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p> --}}
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>At SiapDonor, our mission is to save lives and improve health through voluntary blood donations.
                                    We believe that a single donation can make a profound difference in someone's life. Our goal is to ensure a safe,
                                    sufficient, and sustainable blood supply for those in need.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>We are a dedicated team of healthcare professionals, volunteers, and advocates who are passionate about making a positive
                                    impact in our community. Our organization was founded on the principles of compassion, integrity, and service. With years of
                                    experience in the field, we are committed to providing the highest standards of care and safety for both donors and recipients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

                <h1 class="display-5 mb-5">WHAT WE DO?</h1>
            </div>

            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Blood Drives</h4>
                                    <span>Regularly scheduled blood drives at various locations to make donating easy and accessible.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Donor Support</h4>
                                    <span> Comprehensive support for donors before, during, and after the donation process.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Research and Development</h4>
                                    <span>Ongoing efforts to improve blood donation and transfusion techniques through research.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Procedures</p>
                <h1 class="display-5 mb-5">Know the procedures and preparations for safe blood donation</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Prepare Youself</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Physical Checkup</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Blood Check</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Disease Screening</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/3.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Prepare Yourself for Blood Donation</h3>
                                    <p class="mb-4">Before donating blood, it is a good idea for potential donors to do the following things:</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Get Enough Sleep</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Eat Healthy Food, avoid fatty foods and junk food</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Drink plenty of water before the donation</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/2.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Physical Checkup</h3>
                                    <p class="mb-4">Includes blood pressure, pulse and temperature checks.
                                        This general physical examination is carried out to determine whether your health
                                        condition is fit enough to donate blood. People with low blood pressure are not recommended to donate blood.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/1.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Blood Check</h3>
                                    <p class="mb-4">A small sample of blood is taken from a finger prick and used to check the
                                        hemoglobin level.  If the hemoglobin concentration is within a healthy range, and you have
                                        met all other examination requirements, then the prospective donor can donate blood.</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/4.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Disease Screening</h3>
                                    <p class="mb-4">Blood checks are not only to check hemoglobin levels but also
                                        to screen for infectious diseases. This includes sexually transmitted infections,
                                        a history of hepatitis, including lung disease.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

     <!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p>
            <h1 class="display-5 text-primary mb-5">Exclusive Team</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/iqbal.png" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Rif'ah Iqbali</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/dinda.png" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Dinda Rahma</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/faqih.png" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Faqih Al As Ad</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <img class="img-fluid rounded" src="img/arsya.png" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Arsya Rahma</h4>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5 text-primary">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        I was greatly assisted by SiapDonor when I needed a blood donor for my surgery. Their team was very responsive and helped me find a suitable donor.</p>
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                    <h4>Alice Tan</h4>
                    <span>Recipient</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        I have been a donor at SiapDonor for several years and I feel proud to be able to help save lives by donating my blood regularly.</p>
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                    <h4>Lucas Daniel</h4>
                    <span>Donor</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        I am very pleased with SiapDonor's service. They make the blood donation process easy and convenient. I will definitely recommend it to friends and family.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                    <h4>Elisa Jones</h4>
                    <span>Office Clerk</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        SiapDonor has been instrumental in connecting me with donors during emergencies. Their platform is user-friendly and their support team is exceptional.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-4.jpg" alt="">
                    <h4>Arthur Huang</h4>
                    <span>Teacher</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @extends('footer')
</body>
</html>
