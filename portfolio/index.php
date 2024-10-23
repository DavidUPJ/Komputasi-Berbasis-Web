<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/background.jpg'); /* Ganti dengan gambar latar belakang Anda */
            background-size: cover;
            color: white;
        }
        .jumbotron {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 2rem;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="jumbotron text-center mt-4">
        <h1 class="display-4">Welcome to My Portfolio!</h1>
        <p class="lead">Showcasing my work and projects</p>
        <hr class="my-4">
        <p>Explore the links above to learn more about me.</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
