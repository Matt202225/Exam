<?php
include_once 'connect.php';

if (isset($_POST['submit'])){

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $artist = mysqli_real_escape_string($conn,$_POST['artist']);
    $lyrics = mysqli_real_escape_string($conn,$_POST['lyrics']);
    $date_created = date("Y-m-d");

// SQL query to insert data
$add_query = "INSERT INTO songs (title, artist,song_lyrics,date_created) VALUES ('$title', '$artist','$lyrics','$date_created')";

// Execute the query
if ($conn->query($add_query) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " .$add_query . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
}

?>
<html>
    <head>
        <title>List Of Songs</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        </head>

 <body>   
<div class = "container">
<form method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" name = "title">
  </div>
  <div class="mb-3">
    <label for="artist" class="form-label">Artist:</label>
    <input type="text" class="form-control" id="artist" name = "artist">
  </div>
  <div class="mb-3">
    <label for="lyrics" class="form-label">Song Lyrics:</label>
    <textarea class="form-control" id="lyrics" name = "lyrics"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" id = "submit" name = "submit">Add</button>
  <a  class = "btn btn-primary" href = "index.php"  style = "text-decoration:none;color:white;">Back</a>
</form>
</div>
<body>
</html>