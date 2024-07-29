<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="index.php?action=update&id=<?php echo $this->product->id; ?>" method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $this->product->name; ?>" required><br>
        <label>Price:</label>
        <input type="text" name="price" value="<?php echo $this->product->price; ?>" required><br>
        <label>Description:</label>
        <textarea name="description" required><?php echo $this->product->description; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>