<?php
include_once 'connect.php';

$id = $_GET['id'];

 // Define your SELECT query
 $select_song = "SELECT * FROM songs WHERE id = $id";
 // Execute the query
 $result = $conn->query($select_song);
 $row = $result->fetch_assoc();
 $id =$row['id'];
 $title = $row['title'];
 $artist = $row['artist'];
 $lyrics = $row['song_lyrics'];
 $date_created = $row['date_created'];


if (isset($_POST['submit'])){

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $artist = mysqli_real_escape_string($conn,$_POST['artist']);
    $lyrics = mysqli_real_escape_string($conn,$_POST['lyrics']);

// SQL query to insert data
$update_songs = "UPDATE songs SET title='$title',artist='$artist',song_lyrics='$lyrics' WHERE id=$id";

// Execute the query
if ($conn->query($update_songs) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " .$update_songs . "<br>" . $conn->error;
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
    <input type="text" class="form-control" id="title" name = "title" value = "<?php echo $title;?>">
  </div>
  <div class="mb-3">
    <label for="artist" class="form-label">Artist:</label>
    <input type="text" class="form-control" id="artist" name = "artist" value = "<?php echo $artist;?>">
  </div>
  <div class="mb-3">
    <label for="lyrics" class="form-label">Song Lyrics:</label>
    <textarea class="form-control" id="lyrics" name = "lyrics"><?php echo $lyrics;?></textarea>
  </div>
  <button type="submit" class="btn btn-primary" id = "submit" name = "submit">Update</button>
  <a  class = "btn btn-primary" href = "index.php"  style = "text-decoration:none;color:white;">Back</a>
</form>
</div>
<body>
</html>