 <!DOCTYPE html>
<html>
  <head>
    <title>contactpage</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> 
  </head>
  <body>
      <div class="main">
  <ul>
           <li><a  class="active" href="index.php">HOME</a></li>
           <li><a  href="pakket.php">SIERVUURWERK</a></li>
      <li><a  href="sale.php">KNALVUURWERK</a></li>
          <li><a  href="assortiment.php">HELE ASSORTIMENT</a></li>
            <li><a  href="aanbieding.php">AANBIEDINGEN</a></li>
      <li><a  class="contact" href="contact.php">CONTACT</a></li>
    </ul>
  </nav>
 <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Voor opmerkigen kunt u het formulier hieronder invullen:</p>
  </div>
  <div class="row">
    <div class="column">
    </div>
    <div class="column">
      <form action="/res.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Nederland">Nederland</option>
          <option value="Belgie">Belgie</option>
          <option value="Duitsland">Duitsland</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
  </div>
</header>
  </body>
</html>