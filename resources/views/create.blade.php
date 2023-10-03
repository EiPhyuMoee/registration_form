@extends('master')

@section('content')

    <body>

        <div class="main-w3layouts wrapper">
            <h1>MISS GRAND INTERNATIONAL</h1>
            <div class="main-agileinfo">
                <div class="agileits-top">
                    <form method="POST" action="/register">
                        {{ csrf_field() }}
                        <input class="text" type="text" name="Username" placeholder="Username" required="">
                        <input class="text email" type="email" name="email" placeholder="Email" required="">
                        <input class="text" type="password" name="password" placeholder="Password" required="">
                        <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password"
                            required="">
                        <div class="wthree-text">
                            <label class="anim">
                                <input type="checkbox" class="checkbox" required="">
                                <span>I agree to the Terms and Conditions</span>
                            </label>
                            <div class="clear"> </div>
                        </div>
                        <input type="submit" value="SIGNUP">
                    </form>
                    <p>Don't have an Account? <a href="#"> Login Now!</a></p>
                </div>
            </div>
            <ul class="colorlib-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </body>

    </html>
@endsection
