<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/latar.jpg');
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
        <h1>Contact</h1>
        <?php
        $sql = "SELECT email, phone, message, instagram, twitter, linkedin, github FROM contact";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
                echo "<p><strong>Phone:</strong> " . htmlspecialchars($row['phone']) . "</p>";
                echo "<p><strong>Message:</strong> " . htmlspecialchars($row['message']) . "</p>";

                // Menampilkan link media sosial
                if (!empty($row['instagram'])) {
                    echo "<p><strong>Instagram:</strong> <a href='" . htmlspecialchars($row['instagram']) . "' target='_blank' style='color: #1da1f2;'><i class='fab fa-instagram'></i> " . htmlspecialchars($row['instagram']) . "</a></p>";
                }
                if (!empty($row['twitter'])) {
                    echo "<p><strong>Twitter:</strong> <a href='" . htmlspecialchars($row['twitter']) . "' target='_blank' style='color: #1da1f2;'><i class='fab fa-twitter'></i> " . htmlspecialchars($row['twitter']) . "</a></p>";
                }
                if (!empty($row['linkedin'])) {
                    echo "<p><strong>LinkedIn:</strong> <a href='" . htmlspecialchars($row['linkedin']) . "' target='_blank' style='color: #1da1f2;'><i class='fab fa-linkedin'></i> " . htmlspecialchars($row['linkedin']) . "</a></p>";
                }
                if (!empty($row['github'])) {
                    echo "<p><strong>GitHub:</strong> <a href='" . htmlspecialchars($row['github']) . "' target='_blank' style='color: #1da1f2;'><i class='fab fa-github'></i> " . htmlspecialchars($row['github']) . "</a></p>";
                }

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No contact information found.</p>";
        }
        ?>
    </div>
    
    <?php include 'footer.php'; ?>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Menambahkan Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
