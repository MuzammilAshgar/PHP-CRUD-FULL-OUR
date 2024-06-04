<?php include('Rotion/database/conntion.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curl demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
  <body>
    <Br>
    <br>
    <br>
    <div class="container-xl">
    <table class="table table-dark table-hover table-bordered   ">
        <thead>

        <a class="btn btn-dark" href="rotion/database/page/add.php">ADD</a>
        <Br>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Account</th>
            <th>Actions</th>
            <th> </th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          $sql = "SELECT * FROM $table";
          $api = mysqli_query($conn,$sql);
          if($api == true){
            while($row =$api->fetch_assoc()){

              $id = $row['id'];
              $name = $row['name'];
              $email = $row['email'];
              $address = $row['address'];
              $phone = $row['phone'];
              $acc = $row['acc'];
            
          ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $address; ?></td>
            <td>+<?php echo $phone; ?></td>
            <td>+<?php echo $acc; ?></td>
            <td><a class="btn btn-light" type="submit" href="rotion/database/page/updata.php?id=<?php echo $id ?>">Update</a> </td>
            <td><a type="submit" class="btn btn-light" href="rotion/database/page/delete.php?id=<?php echo $id ?>">DELETE</a> </td>
        </tr>
        <?php 
        }
      }
      else{
        header("Location:rotion/error/index.php");
      }
        ?>
        </tbody>
      </table>
    </div>
  </body>
</html>