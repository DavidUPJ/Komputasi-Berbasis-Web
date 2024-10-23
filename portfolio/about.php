<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/latar2.jpg');
            background-size: cover;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Mengatur tinggi minimal 100% dari viewport */
        }
        .container {
            flex: 1;
        }
        .card {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            transition: transform 0.2s;
            margin-bottom: 20px; /* Tambahkan jarak antara kartu */
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container text-center" style="height: 100vh; display: flex; flex-direction: column; justify-content: center;"> 
        <h1>About</h1>
        <?php
        $sql = "SELECT title, description FROM about";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . htmlspecialchars($row['title']) . "</h5>";
                echo "<p class='card-text'>" . nl2br(htmlspecialchars($row['description'])) . "</p>"; // Menampilkan deskripsi dengan format yang rapi
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No about info found.</p>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
