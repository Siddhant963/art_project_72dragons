<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Artwork Upload</title>
</head>
<body>
    <div class="container text-center">
    <h1>Upload Artwork Information</h1>
 <br>
   <?php   
   if (isset($_GET['msg'])) {
    $msg = $_GET['msg']; ?>
   <b> <?php echo $msg ; ?></b>
<?php
   }
   ?>
 <br>
 <br>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="artist">Select Artist:</label>
        <select class="form-control m-2 p-2" name="artist" id="artist">
            <option value="">Select an artist</option>
            <option value="artist1">Artist 1</option>
            <option value="artist2">Artist 2</option>
            <option value="artist3">Artist 3</option>
        </select>
        
   
        <input class="form-control mb-2" type="file" name="csv" accept=".csv">
        <input type="submit" name="submit" value="Upload">
    </form>
    </div>
</body>
</html>
