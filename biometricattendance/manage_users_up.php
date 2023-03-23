<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<?php
  //Connect to database
  require'connectDB.php';

    $sql = "SELECT * FROM manage_users ORDER BY fingerid DESC";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
        echo '<p class="error">SQL Error</p>';
    }
    else{
      mysqli_stmt_execute($result);
        $resultl = mysqli_stmt_get_result($result);
      if (mysqli_num_rows($resultl) > 0){
          while ($row = mysqli_fetch_assoc($resultl)){
  ?>
              <TR>
          
              <TD><?php echo $row['number'];?></TD>
              <TD><?php echo $row['fingerid'];?></TD>
              <TD><?php echo $row['name'];?></TD>
              <TD><?php echo $row['gender'];?></TD>
              <!-- <TD><?php echo $row['user_date'];?></TD> -->
              <!-- <TD><?php echo $row['time_in'];?></TD> -->
              </TR>
<?php
        }   
    }
  }
?>
</tbody>
</table>