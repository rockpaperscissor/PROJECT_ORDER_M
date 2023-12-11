<!-- add menu setup using jquery,wrap,buutton, -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<!-- <div class="menuAll"> -->
<div class="menudiv">
    <div class="menuheaddiv">
                <h3>Menu</h3>

    </div>
    <div class="menupagediv">
        <div class="radios">
        <input type="radio" name="radioselect" value="veg" id="vegRadio"> Veg only
        <input type="radio" name="radioselect" value="nonveg" id="nonRadio">Nonveg
        <input type="radio" name="radioselect" value="comb" id="oRadio"> desserts 


        
         </div>
        <div class="veg">
            <div class="vegcover">
                <div class="images"><p>Paneer Butter Masala</p>
                <img class='newimage' src="./veg/PaneerM.jpeg" alt="">
                </div>
                <div class="images"><p>Veg Fried Rice</p>
                    <img class='newimage'  src="" alt="">
                </div>
                <div class="images"><p>Gopi Mnchurian</p>
                    <img class='newimage'               src="./veg/GopiM.jpeg" alt="">
                </div>
                <div class="images"><p>Mushroom Masala</p>
                    <img   class='newimage'       src="./veg/MushroomM.jpeg" alt="">
                </div>
            
                
            </div>

            <div class="vegcover">
                <div class="images"><p>Veg Jaipuri</p>
                <img class='newimage'       src="./veg/VegJ.jpeg" alt="">
                </div>
                <div class="images"><p>Porotta Kerala style</p>
                <img  class='newimage'           src="./veg/PaneerM.jpeg" alt="">
                </div>
                <div class="images"><p>Wheat Porotta</p>
                <img  class='newimage'            src="./veg/PorottaK.jpeg" alt="">
                </div>
                <div class="images"><p>Green Pea Masala</p>
                <img    class='newimage'                 src="./veg/GreenPM.jpeg" alt="">
                </div>
            </div>







        </div>






        <!-- NONVEgggggggggggggggggggggggggggggggggggggggggg -->
         <div class="nonveg">
            <div class="nonvegcover">
                <div class="images"><p>chicken leg curry</p>
                <img    class='newimage'            src="./nonveg/chicken leg curry.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                    <img   class='newimage'         src="./nonveg/egg biriyani.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                    <img  class='newimage'      src="./nonveg/fish fry.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                    <img      class='newimage'    src="./nonveg/Ginger roast turkey.jpeg" alt="">
                </div>
            
                
            </div>

            <div class="nonvegcover">
                <div class="images"><p></p>
                <img  class='newimage'      src="./nonveg/mutton biriyani.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img    class='newimage'      src="./nonveg/prawn biriyani.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img     class='newimage'    src="./nonveg/prawn roast.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img    class='newimage'    src="./nonveg/tandoori chicken.jpeg" alt="">
                </div>
            </div>




 


        </div>


        <!-- copiedddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->
        <?php
include 'connection.php';
$sql = "SELECT * FROM tbl_category";
$data = mysqli_query($con, $sql);

if ($data === FALSE) {
    die("Error in SQL query: " . mysqli_error($con));
}



?>

        <?php
    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?php echo $row['vchr_category_name'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><a href="dlt.php?id=<?php echo $row['pk_id'];?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $row['pk_id'];?>">Edit</a></td>
        </tr>
    <?php
    }
    ?>



        <!-- DESSERTSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
        <div class="dessert">
            <div class="dessertcover">
                <div class="images"><p>Gulab Jamun Kunafa Nests</p>
                <img    class='newimage'            src="./beverages_desserts/GulabJamunInKunafaNests.jpeg" alt="">
                </div>
                <div class="images"><p>Rasmalai Parfait</p>
                    <img   class='newimage'         src="./beverages_desserts/rasmalaiParfait.jpeg" alt="">
                </div>
                <div class="images"><p>Rose Milk Mousse</p>
                    <img  class='newimage'      src="./beverages_desserts/roseMilkMousse.jpeg" alt="">
                </div>
                <div class="images"><p>Custard Gulab Jamun</p>
                    <img      class='newimage'    src="./beverages_desserts/custardGulabJamun.jpeg" alt="">
                </div>
            
                
            </div>

            <div class="dessertcover">
                <div class="images"><p>Ferrerro Rocher Trifle</p>
                <img  class='newimage'      src="./beverages_desserts/ferreroRocherTrifle.jpeg" alt="">
                </div>
                <div class="images"><p>Black Forest Trifle</p>
                <img    class='newimage'      src="./beverages_desserts/blackforesttrifle.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img     class='newimage'    src="./nonveg/prawn roast.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img    class='newimage'    src="./nonveg/tandoori chicken.jpeg" alt="">
                </div>
            </div>




 


        </div>

        <!-- BEVERAGESssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
        <div class="dessert">
            <div class="dessertcover">
                <div class="images"><p>Gulab Jamun Kunafa Nests</p>
                <img    class='newimage'            src="./beverages_desserts/GulabJamunInKunafaNests.jpeg" alt="">
                </div>
                <div class="images"><p>Rasmalai Parfait</p>
                    <img   class='newimage'         src="./beverages_desserts/rasmalaiParfait.jpeg" alt="">
                </div>
                <div class="images"><p>Rose Milk Mousse</p>
                    <img  class='newimage'      src="./beverages_desserts/roseMilkMousse.jpeg" alt="">
                </div>
                <div class="images"><p>Custard Gulab Jamun</p>
                    <img      class='newimage'    src="./beverages_desserts/custardGulabJamun.jpeg" alt="">
                </div>
            
                
            </div>

            <div class="dessertcover">
                <div class="images"><p>Ferrerro Rocher Trifle</p>
                <img  class='newimage'      src="./beverages_desserts/ferreroRocherTrifle.jpeg" alt="">
                </div>
                <div class="images"><p>Black Forest Trifle</p>
                <img    class='newimage'      src="./beverages_desserts/blackforesttrifle.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img     class='newimage'    src="./nonveg/prawn roast.jpeg" alt="">
                </div>
                <div class="images"><p></p>
                <img    class='newimage'    src="./nonveg/tandoori chicken.jpeg" alt="">
                </div>
            </div>




 


        </div>
    </div>






   
        

       
</div>
</body>
</html>