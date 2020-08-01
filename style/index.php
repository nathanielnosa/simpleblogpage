<?php 

 ?>






 <!DOCTYPE html>
 <html>
 <head>
 	<title>search</title>
 </head>
 <body>




 	<form action="" method="GET" name="">
    <table>
        <tr>
            <td><input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Enter your search keywords" /></td>
            <td><input type="submit" name="" value="Search" /></td>
        </tr>
    </table>
</form>
 
 </body>
 </html>