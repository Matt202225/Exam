<html>
    <head>
        <title>List Of Songs</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        </head>

 <body>   
<div class = "container">
    <br><br>
      <a class="btn btn-primary" href="add.php" class = "text-light" style = "text-decoration: none;color:white;">Add song</a>
    <br><br>
    
  <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Artist</th>
                <th scope="col">Date Created</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
              include_once 'connect.php';

                // Define your SELECT query
                $select_songs = "SELECT * FROM songs";

                // Execute the query
                $result = $conn->query($select_songs);

                // Check if the query was successful
                if ($result) {
                    // Fetch data and output it
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $artist = $row['artist'];
                        $lyrics = $row['song_lyrics'];
                        $date_created = $row['date_created'];
                        echo ' 
                        <tr>
                        <td>'.$id.'</td>
                        <td>'.$title.'</td>
                        <td>'.$artist.'</td>
                        <td>'.$date_created.'</td>
                        <td>
                            <a  class = "btn btn-primary" href = "update.php?id='.$id.'"  style = "text-decoration:none;color:white;">Edit</a>
                            <a class = "btn btn-danger" href = "delete.php?id='.$id.'"  style = "text-decoration:none;color:white;">Delete</a>
                        </td>
                    </tr>';
                    }
                } else {
                    // Output an error message if the query fails
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
            ?>
            </tbody>
</table>
</div>
<body>
</html>