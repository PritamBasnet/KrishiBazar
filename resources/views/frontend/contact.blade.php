@extends('frontend.layout.master')
@section('frontend-content')
<div class="smallBackground">
    <img src="{{ asset('frontend/image/small.jpg') }}" alt="">
    <h4 class="h3">CONTACT US</h4>

</div>
<div class="row" style="display: flex;justify-content:center;align-items:center;">
    <div class="stylishTitleRow" style="display: flex; width:fit-content; height:fit-content;:center;align-items:center;">
        <span class="grayish">CONTACT US</span>
        <div>
            <h1 style="color: #58b064;">The Best Way</h1>
            <h1> To Contact Us For The Help</h1>
        </div>
        <div class="icon-stylish">
            <span></span>
            <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
            <span></span>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="iconContactWrapper">
                <div class="iconBox">
                    <i class="bi bi-pin-map"></i>
                </div>
                <h3 class="h5">Address</h3>
                <h6 class="h6" style="color: gray;">Itahari 9 Sunsari</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="iconContactWrapper">
                <div class="iconBox">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <h3 class="h5">Phone</h3>
                <h6 class="h6" style="color: gray;">+977 9829379109</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="iconContactWrapper">
                <div class="iconBox">
                    <i class="bi bi-envelope"></i>
                </div>
                <h3 class="h5">Phone</h3>
                <h6 class="h6" style="color: gray;">krishibazar9710@gmail.com</h6>
            </div>
        </div>
    </div>
    <hr> 
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="stylishTitleRow">
                <span class="grayish">CONTACT NOW</span>
                <div>
                    <h1 style="color: #58b064;">Get In Touch</h1>
                    <h1>With Us</h1>
                </div>
                <div class="icon-stylish">
                    <span></span>
                    <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
                    <span></span>
                </div>
            </div>
            <div class="row" style="padding: 0;">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Name</label>
                        <input class="form-control" name="name" type="text">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Email</label>
                        <input class="form-control" name="email" type="text">
                      </div>
                </div>
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Phone</label>
                    <input class="form-control" name="email" type="number">
                  </div>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">More Info</label>
                  </div>

                  <div class="mb-3" style="padding-top: 20px;"> 
                    <a href="" class="GrayBackgroundBtn">Send Message</a>
                  </div>
            </div>
        </div>
        <div class="col-md-6 iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114086.59115093104!2d87.19515919141962!3d26.673894227365537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6c66e80fbfa9%3A0x38094d1a7c974283!2sItahari!5e0!3m2!1sen!2snp!4v1674161385721!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection