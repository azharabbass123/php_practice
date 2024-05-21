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
                "auther"=> "Andy Whear",
                "url"=> "https://google.com",
            ],
            [
                "name"=> "book2",
                "auther"=> "Andy Wheer",
                "url"=> "https://google.com",
            ],
            [
                "name"=> "book3",
                "auther"=> "Andy K",
                "url"=> "https://google.com",
            ],
        ];

        function filterByAuther($books, $auhter){
            $filteredBooks = [];
            foreach($books as $book){
                if($book['auther'] == $auhter){
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>
    <ul>
        
        <?php foreach(filterByAuther($books, 'Andy K') as $book): ?>
            <li>
                <?php echo $book['name'] ?>
            </li>
            <?php endforeach; ?>
    </ul>

</body>
</html>