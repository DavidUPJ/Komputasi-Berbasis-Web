<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio David Fachrezi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/latar4.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex; /* Menggunakan flexbox */
            flex-direction: column; /* Mengatur arah kolom */
            min-height: 50vh; /* Mengatur tinggi minimal 100% dari viewport */
        }
        .container {
            flex: 1; /* Mengizinkan container mengisi ruang yang tersedia */
        }
        .card {
            background: rgba(0, 0, 0, 0.6);
            border: none;
            margin-bottom: 20px;
            transition: transform 0.2s ease;
        }
       
        .card-title, .card-text {
            color: white;
        }
        .container h1, h2 {
            color: #; /* Warna kuning terang untuk judul */
        }
        .btn-contact {
            background-color: #ffeb3b; /* Warna kuning terang untuk tombol */
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }
        .btn-contact:hover {
            background-color: #ffc107; /* Warna kuning gelap saat hover */
            color: black;
        }
        footer {
            color: white; /* Warna teks footer */
            text-align: center; /* Tengah teks */
            padding: 10px 0; /* Padding untuk footer */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1>Portofolio David Fachrezi</h1>
        
        <?php
        $sql = "SELECT * FROM portofolio WHERE id = 1"; // Ambil data dari portofolio
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";

                echo "<h2>Profil Saya</h2>";
                echo "<p><strong>Nama:</strong> " . $row['nama'] . "</p>";
                echo "<p><strong>Nama Panggilan:</strong> " . $row['panggilan'] . "</p>";
                echo "<p><strong>Usia:</strong> " . $row['usia'] . " tahun</p>";
                echo "<p><strong>Jurusan:</strong> " . $row['jurusan'] . "</p>";
                echo "<p><strong>Latar Belakang Pendidikan:</strong> " . $row['pendidikan'] . "</p>";

                echo "<h2>Tentang Saya</h2>";
                echo "<p>" . $row['deskripsi'] . "</p>";

                echo "<h2>Keterampilan</h2>";
                echo "<p>" . nl2br($row['keterampilan']) . "</p>"; // Menampilkan keterampilan dengan format yang lebih rapi

                echo "<h2>Proyek</h2>";
                echo "<p>" . nl2br($row['proyek']) . "</p>"; 

                echo "<h2>Pendidikan</h2>";
                echo "<p>" . nl2br($row['pendidikan_detail']) . "</p>";

                // Bagian Tombol Kontak yang Menarik
                echo "<h2>Kontak</h2>";
                echo "<p>Untuk informasi lebih lanjut, klik tombol di bawah ini:</p>";
                echo "<a href='contact.php' class='btn btn-contact'>Hubungi Saya</a>"; // Tombol menggunakan Bootstrap

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Data tidak ditemukan.";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
