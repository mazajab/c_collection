 <!----------------------------------- Content------------->

                 
                   <div class="row">
                       <div class="col-md-12">
                           <center><img src="<?php echo base_url(); ?>pic/dbpic.png"></center>
                       </div>
                   </div><br>
                   <div class="row" >
                     <div class="col-md-2" ></div>

                       <div class="col-md-8"  >
                           <?php echo form_open('home/');?>
                
    <div class="row">
        <br>
                <div class="form_bg">
            <form>
                 <h2 class="text-center">Login </h2>
                <br/>
                <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" name="username" class="form-control" id="userid" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="">
                </div>
                <p><a href="<?php echo base_url(); ?>home/restore"> Forgot Your Password?</a></p>
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" id="login">Login</button>
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