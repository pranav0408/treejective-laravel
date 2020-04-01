<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
        *{
            font-family: sans-serif;
        }
        .nav{
            position: fixed;
            top: 0;
            z-index: 100;
            background: rgba(1, 29, 15, 0.9);
            box-shadow: 0px 0px 20px 20px rgba(1, 29, 15, 0.74);
            width: 100vw;
            height: 11vh;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-flow: row;
        }
        .nav #brand a{
            font-weight: bold;
            font-size: 42px;
            line-height: 10px;
            text-align: center;
            letter-spacing: 0.1em;
            color: #80BEA0;
            text-decoration: none;
            margin-left: 10px;
        }
        .nav .item{
            padding: 0px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: row;
        }
        .item li{
            list-style-type: none;
            padding: 0px 20px;
            color: #80BEA0;
        }
        button[id="session"]{
            background: none;
            outline: none;
            cursor: pointer;
            padding: 8px 40px;
            border: 5px solid #80BEA0;
            color: #80BEA0;
            font-weight: 700;
        }
        @media only screen and (max-width: 1000px){
            .nav #brand a{
                font-weight: bold;
                font-size: 22px;
                line-height: 50px;
                text-align: center;
                letter-spacing: 0.1em;
                color: #80BEA0;
            }
            .item li{
                list-style-type: none;
                padding: 0px 5px;
            }
            button[id="session"]{
                background: none;
                outline: none;
                cursor: pointer;
                padding: 4px 4px;
                border: 2px solid #80BEA0;
                color: #80BEA0;
                font-weight: 700;
            }
        }
        </style>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Css -->
        <link rel="stylesheet" href="{{URL::to('./css/profile_edit.css')}}">

    </head>
    <div class="nav">
        <span id="brand">
            <a href="/">Treejective</a>
        </span>
        <ul class="item">
            @if( Session::get('user') )
                <li> 
                    <a href='/logout'> <button id="session"> Logout </button> </a>
                </li>
                <li>
                    {{ $users->username }}'s profile
                </li>
            @endif  
        </ul>
    </div>
    <body>
        @if(Session::get('user'))
            @yield('content') 
        @endif
    </body>
</html>