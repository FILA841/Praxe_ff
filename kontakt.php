<?php
include "includes/menu.php";
?>

<main class="contact-section">
  <h1>Kontaktujte nás</h1>
  <div class="contact-container">
    
    <!-- Levá strana: kontaktní údaje -->
    <div class="contact-info">
      <h2>Šejkspír, s.r.o.</h2>
      <p><strong>Adresa:</strong><br>Erbenova 184<br>Domažlice 344 01</p>
      <p><strong>Telefon:</strong><br>+420 702 193 508</p>
      <p><strong>Email:</strong><br><a href="mailto:sejkspir123@gmail.com">sejkspir123@gmail.com</a></p>
      <p><strong>Otevírací doba:</strong><br>Pondělí – Pátek: 8:00 – 18:00<br>Sobota – Neděle: 10:00 – 16:00</p>
    </div>

    <!-- Pravá strana: mapa -->
    <div id="map"></div>

  </div>
</main>

<!-- Leaflet knihovny -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Leaflet skript -->
<script>
  const map = L.map('map').setView([49.4405, 12.9299], 14); // souřadnice Domažlice

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap přispěvatelé'
  }).addTo(map);

  L.marker([49.4405, 12.9299]).addTo(map)
    .bindPopup("<b>Šejkspír, s.r.o.</b><br>Erbenova 184<br>Domažlice")
    .openPopup();
</script>

<?php
include "includes/footer.php";
?>
