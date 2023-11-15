@extends('layouts.app')

@section('content')
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="m1" class="container mt-4">
                    <img src="/img/logo.png" alt="Logo de la empresa">
                </div>

                <div id="m2" class="container mt-4">
                    <h2 id="aboutMe">Sobre nosotros:</h2>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde ipsam doloremque optio quibusdam maiores
                    consectetur nobis, accusantium laborum temporibus placeat, eius maxime alias doloribus natus aperiam libero fuga
                    distinctio necessitatibus.</p>
                </div>

                <div id="m3">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="servicios">
                            <h2>Nuestros servicios:</h1>
                            <p class="container mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                            are going to use a passage of Lorem Ipsum, you need to be sure there Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Iusto voluptate vel, eos repellendus nulla ipsa dolorum earum consectetur
                            deleniti facere ducimus quibusdam autem culpa distinctio in corporis eligendi ex aspernatur. Lorem ipsum
                            dolor sit amet consectetur, adipisicing elit. Molestiae, facere unde magnam accusantium soluta nesciunt
                            ipsam quaerat velit, quidem, eveniet amet? Sed quibusdam, deleniti doloremque molestiae dolores aspernatur
                            iure placeat!</p>
                        </div>
                        </div>
                        <div class="col-md-6">

                        <div class="image_1 padding_0"><img src="/img/LogoFondo.png"></div>

                        </div>
                    </div>
                    </div>
                </div>

                <div id="m4" class="container mt-5">
                    <div class="container text-center">
                    <div class="row">
                        <h2>CONTACTANOS</h2>
                        <div class="col-6">
                        <div class="iconosMain">
                            <i  class="fa-regular fa-envelope" style="color: #000000;"></i>
                            <span > masbiomas@email.com</span>
                        </div>
                        <div class="iconosMain separador">
                            <i class="fa-brands fa-instagram" style="color: #000000;"></i>
                            <a target="_blank" href="https://www.instagram.com/mas_biomas_oficial/"> Instagram</a>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="iconosMain">
                            <i class="fa-solid fa-phone" style="color: #000000;"></i>
                            <span> 3195694054 </span>
                        </div>
                        <div class="iconosMain separador">
                            <i class="fa-brands fa-linkedin" style="color: #000000;"></i>
                            <a target="_blank" href="https://co.linkedin.com/company/m%C3%A1s-biomas-s-a-s"> linkedin</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
