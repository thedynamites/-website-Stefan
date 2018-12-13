 <!DOCTYPE html>
<html>
  <head>
    <title>AANBIEDINGEN</title>
        <a  href="SIER"></a>
    <link rel="stylesheet" type="text/css" href="style3.css"> 
  </head>
  <body>
    
    <?php 
include_once 'data.php'
 ?>
 <body><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">                                       
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Onze assortiment
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="sale.php">siervuurwerk</a></li>
      <li><a href="pakket.php">knalvuurwerk</a></li>
      <li><a href="assortiment.php">hele assortiment</a></li>
    </ul>
  </div>
</div>

    <style type="text/css">
            body {
                background-color: green;
      
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: cover;
            }
            #main {
                background: none;
            }
        </style>
 <header>
  <div class="main">
  <ul>
      <li><a  class="active" href="index.php">HOME</a></li>
           <li><a  href="pakket.php">SIERVUURWERK</a></li>
      <li><a  href="sale.php">KNALVUURWERK</a></li>
          <li><a  href="assortiment.php">HELE ASSORTIMENT</a></li>
            <li><a  href="aanbieding.php">AANBIEDINGEN</a></li>
      <li><a  class="contact" href="contact.php">CONTACT</a></li>
    </ul>
 <div class="card">
  <img src="https://anypos.o.auroraobjects.eu/835/article/1222.1539978531.png" alt="VUURWERKPAKKET" style="width:100%">
  <h1>Vuurwerkpakket danger</h1>
  <p class="price2"> <?php
    $sql = "SELECT id, Naam, prijs, voorraad FROM aanbiedingen where id = '1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "Artikelnr: " . $row['id'] . "<br>";
            echo "Naam: " . $row['Naam'] . "<br>";
            echo "Prijs: " . $row['prijs'] . "<br>";
            echo "Voorraad: " . $row['voorraad'] . "<br>";
    }
} else {
    echo "0 resultaten";
}

              ?>
  </p>
  <p>Vuurwerkpakket met verschillende soorte leuken vuurwerk</p>
  <p><button>Add to Cart</button></p>
   <div class="card">
  <img src="https://www.kadooken.be/img/p/6/7/6/676-thickbox_default.jpg" alt="VUURWERKPAKKET" style="width:100%">
  <h1>Vuurwerkpakket kids</h1>
  <p class="price2"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM aanbiedingen where id = '2'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "Artikelnr: " . $row['id'] . "<br>";
            echo "Naam: " . $row['Naam'] . "<br>";
            echo "Prijs: " . $row['prijs'] . "<br>";
            echo "Voorraad: " . $row['voorraad'] . "<br>";
    }
} else {
    echo "0 results";
}

              ?>
  <p>Vuurwerkpakket met verschillende soorte leuken vuurwerk</p>
  <p><button>Add to Cart</button></p>

     <div class="card">
  <img src="https://anypos.o.auroraobjects.eu/1072/article/7.1502814263.png" alt="VUURWERKPAKKET" style="width:100%">
  <h1>Vuurwerkpakket dragon</h1>
  <p class="price2"> <?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM aanbiedingen where id = '3'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "Artikelnr: " . $row['id'] . "<br>";
            echo "Naam: " . $row['Naam'] . "<br>";
            echo "Prijs: " . $row['prijs'] . "<br>";
            echo "Voorraad: " . $row['voorraad'] . "<br>";
    }
} else {
    echo "0 results";
}

              ?>
  <p>Vuurwerkpakket met verschillende soorte leuken vuurwerk</p>
  <p><button>Add to Cart</button></p>