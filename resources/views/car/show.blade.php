{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->


{{--@extends('adminlte::page')--}}

{{--@section('title', 'Dashboard')--}}

{{--@section('content_header')--}}

{{--@stop--}}

{{--@section('content')--}}
    <div class="container">

        <div class="row" id="ads">
            <!-- Category Card -->
            <div class="col-md-4">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge">{!! $car->full_name !!} Honda Accord LX</span>
                        <span class="card-notify-year">{!! $car->model_year !!}</span>

                        <div class="slideshow-container">

                            <div class="mySlides">
                                <div class="numbertext">1 / 3</div>
                                <img src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" style="width:100%">
                                <div class="text">Caption Text</div>
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 3</div>
                                <img src="data:image/jpeg;base64,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" style="width:100%">
                                <div class="text">Caption Two</div>
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 3</div>
                                <img src="https://auto.ndtvimg.com/car-images/big/ferrari/portofino/ferrari-portofino.jpg?v=27" style="width:100%">
                                <div class="text">Caption Three</div>
                            </div>

                            <a class="prevImg" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="nextImg" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>

                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>




{{--                        <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" alt="Alternate Text" />--}}
                    </div>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge">{!! $car->price !!} <i class="fas fa-shekel-sign"></i></span>
                        <span class="card-detail-badge">{!! $car->distance !!} Kms</span>
                        <span class="card-detail-badge">{!! $car->gear_type !!} <i class="fas fa-cog"></i></span>
                        <span class="card-detail-badge">{!! $car->engine_size !!} CC</span>
                        <span class="card-detail-badge">{!! $car->engine_power !!} horse</span>
                        <span class="card-detail-badge">{!! $car->passenger_number !!} <i class="fas fa-chair"></i></span>
                        <span class="card-detail-badge">{!! $car->previous_holders_number !!} <i class="fas fa-users"></i></span>
                        <span class="card-detail-badge">{!! $car->color !!} <i class="fas fa-paint-roller" style="color: {{$car->color}}"></i></span>
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5>Honda Accord LX</h5>
                        </div>
                        <a class="ad-btn" href="#">See Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
{{--@stop--}}

{{--@section('css')--}}

    <style>
        /*@import url('https://fonts.googleapis.com/css?family=Open+Sans');*/
        /*@import url('https://fonts.googleapis.com/css?family=Montserrat');*/

        body {
            font-family: 'Montserrat', sans-serif;

        }

        /* Category Ads */

        #ads {
            margin: 30px 0 30px 0;

        }

        #ads .card-notify-badge {
            position: absolute;
            left: -10px;
            top: -20px;
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;
            z-index: 1;

        }

        #ads .card-notify-year {
            position: absolute;
            right: -10px;
            top: -20px;
            background: #ff4444;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            font-size: 14px;
            width: 50px;
            height: 50px;
            padding: 15px 0 0 0;
            z-index: 1;
        }


        #ads .card-detail-badge {
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;
        }


        /*#ads .card:hover {*/
        /*    background: #fff;*/
        /*    box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);*/
        /*    border-radius: 4px;*/
        /*    transition: all 0.3s ease;*/
        /*}*/

        #ads .card-image-overlay {
            font-size: 20px;
            align-items: center;
        }


        #ads .card-image-overlay span {
            display: inline-block;
        }


        #ads .ad-btn {
            text-transform: uppercase;
            width: 150px;
            height: 40px;
            border-radius: 80px;
            font-size: 16px;
            line-height: 35px;
            text-align: center;
            border: 3px solid #e6de08;
            display: block;
            text-decoration: none;
            margin: 20px auto 1px auto;
            color: #000;
            overflow: hidden;
            position: relative;
            background-color: #e6de08;
        }

        #ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);
        }

        #ads .ad-title h5 {
            text-transform: uppercase;
            font-size: 18px;
        }
    </style>





    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            /*max-width: 1000px;*/
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prevImg, .nextImg {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .nextImg {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prevImg:hover, .nextImg:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prevImg, .nextImg,.text {font-size: 11px}
        }
    </style>
{{--@stop--}}

{{--@section('js')--}}
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>

{{--@stop--}}



