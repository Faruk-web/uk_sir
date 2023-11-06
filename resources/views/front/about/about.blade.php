@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
<div class="head-banner clearfix">
    <div class="wrapper">
      <h4>About Us</h4>
      <div class="site_map">
        <a href="{{ route('home') }}">Home</a> About Us
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="aboutus wrapper mb30">
    <div class="dark" style="margin-top: 30px;">

      <div class="column12 biograph">
        <div class="about-title">Biography</div>
        <div class="about-sub">company story</div>

        <p>This is <span>Photoshop's</span> version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>

        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. <span>Class aptent taciti</span> sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>

        <p>Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
      </div>

      <div class="clear"></div>

    </div>

  </div>
  <!-- End Aboutus -->

      <!-- Our Team -->
    <div class="our-team-about wrapper mb30">
      <h3 class="main-title">Meet our Team</h3>
      <span class="main-subtitle">our cool & professional staff</span>

        <div class="dark">

            <div class="column3 team-item">

                <a href="#"><div class="team-mates">
                  <img src="{{ asset('front') }}/assets/images/team1.jpg" alt="picture">
                </div></a>

                <div class="team-descr">
                  <h3>Mike William</h3>
                  <h5>developer</h5>
                </div>
                <div class="additionalicons">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>

            </div>
            <!-- End Slide -->

            <div class="column3 team-item">

                <a href="#"><div class="team-mates">
                  <img src="{{ asset('front') }}/assets/images/team2.jpg" alt="picture">
                </div></a>

                <div class="team-descr">
                  <h3>John Doe</h3>
                  <h5>developer</h5>
                </div>
                <div class="additionalicons">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>

            </div>
            <!-- End Slide -->

            <div class="column3 team-item">

                <a href="#"><div class="team-mates">
                  <img src="{{ asset('front') }}/assets/images/team3.jpg" alt="picture">
                </div></a>

                <div class="team-descr">
                  <h3>Vladimir Perzanjak</h3>
                  <h5>developer</h5>
                </div>
                <div class="additionalicons">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>

            </div>
            <!-- End Slide -->

            <div class="column3 team-item">

                <a href="#"><div class="team-mates">
                  <img src="{{ asset('front') }}/assets/images/team4.jpg" alt="picture">
                </div></a>

                <div class="team-descr">
                  <h3>Smith Armstrong</h3>
                  <h5>developer</h5>
                </div>
                <div class="additionalicons">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <!-- End Slide -->
            <div class="clear"></div>
        </div>
        <!-- End Slider2 -->
    </div>
    <!-- Our Team Ends -->
    <div class="fun-facts mb30">
      <h3 class="main-title">Fun Facts</h3>
      <span class="main-subtitle">company stats and achievements</span>
      <div class="our-services">
        <div class="wrapper">
          <div class="dark">
            <div class="column3">
              <div class="service-item">
                <i class="fa fa-flask"></i>
                <h3>956779</h3>
                <span>Lines of code written</span>
              </div>
            </div>
            <div class="column3">
              <div class="service-item">
                <i class="fa fa-coffee"></i>
                <h3>1479</h3>
                <span>Coffe Drinked</span>
              </div>
            </div>
            <div class="column3">
              <div class="service-item">
                <i class="fa fa-users"></i>
                <h3>578</h3>
                <span>Happy Clients</span>
              </div>
            </div>
            <div class="column3">
              <div class="service-item">
                <i class="fa fa-suitcase"></i>
                <h3>2178</h3>
                <span>Projects Done</span>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="info-box">
      <a class="info-toggle" href="#"><i class="fa fa-info-circle"></i></a>
      <div class="info-content">
        <ul>
          <li><i class="fa fa-phone"></i>9930 1234 5679</li>
          <li><i class="fa fa-envelope"></i><a href="#">contact@domain.com</a></li>
          <li><i class="fa fa-home"></i>street address example</li>
        </ul>
      </div>
    </div>
@endsection
