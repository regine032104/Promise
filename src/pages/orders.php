<?php
require_once('../backend/session_check.php');

// Check if user is logged in
if (!isLoggedIn()) {
    header('Location: ../pages/home.php');
    exit;
}

// Get user data directly from session to avoid function issues
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : null;

// Validate session data
if (!$user_id || !$user_name || !$user_email) {
    // Clear invalid session and redirect
    session_destroy();
    header('Location: ../pages/home.php');
    exit;
}

// Get user's full data from database
require_once('../backend/connections.php');
$stmt = $pdo->prepare("SELECT * FROM customers WHERE customer_id = ?");
$stmt->execute([$user_id]);
$userData = $stmt->fetch();

// Get user's orders from database
$ordersQuery = "
    SELECT o.*, 
           COUNT(oi.order_item_id) as item_count
    FROM orders o 
    LEFT JOIN order_items oi ON o.order_id = oi.order_id 
    WHERE o.customer_id = ? 
    GROUP BY o.order_id 
    ORDER BY o.order_date DESC
";
$ordersStmt = $pdo->prepare($ordersQuery);
$ordersStmt->execute([$user_id]);
$orders = $ordersStmt->fetchAll();

// Get order items for each order
$orderItems = [];
foreach ($orders as $order) {
    $itemsQuery = "
        SELECT oi.*, p.product_name, p.image_path, p.material
        FROM order_items oi 
        JOIN products p ON oi.product_id = p.product_id 
        WHERE oi.order_id = ?
        ORDER BY oi.order_item_id
    ";
    $itemsStmt = $pdo->prepare($itemsQuery);
    $itemsStmt->execute([$order['order_id']]);
    $orderItems[$order['order_id']] = $itemsStmt->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Orders - Promise</title>
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="../theme.css" />
</head>
<body class="flex min-h-screen flex-col bg-accent">
  <!-- NAVBAR -->
  <?php include('../components/navbar.html'); ?>

  <main class="flex-grow py-16 md:py-20">
    <div class="relative z-10 m-auto max-w-screen-xl justify-center py-2 px-4">
      
      <!-- Orders Header -->
      <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-dark mb-4">My Orders</h1>
        <p class="text-neutral max-w-3xl mx-auto">
          Track and manage your bridal orders
        </p>
      </div>

      <!-- Orders Content -->
      <?php if (empty($orders)): ?>
        <div class="card">
          <div class="text-center py-12">
            <div class="mb-6">
              <svg class="mx-auto h-16 w-16 text-neutral" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-dark mb-4">No orders yet</h3>
            <p class="text-neutral mb-6">You haven't placed any orders yet. Start shopping to see your orders here.</p>
            <a href="products.php" class="btn-primary">
              Start Shopping
            </a>
          </div>
        </div>
      <?php else: ?>
        <div class="space-y-6">
          <?php foreach ($orders as $order): ?>
            <div class="card">
              <!-- Order Header -->
              <div class="mb-4">
                <h3 class="text-lg font-semibold text-dark">Order #<?php echo $order['order_id']; ?></h3>
                <p class="text-neutral text-sm">
                  <strong>Date:</strong> <?php echo date('M d, Y', strtotime($order['order_date'])); ?>
                </p>
              </div>

              <!-- Product Items -->
              <?php if (isset($orderItems[$order['order_id']]) && !empty($orderItems[$order['order_id']])): ?>
                <div class="space-y-3 mb-4">
                  <?php foreach ($orderItems[$order['order_id']] as $item): ?>
                    <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                      <img src="../<?=str_replace('src/img/', 'img/', $item['image_path'])?>" 
                           alt="<?=htmlspecialchars($item['product_name'])?>" 
                           class="w-16 h-16 object-cover rounded-lg">
                      <div class="flex-1">
                        <h4 class="font-semibold text-dark"><?=htmlspecialchars($item['product_name'])?></h4>
                        <p class="text-sm text-neutral"><?=htmlspecialchars($item['material'])?></p>
                        <p class="text-sm text-neutral">Quantity: <?=$item['quantity']?> × ₱<?=number_format($item['unit_price'], 2)?></p>
                      </div>
                      <div class="text-right">
                        <p class="font-semibold text-dark">₱<?=number_format($item['quantity'] * $item['unit_price'], 2)?></p>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

              <!-- Order Summary -->
              <div class="border-t border-gray-200 pt-4 mb-4">
                <div class="flex justify-between items-center mb-2">
                  <span class="text-neutral">Items:</span>
                  <span class="text-dark"><?php echo $order['item_count']; ?> item(s)</span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-neutral">Total:</span>
                  <span class="text-dark font-semibold text-lg">₱<?php echo number_format($order['total_amount'], 2); ?></span>
                </div>
              </div>

              <!-- Status and Actions -->
              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <div class="flex items-center">
                  <span class="text-neutral mr-2">Status:</span>
                  <span class="px-3 py-1 rounded-full text-sm font-medium
                    <?php 
                      switch($order['status']) {
                        case 'pending': echo 'bg-blue-100 text-blue-800'; break;
                        case 'processing': echo 'bg-yellow-100 text-yellow-800'; break;
                        case 'shipped': echo 'bg-green-100 text-green-800'; break;
                        case 'delivered': echo 'bg-purple-100 text-purple-800'; break;
                        case 'cancelled': echo 'bg-red-100 text-red-800'; break;
                        default: echo 'bg-gray-100 text-gray-800';
                      }
                    ?>">
                    <?php echo ucfirst($order['status']); ?>
                  </span>
                </div>
                <button class="btn-secondary w-full sm:w-auto" onclick="viewOrderDetails(<?php echo $order['order_id']; ?>)">
                  View Details
                </button>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Order Status Legend -->
      <div class="mt-8">
        <div class="card">
          <h2 class="text-2xl font-semibold text-dark mb-6">Order Status Guide</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="text-center p-4 bg-blue-50 rounded-lg">
              <div class="w-3 h-3 bg-blue-500 rounded-full mx-auto mb-2"></div>
              <h3 class="font-semibold text-dark">Pending</h3>
              <p class="text-sm text-neutral">Order received, processing</p>
            </div>
            <div class="text-center p-4 bg-yellow-50 rounded-lg">
              <div class="w-3 h-3 bg-yellow-500 rounded-full mx-auto mb-2"></div>
              <h3 class="font-semibold text-dark">In Progress</h3>
              <p class="text-sm text-neutral">Being prepared</p>
            </div>
            <div class="text-center p-4 bg-green-50 rounded-lg">
              <div class="w-3 h-3 bg-green-500 rounded-full mx-auto mb-2"></div>
              <h3 class="font-semibold text-dark">Shipped</h3>
              <p class="text-sm text-neutral">On its way</p>
            </div>
            <div class="text-center p-4 bg-purple-50 rounded-lg">
              <div class="w-3 h-3 bg-purple-500 rounded-full mx-auto mb-2"></div>
              <h3 class="font-semibold text-dark">Delivered</h3>
              <p class="text-sm text-neutral">Order completed</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Actions -->
      <div class="mt-8">
        <div class="card">
          <h2 class="text-2xl font-semibold text-dark mb-6">Quick Actions</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="products.php" class="btn-primary w-full text-center block">
              Browse Products
            </a>
            <a href="profile.php" class="btn-secondary w-full text-center block">
              Profile Settings
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <?php include('../components/footer.html'); ?>

  <script>
    function viewOrderDetails(orderId) {
      // For now, just show an alert. You can expand this to show a modal or redirect to a detailed page
      alert('Order details for Order #' + orderId + ' will be implemented soon!');
    }
  </script>
</body>
</html>
