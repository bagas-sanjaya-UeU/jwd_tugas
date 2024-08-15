<?php
class Ticket
{
    private $conn;
    private $table_name = "tickets";

    public $id;
    public $nama;
    public $no_hp;
    public $tanggal_pesanan;
    public $waktu_pelaksanaan;
    public $penginapan;
    public $transportasi;
    public $makanan;
    public $jumlah_peserta;
    public $harga_paket;
    public $jumlah_tagihan;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET nama = :nama, no_hp = :no_hp, tanggal_pesanan = :tanggal_pesanan, waktu_pelaksanaan = :waktu_pelaksanaan, penginapan = :penginapan, transportasi = :transportasi, makanan = :makanan, jumlah_peserta = :jumlah_peserta, harga_paket = :harga_paket, jumlah_tagihan = :jumlah_tagihan";
        $stmt = $this->conn->prepare($query);

        $this->nama = htmlspecialchars(strip_tags($this->nama ?? ''));
        $this->no_hp = htmlspecialchars(strip_tags($this->no_hp ?? ''));
        $this->tanggal_pesanan = htmlspecialchars(strip_tags($this->tanggal_pesanan ?? ''));
        $this->waktu_pelaksanaan = htmlspecialchars(strip_tags($this->waktu_pelaksanaan ?? ''));
        $this->penginapan = htmlspecialchars(strip_tags($this->penginapan ?? ''));
        $this->transportasi = htmlspecialchars(strip_tags($this->transportasi ?? ''));
        $this->makanan = htmlspecialchars(strip_tags($this->makanan ?? ''));
        $this->jumlah_peserta = htmlspecialchars(strip_tags($this->jumlah_peserta   ?? ''));
        $this->harga_paket = htmlspecialchars(strip_tags($this->harga_paket ?? ''));
        $this->jumlah_tagihan = htmlspecialchars(strip_tags($this->jumlah_tagihan ?? ''));

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":no_hp", $this->no_hp);
        $stmt->bindParam(":tanggal_pesanan", $this->tanggal_pesanan);
        $stmt->bindParam(":waktu_pelaksanaan", $this->waktu_pelaksanaan);
        $stmt->bindParam(":penginapan", $this->penginapan);
        $stmt->bindParam(":transportasi", $this->transportasi);
        $stmt->bindParam(":makanan", $this->makanan);
        $stmt->bindParam(":jumlah_peserta", $this->jumlah_peserta);
        $stmt->bindParam(":harga_paket", $this->harga_paket);
        $stmt->bindParam(":jumlah_tagihan", $this->jumlah_tagihan);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readAll()
    {
        $query = "SELECT id,  nama, no_hp, tanggal_pesanan, waktu_pelaksanaan, penginapan, transportasi, makanan, jumlah_peserta, harga_paket, jumlah_tagihan FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne()
    {
        $query = "SELECT id, nama, no_hp, tanggal_pesanan, waktu_pelaksanaan, penginapan, transportasi, makanan, jumlah_peserta, harga_paket, jumlah_tagihan FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nama = $row['nama'];
        $this->no_hp = $row['no_hp'];
        $this->tanggal_pesanan = $row['tanggal_pesanan'];
        $this->waktu_pelaksanaan = $row['waktu_pelaksanaan'];
        $this->penginapan = $row['penginapan'];
        $this->transportasi = $row['transportasi'];
        $this->makanan = $row['makanan'];
        $this->jumlah_peserta = $row['jumlah_peserta'];
        $this->harga_paket = $row['harga_paket'];
        $this->jumlah_tagihan = $row['jumlah_tagihan'];
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET nama = :nama, no_hp = :no_hp, tanggal_pesanan = :tanggal_pesanan, waktu_pelaksanaan = :waktu_pelaksanaan, penginapan = :penginapan, transportasi = :transportasi, makanan = :makanan, jumlah_peserta = :jumlah_peserta, harga_paket = :harga_paket, jumlah_tagihan = :jumlah_tagihan WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $this->nama = htmlspecialchars(strip_tags($this->nama ?? ''));
        $this->no_hp = htmlspecialchars(strip_tags($this->no_hp ?? ''));
        $this->tanggal_pesanan = htmlspecialchars(strip_tags($this->tanggal_pesanan ?? ''));
        $this->waktu_pelaksanaan = htmlspecialchars(strip_tags($this->waktu_pelaksanaan ?? ''));
        $this->penginapan = htmlspecialchars(strip_tags($this->penginapan ?? ''));
        $this->transportasi = htmlspecialchars(strip_tags($this->transportasi ?? ''));
        $this->makanan = htmlspecialchars(strip_tags($this->makanan ?? ''));
        $this->jumlah_peserta = htmlspecialchars(strip_tags($this->jumlah_peserta ?? ''));
        $this->harga_paket = htmlspecialchars(strip_tags($this->harga_paket ?? ''));
        $this->jumlah_tagihan = htmlspecialchars(strip_tags($this->jumlah_tagihan ?? ''));
        $this->id = htmlspecialchars(strip_tags($this->id ?? ''));

        $stmt->bindParam(':nama', $this->nama);
        $stmt->bindParam(':no_hp', $this->no_hp);
        $stmt->bindParam(':tanggal_pesanan', $this->tanggal_pesanan);
        $stmt->bindParam(':waktu_pelaksanaan', $this->waktu_pelaksanaan);
        $stmt->bindParam(':penginapan', $this->penginapan);
        $stmt->bindParam(':transportasi', $this->transportasi);
        $stmt->bindParam(':makanan', $this->makanan);
        $stmt->bindParam(':jumlah_peserta', $this->jumlah_peserta);
        $stmt->bindParam(':harga_paket', $this->harga_paket);
        $stmt->bindParam(':jumlah_tagihan', $this->jumlah_tagihan);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
