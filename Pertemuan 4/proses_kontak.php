<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Proses Kontak</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container bg-light">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $gender = htmlspecialchars($_POST['gender']);
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);

            echo "<h4>Data yang Diterima:</h4>";
            echo "Nama: $nama <br>";
            echo "Email: $email <br>";
            echo "Gender: $gender <br>";
            echo "Tanggal Lahir: $tanggal_lahir <br>";
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger'>Tidak ada data yang dikirim.</div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
