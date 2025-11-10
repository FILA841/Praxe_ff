<?php include "includes/menu.php"; ?>

<main class="bmi-section">
  <section class="bmi-card">
    <h1>BMI kalkulačka</h1>
    <p class="lead">Zjisti své BMI (Body Mass Index) a do jaké kategorie spadáš.</p>

    <form id="bmiForm" class="bmi-form" onsubmit="return false;">
      <div class="row">
        <label for="weight">Váha (kg)</label>
        <input id="weight" name="weight" type="number" min="20" max="500" step="0.1" placeholder="např. 69" required>
      </div>

      <div class="row">
        <label for="height">Výška (cm)</label>
        <input id="height" name="height" type="number" min="80" max="260" step="0.1" placeholder="např. 175" required>
      </div>

      <div class="row inline">
        <label for="age">Věk (volitelně)</label>
        <input id="age" name="age" type="number" min="1" max="120" step="1" placeholder="např. 25">
      </div>

      <div class="actions">
        <button id="calcBtn" class="btn primary" type="button">Spočítat BMI</button>
        <button id="resetBtn" class="btn" type="button">Vymazat</button>
      </div>
    </form>

    <div id="bmiResult" class="bmi-result hidden" aria-live="polite">
      <h2>Výsledek</h2>
      <p class="bmi-value"><strong>BMI:</strong> <span id="bmiValue">—</span></p>
      <p class="bmi-category"><strong>Kategorie:</strong> <span id="bmiCategory">—</span></p>
      <p class="bmi-range"><strong>Ideální váha pro tvou výšku:</strong> <span id="weightRange">—</span></p>
      <p class="bmi-advice" id="bmiAdvice"></p>
    </div>

    <div class="bmi-info">
      <h3>Jak se počítá BMI</h3>
      <p>BMI = váha (kg) / (výška (m) × výška (m)).</p>
      <ul>
        <li>&lt; 18,5 — podváha</li>
        <li>18,5–24,9 — normální váha</li>
        <li>25–29,9 — nadváha</li>
        <li>≥ 30 — obezita</li>
      </ul>
    </div>

  </section>
</main>

<script>
  // helper: zaokrouhlení na 1 desetinné místo
  function round1(x){ return Math.round(x * 10) / 10; }

  const calcBtn = document.getElementById('calcBtn');
  const resetBtn = document.getElementById('resetBtn');
  const bmiResult = document.getElementById('bmiResult');

  function getCategory(bmi) {
    if (bmi < 18.5) return {name: 'Podváha', color: '#3aa0ff', advice: 'Zvaž lehké přibrání — poradit se s lékařem nebo výživovým poradcem.'};
    if (bmi < 25) return {name: 'Normální váha', color: '#2bb673', advice: 'Výborně — udržuj zdravý životní styl.'};
    if (bmi < 30) return {name: 'Nadváha', color: '#ffbf00', advice: 'Zvaž úpravu jídelníčku a více pohybu.'};
    return {name: 'Obezita', color: '#ff6b6b', advice: 'Doporučujeme konzultaci s lékařem a plán redukce váhy.'};
  }

  calcBtn.addEventListener('click', () => {
    const w = parseFloat(document.getElementById('weight').value);
    const hcm = parseFloat(document.getElementById('height').value);

    if (!w || !hcm || w <= 0 || hcm <= 0) {
      alert('Zadej prosím platnou výšku i váhu.');
      return;
    }

    const hm = hcm / 100.0;
    const bmi = w / (hm * hm);
    const bmiRounded = round1(bmi);

    // Ideální rozmezí váhy pro BMI 18.5 - 24.9
    const minW = round1(18.5 * hm * hm);
    const maxW = round1(24.9 * hm * hm);

    // Kategorie
    const cat = getCategory(bmi);

    // Zobrazit výsledky
    document.getElementById('bmiValue').textContent = bmiRounded.toFixed(1);
    document.getElementById('bmiCategory').textContent = cat.name;
    document.getElementById('bmiCategory').style.color = cat.color;
    document.getElementById('weightRange').textContent = `${minW} kg — ${maxW} kg`;
    document.getElementById('bmiAdvice').textContent = cat.advice;

    bmiResult.classList.remove('hidden');
    bmiResult.scrollIntoView({behavior: 'smooth', block: 'center'});
  });

  resetBtn.addEventListener('click', () => {
    document.getElementById('bmiForm').reset();
    bmiResult.classList.add('hidden');
  });
</script>

<?php include "includes/footer.php"; ?>
