<html>
 <head>
     <title>this is first php page</title>

 </head>   
 <body>
     <?php 
        $first_name = filter_input(INPUT_POST,'firstname');
        $last_name = filter_input(INPUT_POST,'lastname');
        echo "<p> hi there $first_name $last_name <p>";
     ?>
 </body>
</html>