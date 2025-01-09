<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    @include('templates.layouts.head')
</head>

<body>
    @include('templates.layouts.header')
    <main class="main">

        <section id="contact" class="contact section">
          @include('templates.layouts.alertfile.alert')
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">
                  <div class="col-lg-6 ">
                      <div class="row gy-4">

                          <div class="col-lg-12">
                              <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                  data-aos="fade-up" data-aos-delay="200">
                                  <i class="bi bi-geo-alt"></i>
                                  <h3>Address</h3>
                                  <p>A108 Adam Street, New York, NY 535022</p>
                              </div>
                          </div><!-- End Info Item -->

                          <div class="col-md-6">
                              <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                  data-aos="fade-up" data-aos-delay="300">
                                  <i class="bi bi-telephone"></i>
                                  <h3>Call Us</h3>
                                  <p>+1 5589 55488 55</p>
                              </div>
                          </div><!-- End Info Item -->

                          <div class="col-md-6">
                              <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                  data-aos="fade-up" data-aos-delay="400">
                                  <i class="bi bi-envelope"></i>
                                  <h3>Email Us</h3>
                                  <p>info@example.com</p>
                              </div>
                          </div><!-- End Info Item -->

                      </div>
                  </div>

                  <div class="col-lg-6">
                      <form action="{{ url('contacts') }}" method="post" class="php-email-form" data-aos="fade-up"
                          data-aos-delay="500">

                          @csrf
                          <div class="row gy-4">

                              <div class="col-md-6">
                                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                              </div>

                              <div class="col-md-6 ">
                                  <input type="email" class="form-control" name="email" placeholder="Your Email">
                              </div>

                              <div class="col-md-6 ">
                                  <input type="phone" class="form-control" name="phone" placeholder="Your phone">
                              </div>

                              <div class="col-md-12">
                                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                              </div>

                              <div class="col-md-12">
                                  <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                              </div>

                              <div class="col-md-12 text-center">
                                  <button type="submit" name="submit">Send Message</button>
                              </div>

                          </div>
                      </form>
                  </div><!-- End Contact Form -->

              </div>

          </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
              <iframe style="border:0; width: 100%; height: 370px;"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13608.720059468807!2d74.30903606679918!3d31.520355064998226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919038d0be5b889%3A0xc1f2a0f5d4533c34!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1676961268712"
              frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

         
            </div><!-- End Google Maps -->

           
        </section><!-- /Contact Section -->
    </main>
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>

</html>
