<?php
//header("Location: Category.php");

include ("Connection.php"); 
?>


<?php 
    $category= $_POST['categoryName'];
    $description =$_POST['description']; 

    if(isset($_POST['categoryName']) AND isset($_POST['description']) )
    {  
            
       
        $query= "INSERT INTO category (CategoryId, CategoryName, Description) values (NULL,'$category','$description')"; 
        
        mysqli_query($connect,$query);
        
        if(mysqli_affected_rows($connect)>0){                      
            echo '<script language="javascript"> 
            alert("Category added to database."); 
                  
            window.location.href="Category.php";
            
            </script>';
            
             mysqli_close($connect);
            die();
          
            
        }else{
             
            echo '<script language="javascript"> alert("Category Not added to database."); 

            window.location.href="Category.php";
            
            </script>';
            mysqli_close($connect);
            die();
          
        
            
        }
        
    }
?>