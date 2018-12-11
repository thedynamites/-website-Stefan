<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_REQUEST['Datum'])) {
// Escape user inputs for security
$Datum = mysqli_real_escape_string($conn, $_REQUEST['Datum']);
$Naam = mysqli_real_escape_string($conn, $_REQUEST['Naam']);
$Afspraak = mysqli_real_escape_string($conn, $_REQUEST['Afspraak']);

 
// Attempt insert query execution
$sql = "INSERT INTO afspraken2 (Datum, Naam, Afspraak) VALUES ('$Datum', '$Naam', '$Afspraak')";
if(mysqli_query($conn, $sql)){
    echo "<h5>Uw afspraak is toegevoegd in de database!</h5>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

$sql = "SELECT Datum, Naam, Afspraak FROM afspraken2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Datum"]. " - " . $row["Naam"]. " - " . $row["Afspraak"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>