<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treejective</title>
    <style>
        *{
            font-family: sans-serif;
        }
        body{
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url("{{ asset('img/bg-body-1-img.jpg') }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            overflow-x: hidden;
        }
        .overlay{
            position: fixed;
            top: 0;
            z-index: -2;
            width: 100vw;
            min-height: 100vh;
            height: 100%;
            margin: 0;
            background-color: rgba(0,0,0,0.5);
            background-image: linear-gradient( 45deg, rgba(85, 50, 50, 0.5), rgba(1, 31, 16, 0.829) );
        }
        .abstract-1{
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            width: 420px;
            height: 406px;
            left: -142px;
            top: -100px;
            background: #00503373;
        }
        .abstract-2{
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            width: 193px;
            height: 186px;
            right: -43px;
            top: -22px;
            background: #20500073;
        }
        .abstract-3{
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            width: 356px;
            height: 343px;
            right: -100px;
            bottom: -100px;
            background: rgba(11, 57, 39, 0.43);
        }
        nav{
            position: fixed;
            top: 0;
            z-index: 100;
            background: rgba(1, 29, 15, 0.9);
            box-shadow: 0px 0px 20px 20px rgba(1, 29, 15, 0.74);
            width: 100vw;
            height: 8%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-flow: row;
        }
        nav #nav-brand{
            font-weight: bold;
            font-size: 42px;
            line-height: 50px;
            text-align: center;
            letter-spacing: 0.1em;
            color: #80BEA0;
        }
        nav .nav-item{
            padding: 0px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: row;
        }
        .nav-item li{
            list-style-type: none;
            padding: 0px 20px;
        }
        #hamburger{
            cursor: pointer;
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
        a{
            text-decoration: none;
            color: inherit;
        }
        .banner{
            width: 100%;
            height: 90vh;
            margin-top: 14vh;
            display: flex;
            flex-flow: row;
        }
        .left-banner{
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
        }
        .left-banner .content{
            min-width: 80%;
            height: 60%;
            background: rgba(231, 255, 237, 0.314);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
        }
        .left-banner .content .small{
            font-size: 26px;
        }
        .left-banner .content .normal{
            font-size: 32px;
        }
        .left-banner .content .big{
            font-size: 42px;
        }

        .right-banner{
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
        }
        form{
            width: 40vw !important;
            margin: 0;
            padding: 0;
        }
        .search{
            outline: none;
            width: 90%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-flow: row;
        }
        .search #search{
            border: 5px solid #80BEA0;
            width: 70%;
            height: 38px;
            border-radius: 10px;
            background: rgba(128, 190, 160, 0.336);
            outline: none;
            text-align: center;
            font-size: 24px;
            color: #80BEA0;
            font-weight: 600;
        }
        .search #search-btn{
            background: rgba(128, 190, 160, 0.336);
            width: 20%;
            height: 50px;
            outline: none;
            border: 5px solid #80BEA0;
            border-radius: 10px;
            cursor: pointer;
        }
        .svg-arrow-2{
            width: 100%;
        }
        .footer{
            min-height: 20vh;
            background: rgba(5, 27, 19, 0.753);
            color: rgba(231, 255, 237, 0.314);
            font-size: 18px;
            margin-top: 100px;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
        }
        .footer p{
            text-align: center;
        }
        /* svg-animation */
        .path-1 {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 10s linear forwards;
            animation-delay: 0.5s;
        }
        .path-arrow-1{
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 10s linear forwards;
            animation-delay: 2.5s;
        }
        .path-2 {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 5s linear forwards;
            animation-delay: 3.5s;
        }
        .path-arrow-2{
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 5s linear forwards;
            animation-delay: 5s;
        }
        @keyframes dash {
            to {
                stroke-dashoffset: 0;
            }
        }
        .content-container{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .content-container h3{
            width: 80%;
            text-align: left;
            font-size: 22px;
            color: #80BEA0;
            font-family: monospace;
        }
        .info{
            background: #20500073;
            font-size: 22px;
            padding: 10px;
            text-align: center;
            color: rgba(240, 248, 255, 0.404);
            border-radius: 10px;
        }
        .content-container .container{
            width: 70%;
            min-height: 80px;
            background: rgba(128, 190, 160, 0.7);
            margin: 2.5px auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 40px;
            padding-right: 40px;
        }
        .content-container .container .title{
            font-size: 22px;
        }
        .content-container .container button{
            font-size: 18px;
            height: 40px;
            cursor: pointer;
            background: #022E19;
            color: #80BEA0;
            border: none;
            outline: none;
        }
        @media only screen and ( max-width: 1000px){
            .abstract-1,.abstract-2,.abstract-3{
                display: none;
            }
            nav #nav-brand{
                font-weight: bold;
                font-size: 22px;
                line-height: 50px;
                text-align: center;
                letter-spacing: 0.1em;
                color: #80BEA0;
            }
            .nav-item li{
                list-style-type: none;
                padding: 0px 5px;
            }
            button[id="session"]{
                background: none;
                outline: none;
                cursor: pointer;
                padding: 8px 10px;
                border: 2px solid #80BEA0;
                color: #80BEA0;
                font-weight: 700;
            }
            .banner{
                width: 100%;
                height: auto;
                margin-top: 14vh;
                display: block;
            }
            .left-banner{
                width: 50%;
                min-height: 50vh;
                display: flex;
                justify-content: center;
                width: 100%;
            }
            .left-banner .content{
                min-width: 80%;
                padding: 80px 20px;
                background: rgba(231, 255, 237, 0.314);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-flow: column;
            }
            .left-banner .content .small{
                font-size: 16px;
            }
            .left-banner .content .normal{
                font-size: 22px;
            }
            .left-banner .content .big{
                font-size: 32px;
            }   
            .right-banner{
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-flow: column;
            }
            form{
                width: 80vw !important;
                margin: 0;
                padding: 0;
            }
            .svg-arrow-2{
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    
    @yield('content')

</body>
</html>