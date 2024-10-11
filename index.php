<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- link -->
  <link rel="stylesheet" href="styling/style.css">

  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css">

</head>

<body>

  <header class="head">
    <div class="wrapper">
      <nav class="nav_list">
        <a href="/BEROEPS_2024/Ontkoking/index.php"><img src="img/image-removebg-preview (1).png" alt="Logo"></a>
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


  <section id="home" class="home">
    <div class="wrapper">
      <div class="text-field">
        <h1><span class="H1_color">Koken</span> met passie, eenvoudig<br>
          en betaalbaar!</h1>
        <p>Transformeer snelle en moeiteloze maaltijden <br>
          in culinaire meesterwerken!</p>
        <div class="container">
          <a href="">
            <div class="button_home">
              <h3>over ons</h3>
            </div>
          </a>
          <a href="">
            <div class="button_home">
              <h3>Gerechten</h3>
            </div>
          </a>
        </div>
      </div>
      <img src="img/Image 1.png" alt="">
    </div>
  </section>

  <section id="dish" class="dishes">
    <div class="wrapper">
      <h1>Recepten</h1>

      <div class="btn_dishes">
        <button class="recepten">Italian</button>
        <button class="recepten">Indian</button>
        <button class="recepten">American</button>
        <button class="recepten">Korean</button>
        <button class="recepten">Chinese</button>
        <button class="recepten">German</button>
        <div class="recepten_toevoegen" id="open_modal">
          <div class="text">
            <p>Toevoegen</p>
          </div>
          <div class="colour">
            <i class="ri-add-line"></i>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div class="modal" id="modal">
        <div class="modal-content">
          <span class="close" id="closeModal"><i class="ri-close-large-line"></i></span>
          <h2>Voeg een recept toe</h2>
          <form id="recipeForm" method="POST" action="/path/to/your/submit/handler">
            <label for="recipeName">Recept Naam:</label>
            <input type="text" id="recipeName" name="recipeName" required>

            <label for="ingredients">Ingrediënten:</label>
            <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

            <label for="description">Beschrijving:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="photo">Foto Upload:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <button id="btn" type="submit">Recept Toevoegen</button>
          </form>
        </div>
      </div>

      <div id="recept" class="view_recepten">
        <div class="dish_container">
          <a href=""><img src="img/pasta-7475756_960_720.jpg" alt=""></a>
          <div class="info">
            <div class="info-item">
              <i class="ri-timer-2-line"></i>
              <span class="info-text">30 min</span>
            </div>
            <div class="info-item">
              <i class="ri-fire-line"></i>
              <span class="info-text">685Kcal</span>
            </div>
            <div class="info-item">
              <i class="ri-user-4-line"></i>
              <span class="info-text"> serveerd 2-4</span>
            </div>
          </div>
          <div class="text">
            <a class="title" href=""><h2>Pasta Penne with red sauce</h2></a>
          </div>
        </div>
        
      </div>
      

    </div>
  </section>

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


  <script defer src="js/website.js"></script>
</body>

</html>