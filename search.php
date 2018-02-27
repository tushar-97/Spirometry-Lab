<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="scripts.js" type="text/javascript"></script>
<html>
<head>
  <link rel="stylesheet" href="search-style.css">
</head>
<body style="background-color:#CAEBF2;">
<?php

  $conn = new mysqli('localhost','root','');
  error_reporting(E_ERROR);

  mysqli_select_db($conn,"pft database");

  $query1 = $_POST['CRNO'];
  $query2 = $_POST['DATE'];

  $query1 = htmlspecialchars($query1);
  $query2 = htmlspecialchars($query2);

   if(!empty($query1) && !empty($query2))
   {
     $raw_results = mysqli_query($conn,"SELECT * FROM pft
            WHERE (`CRNO`= '$query1') AND (`TIMESTAMP` LIKE '{$query2}%' )");
   }
   else if(!empty($query1) && empty($query2))
   {
     $raw_results = mysqli_query($conn,"SELECT * FROM pft
            WHERE (`CRNO`= '$query1')");
   }
   else if(!empty($query2) && empty($query1))
   {
     $raw_results = mysqli_query($conn,"SELECT * FROM pft
            WHERE (`TIMESTAMP` LIKE '{$query2}%')");
   }


   if(mysqli_num_rows($raw_results) > 0)
   {
     ?>
     <form action="tocsv.php" method="post">
      <table style="border-collapse:collapse;" align="centre" id="mytable">
        <th><input type="checkbox" id="checkall"/></th>
        <th>CRNO</th>
        <th>Time</th>
        <th>Name</th>

     <?php
      while($results = mysqli_fetch_array($raw_results))
          {
            echo '<tr><td><input type="checkbox" name="selected[]" value="'.$results['CRNO'].$results['TIMESTAMP'].'" class="checkbox"/>';
            echo '</td>';
            //foreach ($results as $key => $value) next line supposed to be part of this loop
            echo '<td>'.$results['CRNO'].'</td>'.
                 '<td>'.$results['TIMESTAMP'].'</td>'.
                 '<td>'.$results['NAME'];
            echo '</tr><br>';
          }
          ?>
          </table>
          <br>
          <input type="submit" />
        </form>


        <?php
    }
   else{
       echo "No entries for the specified query.";
    }
    mysqli_close($conn);
?>
<p>
<form action="index.php" method="post">
  <label><span>&nbsp;</span><input type="submit" value="Go Back" /></label>
</form>
</p>
</body>
</html>
