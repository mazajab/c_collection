
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
                 <h4 class="text-center"><p>Please Fill in The Following To Help Restore Your Account:</p> </h4>
                <div class="form-group">
                <label for="" class="control-label">Username</label>
                    <input type="text" name="username" class="form-control" id="userid" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label"  ><?php echo "the question here?"; ?></label>
                    <input type="text" name="seca" class="form-control" id="" placeholder="">
                </div>
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" id="">submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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