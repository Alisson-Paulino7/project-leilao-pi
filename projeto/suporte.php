<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte Quem dá Mais!?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/suporte.css">

</head>
<body>
    
<header class="header">

    <a href="index.php" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="#review">review</a>
        <a href="#contato">contato</a>
        
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    
</header>


<section class="home" id="home">

    <div class="content">
        <h3>Suporte Quem Dá Mais!?</h3>
        <p>Aqui encontrará dados relacionados ao Suporte</p>
        <a href="#" class="btn">Saiba mais...</a>
    </div>

</section>


<section class="review" id="review">

    <h1 class="heading"> NOSSOS <span>CLIENTES</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>É bom. Comprei uma peixeira nova no leilão, fui partir uma carne e cortou até a mesa!</p>
            <p>   </p>
            <p>   </p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>Tiringa</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p> Olá Meus amigos, pode apostar que esse leilão é muito bom, comprei uma caixa de caneta azul e um microfone bem grande (lá ele). .</p>
            <p>   </p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Manuel Gomes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Não Gostuai...</p>
            <p>... Asmei</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>Rei do Kuduairo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>


<section class="contato" id="contato">

    <h1 class="heading"> <span>SOLICITE</span> CONTATO </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3031299674503!2d-39.31377462584139!3d-7.206216792799318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a178ad71080c59%3A0x5b2a22386c2711fd!2sCentro%20Universit%C3%A1rio%20Para%C3%ADso%20-%20UniFAP!5e0!3m2!1spt-BR!2sbr!4v1683835516014!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" ></iframe>

        <form action="">
            <h3>PREENCHA SEUS DADOS</h3>
                <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="EMAIL">
            </div>
            <div class="inputBox">
                <span class="fas fa-key"></span>
                <input type="password" placeholder="SENHA">
            </div>
            <input type="submit" value="Entrar" class="btn">
            <a href="cadastro.php" class="btn">Clique Aqui Caso não tenha Cadastro</a>
        </form>

    </div>

</section>



<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="https://www.linkedin.com/in/eduardo-sampaio-05b4ab247/" class="fab fa-github"></a>
        <a href="https://www.instagram.com/du_sampaio/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/eduardo-sampaio-05b4ab247/" class="fab fa-linkedin"></a>
    </div>

    <div class="links">
        <a href="index.html">home</a>      
        <a href="#review">review</a>
        <a href="#contato">contato</a>
       
    </div>

    <div class="credit">created by <span>Eduardo Sampaio</span> | all rights reserved</div>

</section>







<script src="js/script.js"></script>

</body>
</html>