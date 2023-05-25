
<!DOCTYPE html>
<html>
<head>
    <title>FAIRE UN DON</title>
    <link rel="stylesheet" type="text/css" href="paiementenligne.css">
</head>
<body>


    <header class="header-area">
        <nav class="main-nav">
            <a href="indexvf.php" class="logo">
                <img src="logo.jpg" >
            </a>
            <div class="navbarre">
            <ul class="nav">
                <li class="accueil"><a href="indexvf.php" >accueil</a></li>
                <li><a href="apropos.php">A propos de nous</a></li>
                <li class=><a href="Actualités.php">Actualités</a></li>

<li class="dropdown">
    <a href="#" class="active">
    <select onchange="window.location.href=this.value">
      <option value="" disabled selected>J'agis avec UEDS</option>
      <option value="fairedon.php">DONS matériel</option>
      <option value="benevolat.php">Bénévolat</option>
      <option value="don.php">DONS En nature</option>
    </select></a>
  </li>
                <li class=><a href="contact.php">Contact </a></li> 
            </ul>  
        </div>      
            <img src="menu.png" class='menu-trigger'>
            </a>
        </nav>
</div>
</header>
<br><br>



<br>
<br>

    <main>
        <div class="titre">Faire un don</div>
        <br>
        <br>

        <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="amount"> Montant :</label>
            <input type="number" id="amount" name="amount" min="0" step="0.01" required>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" >
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" >
            <label for="card">Numéro de carte :</label>
            <input type="number" id="card" name="card" min="1000000000000000" max="9999999999999999" step="1" required>
            <label for="expiry">Date d'expiration :</label>
            <input type="month" id="expiry" name="expiry" required>
            <label for="cvv">CVV :</label>
            <input type="number" id="cvv" name="cvv" min="101" max="998" step="1" required>


            <!--condition sur les inputs-->
  



    



            <button type="submit">Faire un don</button>
        </form>
        <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $amount = $_POST['amount'];
        $email = $_POST['email'];
        $card = $_POST['card'];
        $expiry = $_POST['expiry'];
        $expiry = date('Y-m-d', strtotime($expiry));
        $cvv = $_POST['cvv'];
        $name = $_POST['name'];
        if((empty($name))&& (empty($email) ))
          {
            $email = "Anonyme";
            $name = "Anonyme";
             
          }
        //parite db
          $host = "localhost";
          $username = "root";
          $password = "";
          $dbname = "client_asso";
      
          // creating a connection
          $con = mysqli_connect($host, $username, $password, $dbname);
          
          $sql = "INSERT INTO payement (nom,Amount,email,card_nb,date_exp,cvv) VALUES ('$name' ,'$amount' ,'$email','$card','$expiry','$cvv' )";
          $rs = mysqli_query($con, $sql);
          if(($rs)&& !empty($name)&& !empty($amount)&& !empty($email)&& !empty($card)&& !empty($expiry)&& !empty($cvv))
          {
              echo "Entries added!";
             
          }
        
          // close connection
          mysqli_close($con);
      
          echo $name;
        
      }
      ?>
    </main>

    <script>
        const menuTrigger = document.querySelector(".menu-trigger")
        const nav = document.querySelector(".navbarre")
 
        menuTrigger.addEventListener('click',()=>{
        nav.classList.toggle('media-menu')
        })
</script>
    <footer>
      <div class="footer-top">
          <h4>Ensemble nous changeons des vies</h4>
          <p> suivez nous : </p>  <a href="https://www.facebook.com/profile.php?id=100064683757417"> <img src="fb-icon.png">  </a>  
      </div>
  <div class="footer-bottom">
      <span id="copyright"> Tous droits réservés © Association Un enfant,des sourires </span>
   </div>
  </footer>


</body>
</html>