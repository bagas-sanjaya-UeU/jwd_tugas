<?php
require_once 'models/Ticket.php';

class TicketController
{
    private $db;
    private $ticket;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->ticket = new Ticket($this->db);
    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {
            case 'create':
                $this->createTicket();
                break;
            case 'update':
                $this->updateTicket();
                break;
            case 'delete':
                $this->deleteTicket();
                break;
            case 'view':
                $this->viewTicket();
                break;
            case 'modifikasi':
                $this->modifikasiPesanan();
                break;
            default:
                $this->listTicket();
                break;
        }
    }

    private function createTicket()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->ticket->nama = $_POST['nama'] ?? '';
            $this->ticket->no_hp = $_POST['no_hp'] ?? '';
            $this->ticket->tanggal_pesanan = $_POST['tanggal_pesanan'] ?? '';
            $this->ticket->waktu_pelaksanaan = $_POST['waktu_pelaksanaan']  ?? '';
            $this->ticket->penginapan = $_POST['penginapan'] ?? 0;
            $this->ticket->transportasi = $_POST['transportasi'] ?? 0;
            $this->ticket->makanan = $_POST['makanan'] ?? 0;
            $this->ticket->jumlah_peserta = $_POST['jumlah_peserta'] ?? '';
            $this->ticket->harga_paket = $_POST['harga_paket'] ?? '';
            $this->ticket->jumlah_tagihan = $_POST['jumlah_tagihan'] ?? '';
            if ($this->ticket->create()) {
                header("Location: index.php");
            } else {
                echo "Unable to create ticket.";
            }
        } else {
            include 'views/create.php';
        }
    }

    private function updateTicket()
    {
        $this->ticket->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->ticket->nama = $_POST['nama'] ?? '';
            $this->ticket->no_hp = $_POST['no_hp'] ?? '';
            $this->ticket->tanggal_pesanan = $_POST['tanggal_pesanan'] ?? '';
            $this->ticket->waktu_pelaksanaan = $_POST['waktu_pelaksanaan'] ?? '';
            $this->ticket->penginapan = $_POST['penginapan'] ?? 0;
            $this->ticket->transportasi = $_POST['transportasi'] ?? 0;
            $this->ticket->makanan = $_POST['makanan'] ?? 0;
            $this->ticket->jumlah_peserta = $_POST['jumlah_peserta'] ?? '';
            $this->ticket->harga_paket = $_POST['harga_paket'] ?? '';
            $this->ticket->jumlah_tagihan = $_POST['jumlah_tagihan'] ?? '';

            if ($this->ticket->update()) {
                header("Location: index.php?action=modifikasi");
            } else {
                echo "Unable to update ticket.";
            }
        } else {
            $this->ticket->readOne();
            include 'views/edit.php';
        }
    }

    private function deleteTicket()
    {
        $this->ticket->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

        if ($this->ticket->delete()) {
            header("Location: index.php?action=modifikasi");
        } else {
            echo "Unable to delete ticket.";
        }
    }

    private function viewTicket()
    {
        $this->ticket->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
        $this->ticket->readOne();
        include 'views/view.php';
    }

    private function listTicket()
    {
        $stmt = $this->ticket->readAll();
        include 'views/index.php';
    }

    private function modifikasiPesanan()
    {
        $stmt = $this->ticket->readAll();
        include 'views/modifikasi-pesanan.php';
    }
}
