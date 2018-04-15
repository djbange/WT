<?php
  // parameters: server_name, username, password, database_name 
  $db = mysqli_connect('127.0.0.1', 'root', 'Prakash1', 'student_php');

  $output = array();
  $query = "SELECT * FROM student";
  $result = mysqli_query($db, $query);
  
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)) {
      // similar to output.append(row)
      $output[] = $row;
    }
  }


?>

<?php foreach($output as $row) : ?>
<tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['name'] ?></td>
  <td><?php echo $row['email'] ?></td>
  <td><?php echo $row['year'] ?></td>
  <td><?php echo $row['dob'] ?></td>
</tr>
<?php endforeach ?>