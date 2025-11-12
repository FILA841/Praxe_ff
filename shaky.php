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
    <button class="tab-button" data-target="special">🍃 Kratom</button>
  </div>

  <!-- OVOCNÉ -->
  <section id="ovocne" class="shaky-category active">
    <h2>🍓 Ovocné shaky – Letní sonety</h2>
    <div class="shaky-grid">
      <div class="shaky-item">
        <img src="shaky/sonet_o_mangu.png" alt="Sonet o mangu">
        <h3>Sonet o mangu</h3>
        <p class="desc">Mango, kokosové mléko, ananas</p>
        <p class="price">89 Kč 0,5l / 59 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/ruzvova_julie.png" alt="Růžová Julie">
        <h3>Růžová Julie</h3>
        <p class="desc">Jahody, maliny, růžová voda, mandlové mléko</p>
        <p class="price">89 Kč  0,5l / 59 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/zeleny_princ.png" alt="Zelený princ">
        <h3>Zelený princ</h3>
        <p class="desc">Špenát, banán, jablko, kiwi, limetka</p>
        <p class="price">85 Kč  0,5l / 56 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/letni_sen.png" alt="Letní sen">
        <h3>Letní sen</h3>
        <p class="desc">Broskev, marakuja, pomerančový džus</p>
        <p class="price">89 Kč 0,5l / 59 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/tropicka_boure.png" alt="Tropická bouře">
        <h3>Tropická bouře</h3>
        <p class="desc">Mango, banán, kokos, ananas, chia</p>
        <p class="price">95 Kč / 69 Kč</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
    </div>
  </section>

  <!-- PROTEINOVÉ -->
  <section id="proteinove" class="shaky-category">
    <h2>💪 Proteinové shaky – Síla Hamleta</h2>
    <div class="shaky-grid">
      <div class="shaky-item">
        <img src="shaky/hamletuv_hnev.png" alt="Hamletův hněv">
        <h3>Hamletův hněv</h3>
        <p class="desc">Čokoláda, arašídové máslo, protein, ovesné mléko</p>
        <p class="price">105 Kč 0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/macbeth_mass.png" alt="Macbeth Mass">
        <h3>Macbeth Mass</h3>
        <p class="desc">Banán, datle, vanilkový protein, skořice</p>
        <p class="price">105 Kč 0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/othelluv_orech.jpg" alt="Othellův ořech">
        <h3>Othellův ořech</h3>
        <p class="desc">Lískový ořech, kakao, protein, rýžové mléko</p>
        <p class="price">109 Kč 0,5l / 75 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/romeovo_rano.jpg" alt="Romeovo ráno">
        <h3>Romeovo ráno</h3>
        <p class="desc">Jahoda, vanilka, řecký jogurt, med</p>
        <p class="price">99 Kč 0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/shakes-gain.jpg" alt="Shakes-gain">
        <h3>Shakes-gain</h3>
        <p class="desc">Cookies & cream protein, mandlové mléko, banán</p>
        <p class="price">109 Kč 0,5l / 75 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
    </div>
  </section>

  <!-- DEZERTNÍ -->
  <section id="dezertni" class="shaky-category">
    <h2>🍫 Dezertní shaky – Sladké drama</h2>
    <div class="shaky-grid">
      <div class="shaky-item">
        <img src="shaky/sen_noci_cokoladove.png" alt="Sen noci čokoládové">
        <h3>Sen noci čokoládové</h3>
        <p class="desc">Čokoláda, smetana, kokos</p>
        <p class="price">95 Kč 0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/karamelova_tragedie.png" alt="Karamelová tragédie">
        <h3>Karamelová tragédie</h3>
        <p class="desc">Slaný karamel, banán, mléko</p>
        <p class="price">95 Kč  0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/medovy_sen.png" alt="Medový sen">
        <h3>Medový sen</h3>
        <p class="desc">Med, vanilka, mandle, mléko</p>
        <p class="price">92 Kč 0,5l / 67 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/laska_na_prvni_lok.png" alt="Láska na první lok">
        <h3>Láska na první lok</h3>
        <p class="desc">Jahody, bílá čokoláda, smetana</p>
        <p class="price">95 Kč 0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
    </div>
  </section>

  <!-- VEGAN -->
  <section id="vegan" class="shaky-category">
    <h2>🥑 Healthy & Vegan – Zdravý epilog</h2>
    <div class="shaky-grid">
      <div class="shaky-item">
        <img src="shaky/veggie_verona.png" alt="Veggie Verona">
        <h3>Veggie Verona</h3>
        <p class="desc">Špenát, avokádo, jablko, citron</p>
        <p class="price">89 Kč 0,5l / 59 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/bio_bard.png" alt="Bio Bard">
        <h3>Bio Bard</h3>
        <p class="desc">Borůvky, mandlové mléko, chia semínka</p>
        <p class="price">92 Kč 0,5l / 67 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/forest_flow.png" alt="Forest Flow">
        <h3>Forest Flow</h3>
        <p class="desc">Lesní ovoce, kokosová voda, datle</p>
        <p class="price">89 Kč 0,5l / 59 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
      <div class="shaky-item">
        <img src="shaky/zen_shake.png" alt="Zen Shake">
        <h3>Zen Shake</h3>
        <p class="desc">Matcha, kokos, banán, mandlové mléko</p>
        <p class="price">99 Kč 0,5l / 69 Kč 0,3l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
    </div>
  </section>

  <!-- SPECIAL -->
  <section id="special" class="shaky-category">
    <h2>🍃 Kratom – Šindyho román</h2>
    <div class="shaky-grid">
      <div class="shaky-item">
        <img src="shaky/kra_shake.png" alt="Kra-Shake">
        <h3>Kra-Shake</h3>
        <p class="desc">Zelený kratom, Lipton tea</p>
        <p class="price">69 Kč 0,3l / 99 Kč 0,5l</p>
        <form action="kosik.php" method="post">
  <input type="hidden" name="product" value="Sonet o mangu">
  <input type="hidden" name="price" value="89">
  <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
</form>
      </div>
    </div>
  </section>
</main>

<script>
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

<?php include "includes/footer.php"; ?>
