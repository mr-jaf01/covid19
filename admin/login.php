<?php 
if(isset($_SESSION['adminuser'])){
    header('location:index.php?page=dashboard');
}
?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p class="text-center font-weight-bold">Admin Login</p>
                <br>
                <form action="" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>

                <div class="form-group">
                    <button name="submit" class="btn btn-primary" style="border-radius:19px">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
         <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6">
                <?php 
                include('db/connect_db.php');
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $query_user = "SELECT * FROM admin WHERE adminUser='$username'";
                    $run = mysqli_query($conn,$query_user);
                    while($data = mysqli_fetch_assoc($run)){
                        $dbusername = $data['adminUser'];
                        $dbpassword = $data['adminPass'];
                        $adminname = $data['adminName'];
                    }
                    if(@$username == $dbusername){
                        if($password == $dbpassword){
                            ?>
                            <p class="alert alert-success">Login Successfully Redirecting...</p>
                            <?php
                            $_SESSION['adminuser'] = $dbusername;
                            $_SESSION['adminname'] = $adminname;
                            header('Refresh:3, url=index.php?page=dashboard');

                        }else{
                            ?>
                        <p class="alert alert-danger">Incorrect Password</p>
                        <?php
                        }
                    }else{
                        ?>
                        <p class="alert alert-danger">Incorrect User name</p>
                        <?php
                    }

                }
                ?>
        </div>
     </div>
</div>
</section>