@extends('layouts.newapp')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <form class="" action="index.html" method="post">
                  <input type="text" name="firstname" value="" placeholder=""> <br>
                  <input type="text" name="lastname" value="" placeholder=""> <br>
                  <input type="text" name="username" value="" placeholder=""> <br>
                  <input type="date" name="Date" value="" placeholder=""><br>
                  <label class="radio">
    <input type="radio" name="gerder">
   Male
  </label>
  <label class="radio">
    <input type="radio" name="gender">
   Female
  </label><br>
                  <input type="email" name="email" value="" placeholder=""> <br>
                  <input type="password" name="password" value="" placeholder=""> <br>
                  <input type="number" name="Phone" value="" placeholder=""> <br>
                  <input type="text" name="address" value="" placeholder=""> <br>
                  <button type="submit" name="button">Submit</button> 
                  
               </form>
               
            </div>
        </div>
    </body>
</html>
