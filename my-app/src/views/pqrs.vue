<!-- eslint-disable vue/multi-word-component-names -->
<script setup>
import fotter from '../components/fotter.vue';
import Navbar from '../components/Navbar.vue';
</script>

<template>
    <Navbar />
    <div class="hero-wrap">
            <div class="overlay"></div>
            <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 col-md-6 ftco-animate fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }" style="transform: translateZ(0px) translateY(-7.38095%);">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 0.831293; transform: translateZ(0px) translateY(-3.16327%);"> Business Leaders <br><span>Conference 2019</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 0.831293; transform: translateZ(0px) translateY(-3.16327%);"><span class="icon-calendar mr-2"></span>20-23 November 2019 - Los Angeles CA</p>
            <div id="timer" class="d-flex">
            <div class="time" id="days">-1320<span>Days</span></div>
            <div class="time pl-3" id="hours">15<span>Hours</span></div>
            <div class="time pl-3" id="minutes">21<span>Minutes</span></div>
            <div class="time pl-3" id="seconds">56<span>Seconds</span></div>
            </div>
            </div>
            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
                <form action="#" class="request-form ftco-animate fadeInUp ftco-animated">
                 <h2>Join Conference</h2>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Phone">
                    </div>
                    <div class="form-group">
                    <div class="checkbox">
                    <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                    </div>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Join now" class="btn btn-primary py-3 px-4">
                  </div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-primary">
    <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-placeholder"><i class="bi bi-airplane-fill"></i></span></div>
                            <div class="media-body">
                            <h3 class="heading mb-3">Venue</h3>
                            <p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                        <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-world"></span></div>
                            <div class="media-body">
                            <h3 class="heading mb-3">Transport</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                        <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-hotel"></span></div>
                            <div class="media-body">
                            <h3 class="heading mb-3">Hotel</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                        <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-cooking"></span></div>
                            <div class="media-body">
                            <h3 class="heading mb-3">Restaurant</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <fotter />
  <Router-view />
</template>

<!--Estilo-->
<style>
.hero-wrap {
    width: 100%;
    height: 550px;
    position: inherit;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
}

.request-form {
    background: #fff;
    padding: 30px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0px 10px 31px -21px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: 0px 10px 31px -21px rgba(0, 0, 0, 0.33);
    box-shadow: 0px 10px 31px -21px rgba(0, 0, 0, 0.33);
}
.request-form .form-group {
    position: relative;
    width: 100%;
    display: block;
}
.request-form .form-group .btn {
    width: 100%;
    display: block !important;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
}
.form-control {
    height: 52px !important;
    background: #fff !important;
    color: #000000 !important;
    font-size: 18px;
    border-radius: 5px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.ftco-section {
    padding: 7em 0;
    position: relative;
}

.bg-primary {
    background-color: #4877fb !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.services .icon span {
    font-size: 70px;
    color: #fff;
}
</style>