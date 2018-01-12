<!DOCTYPE html>
<html lang="en">
<?php  include_once ('header.php');?>
<body>
   
    <?php  include_once ('nav.php');?>
    
   <div class="container">
                      
           <div class="panel panel-primary">
                                             
               <div class="panel-heading">
                <h2 class="panel-title"> Register Products</h2>
               </div>
               
               <div class="panel-body">
                   <form  class="form-horizontal" action="registerProducts.php" method="post" id="register_form">
                       
                    <div class="row">
                        <div class="col-md-6"> 
                           <div class="form-group">
                               <label for="productName">Product Name : </label>
                            <input type="text" placeholder="product Name" id="productName" name="productName" class="form-control" minlength="2" maxlength="100" required>
                           </div>
                            
                        </div>
                          <div class="col-md-6"> 
                           <div class="form-group">
                               <label for="quantity"> Quantity Per Unit : </label>
                            <input type="number"  id="quantityPerUnit" name="quantityPerUnit" class="form-control"
                             min="1"  max="100000000" required>
                           </div>
                            
                            
                        </div>
                       </div>
                       
                 <div class="row">
                        <div class="col-md-6"> 
                           <div class="form-group">
                               <label for="unitPrice">Unit Price : </label>
                            <input type="number" placeholder="Unit Price" id="unitPrice" name="unitPrice" class="form-control"
                            min="1"  max="100000000000" step="any">
                           </div>
                            
                        </div>
                          <div class="col-md-6"> 
                           <div class="form-group">
                               <label for="registrationDate"> Registration Date : </label>
                            <input type="date"  id="registrationDate" name="registrationDate" class="form-control"
                            min="01/01/1970" required>
                        </div>                                                     
                        </div>
                                                
                        </div>
                        
                <div class="row">
                        
                          <div class="col-md-6"> 
                           <div class="form-group">
                               <label for="category"> Category :</label>
                            <select  id="category"   name="category" class="form-control"
                             required>
                              <option value=" " selected disabled>Select a category</option>
                                <?php 
                                    include ('Connection.php');                          
                                
                                
                                 $query = "select categoryId, categoryName from category";
                                                                 
                                    $result =mysqli_query($connect,$query);
                                                                                                   
                                  while($row=mysqli_fetch_array ($result)){
                                    echo "<option value= ".$row['categoryId']." > ". $row['categoryName']."</option>";
                                   }
                                  mysqli_close($connect);
                                ?>
                            </select>
                           
                        </div>                                                     
                        </div>
                         <div class="col-md-6"> 
                           <div class="form-group">
                               <label for="unitsInStock">Units In Stock : </label>
                            <input type="number" id="unitsInStock" name="unitsInStock" class="form-control" min="0" maxlength="100000000000" required>
                           </div>
                            
                        </div>
                      
                            
                        </div> 
                                                                                                                                                 
                        <div class="row">
                            <div class="col-md-6"></div>
                        <div class="col-md-6"> 
                           <button class="btn btn-info" type="submit"  id="" class="form-control"> Register
                           </button>
                                         
                        </div>
                    </div>
                         
                       
                   </form> 
                                                                          
           </div>
       </div>
    </div>   
    <br>

    <?php  include_once('footer.php');?>
    
    
    </body>
</html>
