document.addEventListener("DOMContentLoaded", function () {
  const body = document.body;
  const sidebar = document.querySelector('.sidebar');
  const navbar = document.querySelector('.navbar');
  const content = document.querySelector('.content'); // Tambahkan elemen content

  // Load saved theme from localStorage
  const savedTheme = localStorage.getItem("theme") || "light";
  applyTheme(savedTheme);

  function applyTheme(theme) {
    if (theme === "dark") {
      body.classList.add("dark-mode");
      body.classList.remove("light-mode");
      
      navbar.classList.add("navbar-dark-mode");
      navbar.classList.remove("navbar-light-mode");
      
      sidebar.classList.add("sidebar-dark-mode");
      sidebar.classList.remove("sidebar-light-mode");
      
      content.classList.add("content-dark-mode");
      content.classList.remove("content-light-mode");
    } else {
      body.classList.add("light-mode");
      body.classList.remove("dark-mode");
      
      navbar.classList.add("navbar-light-mode");
      navbar.classList.remove("navbar-dark-mode");
      
      sidebar.classList.add("sidebar-light-mode");
      sidebar.classList.remove("sidebar-dark-mode");
      
      content.classList.add("content-light-mode");
      content.classList.remove("content-dark-mode");
    }

    // Simpan tema di LocalStorage
    localStorage.setItem("theme", theme);
  }

  // Toggle theme on button click (bisa kamu tambahkan di HTML sebagai button toggle)
  document.getElementById("theme-toggle").addEventListener("click", function () {
    const currentTheme = body.classList.contains("dark-mode") ? "dark" : "light";
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    applyTheme(newTheme);
  });
});
