<section class="department_area section_gap">
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
      {{--@foreach($variable as $key => $value)
            <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset($value->imagepath) }}" alt="{{ $value->imagename }}">
                  </div>
                  <h4>{{$value->Dname}}</h4>
              </div>
          </div>
      @endforeach--}}
      <div class="row">

          <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset('assets/img/department/d-icon1.png') }}" alt>
                  </div>
                  <h4>Cardiology</h4>
              </div>
          </div>

          <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset('assets/img/department/d-icon2.png') }}" alt>
                  </div>
                  <h4>Urology</h4>
              </div>
          </div>

          <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset('assets/img/department/d-icon3.png') }}" alt>
                  </div>
                  <h4>Dental Care</h4>
              </div>
          </div>

          <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset('assets/img/department/d-icon4.png') }}" alt>
                  </div>
                  <h4>Eye Care</h4>
              </div>
          </div>

          <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset('assets/img/department/d-icon5.png') }}" alt>
                  </div>
                  <h4>Neurology</h4>
              </div>
          </div>

          <div class="col-lg-2 text-center col-sm-6">
              <div class="single_department">
                  <div class="dpmt-thumb">
                      <img src="{{ asset('assets/img/department/d-icon6.png') }}" alt>
                  </div>
                  <h4>Plastic Surgery</h4>
              </div>
          </div>
          <a class="primary-btn text-uppercase" href="#">Learn More</a>
      </div>
  </div>
</section>