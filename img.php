<?php
trait construct1
    {
        public function __construct(string $category)
        {
            if($this->section->type == "toy"){
                    $this->img = "https://media.istockphoto.com/id/1316829099/photo/toys-for-dogs-isolated.jpg?b=1&s=170667a&w=0&k=20&c=K10N2vwEPCca0js0TamNk3lqKGcbko8gI_iGfuY7KNw=";
                } else if($this->section->type == "feed"){
                    $this->img = "https://media.istockphoto.com/id/1131841641/photo/dry-pet-food.jpg?s=612x612&w=0&k=20&c=zNKlNVZ-gCYC-b6VUjfrardCC0bYkfPk-C3qlnFxfts=";
                } else {
                    throw new Exception('esistono solo 2 categorie ("toys" e "feed")');
                }
            }
    }

    class Img{
        public $category;
        use construct1;
    }