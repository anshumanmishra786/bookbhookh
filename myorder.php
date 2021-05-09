<?php
include "connection.php";

$profpic = "bggg.jpg";
?>


<html lang="en">
<head>
  <title>Orders Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="table.css">
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Your Order Details</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="name"> Name </label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="field"> Book Field (Eng/Hin/Mag/Aca) </label>
      <input type="text" class="form-control" id="field" placeholder="Enter Book Field" name="bookfield">
    </div>
    <div class="form-group">
      <label for="bookname"> Book Name </label>
      <input type="text" class="form-control" id="bookname" placeholder="Enter Book Name" name="bookname">
    </div>
    <div class="form-group">
      <label for="quantity"> Quantity </label>
      <input type="text" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
    </div>
    <div class="form-group">
      <label for="mail"> Your Email </label>
      <input type="email" class="form-control" id="yomail" placeholder="Enter your mail" name="email">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember my order</label>
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
    <a href="userdata/index.php"><button type="submit" name="delete" class="btn btn-default">Back</button></a>
    
  </form>
</div>
</div>

<div class="col-lg-4">
<table class="table table-bordered center">
    <thead>
      <tr>
        <th width="40%">#</th>
        <th width="40%">Name</th>
        <th width="40%">Book Field</th>
        <th width="40%">Book Name</th>
        <th width="40%">Quantity</th>
        <th width="40%">Email</th>
        <th width="40%">Edit</th>
        <th width="40%">Delete</th>
      </tr>
    </thead>
    <tbody>
     <?php
     $res=mysqli_query($link,"select * from table1");
     while($row=mysqli_fetch_array($res)){
          echo "<tr>";
          echo "<td>"; echo $row["id"]; echo "</td>";
          echo "<td>"; echo $row["name"]; echo "</td>";
          echo "<td>"; echo $row["bookfield"]; echo "</td>";
          echo "<td>"; echo $row["bookname"]; echo "</td>";
          echo "<td>"; echo $row["quantity"]; echo "</td>";
          echo "<td>"; echo $row["email"]; echo "</td>";
          echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a><?php echo "</td>";
          echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a><?php echo "</td>";
          echo "</tr>";
     }
     
     ?>
    </tbody>
  </table>
</div>

</body>

<?php
if(isset($_POST["insert"])){
    mysqli_query($link,"insert into table1 values(NULL,'$_POST[name]','$_POST[bookfield]','$_POST[bookname]','$_POST[quantity]','$_POST[email]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}
if(isset($_POST["delete"])){
  mysqli_query($link,"delete from table1 where name='$_POST[name]'") or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
if(isset($_POST["update"])){
  mysqli_query($link,"update table1 where name='$_POST[name]'") or die(mysqli_error($link));
  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}
?>
</html>