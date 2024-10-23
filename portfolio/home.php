<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .hero-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: url('images/latar.jpg') no-repeat center center/cover; /* Ganti dengan nama file gambar */
        text-align: center;
        position: relative;
        padding: 0 15px;
    }

    .hero-section h1 {
        font-size: 3rem;
        font-weight: 700;
        color: #fff;
    }

    .hero-section p {
        font-size: 1.25rem;
        margin-bottom: 1.5rem;
        color: #f1f1f1;
    }

    .hero-section .btn-custom {
        background-color: #ff6f61;
        border: none;
        padding: 0.75rem 1.5rem;
        color: #fff;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .hero-section .btn-custom:hover {
        background-color: #e65550;
    }

    .overlay-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Overlay to make text more visible */
        z-index: 1;
    }

    .hero-section .container {
        position: relative;
        z-index: 2;
    }
</style>

</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="hero-section">
        <div class="overlay-bg"></div> <!-- Background overlay -->
        <div class="container">
            <?php
            $sql = "SELECT name, description FROM home LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<h1>I'm " . $row['name'] . "</h1>";
                    echo "<p>" . $row['description'] . "</p>";
                }
            } else {
                echo "<h1>I'm [Your Name]</h1>";
                echo "<p>[Your Profession]</p>";
            }
            ?>
            <a href="profil.php" class="btn btn-custom">Profil</a>
        </div>
    </section>

    <div class="container my-5">
        <h2 class="text-center">Explore My Work</h2>
        <div class="row">
            <?php
            $sql = "SELECT content FROM home";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4'>";
                    echo "<div class='card mb-4'>";
                    echo "<div class='card-body'>";
                    echo "<p class='card-text'>" . $row['content'] . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='text-center'>No content found.</p>";
            }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="portofolio.php" class="btn btn-custom">See My Portfolio</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
