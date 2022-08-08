<?php
$f_name = $_POST['f_name'];
$link = "https://leandrosu.github.io/CowSquad/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are the cow squad, stay tuned we are coming.">
    <meta name="keywords" content="Cow Squad, NFT, NFTs, Opensea">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/icon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cow Squad</title>
</head>
<body> 
 

    
    <header >
        <nav id="menu">
                <a href="index.html" ><div id="logo"></div></a> 
            <label for="show-menu" class="show-menu"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="show-menu" role="button">
            <ul id="menu">
                <li><a href="<?php echo"$f_name"; ?>">Home</a></li>
                <li><a href="<?php echo"$link"; ?>#cowsquad">Cow Squad</a></li>
                <li><a href="<?php echo"$link"; ?>#work-with-us">Work with us</a></li>
            </ul>
        </nav>
    </header> 

        
    <section id="banner">
        <div id="banner-image"></div>
        <div id="banner-text">
            <h1><?php echo"$f_name"; ?>,</a><br>
                Thanks for your contact!
                </h1>
            <h2>
                No worries, we back to you Soon. 
            </h2>
        </div>
    </section>
    

    <footer>
        <div id="footer-info">
           <p>© Copyright 2000-2022</p>
        </div>
        <ul id="footer-icons">
            <li><a href="https://cowsquad.xyz" target="_blank" rel="noopener" aria-label="Official Website"><i class="fa-solid fa-globe"></i></a></li>
            <li><a href="https://opensea.io/collection/cowsquad" target="_blank" rel="noopener" aria-label="Opensea"><i class="fa-regular fa-image"></i></i></a></li>
            <li><a href="https://twitter.com/cowsquad01" target="_blank" rel="noopener" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/cowsquad01/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
     </footer>

    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/3ea7232a00.js" crossorigin="anonymous"></script>
 </body>
</html>