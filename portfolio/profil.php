<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/latar.jpg');
            background-size: cover;
            color: white;
        }
        .card {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .profile-image {
            width: 200px; /* Ukuran gambar bisa disesuaikan */
            height: auto;
            border-radius: 5%; /* Membuat gambar sudut membulat */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1>Profil</h1>
        <?php
        $sql = "SELECT nama, deskripsi FROM profil"; // Mengambil nama dan deskripsi dari database
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card mb-3'>";
                echo "<div class='card-body text-center'>"; // Menambahkan kelas text-center untuk menengah
                echo "<img src='images/profil.jpg' class='profile-image' alt='Profile Image'>"; // Menampilkan gambar profil statis
                echo "<h5 class='card-title'>" . $row['nama'] . "</h5>"; // Menampilkan nama dari database
                echo "<p class='card-text'>" . $row['deskripsi'] . "</p>"; // Menampilkan deskripsi dari database
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No profile found.";
        }
        ?>
    </div>
    
    <?php include 'footer.php'; ?> <!-- Menambahkan Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
