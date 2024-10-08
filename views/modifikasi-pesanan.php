<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Wisata Banten</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paketWisata">Daftar Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=modifikasi">Modifikasi Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item mt-2 ms-3">
                        <!-- Bootstrap 5 switch -->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkModeSwitch" checked>
                            <label class="form-check-label" for="darkModeSwitch">Dark Mode</label>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=auth&action=logout">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container table-responsive mt-5">
        <h2>Data Peserta Paket</h2>
        <table class="table ">
            <thead>
                <tr>
                    <th class="w-auto">ID</th>
                    <th class="w-auto">Nama</th>
                    <th>Phone</th>
                    <th>Tanggal Pesanan</th>
                    <th>Waktu Pelaksanaan</th>
                    <th>Penginapan</th>
                    <th>Transportasi</th>
                    <th>Makanan</th>
                    <th>Jumlah Peserta</th>
                    <th>Harga Paket</th>
                    <th>Jumlah Tagihan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['no_hp'] . "</td>";
                    echo "<td>" . $row['tanggal_pesanan'] . "</td>";
                    echo "<td>" . $row['waktu_pelaksanaan'] . "</td>";
                    echo "<td>" . ($row['penginapan'] == 0 ? "N" : "Y") . "</td>";
                    echo "<td>" . ($row['transportasi']  == 0 ? "N" : "Y") . "</td>";
                    echo "<td>" . ($row['makanan']  == 0 ? "N" : "Y") . "</td>";
                    echo "<td>" . $row['jumlah_peserta'] . "</td>";
                    echo "<td>" . $row['harga_paket'] . "</td>";
                    echo "<td>" . $row['jumlah_tagihan'] . "</td>";

                    echo "<td>";
                    echo "<a href='index.php?action=update&id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                    echo "<a href='index.php?action=delete&id=" . $row['id'] . "' onclick=\"return confirm('Are you sure?')\" class='btn btn-danger btn-sm'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        console.log(`
        %cJangan ubah-ubah kode program ini ya, nanti error loh!
        Biarlah kode program ini seperti semula
        Dibuat dengan ❤️ oleh Charderra Sanjaya

        `, 'color: #FFC300 ; font-size: 16px;');
        document.addEventListener('DOMContentLoaded', (event) => {
            const htmlElement = document.documentElement;
            const switchElement = document.getElementById('darkModeSwitch');
            const navbar = document.getElementById('navbar');

            // Set the default theme to dark if no setting is found in local storage
            const currentTheme = localStorage.getItem('bsTheme') || 'dark';
            htmlElement.setAttribute('data-bs-theme', currentTheme);
            switchElement.checked = currentTheme === 'dark';

            switchElement.addEventListener('change', function() {
                if (this.checked) {
                    htmlElement.setAttribute('data-bs-theme', 'dark');
                    localStorage.setItem('bsTheme', 'dark');
                    navbar.classList.remove('bg-danger');
                    navbar.classList.add('bg-primary');
                } else {
                    htmlElement.setAttribute('data-bs-theme', 'light');
                    localStorage.setItem('bsTheme', 'light');
                    navbar.classList.remove('bg-primary');
                    navbar.classList.add('bg-danger');
                }
            });
        });
    </script>
</body>

</html>