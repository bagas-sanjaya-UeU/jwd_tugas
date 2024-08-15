<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
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
                        <a class="nav-link" href="#">Daftar Paket Wisata</a>
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

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">


        <h1>Edit Product</h1>
        <form action="index.php?action=update&id=<?php echo $this->ticket->id; ?>" method="POST">
            <div class="form-group mb-2">
                <label for="nama">Nama Pemesan:</label>
                <input type="text" class="form-control" value="<?php echo $this->ticket->nama; ?>" id="nama" name="nama" required>
            </div>
            <div class="form-group mb-2">
                <label for="no_hp">Nomor HP/Telp:</label>
                <input type="text" class="form-control" id="no_hp" value="<?php echo $this->ticket->no_hp; ?>" name="no_hp" required>
            </div>
            <div class="form-group mb-2">
                <label for="tanggal_pesan">Tanggal Pesan:</label>
                <input type="date" class="form-control" id="tanggal_pesan" value="<?php echo $this->ticket->tanggal_pesanan; ?>" name="tanggal_pesanan" required>
            </div>
            <div class="form-group mb-2">
                <label for="waktu_pelaksanaan">Waktu Pelaksanaan Perjalanan:</label>
                <input type="number" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?php echo $this->ticket->waktu_pelaksanaan; ?>" required>
            </div>
            <div class="form-group mb-2">
                <label for="layanan">Pelayanan Paket Perjalanan:</label><br>
                <input type="checkbox" id="layanan[]" name="penginapan" value="1000000" <?php echo $this->ticket->penginapan == 0 ? '' : 'checked'; ?>> Penginapan (Rp 1.000.000)<br>
                <input type="checkbox" id="layanan[]" name="transportasi" value="1200000" <?php echo $this->ticket->transportasi == 0  ? '' : 'checked'; ?>> Transportasi (Rp 1.200.000)<br>
                <input type="checkbox" id="layanan[]" name="makanan" value="500000" <?php echo $this->ticket->makanan == 0  ? '' : 'checked'; ?>> Servis/Makan (Rp 500.000)<br>
            </div>
            <div class="form-group mb-2">
                <label for="jumlah_peserta">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" value="<?php echo $this->ticket->jumlah_peserta; ?>" required>
            </div>
            <div class="form-group mb-2">
                <label for="harga_paket">Harga Paket Perjalanan:</label>
                <input type="text" class="form-control" id="harga_paket" name="harga_paket" value="<?php echo $this->ticket->harga_paket; ?>" readonly>
            </div>
            <div class="form-group mb-2 ">
                <label for="jumlah_tagihan">Jumlah Tagihan:</label>
                <input type="text" class="form-control" id="jumlah_tagihan" name="jumlah_tagihan" value="<?php echo $this->ticket->jumlah_tagihan; ?>" readonly>
            </div>
            <button type="button" id="hitungbtn" class="btn btn-primary" onclick="hitungTagihan()">Hitung</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" id="submitbtn" class="btn btn-success" disabled>Simpan</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        let hitungbtn = document.getElementById('hitungbtn');
        let submitbtn = document.getElementById('submitbtn');

        function hitungTagihan() {
            let layanan = document.querySelectorAll('input[id="layanan[]"]:checked');
            let totalLayanan = 0;
            layanan.forEach(function(item) {
                totalLayanan += parseInt(item.value);
            });

            let waktuPelaksanaan = document.getElementById('waktu_pelaksanaan').value;
            let jumlahPeserta = document.getElementById('jumlah_peserta').value;
            let totalTagihan = totalLayanan * waktuPelaksanaan * jumlahPeserta;

            document.getElementById('harga_paket').value = totalLayanan;
            document.getElementById('jumlah_tagihan').value = totalTagihan;
            submitbtn.disabled = false;
        }
    </script>


</body>

</html>