<?php
include "includes/menu.php";
?>

<main class="shaky-page">
  <section class="shaky-header">
    <h1>Naše shaky</h1>
    <p>Vyberte si z naší shakespérovské nabídky – od osvěžujících ovocných sonetů až po silné proteinové tragédie!</p>
  </section>

  <div class="shaky-search">
    <input type="text" id="searchInput" placeholder="Hledat shake...">
  </div>

  <!-- Kategorie záložky -->
  <div class="shaky-tabs">
    <button class="tab-button active" data-target="ovocne">🍓 Ovocné shaky</button>
    <button class="tab-button" data-target="proteinove">💪 Proteinové shaky</button>
    <button class="tab-button" data-target="dezertni">🍫 Dezertní shaky</button>
    <button class="tab-button" data-target="vegan">🥑 Healthy & Vegan</button>
    <button class="tab-button" data-target="special">🍃 Kratom</button>
  </div>

  <!-- FUNKČNÍ PŘIDÁNÍ DO KOŠÍKU + VÝBĚR OBJEMU -->
  <?php
  // funkce pro generování shake karty = aby ses nemusel 50× opakovat
  function shakeItem($img, $name, $desc, $price_big, $price_small) {
      echo '
      <div class="shaky-item">
        <img src="shaky/'.$img.'" alt="'.$name.'">
        <h3>'.$name.'</h3>
        <p class="desc">'.$desc.'</p>
        <p class="price">'.$price_big.' Kč 0,5l / '.$price_small.' Kč 0,3l</p>

        <form action="kosik.php" method="post" class="add-form">
          <label>Velikost:</label>
          <select name="size" onchange="updatePrice(this)">
            <option value="0.3" data-price="'.$price_small.'">0,3 l – '.$price_small.' Kč</option>
            <option value="0.5" data-price="'.$price_big.'">0,5 l – '.$price_big.' Kč</option>
          </select>

          <input type="hidden" name="product" value="'.$name.'">
          <input type="hidden" class="price-field" name="price" value="'.$price_small.'">

          <button type="submit" class="add-to-cart">🛍️ Přidat do košíku</button>
        </form>
      </div>';
  }
  ?>

  <!-- OVOCNÉ -->
  <section id="ovocne" class="shaky-category active">
    <h2>🍓 Ovocné shaky – Letní sonety</h2>
    <div class="shaky-grid">
      <?php
      shakeItem("sonet_o_mangu.png", "Sonet o mangu", "Mango, kokosové mléko, ananas", 89, 59);
      shakeItem("ruzvova_julie.png", "Růžová Julie", "Jahody, maliny, růžová voda, mandlové mléko", 89, 59);
      shakeItem("zeleny_princ.png", "Zelený princ", "Špenát, banán, jablko, kiwi, limetka", 85, 56);
      shakeItem("letni_sen.png", "Letní sen", "Broskev, marakuja, pomerančový džus", 89, 59);
      shakeItem("tropicka_boure.png", "Tropická bouře", "Mango, banán, kokos, ananas, chia", 95, 69);
      ?>
    </div>
  </section>

  <!-- PROTEINOVÉ -->
  <section id="proteinove" class="shaky-category">
    <h2>💪 Proteinové shaky – Síla Hamleta</h2>
    <div class="shaky-grid">
      <?php
      shakeItem("hamletuv_hnev.png", "Hamletův hněv", "Čokoláda, arašídové máslo, protein, ovesné mléko", 105, 69);
      shakeItem("macbeth_mass.png", "Macbeth Mass", "Banán, datle, vanilkový protein, skořice", 105, 69);
      shakeItem("othelluv_orech.jpg", "Othellův ořech", "Lískový ořech, kakao, protein, rýžové mléko", 109, 75);
      shakeItem("romeovo_rano.jpg", "Romeovo ráno", "Jahoda, vanilka, řecký jogurt, med", 99, 69);
      shakeItem("shakes-gain.jpg", "Shakes-gain", "Cookies & cream protein, mandlové mléko, banán", 109, 75);
      ?>
    </div>
  </section>

  <!-- DEZERTNÍ -->
  <section id="dezertni" class="shaky-category">
    <h2>🍫 Dezertní shaky – Sladké drama</h2>
    <div class="shaky-grid">
      <?php
      shakeItem("sen_noci_cokoladove.png", "Sen noci čokoládové", "Čokoláda, smetana, kokos", 95, 69);
      shakeItem("karamelova_tragedie.png", "Karamelová tragédie", "Slaný karamel, banán, mléko", 95, 69);
      shakeItem("medovy_sen.png", "Medový sen", "Med, vanilka, mandle, mléko", 92, 67);
      shakeItem("laska_na_prvni_lok.png", "Láska na první lok", "Jahody, bílá čokoláda, smetana", 95, 69);
      ?>
    </div>
  </section>

  <!-- VEGAN -->
  <section id="vegan" class="shaky-category">
    <h2>🥑 Healthy & Vegan – Zdravý epilog</h2>
    <div class="shaky-grid">
      <?php
      shakeItem("veggie_verona.png", "Veggie Verona", "Špenát, avokádo, jablko, citron", 89, 59);
      shakeItem("bio_bard.png", "Bio Bard", "Borůvky, mandlové mléko, chia semínka", 92, 67);
      shakeItem("forest_flow.png", "Forest Flow", "Lesní ovoce, kokosová voda, datle", 89, 59);
      shakeItem("zen_shake.png", "Zen Shake", "Matcha, kokos, banán, mandlové mléko", 99, 69);
      ?>
    </div>
  </section>

  <!-- SPECIAL -->
  <section id="special" class="shaky-category">
    <h2>🍃 Kratom – Šindyho román</h2>
    <div class="shaky-grid">
      <?php
      shakeItem("kra_shake.png", "Kra-Shake", "Zelený kratom, Lipton tea", 99, 69);
      ?>
    </div>
  </section>
</main>

<!-- TABY -->
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

<!-- SEARCH -->
<script>
const searchInput = document.getElementById("searchInput");
const categories = document.querySelectorAll(".shaky-category");
const items = document.querySelectorAll(".shaky-item");

searchInput.addEventListener("input", () => {
    const term = searchInput.value.toLowerCase().trim();
    items.forEach(item => {
        const txt = (item.querySelector("h3").textContent + item.querySelector(".desc").textContent).toLowerCase();
        item.style.display = txt.includes(term) ? "block" : "none";
    });
});
</script>

<!-- UPDATE PRICE -->
<script>
function updatePrice(select) {
    const price = select.options[select.selectedIndex].dataset.price;
    const wrapper = select.closest(".shaky-item");
    wrapper.querySelector(".price-field").value = price;
}
</script>

<?php include "includes/footer.php"; ?>
