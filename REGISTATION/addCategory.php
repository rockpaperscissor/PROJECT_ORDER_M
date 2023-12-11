
<?php
include 'connection.php';

$sql = "select * from tbl_category";
$data = mysqli_query($con,$sql);
if(!$data){
    die(mysqli_error($con));
}
else{
   echo "fetch successful!"; 
}







?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addcategory.css">
</head>
<body>
    <div class="addcategoryAll">
        <div class="addcategorydiv">
            <div class="addcategoryheaddiv">
                <h3>Add Category </h3>

            </div>
            <div class="addcategorypagediv">

                <div class="category">
                    <div class="cover">
                        <div class="images"><p>veg</p>
                        <img class='newimage' src="./images/veg/PaneerM.jpeg" alt="">
                        <div class="btn">
                            <input type="button"value="add"><input type="button"value="delete"><input type="button"value="view">

                        </div>
                        
                        </div>
                        <!-- veg add delete view -->
                        <div class="addveg">
                            <label for="veginput">category</label>
                            <input type="text" name="vegitemname" id="veginput">
                            <label for="vegimageinput">Image</label>
                            <input type="image"name="vegitemimage"id="vegimageinput">
                            <label for="vegitemdescinput">Description</label>
                            <input type="text" name="vegitemdesc" id="vegitemdescinput">
                        </div>










                        <div class="images"><p>non veg</p>
                            <img class='newimage'  src="" alt="">
                            <div class="btn">
                                <input type="button"value="add"><input type="button"value="delete"><input type="button"value="view">
    
                            </div>
                        </div>
                        <!-- non veg add delete view -->
                        <div class="addveg">
                            <label for="veginput">category</label>
                            <input type="text" name="vegitemname" id="veginput">
                            <label for="vegimageinput">Image</label>
                            <input type="image"name="vegitemimage"id="vegimageinput">
                            <label for="vegitemdescinput">Description</label>
                            <input type="text" name="vegitemdesc" id="vegitemdescinput">
                        </div>













                        <div class="images"><p>desserts</p>
                            <img class='newimage'               src="./images/veg/GopiM.jpeg" alt="">
                            <div class="btn">
                                <input type="button"value="add"><input type="button"value="delete"><input type="button"value="view">
    
                            </div>
                        </div>
                        <div class="addveg">
                            <label for="veginput">category</label>
                            <input type="text" name="vegitemname" id="veginput">
                            <label for="vegimageinput">Image</label>
                            <input type="image"name="vegitemimage"id="vegimageinput">
                            <label for="vegitemdescinput">Description</label>
                            <input type="text" name="vegitemdesc" id="vegitemdescinput">
                        </div>
                        
                    
                        
                    </div>
                    </div>
        

                
            </div>
           
                
            
        </div>

    </div>
</body>
</html>