 <?php    
   if($_SERVER['REQUEST_METHOD']== 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $rollNo = $_POST['rollNo'];

        echo "<h1>Form Submited Successfully</h1>";
        echo " Name : $name <br>";
        echo " Email : $email <br>";
        echo " Password : $password <br>";
        echo "Mobile : $mobile <br>";
        echo "rollNo : $rollNo <br>";

   }
 
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
      <form   method="POST"   class="reg_form">
 <div>

 <input type="text" name="name" required placeholder="Your Name"  >
 </div>
  <div>
  <input type="email" name="email" required 
  placeholder="Your Email" >
  </div>
    <div>
    <input type="password" name="password" required 
    placeholder="Your Password" >
    </div>
    <div>
    <input type="text" name="mobile" required 
    placeholder="Your Mobile Number" >
    </div>
    <div>
    <input type="text" name="rollNo" required 
    placeholder="Your Roll No" >
    </div>
    <button type="submit">Submit</button>
      </form>
</body>
</html>