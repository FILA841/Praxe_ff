const searchInput = document.getElementById("searchInput");
const sections = document.querySelectorAll(".shaky-category");
const tabButtons = document.querySelectorAll(".tab-button");
const items = document.querySelectorAll(".shaky-item");

searchInput.addEventListener("input", () => {
    const term = searchInput.value.toLowerCase().trim();

    if (term === "") {
        // Reset: zobraz všechny kategorie a nastav první tab
        sections.forEach(section => {
            section.style.display = "block";        // přepiš CSS display
            section.classList.remove("active");
            section.querySelectorAll(".shaky-item").forEach(item => item.style.display = "block");
        });
        const firstSection = document.querySelector("#ovocne");
        firstSection.classList.add("active");

        tabButtons.forEach(b => b.classList.remove("active"));
        document.querySelector('[data-target="ovocne"]').classList.add("active");
        return;
    }

    // Hledání napříč všemi shakey
    const categoriesWithMatch = new Set();

    items.forEach(item => {
        const title = item.querySelector("h3").textContent.toLowerCase();
        const desc = item.querySelector(".desc").textContent.toLowerCase();

        const match = title.includes(term) || desc.includes(term);
        item.style.display = match ? "block" : "none";

        if (match) {
            const categoryId = item.closest(".shaky-category").id;
            categoriesWithMatch.add(categoryId);
        }
    });

    sections.forEach(section => {
        if (categoriesWithMatch.has(section.id)) {
            section.style.display = "block";      // přepiš CSS display
            section.classList.add("active");      // vizuálně otevři
        } else {
            section.style.display = "none";
            section.classList.remove("active");
        }
    });

    tabButtons.forEach(b => b.classList.remove("active"));
});
