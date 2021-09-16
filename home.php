   <section class="mt-4">
      <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-8 card">
                <h4 class="pt-4"> Covid 19 Pre Symptoms Diagnosis</h4>
                <hr class="my-1" />

                <div class="main p-4">
                <form action="index.php?page=result" method="POST">
                    <div class="form-group">
                    <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" placeholder="Enter Full name" class="form-control"/>
                    </div>

                    <div class="form-group">
                    <input type="text" placeholder="Enter Your age" name="age" class="form-control"/>
                    </div>
                

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    <label>
                        <input type="radio" name="gender" value="male" /> Male
                    </label>

                    <label>
                        <input type="radio" name="gender" value="female" /> Female
                    </label>
                    </div>




                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you Have Fever ?
                    <label>
                       <input type="radio" name="fever" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="fever" value="no" /> NO
                    </label>
                    </div>


                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do your Have Dry Cought ?
                    <label>
                       <input type="radio" name="cought" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="cought" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you Expirance Tiredness ?
                    <label>
                       <input type="radio" name="tireness" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="tireness" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you Expirance Aches and Pains ?
                    <label>
                       <input type="radio" name="aches" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="aches" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have Sore Throat ?
                    <label>
                       <input type="radio" name="sore" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="sore" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have Diarrhoea ?
                    <label>
                       <input type="radio" name="diarrhoea" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="diarrhoea" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have Conjunctivitis?
                    <label>
                       <input type="radio" name="conjunctivitis" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="conjunctivitis" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have Headache ?
                    <label>
                       <input type="radio" name="headache" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="headache" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have Loss of Taste or Smell ?
                    <label>
                       <input type="radio" name="smell" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="smell" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have a Rash on Skin or Discolouration of Fingers or Toes ?
                    <label>
                       <input type="radio" name="rash" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="rash" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have Difficulty Breathing or Shortness of Breath ?
                    <label>
                       <input type="radio" name="breathing" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="breathing" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have a Chest Pain or Pressure ?
                    <label>
                       <input type="radio" name="chest" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="chest" value="no" /> NO
                    </label>
                    </div>

                    <div class="form-group p-2" style="border:1px solid grey; border-radius:19px;">
                    Do you have a Loss of Speech or Movement?
                    <label>
                       <input type="radio" name="loss" value="yes" /> YES 
                    </label>

                    <label>
                        <input type="radio" name="loss" value="no" /> NO
                    </label>
                    </div>  

                    <div style="width:100%">
                        <button name="test" class="btn btn-primary" style="border-radius:19px; width:100%">Run Test</button>
                    </div>  
                </form>
                
                </div>

            </div>
        </div>
      </div>
   </section>

  

