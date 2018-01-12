<?php
//header("Location: Products.php");


include "Connection.php"; 
?>


<?php 

    print_r($_POST);
    $product =$_POST['productName'];
    $unit=$_POST['unitPrice']; 
    $quantity =$_POST['quantityPerUnit'];
    $category = $_POST['category'];
    $registration = $_POST['registrationDate']; 
    $units = $_POST['unitsInStock'];

    if(isset($_POST['productName']) AND isset($_POST['unitPrice']) AND 
    isset($_POST['category']) AND isset($_POST['quantityPerUnit']) AND isset($_POST['registrationDate']) AND isset($_POST['unitsInStock']))
    {
        
         echo 'was there';
        $query= "INSERT INTO product (ProductID,ProductName, QuantityPerUnit, UnitPrice, UnitsInStock, RegistrationDate, CategoryID) values (NULL,'$product','$quantity', '$unit', '$units', '$registration', '$category')"; 
        
        mysqli_query($connect,$query);
        
        if(mysqli_affected_rows($connect)>0){                      
            echo '<script language="javascript"> 
            alert(" New products added to the database."); 
                  
            window.location.href="Products.php";
            
            </script>';
            
             mysqli_close($connect);
            die();
          
            
        }else{
             
            echo '<script language="javascript"> alert("New product Not added to the database."); 

            window.location.href="Products.php";
            
            </script>';
            mysqli_close($connect);
            die();
          
        
            
        }
    }
?>