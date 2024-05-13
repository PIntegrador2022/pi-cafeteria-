<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['id_usuario'])){
   $id_usuario = $_SESSION['id_usuario'];
}else{
   $id_usuario = '';
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sobre</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/logo.jpg" type="image/x-icon">

</head>

<body>

    <?php include 'components/user_header.php'; ?>


    <div class="heading">
        <h3>Sobre nós</h3>
        <p><a href="index.php">home</a> <span> / sobre</span></p>
    </div>

    <section class="sobre">

        <div class="row">

            <div class="imagem">
                <img src="imagens/cafezinho.png" alt="">
            </div>

            <div class="conteudo">
                <h3>Por quer nos escolher?</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum
                    sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque
                    debitis nobis!</p>
                <a href="menu.php" class="btn">nosso menu</a>
            </div>

        </div>

    </section>


    <section class="steps">

        <h1 class="title">simples e rapido</h1>

        <div class="box-container">

            <div class="box">
                <img src="imagens/step-1.png" alt="">
                <h3>Faça o pedido</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
            </div>

            <div class="box">
                <img src="imagens/step-2.png" alt="">
                <h3>entrega rápida</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
            </div>

            <div class="box">
                <img src="imagens/step-3.png" alt="">
                <h3>aproveite nossos produtos</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
            </div>

        </div>

    </section>


    <section class="reviews">

        <h1 class="title">Reivews de usuários</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="imagens/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Felipe</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="imagens/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mônica</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="imagens/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Fernando</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="imagens/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Camila</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="imagens/pic-5.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Pedro</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="imagens/pic-6.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Aline</h3>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>


    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            700: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
    </script>

</body>

</html>