 <!----------------------------------- Content------------->

                 
                   <div class="row">
                       <div class="col-md-12">
                           <center><img src="<?php echo base_url(); ?>pic/dbpic.png"></center>
                       </div>
                   </div><br>
                   <div class="row" >
                     <div class="col-md-2" ></div>

                       <div class="col-md-8"  >
                           <?php echo form_open('test/check_form');?>
                
    <div class="row">
        <br>
                <div class="form_bg">
            <form>
                 <h2 class="text-center">Sign Up </h2>
                <br/>
                <div class="form-group">
                <label for="" class="control-label">Username</label>
                    <input type="text" name="username" class="form-control" id="userid" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Security Question</label>
                    <input type="text" name="secq" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Answer To Security Question</label>
                    <input type="text" name="seca" class="form-control" id="" placeholder="">
                </div>
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" id="login">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="btn btn-default " href="<?php echo base_url(); ?>home">Cancel</a>

                </div>
                <br>
            </form>
        </div>
    </div>

        <?php    form_close(); ?>
                       </div>
                       
                       <div class="col-md-2" "></div>
                   </div>
                   <br>
                   
    <div class="push"></div>
    
<!----------------------------------- content------------->