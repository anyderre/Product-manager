<!DOCTYPE html>
<html lang="en">
 <?php  include_once ('header.php');?>
<body>
      <?php  include_once ('nav.php');?>

   <div class="container">
                      
           <div class="panel panel-primary">
                                             
               <div class="panel-heading">
                <h2 class="panel-title"> Register Category</h2>
               </div>
               
               <div class="panel-body">
                   <form  class="form-horizontal" action="registerCategory.php" method="post" id="register_form">
                       
                        
                <div class="row">
                        
                    <div class="col-md-8"> 
                           <div class="form-group">
                               <label for="categoryName"> Category Name :</label>
                            <input type="text" placeholder="Enter a category Name" class ="form-control" name="categoryName" id="categoryName"
                            maxlength="50" minlength="2" 
                            required>
                        </div>                                                     
                        </div>
                 </div>
                 
                 
                 <div class="row"> 
                   <div class="col-md-8">          
                   <div class="form-group">
                               <label for="description">Description : </label>
                               <textarea class="form-control" id="description"
                                name="description"            placeholder="Catgory Description" rows="5" minlength="2" maxlength="100" required></textarea>
                           </div>   
                            
                        </div> 
                       </div>                                                      
                  
                       
                        
                        <div class="row">
                            <div class="col-md-8"></div>
                        <div class="col-md-8"> 
                           <button class="btn btn-info" type="submit"  id="" class="form-control"> Register
                           </button>
                                         
                        </div>
                    </div>
                         
                       
                   </form>                                                        
           </div>
       </div>
    </div> 
    
 <br>

  
<?php include_once('footer.php');?>
 
 
  </body>
</html>
