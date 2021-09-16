<section>

<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 card p-5">
                
  <?php 
  include('db/connect_db.php');
   if(isset($_POST['test'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $fever = $_POST['fever'];
    $cought = $_POST['cought'];
    $tireness = $_POST['tireness'];
    $aches = $_POST['aches'];
    $sore = $_POST['sore'];
    $diarr = $_POST['diarrhoea'];
    $conjunc = $_POST['conjunctivitis'];
    $headache = $_POST['headache'];
    $smell = $_POST['smell'];
    $rash = $_POST['rash'];
    $breahting = $_POST['breathing'];
    $chest = $_POST['chest'];
    $loss = $_POST['loss'];

    if($loss == "yes" && $chest == "yes" && $breahting == "yes" && $fever == "yes" && $cought == "yes" && $tireness == "yes"){
       ?>
      <p class=" text-center alert alert-danger"><i class="fas fa-5x fa-warning"></i></p>
      <p class="alert alert-danger ">
        Dear <?php echo $name; ?><br>
        Your are At Risk For Contacting Covid 19.
        Kindly Visit any Covid 19 testing Center for complete test procedure,
        OR Dial 080222233322 for NCDC attention.
      </p>
       <?php
       $saveoutput = "UPDATE `users` SET `result` = 'You are at risk' WHERE id = '".$_SESSION['userid']."'";
       mysqli_query($conn,$saveoutput);
    }elseif($aches == "yes"  && $sore == "yes" && $diarr == "yes" && $conjunc == "yes" && $headache == "yes" && $smell == "yes" && $rash == "yes"){
        ?>
      <p class="alert alert-info text-center"><i class="fas fa-5x fa-info"></i></p>
      <p class="alert alert-info">
        Dear <?php echo $name; ?><br>
        Congratulation! your are not at Risk!
        Dial 080222233322 for NCDC attention if your Experience any Most common Symptoms.
      </p>
       <?php
       $saveoutput = "UPDATE `users` SET `result` = 'You are not at risk' WHERE id = '".$_SESSION['userid']."'";
       mysqli_query($conn,$saveoutput);
    }elseif($fever == "yes" && $cought == "yes" && $tireness == "yes"){
        ?>
        <p class=" text-center alert alert-danger"><i class="fas fa-5x fa-warning"></i></p>
        <p class="alert alert-danger">
        Dear <?php echo $name; ?><br>
        Your are At Risk For Contacting Covid 19.
        Kindly Visit any Covid 19 testing Center for complete test procedure,
        OR Dial 080222233322 for NCDC attention.
        </p>
         <?php
         $saveoutput = "UPDATE `users` SET `result` = 'You are at risk' WHERE id = '".$_SESSION['userid']."'";
         mysqli_query($conn,$saveoutput);
    }else{
        ?>
        <p class="alert alert-info text-center"><i class="fas fa-5x fa-info"></i></p>
        <p class="alert alert-info">
        Dear <?php echo $name; ?><br>
        Your are At Risk For Contacting Covid 19.
        Kindly Visit any Covid 19 testing Center for complete test procedure,
        OR Dial 080222233322 for NCDC attention.
        </p>
         <?php
         $saveoutput = "UPDATE `users` SET `result` = 'You are  at risk' WHERE id = '".$_SESSION['userid']."'";
         mysqli_query($conn,$saveoutput);
    }
      
    










}?>


                </div>
            </div>
       </div>
  
</section>