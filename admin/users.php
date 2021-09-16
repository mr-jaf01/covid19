<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>Dashboard</h4>
                <hr class="my-1" />


                <div>
                    <p><a class="font-weight-bold" href="index.php?page=users">Registered User</a> | <a class="font-weight-bold" href="#">About Us</a></p>
                </div>
                <hr class="my-1"/>

                <div style="height:400px; overflow:auto">
                <table class="table table-bordered">
                
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Phone Number</th>
                    <th>Diagnosis Result</th>
                    <th>Action</th>
                </tr>

                <?php 
                include("db/connect_db.php");
                $fetchuser = "SELECT * FROM users";
                $run = mysqli_query($conn,$fetchuser);
                while($userdata = mysqli_fetch_assoc($run)){
                    ?>
                    
                    <tr>
                    
                    <td><?php echo $userdata['id'] ?></td>
                    <td><?php echo $userdata['name'] ?></td>
                    <td><?php echo $userdata['email'] ?></td>
                    <td><?php echo $userdata['phone'] ?></td>
                    <td><?php echo $userdata['result'] ?></td>
                    <?php 
                    if($userdata['result'] == 'You are at risk'){
                        ?>
                        <td><a style="" href="https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=LEI5Na0RX4QyLxo36kQy8Yqn7RyVLh08efBVWSrflcf7gEnJAz7PuPqti3rQ&from=Covid 19 Expert System&to=<?php echo $userdata['phone'];?>&body=Dear <?php echo $userdata['name']?>
                        Your are At Risk For Contacting Covid 19.
                        Kindly Visit any Covid 19 testing Center for complete test procedure,
                        OR Dial 080222233322 for NCDC attention." id="msg" class="btn btn-info btn-sm">Send Message</a></td>
                        </tr>
                        <?php
                    }elseif($userdata['result'] == 'You are not at risk'){
                        ?>
                        <td><a style="" href="https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=LEI5Na0RX4QyLxo36kQy8Yqn7RyVLh08efBVWSrflcf7gEnJAz7PuPqti3rQ&from=Covid 19 Expert System&to=<?php echo $userdata['phone'];?>&body=Dear <?php echo $userdata['name']?>Congratulation! your are not at Risk!
                         Dial 080222233322 for NCDC attention if you Experience any Most common Symptoms." id="msg" class="btn btn-info btn-sm">Send Message</a></td>
                        </tr>
                        <?php
                    }
                    
                    ?>
                      
                    <?php
                }
                
                ?>

                </table>
                
                
                </div>
            </div>
        </div>
    </div>
</section>