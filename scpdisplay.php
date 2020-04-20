<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>30024380 - Logan Tawhiri</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="scpbg">

    <?php include "nav.php"?>
    <?php include 'scpdata.php' ?>
    <div class="container-fluid" style="margin-top:30px">
    <h2 class="h2-responsive font-weight-bold mt-sm-5 text-light">Location of users</h2>
        <table class="table">
        <thead><tr><th class="text-light">Item No</th><th class="text-light">Object Class</th><th class="text-light">SCP</th><th class="text-light">Description</th><th class="text-light" colspan="4">Actions</th></tr></thead>

        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td class="text-light"><?php echo $row['ItemNo']; ?></td>
            <td class="text-light"><?php echo $row['ObjectClass']; ?></td>
            <td class="text-light"><?php echo $row['SCP']; ?></td>
            <td class="text-light"><?php echo $row['Description']; ?></td>
            <td>
            <a href="scpdata.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
            </td>
            <td>
            <a href="scpdata.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>
  </div>
</body>
</html>