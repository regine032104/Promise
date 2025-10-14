<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products - Promise</title>
  <link rel="stylesheet" href="../dist/styles.css" />
</head>

<body class="flex min-h-screen flex-col bg-whites">
  <!-- NAVBAR -->
  <?php include('../components/navbar.php'); ?>


  <!-- HERO -->
  <?php
  $title = "Our";
  $highlight = "Products";

  $subtitle = "Browse our curated collection of wedding attire crafted for elegance, comfort and timeless memories.";
  include('../components/hero.php');
  ?>

  <!-- MAIN CONTENT -->
  <main class="mx-auto max-w-screen-xl flex-1 py-10">
    <div class="flex flex-col gap-8">
      <!-- ALL PRODUCTS -->
      <h2
        class="font-Tinos text-center text-2xl leading-none tracking-widest text-gray-900 uppercase md:tracking-[0.6em] lg:tracking-[0.8em]">
        All Products
      </h2>
      <!-- HORIZONTAL FILTER BAR (moved under hero) -->
      <div class="w-full">
        <div id="product-filters" class="mb-6 rounded-lg bg-white p-4 shadow-sm">
          <div class="mx-auto max-w-screen-xl px-2">
            <div class="flex items-center justify-between gap-4">
              <div class="flex items-center gap-3 text-gray-900">
                <button id="toggle-filters"
                  class="inline-flex cursor-pointer items-center gap-2 rounded-md px-2 py-1 text-sm text-gray-900 hover:bg-pink-100">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 14.414V19a1 1 0 01-1.447.894L9 18v-3.586L3.293 6.707A1 1 0 013 6V4z">
                    </path>
                  </svg>
                  <span class="hidden sm:inline">Hide filters</span>
                </button>
                <div class="text-sm text-gray-900">111 Results</div>
              </div>
              <div class="text-sm text-gray-900">
                Sort:
                <select id="sort-select"
                  class="ml-2 cursor-pointer rounded border border-pink-200 bg-white px-2 py-1 text-gray-900">
                  <option>Featured</option>
                  <option>Best selling</option>
                  <option>Alphabetically, A-Z</option>
                  <option>Alphabetically, Z-A</option>
                  <option>Price, low to high</option>
                  <option>Price, high to low</option>
                </select>
              </div>
            </div>

            <div id="filter-controls" class="mt-4 flex w-full flex-wrap items-center gap-3">
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Price <span class="ml-2">▾</span>
              </button>
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Availability <span class="ml-2">▾</span>
              </button>
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Size <span class="ml-2">▾</span>
              </button>
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Silhouette <span class="ml-2">▾</span>
              </button>
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Length <span class="ml-2">▾</span>
              </button>
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Sleeves <span class="ml-2">▾</span>
              </button>
              <button class="filter-btn rounded border border-pink-200 bg-white px-4 py-2 text-sm text-gray-900">
                Collection <span class="ml-2">▾</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="mx-auto max-w-screen-xl">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Product Card -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="200" data-availability="In Stock" data-size="XS, S, M, L" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Long Sleeves" data-collection="Online Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-1.webp" alt="“Isabella” Classic Lace Princess Dress"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Isabella” Classic Lace Princess Dress
                </h3>
                <p class="mt-1  text-slate-700">
                  Features:bodice, long illusion sleeves, beaded details,
                  cathedral veil compatible.
                </p>
                <p class="product-full hidden">
                  Royal Romance at Its Finest. The Isabella Gown enchants with
                  a fitted lace bodice and voluminous tulle skirt. Its
                  illusion sleeves and sparkling embroidery bring a touch of
                  regal charm—perfect for the bride who loves tradition,
                  luxury, and grace.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$200.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>

          <!-- Product Card 2 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="100" data-availability="In Stock" data-size="S, M, L, XL" data-silhouette="A-Line"
            data-length="Floor" data-sleeves="Spaghetti Straps, Off the Shoulder" data-collection="Online Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-2.webp" alt="Willow Ethereal Boho-Chic Woodland Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  "Willow" Ethereal Boho-Chic Woodland Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Plunging V-neck, delicate floral lace bodice, airy
                  chiffon skirt, spaghetti straps with off-shoulder lace
                  sleeves, light train.
                </p>
                <p class="product-full hidden">
                  “Willow” Ethereal Boho-Chic Woodland Gown. Inspired by
                  golden hour in a hidden meadow, the Willow Gown captures a
                  spirit of effortless beauty. The light chiffon skirt and
                  delicate lacework create movement and romance, perfect for
                  an outdoor celebration. Its plunging neckline is balanced by
                  whimsical off-shoulder sleeves, offering a dreamy, bohemian
                  silhouette for the free-spirited bride.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$100.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>

          <!-- Product Card 3 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="400" data-availability="Out of Stock" data-size="M, L, XL" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Spaghetti Straps" data-collection="Retailer Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-3.jpg" alt="Willow Ethereal Boho-Chic Woodland Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  "Enchant" Ethereal Boho-Chic Woodland Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Classic V-neck, intricate beaded and lace bodice,
                  wide supportive straps, dramatic full tulle skirt,
                  chapel-length train.
                </p>
                <p class="product-full hidden">
                  Wildflower Whimsy and Effortless Grace. Inspired by golden
                  hour in a hidden meadow, the Willow Gown captures a spirit
                  of effortless beauty. The light chiffon skirt and delicate
                  lacework create movement and romance, perfect for an outdoor
                  celebration. Its plunging neckline is balanced by whimsical
                  off-shoulder sleeves, offering a dreamy, bohemian silhouette
                  for the free-spirited bride.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$400.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>

          <!-- Product Card 4 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="350" data-availability="In Stock" data-size="XS, S, M" data-silhouette="A-Line"
            data-length="Floor" data-sleeves="Off the Shoulder" data-collection="Online Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-4.jpg" alt="“Rosalie” Floral Garden Wedding Dress"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Rosalie” Floral Garden Wedding Dress
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Off-shoulder floral lace, sheer layers, blush
                  undertone, long soft veil.
                </p>
                <p class="product-full hidden">
                  Where Nature Meets Elegance. Light, feminine, and full of
                  charm, the Rosalie Dress is designed for romantic outdoor
                  ceremonies. The off-shoulder neckline and layered lace give
                  a soft, whimsical touch, while the long veil completes the
                  dreamy bridal look.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$350.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>

          <!-- Product Card 5 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="180" data-availability="In Stock" data-size="S, M, L" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Off the Shoulder" data-collection="Retailer Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-5.jpg" alt="“Seraphina” Vintage-Inspired Corset Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Seraphina” Vintage-Inspired Corset Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Corset bodice, 3D lace appliqués, off-shoulder
                  sleeves, golden-beige hue.
                </p>
                <p class="product-full hidden">
                  The Seraphina Gown blends vintage artistry with modern
                  romance. Featuring a lace-up corset bodice, 3D floral
                  appliqués, and a champagne undertone, it’s the definition of
                  intricate elegance. Every detail is made to make you glow
                  with confidence and grace.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$180.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>

          <!-- Product Card 6 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="450" data-availability="In Stock" data-size="M, L, XL, XXL" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Long Sleeves" data-collection="Online Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-6.webp" alt="“Celeste” Long-Sleeve Lace Ball Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Celeste” Long-Sleeve Lace Ball Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Lace embroidery, long sleeves, sweetheart
                  neckline, chapel train.
                </p>
                <p class="product-full hidden">
                  Timeless Grace in Every Thread Step into your fairytale with
                  the Celeste Gown, a romantic masterpiece adorned with
                  intricate lace from bodice to hem. The illusion neckline and
                  sheer long sleeves add a touch of sophistication, while the
                  full tulle skirt creates a royal silhouette. Perfect for
                  brides who dream of elegance and tradition combined.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$450.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>
          <!-- Product Card 7 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="450" data-availability="In Stock" data-size="XS, S, M, L" data-silhouette="A-Line"
            data-length="Floor" data-sleeves="Off the Shoulder" data-collection="Online Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-7.webp" alt="Aurora” Off-Shoulder Lace Backless Dress"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  "Aurora” Off-Shoulder Lace Backless Dress
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Off-shoulder neckline, backless design, floral
                  lace details, flowing train.
                </p>
                <p class="product-full hidden">
                  Soft, Dreamy, and Effortlessly Romantic The Aurora Dress
                  captures the essence of ethereal beauty. Its off-shoulder
                  neckline and low back create a modern yet delicate look,
                  while floral lace appliqués flow gracefully over soft tulle.
                  Ideal for garden or destination weddings where love feels
                  light and free.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$450.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>
          <!-- Product Card 8-->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="450" data-availability="Out of Stock" data-size="S, M, L, XL" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Thick Straps" data-collection="Retailer Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-8.webp" alt="Willow Ethereal Boho-Chic Woodland Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Willow” Ethereal Boho-Chic Woodland Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Classic V-neck, intricate beaded and lace bodice,
                  wide supportive straps, dramatic full tulle skirt,
                  chapel-length train.
                </p>
                <p class="product-full hidden">
                  Fairytale Grandeur with Modern Sparkle The Aurora Gown is
                  designed for the bride who wants a grand entrance. It blends
                  the classic Ballgown silhouette with dazzling modern detail.
                  The magnificent skirt is balanced by a corset-style bodice
                  that features intricate beadwork and shimmering floral
                  appliqués, creating a breathtaking and truly regal look that
                  sparkles under the lights.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$450.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>
          <!-- Product Card 9 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="450" data-availability="In Stock" data-size="M, L, XL" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Long Sleeves" data-collection="Online Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-9.jpg" alt="“Elara” Medieval-Inspired Satin Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Elara” Medieval-Inspired Satin Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Off-shoulder with flowing sleeves, embroidered
                  satin bodice, cathedral train.
                </p>
                <p class="product-full hidden">
                  Regal Beauty with Enchanted Flair Inspired by timeless
                  romance, the Elara Gown combines royal satin draping with
                  vintage embroidery. Flowing sleeves and a sculpted corset
                  waist give a powerful yet graceful silhouette—perfect for
                  brides who want to feel like queens from a fantasy tale.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$450.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>
          <!-- Product Card 10 -->
          <article
            class="product-card flex flex-col overflow-hidden rounded-lg border border-pink-200 bg-white text-gray-900 shadow-[0_8px_30px_rgba(236,72,153,0.08)]"
            data-price="450" data-availability="In Stock" data-size="XS, S, M, L, XL" data-silhouette="Ball Gown"
            data-length="Floor" data-sleeves="Strapless" data-collection="Retailer Collection">
            <div class="relative h-56 overflow-hidden sm:h-64 md:h-72 lg:h-80">
              <img src="../images/pp-10.webp" alt="“Valentina” Grand Bow Satin Ball Gown"
                class="h-full w-full object-cover" />
              <button class="absolute top-3 right-3 rounded-full bg-white/80 p-2  text-slate-700 shadow">
                ♡
              </button>
            </div>
            <div class="flex flex-1 flex-col justify-between p-4">
              <div>
                <h3 class="font-semibold text-gray-900">
                  “Valentina” Grand Bow Satin Ball Gown
                </h3>
                <p class="mt-1  text-slate-700">
                  Features: Strapless design, satin fabric, oversized bow
                  train, minimalist silhouette.
                </p>
                <p class="product-full hidden">
                  Modern Luxury, Bold Sophistication. The Valentina Dress
                  makes an unforgettable entrance. Crafted from sleek satin
                  with a grand sculpted bow at the back, this strapless gown
                  radiates glamour and confidence. A statement piece for
                  brides who embrace elegance with a modern edge.
                </p>
              </div>
              <div class="mt-4 flex items-center justify-between">
                <div class="font-bold text-gray-900">$450.00</div>
                <button
                  class="cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-2 text-white transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)]">
                  Add to Cart
                </button>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </main>

  < <!-- FOOTER -->
    <?php include('../components/footer.php'); ?>

    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/reveal.js"></script>
    <script src="../js/reviews.js"></script>
</body>

</html>