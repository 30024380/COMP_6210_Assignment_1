<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>30024380 - Logan Tawhiri</title>

    <Script>
    function Popup() {
      alert("You have successfully submitted information to the database.");
    }

    function validate() {
      
      if( document.Form.ItemNo.value == "" ) {
         alert( "Please provide a subject number!" );
         document.Form.ItemNo.focus() ;
         return false;
      }
      if( document.Form.ObjectClass.value == "" ) {
         alert( "Please provide a subject class!" );
         document.Form.ObjectClass.focus() ;
         return false;
      }
      if( document.Form.SCP.value == "" ) {
         alert( "Please provide the containment procedures" );
         document.Form.SCP.focus() ;
         return false;
      }
      if( document.Form.Description.value == "" ) {
         alert( "Please provide a description!" );
         document.Form.Description.focus() ;
         return false;
      }
      return Popup();
   }
    </script>
  </head>
<body>
  <div class="scpbg">
    <?php include 'nav.php'; ?>
    <?php include 'scpdata.php' ?>
    <div class="container" style ="margin-top:30px">
      <h2 class="h2-responsive font-weight-bold mt-sm-5 text-light">SCP Application</h1>
      <hr class="bg-light">
      <div class="form-group">
        <form action="scpdata.php" method="post" name="Form" onsubmit = "return(validate());">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <h6 class="text-light">Enter Subject Number</h6>
        <br>
        <input type="text" name="ItemNo" placeholder="Use the following format SCP-###" class="form-control" value="<?php echo $itemno; ?>">
        <br>
        <h6 class="text-light">Enter Subject Class Type</h6>
        <br>
        <input type="text" name="ObjectClass" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" class="form-control" value="<?php echo $objclass; ?>">
        <br>
        <h6 class="text-light">Enter Containment Procedures</h6>
        <br>
        <textarea type="text" name="SCP" rows="6" placeholder="Containment Procedures here..." class="form-control" value="<?php echo $scp; ?>"></textarea>
        <br>
        <h6 class="text-light">Enter Subject Description Details</h6>
        <br>
        <textarea type="text" name="Description" rows="6" placeholder="Description here..." class="form-control" value="<?php echo $description; ?>"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Submit Data</button>
        </form>
      </div>
    </div>
</div>
</body>
</html>