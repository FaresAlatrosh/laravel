<!doctype html>
<html lang="en">
    <head>@include('layouts.front.admin.head')</head>


<body>

   @include('layouts.front.admin.header')

    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <h2>
                        Growing up your <br>
                        children with our most <br>
                        smart monitization <br>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <a class="primary-btn text-uppercase" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    <section class="features_area section_gap">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="{{ asset('assets/img/features/icon1.png') }}" alt>
                            <h4>Emergency Services</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Call Us: 215 - 3695 - 9584</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="{{ asset('assets/img/features/icon2.png') }}" alt>
                            <h4>Doctors Schedule</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="appointment" class="f_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="{{ asset('assets/img/features/icon3.png') }}" alt>
                            <h4>Online Appointment</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Get Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about_area lite_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="about_details lite_bg">
                        <h2>Welcome to Medicare Center</h2>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards
                            especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job
                            is beyond reproach.</p>
                        <ul class="list_wrap">
                            <li class="about_lists">Women face higher conduct standards especially in the workplace
                                that’s why it’s crucial
                                that.</li>
                            <li class="about_lists">Women face higher conduct standards especially in the workplace
                                that’s why it’s crucial
                                that.</li>
                            <li class="about_lists">Women face higher conduct standards especially in the workplace
                                that’s why it’s crucial
                                that.</li>
                        </ul>
                    </div>
                </div>
                @include('layouts.front.admin.doctortime')
            </div>
            <div class="about_bg overlay"></div>
        </div>
    </section>


    @include('layouts.front.admin.department')


    <section class="section_gap counter_area overlay">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">30</span>K</h1>
                        <p>Years <br> of Experiences</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">2</span>K+</h1>
                        <p>Instant <br> Blood Donors </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">5</span>K+</h1>
                        <p>Well Cured <br> Patients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter">
                        <h1> <span class="counter_number">20</span>K+</h1>
                        <p>Internal <br> Stuff Groups</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section_gap team_area lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Medicare Popular Departments</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="{{ asset('assets/img/team/member1.png') }}" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Ethel Davis</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="{{ asset('assets/img/team/member2.png') }}" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Rodney Cooper</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="{{ asset('assets/img/team/member3.png') }}" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Dane Walker</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_member">
                        <div class="author">
                            <img src="{{ asset('assets/img/team/member4.png') }}" alt>
                        </div>
                        <div class="author_decs">
                            <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <h4>Lena Keller</h4>
                            <p class="profession">Sr. Faculty Data Science</p>
                            <p>If you are looking at blank cassettes on the web, you may be very confused at the
                                difference in price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section_gap blog_area">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="recent_blog">
                        <div class="blog_title">
                            <h2>Our Recent Blogs</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 col-sm-12">
                            <div class="single_blog">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="blog_thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/img/recent-blog/blog1.jpg') }}" alt>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="blog_details">
                                            <div class="blog_meta">
                                                <span><i class="fa fa-calendar"></i>13th Dec</span>
                                                <span><i class="fa fa-heart-o"></i>15</span>
                                                <span><i class="fa fa-comment-o"></i>04</span>
                                            </div>
                                            <h4>
                                                <a href="#">Portable Fashion for women</a>
                                            </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="single_blog">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="blog_thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/img/recent-blog/blog2.jpg') }}" alt>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="blog_details">
                                            <div class="blog_meta">
                                                <span><i class="fa fa-calendar"></i>13th Dec</span>
                                                <span><i class="fa fa-heart-o"></i>15</span>
                                                <span><i class="fa fa-comment-o"></i>04</span>
                                            </div>
                                            <h4>
                                                <a href="#">Portable Fashion for women</a>
                                            </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="single_blog">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="blog_thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/img/recent-blog/blog3.jpg') }}" alt>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="blog_details">
                                            <div class="blog_meta">
                                                <span><i class="fa fa-calendar"></i>13th Dec</span>
                                                <span><i class="fa fa-heart-o"></i>15</span>
                                                <span><i class="fa fa-comment-o"></i>04</span>
                                            </div>
                                            <h4>
                                                <a href="#">Portable Fashion for women</a>
                                            </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="recent_blog appoinment">
                        <div class="blog_title">
                            <h2>Make an Appointment</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="appoinment_form_section lite_bg">
                            <form class="form_area" id="myForm" action="mail.html" method="post">
                                <div class="row">
                                    <div class="col-lg-12 form_group">
                                        <input name="name" placeholder="Patient name"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'"
                                            class="common_input form-control" required type="text">
                                        <input name="email" placeholder="Email address"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'"
                                            class="common_input form-control" required type="email">
                                        <input name="name" placeholder="Date of birth"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'"
                                            class="common_input form-control" required type="text">
                                        <select class="default-select">
                                            <option data-display="Doctor’s name">Doctor’s name</option>
                                            <option value="1">Rashimul</option>
                                            <option value="2">Shofi</option>
                                        </select>
                                        <input name="subject" placeholder="Appointment date"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Subject'"
                                            class="common_input mb-10 form-control" required type="text">
                                        <textarea class="common_textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Messege'" required></textarea>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="primary-btn text-uppercase">confirm booking</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.front.admin.footer')
</body>

</html>+
