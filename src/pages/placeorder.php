<?php
session_start();
include '../backend/connections.php';
include '../backend/session_check.php';

// Check if user is logged in
if (!isLoggedIn()) {
    header('Location: home.php');
    exit;
}

// Get the last order ID from session
$order_id = isset($_SESSION['last_order_id']) ? $_SESSION['last_order_id'] : null;

// Clear the order ID from session after retrieving it
if ($order_id) {
    unset($_SESSION['last_order_id']);
}

// Get order details if order ID exists
$order_details = null;
$order_items = [];
if ($order_id) {
    // Get order summary
    $stmt = $pdo->prepare("
        SELECT o.*, 
               COUNT(oi.order_item_id) as item_count
        FROM orders o 
        LEFT JOIN order_items oi ON o.order_id = oi.order_id 
        WHERE o.order_id = ? AND o.customer_id = ?
        GROUP BY o.order_id
    ");
    $stmt->execute([$order_id, $_SESSION['user_id']]);
    $order_details = $stmt->fetch();
    
    // Get individual order items with product details
    if ($order_details) {
        $stmt = $pdo->prepare("
            SELECT oi.*, p.product_name, p.image_path, p.material
            FROM order_items oi 
            JOIN products p ON oi.product_id = p.product_id 
            WHERE oi.order_id = ?
            ORDER BY oi.order_item_id
        ");
        $stmt->execute([$order_id]);
        $order_items = $stmt->fetchAll();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Placed - Promise Shop</title>
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

<div class="placeorder content-wrapper">
    <div class="container mx-auto px-4 py-8 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl border border-pink-200 shadow-[0_10px_30px_rgba(236,72,153,0.06)] overflow-hidden">
                <!-- Success Header -->
                <div class="bg-gradient-to-r from-pink-500 to-rose-500 p-8 text-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h1 class="font-Tinos text-4xl text-white mb-2">Your Order Has Been Placed!</h1>
                    <p class="font-unna text-lg text-pink-100 leading-relaxed">
                        Thank you for choosing Promise Shop! We'll contact you by email with your order details and shipping information.
                    </p>
                </div>
                
                <!-- Content Area -->
                <div class="p-8">
                    
                    <?php if ($order_details): ?>
                    <div class="p-6 bg-pink-50 rounded-lg border border-pink-200">
                        <h3 class="font-semibold text-pink-800 mb-4 text-lg">Order Details:</h3>
                        
                        <!-- Order Summary -->
                        <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                            <div>
                                <p class="text-pink-700"><strong>Order #:</strong> <?php echo $order_details['order_id']; ?></p>
                                <p class="text-pink-700"><strong>Items:</strong> <?php echo $order_details['item_count']; ?> item(s)</p>
                            </div>
                            <div>
                                <p class="text-pink-700"><strong>Total:</strong> ₱<?php echo number_format($order_details['total_amount'], 2); ?></p>
                                <p class="text-pink-700"><strong>Status:</strong> <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-sm"><?php echo ucfirst($order_details['status']); ?></span></p>
                            </div>
                        </div>
                        
                        <!-- Product Items -->
                        <?php if (!empty($order_items)): ?>
                        <div class="border-t border-pink-200 pt-4">
                            <h4 class="font-semibold text-pink-800 mb-3">Ordered Items:</h4>
                            <div class="space-y-3">
                                <?php foreach ($order_items as $item): ?>
                                <div class="flex items-center space-x-3 p-3 bg-white rounded-lg border border-pink-100">
                                    <img src="../<?=str_replace('src/img/', 'img/', $item['image_path'])?>" 
                                         alt="<?=htmlspecialchars($item['product_name'])?>" 
                                         class="w-16 h-16 object-cover rounded-lg">
                                    <div class="flex-1">
                                        <h5 class="font-semibold text-pink-800"><?=htmlspecialchars($item['product_name'])?></h5>
                                        <p class="text-sm text-pink-600"><?=htmlspecialchars($item['material'])?></p>
                                        <p class="text-sm text-pink-700">Quantity: <?=$item['quantity']?> × ₱<?=number_format($item['unit_price'], 2)?></p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-semibold text-pink-800">₱<?=number_format($item['quantity'] * $item['unit_price'], 2)?></p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Action Buttons -->
                    <div class="mt-8 space-y-4">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="orders.php" 
                           class="inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-pink-500 to-rose-500 px-8 py-3 font-semibold text-white text-lg transition hover:shadow-[0_0_30px_rgba(236,72,153,0.25)] focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-100 focus:outline-none">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            View My Orders
                        </a>
                        <a href="products.php" 
                           class="inline-flex items-center justify-center rounded-lg bg-pink-100 px-8 py-3 font-semibold text-pink-800 text-lg transition hover:bg-pink-200 focus:ring-2 focus:ring-pink-400 focus:ring-offset-2 focus:ring-offset-pink-100 focus:outline-none">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            Continue Shopping
                        </a>
                    </div>
                    <div class="pt-2">
                        <a href="../pages/home.php" 
                           class="inline-flex items-center text-pink-600 hover:text-pink-800 transition-colors text-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Back to Home
                        </a>
                    </div>
                    </div>
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
