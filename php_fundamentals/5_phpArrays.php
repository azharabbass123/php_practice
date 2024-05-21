<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php 
        $books = ['book1', 'book2', 'book3'];
    ?>

    <ul>
        <?php foreach($books as $book): ?>
            <li><?php echo $book ?></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>