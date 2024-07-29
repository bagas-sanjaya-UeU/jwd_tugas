<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
</head>

<body>
    <h1>Create Product</h1>
    <form action="index.php?action=create" method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Price:</label>
        <input type="text" name="price" required><br>
        <label>Description:</label>
        <textarea name="description" required></textarea><br>
        <input type="submit" value="Create">
    </form>
</body>

</html>