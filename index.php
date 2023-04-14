<!DOCTYPE html>
<html>

<body>

    <?php
    $color = "red";
    $color1 = "blue";
    echo "My car is $color <br>";
    echo "heelo <br>";
    echo $color . "<br>";
    echo 1 + 1;
    $x = 5; // global scope


    echo "<p>Variable x outside function is: $x</p>";
    function myTest()
    {
        static $x = 0;
        echo $x;
        $x++;
    }


    $x = 5985;
    $c = var_dump($x);
    print "<h1> mev : $c mww</h1>";

    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->model . "<br>";
    $x = 5985;
    var_dump(is_int($x));
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));

    echo "<br>";
    // Cast float to int
    $x = 2;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = 2;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    function FunctionName()
    {
        define("hello", "hello word");
        // $hello = "me";
        echo hello;
    };
    $y = $c ?? 100;
    echo  $y;
    echo "<br>";
    echo  	$x <=> $y;

    if ($a > $b) {
        # code...
        echo "fuck shit";
    } else {
        # code...
        echo "we good";
    };
    
    ?>

</body>

</html>