<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
  <p>
  <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する 
        private $name;
        private $price;

    // メソッドを定義する
    public function show_price() {
        echo $this->price;
    }
    // コンストラクタを定義する
    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
    }

   

    

    class Animal {
        // プロパティを定義する 
        private $name;
        private $height;
        private $weight;

    // メソッドを定義する
    public function show_height() {
        echo $this->height;    
    }

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
  

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$userの各プロパティの値を出力する
    print_r($food);
    print_r($animal);

    echo '<br>';
    print_r(250);
        echo '<br>';
    print_r(60);
        echo '<br>';

?>
     </p>

 </body>
</html>
