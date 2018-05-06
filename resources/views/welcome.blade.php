<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style/home.css') }}" rel="stylesheet">
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
        <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="head">
            <div class="container">
                <div class="col-md-2">
                    <div class="row">
                        <img src="{{asset('../../public/css/home/slide/lazada-cambodia.png')}}" alt="logo" height="65" width="auto" />
                    </div>
                </div>
                <div class="pull-right">
                    <div class="account">
                        <a href="blog.html" style="text-decoration: none"><span class="contactus"> Blog</span></a>
                        <a href="#" style="text-decoration: none"><span class="contactus"> Contact Us</span></a>
                        <a href="AboutUs.html" style="text-decoration: none"><span class="aboutus"> About Us</span></a>
                        <button onclick="document.getElementById('Sign-Up').style.display='block'">
                            <span class="glyphicon glyphicon-user signup"> SignUp</span>
                        </button>
                        <button onclick="document.getElementById('login').style.display='block'">
                            <span class="glyphicon glyphicon-log-in login"> Login</span>
                        </button>
                        <div id="Sign-Up" class="modal">

                            <form class="modal-content animate" action="#">
                                <div class="imgcontainer">
                            <span onclick="document.getElementById('Sign-Up').style.display='none'" class="close"
                                  title="Close Modal">&times;</span>
                                </div>

                                <div>
                                    <div class="title">
                                        <h1>Sign Up</h1>
                                        <p>Please fill in this form to create an account.</p>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <div>
                                                <label><b>Username</b></label>
                                                <input type="text" placeholder="Username" name="email" required>
                                            </div>
                                            <div>
                                                <label><b>Email</b></label>
                                                <input type="text" placeholder="Enter Email" name="email" required>
                                            </div>
                                            <div>
                                                <label><b>Password</b></label>
                                                <input type="password" placeholder="Enter Password" name="psw" required>
                                            </div>
                                            <div>
                                                <label><b>Repeat Password</b></label>
                                                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked="checked" style="margin-bottom:15px">
                                                    Remember me
                                                </label>
                                            </div>
                                            <div class="agree">
                                                <p>By creating an account you agree to our <a href="#" style="color:#2e6da4;">Terms
                                                        & Privacy</a>.</p>
                                            </div>
                                            <div>
                                                <button type="button"
                                                        onclick="document.getElementById('login').style.display='none'">Sign Up
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button"
                                                        onclick="document.getElementById('login').style.display='none'">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="login" class="modal">

                            <form class="modal-content animate" action="#">
                                <div class="imgcontainer">
                            <span onclick="document.getElementById('login').style.display='none'" class="close"
                                  title="Close Modal">&times;</span>
                                    <img class="avatar" src="../../public/images/home/agent.png" height="185" width="186"/>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <label><b>Username</b></label>
                                            <input type="text" placeholder="Enter Username" name="uname" required>

                                            <label><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" required>

                                            <button type="submit">Login</button>
                                            <label>
                                                <input type="checkbox" checked="checked"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6 cancel">
                                            <div class="pull-left">
                                                <button type="button"
                                                        onclick="document.getElementById('login').style.display='none'"
                                                        class="cancelbtn">Cancel
                                                </button>
                                            </div>
                                            <div class="pull-right">
                                                <span class="psw">Forgot <a href="#">password?</a></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li class="dropdown cat">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">
                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                <span>Categories</span><span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Health &amp; Fitness</a></li>
                                <li><a href="#">Beauty &amp; Fashion</a></li>
                                <li><a href="#">DIY &amp; Gadgets</a></li>
                                <li><a href="#">Travel &amp; Luggage</a></li>
                                <li><a href="#">Best Deals</a></li>
                            </ul>
                        </li>
                        <li class="pro">
                            <a href="#">
                                <img style="margin-bottom: 5px" src="../Public/Image/home/Promotion.png"/>
                                <span>Promotion</span>
                            </a>
                        </li>
                        <li class="event">
                            <a href="#">
                                <img style="margin-bottom: 5px" src="../Public/Image/home/upcoming_events-icon.png"/>
                                <span>Upcoming Event</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </body>
</html>
