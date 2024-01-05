<?php
include_once 'connect.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

// SQL query to delete data
$delete_song = "DELETE FROM songs WHERE id=$id";

// Execute the query
if ($conn->query($delete_song) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " .$add_query . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
}

?>