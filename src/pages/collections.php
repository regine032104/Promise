<?php
require_once('../backend/session_check.php');
$isLoggedIn = isLoggedIn();

// Get user data directly from session for consistency
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Collections - Promise</title>
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="../theme.css" />
</head>

<body class="flex min-h-screen flex-col bg-candy-cream">
  <!-- NAVBAR -->
  <?php include('../components/navbar.html'); ?>

  <!-- HERO -->
  <?php
  $title = "THE BRIDAL";
  $highlight = "COLLECTIONS";
  $subtitle = "Discover our exquisite collection of wedding dresses, each designed to make your special day unforgettable.";
  include('../components/hero.html');
  ?>

  <main class="flex-grow py-16 md:py-20">
    <div class="relative z-10 m-auto max-w-screen-xl justify-center py-2">
      <!-- Collections Grid -->
      <div class="grid grid-cols-1 gap-8 px-4 sm:grid-cols-2 lg:grid-cols-3">
        
        <!-- Collection 1: Issa 2 -->
        <div class="group cursor-pointer overflow-hidden rounded-lg bg-white shadow-[0_8px_30px_rgba(210,199,229,0.12)] transition-all duration-300 hover:shadow-[0_12px_40px_rgba(210,199,229,0.2)]">
          <div class="aspect-[3/4] overflow-hidden bg-gradient-to-br from-amber-50 to-amber-100">
            <img src="../img/pp-1.webp" alt="Issa 2 Wedding Dress" 
                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
          </div>
          <div class="p-6 text-center">
            <h3 class="font-Tinos text-xl text-pink-950">Issa 2</h3>
            <p class="mt-2 text-sm text-pink-700">Elegant off-the-shoulder gown with delicate lace detailing</p>
            <div class="mt-4">
              <span class="text-lg font-semibold text-candy-peach">$2,500</span>
            </div>
          </div>
        </div>

        <!-- Collection 2: Jenna -->
        <div class="group cursor-pointer overflow-hidden rounded-lg bg-white shadow-[0_8px_30px_rgba(210,199,229,0.12)] transition-all duration-300 hover:shadow-[0_12px_40px_rgba(210,199,229,0.2)]">
          <div class="aspect-[3/4] overflow-hidden bg-gradient-to-br from-amber-50 to-amber-100">
            <img src="../img/pp-2.webp" alt="Jenna Wedding Dress" 
                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
          </div>
          <div class="p-6 text-center">
            <h3 class="font-Tinos text-xl text-pink-950">Jenna</h3>
            <p class="mt-2 text-sm text-pink-700">Romantic A-line gown with voluminous tulle skirt</p>
            <div class="mt-4">
              <span class="text-lg font-semibold text-candy-peach">$2,800</span>
            </div>
          </div>
        </div>

        <!-- Collection 3: Mia 2 -->
        <div class="group cursor-pointer overflow-hidden rounded-lg bg-white shadow-[0_8px_30px_rgba(210,199,229,0.12)] transition-all duration-300 hover:shadow-[0_12px_40px_rgba(210,199,229,0.2)]">
          <div class="aspect-[3/4] overflow-hidden bg-gradient-to-br from-amber-50 to-amber-100">
            <img src="../img/pp-3.jpg" alt="Mia 2 Wedding Dress" 
                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
          </div>
          <div class="p-6 text-center">
            <h3 class="font-Tinos text-xl text-pink-950">Mia 2</h3>
            <p class="mt-2 text-sm text-pink-700">Dramatic high-low gown with structured corset bodice</p>
            <div class="mt-4">
              <span class="text-lg font-semibold text-candy-peach">$3,200</span>
            </div>
          </div>
        </div>

        <!-- Collection 4: Mia -->
        <div class="group cursor-pointer overflow-hidden rounded-lg bg-white shadow-[0_8px_30px_rgba(210,199,229,0.12)] transition-all duration-300 hover:shadow-[0_12px_40px_rgba(210,199,229,0.2)]">
          <div class="aspect-[3/4] overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
            <img src="../img/pp-4.jpg" alt="Mia Wedding Dress" 
                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
          </div>
          <div class="p-6 text-center">
            <h3 class="font-Tinos text-xl text-pink-950">Mia</h3>
            <p class="mt-2 text-sm text-pink-700">Chic tea-length dress with modern A-line silhouette</p>
            <div class="mt-4">
              <span class="text-lg font-semibold text-candy-peach">$1,800</span>
            </div>
          </div>
        </div>

        <!-- Collection 5: Juliette -->
        <div class="group cursor-pointer overflow-hidden rounded-lg bg-white shadow-[0_8px_30px_rgba(210,199,229,0.12)] transition-all duration-300 hover:shadow-[0_12px_40px_rgba(210,199,229,0.2)]">
          <div class="aspect-[3/4] overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
            <img src="../img/pp-5.jpg" alt="Juliette Wedding Dress" 
                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
          </div>
          <div class="p-6 text-center">
            <h3 class="font-Tinos text-xl text-pink-950">Juliette</h3>
            <p class="mt-2 text-sm text-pink-700">Timeless long-sleeved gown with boat neck elegance</p>
            <div class="mt-4">
              <span class="text-lg font-semibold text-candy-peach">$2,900</span>
            </div>
          </div>
        </div>

        <!-- Collection 6: Sarah -->
        <div class="group cursor-pointer overflow-hidden rounded-lg bg-white shadow-[0_8px_30px_rgba(210,199,229,0.12)] transition-all duration-300 hover:shadow-[0_12px_40px_rgba(210,199,229,0.2)]">
          <div class="aspect-[3/4] overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
            <img src="../img/pp-6.webp" alt="Sarah Wedding Dress" 
                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105" />
          </div>
          <div class="p-6 text-center">
            <h3 class="font-Tinos text-xl text-pink-950">Sarah</h3>
            <p class="mt-2 text-sm text-pink-700">Relaxed flowing gown with modern pocket details</p>
            <div class="mt-4">
              <span class="text-lg font-semibold text-candy-peach">$2,200</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Call to Action -->
      <div class="mt-16 text-center">
        <h2 class="font-Tinos text-3xl text-pink-950 mb-4">Ready to Find Your Perfect Dress?</h2>
        <p class="text-pink-800 mb-8 max-w-2xl mx-auto">
          Schedule a private consultation to try on these beautiful gowns and find the one that makes you feel absolutely stunning on your special day.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="../pages/reservation.php"
            class="inline-block rounded-full bg-gradient-to-r from-candy-peach to-candy-pink px-8 py-4 text-base font-semibold text-white shadow-[0_0_30px_rgba(249,192,175,0.35)] transition-all hover:from-candy-peach-dark hover:to-candy-pink-dark hover:shadow-[0_0_40px_rgba(249,192,175,0.5)] focus:ring-2 focus:ring-candy-peach focus:ring-offset-2 focus:ring-offset-candy-cream focus:outline-none">
            Book Consultation
          </a>
          <a href="../pages/products.php"
            class="inline-block rounded-full border-2 border-candy-peach px-8 py-4 text-base font-semibold text-candy-peach transition-all hover:bg-candy-peach hover:text-white focus:ring-2 focus:ring-candy-peach focus:ring-offset-2 focus:ring-offset-candy-cream focus:outline-none">
            View All Dresses
          </a>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <?php include('../components/footer.html'); ?>

  <script src="../js/main.js"></script>
</body>

</html>
