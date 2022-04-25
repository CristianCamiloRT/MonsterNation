<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title>Monster Nation</title>

    <?= $this->Html->css(['Index']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container">
            <p class="logo">LogoMN</p>
            <nav>
                <a href="#">Sedes</a>
                <a href="#">Planes</a>
                <a href="./users">Monster</a>
                <a href="#">Contactos</a>
            </nav>
        </div>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="somosMonster">
        <div class="container">
            <div class="img-container"></div>
            <h2>Somos Monster Nation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ut molestiae suscipit quibusdam maiores
                ipsa deleniti, obcaecati aspernatur voluptatem quod, aliquid doloribus saepe optio quae asperiores
                necessitatibus ea molestias numquam!</p>
        </div>
    </section>


    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros Planes</h2>

            <div class="programas">

                <div class="carta">
                    <h3>Entrenamiento Oso</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque consectetur cum laborum ipsum
                        beatae ad earum fugit voluptate unde, necessitatibus ex ducimus deserunt numquam ratione rem
                        minus ut dolore maiores.</p>
                    <button>+info</button>
                </div>

                <div class="carta">
                    <h3>Entrenamiento Pantera</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque consectetur cum laborum ipsum
                        beatae ad earum fugit voluptate unde, necessitatibus ex ducimus deserunt numquam ratione rem
                        minus ut dolore maiores.</p>
                    <button>+info</button>
                </div>


                <div class="carta">
                    <h3>Entrenamiento Gorilla</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque consectetur cum laborum ipsum
                        beatae
                        ad earum fugit voluptate unde, necessitatibus ex ducimus deserunt numquam ratione rem minus ut
                        dolore maiores.</p>
                    <button>+info</button>
                </div>

            </div>
        </div>

    </section>


    <section id="sedes">


    </section>

    <section id="aplicaya">
        <h2>INSCRIBETE YA</h2>
        <button>Inscribete aqui</button>

    </section>

    <footer>
        <footer class="footer">
            <div class="grupo-1">
                <div class="box">
                    <h2>MONSTER NATION</h2>
                    <p>¿Quienes somos?</p>
                    <p>Sedes</p>
                    <p>Planes</p>
                    <p>Nuestros Monster</p>
                    <p>Contactos</p>
                    <h2>CONOCENOS</h2>
                    <p>Historia</p>
                    <p>Responsabilidad social</p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="#" class="facebook"></a>
                        <a href="#" class="instagram"></a>
                        <a href="#" class="twitter"></a>
                        <a href="#" class="youtube"></a>
                    </div>
                </div>
            </div>

            <div class="grupo-2">
                <small>&copy; 2022 <b>MonsterNation</b></small>
            </div>
        </footer>

    </footer>





</body>

</html>