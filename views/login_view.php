<?php
// Display success message if registration was successful
if (isset($_SESSION['registration_success'])) {
    echo "<div class='success-message'><i class='ri-checkbox-circle-line'></i> " . $_SESSION['registration_success'] . "</div>";
    unset($_SESSION['registration_success']); // Clear the message after displaying
}

$_SESSION['login_error']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link -->
        <link rel="stylesheet" href="../styling/login.css">
     
    <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css"> 
</head>
<body>

    <header class="head">
        <div class="wrapper">
          <nav class="nav_list">
            <a href="../index.html"><img src="../img/image-removebg-preview (1).png" alt="Logo"></a>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Over Ons</a></li>
              <li><a href="#">Gerechten</a></li>
            </ul>
          </nav>
          <div class="container">
            <div class="search">
              <input type="text" placeholder="Search...">
              <i class="ri-search-2-line"></i>
            </div>
            <div class="login-btn">
              <i class="ri-login-box-line"></i>
            </div>
          </div>
        </div>
      </header>

      <section class="login">
        <div class="wrapper">
            <div class="container">
                <div class="form-container">
                  <div class="signin">
                    <form action="/BEROEPS_2024/Ontkoking/login_php/login.php" method="POST" class="form-sign-in">
                      <img src="../img/image-removebg-preview (1).png" alt="">
                      <h1>Inloggen</h1>
                      <input type="text" name="email" placeholder="E-mail" />
                      <input type="password" name="password" placeholder="Password" />
                      <a href="#">Wachtwoord Vergeten?</a>
                      <button class="btn btn-form">Inloggen</button>
                    </form>
                  </div>
          
                  <div class="signup">
                    <form action="/BEROEPS_2024/Ontkoking/login_php/register.php" method="POST" class="form-sign-up">
                      <img src="../img/image-removebg-preview (1).png" alt="">
                      <h1>registreren</h1>
                      <input type="text" name="firstname" placeholder="Name" />
                      <input type="text" name="lastname" placeholder="Last Name" />
                      <input type="email" name="email" placeholder="E-mail" />
                      <input type="password" name="password" placeholder="Password" />
                      <button class="btn btn-form btn_register">registreren</button>
                    </form>
                  </div>
                </div>
                <div class="overlay">
                  <div class="overlay-panel overlay-signin">
                    <h1>
                      Welkom Terug
                    </h1>
                    <span>
                      Blijf verbonden met ons door in te loggen en je culinaire creaties te delen!
                    </span>
                    <button class="btn btn-overlay btn_signin_overlay" onclick="togglePage()">
                      Inloggen
                    </button>
                  </div>
                  <div class="overlay-panel overlay-signup">
                    <h1>
                      Proef mee!
                    </h1>
                    <span>
                      Deel je favoriete recepten en ga met ons op een heerlijke reis!
                    </span>
                    <button class="btn btn-overlay btn_signup_overlay" onclick="togglePage()">
                      registreren
                    </button>
                  </div>
                </div>
              </div>            
        </div>
    </section>

    
    <section class="footer">
      <div class="wrapper">
        <img src="../img/image-removebg-preview (1).png" alt="">

        <div class="icons_socials">
          <i class="ri-instagram-line"></i>
          <i class="ri-twitter-x-line"></i>
          <i class="ri-github-line"></i>
        </div>
      </div>
    </section>
    

    <script defer src="../js/website.js"></script>
</body>
</html>