<?php
 include('db.php');

if (isset($_POST['submit'])) {
    $artist = $_POST['artist'];
    $csv = $_FILES['csv']['tmp_name'];
    $csvData = array_map('str_getcsv', file($csv));
     
     if (empty($artist) || empty($csvData)){ 
        $msg = "Error: please full all the fields";
        header('location:index.php?msg='.$msg);
        exit;
       
     }

   
    foreach ($csvData as $row) {
        // Assuming your CSV columns are: name, image, artist, year, size, style, cStyle
        $name = $row[0];
        $image = $row[1];
        $artist = $row[2];
        $year = $row[3];
        $size = $row[4];
        $style = $row[5];
        $cStyle = $row[6];

        // Insert data into your artworks table
        $sql = "INSERT INTO art (name, image, artist, year, size, style, cStyle)
                VALUES ('$name', '$image', '$artist', '$year', '$size', '$style', '$cStyle')";

        if ($conn->query($sql) === TRUE) {
            echo "Artwork data inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
} else {
    echo "Error uploading the file.";
}
?>
