<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCA</title>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background: rgb(11,1,34);background: radial-gradient(circle, rgba(11,1,34,1) 0%, rgba(44,17,78,1) 100%);" aria-label="Third navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample03">
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <div class="row align-items" id="itensnav">
                            <div class="col">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Loja</a>
                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Conta</a>
                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Preferências</a>
                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Ajuda</a>
                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">
                                        <img src="assets/user.png" width="10%" alt="">
                                    </a>
                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">
                                        <img src="assets/car.png" width="15%" alt="">
                                    </a>
                                </li>
                            </div>
                        </div>
                    </ul>

                    <form>
                        <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <br>

    <div id="carrosseltela">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/mgrising.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block" id="carrossel">
                            <h1 style="color: light-gray">Metal Gear Rising: Revengeance</h1>
                            <h4 style="color: green">60% de desconto</h4>
                            <h3>R$19,99</h3>
                            <p>Válido até 15 de maio</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/p5s.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block" id="carrossel">
                            <h1 style="color: light-gray">Persona 5 Strikers</h1>
                            <h4 style="color: green">Agora disponível</h4>
                            <h3>R$199,99</h3>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/hl.jpg" class="d-block w-100" alt="..." id="carrossel">
                        <div class="carousel-caption d-none d-md-block" id="carrossel">
                            <h1 style="color: light-gray">Hotline Miami</h1>
                            <h4 style="color: green">75% de desconto</h4>
                            <h3>R$3,99</h3>
                            <p>Válido até 15 de maio</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="jogosdestaq">
        <div class="container" id="jogosdestaq">
            <h3 style="color: white">Jogos em promoção</h3>
            <br>
            <div class="row">
                <div class="col">
                    <a href="">
                        <img src="assets/scj.jpg" width="100%" alt="">
                        <p style="color: white">Super Chicken Jumper</p>
                    </a>
                    <div class="d-flex flex-row-reverse">
                        <p style="color: white">⠀R$10,00</p>
                        <p style="text-decoration: line-through;">R$20,00</p>
                    </div>
                </div>
                <div class="col">
                    <a href="">
                        <img src="assets/scj.jpg" width="100%" alt="">
                        <p style="color: white">Super Chicken Jumper</p>
                    </a>
                    <div class="d-flex flex-row-reverse">
                        <p style="color: white">⠀R$10,00</p>
                        <p style="text-decoration: line-through;">R$20,00</p>
                    </div>
                </div>
                <div class="col">
                    <a href="">
                        <img src="assets/scj.jpg" width="100%" alt="">
                        <p style="color: white">Super Chicken Jumper</p>
                    </a>
                    <div class="d-flex flex-row-reverse">
                        <p style="color: white">⠀R$10,00</p>
                        <p style="text-decoration: line-through;">R$20,00</p>
                    </div>
                </div>
                <div class="col">
                    <a href="">
                        <img src="assets/scj.jpg" width="100%" alt="">
                        <p style="color: white">Super Chicken Jumper</p>
                    </a>
                    <div class="d-flex flex-row-reverse">
                        <p style="color: white">⠀R$10,00</p>
                        <p style="text-decoration: line-through;">R$20,00</p>
                    </div>
                </div>
                <div class="col">
                    <a href="">
                        <img src="assets/scj.jpg" width="100%" alt="">
                        <p style="color: white">Super Chicken Jumper</p>
                    </a>
                    <div class="d-flex flex-row-reverse">
                        <p style="color: white">⠀R$10,00</p>
                        <p style="text-decoration: line-through;">R$20,00</p>
                    </div>
                </div>
                <div class="col">
                    <a href="">
                        <img src="assets/scj.jpg" width="100%" alt="">
                        <p style="color: white">Super Chicken Jumper</p>
                    </a>
                    <div class="d-flex flex-row-reverse">
                        <p style="color: white">⠀R$10,00</p>
                        <p style="text-decoration: line-through;">R$20,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4" id="footer">
    <div class="col-md-4 d-flex align-items-center">

      <span class="text-muted">THERE WILL BE BLOODSHED</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>