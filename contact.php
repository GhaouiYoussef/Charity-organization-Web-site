
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
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
    <a href="#">
    <select onchange="window.location.href=this.value">
      <option value="" disabled selected>J'agis avec UEDS</option>
      <option value="fairedon.php">DONS matériel</option>
      <option value="benevolat.php">Bénévolat</option>
      <option value="don.php">DONS En nature</option>
    </select></a>
  </li>
                <li ><a href="contact.php" class="active">Contact </a></li> 
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



    <div class="photo">

<div class="titre">Contactez-nous</div>
<br>

        <p id="first">
           
            <span class="coor">  <img src="phone.png"> <strong> Téléphone : +216 24 975 201 </strong> </span>
        </p>
        <br>
        
        <p id="second">
                <img src="adressee.png">
                <span class="coor"> <strong>Adresse : 20, Avenue de l'Union 2080 -Ariana</span></strong>
          </p>
          <br>
          <p id="third">
            <span >
                <img src="email.png"> 
                <span class="coor"> <a  style="text-decoration: none; color: white; margin-left:5%"  href="mailto:asso.ueds@gmail.com"> 
                 <strong>  asso.ueds@gmail.com   </strong> </span> </a>
                </span>
      
</div>

<div class="grid-container">
    <div class="grid-item" style="background-color: rgba(226, 226, 233, 0.39);">  



        <div class="titre">Nous écrire</div>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="name"><h3>Nom :</h3></label>
            <input type="text" name="name" required>

            <label for="prenom"><h3>Prénom :</h3></label>
            <input type="text" name="prenom" required>

            <label for="email"><h3>E-mail :</h3></label>
            <input type="email" name="email" required>

            <label for="Adresse"><h3>Adresse :</h3></label>
            <input type="text" name="Adresse" required>
            <label for="name"><h3>Société :</h3></label>
            <input type="text" name="societe" >
            <label for="name"><h3>Objet :</h3></label>
            <input type="text" name="objet" >

            <h3>Message</h3>
                    <TEXTAREA NAME="comment" ROWS=5 COLS=60 placeholder="Votre message personnalisé">
         
                    </TEXTAREA>
                    <button type="submit">Envoyer</button>

</form>
        
<!--------------------------------------------------------->
<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['name'];
        $prenom = $_POST['prenom'];
        $comment=$_POST['comment'];
        $email = $_POST['email'];
        $societe=$_POST['societe'];
        $adresse=$_POST['Adresse'];
        $objet=$_POST['objet'];



       
        if (empty($name)) {
          echo "Name is empty";
        } else {
          $host = "localhost";
          $username = "root";
          $password = "";
          $dbname = "client_asso";
      
          // creating a connection
          $con = mysqli_connect($host, $username, $password, $dbname);
          $sql = "INSERT INTO contact (nom,prenom,mail,adresse,societe,objet,Message) VALUES ( '$name', '$prenom', '$email', '$adresse', '$societe', '$objet', '$comment')";
          $rs = mysqli_query($con, $sql);
          if(($rs)&& !empty($name)&& !empty($prenom)&& !empty($email)&& !empty($adresse)&& !empty($societe)&& !empty($objet)&& !empty($comment))
          {
              echo "Entries added!";
             
          }
        
          // close connection
          mysqli_close($con);
      
        
        }
      }
      ?>
      <!--------------------------------------------------------->

   
            </div>
   

        <div class="grid-item">      
        <iframe src="https://www.google.com/maps/d/embed?mid=11beEk3dv_UcSSo6uMGCNWnk11l-25pc&ehbc=2E312F" style="height: 70%;" ></iframe>
        </div>
  </div>


  <br>






<footer>
    <div class="footer-top">
        <h4>Ensemble nous changeons des vies</h4>
        <p> suivez nous : </p>  <a href="https://www.facebook.com/profile.php?id=100064683757417"> <img src="fb-icon.png">  </a>  
    </div>
<div class="footer-bottom">
    <span id="copyright"> Tous droits réservés © Association Un enfant,des sourires </span>
 </div>
</footer>

<script>
    const menuTrigger = document.querySelector(".menu-trigger")
    const nav = document.querySelector(".navbarre")

    menuTrigger.addEventListener('click',()=>{
    nav.classList.toggle('media-menu')
    })
</script>


</body>
</html>