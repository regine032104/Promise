<!-- NAVBAR -->
<nav class="flex bg-pink-200 shadow-lg">
  <div class="container mx-auto flex flex-col items-center justify-between gap-4 p-4 md:flex-row md:gap-0">
    <div class="flex w-full items-center justify-between md:w-auto">
      <a href="/pages/home.php"
        class="font-GreatVibes text-3xl text-gray-900 transition-colors text-shadow-pink-600 hover:text-pink-700 md:text-4xl lg:pl-16 lg:text-5xl">
        Pro<span class="font-GreatVibes text-pink-600 hover:text-pink-800">mise</span></a>
      <!-- mobile menu button -->
      <button id="nav-toggle" aria-controls="nav-menu" aria-expanded="false"
        class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white/5 focus:ring-2 focus:ring-amber-500 focus:outline-none md:hidden">
        <span class="sr-only">Open main menu</span>
        <!-- hamburger icon -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <ul id="nav-menu"
      class="hidden flex-col items-center space-y-2 text-center text-lg text-gray-700 sm:text-xl md:flex md:flex-row md:space-y-0 md:space-x-10">
      <li><a href="../pages/home.php" class="px-2 align-middle hover:text-pink-500 md:px-0">Home</a></li>
      <li><a href="../pages/products.php" class="px-2 align-middle hover:text-pink-500 md:px-0">Products</a></li>
      <li><a href="../pages/about.php" class="px-2 align-middle hover:text-pink-500 md:px-0">Contact</a></li>
      <li><a href="../pages/cart.php" class="px-2 align-middle hover:text-pink-500 md:px-0">🛒 Cart</a></li>
      <li>
        <a href="#" id="open-login" role="button" aria-haspopup="dialog" aria-controls="login-modal"
          class="inline-block cursor-pointer rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-4 py-1 align-middle font-sans text-sm text-white shadow-[0_0_18px_rgba(236,72,153,0.35)] transition-all duration-300 hover:from-pink-600 hover:to-rose-600 hover:shadow-[0_0_24px_rgba(236,72,153,0.5)] focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-200 sm:text-base">
          Sign In
        </a>
      </li>
    </ul>
  </div>
</nav>