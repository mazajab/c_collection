
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
                               <li><a class="btn btn-default btn-block " href="<?php echo base_url(); ?>home/dbsetting"><span class="glyphicon glyphicon-folder-open pull-left" aria-hidden="true"></span>Database Setting</a></li>
                               <li><a class="btn btn-default btn-block " href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-cog pull-left" aria-hidden="true"></span>Table Setting</a></li>
                               <li><a class="btn btn-default btn-block " href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-list pull-left" aria-hidden="true"></span>Show Table</a></li>
                           </ul>
                 
                    </div> 
                       <div class="col-md-9 cl-height" style="background-color: lightgray;overflow: auto">
                <br>
        <button type="button" class="btn btn-default btn-sm pull-right">
            <span class="glyphicon glyphicon-log-out"></span><a href="home/signout"> Log out</a>
        </button>
        <br><br>
                    </div>
                   </div>                   
 </div>
    
<!----------------------------------- content------------->