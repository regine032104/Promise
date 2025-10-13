<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart - Promise</title>
  <link rel="stylesheet" href="../dist/styles.css" />
</head>

<body class="flex min-h-screen flex-col bg-pink-100">
  <!-- NAVBAR -->
  <?php include('../components/navbar.php'); ?>

  <!-- HERO -->
  <?php
  $title = "Your";
  $highlight = "Cart";
  $subtitle = ""; // You can leave this blank if you don't want a subtitle
  $extra_class = "py-20";
  include('../components/hero.php');
  ?>


    <section class="container mx-auto px-4 py-6 sm:px-6">
      <div class="flex flex-col-reverse gap-8 lg:flex-row">
        <section class="flex-1">
          <div
            class="flex min-h-[360px] flex-col items-center justify-center rounded-2xl border border-pink-200 bg-white p-10 text-center shadow-[0_10px_30px_rgba(236,72,153,0.06)]">
            <h2 class="font-Tinos text-3xl font-semibold text-pink-800 sm:text-4xl">
              Your cart is empty.
            </h2>
            <p class="font-unna mt-4 max-w-md text-base leading-relaxed text-pink-700/80 sm:text-lg">
              Browse our products and add items to see them here. We’ll save
              your selections once you add them.
            </p>
            <a href="../pages/products.php"
              class="mt-8 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-pink-500 to-rose-500 px-8 py-3 font-medium text-white transition hover:shadow-[0_0_40px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-100 focus:outline-none">Start
              Shopping</a>
          </div>
        </section>

        <aside
          class="w-full self-start rounded-xl border border-transparent bg-white p-6 shadow-lg lg:sticky lg:top-24 lg:w-96">
          <h3 class="mb-4 text-2xl font-semibold text-pink-800">
            Order Summary
          </h3>
          <div class="mb-2 flex justify-between text-pink-700/80">
            <span>Subtotal</span>
            <span>$0.00</span>
          </div>
          <div class="mb-4 flex justify-between text-pink-700/80">
            <span>Estimated Shipping</span>
            <span>$0.00</span>
          </div>
          <hr class="my-4 border-t border-pink-100" />
          <div class="mb-6 flex justify-between text-lg font-semibold text-pink-800">
            <span>Total</span>
            <span>$0.00</span>
          </div>
          <button disabled
            class="w-full cursor-not-allowed rounded-md bg-pink-300 py-3 font-semibold text-white/80 opacity-90">
            Cart is Empty
          </button>
        </aside>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include('../components/footer.php'); ?>

  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/reveal.js"></script>
</body>

</html>