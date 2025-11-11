<?php
include "includes/menu.php";
?>

<main class="shaky-page">
  <section class="shaky-header">
    <h1>Naše shaky</h1>
    <p>Vyberte si z naší shakespérovské nabídky – od osvěžujících ovocných sonetů až po silné proteinové tragédie!</p>
  </section>

  <!-- Kategorie záložky -->
  <div class="shaky-tabs">
    <button class="tab-button active" data-target="ovocne">🍓 Ovocné shaky</button>

    <button class="tab-button" data-target="proteinove">💪 Proteinové shaky</button>

    <button class="tab-button" data-target="dezertni">🍫 Dezertní shaky</button>

    <button class="tab-button" data-target="vegan">🥑 Healthy & Vegan</button>

    <button class="tab-button" data-target="special">🍃Kratom</button>

  </div>

  <!-- OVOCNÉ -->
  <section id="ovocne" class="shaky-category active">
    <h2>🍓 Ovocné shaky – Letní sonety</h2>
    <div class="shaky-grid">
      <div class="shaky-item">
         <img src="obrazky/kra.jpg" alt="Sonet o mangu">
         <h3>Sonet o mangu</h3><p class="desc">Mango, kokosové mléko, ananas</p><p class="price">89 Kč / 59 Kč</p></div>
      <div class="shaky-item"><h3>Růžová Julie</h3><p class="desc">Jahody, maliny, růžová voda, mandlové mléko</p><p class="price">89 Kč / 59 Kč</p></div>
      <div class="shaky-item"><h3>Zelený princ</h3><p class="desc">Špenát, banán, jablko, kiwi, limetka</p><p class="price">85 Kč / 56 Kč</p></div>
      <div class="shaky-item"><h3>Letní sen</h3><p class="desc">Broskev, marakuja, pomerančový džus</p><p class="price">89 Kč / 59 Kč</p></div>
      <div class="shaky-item"><h3>Tropická bouře</h3><p class="desc">Mango, banán, kokos, ananas, chia</p><p class="price">95 Kč / 69 Kč</p></div>
    </div>
  </section>

  <!-- PROTEINOVÉ -->
  <section id="proteinove" class="shaky-category">
    <h2>💪 Proteinové shaky – Síla Hamleta</h2>
    <div class="shaky-grid">
      <div class="shaky-item"><h3>Hamletův hněv</h3><p class="desc">Čokoláda, arašídové máslo, protein, ovesné mléko</p><p class="price">105 Kč / 69 Kč</p></div>
      <div class="shaky-item"><h3>Macbeth Mass</h3><p class="desc">Banán, datle, vanilkový protein, skořice</p><p class="price">105 Kč / 69 Kč</p></div>
      <div class="shaky-item"><h3>Othellův ořech</h3><p class="desc">Lískový ořech, kakao, protein, rýžové mléko</p><p class="price">109 Kč / 75 Kč</p></div>
      <div class="shaky-item"><h3>Romeovo ráno</h3><p class="desc">Jahoda, vanilka, řecký jogurt, med</p><p class="price">99 Kč / 69 Kč</p></div>
      <div class="shaky-item"><h3>Shakes-gain</h3><p class="desc">Cookies & cream protein, mandlové mléko, banán</p><p class="price">109 Kč / 75 Kč</p></div>
    </div>
  </section>

  <!-- DEZERTNÍ -->
  <section id="dezertni" class="shaky-category">
    <h2>🍫 Dezertní shaky – Sladké drama</h2>
    <div class="shaky-grid">
      <div class="shaky-item"><h3>Sen noci čokoládové</h3><p class="desc">Čokoláda, smetana, kokos</p><p class="price">95 Kč / 69 Kč</p></div>
      <div class="shaky-item"><h3>Karamelová tragédie</h3><p class="desc">Slaný karamel, banán, mléko</p><p class="price">95 Kč / 69 Kč</p></div>
      <div class="shaky-item"><h3>Medový sen</h3><p class="desc">Med, vanilka, mandle, mléko</p><p class="price">92 Kč / 67 Kč</p></div>
      <div class="shaky-item"><h3>Láska na první lok</h3><p class="desc">Jahody, bílá čokoláda, smetana</p><p class="price">95 Kč / 69 Kč</p></div>
    </div>
  </section>

  <!-- VEGAN -->
  <section id="vegan" class="shaky-category">
    <h2>🥑 Healthy & Vegan – Zdravý epilog</h2>
    <div class="shaky-grid">
      <div class="shaky-item"><h3>Veggie Verona</h3><p class="desc">Špenát, avokádo, jablko, citron</p><p class="price">89 Kč / 59 Kč</p></div>
      <div class="shaky-item"><h3>Bio Bard</h3><p class="desc">Borůvky, mandlové mléko, chia semínka</p><p class="price">92 Kč / 67 Kč</p></div>
      <div class="shaky-item"><h3>Forest Flow</h3><p class="desc">Lesní ovoce, kokosová voda, datle</p><p class="price">89 Kč / 59 Kč</p></div>
      <div class="shaky-item"><h3>Zen Shake</h3><p class="desc">Matcha, kokos, banán, mandlové mléko</p><p class="price">99 Kč / 69 Kč</p></div>
    </div>
    </section>

    <section id="special" class="shaky-category">
        <h2> 🍃 kratom - Šindyho román </h2>
        <div class="shaky-grid">
            <div class="shaky-item">
                <img src="obrazky/kra.jpg" alt="Sonet o mangu"><h3> Kra-Shake</h3><p
            class="desc"> Zelený kratom, Lipton tea</p><p class="price">69 Kč 0,3 l / 99 Kč 0,5 l </p>
        </div>
  </section>
</main>

<script>
  // Přepínání kategorií
  const buttons = document.querySelectorAll('.tab-button');
  const sections = document.querySelectorAll('.shaky-category');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const target = btn.getAttribute('data-target');

      sections.forEach(sec => {
        sec.classList.remove('active');
        if (sec.id === target) sec.classList.add('active');
      });
    });
  });
</script>

<?php
include "includes/footer.php";
?>
