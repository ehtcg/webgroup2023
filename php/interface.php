<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interface</title>
</head>

<body>
    <?php
     // interface definition
    interface Animal{
        public function makeSound();
    }
      // Class definitions
    Class Cat implements Animal {
        public function makeSound(){
            echo "Meow";
        }
    }
    class Dog implements Animal {
        public function makeSound() {
          echo " Bark ";
        }
      }
      
      class Mouse implements Animal {
        public function makeSound() {
          echo " Squeak ";
        }
      }

      //create a list of animals

      // Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
     ?>
</body>

</html>