<!DOCTYPE html>
<html>
<head>
    <title>Listing Produk</title>
</head>
<body>
    <h1>Halaman Listing Produk</h1>
    
    <?php
    // Dalam aplikasi sebenarnya, Anda akan mengambil data produk dari database
    $produk = [
        ["id" => 1, "nama" => "mio", "harga" => 100],
        ["id" => 2, "nama" => "pcx", "harga" => 150],
        ["id" => 3, "nama" => "suzuki", "harga" => 200],
    ];
    
    // Menampilkan daftar produk
    echo "<ul>";
    foreach ($produk as $p) {
        echo "<li>{$p['nama']} - Rp{$p['harga']}</li>";
    }
    echo "</ul>";
    ?>
    
    <a href="login.php">Logout</a>
</body>
</html>
