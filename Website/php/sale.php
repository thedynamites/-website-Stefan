<!DOCTYPE html>
<html>
  <head>
    <title>KNALVUURWERK</title>
        <a  href="KNALVUURWERK"></a>
    <link rel="stylesheet" type="text/css" href="style1.css"> 
  </head>
  <body>
    <body><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> <style type="text/css">
            body {
                background-color: #0f0f0f;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: cover;
            }
            #main {
                background: none;
            }
        </style>

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
        <?php 
include_once 'data.php'
 ?>
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
        <ul>
           <li><a  class="active" href="index.php">HOME</a></li>
           <li><a  href="pakket.php">SIERVUURWERK</a></li>
      <li><a  href="sale.php">KNALVUURWERK</a></li>
          <li><a  href="assortiment.php">HELE ASSORTIMENT</a></li>
            <li><a  href="aanbieding.php">AANBIEDINGEN</a></li>
      <li><a  class="contact" href="contact.php">CONTACT</a></li>
    </ul>
 <div class="card2">
  <img src="https://www.vuurwerktoppers.nl/uploads/product-assets/681/57f223a605df0_1000x1000.jpg" alt="KING SIZE" style="width:25%">
  <h1>KING SIZE</h1>
  <p class="price2"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM knalvuurwerk where id = '1'";
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

   <div class="card2">
  <img src="https://anypos-sbo.o.auroraobjects.eu/13/article/3589.1445503258.png" alt="BATTLE ANGLES" style="width:25%">
  <h1>BATTLE ANGLES</h1>
  <p class="price2"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM knalvuurwerk where id = '2'";
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

     <div class="card2">
  <img src="https://vuurwerk-vergelijken.nl/img/producten/26/big-momma.png" alt="BIG big-momma" style="width:25%">
  <h1>BIG MOMMA</h1>
  <p class="price2"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM knalvuurwerk where id = '3'";
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

 <div class="card2">
      <img src="https://anypos-sbo.o.auroraobjects.eu/2/article/4228.1449053345.png" alt="THUNDER KING" style="width:25%">
      <h1>THUNDER KING</h1>
      <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM knalvuurwerk where id = '4'";
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
      <p>Thunder king nitraten</p>
      <p><button>Add to Cart</button></p>

           <div class="card2">
  <img src="https://www.goudvuur.nl/images/gouda-rotjes-astronaut.png" alt="gouda-rotjes-astronaut" style="width:25%">
  <h1>Astronaut</h1>
  <p class="price"><?php
    $sql = "SELECT id, Naam, prijs, voorraad FROM knalvuurwerk where id = '5'";
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
  <p>Gouda rotjes</p>
  <p><button>Add to Cart</button></p>

            <div class="card2">
   <img src="https://www.rowyvuurwerk.nl/imagestore/product/98/dragon-bombs-kanonslagen-astronauten-483.png" alt="Dragon" style="width:25%">
  <h1>DRAGON BOMB</h1>
  <p class="price"><?php
    $sql = "SELECT id, Naam, prijs, voorraad FROM knalvuurwerk where id = '6'";
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
  <p>Dragon Bombs</p>
  <p><button>Add to Cart</button></p>