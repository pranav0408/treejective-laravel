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
            /* background: #022E19; */
            background-image: url("{{ asset('img/bg-body-1-img.jpg') }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            overflow-x: hidden;
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
        .img-container{
            width: 70vw;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(14, 24, 19, 0.856);
            border-radius: 10px;
            margin: 60px auto;
        }
        .image{
            width: 40%;
            padding: 80px 20px;
            min-width: 200px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image img{
            width: 100%;
            height: auto;
        }
        h3{
            width: 100%;
            margin: auto;
            padding: 0;
            color: rgba(53, 199, 126, 0.856);
        }
        .para{
            display: flex;
            align-items: flex-start;
            justify-content: center;
            width: 70vw;
            flex-direction: column;
            font-size: 18px;
            background: rgba(14, 24, 19, 0.856);
            color: rgba(161, 243, 202, 0.856);
            margin: auto;
            margin-bottom: 100px;
            padding: 60px 40px;
            border-radius: 10px;
        }
        p{
            width: 90%;
            display: block;
            margin: auto;
            text-align: center;
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