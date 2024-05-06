// Definisi kelas induk
class Shape {
    public function calculateArea() {
        // Metode ini akan diimplementasikan di kelas anak
    }
}

// Definisi kelas anak pertama
class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Definisi kelas anak kedua
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Fungsi yang menerima objek dari kelas Shape
function printArea(Shape $shape) {
    echo "Luasnya adalah: " . $shape->calculateArea() . "\n";
}

// Penggunaan polimorfisme
$square = new Square(5);
$circle = new Circle(3);

printArea($square); // Output: Luasnya adalah: 25
printArea($circle); // Output: Luasnya adalah: 28.274333882308
