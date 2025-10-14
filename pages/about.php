<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - Promise</title>
  <link rel="stylesheet" href="../dist/styles.css" />
</head>

<body class="flex min-h-screen flex-col bg-white">
  <!-- NAVBAR -->
  <?php include('../components/navbar.php'); ?>

  <!-- HERO -->
  <header class="relative overflow-hidden bg-gradient-to-b from-pink-50 via-pink-200 to-pink-200 py-20 text-center">
    <div class="relative z-10 mx-auto max-w-4xl px-4 sm:max-w-5xl">
      <h1 class="font-Tinos  text-4xl text-gray-900 sm:text-5xl md:text-6xl lg:text-7xl">
        About <span class="text-pink-600">Promise</span>
      </h1>
      <p class="font-unna mt-4 text-base text-white  sm:text-lg md:text-2xl">
        Where timeless design, thoughtful craftsmanship, and personalized
        service come together for your most cherished moments.
      </p>
    </div>
  </header>

  <main class="mx-auto max-w-screen-xl px-4 py-8">
    <!-- Contact US -->
    <section class="mb-12 grid grid-cols-1 gap-6 rounded-lg bg-white p-4 sm:p-6 lg:grid-cols-2">
      <div>
        <h3 class="mb-2 text-lg font-semibold text-gray-900 sm:text-xl">
          Contact Us
        </h3>
        <p class="mb-4 text-sm text-purple-700 sm:text-base">
          Have questions or want to schedule a fitting? Send us a message and
          we'll get back to you within 48 hours.
        </p>
        <form id="contact-form" class="space-y-4" novalidate>
          <div>
            <label for="contact-name" class="mb-1 block text-sm text-purple-800">Name <span
                class="text-red-500">*</span></label>
            <input id="contact-name" name="name" autocomplete="name"
              class="w-full rounded-md border border-pink-200 bg-white px-3 py-2 text-pink-900 focus:border-pink-400 focus:ring-1 focus:ring-pink-300" />
            <div class="contact-error mt-1 hidden text-xs text-red-600" data-error-for="contact-name"></div>
          </div>
          <div>
            <label for="contact-email" class="mb-1 block text-sm text-purple-800">Email <span
                class="text-red-500">*</span></label>
            <input id="contact-email" name="email" autocomplete="email"
              class="w-full rounded-md border border-pink-200 bg-white px-3 py-2 text-pink-900 focus:border-pink-400 focus:ring-1 focus:ring-pink-300" />
            <div class="contact-error mt-1 hidden text-xs text-red-600" data-error-for="contact-email"></div>
          </div>
          <div>
            <label for="contact-subject" class="mb-1 block text-sm text-purple-800">Subject</label>
            <input id="contact-subject" name="subject"
              class="w-full rounded-md border border-pink-200 bg-white px-3 py-2 text-pink-900 focus:border-pink-400 focus:ring-1 focus:ring-pink-300" />
          </div>
          <div>
            <label for="contact-message" class="mb-1 block text-sm text-purple-800">Message <span
                class="text-red-500">*</span></label>
            <textarea id="contact-message" name="message"
              class="h-32 w-full resize-none rounded-md border border-pink-200 bg-white px-3 py-2 text-pink-900 focus:border-pink-400 focus:ring-1 focus:ring-pink-300"></textarea>
            <div class="contact-error mt-1 hidden text-xs text-red-600" data-error-for="contact-message"></div>
          </div>
          <button type="submit"
            class="w-full cursor-pointer rounded-md bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-3 font-semibold text-white shadow-[0_8px_30px_rgba(236,72,153,0.18)] transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-400 focus:outline-none">
            Send Message
          </button>
        </form>
      </div>

      <div>
        <h3 class="mb-2 text-lg font-semibold text-gray-900 sm:text-xl">
          Visit or write to us
        </h3>
        <div class="mb-4 text-sm text-purple-700 sm:text-base">
          <p>Promise Atelier</p>
          <p>0321 December Avenue</p>
          <p>Philippines</p>
          <p>
            Email:
            <a href="mailto:regine&gervs@email.com" class="text-purple-700 underline">promise@email.com</a>
          </p>
          <p>
            Phone:
            <a href="tel:+639121234567" class="text-purple-700 underline">+63 912 123 4567</a>
          </p>
        </div>

        <div class="mt-2">
          <div class="mb-3 font-medium text-purple-800">Follow us:</div>
          <div class="flex items-center gap-4">
            <!-- Facebook -->
            <a href="#" target="_blank" rel="noopener"
              class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-pink-200 bg-white text-blue-600 shadow transition-transform duration-200 hover:scale-110 hover:shadow-[0_0_20px_rgba(236,72,153,0.12)]"
              aria-label="Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                  d="M22 12a10 10 0 10-11.5 9.9v-7H8.5v-3h2V9.1c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0022 12z" />
              </svg>
            </a>
            <!-- Instagram -->
            <a href="#" target="_blank" rel="noopener"
              class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-pink-200 bg-white text-pink-600 shadow transition-transform duration-200 hover:scale-110 hover:shadow-[0_0_20px_rgba(236,72,153,0.12)]"
              aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                  d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 6.2A3.8 3.8 0 1015.8 12 3.8 3.8 0 0012 8.2zm4.9-.9a1.1 1.1 0 11-1.1-1.1 1.1 1.1 0 011.1 1.1zM12 9.5A2.5 2.5 0 1114.5 12 2.5 2.5 0 0112 9.5z" />
              </svg>
            </a>
            <!-- GitHub -->
            <a href="#" target="_blank" rel="noopener"
              class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-pink-200 bg-white text-black-600 shadow transition-transform duration-200 hover:scale-110 hover:shadow-[0_0_20px_rgba(236,72,153,0.12)]"
              aria-label="GitHub">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                  d="M12 .5A12 12 0 000 12.6c0 5.3 3.4 9.8 8.2 11.4.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6-.5-1.2-1.2-1.5-1.2-1.5-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.7 1.5 2.8 1.1.1-.9.4-1.5.8-1.9-2.7-.3-5.5-1.4-5.5-6.1 0-1.3.5-2.4 1.2-3.3-.1-.3-.5-1.6.1-3.3 0 0 1-.3 3.3 1.3a11.4 11.4 0 016 0C17.7 6 18.7 6.3 18.7 6.3c.6 1.7.2 3 .1 3.3.7.9 1.2 2 1.2 3.3 0 4.7-2.8 5.8-5.5 6.1.4.4.7 1.1.7 2.2v3.2c0 .3.2.7.8.6A12 12 0 0024 12.6 12 12 0 0012 .5z" />
              </svg>
            </a>
          </div>

          <div class="mt-4 rounded-md border border-pink-200 bg-white p-3">
            <img src="../images/maps.png" alt="Map"
              class="h-40 w-full rounded-md border border-pink-200 object-cover sm:h-48" />
            <div class="mt-2 text-center text-sm text-pink-600">
              Click image to open full map
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include('../components/footer.php'); ?>

  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/reveal.js"></script>
  <script src="../js/contact-us.js"></script>
</body>

</html>