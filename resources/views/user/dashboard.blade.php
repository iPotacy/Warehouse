@extends('user.index')
@section('user')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome</h2>
                <p class="animate__animated animate__fadeInUp">Optimize all your item for good.</p>
                <a href="#team" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Items</h2>
                <p class="animate__animated animate__fadeInUp">Check all the available items</p>
                <a href="{{ url('/view') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Go</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Record</h2>
                <p class="animate__animated animate__fadeInUp">See the record of transaction items</p>
                <a href="{{ url('/record') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Go</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </section><!-- End Hero -->
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p class="text-black">This project created by MSIB Batch 5 Nurul Fikri Cipta Inovasi Student By Group 2 Fathan Mubin.</p>
    </div>

    <div class="row">
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="member">
          <img src="{{ asset('backend/assets/img/Nata.jpg') }}" class="object-fit-cover border-rounded" alt="">
          <h4>Nata</h4>
          <p>Front End</p>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="member">
            <img src="{{ asset('backend/assets/img/Mahez.jpg') }}" class="object-fit-cover border-rounded" alt="">
            <h4>Mahez</h4>
            <p>PM & Backend</p>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
          <div class="member">
              <img src="{{ asset('backend/assets/img/Qonita.jpg') }}" class="object-fit-cover border-rounded" alt="">
              <h4>Qonita</h4>
              <p>Front End</p>
          </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
          <div class="member">
              <img src="{{ asset('backend/assets/img/Tari.jpg') }}" class="object-fit-cover border-rounded" alt="">
              <h4>Tari</h4>
              <p>Documentation</p>
          </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
          <div class="member">
              <img src="{{ asset('backend/assets/img/team-1.jpg') }} " class="object-fit-cover border-rounded" alt="">
              <h4>Ulum</h4>
              <p>Documentation</p>
          </div>
      </div>       
    </div>

  </div>
</section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Found a problem? Contact Us!</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name" class="text-black">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name" class="text-black">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name" class="text-black">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group mt-3">
              <label for="name" class="text-black">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
</section><!-- End Contact Section -->
@endsection