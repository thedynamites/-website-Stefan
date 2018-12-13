<!DOCTYPE html>
<html>
  <head>
    <title>HELE ASSORTIMENT</title>
        <a  href="assortiment.html"></a>
    <link rel="stylesheet" type="text/css" href="style1=.css"> 
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
    include 'data.php';
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
      <li><a  class="active" href="index.php">HOME</a></li>
           <li><a  href="pakket.php">SIERVUURWERK</a></li>
      <li><a  href="sale.php">KNALVUURWERK</a></li>
          <li><a  href="assortiment.php">HELE ASSORTIMENT</a></li>
            <li><a  href="aanbieding.php">AANBIEDINGEN</a></li>
      <li><a  class="contact" href="contact.php">CONTACT</a></li>
    </ul>
  </div>

 <div class="card">
  <img src="http://www.boom.hr/images/orion-pet-raz2-15.jpg" alt="BOOM" style="width:25%">
  <h1>BOOM nitraten</h1>
  <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '1'";
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
  <p>Boom nitraat met een lekkere knal</p>
  <p><button>Add to Cart</button></p>

      <div class="card">
      <img src="https://anypos-sbo.o.auroraobjects.eu/2/article/4228.1449053345.png" alt="THUNDER KING" style="width:25%">
      <h1>THUNDER KING</h1>
      <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '2'";
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
   
   <div class="card">
  <img src="https://anypos.o.auroraobjects.eu/18/article/1192.1511790936.png" alt="KNOCK OUT" style="width:25%">
  <h1>KNOCK OUT</h1>
  <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '3'";
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
  <p>Met een harde knal en mooi siervuurwerk</p>
  <p><button>Add to Cart</button></p>
     
     <div class="card">
  <img src="https://www.goudvuur.nl/images/gouda-rotjes-astronaut.png" alt="gouda-rotjes-astronaut" style="width:25%">
  <h1>Astronaut</h1>
  <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '4'";
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
  <p>Gouda rotjes</p>
  <p><button>Add to Cart</button></p>
   <img src="https://www.rowyvuurwerk.nl/imagestore/product/98/dragon-bombs-kanonslagen-astronauten-483.png" alt="Dragon" style="width:25%">
  <h1>DRAGON BOMB</h1>
  <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '5'";
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
  <p>Dragon Bombs</p>
  <p><button>Add to Cart</button></p>
  
   <div class="card">
  <img src="https://anypos.o.auroraobjects.eu/835/article/1222.1539978531.png" alt="VUURWERKPAKKET" style="width:25%">
  <h1>Vuurwerkpakket</h1>
  <p class="price"><?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '6'";
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
  <img src="https://www.kadooken.be/img/p/6/7/6/676-thickbox_default.jpg" alt="VUURWERKPAKKET" style="width:25%">
  <h1> Friendly Vuurwerkpakket</h1>
  <p class="price"> <?php
  $sql = "SELECT id, Naam, prijs, voorraad FROM hele_assortiment where id = '7'";
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
</div> 
</header>
  </body>
</html>