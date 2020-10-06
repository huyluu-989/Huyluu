<!-- page render form info -->
<?php
    $name=$_COOKIE['name'];
    $email=$_COOKIE['email'];
    $class=$_COOKIE['class'];
    $university=$_COOKIE['university'];
    $hobby=$_COOKIE['hobby'];
    $value=array('name'=>$name,'email'=>$email,'class'=>$class,'university'=>$university,'hobby'=>$hobby)
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include('templates/header.php');
    ?>
    <h4 class="center grey-text">Thanks for submit. Your Infomation:</h4>
    <div class="container blue-text">
        <div class="content center ">
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center" >
                        <h6>Your name: <?php echo $value['name'];?></h6>
                        <h6>Your email: <?php echo $value['email'];?></h6>
                        <h6>Your class: <?php echo $value['class'];?></h6>
                        <h6>Your university: <?php echo $value['university'];?></h6>
                        <h6>Your hobby: <?php echo $value['hobby'];?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include('templates/footer.php');
    ?>
</html>