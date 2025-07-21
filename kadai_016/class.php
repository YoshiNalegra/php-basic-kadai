<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP KADAI class</title>
</head>


<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            public function __construct($name, $price){
                $this->name = $name;
                $this->price =$price;
            }

            // メソッドを定義する
            public function show_price() {
                echo "{$this->price}<br>";
            }
            
        }

       
        
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
    }

            // メソッドを定義する
            public function show_height() {
                echo "{$this->height}<br>";
            }
            public function show_weight() {
                echo "{$this->weight}<br>";
            }
        }



        

// インスタンス化する
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

print_r($food);
echo"<br>";
print_r($animal);
echo"<br>";

$food->show_price(); //250

$animal->show_height(); //60



        ?>
    </p>
</body>

</html>