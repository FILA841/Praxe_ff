<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Přidání produktu
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $_SESSION['cart'][] = ['name' => $product, 'price' => $price];
    header("Location: kosik.php");
    exit;
}

// Odstranění položky
if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // přeuspořádání
    header("Location: kosik.php");
    exit;
}

include "includes/menu.php";
?>

<main class="cart-page">
  <h1>🛒 Tvůj košík</h1>

  <?php if (empty($_SESSION['cart'])): ?>
    <p>Tvůj košík je prázdný 😢</p>
    <a href="shaky.php" class="back-button">Zpět na nabídku</a>
  <?php else: ?>
    <table class="cart-table">
      <thead>
        <tr>
          <th>Produkt</th>
          <th>Cena</th>
          <th>Akce</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $total = 0;
          foreach ($_SESSION['cart'] as $i => $item): 
            $total += $item['price'];
        ?>
          <tr>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td><?= $item['price'] ?> Kč</td>
            <td><a href="?remove=<?= $i ?>" class="remove-btn">❌</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="cart-summary">
      <h3>Celkem: <?= $total ?> Kč</h3>
      <button class="order-btn">✅ Odeslat objednávku</button>
    </div>
  <?php endif; ?>
</main>

<?php include "includes/footer.php"; ?>