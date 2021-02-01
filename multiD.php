<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiDimensional Array</title>
    <style>
    h1{
    text-align : center;
    color: purple;
}
table{
    border-collapse: collapse;
    width: 100%;
}

table td, #task1 th {
    text-align: left;
    padding: 8px;
}
table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5555ff;
  color: white;
}

#task2 h1{
    margin-top: 10vh;
}
#task3 h1{
    margin-top: 10vh;
}
#task3{
    margin-bottom: 10vh;
}
#task4{
    margin-top: 10vh;
    display: grid;
    grid-template-columns: auto auto auto auto;
    border: 1px solid purple;
    color: white;
    background-color:#5555aa;
    padding-left: 32%;
    height: 25vh;
}

</style>
</head>
<body>

<?php 

$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
                                            );
                ?>
                <div>
                <h1>List all Products</h1>
                <table id="task1">
                <tr>
                <th>Category</th>
                <th>Subcategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>
                <?php
                     foreach($products as $key1 => $val1){
                         foreach($val1 as $key2 => $val2){
                             foreach($val2 as $key3 => $val3){
                                echo "<tr>";
                                echo "<td>" . $key1 . "</td>";
                                echo "<td>" . $key2 . "</td>";
                                echo "<td>" . $val3['id'] . "</td>";
                                echo "<td>" . $val3['name'] . "</td>";
                                echo "<td>" . $val3['brand'] . "</td>";
                               echo "</tr>";
                             }
                         }

}
                ?>

                </table>

                </div>

                <div id="task2">
                <h1>List all products in Mobile subcategory</h1>
                <table>
                <tr>
                <th>Category</th>
                <th>Subcategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>
                <?php
                foreach($products as $key1 => $val1){
                    foreach($val1 as $key2 => $val2){
                        foreach($val2 as $key3 => $val3){
                            if($key2 == "Mobile"){
                                echo "<tr>";
                                echo "<td>" . $key1 . "</td>";
                                echo "<td>" . $key2 . "</td>";
                                echo "<td>" . $val3['id'] . "</td>";
                                echo "<td>" . $val3['name'] . "</td>";
                                echo "<td>" . $val3['brand'] . "</td>";
                               echo "</tr>";

                            }
                        }

                    }

                }
                ?>


                </table>
                </div>


                <div id="task3">
                <h1>List all products with brand name Samsung</h1>
                <table>
                <tr>
                <th>Category</th>
                <th>Subcategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>
                <?php
                foreach($products as $key1 => $val1){
                    foreach($val1 as $key2 => $val2){
                        foreach($val2 as $key3 => $val3){
                            if($val3['brand']== "Samsung"){
                                echo "<tr>";
                                echo "<td>" . $key1 . "</td>";
                                echo "<td>" . $key2 . "</td>";
                                echo "<td>" . $val3['id'] . "</td>";
                                echo "<td>" . $val3['name'] . "</td>";
                                echo "<td>" . $val3['brand'] . "</td>";
                               echo "</tr>";

                            }
                        }

                    }

                }
                ?>
                </table>
                </div>

                <h1>List all products with brand name Samsung</h1>
                <div id="task4">
                <?php

                foreach($products as $key1 => $val1){
                    foreach($val1 as $key2 => $val2){
                        foreach($val2 as $key3 => $val3){
                            if($val3['brand']=="Samsung"){
                            echo "<div>";
                            echo "<h2>" . $val3['brand'] . "</h2>";
                            echo "ProductID :" . $val3['id'] . "<br>";
                            echo "Product Name :" . $val3['name'] . "<br>";
                            echo "SubCategory :" . $key2 . "<br>";
                            echo "Category :" . $key1 . "<br>";
                            echo "</div>";
                           }
                        }

                    }

                }
                
                
                
                ?>
                </div>

                <div id=task5>
                <?php
                foreach($products as $key1 => $val1){
                    foreach($val1 as $key2 => $val2){
                        foreach($val2 as $key3 => $val3){
                            if($val3['id']== "PR003"){
                                unset($products[$key1][$key2][$key3]);
                            }

                        }

                    }

                }
                
                ?>
                </div>

                <div id="task51">
                <h1> Delete product with id = PR003</h1>
                <table id="task1">
                <tr>
                <th>Category</th>
                <th>Subcategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>
                <?php
                     foreach($products as $key1 => $val1){
                         foreach($val1 as $key2 => $val2){
                             foreach($val2 as $key3 => $val3){
                                echo "<tr>";
                                echo "<td>" . $key1 . "</td>";
                                echo "<td>" . $key2 . "</td>";
                                echo "<td>" . $val3['id'] . "</td>";
                                echo "<td>" . $val3['name'] . "</td>";
                                echo "<td>" . $val3['brand'] . "</td>";
                               echo "</tr>";
                             }
                         }

}
                ?>

                </table>

                </div>

                <div id="task6">
                <?php
                 foreach($products as $key1 => $val1){
                    foreach($val1 as $key2 => $val2){
                        foreach($val2 as $key3 => $val3){
                            if($val3['id']== "PR002"){
                             $products[$key1][$key2][$key3]['name']="BIG-555";
                            }

                        }

                    }

                }
                ?>
                </div>

                <div id="task61">
                <h1>Update product name = BIG-555 with id = PR002</h1>
                <table id="task1">
                <tr>
                <th>Category</th>
                <th>Subcategory</th>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                </tr>
                <?php
                     foreach($products as $key1 => $val1){
                         foreach($val1 as $key2 => $val2){
                             foreach($val2 as $key3 => $val3){
                                echo "<tr>";
                                echo "<td>" . $key1 . "</td>";
                                echo "<td>" . $key2 . "</td>";
                                echo "<td>" . $val3['id'] . "</td>";
                                echo "<td>" . $val3['name'] . "</td>";
                                echo "<td>" . $val3['brand'] . "</td>";
                               echo "</tr>";
                             }
                         }

}
                ?>

                </table>

                </div>
</body>
</html>