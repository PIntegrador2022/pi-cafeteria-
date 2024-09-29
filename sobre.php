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

        <h1 class="title">Reviews de usuários</h1>

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


    <footer class="footer">
    <section class="grid">
        <div class="box">
            <img src="imagens/email-icon.png" alt="">
            <h3>Nosso e-mail</h3>
            <a href="mailto:marchiatto@gmail.com">marchiatto@gmail.com</a>
        </div>

        <div class="box">
            <img src="imagens/clock-icon.png" alt="">
            <h3>Horário de atendimento</h3>
            <p>07:00 até 18:00</p>
        </div>

        <div class="box">
            <img src="imagens/phone-icon.png" alt="">
            <h3>Nosso telefone</h3>
            <p>(19)9999-9999</p>
        </div>

        <div class="box">
            <img src="imagens/map-icon.png" alt="">
            <h3>Nosso endereço</h3>
            <p style=" font-size: 9.7px;">R. Cabo João dos Santos, 218 - Ribeirão, Amparo - SP</p>
            <!--
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2188.4022910630515!2d-46.770884880117244!3d-22.711908259793994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c92152bb74609d%3A0x65ed9e14c9c4bdd9!2sMARCHIATTO%20CAF%C3%89!5e0!3m2!1spt-BR!2sbr!4v1713478033849!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            -->
        </div>
        <div class="box-map">
             
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2188.4022910630515!2d-46.770884880117244!3d-22.711908259793994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c92152bb74609d%3A0x65ed9e14c9c4bdd9!2sMARCHIATTO%20CAF%C3%89!5e0!3m2!1spt-BR!2sbr!4v1713478033849!5m2!1spt-BR!2sbr" width="1160" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
</div>
    </section>
    <div class="credit">
        Criado por <span>Alunos Univesp | Projeto Integrador II</span>
    </div>
</footer>

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