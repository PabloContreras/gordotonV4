<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gordoton 2022 - Coming Soon</title>
        {{--    Bootstrap CSS       --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

        {{--        JQuery 3.3.1        --}}
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        {{--        Bootstrap 4.1       --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        {{--        FontAwesome         --}} 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{--        Countdown           --}} 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>      

        <style type="text/css">
            /*
            *
            * ==================================================
            * UNNECESSARY STYLE - JUST TO MAKE IT LOOKS NICE
            * ==================================================
            *
            */
            .countdown {
                text-transform: uppercase;
                font-weight: bold;
            }

            .countdown span {
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                font-size: 3rem;
                margin-left: 0.8rem;
            }

            .countdown span:first-of-type {
                margin-left: 0;
            }

            .countdown-circles {
                text-transform: uppercase;
                font-weight: bold;
            }

            .countdown-circles span {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            }

            .countdown-circles span:first-of-type {
                margin-left: 0;
            }


            /*
            *
            * ==================================================
            * FOR DEMO PURPOSES
            * ==================================================
            *
            */
            body {
                min-height: 100vh;
            }

            .bg-gradient-1 {
                background: #7f7fd5;
                background: -webkit-linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
                background: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
            }

            .bg-gradient-2 {
                background: #654ea3;
                background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);
                background: linear-gradient(to right, #654ea3, #eaafc8);
            }

            .bg-gradient-3 {
                background: #ff416c;
                background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
                background: linear-gradient(to right, #ff416c, #ff4b2b);
            }

            .bg-gradient-4 {
                background: #007991;
                background: -webkit-linear-gradient(to right, #007991, #78ffd6);
                background: linear-gradient(to right, #007991, #78ffd6);
            }

            .rounded {
                border-radius: 1rem !important;
            }

            .btn-demo {
                padding: 0.5rem 2rem !important;
                border-radius: 30rem !important;
                background: rgba(255, 255, 255, 0.3);
                color: #fff;
                text-transform: uppercase;
                font-weight: bold !important;
            }

            .btn-demo:hover, .btn-demo:focus {
                color: #fff;
                background: rgba(255, 255, 255, 0.5);
            }
            .heart {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="container py-5">
                <!-- For demo purpose-->
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <h1 class="display-4 mb-4">Gordoton 2022</h1>
                    </div>
                </div>
                <div class="py-5">
                    <div class="row mx-0">
                        <div class="col-lg-8 mx-auto">
                            <div class="rounded bg-gradient-4 text-white shadow p-5 text-center mb-5">
                                <img src="{{ asset('/pig.gif') }}" style="width: 40%;">
                                <h2>Faltan...</h2>
                                <div id="clock-c" class="countdown py-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mx-0">
                <div class="col-auto">
                    <p>&copy; {{ date('Y') }}. Hecho con <i class="fa fa-heart heart"></i> por Pablo Contreras</p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                function get15dayFromNow() {
                    return new Date(new Date('January 10, 2022 08:00:00'));
                }

                $('#clock-c').countdown(get15dayFromNow(), function(event) {
                  var $this = $(this).html(event.strftime(''
                    + '<span class="h1 font-weight-bold">%D</span> D'
                    + '<span class="h1 font-weight-bold">%H</span> H'
                    + '<span class="h1 font-weight-bold">%M</span> M'
                    + '<span class="h1 font-weight-bold">%S</span> S'));
                });
            });
        </script>
    </body>
</html>
