<?php

    $mysqli = new mysqli('localhost', 'a3002438_DB_TEST_USER', 'yesyesyes123', 'a3002438_SCP_DATABASE', '3306')
    or die(mysqli_error($mysqli));

    if(isset($_POST['ItemNo']))
    {
        $itemno = $_POST['ItemNo'];
        $objclass = $_POST['ObjectClass'];
        $scp = mysqli_real_escape_string($mysqli, $_POST['SCP']);
        $description = mysqli_real_escape_string($mysqli, $_POST['Description']);
        // $scp = $_POST['SCP'];
        // $description = $_POST['Description'];
        $subjectimg = $_POST['SubjectImage'];


        $mysqli->query("INSERT INTO `SCPdata` (`id`, `ItemNo`, `ObjectClass`, `SCP`, `Description`) VALUES (NULL, '$itemno', '$objclass', '$scp', '$description')") or die($mysqli->error);
       
       


        header("Location: scpdisplay.php");
    }

    // select data from db
    $result = $mysqli->query("SELECT * FROM `SCPdata`") or die($mysqli->error);

    // delete data from database.
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $mysqli->query("delete from SCPdata where id=$id") or die($mysqli->error);

        // redirect back to week3.php
        header("Location: scpdisplay.php");
    }

    // if (isset($_GET['edit'])) {
	// 	$id = $_GET['edit'];
	// 	$update = true;
	// 	$result = mysqli_query("SELECT * FROM SCPdata WHERE id=$id");

	// 	if (count($record) == 1 ) {
	// 		$n = mysqli_fetch_array($record);
	// 		$itemno = $n['ItemNo'];
    //         $objclass = $n['ObjectClass'];
    //         $scp = $n['SCP'];
    //         $description = $n['Description'];
	// 	}
	// }
?>