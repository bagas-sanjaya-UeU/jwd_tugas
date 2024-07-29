<?php
require_once 'models/Product.php';

class ProductController
{
    private $db;
    private $product;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {
            case 'create':
                $this->createProduct();
                break;
            case 'update':
                $this->updateProduct();
                break;
            case 'delete':
                $this->deleteProduct();
                break;
            case 'view':
                $this->viewProduct();
                break;
            default:
                $this->listProducts();
                break;
        }
    }

    private function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->product->name = $_POST['name'];
            $this->product->price = $_POST['price'];
            $this->product->description = $_POST['description'];

            if ($this->product->create()) {
                header("Location: index.php");
            } else {
                echo "Unable to create product.";
            }
        } else {
            include 'views/create.php';
        }
    }

    private function updateProduct()
    {
        $this->product->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->product->name = $_POST['name'];
            $this->product->price = $_POST['price'];
            $this->product->description = $_POST['description'];

            if ($this->product->update()) {
                header("Location: index.php");
            } else {
                echo "Unable to update product.";
            }
        } else {
            $this->product->readOne();
            include 'views/edit.php';
        }
    }

    private function deleteProduct()
    {
        $this->product->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

        if ($this->product->delete()) {
            header("Location: index.php");
        } else {
            echo "Unable to delete product.";
        }
    }

    private function viewProduct()
    {
        $this->product->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
        $this->product->readOne();
        include 'views/view.php';
    }

    private function listProducts()
    {
        $stmt = $this->product->readAll();
        include 'views/index.php';
    }
}
