<!DOCTYPE html>
<html>
  <head>
    <title>Fireworkshop</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet"> 
  </head>
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
                background-color: #0f0f0f;
                background-image: url(https://images.wagwalkingweb.com/media/articles/dog/fireworks-poisoning/fireworks-poisoning.jpg?auto=compress&fit=max);
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
  <nav>
    <div>     <form class="targett" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Nitraat - vuurwerk">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit" width="50" height="50" 
    src="https://previews.123rf.com/images/asmati/asmati1706/asmati170605898/80929972-shopping-cart-sign-vector-white-icon-with-soft-shadow-on-transparent-background-.jpg"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="cart.png">
</form>
</div>
  <div class="main">
    <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
            <ul>
           <li><a  class="active" href="index.php">HOME</a></li>
           <li><a  href="pakket.php">SIERVUURWERK</a></li>
      <li><a  href="sale.php">KNALVUURWERK</a></li>
          <li><a  href="assortiment.php">HELE ASSORTIMENT</a></li>
            <li><a  href="aanbieding.php">AANBIEDINGEN</a></li>
      <li><a  class="contact" href="contact.php">CONTACT</a></li>
    </ul>
  </nav>
  </div>
  <div class="title">
    <h1>WELKOM</h1><br>
    <p><i>De vuurwerkshop met de beste vuurwerk in jouw regio</i></p>
  </div>
</header>
  </body>
</html>