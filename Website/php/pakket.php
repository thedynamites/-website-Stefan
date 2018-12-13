 <!DOCTYPE html>
<html>
  <head>
    <title>SIERVUURWERK</title>
        <a  href="SIER"></a>
    <link rel="stylesheet" type="text/css" href="style1.css"> 
  </head>
  <body><body><meta name="viewport" content="width=device-width, initial-scale=1">
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
include_once 'data.php'
 ?>
    <style type="text/css">
            body {
                background-color: green;
                background-image: url(https://png.pngtree.com/thumb_back/fw800/back_pic/00/04/41/685623ab7f6687f.jpg)
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
 <div class="card">
  <img src="https://www.bouwhuis.com/media/catalog/product/cache/1/image/500x500/9df78eab33525d08d6e5fb8d27136e95/8/0/8012_3.jpg" alt="Vuurwerk sterretjes" style="width:80%">
  <h1>Vuurwerk sterretjes</h1>
  <p class="price"><?php
    $sql = "SELECT id, Naam, prijs, voorraad FROM siervuurwerk where id = '1'";
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
  <p>leuken vuurwerk</p>
  <p><button>Add to Cart</button></p>
   <div class="card">
  <img src="https://www.ultragadgets.nl/contents/media/trektouwtje.jpg" alt="trektouwtje" style="width:100%">
  <h1>Trektouwtjes</h1>
  <p class="price"><?php
    $sql = "SELECT id, Naam, prijs, voorraad FROM siervuurwerk where id = '2'";
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
  <p>Vuurwerk</p>
  <p><button>Add to Cart</button></p>
     <div class="card">
  <img src="https://www.ballonnenparade.nl/Files/2/67000/67345/ProductPhotos/MaxContent/706317300.jpg" alt="ijsfostein" style="width:100%">
  <h1>ijsfostein</h1>
  <p class="price"><?php
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
    echo "0 resultaten";
}

              ?>
  </p>
  <p>Vuurwerk</p>
  <p><button>Add to Cart</button></p>
  <div class="card">
  <img src="https://anypos.o.auroraobjects.eu/18/article/1192.1511790936.png" alt="KNOCK OUT" style="width:100%">
  <h1>KNOCK OUT</h1>
  <p class="price">15.99</p>
  <p>Met een harde knal en mooi siervuurwerk</p>
  <p><button>Add to Cart</button></p>