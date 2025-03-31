<?php
// Define variables
$first_name = "John";
$last_name = "Doe";

// Check if user has already entered their name
if (isset($_POST['submit'])) {
    // Get the username from form input
    $username = $_POST['username'];

    // Validate and store the username in a database
    validateUsername($username, $first_name, $last_name);

    // Redirect to the success page with a message
    header("Location: success.php");
}

// Function to validate user name
function validateUsername($username, $first_name, $last_name) {
    if (empty($username)) return false;

    $pattern = "/^[a-zA-Z0-9_]+$/";
    if (!preg_match($pattern, $username)) return false;

    // Ensure first and last names are not empty
    if ($first_name === "" || $last_name === "") {
        return false;
    }

    $users = ['John', 'Doe'];
    if (in_array($username, $users) || preg_match('/^[a-zA-Z]+$/', $username)) {
        return true;
    } else {
        return false;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Get the username from the form input
    $username = $_POST['username'];

    // Check if username already exists in the database
    if (validateUsername($username, $first_name, $last_name)) {
        echo "<p>User name already exists.</p>";
    } else {
        // Insert user into the database and set session data for validation
        insertUser($username, $first_name, $last_name);
    }
}
