<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Mural 33</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.html">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="./projeto4rafaela/cadastrar.php">Cadastro</a></li>
                        <li class="direita" class="nav-item"><a class="nav-link" href="./login/index.php">Login</a></li>
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" >Mural 33</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Galeria de Artes Online</p>
                </div>
            </div>
        </header>
</body>
</html>

<?php include_once'cabecalho.php'; ?>
<br><br>
   <h1>Cadastro de Cliente</h1> <br>

   <form class="cadastro" action="gravar.php" method="post">
          Nome do Autor:
         <input type="text" name="nome" 
          required/>
         <br/><br/>
          E-mail:
         <input type="text" name="email" 
          required/>
         <br/><br/>
          Nome da Obra:
         <input type="text" name="telefone" 
          required/>
         <br/><br/>
         Tamanho da Obra (pixel):
         <input type="text" name="telefone" 
          required/>
         <br/><br/>
         Redes Sociais:
         <input type="text" name="telefone" 
          required/>
         <br/><br/>
         Sinopse da Obra: <br>
         <textarea name="sinopse" id="" cols="30" rows="10"></textarea> <br><br>
         <input type="file"> <br><br>
         <input type="submit" value="Cadastrar"/>
         
         </form>
<?php include_once'rodape.php'; ?>
