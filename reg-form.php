<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>

    <?php
      $fname ="";
      $fnameEr="";
      $lname="";
      $lnameEr="";
      $gender="";
      $genderEr="";
      $bdate="";
      $bdateEr="";
      $reg="";
      $regEr="";
      $p="";
      $pEr="";
      $pp="";
      $ppEr="";
      $c="";
      $cEr="";
      $m="";
      $mEr="";
      $userName="";
      $userNameEr="";
      $Password="";
      $PasswordEr="";
    ?>
     <?php 
    if($_SERVER['REQUEST_METHOD'] ==="POST") {
    echo "<br>";
    
    if(!empty($_POST['fname'])){$fname= $_POST['fname'];
    }
    else{
        $fnameEr= "  empty";
    }
    echo"<br>";
   // echo input($_POST['lname']);
    if(!empty($_POST['lname'])){$lname=$_POST['lname'];
    }
    else{
        $lnameEr= "  empty";
    }
    echo"<br>";

    if(!empty($_POST['gender'])){ $gender=$_POST['gender'];
    }
    else{
        $genderEr= "  empty";
        
    }
    if(!empty($_POST['dbate'])){ $bdate=$_POST['dbate'];
    }
    else{
        $bdateEr= "  empty";
    }

    if(!empty($_POST['reg'])){ $reg=$_POST['reg'];
    }
    else{
        $regEr= "  empty";
        
    }
    if(!empty($_POST['p'])){ $p=$_POST['p'];
    }
    else{
        $pEr= "  empty";
        
    }
    if(!empty($_POST['pp'])){ $pp=$_POST['pp'];
    }
    else{
        $ppEr= "  empty";
        
    }
    if(!empty($_POST['c'])){ $c=$_POST['c'];
    }
    else{
        $cEr= "  empty";
        
    }
    if(!empty($_POST['m'])){ $m=$_POST['m'];
    }
    else{
        $mEr= "  empty";
        
    }
    if(!empty($_POST['userName'])){ $userName=$_POST['userName'];
    }
    else{
        $userNameEr= "  empty";
        
    }
    if(!empty($_POST['Password'])){ $Password=$_POST['Password'];
    }
    else{
        $PasswordEr= "  empty";
        
    }
    
    
    
    }
    

    function input($val) {
        $val= trim($val);
        $val = stripslashes($val);
        $val = htmlspecialchars($val);

        return $val;
         }
         ?>    

    <fieldset>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

        <h3>Basic information</h3>
        <label for="fname">Enter your First-tname</label>
        <input type="text" id="fname" name="fname" value="<?php echo $fname;?>"> 
        <span style=color:red><?php echo $fnameEr;?></span>

        <label for="lname">Enter your Last-tname</label>
        <input type="text" id="lname" name="lname" value ="<?php echo $lname;?>">
        <span style=color:red><?php echo $lnameEr;?></span>
        <br>
        <h4>Gender</h4>
        
        <input type="radio" value="male" name="gender">
        <label for="male">male</label>

        
        <input type="radio" value="female" name="gender">
        <label for="female">female</label>
        <span style=color:red><?php echo $genderEr;?></span>
        <br>
        <br>

        <label for="bdate">Enter your BOD</label>
        <input type="text" id="bdate" name="bdate"value ="<?php echo $bdate;?>">
        <span style=color:red><?php echo $bdateEr;?></span>
        <br>
        <br>
        <input type="checkbox" id="islam" value="islam" name="reg">
        <label for="islam">Islam</label>
        
        <input type="checkbox" id="hinduism"value="hinduish" name="reg">
        <label for="hinduism">Hinduism</label>

        <input type="checkbox" id="christianity"value="christianity" name="reg">
        <label for="christianity">Christianity</label>
        <span style=color:red><?php echo $regEr;?></span>
        <br>
        <br>
        </fieldset>
        <fieldset>
        <h3>Contact Information</h3>
        <br>
        <label for="p">Enter your address</label>
        <input type="text" id="p" name="p" value="<?php echo $p;?>">
        <span style=color:red><?php echo $pEr;?></span>
        
        <br>
        <br>

        <label for="pp">Enter your permanent address</label>
        <input type="text" id="pp" name="pp" value="<?php echo $pp;?>">
        <span style=color:red><?php echo $ppEr;?></span>
        <br><br>

        <label for="c">Phone</label>
        <input type="text" id="c" name="c"value="<?php echo $c?>">
        <span style=color:red><?php echo $cEr;?></span>
        <br>
        <br>
        <label for="m">Mail</label>
        <input type="text" id="m" name="m"value="<?php echo $m?>">
        <span style=color:red><?php echo $mEr;?></span>
        <br><br>
        <a class="link-button" target="_blank" href="www.facebook.com">facebook</a>
        <br>
        <br>
        </fieldset>
        <fieldset>
        <h3>Account information</h3>
        <label for="userName">User Name :</label>
        <input type="text" id="userName" name="userName"value="<?php echo $userName?>">
        <span style="color: red;"><?php echo $userNameEr;  ?></span>
        <br>
        <label for="Password">Password :</label>
        <input type="password" id="Password" name="Password"value="<?php echo $Password?>">
        <span style="color: red;"><?php echo $PasswordEr;  ?></span>
        <br>
        </fieldset>
        <button id="sb">Submit</button> 

    </form>
    <?php
     echo  input($fname) ."<br>";
     echo input($lname). "<br>";
     echo  input($gender) ."<br>";
     echo input($bdate). "<br>";
     echo  input($reg) ."<br>";
     echo input($p). "<br>";
     echo  input($pp) ."<br>";
     echo input($c). "<br>";
     ?>

    
</body>
</html>