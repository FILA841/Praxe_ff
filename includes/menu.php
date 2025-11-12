
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css? <?php echo time(); ?>" type="text/css">
    <title> Šejkspír, s. r. o. </title>
</head>
<body>
    

<div class="sale">
    <p> Doprava zdarma při nákupu nad 1000 Kč!!! </p>
</div>

<header class="site-header">
  <div class="brand">
    <div class="logo-wrap">
      <a href="index.php"> <img src="obrazky/logo.png" alt="sejkspir logo" /> </a>
    </div>
    <div class="brand-title">
      <span class="name">Šejkspír</span>
      <span class="tag">Shaky &amp; milkshaky</span>
    </div>
  </div>

  <button class="hamburger" id="hamburger" aria-label="Otevřít menu">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M4 6h16M4 12h16M4 18h16" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>

    <nav class="nav" id="nav">
    <a href="onas.php">O nás</a>
    <a href="shaky.php">Shaky</a>
    <a href="bmi.php">Bmi kalkulačka</a>
    <a href="kontakt.php">Kontakt</a>

    <!-- Language switcher -->
<div class="lang-switcher">
  <select id="langSelect" aria-label="Vyberte jazyk">
    <option value="cs" selected>Česky</option>
    <option value="en">English</option>
  </select>
  
</div>
  </nav>

  <!-- Přihlášení -->
<div class="user-icon" id="userIcon">
  <img src="obrazky/panacek.png" alt="Přihlášení" />
</div>

<!-- Košík -->
    <a href="kosik.php" class="cart-icon">
      🛒 <span id="cart-count">
        <?php 
          if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

          echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; 
        ?>

<div class="login-popup" id="loginPopup">
  <div class="popup-content">
    <span class="close-popup" id="closePopup">&times;</span>
    <h2>Přihlášení</h2>
    <form class="login-form">
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Zadej e-mail" required>

      <label for="password">Heslo</label>
      <input type="password" id="password" name="password" placeholder="Zadej heslo" required>

      <button type="submit">Přihlásit se</button>
      <p class="register-text">Nemáš účet? <a href="#">Zaregistruj se</a></p>
    </form>
  </div>
</div>

<script>
  const userIcon = document.getElementById('userIcon');
  const loginPopup = document.getElementById('loginPopup');
  const closePopup = document.getElementById('closePopup');

  userIcon.addEventListener('click', () => {
    loginPopup.style.display = 'flex';
  });

  closePopup.addEventListener('click', () => {
    loginPopup.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if (e.target === loginPopup) {
      loginPopup.style.display = 'none';
    }
  });
</script>


</header>