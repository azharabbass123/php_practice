<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $books = [
        [
            "name"=> "book1",
            "auther"=> "Philip K.",
            "url"=> "https://google.com",
        ],
        [
            "name"=> "book2",
            "auther"=> "Philip K.",
            "url"=> "https://google.com",
        ],
    ]
    ?>
    <ul>
    <?php foreach($books as $book): ?>
            <li><?php echo $book['url']; ?></li>
            <?php endforeach;?>
    </ul>
</body>
</html>