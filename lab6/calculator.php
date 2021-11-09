<?php 
session_start();
error_reporting(0);

interface functions {
  public function operate();
  public function getEquation();
}

abstract class Operation implements functions{
  protected $operand_1;
  protected $operand_2;
  public function __construct($o1, $o2) {
    // Make sure we're working with numbers...
    if (!is_numeric($o1) || !is_numeric($o2)) {
      throw new Exception('<span class="error">Non-numeric operand / not enough inputs.</span>');
    }
    
    // Assign passed values to member variables
    $this->operand_1 = $o1;
    $this->operand_2 = $o2;
  }
  // public abstract function operate();
  // public abstract function getEquation(); 
}

class Operation_1 {
  protected $operand;
  public function __construct($o1) {
    if (!is_numeric($o1)) {
      throw new Exception('<span class="error">Non-numeric operand.</span>');
    }

    $this->operand = $o1;
  }
}



// Addition subclass inherits from Operation
class Addition extends Operation {
  public function operate() {
    return $this->operand_1 + $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Subtraction extends Operation {
  public function operate() {
    return $this->operand_1 - $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Multiplication extends Operation {
  public function operate() {
    return $this->operand_1 * $this->operand_2;
  }

  public function getEquation() {
    return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Division extends Operation {
  public function operate() {
    return $this->operand_1 / $this->operand_2;
  }

  public function getEquation() {
    return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class sqrt extends Operation_1 implements functions{
  public function operate() {
    return sqrt($this->operand); 
  }
  
  public function getEquation () {
    return 'sqrt(' . $this->operand . ') = ' . $this->operate();
  }
}

class square extends Operation_1 implements functions{
  public function operate() {
    return ($this->operand)**2;
  }

  public function getEquation() {
    return $this->operand . '^2 = ' . $this->operate();
  }
}

class power extends Operation {
  public function operate() {
    return ($this->operand_1)**($this->operand_2);
  }

  public function getEquation() {
    return $this->operand_1 . '^' . $this->operand_2 . ' = ' . $this->operate(); 
  }
}

class log10 extends Operation_1 implements functions{
  public function operate() {
    return log10($this->operand);
  }

  public function getEquation() {
    return 'log10(' . $this->operand . ') = ' . $this->operate();
  }
}

class ln extends Operation_1 implements functions{
  public function operate() {
    return log($this->operand);
  }

  public function getEquation() {
    return 'ln(' . $this->operand . ') = ' . $this->operate();
  }
}

class tenx extends Operation_1 implements functions{
  public function operate() {
    return 10**($this->operand);
  }

  public function getEquation() {
    return '10^' . $this->operand . ' = ' . $this->operate();
  }
}

class ex extends Operation_1 implements functions{
  public function operate() {
    return exp($this->operand);
  }

  public function getEquation() {
    return 'e^' . $this->operand . ' = ' . $this->operate();
  }
}

class sin extends Operation_1 implements functions{
  public function operate() {
    return sin($this->operand);
  }

  public function getEquation() {
    return 'sin(' . $this->operand . ') = ' . $this->operate();
  }
}

class cos extends Operation_1 implements functions{
  public function operate() {
    return cos($this->operand);
  }

  public function getEquation() {
    return 'cos(' . $this->operand . ') = ' . $this->operate();
  }
}

class tan extends Operation_1 implements functions{
  public function operate() {
    return cos($this->operand);
  }

  public function getEquation() {
    return 'tan(' . $this->operand . ') = ' . $this->operate();
  }
}


// Add subclasses for Subtraction, Multiplication and Division here


// Some debugs - uncomment these to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";


// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();



// Instantiate an object for each operation based on the values returned on the form
// For example, check to make sure that $_POST is set and then check its value and 
// instantiate its object
// 
// The Add is done below.  Go ahead and finish the remaining functions.  
// Then tell me if there is a way to do this without the ifs
// We might cover such a way on Tuesday...

  try {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
    }


// Put code for subtraction, multiplication, and division here
    else if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
      $op = new Subtraction($o1, $o2);
    }
    else if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
      $op = new Multiplication($o1, $o2);
    }

    else if (isset($_POST['divi']) && $_POST['divi'] == "Divide") {
      $op = new Division($o1, $o2);
    }

    else if (isset($_POST['sqrt']) && $_POST['sqrt'] == "Square Root") {
      
      $op = new sqrt($o1);
    }

    else if (isset($_POST['square']) && $_POST['square'] == "Square") {
      $op = new square($o1);
    }

    else if (isset($_POST['x^y']) && $_POST['x^y'] == "x^y") {
      $op = new power($o1, $o2);
    }

    else if (isset($_POST['log10']) && $_POST['log10'] == "Log") {
      $op = new log10($o1);
    }

    else if (isset($_POST['ln']) && $_POST['ln'] == "Natural Log") {
      $op = new ln($o1);
    }

    else if (isset($_POST['10^x']) && $_POST['10^x'] == "10^x") {
      $op = new tenx($o1);
    }

    else if (isset($_POST['e^x']) && $_POST['e^x'] == "e^x") {
      $op = new ex($o1);
    }

    else if (isset($_POST['sin']) && $_POST['sin'] == "Sin(x)") {
      $op = new sin($o1);
    }

    else if (isset($_POST['cos']) && $_POST['cos'] == "Cos(x)") {
      $op = new cos($o1);
    }

    else if (isset($_POST['tan']) && $_POST['tan'] == "Tan(x)") {
      $op = new tan($o1);
    }

    $_SESSION["op"]=$op;

  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
    $_SESSION["err"]=$err;
  }

?>

<!doctype html>
<html>
<head>
<title>PHP Calculator</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>



  <div id="page-wrap">
    <h1>Calculator</h1>


    <form method="post" action="calculator.php" id="form" onsubmit="remember(this);">

      <button type="button" id="one" onclick="showOne(this.parentElement);" class="active button button--pandora"><span class="sel">One variable functions</span></button>
      <button type="button" id="two" onclick="showTwo(this.parentElement);" class="inactive button button--pandora"><span class="sel">Two variable functions</span></button>
      <hr/>
      <label for="name1 name2" class="label">Input:</label>
      <input type="text" name="op1" id="name1" value="" class="show"/>
      <input type="text" name="op2" id="name2" value="" class="hide"/><br/>
      
      <p id="result" class="eqn" name="result">
        <span class="label">Result: </span>
        <?php 
          $op = $_SESSION['op'];
          $er[] = $_SESSION['err'];
          if (isset($op)) {
            try {
              echo $op->getEquation();
              // echo("does this work");
            }
            catch (Exception $e) { 
              if (isset($er)){
                echo ("test");
              }
              $err[] = $e->getMessage();
            }
          }

          foreach($err as $error) {
              echo $error . "\n";
          } 
        ?>
      </p>
      
      <!-- Only one of these will be set with their respective value at a time -->
      <span id="ones" class="">
        <input class="bu1" type="submit" name="sqrt" value="Square Root" /> 
        <input class="bu1"  type="submit" name="square" value="Square" />
        <input class="bu1"  type="submit" name="log10" value="Log" />
        <input class="bu1"  type="submit" name="ln" value="Natural Log" />
        <input class="bu1"  type="submit" name="10^x" value="10^x" />
        <input class="bu1"  type="submit" name="e^x" value="e^x" />
        <input class="bu1"  type="submit" name="sin" value="Sin(x)" />
        <input class="bu1"  type="submit" name="cos" value="Cos(x)" />
        <input class="bu1"  type="submit" name="tan" value="Tan(x)" />
      </span>
      <span id="twos" class="">
        <input class="bu2"  type="submit" name="add" value="Add" />        
        <input class="bu2"  type="submit" name="sub" value="Subtract" />  
        <input class="bu2"  type="submit" name="mult" value="Multiply" />  
        <input class="bu2"  type="submit" name="divi" value="Divide" /> 
        <input class="bu2"  type="submit" name="x^y" value="x^y" />
      </span>
    </form>
  </div>
  <script src="main.js" defer></script>
</body>
</html>

