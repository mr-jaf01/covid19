<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p class="text-center">Sign up</p>
                <br>
                <form action="" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter Full Name" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Enter UserName" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Enter Email" />
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number" />
                </div>

                <div class="form-group">
                    <button name="submit" class="btn btn-primary" style="border-radius:19px">Submit</button>
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
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];

                    $save = "INSERT INTO users(name,username,password,email,phone,result) 
                    VALUES('$name','$username','$password','$email','$phone', '')";
                    $save_query = mysqli_query($conn,$save);
                    if($save_query){
                        ?>
                        <p class="alert alert-success">Record Save Successfully</p>
                        <?php
                    }else{
                        ?>
                        <p class="alert alert-danger">Unable to Save Record</p>
                        <?php
                    }
                }
                ?>
        </div>
     </div>
</div>
</section>