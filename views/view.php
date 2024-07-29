<!DOCTYPE html>
<html>

<head>
    <title>View Product</title>
</head>

<body>
    <h1>View Product</h1>
    <p><strong>Name:</strong> <?php echo $this->product->name; ?></p>
    <p><strong>Price:</strong> <?php echo $this->product->price; ?></p>
    <p><strong>Description:</strong> <?php echo $this->product->description; ?></p>
    <a href="index.php">Back to list</a>
</body>

</html>