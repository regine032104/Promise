<?php
require 'connections.php';

// Set content type to JSON for AJAX responses
header('Content-Type: application/json');

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Validate required fields
$required_fields = ['first_name', 'last_name', 'email', 'contact_number', 'password', 'confirm_password'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        echo json_encode(['success' => false, 'message' => 'All fields are required!']);
        exit;
    }
}

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$contact_number = trim($_POST['contact_number']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format!']);
    exit;
}

// Validate password match
if ($password !== $confirm_password) {
    echo json_encode(['success' => false, 'message' => 'Passwords do not match!']);
    exit;
}

// Validate password strength
if (strlen($password) < 6) {
    echo json_encode(['success' => false, 'message' => 'Password must be at least 6 characters long!']);
    exit;
}

try {
    // Check if email already exists
    $check_stmt = $pdo->prepare("SELECT email FROM customers WHERE email = ?");
    $check_stmt->execute([$email]);
    if ($check_stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Email already exists!']);
        exit;
    }

    // Hash password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database using PDO prepared statement
    $stmt = $pdo->prepare("INSERT INTO customers (first_name, last_name, email, contact_number, password_hash) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt->execute([$first_name, $last_name, $email, $contact_number, $password_hash])) {
        echo json_encode(['success' => true, 'message' => 'Registration successful! You can now browse the catalog.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: Registration failed. Please try again.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>