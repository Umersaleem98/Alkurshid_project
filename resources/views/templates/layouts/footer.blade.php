
<footer id="footer" class="footer light-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-6 footer-about">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('templates/assets/img/logo.png') }}" alt="">
      </a>
      <div class="footer-contact pt-3">
        {{-- <p>A108 Adam Street</p>
        <p>New York, NY 535022</p> --}}
        <p class="mt-3"><strong>Phone:</strong> <span>+92 3228023744</span></p>
        <p><strong>Email:</strong> <span>info@alkhurshiddiagnostics.com</span></p>
      </div>
     
    </div>

    <div class="col-lg-3 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('about')}}">About us</a></li>
        <li><a href="{{url('services')}}">Services</a></li>
        <li><a href="{{url('doctors')}}">Doctors</a></li>
        <li><a href="{{url('career')}}">Career</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-3 footer-links">
      <h4>Social Links</h4>
      <div class="social-links d-flex mt-4">
          <a href="#" target="_blank"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/share/18qwh8bmhJ/?mibextid=qi2Omg" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/mshafique249?igsh=MWNpejVyMmdlemQxcA==" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
      </div>
  </div>
  

   

  </div>
</div>

<div class="container copyright text-center mt-2">
 
 
</div>

</footer>