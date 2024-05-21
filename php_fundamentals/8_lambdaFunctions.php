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

        function filter($items, $fn){
            $filteredItems = [];

            foreach($items as $item){
                if($fn($item)){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }
        $filteredBooks = filter($books, function ($book){
            return $book['auther'] == 'Andy Wheer';
        });
        
        //Instead of our own function we can use built in function to filter array
        // $filteredBooks = array_filter($books, function ($book){
        //     return $book['auther'] == 'Andy Wheer';
        // });
    ?>

<ul>
        
        <?php foreach($filteredBooks as $book): ?>
            <li>
                <?php echo $book['name'] ?>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>