<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="kontak.css">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container bg-light">
        <h2 class="text-center">Kontak Kami</h2>
        <hr>
        <form action="proses_kontak.php" method="POST">
            <div class="form-group jarak_form">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama anda" required>
            </div>

            <div class="form-group jarak_form">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email anda" required>
            </div>

            <div class="input-group">
                Gender:
                <div class="input2">
                    <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
                </div>
                <div class="input">
                    <input type="radio" name="gender" value="Perempuan" required> Perempuan
                </div>
            </div>

            <div class="form-group form-tgl">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
