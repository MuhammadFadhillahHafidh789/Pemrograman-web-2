<?php
// Mulai sesi
session_start();

// Jika form disubmit, simpan data ke sesi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
}

// Jika tombol logout ditekan, hancurkan sesi
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Example</title>
</head>
<body>
    <h1>Session Example</h1>
    <?php
    // Periksa apakah data sesi ada
    if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
        echo "<p>Welcome, congratulation you have been visited this page " . $_SESSION["username"] . "!</p>";
        echo "<p>Your email is " . $_SESSION["email"] . ".</p>";
        echo '<form method="post">
                <button type="submit" name="logout">Logout</button>
              </form>';
    } else {
        echo '<form method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <button type="submit">Submit</button>
              </form>';
    }
    ?>
</body>
</html>
