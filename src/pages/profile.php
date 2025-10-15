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

// Handle address update
$updateMessage = '';
$updateType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_address'])) {
    $street_address = trim($_POST['street_address']);
    $city = trim($_POST['city']);
    $province = trim($_POST['province']);
    $barangay = trim($_POST['barangay']);
    $zip_code = trim($_POST['zip_code']);
    
    try {
        $updateStmt = $pdo->prepare("UPDATE customers SET street_address=?, city=?, province=?, barangay=?, zip_code=? WHERE customer_id=?");
        $result = $updateStmt->execute([$street_address, $city, $province, $barangay, $zip_code, $user_id]);
        
        if ($result) {
            $updateMessage = 'Address updated successfully!';
            $updateType = 'success';
            // Refresh user data
            $stmt = $pdo->prepare("SELECT * FROM customers WHERE customer_id = ?");
            $stmt->execute([$user_id]);
            $userData = $stmt->fetch();
        } else {
            $updateMessage = 'Failed to update address. Please try again.';
            $updateType = 'error';
        }
    } catch (PDOException $e) {
        $updateMessage = 'Database error: ' . $e->getMessage();
        $updateType = 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Settings - Promise</title>
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="../theme.css" />
</head>
<body class="flex min-h-screen flex-col bg-accent">
  <!-- NAVBAR -->
  <?php include('../components/navbar.html'); ?>

  <main class="flex-grow py-16 md:py-20">
    <div class="relative z-10 m-auto max-w-screen-xl justify-center py-2 px-4">
      
      <!-- Profile Header -->
      <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-dark mb-4">Profile Settings</h1>
        <p class="text-neutral max-w-3xl mx-auto">
          Manage your account information and shipping address
        </p>
      </div>

      <!-- Update Message -->
      <?php if ($updateMessage): ?>
      <div class="mb-8 p-4 rounded-lg <?php echo $updateType === 'success' ? 'bg-green-100 text-green border-green-200' : 'bg-red-100 text-red border-red-200'; ?>">
        <?php echo htmlspecialchars($updateMessage); ?>
      </div>
      <?php endif; ?>

      <!-- Profile Content -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Personal Information -->
        <div class="card">
          <h2 class="text-2xl font-semibold text-dark mb-6">Personal Information</h2>
          <div class="space-y-4">
            <div>
              <label class="form-label">Full Name</label>
              <p class="text-neutral"><?php echo htmlspecialchars($userData['first_name'] . ' ' . $userData['last_name']); ?></p>
            </div>
            <div>
              <label class="form-label">Email Address</label>
              <p class="text-neutral"><?php echo htmlspecialchars($userData['email']); ?></p>
            </div>
            <div>
              <label class="form-label">Phone Number</label>
              <p class="text-neutral"><?php echo htmlspecialchars($userData['contact_number'] ?? 'Not provided'); ?></p>
            </div>
            <div>
              <label class="form-label">Member Since</label>
              <p class="text-neutral"><?php echo date('F j, Y', strtotime($userData['date_created'])); ?></p>
            </div>
          </div>
        </div>

        <!-- Shipping Address -->
        <div class="card">
          <h2 class="text-2xl font-semibold text-dark mb-6">Shipping Address</h2>
          <form method="POST" class="space-y-4">
            <div>
              <label for="street_address" class="form-label">Street Address</label>
              <input type="text" id="street_address" name="street_address" 
                     value="<?php echo htmlspecialchars($userData['street_address'] ?? ''); ?>"
                     class="form-input" placeholder="Enter your street address" required>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" 
                       value="<?php echo htmlspecialchars($userData['city'] ?? ''); ?>"
                       class="form-input" placeholder="Enter city" required>
              </div>
              
              <div>
                <label for="province" class="form-label">Province</label>
                <input type="text" id="province" name="province" 
                       value="<?php echo htmlspecialchars($userData['province'] ?? ''); ?>"
                       class="form-input" placeholder="Enter province" required>
              </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="barangay" class="form-label">Barangay</label>
                <input type="text" id="barangay" name="barangay" 
                       value="<?php echo htmlspecialchars($userData['barangay'] ?? ''); ?>"
                       class="form-input" placeholder="Enter barangay" required>
              </div>
              
              <div>
                <label for="zip_code" class="form-label">ZIP Code</label>
                <input type="text" id="zip_code" name="zip_code" 
                       value="<?php echo htmlspecialchars($userData['zip_code'] ?? ''); ?>"
                       class="form-input" placeholder="Enter ZIP code" required>
              </div>
            </div>
            
            <button type="submit" name="update_address" class="btn-primary w-full">
              Update Address
            </button>
          </form>
        </div>
      </div>

      <!-- Quick Actions -->
      <div class="mt-8">
        <div class="card">
          <h2 class="text-2xl font-semibold text-dark mb-6">Quick Actions</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="orders.php" class="btn-secondary w-full text-center block">
              View My Orders
            </a>
            <button onclick="logout()" class="btn-secondary w-full">
              Logout
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <?php include('../components/footer.html'); ?>

  <script>
    function logout() {
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '../backend/logout.php';
        }
    }
  </script>
</body>
</html>