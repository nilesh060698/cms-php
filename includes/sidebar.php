     <div class="col-md-4">

         
    
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input  type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                        </form>
                    <!-- /.input-group -->
                </div>
         
         
         
         
         
                <!-- login -->
                <div class="well">
                    <h4>Login </h4>
                    <form action="includes/login.php" method="post">
                    <div class="form-group">
                        <input  type="text" name="username" class="form-control" placeholder="Enter Username">
                        
                        </div>
                        
                         <div class="input-group">
                         <input  type="text" name="password" class="form-control" placeholder="Enter Password">
                             <span class="input-group-btn">
                             <button  name="submit" class="btn btn-primary" type="submit">
                               Submit
                        </button>
                             </span>
                             
                             
                            </div>  
                      
                        </form>
                             
                     
                    </div>
                        
                        
                        
                        
                    <!-- /.input-group -->
              

         
         
         
         
         

                <!-- Blog Categories Well -->
                <div class="well">
                    
                      <?php
                    
                    $query="SELECT *FROM categories";
                    $my_sidebarquery=mysqli_query($conn,$query);
                    
                    
                    
                    
                    ?>
                        
               
                        
                    
                
                 
                    
                    
                    
                    
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
<?php

while($row=mysqli_fetch_assoc($my_sidebarquery))  {
$cat_title=$row['cat_title'];
echo   "<li>  <a href='#'>{$cat_title}</a></li> " ;  

}      
?>            
                                
                              
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                               
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php
         include "widget.php";
         ?>

            </div>