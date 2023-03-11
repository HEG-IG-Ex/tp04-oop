<?php
    class Calculatrice
    {
        // Properties
        public $nb1;
        public $nb2;
        public $operator="";

        function __construct($nb1, $nb2)
        {
            $this->nb1 = $nb1;
            $this->nb2 = $nb2;
        }

        // Methods
        function add()
        {
            return $this->nb1 + $this->nb2;
        }
        function substract()
        {
            return $this->nb1 - $this->nb2;
        }

        function multiply()
        {
            return $this->nb1 * $this->nb2;
        }

        function divide()
        {
            return $this->nb1 / $this->nb2;
        }
    }

    // Strawberry is inherited from Fruit
    class CalculatriceAvancee extends Calculatrice
    {
        function modulo()
        {
            return $this->nb1 % $this->nb2;
        }

        function power()
        {
            return pow($this->nb1,$this->nb2);
        }

        public static function brand() {
            echo "Texas Instrument";
        }
    }    


    // define variables and set to empty values
    $nb1 = $nb2 = 0;

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nb1 = test_input($_POST["nb1"]);
        $nb2 = test_input($_POST["nb2"]);

        $calc = new Calculatrice($nb1, $nb2);
        $calcAdvanced = new CalculatriceAvancee($nb1, $nb2);

        if (isset($_POST['+'])) {
            // ...
          } else if (isset($_POST['-'])) {
            // ...
          } else {
            // ...
          }
    }
?>