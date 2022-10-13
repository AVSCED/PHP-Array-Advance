<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    echo"<b>1. List all products in this format:<br><br></b>";
    $products = array(
            "Electronics" => 
                    array("Television" => 
                                      array( 
                                          array("id" => "PR001","name" => "MAX-001","brand" => "Samsung"),
                                          array("id" => "PR002","name" => "BIG-301","brand" => "Bravia" ), 
                                          array( "id" => "PR003","name" => "APL-02", "brand" => "Apple")),
                        "Mobile" => 
                                 array(
                                    array("id" => "PR004","name" => "GT-1980","brand" => "Samsung" ), 
                                    array("id" => "PR005","name" => "IG-5467","brand" => "Motorola"),
                                    array("id" => "PR006", "name" => "IP-8930", "brand" => "Apple" ))
                                ),
            "Jewelry" =>
                   array("Earrings" => 
                                array( 
                                    array("id" => "PR007","name" => "ER-001","brand" => "Chopard"), 
                                    array("id" => "PR008","name" => "ER-002","brand" => "Mikimoto" ),
                                    array("id" => "PR009", "name" => "ER-003","brand" => "Bvlgari" )),
                         "Necklaces" => 
                                 array(
                                     array("id" => "PR010","name" => "NK-001", "brand" => "Piaget"),
                                     array("id" => "PR011","name" => "NK-002","brand" => "Graff"), 
                                     array("id" => "PR012", "name" => "NK-003","brand" => "Tiffany" ))
                                )                        
                  );

     
     $data ="<table><tr><th>Category:</th><th>SubCategory:</th><th>ID:</th> <th>Name:</th><th>Brand:</th></tr>";

     foreach ($products as $key => $value) 
     {

       $data .="<tr><td>".$key."</td></tr>";

         foreach ($value as $key1 => $value1) 
         {

            $data .="<tr><td></td><td>".$key1."</td></tr>";

                foreach ($value1 as $key2 => $value2)
                {
                $data .="<tr><td></td><td></td><td>".$value2['id']."</td>"."<td>".$value2['name']."</td>"."<td>".$value2['brand']."</td>"."</tr>";
                }
        }
    }
    $data .="</table>";
    echo $data;
    echo "<hr>";

    echo" <b>2. List all products in Mobile subcategory in same format as in point 1. <br><br></b>";

    $data ="<table><tr><th>Category:</th><th>SubCategory:</th><th>ID:</th> <th>Name:</th><th>Brand:</th></tr>";

    foreach ($products as $key => $value) 
    {

      $data .="<tr><td>".$key."</td></tr>";

        foreach ($value as $key1 => $value1) 
        {
          if ($key1 == "Mobile"){
           $data .="<tr><td></td><td>".$key1."</td></tr>";
           $flag=1;
          }
               foreach ($value1 as $key2 => $value2)
               {
                if($flag==1){
               $data .="<tr><td></td><td></td><td>".$value2['id']."</td>"."<td>".$value2['name']."</td>"."<td>".$value2['brand']."</td>"."</tr>";
               } 

            }
       }break;
   }
   $data .="</table>";
   echo $data;
   echo "<hr>";
   echo "<b>3 List all products with their id, name, subcategory and category with brand name = 'Samsung' like this:

   Product ID: PR001
   Product Name: MAX-001
   Subcategory: Television
   Category: Electronics<br><br> </b>";

       foreach ($products as $key => $value) 
    {
      echo"$key <br><hr>";

        foreach ($value as $key1 => $value1) 
        {
         
           echo "$key1<br>";
               foreach ($value1 as $key2 => $value2)
               {
                if ($value2['brand'] == 'Samsung'){
               echo $value2['id'];
               echo "<br>";
               echo $value2['name'];
               echo "<br>";
               echo"<hr>";
             }

            }
       }break;
   }
    echo"<b>4. Update product name = 'BIG-555' with id = PR002.</b><br><br>";

    $da ="<table><tr><th>Category:</th><th>SubCategory:</th><th>ID:</th> <th>Name:</th><th>Brand:</th></tr>";

    foreach ($products as $key => $value) 
    {

      $da .="<tr><td>".$key."</td></tr>";

        foreach ($value as $key1 => $value1) 
        {

           $da .="<tr><td></td><td>".$key1."</td></tr>";

               foreach ($value1 as $key2 => $value2)
               {
                if ($value2['id'] == "PR002")
                {
                  $value2['name'] ="BIG-555";
                }
               $da .="<tr><td></td><td></td><td>".$value2['id']."</td>"."<td>".$value2['name']."</td>"."<td>".$value2['brand']."</td>"."</tr>";
               }
       }
   }
   $da .="</table>";
   echo $da;
   echo "<hr>";

   echo"<b>5. Delete product with id = PR003.</b><br>";

   $data ="<table><tr><th>Category:</th><th>SubCategory:</th><th>ID:</th> <th>Name:</th><th>Brand:</th></tr>";

     foreach ($products as $key => $value) 
     {

       $data .="<tr><td>".$key."</td></tr>";

         foreach ($value as $key1 => $value1) 
         {

            $data .="<tr><td></td><td>".$key1."</td></tr>";

                foreach ($value1 as $key2 => $value2)
                {
                  if($value2['id']=="PR003"){
                    unset($value2);
                  }
                $data .="<tr><td></td><td></td><td>".$value2['id']."</td>"."<td>".$value2['name']."</td>"."<td>".$value2['brand']."</td>"."</tr>";
                }
        }
    }
    $data .="</table>";
    echo $data;
    echo "<hr>";

    ?>

</body>
</html>