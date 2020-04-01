<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <meta charset="utf-8" name="viewport" content="width=device-width">
    <style type="text/css">
    :root {
        --primary: #18B684;
    }

    * {
        padding: 0;
        margin: 0;
        font-family: arial
    }

    .form {
        flex: 4;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .social{
        display: flex;
        flex: 3;
        flex-direction: column;
        padding: 30px;
    }
    .fm{
        flex: 5;
        padding: 30px;
    }

    #details {
        flex: 2;
        background: url(https://www.fiesta.com.sv/assets/img/BG/bg2.jpg);
        display: flex;
        background-size: cover;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        text-align: center;
        width: 100%;
    }

    input[type='text'],
    input[type='email'],
    input[type='password'] {
        /*padding: 15px 20px;
        border-radius: 10px;
        border: none;
        background: #E3E5E5;
        margin: 20px 0px;
        font-size: 18px;
        outline: none;
        transition: .2s;
        box-sizing: border-box;
        */
        width:100%;
        border:none;
        outline: none;
        border-bottom: 1px solid grey;
        margin: 30px 0px;
        font-size: 18px;
        transition: .2s;
    }

    input[type='text']:focus,
    input[type='email']:focus,
    input[type='password']:focus {
        /*background: #fff;
          border: var(--primary);
          box-shadow: inset 0px 0px 5px var(--primary);
          */
          outline: none;
    }

    .wrapper {
        display: flex;
        height: 100vh;
        width: 100%;
        background-repeat: none;
        background-size: cover;
        flex-direction: row-reverse;
    }

    h1 {
        line-height: 100px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .secondary {
        line-height: 50px;
        padding: 50px;
        color: #fff;
    }

    .dark {
        color: #000;
    }

    .btn-primary {
        background: var(--primary) !important;
        color: #fff !important;
        width: 100%;
        margin: 0 !important;
        align-self: center;
    }

    .primary {
        color: var(--primary) !important;
        font-size: 2em;
        line-height: 50px;
    }
    p{
        color: grey;
        font-size: 90%;
        margin-bottom: 10px;
    }
    .btn-login{
        padding:5px 10px;
        
        font-size: 1rem;
        font-weight: bolder;
        color: #eee;
        border:none;
        box-shadow: 0 0 10px grey;
        margin: 10px 0;
        cursor: pointer;
    }
    .ic-fb{
        background-color:#3954A4;
    }
    .ic-g{
        background-color: #eee;
        color:#000;
    }
    .ic-git{
        background-color: #425050;
    }
    .btn-login img{
        max-height: 30px;
        vertical-align: middle;
    }

    .btn{
        padding: 20px;
        text-transform: uppercase;
        font-weight: bolder;
        border: 1px solid #fff;
        color: #fff;
        outline: none;
        cursor: pointer;
        margin: 20px;
        border-radius: 50px;
        background: transparent;
        transition: .5s;
        
    }
    .btn:hover {
        background-color: #fff;
        color: var(--primary);
        font-size: 120%;
    }
    .inputs{
        width: 100%;
        flex: 1;
    }
    
   @media only screen and (max-width: 600px) {
      .wrapper{
        flex-direction: column; 
    }
    .form{
        flex-direction: column;
    }
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- <div><img id="image" src="https://image.freepik.com/free-photo/beautiful-view-nature-green-leaves-blurred-greenery-tree-background-with-sunlight_50039-612.jpg"></div> -->
        <div id="details">
            <h1>login</h1>
            <p class="secondary">To keep connected with us, login with your username and password</p>
            <button class="btn" onclick="window.location.href = '/login';">login</button>
        </div>
        <div class="form">
            <form class="fm" action="register" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="primary">create new account</h1>
                <p>Come join our community ! let's set up your account.</p>
                <div class="inputs">
                    <input type="text" value="{{old('username')}}" name="username" placeholder="User Name"><br>
                    <p style="color:red;">{{app('request')->input('userexists')}}</p>
                    <span style="color: red;">{{ $errors->first('username') }}</span>
                    <input type="text" value="{{old('firstname')}}" name="firstname" placeholder="First Name"><br>
                    <span style="color: red;">{{ $errors->first('firstname') }}</span>
                    <input type="text" value="{{old('lastname')}}" name="lastname" placeholder="Last Name"><br>
                    <span style="color: red;">{{ $errors->first('lastname') }}</span>
                    <input type="email" value="{{old('email')}}" name="email" placeholder="Email"><br>
                    <span style="color: red;">{{ $errors->first('email') }}</span>
                    <p style="color:red;">{{app('request')->input('emailexists')}}</p>
                    <input type="password" value="{{old('pwd')}}" name="pwd" placeholder="Password"><br>
                    <span style="color: red;">{{ $errors->first('pwd') }}</span>
                    <input type="password" value="{{old('confirm_password')}}" name="confirm_password" placeholder="Confirm Password"><br>
                    <span style="color: red;">{{ $errors->first('confirm_password') }}</span>
                    <p align="center">By submitting this form, you agree to terms and conditions.</p>
                    <input type="submit" class="btn btn-primary" name="signup" value="signup">
                </div>
            </form>
            <div style="width: 1px;background-color: lightgrey;height: 80%;"></div>
            <!-- <div class="social">
                <h3>Login with your social media account</h3>
                <button class="ic-fb btn-login"><img src="https://www.freeiconspng.com/uploads/facebook-f-logo-white-background-21.jpg"> Login with Facebook</button>
                <button class="ic-g btn-login"><img src="https://cdn4.iconfinder.com/data/icons/new-google-logo-2015/400/new-google-favicon-512.png"> Sign in with Google</button>
                <button class="ic-g btn-login"><img src="https://image.flaticon.com/icons/svg/25/25231.svg"> Login with Github</button>
            </div> -->
        </div>
    </div>
</body>

</html>