<?php

    class Movie {

        public $title;
        public $director;
        public $year;
        public $price;
        private $discount;
        public $price_discounted;

        public function frontCard() {
            return $this->title . '<br>' . $this->year;
        }

        public function __construct($_title, $_year, $_price) {
            $this->title = $_title;
            $this->year = $_year;
            $this->price = $_price;
        }

        public function setDiscount() {
            if($this->year < 2000) {
                $this->discount = 4;
            } else {
                $this->discount = 0;
            }
        }

        public function setNewPrice() {
            $this->price_discounted = $this->price - $this->discount;
        }


    }
    // istanza del film
    $avatar = new Movie('Avatar', 2010, 15);
    // $avatar->title = 'Avatar';
    $avatar->director = 'James Cameron';
    // $avatar->year = 2010;
    $avatar->setDiscount(); 
    // $avatar->price = 15;
    $avatar->setNewPrice();
    // var_dump($avatar);


    //istanza del film
    $ghostbusters = new Movie('Ghostbusters - Acchiappafantasmi', 1984, 12);
    // $ghostbusters->title = 'Ghostbusters - Acchiappafantasmi';
    $ghostbusters->director = 'Ivan Reitman';
    // $ghostbusters->year = 1984;
    $ghostbusters->setDiscount();
    // $ghostbusters->price = 12;
    $ghostbusters->setNewPrice();
    // var_dump($ghostbusters);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="single-movie">
        <div>
            <?php echo $avatar->frontCard(); ?>
        </div>
        <div>
            Regista:
            <?php echo $avatar->director; ?>
        </div>
        <div>
            Il vecchio prezzo era: 
            <?php echo $avatar->price; ?>
        </div>
        <div>
            Il prezzo scontato è: 
            <?php echo $avatar->price_discounted . ' €'; ?>
        </div>
    </div>

    <br><br><br>

    <!-- single movie -->
    <div class="single-movie">
        <div>
            <?php echo $ghostbusters->frontCard(); ?>
        </div>
        <div>
            Regista:
            <?php echo $ghostbusters->director; ?>
        </div>
        <div>
            Il vecchio prezzo era: 
            <?php echo $ghostbusters->price; ?>
        </div>
        <div>
            Il prezzo scontato è: 
            <?php echo $ghostbusters->price_discounted . ' €'; ?>
        </div>
    </div>
</body>
</html>