<?php $prompt="Prompt: Sign Up" ?>

<link rel="stylesheet" href="ASSET/css/dailyui/1.css">

<script src="ASSET/js/dailyUi/1.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mohave:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

<div id="all1">
    <div id="gauche">
        <div id="title">
            <div>
                <h1>WELCOME !</h1>
                <p>Please sign up or sign in</p>
            </div>
        </div>
        <div id="flower">
            <img src="ASSET/img/dailyUi/1/flower.png" alt="">
        </div>
    </div>
    <div id="droite">
        <!-- Sign up -->
        <div class="registerLogin">
            <p class="signUp active">Sign up</p>
            <p class="signIn">Sign in</p>
        </div>
        <div id="register">
            <div class="allForm">
                <form action="#">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter your name" require>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter your email" require>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" require>
                    </div>
                    <div id="conditions">
                        <input type="checkbox" name="conditions" require>
                        <label for="conditions">I agree to <a href="#">therms & conditions*</a></label>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
                <div class="account">
                    <p>Have a account ?</p>
                    <a href="#">Login</a>
                </div>
            </div>
            <div class="other">
                <p>or</p>
                <div class="google">
                    <img src="ASSET/img/1/dailyUi/googleLogo.png" alt="Logo de google">
                    <p>Sign Up with Google</p>
                </div>
            </div>
        </div>

        <!-- Sign in -->
        <div id="login" class="none">
            <div class="allForm">
                <form action="#">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter your email" require>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" require>
                    </div>
                    <button type="submit">Sign In</button>
                </form>
                <div class="account">
                    <p>Didn't have a account ? </p>
                    <a href="#">Register</a>
                </div>
            </div>
            <div class="other">
                <p>or</p>
                <div class="google">
                    <img src="ASSET/img/1/googleLogo.png" alt="Logo de google">
                    <p>Sign In with Google</p>
                </div>
            </div>
        </div>
    </div>
</div>