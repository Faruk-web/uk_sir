@extends('front.master')

@section('title')
    Home
@endsection
@section('body')
<!-- Slider -->
<div class="slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner" id="intro">
            <ul>
                <!-- THE FIRST SLIDE -->
                <li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                <img src="{{ asset('front') }}/assets/images/uk/slide-1.webp" data-fullwidthcentering="on" alt="slide">
                <!-- THE CAPTIONS IN THIS SLDIE -->
                <div class="caption lfl stl" data-x="20" data-y="140" data-speed="100" data-start="1600" data-easing="easeOutExpo">
                    <h4>Welcome to our Website</h4>
                    <p>
                        we are the Architects
                    </p>
                    <a href="#"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                </div>
                <div class="caption lfl" data-x="380" data-y="92" data-speed="300" data-start="2000" data-easing="easeOutExpo">
                    <img src="{{ asset('front') }}/assets/images/sketch.png" alt="Image">
                </div>
                <div class="caption lfl" data-x="750" data-y="0" data-speed="300" data-start="2400" data-easing="easeOutExpo">
                    <img src="{{ asset('front') }}/assets/images/compas.png" alt="Image">
                </div>
                <div class="caption lfl" data-x="920" data-y="360" data-speed="300" data-start="2800" data-easing="easeOutExpo">
                    <img src="{{ asset('front') }}/assets/images/pen.png" alt="Image 6">
                </div>
                </li>
                <!-- THE FIRST SLIDE -->
                <li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="{{ asset('front') }}/assets/images/uk/slide-3.webp" data-fullwidthcentering="on" alt="slide">
                    <!-- THE CAPTIONS IN THIS SLDIE -->
                    <div class="caption lfl stl" data-x="20" data-y="140" data-speed="100" data-start="1600" data-easing="easeOutExpo">
                        <h4>Welcome to our Website</h4>
                        <p>
                            we are the Architects
                        </p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                    </div>
                    <div class="caption lfl" data-x="380" data-y="92" data-speed="300" data-start="2000" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/sketch.png" alt="Image">
                    </div>
                    <div class="caption lfl" data-x="750" data-y="0" data-speed="300" data-start="2400" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/compas.png" alt="Image">
                    </div>
                    <div class="caption lfl" data-x="920" data-y="360" data-speed="300" data-start="2800" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/pen.png" alt="Image 6">
                    </div>
                    </li>
                    <!-- THE FIRST SLIDE -->
                <li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="{{ asset('front') }}/assets/images/uk/slide-4.webp" data-fullwidthcentering="on" alt="slide">
                    <!-- THE CAPTIONS IN THIS SLDIE -->
                    <div class="caption lfl stl" data-x="20" data-y="140" data-speed="100" data-start="1600" data-easing="easeOutExpo">
                        <h4>Welcome to our Website</h4>
                        <p>
                            we are the Architects
                        </p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                    </div>
                    <div class="caption lfl" data-x="380" data-y="92" data-speed="300" data-start="2000" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/sketch.png" alt="Image">
                    </div>
                    <div class="caption lfl" data-x="750" data-y="0" data-speed="300" data-start="2400" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/compas.png" alt="Image">
                    </div>
                    <div class="caption lfl" data-x="920" data-y="360" data-speed="300" data-start="2800" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/pen.png" alt="Image 6">
                    </div>
                    </li>
                    <!-- THE FIRST SLIDE -->
                <li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="{{ asset('front') }}/assets/images/uk/slide-5.webp" data-fullwidthcentering="on" alt="slide">
                    <!-- THE CAPTIONS IN THIS SLDIE -->
                    <div class="caption lfl stl" data-x="20" data-y="140" data-speed="100" data-start="1600" data-easing="easeOutExpo">
                        <h4>Welcome to our Website</h4>
                        <p>
                            we are the Architects
                        </p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                    </div>
                    <div class="caption lfl" data-x="380" data-y="92" data-speed="300" data-start="2000" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/sketch.png" alt="Image">
                    </div>
                    <div class="caption lfl" data-x="750" data-y="0" data-speed="300" data-start="2400" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/compas.png" alt="Image">
                    </div>
                    <div class="caption lfl" data-x="920" data-y="360" data-speed="300" data-start="2800" data-easing="easeOutExpo">
                        <img src="{{ asset('front') }}/assets/images/pen.png" alt="Image 6">
                    </div>
                    </li>
                <!-- SECOND SLIDE -->
                    <li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300">
                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                <img src="{{ asset('front') }}/assets/images/uk/slide-2.webp" data-fullwidthcentering="on" alt="slide">
                <!-- THE CAPTIONS IN THIS SLDIE -->
                <div class="caption large_text lft" data-x="center" data-y="122" data-speed="600" data-start="1200" data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine">
                    Creative Architecture Template for your <span>Company</span>
                </div>
                <div class="caption big_white lfb stt" data-x="center" data-y="172" data-speed="500" data-start="1500" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">
                    Well Organised Layers
                </div>
                <div class="caption lfl" data-x="372" data-y="237" data-speed="600" data-start="1800" data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine">
                    <img src="{{ asset('front') }}/assets/images/revolution/icon1.png" alt="Image 1">
                </div>
                <div class="caption modern_small_text_dark lfb" data-x="382" data-y="370" data-speed="600" data-start="2000" data-easing="easeOutExpo" data-end="7350" data-endspeed="300" data-endeasing="easeInSine">
                    update <br>
                     notification
                </div>
                <div class="caption lft" data-x="482" data-y="237" data-speed="600" data-start="2300" data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine">
                    <img src="{{ asset('front') }}/assets/images/revolution/icon2.png" alt="Image 2">
                </div>
                <div class="caption modern_small_text_dark lfb" data-x="492" data-y="370" data-speed="600" data-start="2500" data-easing="easeOutExpo" data-end="7450" data-endspeed="300" data-endeasing="easeInSine">
                    typography <br>
                     settings
                </div>
                <div class="caption lft" data-x="592" data-y="237" data-speed="600" data-start="2800" data-easing="easeOutExpo" data-end="7500" data-endspeed="300" data-endeasing="easeInSine">
                    <img src="{{ asset('front') }}/assets/images/revolution/icon3.png" alt="Image 3">
                </div>
                <div class="caption modern_small_text_dark lfb" data-x="610" data-y="370" data-speed="600" data-start="3000" data-easing="easeOutExpo" data-end="7550" data-endspeed="300" data-endeasing="easeInSine">
                    unlimited <br>
                    portfolios
                </div>
                <div class="caption lfr" data-x="702" data-y="237" data-speed="600" data-start="3300" data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine">
                    <img src="{{ asset('front') }}/assets/images/revolution/icon4.png" alt="Image 4">
                </div>
                <div class="caption modern_small_text_dark lfb" data-x="705" data-y="370" data-speed="600" data-start="3500" data-easing="easeOutExpo" data-end="7650" data-endspeed="300" data-endeasing="easeInSine">
                    extended <br>
                    documentation
                </div>
                </li>

                <!-- THIRD SLIDE -->
                <li data-transition="boxfade" data-slotamount="10" data-masterspeed="300">
                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                <img src="{{ asset('front') }}/assets/images/slide2.jpg" data-fullwidthcentering="on" alt="slide">
                <!-- THE CAPTIONS IN THIS SLDIE -->
                <!-- captions -->
                <div class="tp-caption big text-shadow pl0 sfr" data-x="-20" data-y="120" data-speed="1000" data-start="1000" data-easing="easeOutBack">
                     Youtube &amp; Vimeo Support
                </div>
                <div class="tp-caption small white sfl" data-x="0" data-y="215" data-speed="1000" data-start="1500" data-easing="easeOutBack">
                     Put any custom background
                </div>
                <div class="caption lfl stl" data-x="0" data-y="310" data-speed="100" data-start="1900" data-easing="easeOutExpo">
                    <a href="#"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                </div>
                <div class="tp-caption video sfr" data-x="620" data-y="120" data-speed="1000" data-start="1000" data-easing="easeOutBack">
                    <iframe src='http://www.youtube.com/embed/YE7VzlLtp-4?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300'>
                    </iframe>
                </div>
                </li>
            </ul>
            <div class="tp-bannertimer">
            </div>
        </div>
    </div>
</div>
<!-- End SLider -->
<h3 class="main-title" style="margin-top:50px">HOW TV MOUNT MATE WORKS</h3>
<div class="wrapper dark features mb20">
    <div class="column4">
        <div class="feature-box">
            <div class="feat-text">
                <h4>Choose your convenient</h4>
                <p>
                    Select your convenient day and time for Mounting TV.
                </p>
            </div>
            <i> <img style="height: 74px;" src="{{ asset('front') }}/assets/images/uk/icon1.webp"></i>

        </div>
    </div>
    <div class="column4">
        <div class="feature-box">
            <div class="feat-text">
                <h4>Instant Appointment</h4>
                <p>
                    We’ll acknowledge your service requirements and confirm your tv mount appointment.
                </p>
            </div>
            <i> <img style="height: 74px;" src="{{ asset('front') }}/assets/images/uk/icon2.webp"></i>
        </div>
    </div>
    <div class="column4">
        <div class="feature-box">
            <div class="feat-text">
                <h4>Your TV mounter arrives</h4>
                <p>
                    An experienced, fully-equipped TV Mounter will show up on appointed time at your doorstep!
                </p>
            </div>
            <i> <img style="height: 74px;" src="{{ asset('front') }}/assets/images/uk/icon3.webp"></i>
        </div>
    </div>
    <div class="clear">
    </div>
</div>
<div class="recent-work">
    <h3 class="main-title">Recent Work</h3>
    <span class="main-subtitle">some handpicked projects we’ve done</span>
    <div class="list_carousel responsive">
        <ul id="foo4">
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent1.jpg"/>
                <div class="mask">
                    <a href="images/recent1.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent2.jpg"/>
                <div class="mask">
                    <a href="images/recent2.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent3.jpg"/>
                <div class="mask">
                    <a href="images/recent3.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent4.jpg"/>
                <div class="mask">
                    <a href="images/recent4.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent5.jpg"/>
                <div class="mask">
                    <a href="images/recent5.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent1.jpg"/>
                <div class="mask">
                    <a href="images/recent1.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent2.jpg"/>
                <div class="mask">
                    <a href="images/recent2.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent3.jpg"/>
                <div class="mask">
                    <a href="images/recent3.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent4.jpg"/>
                <div class="mask">
                    <a href="images/recent4.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
            <li>
            <div class="view view-sixth">
                <img src="{{ asset('front') }}/assets/images/recent5.jpg"/>
                <div class="mask">
                    <a href="images/recent5.jpg" data-fancybox-group="group"><i class="fa fa-search"></i></a>
                    <a href="#"><i class="fa fa-file-o"></i></a>
                </div>
            </div>
            <div class="desc">
                <h4>Architecture Design</h4>
                <span>plans, buildings</span>
            </div>
            </li>
        </ul>
        <div class="clearfix">
        </div>
        <a id="prev3" class="prev" href="#">&lt;</a>
        <a id="next3" class="next" href="#">&gt;</a>
    </div>
    <!-- End List Carousel -->
</div>
<!-- End Recent Works -->
<!-- Features2 -->
<div class="whychoose">
    <div class="wrapper">
        <h3 class="main-title">Why Choose Metrical Theme ?</h3>
        <span class="main-subtitle">some reasons why you should choose <span>Metrical</span> for your next project</span>
        <div class="dark">
            <div class="column3">
                <img src="{{ asset('front') }}/assets/images/choose.jpg" alt="">
            </div>
            <div class="column9">
                <div class="whychose-box">
                    <div class="w-icons clearfix">
                        <i class="fa fa-cogs"></i>
                        <p>
                            Font-Awesome Icons
                        </p>
                    </div>
                    <div class="w-descr">
                        <p>
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel
                        </p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="whychose-box">
                    <div class="w-icons clearfix">
                        <i class="fa fa-envelope-o"></i>
                        <p>
                            Working Contact form
                        </p>
                    </div>
                    <div class="w-descr">
                        <p>
                            Quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                        </p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="whychose-box">
                    <div class="w-icons clearfix">
                        <i class="fa fa-html5"></i>
                        <p>
                            Friendly Code
                        </p>
                    </div>
                    <div class="w-descr">
                        <p>
                            Bibendum auctor, nisi elit consequat ipsum, nec sagittis
                        </p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <!-- End Wrapper -->
</div>
<!-- End Features2 -->
<!--Testimonials Start-->
<div class="testimonials clearfix">
    <div class="wrapper">
        <h3 class="main-title">Client Testimonials</h3>
        <span class="main-subtitle">what clients say about our awesome company</span>
        <ul class="bxslider">
            <li>
            <img src="{{ asset('front') }}/assets/images/user-thumb.png" alt="">
            <p>
                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.
            </p>
            <div class="test-border">
            </div>
            <span>John Smith, CEO at <strong>Envato</strong></span>
            </li>
            <li>
            <img src="{{ asset('front') }}/assets/images/user-thumb.png" alt="">
            <p>
                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.
            </p>
            <div class="test-border">
            </div>
            <span>John Smith, CEO at <strong>Envato</strong></span>
            </li>
            <li>
            <img src="{{ asset('front') }}/assets/images/user-thumb.png" alt="">
            <p>
                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.
            </p>
            <div class="test-border">
            </div>
            <span>John Smith, CEO at <strong>Envato</strong></span>
            </li>
            <li>
            <img src="{{ asset('front') }}/assets/images/user-thumb.png" alt="">
            <p>
                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.
            </p>
            <div class="test-border">
            </div>
            <span>John Smith, CEO at <strong>Envato</strong></span>
            </li>
        </ul>
    </div>
    <!--Wrapper End-->
</div>
<!--Testimonials End-->
<!-- Our Team -->
<div class="our-team">
    <h3 class="main-title">Meet our Team</h3>
    <span class="main-subtitle">our cool & professional staff</span>
    <div class="slider3">
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team1.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team2.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team3.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team4.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team1.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team2.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team3.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
        <div class="slide">
            <a href="#">
            <div class="team-mates">
                <img src="{{ asset('front') }}/assets/images/team4.jpg" alt="picture">
                <div class="team-mask">
                </div>
            </div>
            </a>
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
    </div>
    <!-- End Slider2 -->
</div>
<!-- Our Team Ends -->
<!-- Recent Posts -->
<div class="recent-posts">
    <h3 class="main-title">Recent Posts</h3>
    <span class="main-subtitle">fresh news from arkitekt company</span>
    <div class="slider4">
        <div class="slide">
            <div class="view view-first">
                <img src="{{ asset('front') }}/assets/images/post1.jpg" alt=""/>
                <div class="mask">
                    <div class="i-icons">
                        <a href="#" class="re-details"><i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="repost-text">
                <a href="#">
                <h4>Lorem Ipsum dolor sit </h4>
                </a>
                <p>
                    A man who works with his hands is a laborer; a man who works with his hand s and his brain is a craftsman; but a
                </p>
            </div>
            <ul class="post-tags clearfix">
                <li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i>March 19, 2014</a></li>
            </ul>
        </div>
        <!-- End Slide -->
        <div class="slide">
            <div class="view view-first">
                <img src="{{ asset('front') }}/assets/images/post2.jpg" alt=""/>
                <div class="mask">
                    <div class="i-icons">
                        <a href="#" class="re-details"><i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="repost-text">
                <a href="#">
                <h4>Lorem Ipsum dolor sit </h4>
                </a>
                <p>
                    A man who works with his hands is a laborer; a man who works with his hand s and his brain is a craftsman; but a
                </p>
            </div>
            <ul class="post-tags clearfix">
                <li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i>March 19, 2014</a></li>
            </ul>
        </div>
        <!-- End Slide -->
        <div class="slide">
            <div class="view view-first">
                <img src="{{ asset('front') }}/assets/images/post3.jpg" alt=""/>
                <div class="mask">
                    <div class="i-icons">
                        <a href="#" class="re-details"><i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="repost-text">
                <a href="#">
                <h4>Lorem Ipsum dolor sit </h4>
                </a>
                <p>
                    A man who works with his hands is a laborer; a man who works with his hand s and his brain is a craftsman; but a
                </p>
            </div>
            <ul class="post-tags clearfix">
                <li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i>March 19, 2014</a></li>
            </ul>
        </div>
        <!-- End Slide -->
        <div class="slide">
            <div class="view view-first">
                <img src="{{ asset('front') }}/assets/images/post4.jpg" alt=""/>
                <div class="mask">
                    <div class="i-icons">
                        <a href="#" class="re-details"><i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="repost-text">
                <a href="#">
                <h4>Lorem Ipsum dolor sit </h4>
                </a>
                <p>
                    A man who works with his hands is a laborer; a man who works with his hand s and his brain is a craftsman; but a
                </p>
            </div>
            <ul class="post-tags clearfix">
                <li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i>March 19, 2014</a></li>
            </ul>
        </div>
        <!-- End Slide -->
    </div>
    <!-- End Slider4 -->
</div>
<!-- End Recent Posts -->
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
