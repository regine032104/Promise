<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include '../backend/connections.php';
include '../backend/session_check.php';
$pdo = pdo_connect_mysql();

// Check if user is logged in
$isLoggedIn = isLoggedIn();

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM products WHERE product_id = ?');
    $stmt->execute([$_GET['id']]);
    
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?=$product['product_name']?> - Promise Shop</title>
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="../theme.css" />
  <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&family=Unna:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-pink-50 to-rose-50 min-h-screen">
  <!-- NAVBAR -->
  <?php include('../components/navbar.html'); ?>
  <!-- MODAL -->
  <?php include('../components/modal.html'); ?>
  <main class="mx-auto max-w-screen-xl flex-1">

<div class="product content-wrapper">
    <div class="container mx-auto px-4 py-6 sm:px-6">
        <!-- Breadcrumbs -->
        <nav class="mb-6">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="../pages/home.php" class="hover:text-candy-peach">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="products.php" class="hover:text-candy-peach">Products</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-medium"><?=$product['product_name']?></li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image -->
            <div class="space-y-4">
                <div class="aspect-square overflow-hidden rounded-2xl border border-pink-200 bg-white shadow-[0_10px_30px_rgba(236,72,153,0.06)]">
                    <img src="../<?=str_replace('src/img/', 'img/', $product['image_path'])?>" alt="<?=$product['product_name']?>" class="h-full w-full object-cover">
                </div>
            </div>

            <!-- Product Details -->
            <div class="space-y-6">
                <div>
                    <h1 class="font-Tinos text-4xl text-pink-950 mb-4"><?=$product['product_name']?></h1>
                    <div class="flex items-center space-x-4 mb-4">
                        <span class="text-3xl font-bold text-pink-800"><?=format_price($product['price'])?></span>
                    </div>
                    <p class="text-pink-600 text-lg"><?=$product['material']?></p>
                </div>

                <!-- Add to Cart Form -->
                <?php if ($isLoggedIn): ?>
                  <form action="cart.php" method="post" class="space-y-6">
                      <div>
                          <label for="quantity" class="block text-sm font-medium text-pink-800 mb-2">Quantity</label>
                          <input type="number" name="quantity" value="1" min="1" max="99" placeholder="Quantity" required 
                                 class="w-32 px-4 py-3 border border-pink-200 rounded-lg text-center focus:ring-2 focus:ring-pink-400 focus:border-pink-400">
                      </div>
                      <input type="hidden" name="product_id" value="<?=$product['product_id']?>">
                      <button type="submit" 
                              class="w-full rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-8 py-4 font-semibold text-white text-lg transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-100 focus:outline-none">
                          Add to Cart
                      </button>
                  </form>
                <?php else: ?>
                  <div class="space-y-6">
                      <div>
                          <label for="quantity" class="block text-sm font-medium text-pink-800 mb-2">Quantity</label>
                          <input type="number" value="1" min="1" max="99" placeholder="Quantity" disabled
                                 class="w-32 px-4 py-3 border border-pink-200 rounded-lg text-center bg-gray-100">
                      </div>
                      <button type="button" onclick="openModal('login-modal')" 
                              class="w-full rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-8 py-4 font-semibold text-white text-lg transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-100 focus:outline-none">
                          Add to Cart
                      </button>
                  </div>
                <?php endif; ?>

                <!-- Product Description -->
                <div class="border-t border-pink-200 pt-6">
                    <h3 class="font-Tinos text-2xl text-pink-950 mb-4">Description</h3>
                    <div class="prose prose-pink max-w-none">
                        <p class="text-pink-700 leading-relaxed"><?=$product['description']?></p>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="border-t border-pink-200 pt-6">
                    <h3 class="font-Tinos text-2xl text-pink-950 mb-4">Product Details</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-pink-600">Material:</span>
                            <span class="text-pink-800 font-medium"><?=$product['material']?></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-pink-600">Price:</span>
                            <span class="text-pink-800 font-medium"><?=format_price($product['price'])?></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-pink-600">Date Added:</span>
                            <span class="text-pink-800 font-medium"><?=date('F j, Y', strtotime($product['date_added']))?></span>
                        </div>
                    </div>
                </div>

                <!-- Back to Products -->
                <div class="border-t border-pink-200 pt-6">
                    <a href="products.php" 
                       class="inline-flex items-center text-pink-600 hover:text-pink-800 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

  </main>
  <!-- FOOTER -->
  <?php include('../components/footer.html'); ?>
  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="../js/filter.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/validation-integration.js"></script>
  <script src="../js/auth.js"></script>
  <script src="../js/reveal.js"></script>
</body>
</html>
