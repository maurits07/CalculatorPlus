
<?php
    $Gender = '';
    $Firstname = '';
    $Lastname = '';
    $Email = '';
    $day = '';
    $month = '';
    $year = '';
    $Url = '';
    $result = '';
    
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset ($_POST['submit'])) {
    
     
    
         $Firstname  = $_POST['FirstName'];
         $Lastname  = $_POST['Lastname'];
         $Email  = $_POST['Email'];
         $day = $_POST['birthday'];
         $month = $_POST['Birthmonth'];
         $year = $_POST['BirthYear'];
         $Url  = $_POST['url'];
         $Gender = $_POST['Gender'];
         
         
         if ($Gender == "Male") {
             $result = "hello Mister $Firstname $Lastname <br> Email: $Email <br> Birthday: $day/$month/$year <br>Favorite Website: <a href='$Url' target='_blank'>$Url</a>";
            } elseif ($Gender == "Female") {
                $result = "hello Miss $Firstname $Lastname <br> Email: $Email <br> Birthday: $day/$month/$year <br>Favorite Website: <a href='$Url' target='_blank'>$Url</a>";
            } else {
                $result = "hello  $Firstname $Lastname <br> Email: $Email <br> Birthday: $day/$month/$year <br>Favorite Website: <a href='$Url' target='_blank'>$Url</a>";
            }
        }
    }    
        
        
        
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title> Contact </title>
        <meta charset="UTF-8">
        <meta name="author" content="Maurits Gerrits">
        <title>Document</title>
        <link rel="stylesheet" href="calculator.css">
    </head>
    <header> 
        <h1>Contact Page </h1>
        <ul>
      <div class="direct">
    <a href="index.php">Home</a>
    <a href="Contact.php">Services</a>
    <a href="project.html">Contact</a>
  </ul>
    </header>
<body class="contactPage">
    
</div>

<div class="form"> 
    <form action="" method="post">
    <div class="Url" name = "textarea" readonly cols="30" rows="10"><?php echo $result; ?></div>
    <br><br>
    <label>select you gender</label>  
        <select name="Gender" id="Gender" aria-placeholder="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
       </select>
       <br><br>
       <label>fill in your FirstName</label> 
       <input type="text" name="FirstName"required placeholder="FirstName">
       <br> <br>
       <label>fill in your Lastname</label> 
       <input type="text" name="Lastname" required placeholder="Lastname">
       <br> <br>
       <label>fill in your Email</label> 
       <input type="Email" name="Email" required placeholder="Email">
      <label> fill in your birthday</label> 
       <input type="number" name="birthday" required placeholder="Fill in your birthday">
       <input type="number" name="Birthmonth" required placeholder="Fill in your Birthmonth">
       <input type="number" name="BirthYear" required placeholder="Fill in your BirthYear">
       <label>Your favorite website</label> 
       <input type="url" name="url" required placeholder="Fill in your Favorite websites url">
       <br>
       <br>
       <input type="submit" name="submit">
       <input type="reset"  value="reset">
       
       
      
    </form>
</div>
</body>
</html>