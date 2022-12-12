<?php

    class IsOnDiscount {
        public $value;
        public $percentage;

        function __construct($value, $percentage) {
            $this->value = $value;
            $this->percentage = $percentage;
        }
    }

    class Section {
        public $type;
        public $aisle;

        function __construct($type, $aisle) {
            $this->type = $type;
            $this->aisle = $aisle;
        }
    }


    class Article {
        public $name;
        public $price;
        public $isOnDiscount;
        public $category;
        public $section;
        
        function __construct($name, $price, $isOnDiscount, $category, $section) {
            $this->name = $name;
            $this->price = $price;
            $this->isOnDiscount = $isOnDiscount;
            $this->category = $category;
            $this->section = $section;
            
        }
    }

    $shopArticles = [
        $ciboPerCaniPurina4kg = new Article("Cibo Per Cani Purina 4kg", "29.99", new IsOnDiscount(true, "20%"), "dog", new Section("feed", "3")),
        $cordaPerGatti = new Article("Corda Per Gatti", "3.99", new IsOnDiscount(false, "0%"), "cat", new Section("toys", "2")),
        $ciboPerGattiUmido80gr = new Article("Cibo Per Gatti Umido 80gr", "0.99", new IsOnDiscount(false, "0%"), "cat", new Section("feed", "3")),
        $pallaPerCriceti = new Article("Palla Per Criceti", "3.99", new IsOnDiscount(true, "50%"), "hamster", new Section("toys", "2")),
    ];

//  echo json_encode($ciboPerCaniPurina4kg);
//  echo json_encode($cordaPerGatti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta category="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
    
    <div id="app">

        <div class="container">
            <div class="row">
                <?php foreach ($shopArticles as $article) : ?>
                    <div class="col-3">
                        <div class="card text-center">
                            <img class="p-4" src="https://picsum.photos/200" alt="immagine lorem piscum">
                            <h4 class="p-2"><?= $article->name ?></h4>
                            <p> <?= $article->price ?></p>
                            <p> for <?= $article->category?>s</p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./main.js" type="module"></script>
</body>
</html>

