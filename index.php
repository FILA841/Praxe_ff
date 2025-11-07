<?php
    include "includes/menu.php"
?>
<main class="menu-section">
  <h1>Výběr shaků</h1>
  <ul class="product-list">
    <li>Jahodový milkshake</li>
    <li>Vanilkový milkshake</li>
    <li>Čokoládový milkshake</li>
    <li>Banánový milkshake</li>
    <li>Cappuccino milkshake</li>
    <li>Čokoládovo-mátový milkshake</li>
  </ul>
</main>

<script>
  // --- TOGGLE MOBILNÍ MENU ---
  const ham = document.getElementById('hamburger');
  const nav = document.getElementById('nav');
  if (ham && nav) {
    ham.addEventListener('click', () => {
      const shown = nav.style.display === 'flex';
      nav.style.display = shown ? 'none' : 'flex';
      ham.setAttribute('aria-expanded', String(!shown));
    });
  }
</script>

<?php
    include "includes/footer.php"
?>