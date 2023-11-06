@extends('front.master')
@section('title')
    Contact us
@endsection
@section('body')
 <!--end header-->
 <div class="head-banner clearfix">
    <div class="wrapper">
      <h4>Contact Us</h4>
      <div class="site_map">
        <a href="{{ route('home') }}">Home</a> Contact Us
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="contact-content">
    <!-- End Map -->
    <div class="wrapper ">
      <div class="dark" style="margin-top: 80px;">
        <div class="contact-info column6">

          <h3 class="main-title">Contact Info</h3>
          <span class="main-subtitle">our email, phone and street address</span>

          <p>This is <span>Photoshop's</span> version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
          <p>Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.vulputate cursus a sit</p>

          <div class="post-meta">

            <div class="post-home">
              <i class="fa fa-home"></i>
              lorem ipsum street
            </div>

            <div class="post-phone">
              <i class="fa fa-phone"></i>
              +399 (500) 321 9548
            </div>

            <div class="post-mail">
              <a href="#"><i class="fa fa-envelope"></i>
              info@domain.com
              </a>
            </div>

          </div>

        </div>

        <div class="contact-box column6">
          <form id="contact-form">
            <h3 class="main-title">Get in touch</h3>
            <span class="main-subtitle">send us a message</span>
              <div class="dark">
                <div class="text-fields column4">
                  <div class="float-input">
                    <input name="name" id="name" type="text" placeholder="Name">
                    <span><i class="fa fa-user"></i></span>
                  </div>
                  <div class="float-input">
                    <input name="mail" id="mail" type="text" placeholder="e-mail">
                    <span><i class="fa fa-envelope-o"></i></span>
                  </div>
                  <div class="float-input">
                    <input name="website" id="website" type="text" placeholder="website">
                    <span><i class="fa fa-link"></i></span>
                  </div>
                </div>

                <div class="submit-area column8">
                  <textarea name="comment" id="comment" placeholder="Message"></textarea>
                  <input type="submit" id="submit_contact" class="main-button" value="Send">
                  <div id="msg" class="message"></div>
                </div>
              </div>
          </form>
        </div>
        <div class="clear"></div>
      </div>
    </div>

  </div>
  <!-- End Contact Content -->

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
