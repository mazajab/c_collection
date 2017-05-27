
 <!----------------------------------- Content------------->

 <div class="container-fluid">
      <div class="row">
                       <div class="col-md-12">
                           <center><img src="<?php echo base_url(); ?>pic/dbpic.png"></center>
                       </div>
                   </div><br>
                   <div class="row">
                       <div class="col-md-3 cl-height r" style="background-color: white; color:black;font-size: large; border-right: 1px solid black;">
                           <br><center> My Dashboard </center><br>
                           <ul style="list-style: none;">
                               <li><a class="btn btn-default btn-block "  href="<?php echo base_url(); ?>home/accsetting"><span class="glyphicon glyphicon-wrench pull-left" aria-hidden="true" ></span>  Account Setting</a></li>
                               <li><a class="btn btn-default btn-block active" href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-folder-open pull-left" aria-hidden="true"></span>Database Setting</a></li>
                               <li><a class="btn btn-default btn-block " href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-cog pull-left" aria-hidden="true"></span>Table Setting</a></li>
                               <li><a class="btn btn-default btn-block " href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-list pull-left" aria-hidden="true"></span>Show Table</a></li>
                           </ul>
                 
                    </div> 
                       <div class="col-md-9 cl-height" style="background-color: lightgray;overflow: auto">
<?php echo form_open('home/?????');?>
                
    <div class="row">
        <br>
        <button type="button" class="btn btn-default btn-sm pull-right">
            <span class="glyphicon glyphicon-log-out"></span><a href="home/signout"> Log out</a>
        </button>
        <br><br>
                <div class="form_bg">
            <form>
                <h2 class="text-center">Database Setting </h2>
                <br/>
                <div class="form-group">
                <label for="" class="control-label">Host</label>
                    <input type="text" name="host" class="form-control" id="userid" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Database Name</label>
                    <input type="text" name="dbname" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">User</label>
                    <input type="text" name="dbusr" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group">
                 <label for="" class="control-label">Password</label>
                    <input type="password" name="dbpass" class="form-control" id="" placeholder="">
                </div>
                
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" id="login">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="btn btn-default " href="<?php echo base_url(); ?>home/dash">Cancel</a>

                </div>
                <br>
            </form>
        </div>
    </div>

        <?php    form_close(); ?>
                       </div>
                   </div>                   
 </div>
    
<!----------------------------------- content------------->

