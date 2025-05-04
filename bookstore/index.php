<?php
include 'db.php';
$stmt = $pdo->query("SELECT * FROM books");
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Book List</h1>
        <button class="btn btn-primary"><a href="add.php">Add New Book</a></button>
        <button class="btn btn-primary"><a href="search.php">Search Book</a></button>

        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <?php echo $book['title']; ?> by <?php echo $book['author']; ?>
                    <a href="edit.php?id=<?php echo $book['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $book['id']; ?>">Delete</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>