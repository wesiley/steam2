<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam 2-Administrador</title>
    <!--@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?PHP include_once ("header.php") ?>
    <br>

  <div class="container" id="telageral">
    <div class="jogosdestaq">
        <div class="container" id="jogosdestaq">

          <div class="container" id="titulo">
            Adicionando o jogo
          </div>

      <br>
          
         <form id="inputid" class="row-2" action="create.php" method="POST">
           
                <div class="col-md-6 float-md-end mb-3 ms-md-3">
        <label for="imagem" class="form-label">Capa  do jogo</label>        
                 
  <input type="file" class="form-control" id="inputGroupFile02">
 
</div>
                <div class="col-md-5"> 
                        <label for="nomejogo" class="form-label">Nome do jogo</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Escreva..." name="nome">
                    </div>
                  <div class="w-100"></div>
                <div class="col-md-5"> 
                        <label for="desc" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Escreva..." name="desc">
                    </div>
                  <div class="w-100"></div>
                    <div class="col-md-3">
                        <label for="inputState" class="form-label">Plataforma</label>
                        <select id="inputState" class="form-select" name="plat">
                            <option selected>Escolha</option>
                            <option>Windows</option>
                            <option>MacOs</option>
                            <option>Linux</option>
                        </select>
                    </div>
                  <div class="w-100"></div>
                    <div class="col-md-3">
                        <label for="inputState" class="form-label">Tags</label>
                        <select id="inputState" class="form-select" name="tag">
                            <option selected>Escolha</option>
                            <option>FPS</option>
                            <option>ADULTO</option>
                            <option>INFANTIL</option>
                        </select>
                    </div>
                  <div class="w-100"></div>
                    <div class="col-md-3">
                        <label for="inputCity" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="inputCity" name="valor">
                    </div>
                    </div>
                      <div class="col-md align-self-end">
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

    <?php include_once ("footer.php"); ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>