<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/loadingscreen/loadingscreen.css">
    <link rel="stylesheet" href="assets/css/firstvp/firstvp.css">

</head>
<body>

    <section class="loading-screen">
        <div class="loading-screen-h1">
            <h1> GWAPO'S CTU</h1>
        </div>
        <div class="loading-pic-container">
            <div class="loading-pic-wrapper">
                <div class="img-wrapper-main">
                    <img src="./assets/picture/john.jpg" alt="">
                </div>
                <div class="img-wrapper">
                    <img src="./assets/picture/paulo.jpeg" alt="">
                </div>
                <div class="img-wrapper">
                    <img src="./assets/picture/jaja.jpg" alt="">
                </div>

                <div class="img-wrapper">
                    <img src="./assets/picture/ralp.jpg" alt="">
                </div>

                <div class="img-wrapper">
                    <img src="./assets/picture/aron.jpg" alt="">
                </div>
            </div>
        </div>
       
    </section>

    <section class="form-container-center">
        <div class="container" id="container">
            <!--FORM INPUTS-->
            <div class="form-container sign-up-container">
                <form action="controllers/registration/signup.php" method="post">
                    <h1>Create Account</h1>
                    <span>or use your email for registration</span>
                    <input name="Name" type="text" placeholder="Name" />
                    <input name="Email" type="email" placeholder="Email" />
                    <input name="password" type="password" placeholder="Password" />
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="controllers/Login/login.php" method="post">
                    <h1>Sign in</h1>
                    <span>or use your account</span>
                    <input name="Email" type="email" placeholder="Email" />
                    <input name="password" type="password" placeholder="Password" />
                    <button type="submit" name="submit">Sign In</button>
                </form>
            </div>
            <!--ANIMATION FOR FORMS-->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back POGI!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>HI GWAPO</h1>
                        <p>Usa baka sa mga gwapo diri sa CTU-Naga? pa register na</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script> 
    <script src="./js/lenis.js"></script>

    <script src="./js/loadingscreen.js"></script>
    <script src="./js/firstvp.js"></script>
</body>
</html>