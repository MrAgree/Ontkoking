<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KookMedia</title>
    
    <link rel="stylesheet" href="styling/over_ons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css">

</head>
<body>

<header class="head">
    <div class="wrapper">
      <nav class="nav_list">
        <a href="index.php"><img src="img/image-removebg-preview (1).png" alt="Logo"></a>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#">Over Ons</a></li>
          <li><a href="#dish">Gerechten</a></li>
        </ul>
      </nav>
      <div class="container">
        <div class="search">
          <input class="search_bar" type="text" placeholder="Search...">
          <i class="ri-search-2-line"></i>
        </div>

        <div class="login-btn">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
            <div class="user-dropdown">
              <i class="ri-user-3-line"></i> <!-- User icon when logged in -->
              <div class="dropdown-content">
                <a href="/BEROEPS_2024/Ontkoking/login_php/logout.php">Log Out</a>
              </div>
            </div>
          <?php else: ?>
            <a href="/BEROEPS_2024/Ontkoking/login_php/login.php">
              <i class="ri-login-box-line"></i> <!-- Login icon when not logged in -->
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>

    <main>
        <div class="wrapper">
            <section class="intro">
                <h1>KookMedia</h1>
                <p>Het is een van de meest populaire kook websites.
                   Ook is het niet alleen een website, maar het is ook en tv programma.
                    Je kan daar ook recepten vinden van mensen die op het progamma zitten.<br><br>

                   Mensen zoals majaska of rudoplh hebben meestal hun recepten op de website.
                   Je kan ook zie wat de populairste recepten zijn op de website.<br><br>

                   De aesthetic van de website is ook kleurrijk wat mensen ook mooi zouden vinden.
                   Vooral jongeren die bijvoorbeeld vegatarisch of aan het milieu denken zouden de website ook leuk vinden.<br><br>
                   
                      De website zou je ook helpen met koken. 
                      Want de recepten zijn heel erg gedtailleerd.
                      Dus voor mensen die echt niet kunnen koken kunnen ze het nog steeds proberen dor de gedtailleerde recepten
            </section>

        <section class="image-circles">
            <div class="circle" id="circle1"></div>
            <div class="circle" id="circle2"></div>
            <div class="circle" id="circle3"></div> 
        </section> 
        </div>
       
    </main>

    <section class="footer">
    <div class="wrapper">
      <img src="./img/image-removebg-preview (1).png" alt="">

      <div class="icons_socials">
        <i class="ri-instagram-line"></i>
        <i class="ri-twitter-x-line"></i>
        <i class="ri-github-line"></i>
      </div>
    </div>
  </section>

</body>
</html>
