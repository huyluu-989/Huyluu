<!-- page to fill form -->
<?php

    $error=array('name'=>'','email'=>'','class'=>'','university'=>'','hobby'=>'');
    $value=array('name'=>'','email'=>'','class'=>'','university'=>'','hobby'=>'');
    if(isset($_POST['submit'])){
        
        if(empty($_POST['name'])){
            $error['name']= 'Name is required <br/>';
        }
        else {
            $name=$_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
                $error['name']= 'Name must be letters and spaces only!';
            }
            else {
                $value['name']=htmlspecialchars($_POST['name']);
            }
        }
        if(empty($_POST['email'])){
            $error['email'] ='Email is required <br/>';
        }
        else {
            $email=$_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error['email']= 'email must be a valid email address';
            }
            else {
                $value['email']=htmlspecialchars($_POST['email']);
            }
        }
        if(empty($_POST['class'])){
            $error['class']= 'Class is required <br/>';
        }
        else {
            $class=$_POST['class'];
            if(!preg_match('/^[a-zA-Z0-9\s]+$/',$class)){
                $error['class']= 'Class must be letters and spaces only!';
            }
            else {
                $value['class']=htmlspecialchars($_POST['class']);
            }
        }
        if(empty($_POST['university'])){
            $error['university']= 'University is required <br/>';
        }
        else {
            $university=$_POST['university'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$university)){
                $error['university']= 'University must be letters and spaces only!';
            }
            else {
                $value['university']=htmlspecialchars($_POST['university']);
            }
        }
        if(empty($_POST['hobby'])){
            $error['hobby']= 'Hobby is required <br/>';
        }
        else {
            $hobby=$_POST['hobby'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$hobby)){
                $error['hobby']= 'Hobby must be a comma separated list!';
            }
            else {
                $value['hobby']=htmlspecialchars($_POST['hobby']);
            }
        }
    }
    

    if ($value['name']!==""&&$value['email']!==""&&$value['class']!==""&&$value['university']!==""&&$value['hobby']!==""){
        setcookie('name',$value['name'],time()+30);
        setcookie('email',$value['email'],time()+30);
        setcookie('class',$value['class'],time()+30);
        setcookie('university',$value['university'],time()+30);
        setcookie('hobby',$value['hobby'],time()+30);
        header("LOCATION: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include('templates/header.php');
    ?>
    <section class="container grey-text">
        <h4 class="center">Fill your Info</h4>
        <form class="white" action="add.php" method="POST">
            <label>Your Name</label>
            <input type="text" name="name">
            <div class="red-text"><?php echo $error['name'];?></div>
            <label>Your Email</label>
            <input type="text" name="email">
            <div class="red-text"><?php echo $error['email'];?></div>
            <label>Your Class</label>
            <input type="text" name="class">
            <div class="red-text"><?php echo $error['class'];?></div>
            <label>Your University</label>
            <input type="text" name="university">
            <div class="red-text"><?php echo $error['university'];?></div>
            <label>Your Hobby</label>
            <input type="text" name="hobby">
            <div class="red-text"><?php echo $error['hobby'];?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php
        include('templates/footer.php');
    ?>
    

</html>