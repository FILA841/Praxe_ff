<?php include "includes/menu.php"; ?>

<main class="home">
  <section class="intro">
    <h1>Výběr shaků</h1>
    <p>Objev naši nabídku těch nejlepších milkshaků – od klasiky až po experimentální příchutě!</p>
  </section>

  <section class="shakes-grid">
    <div class="shake-card">
      <img src="obrazky/banan.png" alt="Banánový shake">
      <h3>Banánový shake</h3>
      <p>Sladký, krémový a plný energie. Ideální start dne!</p>
    </div>

    <div class="shake-card">
      <img src="obrazky/jahoda.png" alt="Jahodový shake">
      <h3>Jahodový shake</h3>
      <p>Klasika s čerstvými jahodami a smetanovým základem.</p>
    </div>

    <div class="shake-card">
      <img src="obrazky/cokolada.png" alt="Čokoládový shake">
      <h3>Čokoládový shake</h3>
      <p>Pro milovníky kakaa a čokoládového nebe.</p>
    </div>

    <div class="shake-card">
      <img src="obrazky/vanilka.webp" alt="Vanilkový shake">
      <h3>Vanilkový shake</h3>
      <p>Jemná chuť pravé vanilky – klasika, co nikdy nezklame.</p>
    </div>

    <div class="shake-card">
      <img src="obrazky/coko-mata.webp" alt="Čokoládovo-mátový shake">
      <h3>Čokoládovo-mátový shake</h3>
      <p>Osvěžující kombinace čokolády a máty.</p>
    </div>

    <div class="shake-card">
      <img src="obrazky/capucino.jpg" alt="Cappuccino shake">
      <h3>Cappuccino shake</h3>
      <p>Pro milovníky kávy s jemnou mléčnou pěnou.</p>
    </div>
  </section>
</main>

<script>
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

<?php include "includes/footer.php"; ?>
