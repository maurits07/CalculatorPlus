<!DOCTYPE html>
<html lang="en">
<head>

<title> calculator </title>
    <meta charset="UTF-8">
    <meta name="author" content="Maurits Gerrits">
    <title>calculator plus plus</title> 
    <link rel="stylesheet" href="calculator.css">
</head>

<header>
 
<div>
    <h1> calculator</h1>
    </div>
    <div class="direct">
      <ul>
      <div class="direct">
    <a href="index.php">Home</a>
    <a href="Contact.php">Services</a>
    <a href="project.html">Contact</a>
  </ul>
</div >
    
     
    </div>
</header>
<body>
    <div class="vak">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>first number</label> 
        <input type="number" name="nummer1" required>
        <br>  <br>
         <label>operator</label> 
      <select name="oparator" id="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
        <option value="sqrt">sqrt</option>
        <option value="CM">cm -> Inch</option>
        <option value="inch">Inch -> CM</option>
        <option value="POW">POW</option>
        <option value="Euro">Euro -> DKK</option>
        <option value="DKK">DDK -> Euro</option>

      </select>
      <br> <br>
         <label> second number</label> 
      <input type="number" name="nummer2" >
      <br> <br> <br>
      <button type="submit"> calculate </button>
      <br> <br>
      
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nummer1 = filter_input(INPUT_POST, "nummer1", FILTER_SANITIZE_NUMBER_FLOAT);
          $nummer2 = filter_input(INPUT_POST, "nummer2", FILTER_SANITIZE_NUMBER_FLOAT);
          $operator = htmlspecialchars($_POST["oparator"]); 

        
       
          if (!empty($nummer1) && !empty($operator)) {
            $value = 0;
            switch ($operator) {
              case "+":
                if (!empty($nummer2)) {
                  $value = $nummer1 + $nummer2;
                } else {
                  echo "<p class='error_empty'>Fill in all fields!</p>";
                }
                break;
              case "-":
                if (!empty($nummer2)) {
                  $value = $nummer1 - $nummer2;
                } else {
                  echo "<p class='error_empty'>Fill in all fields!</p>";
                }
                break;
              case "x":
                if (!empty($nummer2)) {
                  $value = $nummer1 * $nummer2;
                } else {
                  echo "<p class='error_empty'>Fill in all fields!</p>";
                }
                break;
              case "/":
                if ($nummer2 = 0 || $nummer1 = 0 )
                {
                   echo "<p class='error_empty'>Can not divide by 0 please try again</p>";

                }
                else if (!empty($nummer2)) {
                 $value = $nummer1 / $nummer2;
                } 
              
                else {
                  echo "<p class='error_empty'>fill in all fields</p>";
                }
                break;
                case "CM":
                  if (empty($nummer2)) {
                    $value = $nummer1 * 0.393700787;
                  } else {
                    echo "<p class='error_empty'>Fill in all the fields correctly!</p>";
                  }
                  break;
                  case "inch":
                    if (empty($nummer2)) {
                      $value = $nummer1 * 2.54;
                    } else {
                      echo "<p class='error_empty'>Fill in all the fields correctly!</p>";
                    }
                    break;
                    case "POW":
                      if (!empty($nummer2)) {
                        $value = POW($nummer1, $nummer2);
                      } else 
                        {
                          echo "<p class='error_empty'>Fill in all the fields correctly!</p>";
                          
                        }
                      break;
                      case "Euro":
                        if (empty($nummer2)) {
                          $value = $nummer1 * 1.47 ;
                        } else {
                          echo "<p class='error_empty'>Fill in all the fields correctly!</p>";
                        }
                        break;
                        case "DKK":
                          if (empty($nummer2)) {
                            $value = $nummer1 / 1.47 ;
                          } else {
                            echo "<p class='error_empty'>Fill in all the fields correctly!</p>";
                          }
                          break;
               case "sqrt":
                      $value = sqrt($nummer1); 
                      if ($nummer1 <0)
                      echo "<p class='error_empty'>please fill in a number above 0</p>";
                      break;
              default:
                    echo "<p class='error_empty'>error!</p>";

                  
                  

            }
            echo "<p class='results'><h1> Result =" .
            $value . "</p>";
          }
        }

          ?>
    </div>
    
   
    

</body>
<footer>
</footer>
</html> 