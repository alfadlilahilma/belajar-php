<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    
    <?php
    // Proses login akan ditambahkan di sini
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Cek username dan password, sesuai dengan database atau validasi lainnya
        // Jika berhasil, arahkan pengguna ke halaman lain
        if ($username === "username" && $password === "password") {
            header("Location: listing_produk.php");
            exit;
        } else {
            echo "Login gagal. Silakan coba lagi.";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
