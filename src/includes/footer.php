    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const dropdownMenu = document.getElementById("dropdown-menu");

        // Event untuk toggle dropdown menu (buka/close)
        menuToggle.addEventListener("click", () => {
          dropdownMenu.classList.toggle("hidden");
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js"></script>
  </div>
</body>
</html>