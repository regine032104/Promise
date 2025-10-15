<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolaru (2nd-Hand Shop)</title>
  <link href="./style.css" rel="stylesheet">
  <style>
    /* Custom validation error styling */
    .error {
      color: #dc2626 !important; /* Red-600 color */
      font-size: 0.875rem;
      margin-top: 0.25rem;
      display: block;
    }
    
    /* Style for input fields with errors */
    input.error, select.error, textarea.error {
      border-color: #dc2626 !important;
      box-shadow: 0 0 0 1px #dc2626 !important;
    }
    
    /* Style for valid fields */
    .valid {
      color: #16a34a !important; /* Green-600 color */
    }
    
    input.valid, select.valid, textarea.valid {
      border-color: #16a34a !important;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-white">

<header class="bg-white shadow-sm border-b border-gray-200">
  <!-- Main navigation -->
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="Front Page.html" class="flex items-center">
          <img src="../img/Logo.png" alt="Marketplace Logo" class="h-40 w-40">
      </a>
    </div>

      <!-- Search bar -->
      <div class="flex-1 max-w-2xl mx-8 hidden md:block">
        <div class="relative">
          <input type="text" placeholder="Search products..."
                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
          </div>
        </div>
    </div>

      <!-- Right side icons -->
      <div class="flex items-center space-x-4">
        <!-- Search icon for mobile -->
        <button class="md:hidden p-2 text-gray-600 hover:text-indigo-600">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </button>

        <!-- Register and Login -->
        <a
        class="inline-block rounded-sm bg-indigo-600 px-8 py-2.5 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:ring-3 focus:outline-hidden no-loading"
        href="#" onclick="openModal('register-modal'); return false;">Register</a>
        <a
        class="inline-block rounded-sm border border-current px-8 py-2.5 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:ring-3 focus:outline-hidden no-loading"
        href="#" onclick="openModal('login-modal'); return false;">Login</a>

        <!-- Separator -->
        <div class="w-0.5 h-6 bg-gray-300 mx-3"></div>

        <!-- Notification Bell -->
        <a href="#" class="p-2 text-gray-600 hover:text-indigo-600 relative">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
          <span class="absolute -top-1 -right-1 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
        </a>

        <!-- Shopping cart -->
        <a href="Add_To_Cart.html" class="p-2 text-gray-600 hover:text-indigo-600 relative" id="cartButton">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
          <span class="absolute -top-1 -right-1 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
        </a>

        <!-- Sell-->
        <a
        class="inline-block rounded-sm border border-blue-600 bg-blue-600 px-8 py-2.5 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden"
        href="#">Sell</a>

        <!-- Mobile menu button -->
        <button class="lg:hidden p-2 text-gray-600 hover:text-indigo-600" onclick="toggleMobileMenu()">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
        </button>
              </div>
            </div>
  </nav>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-200">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <div class="mb-4">
        <input type="text" placeholder="Search products..." 
            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
      </div>
      <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 font-medium">Categories</a>
      <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 font-medium">New Arrivals</a>
      <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 font-medium">Sale</a>
      <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 font-medium">Featured</a>
      <div class="border-t border-gray-200 pt-4">
        <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600">My Account</a>
        <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600">Wishlist</a>
        <a href="#" class="block px-3 py-2 text-gray-700 hover:text-indigo-600">Cart</a>
              </div>
              </div>
              </div>
</header>

<!-- Category Navigation Bar -->
<div class="bg-white" id="categoryNavigation">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <nav class="flex items-center justify-center h-20 space-x-6">
      
      <!-- Women Category with Mega Dropdown -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <img src="https://u-web-assets.mercdn.net/assets/meganavCategoryIcon/1.svg" alt="Women" class="w-8 h-8 mb-1" />
          <span class="text-sm font-medium whitespace-nowrap">Women</span>
        </a>
        
        <!-- Women Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Women's Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Women</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="handbags">
                <span>Women's Handbags</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="shoes">
                <span>Shoes</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="athletic">
                <span>Athletic Apparel</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="tops">
                <span>Tops & Blouses</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="jewelry">
                <span>Jewelry</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="accessories">
                <span>Women's Accessories</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="dresses">
                <span>Dresses</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="sweaters">
                <span>Sweaters</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="coats">
                <span>Coats & Jackets</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="jeans">
                <span>Jeans</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="right-column-title">Handbags</h3>
              <div id="right-column-content">
                <!-- Handbags Content (Default) -->
                <div id="handbags-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Backpacks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cosmetic Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hobo Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Crossbody Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Satchels</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Shoulder Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tote Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Waist Bags & Fanny Packs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Messenger Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bucket Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Shoes Content -->
                <div id="shoes-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Heels</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Flats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Boots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sneakers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sandals</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Loafers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Oxfords</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wedges</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Pumps</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Athletic Content -->
                <div id="athletic-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sports Bras</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Leggings</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tank Tops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hoodies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Yoga Pants</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Running Gear</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Tops Content -->
                <div id="tops-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Blouses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">T-Shirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tank Tops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Crop Tops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Long Sleeve</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Button-ups</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Polo Shirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Jewelry Content -->
                <div id="jewelry-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Necklaces</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Earrings</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bracelets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Rings</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Watches</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Anklets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Brooches</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Accessories Content -->
                <div id="accessories-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Scarves</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Belts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sunglasses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gloves</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wallets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Keychains</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
              </div>
                
                <!-- Dresses Content -->
                <div id="dresses-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Casual Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Formal Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Maxi Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mini Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cocktail Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wrap Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Shift Dresses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
              </div>
                
                <!-- Sweaters Content -->
                <div id="sweaters-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cardigans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Pullovers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Turtlenecks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">V-Necks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Crew Necks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hoodies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
            </div>
                
                <!-- Coats Content -->
                <div id="coats-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Winter Coats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Blazers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Leather Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Denim Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Trench Coats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Pea Coats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
              </div>
                
                <!-- Jeans Content -->
                <div id="jeans-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Skinny Jeans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Straight Leg</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bootcut</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wide Leg</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">High Waist</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Low Waist</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
              </div>
            </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
              </div>
            
              </div>
              </div>
            </div>

      <!-- Men Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <img src="https://u-web-assets.mercdn.net/assets/meganavCategoryIcon/2.svg" alt="Men" class="w-8 h-8 mb-1" />
          <span class="text-sm font-medium whitespace-nowrap">Men</span>
        </a>
      <!-- Men Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Men's Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Men</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-accessories">
                <span>Men's Accessories</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-shoes">
                <span>Shoes</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-athletic">
                <span>Athletic Apparel</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-tops">
                <span>Tops & Shirts</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-shorts">
                <span>Shorts</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-jeans">
                <span>Jeans</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-hoodies">
                <span>Hoodies & Sweatshirts</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-jackets">
                <span>Jackets & Coats</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-suits">
                <span>Suits & Formal</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="mens-underwear">
                <span>Underwear & Basics</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="mens-right-column-title">Men's Accessories</h3>
              <div id="mens-right-column-content">
                <!-- Men's Accessories Content (Default) -->
                <div id="mens-accessories-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Watches</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Belts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wallets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sunglasses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gloves</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Ties</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cufflinks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Jewelry</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Jeans Content -->
                <div id="jeans-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Skinny Jeans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Straight Leg</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bootcut</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wide Leg</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">High Waist</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Low Waist</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Accessories Content -->
                <div id="mens-accessories-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Watches</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Belts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Wallets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sunglasses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gloves</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Ties</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cufflinks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Jewelry</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Shoes Content -->
                <div id="mens-shoes-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sneakers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dress Shoes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Boots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Loafers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Oxfords</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sandals</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Casual Shoes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Athletic Shoes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Athletic Content -->
                <div id="mens-athletic-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Athletic Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tank Tops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Athletic Pants</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hoodies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Compression Wear</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Running Gear</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Tops Content -->
                <div id="mens-tops-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">T-Shirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dress Shirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Polo Shirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Button-ups</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tank Tops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Long Sleeve</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Henleys</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Shorts Content -->
                <div id="mens-shorts-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Casual Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Athletic Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Swim Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cargo Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Chino Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Denim Shorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Jeans Content -->
                <div id="mens-jeans-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Skinny Jeans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Straight Leg</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Slim Fit</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Relaxed Fit</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bootcut</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Distressed</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Men's Hoodies Content -->
                <div id="mens-hoodies-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Pullover Hoodies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Zip-up Hoodies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sweatshirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Crew Neck</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">V-Neck</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Athletic</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
          </div>
                
                <!-- Men's Jackets Content -->
                <div id="mens-jackets-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Leather Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Denim Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Blazers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Winter Coats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bomber Jackets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Windbreakers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
      </div>

                <!-- Men's Suits Content -->
                <div id="mens-suits-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Business Suits</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tuxedos</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dress Pants</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dress Shirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Ties</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Formal Shoes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
    </div>
                
                <!-- Men's Underwear Content -->
                <div id="mens-underwear-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Boxers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Briefs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Boxer Briefs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Undershirts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tank Tops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Thermal Underwear</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
          </div>
                </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
              </div>
            
              </div>
            </div>
              </div>
      

      <!-- Electronics Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <img src="https://u-web-assets.mercdn.net/assets/meganavCategoryIcon/7.svg" alt="Electronics" class="w-8 h-8 mb-1" />
          <span class="text-sm font-medium whitespace-nowrap">Electronics</span>
        </a>
        
        <!-- Electronics Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Electronics Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Electronics</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-phones">
                <span>Phones & Tablets</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-computers">
                <span>Computers & Laptops</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-audio">
                <span>Audio & Headphones</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-gaming">
                <span>Gaming</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-cameras">
                <span>Cameras & Photography</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-tv">
                <span>TV & Home Theater</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-smart">
                <span>Smart Home</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="electronics-accessories">
                <span>Accessories</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="electronics-right-column-title">Phones & Tablets</h3>
              <div id="electronics-right-column-content">
                <!-- Phones & Tablets Content (Default) -->
                <div id="electronics-phones-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Smartphones</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tablets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Phone Cases</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Screen Protectors</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Chargers & Cables</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Power Banks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Phone Stands</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Computers Content -->
                <div id="electronics-computers-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Laptops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Desktops</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Monitors</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Keyboards</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mice</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Webcams</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Audio Content -->
                <div id="electronics-audio-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Headphones</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Earbuds</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Speakers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Microphones</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Amplifiers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Gaming Content -->
                <div id="electronics-gaming-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gaming Consoles</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gaming PCs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Controllers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gaming Chairs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gaming Accessories</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Cameras Content -->
                <div id="electronics-cameras-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">DSLR Cameras</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mirrorless Cameras</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Lenses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tripods</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Camera Bags</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- TV Content -->
                <div id="electronics-tv-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Smart TVs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Soundbars</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Streaming Devices</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">TV Mounts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Smart Home Content -->
                <div id="electronics-smart-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Smart Speakers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Smart Lights</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Security Cameras</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Smart Locks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Accessories Content -->
                <div id="electronics-accessories-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cables & Adapters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Storage Devices</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Batteries</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cases & Covers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
              </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
          </div>
              </div>
            </div>

      <!-- Property Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
          </svg>          
          <span class="text-sm font-medium whitespace-nowrap">Property</span>
        </a>
        
        <!-- Property Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Property Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Property</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="property-houses">
                <span>Houses for Sale</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="property-rent">
                <span>Houses for Rent</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="property-condos">
                <span>Condos & Apartments</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="property-commercial">
                <span>Commercial Properties</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="property-land">
                <span>Land & Lots</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="property-vacation">
                <span>Vacation Rentals</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="property-right-column-title">Houses for Sale</h3>
              <div id="property-right-column-content">
                <!-- Houses for Sale Content (Default) -->
                <div id="property-houses-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Single Family Homes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Townhouses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Duplexes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Villas</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mansions</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Foreclosures</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">New Construction</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Houses for Rent Content -->
                <div id="property-rent-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Monthly Rentals</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Short Term Rentals</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Room Rentals</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Student Housing</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Corporate Housing</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Condos Content -->
                <div id="property-condos-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Condos for Sale</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Condos for Rent</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Apartments for Sale</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Apartments for Rent</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Studio Units</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Penthouse</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Commercial Content -->
                <div id="property-commercial-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Office Spaces</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Retail Spaces</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Warehouses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Restaurants</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hotels</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Land Content -->
                <div id="property-land-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Residential Lots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Commercial Lots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Agricultural Land</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Beachfront Lots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mountain Lots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Vacation Rentals Content -->
                <div id="property-vacation-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Beach Houses</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mountain Cabins</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">City Apartments</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Villas</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Resorts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
              </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
          </div>
        </div>
              </div>

      <!-- Automotives Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
          </svg>          
          <span class="text-sm font-medium whitespace-nowrap">Automotives</span>
        </a>
        
        <!-- Automotives Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Automotives Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Automotives</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="auto-cars">
                <span>Cars</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="auto-motorcycles">
                <span>Motorcycles</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="auto-trucks">
                <span>Trucks & Vans</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="auto-parts">
                <span>Auto Parts</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="auto-accessories">
                <span>Auto Accessories</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="auto-tools">
                <span>Auto Tools</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="auto-right-column-title">Cars</h3>
              <div id="auto-right-column-content">
                <!-- Cars Content (Default) -->
                <div id="auto-cars-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sedans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">SUVs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hatchbacks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Coupes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Convertibles</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Luxury Cars</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sports Cars</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Motorcycles Content -->
                <div id="auto-motorcycles-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sport Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cruisers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Touring Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dirt Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Scooters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vintage Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Trucks Content -->
                <div id="auto-trucks-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Pickup Trucks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cargo Vans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Passenger Vans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Commercial Trucks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">RV & Campers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Auto Parts Content -->
                <div id="auto-parts-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Engine Parts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Brake Parts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Suspension Parts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Body Parts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Electrical Parts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Auto Accessories Content -->
                <div id="auto-accessories-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Car Audio</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Car Care</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Interior Accessories</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Exterior Accessories</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Safety Equipment</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Auto Tools Content -->
                <div id="auto-tools-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hand Tools</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Power Tools</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Diagnostic Tools</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Lifting Equipment</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
              </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
          </div>
              </div>
            </div>

      <!-- Appliances Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
          </svg>          
          <span class="text-sm font-medium whitespace-nowrap">Appliances</span>
        </a>
        
        <!-- Appliances Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Appliances Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Appliances</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="appliances-kitchen">
                <span>Kitchen Appliances</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="appliances-laundry">
                <span>Laundry Appliances</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="appliances-cooling">
                <span>Cooling & Heating</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="appliances-cleaning">
                <span>Cleaning Appliances</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="appliances-small">
                <span>Small Appliances</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="appliances-right-column-title">Kitchen Appliances</h3>
              <div id="appliances-right-column-content">
                <!-- Kitchen Appliances Content (Default) -->
                <div id="appliances-kitchen-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Refrigerators</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Stoves & Ovens</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Microwaves</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dishwashers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Range Hoods</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Laundry Content -->
                <div id="appliances-laundry-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Washing Machines</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dryers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Washer-Dryer Combos</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Ironing Equipment</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Cooling Content -->
                <div id="appliances-cooling-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Air Conditioners</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Fans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Heaters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Water Heaters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Cleaning Content -->
                <div id="appliances-cleaning-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vacuum Cleaners</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Steam Cleaners</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Floor Cleaners</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Air Purifiers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
              </div>
                
                <!-- Small Appliances Content -->
                <div id="appliances-small-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Blenders</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Coffee Makers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Toasters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Food Processors</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
              </div>
            </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
              </div>
            
              </div>
            </div>
          </div>

      <!-- Vehicles Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
          </svg>
          <span class="text-sm font-medium whitespace-nowrap">Vehicles</span>
        </a>
        
        <!-- Vehicles Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Vehicles Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Vehicles</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="vehicles-cars">
                <span>Cars</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="vehicles-motorcycles">
                <span>Motorcycles</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="vehicles-trucks">
                <span>Trucks & Vans</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="vehicles-boats">
                <span>Boats & Watercraft</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="vehicles-aviation">
                <span>Aviation</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="vehicles-right-column-title">Cars</h3>
              <div id="vehicles-right-column-content">
                <!-- Cars Content (Default) -->
                <div id="vehicles-cars-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sedans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">SUVs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hatchbacks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Coupes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Convertibles</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Luxury Cars</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sports Cars</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Motorcycles Content -->
                <div id="vehicles-motorcycles-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sport Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cruisers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Touring Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dirt Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Scooters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vintage Bikes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Trucks Content -->
                <div id="vehicles-trucks-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Pickup Trucks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cargo Vans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Passenger Vans</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Commercial Trucks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">RV & Campers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Boats Content -->
                <div id="vehicles-boats-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Motor Boats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sailboats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Yachts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Jet Skis</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Kayaks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Aviation Content -->
                <div id="vehicles-aviation-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Private Planes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Helicopters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Drones</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Gliders</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
          </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
      </div>

          </div>
        </div>
    </div>

      <!-- Collectibles Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <img src="https://u-web-assets.mercdn.net/assets/meganavCategoryIcon/3.svg" alt="Collectibles" class="w-8 h-8 mb-1" />
          <span class="text-sm font-medium whitespace-nowrap">Collectibles</span>
        </a>
        
        <!-- Collectibles Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Collectibles Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Collectibles</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="collectibles-toys">
                <span>Toys & Games</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="collectibles-antiques">
                <span>Antiques</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="collectibles-art">
                <span>Art & Crafts</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="collectibles-coins">
                <span>Coins & Stamps</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="collectibles-memorabilia">
                <span>Memorabilia</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="collectibles-vintage">
                <span>Vintage Items</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="collectibles-right-column-title">Toys & Games</h3>
              <div id="collectibles-right-column-content">
                <!-- Toys & Games Content (Default) -->
                <div id="collectibles-toys-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Action Figures</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Board Games</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Video Games</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Dolls</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Model Kits</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Puzzles</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Antiques Content -->
                <div id="collectibles-antiques-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Furniture</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Ceramics</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Glassware</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Silverware</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Clocks</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Art Content -->
                <div id="collectibles-art-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Paintings</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sculptures</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Photography</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Handicrafts</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Coins Content -->
                <div id="collectibles-coins-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Coins</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Stamps</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Currency</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Medals</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Memorabilia Content -->
                <div id="collectibles-memorabilia-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sports Memorabilia</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Movie Memorabilia</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Music Memorabilia</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Celebrity Items</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Vintage Content -->
                <div id="collectibles-vintage-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vintage Clothing</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vintage Electronics</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vintage Books</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Vintage Jewelry</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
          </div>
                </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
              </div>
            
              </div>
            </div>
          </div>



      <!-- Pet Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <img src="https://u-web-assets.mercdn.net/assets/meganavCategoryIcon/143.svg" alt="Pet" class="w-8 h-8 mb-1" />
          <span class="text-sm font-medium whitespace-nowrap">Pets</span>
        </a>
        
        <!-- Pets Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Pets Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Pets</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-dogs">
                <span>Dogs</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-cats">
                <span>Cats</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-birds">
                <span>Birds</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-fish">
                <span>Fish & Aquatics</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-small">
                <span>Small Animals</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-reptiles">
                <span>Reptiles & Amphibians</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="pets-supplies">
                <span>Pet Supplies</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="pets-right-column-title">Dogs</h3>
              <div id="pets-right-column-content">
                <!-- Dogs Content (Default) -->
                <div id="pets-dogs-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Puppies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Adult Dogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Senior Dogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Purebred Dogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mixed Breed Dogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Rescue Dogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Service Dogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Cats Content -->
                <div id="pets-cats-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Kittens</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Adult Cats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Senior Cats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Purebred Cats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mixed Breed Cats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Rescue Cats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Birds Content -->
                <div id="pets-birds-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Parrots</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Canaries</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Finches</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Cockatiels</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Lovebirds</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Exotic Birds</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Fish Content -->
                <div id="pets-fish-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Freshwater Fish</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Saltwater Fish</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Tropical Fish</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Goldfish</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Betta Fish</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Aquarium Plants</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Small Animals Content -->
                <div id="pets-small-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hamsters</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Guinea Pigs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Rabbits</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mice & Rats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Chinchillas</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Ferrets</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Reptiles Content -->
                <div id="pets-reptiles-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Snakes</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Lizards</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Turtles</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Geckos</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bearded Dragons</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Frogs</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Pet Supplies Content -->
                <div id="pets-supplies-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Food & Treats</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Toys</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Beds & Carriers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Grooming Supplies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Health & Wellness</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Training Supplies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
              </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
          </div>
        </div>
      </div>

      <!-- Books Category -->
      <div class="relative group">
        <a href="#" class="flex flex-col items-center p-4 text-gray-700 hover:text-indigo-600 transition-colors min-w-[70px]">
          <img src="https://u-web-assets.mercdn.net/assets/meganavCategoryIcon/141.svg" alt="Books" class="w-8 h-8 mb-1" />
          <span class="text-sm font-medium whitespace-nowrap">Books</span>
        </a>
        
        <!-- Books Mega Dropdown -->
        <div class="absolute left-0 top-full mt-2 w-[600px] bg-white shadow-xl border border-gray-200 rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
          <div class="grid grid-cols-2 gap-8 p-8">
            
            <!-- Left Column - Books Categories -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4">Books</h3>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-fiction">
                <span>Fiction</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-nonfiction">
                <span>Non-Fiction</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-academic">
                <span>Academic & Textbooks</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-children">
                <span>Children's Books</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-comics">
                <span>Comics & Graphic Novels</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-religious">
                <span>Religious & Spiritual</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gray-900 hover:bg-gray-50 py-2 px-3 rounded-lg group" data-category="books-magazines">
                <span>Magazines & Periodicals</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
            <!-- Right Column - Dynamic Content -->
            <div class="space-y-3">
              <h3 class="font-semibold text-gray-900 mb-4" id="books-right-column-title">Fiction</h3>
              <div id="books-right-column-content">
                <!-- Fiction Content (Default) -->
                <div id="books-fiction-content" class="space-y-2">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mystery & Thriller</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Romance</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Science Fiction</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Fantasy</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Literary Fiction</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Historical Fiction</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Horror</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Non-Fiction Content -->
                <div id="books-nonfiction-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Biography & Memoir</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Self-Help</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Business & Finance</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Health & Fitness</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Travel</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">History</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Academic Content -->
                <div id="books-academic-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Mathematics</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Science</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Engineering</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Medicine</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Law</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Literature</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Children's Books Content -->
                <div id="books-children-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Picture Books</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Early Readers</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Chapter Books</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Young Adult</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Educational</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Activity Books</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Comics Content -->
                <div id="books-comics-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Superhero Comics</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Manga</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Graphic Novels</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Comic Strips</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Independent Comics</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Collectibles</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Religious Content -->
                <div id="books-religious-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Bible & Scripture</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Christianity</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Islam</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Judaism</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Buddhism</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Spirituality</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
                
                <!-- Magazines Content -->
                <div id="books-magazines-content" class="space-y-2 hidden">
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">News & Current Events</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Lifestyle</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Technology</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Sports</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Fashion</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Hobbies</a>
                  <a href="#" class="block text-gray-600 hover:text-gray-900 py-2 px-3 rounded-lg hover:bg-gray-50">Other</a>
                </div>
              </div>
              <a href="#" class="block text-indigo-600 font-medium hover:text-indigo-700 py-2 px-3 rounded-lg mt-4">View all</a>
            </div>
            
          </div>
        </div>
      </div>




    </nav>
            </div>
      </div>

<!-- Featured Products Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Products</h2>
      <p class="text-lg text-gray-600">Discover our handpicked selection of amazing products</p>
    </div>
    
    <div id="products-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <!-- Products will be loaded dynamically from database -->
      <div class="col-span-full text-center py-8">
        <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600"></div>
        <p class="mt-2 text-gray-600">Loading products...</p>
      </div>
    </div>

    <!-- View All Products Button -->
    <div class="text-center mt-12">
      <button class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition-colors duration-200 font-semibold">
        View All Products
      </button>
    </div>
  </div>
</section>

<!-- Auth Modals -->
<div id="login-modal" class="fixed inset-0 z-50 hidden" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="absolute inset-0 bg-gray-800 opacity-75" onclick="closeModal('login-modal')"></div>
  <div class="relative w-full h-full flex items-center justify-center p-4">
    <div class="w-4x1 max-w-4xl rounded-lg shadow-xl overflow-hidden">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <!-- Left: Login form -->
        <div class="bg-white p-8">
          <div class="flex items-start justify-between mb-4">
            <div>
              <h2 class="text-2xl font-semibold text-indigo-600 text-center md:text-left">Login</h2>
              <p class="text-sm text-gray-600 mt-1">Accessing this course requires a login, please enter your credentials below!</p>
            </div>
            <button class="text-gray-600 hover:text-gray-900" aria-label="Close login" onclick="closeModal('login-modal')">✕</button>
          </div>

          <form id="login-form" class="space-y-4">
            <div>
              <label class="block text-xs text-gray-600 mb-1" for="login-username">Username or Email Address</label>
              <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm8 10a8 8 0 10-16 0h16z"/></svg>
                </span>
                <input id="login-username" name="login-username" type="text" class="w-full border border-gray-300 rounded-sm pl-9 pr-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Enter username or email">
              </div>
            </div>
            <div>
              <label class="block text-xs text-gray-600 mb-1" for="login-password">Password</label>
              <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 10.5V7.125a4.125 4.125 0 10-8.25 0V10.5M6 10.5h12v9.375A1.125 1.125 0 0116.875 21H7.125A1.125 1.125 0 016 19.875V10.5z"/></svg>
                </span>
                <input id="login-password" name="login-password" type="password" class="w-full border border-gray-300 rounded-sm pl-9 pr-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Enter password">
              </div>
            </div>
            <div class="flex items-center justify-between">
              <label class="inline-flex items-center text-sm text-gray-600">
                <input type="checkbox" class="mr-2">
                Remember Me
              </label>
              <a href="#" class="text-sm text-indigo-600 hover:text-indigo-700">Lost Your Password?</a>
            </div>
            <button type="submit" class="w-full mt-2 px-5 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700">Log In</button>
          </form>
        </div>

        <!-- Right: Register teaser -->
        <div class="bg-blue-600 text-white p-8 flex items-center justify-center">
          <div class="text-center">
            <h3 class="text-2xl font-semibold mb-2">Register</h3>
            <p class="mb-6">Don't have an account? Register one!</p>
            <button class="px-6 py-2 bg-white text-blue-600 rounded-full hover:bg-gray-100" onclick="switchToRegister()">Register an Account</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="register-modal" action="reg_process.php" method="POST" class="fixed inset-0 z-50 hidden justify-center" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="absolute inset-0 bg-gray-800 opacity-75" onclick="closeModal('register-modal')"></div>
  <div class="relative w-full h-full flex items-center justify-center p-4">
    <div class="bg-white w-4xl max-w-2xl rounded-lg shadow-xl p-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold text-gray-900">Register</h2>
        <button class="text-gray-600 hover:text-gray-900" aria-label="Close register" onclick="closeModal('register-modal')">✕</button>
      </div>
      <form id="register-form" action="reg_process.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm text-gray-700 mb-1" for="reg-first-name" type="text" name="first_name" required>First Name</label>
          <input id="reg-first-name" name="first_name" type="text" class="w-full border border-gray-300 rounded-sm px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="First name">
        </div>
        <div>
          <label class="block text-sm text-gray-700 mb-1" for="reg-last-name" type="text" name="last_name" required>Last Name</label>
          <input id="reg-last-name" name="last_name" type="text" class="w-full border border-gray-300 rounded-sm px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Last name">
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm text-gray-700 mb-1" for="reg-email" type="email" name="email" required>Email address</label>
          <input id="reg-email" name="email" type="email" class="w-full border border-gray-300 rounded-sm px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="email@example.com">
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm text-gray-700 mb-1" for="reg-contact" input type="text" name="contact_number" required>Contact No.</label>
          <input id="reg-contact" name="contact_number" type="tel" class="w-full border border-gray-300 rounded-sm px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="e.g. +1 555 123 4567">
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm text-gray-700 mb-1" for="reg-password" input type="password" name="confirm_password" required>Password</label>
          <input id="reg-password" name="password" type="password" class="w-full border border-gray-300 rounded-sm px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Enter password">
        </div>
        <div class="md:col-span-2">
          <label class="block text-sm text-gray-700 mb-1" for="reg-confirm-password" input type="text" name="contact_number" required >Confirm Password</label>
          <input id="reg-confirm-password" name="confirm_password" type="password" class="w-full border border-gray-300 rounded-sm px-3 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Confirm password">
        </div>
        <div class="md:col-span-2 flex justify-end space-x-3 pt-2">
          <button type="button" class="px-4 py-2 text-gray-700 hover:text-gray-900" onclick="closeModal('register-modal')">Cancel</button>
          <button input type="submit" value="Register"class="px-5 py-2 bg-indigo-600 text-white rounded-sm hover:bg-indigo-700">Create account</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Modal helpers
  function openModal(id) {
    var el = document.getElementById(id); 
    if (el) el.classList.remove('hidden');
    
    // Reset form validation when opening modal
    if (id === 'login-modal') {
      $("#login-form").validate().resetForm();
      $("#login-form").find('input').removeClass('error valid');
    } else if (id === 'register-modal') {
      $("#register-form").validate().resetForm();
      $("#register-form").find('input').removeClass('error valid');
    }
  }
  
  function closeModal(id) {
    var el = document.getElementById(id); 
    if (el) el.classList.add('hidden');
  }

  // Switch from login to register modal
  function switchToRegister() {
    closeModal('login-modal');
    openModal('register-modal');
  }

  // Mobile menu toggle function
  function toggleMobileMenu() {
    $('#mobile-menu').toggleClass('hidden');
  }

  // jQuery Validation Plugin Implementation
  $(document).ready(function() {
    
    // Custom validation method for space validation
    $.validator.addMethod("noSpaces", function(value, element) {
      return this.optional(element) || /^\S*$/.test(value);
    }, "Spaces are not allowed");
    
    // Custom validation method for phone numbers (allows + and numbers only)
    $.validator.addMethod("phoneNumber", function(value, element) {
      return this.optional(element) || /^\+?[0-9\s\-\(\)]+$/.test(value);
    }, "Please enter a valid phone number");

    // Custom validation method for ZIP codes (allows numbers only)
    $.validator.addMethod("zipCode", function(value, element) {
      return this.optional(element) || /^\+?[0-9]+$/.test(value);
    }, "Please enter a valid ZIP code");
    
    // Custom validation method for password strength
    $.validator.addMethod("strongPassword", function(value, element) {
      return this.optional(element) || 
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
    }, "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
    
    // Login form validation
    $("#login-form").validate({
      rules: {
        "login-username": {
          required: true,
          noSpaces: true
        },
        "login-password": {
          required: true,
          noSpaces: true,
          minlength: 6
        }
      },
      messages: {
        "login-username": {
          required: "Please enter your username or email",
          noSpaces: "Please enter a valid username/email"
        },
        "login-password": {
          required: "Please enter your password",
          noSpaces: "Please enter a valid password",
          minlength: "Password must be at least 6 characters long"
        }
      },
      errorClass: "error",
      validClass: "valid",
      errorPlacement: function(error, element) {
        error.insertAfter(element);
      },
      submitHandler: function(form) {
        // Form is valid, submit it
        alert("Login form is valid! Submitting...");
        // form.submit(); // Uncomment to actually submit the form
        return false; // Prevent form submission for demo
      }
    });
    
    // Register form validation
    $("#register-form").validate({
      rules: {
        "first_name": {
          required: true,
          minlength: 2
        },
        "last_name": {
          required: true,
          minlength: 2
        },
        "email": {
          required: true,
          email: true,
          noSpaces: true
        },
        "contact_number": {
          required: true,
          phoneNumber: true,
          noSpaces: true
        },
        "password": {
          required: true,
          minlength: 6,
          noSpaces: true
        },
        "confirm_password": {
          required: true,
          equalTo: "#reg-password",
          noSpaces: true
        }
      },
      messages: {
        "first_name": {
          required: "Please enter your first name",
          minlength: "First name must be at least 2 characters long"
        },
        "last_name": {
          required: "Please enter your last name",
          minlength: "Last name must be at least 2 characters long"
        },
        "email": {
          required: "Please enter your email address",
          email: "Please enter a valid email address",
          noSpaces: "Spaces are not allowed in email"
        },
        "contact_number": {
          required: "Please enter your contact number",
          phoneNumber: "Please enter a valid phone number (only + and numbers allowed)"
        },
        "password": {
          required: "Please enter a password",
          minlength: "Password must be at least 6 characters long",
          noSpaces: "Spaces are not allowed in password"
        },
        "confirm_password": {
          required: "Please confirm your password",
          equalTo: "Passwords do not match",
          noSpaces: "Spaces are not allowed in confirm password"
        }
      },
      errorClass: "error",
      validClass: "valid",
      errorPlacement: function(error, element) {
        error.insertAfter(element);
      },
      submitHandler: function(form) {
        // Form is valid, submit it
        form.submit();
        return true;
      }
    });
    
    // Keyup validation for email field
    $("#reg-email").on("keyup", function() {
      $(this).valid();
    });
    
    // Your existing dropdown functionality
    // Women's dropdown functionality
    $('[data-category]:not([data-category^="mens-"])').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in women's dropdown
        $('#right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var categoryTitles = {
          'handbags': 'Handbags',
          'shoes': 'Shoes',
          'athletic': 'Athletic Apparel',
          'tops': 'Tops & Blouses',
          'jewelry': 'Jewelry',
          'accessories': 'Accessories',
          'dresses': 'Dresses',
          'sweaters': 'Sweaters',
          'coats': 'Coats & Jackets',
          'jeans': 'Jeans'
        };
        
        $('#right-column-title').text(categoryTitles[category] || 'Categories');
      }
    });
    
    // Men's dropdown functionality
    $('[data-category^="mens-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in men's dropdown
        $('#mens-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var mensCategoryTitles = {
          'mens-accessories': 'Men\'s Accessories',
          'mens-shoes': 'Men\'s Shoes',
          'mens-athletic': 'Men\'s Athletic Apparel',
          'mens-tops': 'Men\'s Tops & Shirts',
          'mens-shorts': 'Men\'s Shorts',
          'mens-jeans': 'Men\'s Jeans',
          'mens-hoodies': 'Men\'s Hoodies & Sweatshirts',
          'mens-jackets': 'Men\'s Jackets & Coats',
          'mens-suits': 'Men\'s Suits & Formal',
          'mens-underwear': 'Men\'s Underwear & Basics'
        };
        
        $('#mens-right-column-title').text(mensCategoryTitles[category] || 'Men\'s Categories');
      }
    });
    
    // Electronics dropdown functionality
    $('[data-category^="electronics-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in electronics dropdown
        $('#electronics-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var electronicsCategoryTitles = {
          'electronics-phones': 'Phones & Tablets',
          'electronics-computers': 'Computers & Laptops',
          'electronics-audio': 'Audio & Headphones',
          'electronics-gaming': 'Gaming',
          'electronics-cameras': 'Cameras & Photography',
          'electronics-tv': 'TV & Home Theater',
          'electronics-smart': 'Smart Home',
          'electronics-accessories': 'Accessories'
        };
        
        $('#electronics-right-column-title').text(electronicsCategoryTitles[category] || 'Electronics');
      }
    });
    
    // Property dropdown functionality
    $('[data-category^="property-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in property dropdown
        $('#property-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var propertyCategoryTitles = {
          'property-houses': 'Houses for Sale',
          'property-rent': 'Houses for Rent',
          'property-condos': 'Condos & Apartments',
          'property-commercial': 'Commercial Properties',
          'property-land': 'Land & Lots',
          'property-vacation': 'Vacation Rentals'
        };
        
        $('#property-right-column-title').text(propertyCategoryTitles[category] || 'Property');
      }
    });
    
    // Automotives dropdown functionality
    $('[data-category^="auto-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in auto dropdown
        $('#auto-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var autoCategoryTitles = {
          'auto-cars': 'Cars',
          'auto-motorcycles': 'Motorcycles',
          'auto-trucks': 'Trucks & Vans',
          'auto-parts': 'Auto Parts',
          'auto-accessories': 'Auto Accessories',
          'auto-tools': 'Auto Tools'
        };
        
        $('#auto-right-column-title').text(autoCategoryTitles[category] || 'Automotives');
      }
    });
    
    // Appliances dropdown functionality
    $('[data-category^="appliances-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in appliances dropdown
        $('#appliances-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var appliancesCategoryTitles = {
          'appliances-kitchen': 'Kitchen Appliances',
          'appliances-laundry': 'Laundry Appliances',
          'appliances-cooling': 'Cooling & Heating',
          'appliances-cleaning': 'Cleaning Appliances',
          'appliances-small': 'Small Appliances'
        };
        
        $('#appliances-right-column-title').text(appliancesCategoryTitles[category] || 'Appliances');
      }
    });
    
    // Vehicles dropdown functionality
    $('[data-category^="vehicles-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in vehicles dropdown
        $('#vehicles-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var vehiclesCategoryTitles = {
          'vehicles-cars': 'Cars',
          'vehicles-motorcycles': 'Motorcycles',
          'vehicles-trucks': 'Trucks & Vans',
          'vehicles-boats': 'Boats & Watercraft',
          'vehicles-aviation': 'Aviation'
        };
        
        $('#vehicles-right-column-title').text(vehiclesCategoryTitles[category] || 'Vehicles');
      }
    });
    
    // Collectibles dropdown functionality
    $('[data-category^="collectibles-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in collectibles dropdown
        $('#collectibles-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var collectiblesCategoryTitles = {
          'collectibles-toys': 'Toys & Games',
          'collectibles-antiques': 'Antiques',
          'collectibles-art': 'Art & Crafts',
          'collectibles-coins': 'Coins & Stamps',
          'collectibles-memorabilia': 'Memorabilia',
          'collectibles-vintage': 'Vintage Items'
        };
        
        $('#collectibles-right-column-title').text(collectiblesCategoryTitles[category] || 'Collectibles');
      }
    });
    
    // Pets dropdown functionality
    $('[data-category^="pets-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in pets dropdown
        $('#pets-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var petsCategoryTitles = {
          'pets-dogs': 'Dogs',
          'pets-cats': 'Cats',
          'pets-birds': 'Birds',
          'pets-fish': 'Fish & Aquatics',
          'pets-small': 'Small Animals',
          'pets-reptiles': 'Reptiles & Amphibians',
          'pets-supplies': 'Pet Supplies'
        };
        
        $('#pets-right-column-title').text(petsCategoryTitles[category] || 'Pets');
      }
    });
    
    // Books dropdown functionality
    $('[data-category^="books-"]').on('mouseenter', function() {
      var $this = $(this);
      var category = $this.data('category');
      var contentId = category + '-content';
      var $contentElement = $('#' + contentId);
      
      if ($contentElement.length) {
        // Hide all content sections in books dropdown
        $('#books-right-column-content [id$="-content"]').addClass('hidden');
        
        // Show the selected content
        $contentElement.removeClass('hidden');
        
        // Update the title
        var booksCategoryTitles = {
          'books-fiction': 'Fiction',
          'books-nonfiction': 'Non-Fiction',
          'books-academic': 'Academic & Textbooks',
          'books-children': 'Children\'s Books',
          'books-comics': 'Comics & Graphic Novels',
          'books-religious': 'Religious & Spiritual',
          'books-magazines': 'Magazines & Periodicals'
        };
        
        $('#books-right-column-title').text(booksCategoryTitles[category] || 'Books');
      }
    });
    
    // Smooth hover effects for all category links
    $('.group').hover(
      function() {
        $(this).find('.group-hover\\:opacity-100').addClass('opacity-100');
        $(this).find('.group-hover\\:visible').addClass('visible');
      },
      function() {
        $(this).find('.group-hover\\:opacity-100').removeClass('opacity-100');
        $(this).find('.group-hover\\:visible').removeClass('visible');
      }
    );
    
    // Enhanced mobile menu functionality
    $('#mobile-menu').on('click', 'a', function() {
      $('#mobile-menu').addClass('hidden');
    });
    
    // Prevent spaces from being entered in specific input fields
    $('input[noSpaces]').on('keypress', function(e) {
      // Block space key (keyCode 32)
      if (e.which === 32) {
        e.preventDefault();
        return false;
      }
    });
    
    // Block spaces only in specific input fields that have noSpaces validation
    $('input[type="text"], input[type="email"], input[type="password"]').on('keypress', function(e) {
      // Check if this input has noSpaces validation rule
      if ($(this).rules() && $(this).rules().noSpaces) {
        if (e.which === 32) { // Space key
          e.preventDefault();
          return false;
        }
      }
    });
    
    // Specifically allow spaces in name fields by removing any space-blocking behavior
    $('#reg-first-name, #reg-last-name').off('keypress').on('keypress', function(e) {
      // Allow all characters including spaces for name fields
      return true;
    });
    
    // Search functionality enhancement
    $('input[type="text"]').on('keypress', function(e) {
      if (e.which === 13) { // Enter key
        var searchTerm = $(this).val();
        if (searchTerm.trim() !== '') {
          // You can add search functionality here
          console.log('Searching for:', searchTerm);
        }
      }
    });
    
    // Add loading states for better UX
    $('a[href]').on('click', function() {
      var $link = $(this);
      if (!$link.hasClass('no-loading')) {
        $link.addClass('opacity-75 pointer-events-none');
        setTimeout(function() {
          $link.removeClass('opacity-75 pointer-events-none');
        }, 1000);
      }
    });
    
  }); // End of main $(document).ready()
</script>

<!-- Load Products Script -->
<script src="load_products.js"></script>

</body>
</html>