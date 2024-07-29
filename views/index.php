<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
</head>

<body>
    <h1>Products</h1>
    <a href="index.php?action=create">Create Product</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>";
            echo "<a href='index.php?action=view&id=" . $row['id'] . "'>View</a> ";
            echo "<a href='index.php?action=update&id=" . $row['id'] . "'>Edit</a> ";
            echo "<a href='index.php?action=delete&id=" . $row['id'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>