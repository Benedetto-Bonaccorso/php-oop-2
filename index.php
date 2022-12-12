<?php

class Category {
    public $animal;
    public $warrantyPeriod;

    function __construct($animal, $warrantyPeriod) {
        $this->animal = $animal;
        $this->warrantyPeriod = $warrantyPeriod;
      }
}

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
    public $price;
    public $isOnDiscount;
    public $category;
    public $section;
    
    function __construct($price, $isOnDiscount, $section, $category) {
        $this->price = $price;
        $this->isOnDiscount = $isOnDiscount;
        $this->category = $category;
        $this->section = $section;
        
    }
}

$ciboPerCaniPurina4kg = new Article("29.99", new IsOnDiscount(true, "20%"), new Category("dog", "none"), new Section("feed", "3"));
$cordaPerGatti = new Article("3.99", new IsOnDiscount(false, "0%"), new Category("cat", "2 Years"), new Section("toys", "2"));

var_dump($ciboPerCaniPurina4kg);
var_dump($cordaPerGatti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta category="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    

    <div id="app">

        <div class="a" v-for="i in 10">
            {{i}}
        </div>

    </div>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./main.js"></script>
</body>
</html>

