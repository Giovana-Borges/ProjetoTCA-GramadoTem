<?php
require 'conexao.php';

$lista = [];
$sql =$pdo->query("SELECT * FROM ar_livre");

if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gramado Tem</title>
  <link rel="icon" href="../src/img/icone_braso_prefeitura/brasao_gramado.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../src/style.css">
  <link rel="stylesheet" type="text/css" href="../src/ambientes.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand fonte-titulo cor-especial" href="#">Gramado Tem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar Local" aria-label="Search">
          <button class="btn borda-botao-cor-especial cor-especial " type="submit">Pesquisar</button>
        </form>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            
          <li><a class="nav-link" href="../Home.html">Início</a></li>
           <li><a class="nav-link" href="../cadastrar.php">Cadastro</a></li>
           <li><a class="nav-link" href="../login.php">Login</a></li>
           <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-quem_somos">Quem somos</a></li>
           
           </ul>
        </div>
      </div>
    </nav> 
  </header> 
  
  <main class="cards cor-de-fundo">

   <section class="container-fluid cor-de-fundo " id="ambientes">
     <div class="row justify-content-center">
      <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
        <img src="../src/img/alimentacao_cards/st_gallen.card.png" class=" card-img-top card-posicao-imagem" alt="">
        <div class="card-body">
          <h5 class="card-title titulo_card">St. Gallen Restaurant</h5>
          <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p> 
          <a data-bs-toggle="modal" data-bs-target="#modal-gallen" href="#" class="btn botao botao-cor-especial">Ver mais</a>
        </div>
      </article>
    

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/restaurante_hoppner.card.png" class=" card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card"> Restaurante Höppner</h5>
        <p class="card-text"> Restaurante de luxo em um hotel com decoração clássica, especializado em pratos e vinhos tradicionais da Alemanha.</p>
          <p class="card-text"> Faixa de preço: $$$ <br> &#9733; &#9733; &#9733; &#9733;  4,8 (1072 avaliações) </p>
          <p class="card-text">Endereço: R. Pedro Candiago, 364 - Planalto, Gramado - RS, 95670-000 </p>
        <a data-bs-toggle="modal" data-bs-target="#modal-hoppner" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/casa_di_ pietro.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Casa Di Pietro </h5>
        <p class="card-text"> Restaurante rústico-elegante e intimista tem menu internacional diversificado, com buffet de sopas no jantar.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,5 (1770 avaliações) </p>
          <p class="card-text">Endereço:R. Pedro Benetti, 5 - Centro, Gramado - RS, 95670-000</p>
        <a  data-bs-toggle="modal" data-bs-target="#modal-pietro" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/nonno_mio.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Nonno Mio</h5>
        <p class="card-text"> Receitas de pratos típicos, de descendentes de italianos e alemães, em ambiente clássico do velho continente.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,6 (1968 avaliações) </p>
          <p class="card-text">Endereço:Av. Borges de Medeiros, 2070 - Planalto, Gramado - RS, 95670-000</p>
        <a  data-bs-toggle="modal" data-bs-target="#modal-nonno" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/le _chalet.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Le Chalet de La Fondue</h5>
        <p class="card-text"> Fondues de carne, queijo e chocolate servidos em um salão romântico com mobiliário de madeira.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,5 (1396 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1297 - Centro, Gramado - RS, 95670-000</p>
        <a  data-bs-toggle="modal" data-bs-target="#modal-lechalet" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/ristorante_tomasini.card.png" class="card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card"> Ristorante Tomasini</h5>
        <p class="card-text"> Cardápio de fondues e carnes, além de massas, sopas e vinhos, em casa tradicional com ambientes aconchegantes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,6 (1912 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1189 - Centro, Gramado - RS, 95670-000</p>
        <a  data-bs-toggle="modal" data-bs-target="#modal-tomasini" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/cantina_pastasciutta.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Cantina Pastasciutta </h5>
        <p class="card-text">Área de buffet para entradas, além de vários combos de massas e molhos, em um espaço com bandeiras da Itália.</p>
          <p class="card-text"> Faixa de preço: $$$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (6073 avaliações) </p>
          <p class="card-text">Endereço:Av. Borges de Medeiros, 2083 - Centro, Gramado - RS, 95670-000</p>
        <a data-bs-toggle="modal" data-bs-target="#modal-pastasciutta" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/bela_vista.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Bela Vista Café Colonial </h5>
        <p class="card-text"> É considerado o 1.º café colonial do Brasil. O café colonial Bela Vista foi eleito um dos 1000 lugares para se conhecer antes de morrer.</p>
          <p class="card-text"> Faixa de preço: $$$ <br> &#9733; &#9733; &#9733; &#9733;  4,4 (8.989 avaliações) </p>
          <p class="card-text">Endereço: Av. das Hortênsias, 3500 – Vila Suíça, Gramado – RS, 95670-000</p>
        <a  data-bs-toggle="modal" data-bs-target="#modal-bela" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  
    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/alimentacao_cards/cafe_coelho.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Café Coelho Colonial</h5>
        <p class="card-text">  Oferece tudo aquilo que um bom café colonial precisa ter: frios, pães, bolos, croquetes, pastel, linguiça, pizza, tortas, bebidas quentes e geladas e muito mais.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,5 (3.134) avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, R. Vigilante, 5433, Gramado – RS, 95670-000</p>
        <a  data-bs-toggle="modal" data-bs-target="#modal-coelho" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
   
    

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/torre_cafe.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Torre Café Colonial</h5>
      <p class="card-text"> O Torre Café Colonial está sempre movimentado e agrada tanto por causa de sua interessante arquitetura até, claro, pelos incríveis quitutes que oferece.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,0 (3983 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortências, 2174 – Vila Suíça, Gramado – RS, 95670-000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-torre" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/gramado_cafe.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Gramado Café Colonial</h5>
      <p class="card-text">Além do fácil acesso e de possuir estacionamento, o café se destaca pelo cardápio que mantém as tradicionais receitas dos imigrantes alemães e italianos.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,6 (2932 avaliações) </p>
          <p class="card-text">Endereço:Av. Don Luiz Guanella, 1168 – Vila Suíça, Canela – RS, 95680-000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-gramado" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/cafe_gramberry.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Café Colonial Gramberry</h5>
      <p class="card-text"> São anos de história, onde buscam a perfeição, aprimorando o atendimento e qualidade em geral. Na mesa são servidos pratos quentes bem interessantes, como polenta frita, bolinho de arroz, lombinho de porco e frango a passarinho.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,1 (975  avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortências, R. Vigilante, 5553, Gramado - RS, 95670-000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-gramberry" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <!--FIZ ATE AQUI-->

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/cafe_ramm.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Café Típico Família Ramm </h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-ramm" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/della_nonna.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Caffé Della Nonna</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-nonna" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/lugano_chocolates.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Lugano Chocolates</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-lugano" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/chocolates_florybal.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">A Fantástica Casa de Chocolates Florybal</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-florybal" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/planalto.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Chocolate Planalto</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-planalto" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/chocolates_chocoa.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Chocolates Chocoá</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-chocoa" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/chocolates_prawer.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Chocolates Prawer</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-prawer" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/alimentacao_cards/caracol_chocolates.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Caracol Chocolates Boutique</h5>
      <p class="card-text"> Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes.</p>
          <p class="card-text"> Faixa de preço: $$ <br> &#9733; &#9733; &#9733; &#9733;  4,7 (2236 avaliações) </p>
          <p class="card-text">Endereço:Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
      <a  data-bs-toggle="modal" data-bs-target="#modal-caracol" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  

   </div>
   </section> 

</main>

<footer class="bg-white p-3">
  <ul class="rodape ">
   <li> <p class="p-rodape">Fone: (54)32860220
      <br>Av. das Hortênsias, 2029 - Centro - Gramado
      <br> E-mail:<a class="cor-especial" href="mailto:eduardazingano@gmail.com">turismo@gramado.rs.gov.br</a></p>
   </li>  
  
   <li>
     <a href="https://www.facebook.com/prefeituradegramado"><img class="imagem-face-rodape" src="../src/img/rodape/face_icon.png" ></a>
   </li>
  
   <li>
    <a href="https://www.instagram.com/prefeituradegramado/"><img class="imagem-insta-rodape" src="../src/img/rodape/insta_icon.png" ></a>
  </li>
  </ul> 

  <p class="copyright"> 	
    &copy; Gramado Tem - 2022</p>
  
  <img src="../src/img/rodape/logo_gramado.png" class="imagem-logo-rodape">
  
  
  </footer>

<div class="modal fade" id="modal-quem_somos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-titulo" id="exampleModalLabel">Quem somos?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <p>O app "Gramado Tem" é uma iniciativa da Secretaria de <br>
          Turismo da cidade de Gramado/RS para potencializar o turismo na região.</p>

        <p>Institucional:
        Compete à Secretaria Municipal de Turismo: atrair investimentos para o desenvolvimento do turismo no município;<br>
        articular a promoção institucional da cidade no país e no exterior; 
        impulsionar ações que visem a integração<br> 
        das atividades do setor de turismo com a região; compreendendo destinos, roteiros e atividades turísticas dos <br>
        municípios integrados; estimular e participar de comitês ou fóruns municipais, regionais, estaduais e federais <br>
        que visem o desenvolvimento turístico da Região; incentivar a interação com entidades públicas e privadas, <br>
        organizações não governamentais e organizações da sociedade civil de interesse público, nacionais <br>  
        e internacionais, com o objetivo de incrementar o intercâmbio de novas tecnologias de desenvolvimento<br> 
        turístico; viabilizar a formação e a capacitação dos profissionais que atuam na área de turismo,<br>
        visando a melhoria da qualidade e, da produtividade dos <br>
        serviços prestados aos turistas; fomentar a captação e a <br>
        geração de eventos, nacionais e internacionais, no sentido de <br>
        minimizar os efeitos da sazonalidade da atividade turística; coordenar, monitorar e acompanhar as ações dos programas <br>
        da Política de Turismo do Estado e União; <br> 
       <p> responder demandas de Protocolo, Ouvidoria Fala Cidadão de sua Secretaria; realizar todos os procedimentos<br> 
        definidos pela Norma ISO 9001.</p>
        </p>
        <p>  
     <br>Av. das Hortênsias, 2029 - Centro - Gramado <br>
       Fone: (54)32860220 <br>
       E-mail:<a class="cor-especial" href="mailto:turismo@gramado.rs.gov.br">turismo@gramado.rs.gov.br</a>
      </p> 
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!--Modal cards-->

<div class="modal fade" id="modal-gallen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">St.Gallen Restaurant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/gallen1.jpg" class="d-block w-100 modal-carrosel" alt="">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gallen2.jpg" class="d-block w-100 modal-carrosel" alt="">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gallen3.jpg" class="d-block w-100 modal-carrosel" alt="">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gallen4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class=" descricao" >Restaurante elegante de culinária germano brasileira com fondue famoso e joelho de porco, além de chopes. 


              Desde 1996, St. Gallen Restaurant serve a melhor fondue de Gramado (especialidade da casa), confirmado por inúmeros prêmios recebidos no transcorrer destes anos. Pode ser servida a la carte ou por rodízio.
               <p></p>
              Com um cardápio especializado onde ofertamos aos clientes uma experiência gastronômica diferenciada, servimos pratos desde entradas frias ou quentes, aos pratos individuais para uma ou duas pessoas de carne, frango, peixe ou camarão, até o risoto e as massas, e claro, nunca esquecendo da culinária suíça e alemã.
              </div>


              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. das Hortênsias, 1122 - Centro, Gramado - RS, 95670000</p>
              <p><b>Avaliações:</b> 2236, &#9733; 4,7 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à quinta (das 18:00 às 00:00) sexta à domingo e feriados (das 11:30 às 00:00)</p>
              <p><b>Telefone:</b> (54) 32862519</p>
              <p><b>Valor:</b> Consultar site/Telefone </p>
              <p><b>Site:</b> <a href="http://www.stgallen.com.br/website/">http://www.stgallen.com.br/website/</a>  </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13906.244564481776!2d-50.8784709!3d-29.3831365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90ef10c90c636d4e!2sSt.%20Gallen%20Restaurant!5e0!3m2!1spt-BR!2sbr!4v1644466972438!5m2!1spt-BR!2sbr"  width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!-------->

<div class="modal fade" id="modal-hoppner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Restaurante Höppner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/hoppner1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/hoppner2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/hoppner3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/hoppner4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao">Restaurante de luxo em um hotel com decoração clássica, especializado em pratos e vinhos tradicionais da Alemanha.

              Os dois ambientes do Restaurante Höppner cuidadosamente decorados e climatizados, criam a atmosfera perfeita para o prazer da gastronomia.<p></p> As sugestões de nosso cardápio são preparadas por chefs especializados em satisfazer os mais finos gostos, onde se destaca nossa especialidade na cozinha alemã. Os terraços externos e o Gazebo completam o encantamento do ambiente, onde muitas festas de casamento e aniversário são agendadas todos os anos, tornando-os eventos inesquecíveis. A nossa equipe de colaboradores, está à sua espera para ajudá-lo a desfrutar plenamente todos os momentos da sua estadia.
              </div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> R. Pedro Candiago, 364 - Planalto, Gramado - RS, 95670-000</p>
              <p><b>Localizado em:</b> Hotel Ritta Höppner</p>
              <p><b>Avaliações:</b> 1072, &#9733; 4,8 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à domingo (das 07:00 às 10:30 - 12:00 às 23:00) possui cardápio à la carte e chá da tarde diariamente (sujeito a reservas)</p>
              <p><b>Telefone:</b> (54) 3286-1334 - Whatsapp (54) 99952-3545</p>
              <p><b>Valor:</b> Consultar site/Telefone </p>
              <p><b>Site: </b><a href="https://www.rittahoppner.com.br/restaurante">https://www.rittahoppner.com.br/restaurante</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.5186540473974!2d-50.87898448522147!3d-29.384380007848687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193245f9a87049%3A0xec79e01ddeb6ea4c!2sRestaurante%20H%C3%B6ppner!5e0!3m2!1spt-BR!2sbr!4v1644467524719!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!--------->

<div class="modal fade" id="modal-pietro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Casa Di Pietro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/pietro1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/pietro3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/pietro2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/pietro4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Restaurante rústico-elegante e intimista tem menu internacional diversificado, com buffet de sopas no jantar.

              Desde 2000, a Casa Di Pietro preserva o seu estilo que valoriza a forma saudável de consumir alimentos a comida artesanal. Um estilo de comida com essência, muita responsabilidade e amor em todo processo produtivo. <p></p>Comida artesanal com monitoramento constante desde a origem da matéria prima, a seleção dos ingredientes, o desenvolvimento de produtores locais que possuem safras restritas, a valorização dos funcionários até o preparo dos pratos que vão até a mesa. Comida artesanal com a consistência de uma equipe responsável e dedicada para consolidar a tradição de uma casa que figura entre as opções gastronômicas de Gramado, como um dos restaurantes mais concorridos e aprazíveis da cidade.
              </div> 
               
              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> R. Pedro Benetti, 5 - Centro, Gramado - RS, 95670-000</p>
              <p><b> Avaliações:</b> 1770, &#9733; 4,5 estrelas</p>
              <p><b>Horário de Funcionamento:</b>  segunda à domingo (das 11:30 às 15:00) e segunda a sábado (das 18:30 às 23:00)</p>
              <p><b>Telefone:</b> (54) 3286 4077</p>
              <p><b>Valor:</b> Consultar site/Telefone</p>
              <p><b>Site:</b> <a href="https://dipietro.com.br/casadipietro">https://dipietro.com.br/casadipietro</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.6780727636906!2d-50.87647578522152!3d-29.37971390763619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519324528585f2f%3A0x8dc4fed8473a7eb7!2sCasa%20Di%20Pietro!5e0!3m2!1spt-BR!2sbr!4v1644467582460!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!----->

<div class="modal fade" id="modal-nonno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nonno Mio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/nonno1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/nonno2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/nonno3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/nonno4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao"> Receitas de pratos típicos, de descendentes de italianos e alemães, em ambiente clássico do velho continente

              O toque diferenciado do Nonno está em toda a parte e em cada detalhe. Desde as receitas elaboradas, com uma pitada a mais de sabor, aos ambientes charmosos, bem decorados e em um local muito bem localizado. O Nonno Mio, restaurante filiado à Associação da Boa Lembrança, é uma casa que preza pela qualidade e tradição desde 1982 servindo o tradicional Galeto ao Primo Canto e pratos especiais no cardápio. 
              </div> 

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. Borges de Medeiros, 2070 - Planalto, Gramado - RS, 95670-000</p>
              <p><b> Avaliações:</b> 1968, &#9733; 4,6 estrelas</p>
              <p><b>Horário de Funcionamento:</b>  segunda à domingo (das 11:30 às 22:30)</p>
              <p><b>Telefone:</b> (54) 3286-1252</p>
              <p><b>Valor:</b> Consultar site/Telefone </p>
              <p><b>Site:</b> <a href="https://nonnomio.com.br/nonnomio">https://nonnomio.com.br/nonnomio</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.5334451770495!2d-50.874393685221406!3d-29.383947107829048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193244044d012f%3A0x54f3cb00f1da23d3!2sNonno%20Mio!5e0!3m2!1spt-BR!2sbr!4v1644467623819!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>

<div class="modal fade" id="modal-lechalet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Le Chalet de La Fondue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/lechalet1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/lechalet2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/lechalet3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/lechalet4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Fondues de carne, queijo e chocolate servidos em um salão romântico com mobiliário de madeira.

              Um charmoso chalé, típico dos alpes suíços, localizado em um dos locais mais belos da cidade, no centro de Gramado, com vista para dois cartões postais da cidade, a igreja matriz e a igreja do Relógio. Atualmente o restaurante coleciona inúmeras premiações por sua qualidade e tradicionalismo que faz com que o Le Chalet esteja sempre em evidência.
              </div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. das Hortênsias, 1297 - Centro, Gramado - RS, 95670-000</p>
              <p><b> Avaliações:</b> 1400, &#9733; 4,5 estrelas</p>
              <p><b>Horário de Funcionamento:</b>  segunda à domingo (das 11:30 às 22:30)</p>
              <p><b>Telefone:</b> (54) 32862474</p>
              <p><b>Valor:</b> Consultar site/Telefone </p>
              <p><b>Site:</b> <a href="https://lechaletdelafondue.com/">"https://lechaletdelafondue.com/"</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.644466274098!2d-50.87721298522158!3d-29.380697607680936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519324a8e19f2b9%3A0x57be6a1727d31d1a!2sLe%20Chalet%20de%20La%20Fondue%20Restaurante!5e0!3m2!1spt-BR!2sbr!4v1644467655701!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!-------->

<div class="modal fade" id="modal-tomasini" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ristorante Tomasini</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/tomasini1.jfif" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/tomasini2.jfif" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/tomasini3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/tomasini4.jfif" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao">Cardápio de fondues e carnes, além de massas, sopas e vinhos, em casa tradicional com ambientes aconchegantes.

                O Ristorante Tomasini foi inaugurado em 2003, é um lugar que reúne requinte e bom atendimento. Servimos um dos principais pratos da Serra, a sequência de fondue. Além deste prato temos a tradicional comida italiana. Entre os diferenciais temos um ótimo atendimento e transporte gratuito para os clientes hospedados em hotéis de Gramado.
                </div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. das Hortênsias, 1189 - Centro, Gramado - RS, 95670-000</p>
              <p><b> Avaliações:</b> 1912, &#9733; 4,6 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à sexta (das 17:30 às 23:00) sábado, domingo e feriado (das 11:00 às 16:00)</p>
              <p><b>Telefone:</b> (54) 32864311</p>
              <p>Valor: Consultar site/Telefone </p>
              <p><b>Site:</b> <a href="https://ristorantetomasini.com.br/">https://ristorantetomasini.com.br/</a> </p>
              </div>
            
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.6340359942747!2d-50.87778888522146!3d-29.38100290769487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519324a9f2346ad%3A0x7c2046a091b9365b!2sRistorante%20Tomasini!5e0!3m2!1spt-BR!2sbr!4v1644467793324!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!-------->

<div class="modal fade" id="modal-pastasciutta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cantina Pastasciutta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/pastasciutta1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/pastasciutta2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/pastasciutta3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/pastasciutta4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao"> Área de buffet para entradas, além de vários combos de massas e molhos, em um espaço com bandeiras da Itália.

              "Um pedacinho da Itália em Gramado" é a melhor definição para esta casa tradicional localizada no coração da cidade.
               Uma autêntica cantina italiana, sempre valorizando o melhor da comida e do sabor, com suas saborosas pastas, molhos e acompanhamentos.  Apresenta toda a tradição e origem da culinária deste povo que prima pela qualidade.
              </div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. Borges de Medeiros, 2083 - Centro, Gramado - RS, 95670-000</p>
              <p><b> Avaliações:</b> 6073, &#9733; 4,7estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à domingo (das 11:30 às 23:30)</p>
              <p><b>Telefone:</b> (54) 3286-2131</p>
              <p><b>Valor:</b> Consultar site/Telefone </p>
              <p><b>Site:</b> <a href="http://www.pastasciutta.com.br/">http://www.pastasciutta.com.br/</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.5401795341595!2d-50.87474178522146!3d-29.383750007819977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193246a770eb7f%3A0xc917be1098e25230!2sCantina%20Pastasciutta!5e0!3m2!1spt-BR!2sbr!4v1644467846080!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>

<div class="modal fade" id="modal-bela" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bela Vista Café Colonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/bela1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/bela2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/bela3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/bela4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao">Fundado em 1972, é considerado o 1.º café colonial do Brasil.	O café colonial Bela Vista foi eleito um dos 1000 lugares para se conhecer antes de morrer. A indicação consta no livro best-seller da autora americana Patrícia Schultz.  É o mais conhecido da região. Até por conta da sua história e o ambiente acolhedor.
              </div>

              <div class="paragrafo">

             
              <p></p>
              <p><b>Endereço:</b> Av. das Hortênsias, 3500 – Vila Suíça, Gramado – RS, 95670-000</p>
              <p><b> Avaliações:</b> 8989, &#9733; 4,4 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à domingo (das 11:00 às 23:00)</p>
              <p><b>Telefone:</b> (54) 3286-1608</p>
              <p><b>Valor:</b> R$ 82,00 (e se comprar antecipado pelo site do Brocker Turismo, tem desconto) </p>
              <p><b>Site:</b> <a href="https://belavista.tur.br/">https://belavista.tur.br/</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.9720354551473!2d-50.864810685221855!3d-29.371108007244136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95192db889b1f8e3%3A0x621d887ee9c0b677!2sCaf%C3%A9%20Colonial%20Bela%20Vista!5e0!3m2!1spt-BR!2sbr!4v1644467884184!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!--------->

<div class="modal fade" id="modal-coelho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Café Coelho Colonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/coelho1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/coelho2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/coelho3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/coelho4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Presente entre os mais famosinhos de Gramado, o Coelho oferece tudo aquilo que um bom café colonial precisa ter: frios, pães, bolos, croquetes, pastel, linguiça, pizza, tortas, bebidas quentes e geladas e muito mais. É bem localizado e possui estacionamento no local. Possui valor diferenciado para grupo superior a 20 pessoas.
              </div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. das Hortênsias, R. Vigilante, 5433, Gramado – RS, 95670-000</p>
              <p><b> Avaliações:</b> 3134, &#9733; 4,5 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à sexta: 11h às 21h / sábado e domingo: 10h30 às 21h</p>
              <p><b>Telefone:</b> (54) 3286-2538</p>
              <p><b>Valor:</b> preço médio é de R$ 84,00 por pessoa (Se comprar pelo site tem desconto de 10% </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.3069505074536!2d-50.852560485222185!3d-29.361300406797543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193280a9ee3065%3A0xda8d2153b5570472!2sCoelho%20Caf%C3%A9%20Colonial!5e0!3m2!1spt-BR!2sbr!4v1644467920496!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>

<div class="modal fade" id="modal-torre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Torre Café Colonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/torre1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/torre2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/torre3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/torre4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao"> Pra lá de tradicional, o Torre Café Colonial está sempre movimentado e agrada tanto por causa de sua interessante arquitetura até, claro, pelos incríveis quitutes que oferece. Há doces e salgados para todos os gostos. Para quem chega de Canela, a Torre Café Colonial fica bem na entrada de Gramado. Fora da temporada você encontra descontos de 50%.</div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. das Hortências, 2174 – Vila Suíça, Gramado – RS, 95670-000</p>
              <p><b>Avaliações:</b> 3983, &#9733; 4,0 estrelas</p>
              <p><b>Horário de Funcionamento:</b> terça a domingo: 10h às 21h30. Segunda-feira o café não abre!</p>
              <p><b>Telefone:</b> (54) 3286-1921</p>
              <p><b>Valor:</b> R$80,00 por pessoa (o site oferece descontos especiais). </p>
              <p><b>Site:</b> <a href="https://www.torrecafecolonial.com.br/site/">https://www.torrecafecolonial.com.br/site/</a> </p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.691423517309!2d-50.87168408522147!3d-29.379323107618315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951932431d0debd5%3A0x300f209091e6c7bd!2sTorre%20Caf%C3%A9%20Colonial!5e0!3m2!1spt-BR!2sbr!4v1644467965527!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------->

<div class="modal fade" id="modal-gramado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gramado Café Colonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/gramado1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gramado2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gramado3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/torre4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Fundado em 1984, hoje o café é dirigido pela família Erni Cavichion. Fica exatamente entre Gramado e Canela, pertinho do Parque Mundo a Vapor. Além do fácil acesso e de possuir estacionamento, o café se destaca pelo cardápio que mantém as tradicionais receitas dos imigrantes alemães e italianos.. O local é bem agradável e familiar.</div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Av. Don Luiz Guanella, 1168 – Vila Suíça, Canela – RS, 95680-000</p>
              <p><b> Avaliações:</b> 2932, &#9733; 4,6 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à segunda: 11h30 às 21h</p>
              <p><b>Telefone:</b> (54) 3282-2317</p>
              <p><b>Valor:</b> Médio por pessoa é de R$80,00. Crianças até 5 anos não pagam (compras pelo site tem desconto) </p>
              <p><b>Site:</b> <a href="https://www.gramadocafecolonial.com.br/">https://www.gramadocafecolonial.com.br/</a></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1229.4359093526873!2d-50.83824364012348!3d-29.35945742759821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95192dda3e9c9315%3A0x42a8be5ffc120425!2sGramado%20Caf%C3%A9%20Colonial!5e0!3m2!1spt-BR!2sbr!4v1644468061642!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!-------->

<div class="modal fade" id="modal-gramberry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Café Colonial Gramberry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/alimentacao/gramberry1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gramberry2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gramberry3.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/alimentacao/gramberry4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> São anos de história, desde 1998, onde buscam a perfeição, aprimorando o atendimento e qualidade em geral. Ir a um café colonial na Serra Gaúcha não significa, necessariamente, que será um rombo no seu bolso. Alguns locais disponibilizam cupons de desconto, chegando a mais de 30% off. É o caso do Gramberry. Com a utilização dos cupons a refeição sai por menos de R$50,00 por pessoa. Na mesa são servidos pratos quentes bem interessantes, como polenta frita, bolinho de arroz, lombinho de porco e frango a passarinho.</div>

              <div class="paragrafo">
              <p></p>
              <p><b>Endereço:</b> Avenida das Hortênsias, R. Vigilante, 5553, Gramado - RS, 95670-000</p>
              <p><b>Avaliações:</b> 975, &#9733; 4,1 estrelas</p>
              <p><b>Horário de Funcionamento:</b> segunda à segunda: 10:00 às 18:00</p>
              <p><b>Telefone:</b> (54) 3286-4981</p>
              <p><b>Valor:</b> R$75,00 (Crianças de 0 a 4 anos não pagam, e de 5 a 9 anos pagam meia)</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.3078689626095!2d-50.85143808522205!3d-29.361273506796355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95193234c90fd9ff%3A0xfdf48be94d23d1c3!2sCaf%C3%A9%20Colonial%20Gramberry!5e0!3m2!1spt-BR!2sbr!4v1644468095325!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
              
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>
  
<!----FIZ ATE AQUI-------->

  <div class="modal fade" id="modal-ramm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Café Típico Família Ramm</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/ramm1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/ramm2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/ramm3.jfif" style="object-position: top"class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/ramm4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput">
                <div class="descricao">Teve seu início marcado pelo surgimento do Agroturismo em Gramado no ano de 1998. Na época, o casal Ramm abriu as portas de casa para oferecer aos turistas um café colonial, mais simples, mas igualmente delicioso.O Ramm tem uma proposta diferente dos seus badalados concorrentes: por lá tudo é colonial de verdade, feito em casa, com gostinho caseiro. Os pães são preparados no forno a lenha e deixam aquele cheirinho característico no ambiente. O espaço é adorável e lembra muito a casa de uma vovó, com direito a fotos de família pelas paredes. O local já foi visitado pela Angélica e apareceu no programa Estrelas.</div>

                <div class="paragrafo">
                <p></p>
                <p>Endereço:Estrada Campestre do Tigre, Gramado, Rio Grande do Sul 95670-000 Brasil</p>
                <p>Avaliação: 4,1 (975)</p>
                <p>Horário de Funcionamento: Quinta a Domingo à partir das 12h (reservar)</p>
                <p>Telefone: (54) 99147-5046</p>
                <p>Valor:R$48,00</p>
                </div>
  
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
  
  <!------------>

  <div class="modal fade" id="modal-nonna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Caffé Della Nonna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/nonna1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/nonna2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/nonna3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/nonna4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput">
                <div class="descricao">Resgatando as mais belas lembranças da cultura italiana, neste legítimo café colonial na colônia, você viverá momentos únicos. Provará as delícias preparadas com carinho e capricho pela típica Família Foss num ambiente aconchegante e acolhedor. Faz parte do Tour Raízes Coloniais da família Foss.</div>

               <div class="paragrafo">
                <p></p>
                <p>Endereço:Estrada Linha Bonita, 2490 Linha Bonita, Gramado, Rio Grande do Sul 95670-000</p>
                <p>Avaliação: 4,9 (113)</p>
                <p>Horário de Funcionamento:  Segunda, Quarta e Sexta das 09:00h às 17:00h. Terça e Quinta das 14:00h às 18:00h e Sábados das 10:00h às 18:00h  </p>
                <p>Telefone:(54) 99968-3395</p>
                <p>Valor:R$85,00</p>
                <p>Site: <a href="https://raizescoloniais.com.br/caffe-della-nonna">https://raizescoloniais.com.br/caffe-della-nonna</a></p>
                </div>

              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
  
  <!------->

  <div class="modal fade" id="modal-lugano" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lugano Chocolates</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/lugano1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/lugano2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/lugano3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/lugano4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput"> 
                <div class="descricao">Fundada em 1976, a fábrica de chocolates Lugano teve seu nome inspirado na homônima cidade suíça, localizada no cantão italiano do país. É a loja ideal  para quem está determinado a apenas comprar seus chocolates de qualidade e muito gostosos. Os preços variam de acordo com o tamanho do chocolate ou estilização em si. Há uma loja virtual.</div>

                <div class="paragrafo">
                <p></p>
                <p>Endereço: Av. Borges de Medeiros, 2784 - Vila Suica, Gramado - RS, 95670-000</p>
                <p>Avaliação: 4,6 (1.981)</p>
                <p>Horário de Funcionamento:Segunda a Segunda das 09:30h às 22:00h</p>
                <p>Telefone:(54) 3533-4460</p>
                <p>Valor:$$ - $$$</p>
                <p>Site: <a href="https://www.chocolatelugano.com.br/">https://www.chocolatelugano.com.br/</a></p>
                </div>
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
 
  <!---------->

  <div class="modal fade" id="modal-florybal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">A Fantástica Fabrica de Chocolate Florybal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/florybal1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/florybal2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/florybal3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/florybal4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput"> 
                <div class="descricao"> Em 1991, dois jovens empreendedores Valdir Cardoso e Janete Mayer, tinham um sonho em comum, eles queriam criar algo de bom, que gerasse um impacto positivo na sociedade. Foi então que decidiram começar a fazer chocolates, no porão da sua casa, um espaço de 21m². Assim nasceu a Florybal! <p></p>É uma ótima opção para comprar seus chocolates de qualidade com crianças, pois suas lojas costumam ter um atendimento mais figurativo para alegrar os baixinhos.Existem várias lojas com temáticas diferentes pela cidade de Gramado, mas está é a opção mais visitada por ser no centro. Há uma loja virtual.</div>

                <div class="paragrafo">
                <p></p>
                <p>Endereço:Av. Borges de Medeiros, 2771 - Centro, Gramado - RS, 95670-000</p>
                <p>Avaliação: 4,6 (2.422)</p>
                <p>Horário de Funcionamento:Segunda a Segunda das 09:00h às 22:50h</p>
                <p>Telefone: (54)32865833</p>
                <p>Valor:$$ - $$$</p>
                <p>Site: <a href="https://www.florybal.com.br/">https://www.florybal.com.br/</a></p>
                </div>
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
  
  <!------->

  <div class="modal fade" id="modal-planalto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chocolates Planalto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/planalto1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/planalto2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/planalto3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/planalto4.png" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput">
                <div class="descricao"> As atividades tiveram início em 1977 e desde o primeiro dia, a proposta foi fazer um chocolate de qualidade que, além dos ingredientes essenciais, levasse o carinho e a atenção aos detalhes durante todo o preparo. O nome nasceu do bairro Planalto, onde estava localizada a primeira sede. Oferece chocolates para venda, e refeições no local. Está disponível para compra tanto pelo seu próprio website quanto pelo ifood. </div>

                <div class="paragrafo">
                <p></p>
                <p>Endereço:Av. Borges de Medeiros, 2918 - Vila Suica, Gramado - RS, 95670-9700 </p>
                <p>Avaliação: 4,5 (1.828)</p>
                <p>Horário de Funcionamento:de Segunda a Quinta, e Domingos das 10:00h às 21:00h e Sextas e Sábados das 10:00h até ás 22:00h</p>
                <p>Telefone: (54) 3295-5600</p>
                <p>Valor:$$ - $$$</p>
                <p>Site: <a href="http://www.chocolateplanalto.com.br/">http://www.chocolateplanalto.com.br/</a></p>
                </div>
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
  
  <!------------------>

  <div class="modal fade" id="modal-chocoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chocolates Chocoá</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/chocoa1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/chocoa2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/chocoa3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/chocoa4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput"> 
                <div class="descricao"> Oferece chocolates artesanais, com qualidade, beleza e variedade que conquistam a cada pedaço.  Fica a 1,8km do Lago Negro. É uma opção menos procurada pois não atinge o sucesso dos seus concorrentes, mas oferece bons chocolates e variedades de produtos. Há também refeições servidas no local, principalmente cafés. Para mais informações, acesse a página da loja no Facebook: Chocoá Chocolates de Gramado.</div>


                <div class="paragrafo">
                <p></p>
                <p>Endereço: R. Tuiuti, 165 - Piratini, Gramado - RS, 95670-000</p>
                <p>Avaliação: 4,7 (85)</p>
                <p>Horário de Funcionamento:Segunda a Segunda das 11:00h às 21:00h</p>
                <p>Telefone:(55) 99141-7219</p>
                <p>Valor:$$ - $$$</p>
                <p>Site:<a href="https://www.lojavirtualchocoa.com.br/">https://www.lojavirtualchocoa.com.br/</a></p>
                </div>
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
  
  <!----------->

  <div class="modal fade" id="modal-prawer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chocolates Prawer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/prawer1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/prawer2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/prawer3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/prawer4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput"> 
                <div class="descricao">Tudo começou em 1975, quando o brasileiro Jayme Prawer descobriu em Bariloche, na Argentina, a produção artesanal de chocolates. Alguns meses depois a Prawer começou a fabricação da primeira linha de chocolates artesanais do Brasil, na cidade de Gramado. <p></p>Sem dúvida, está entre as melhores de Gramado, pois seu capricho, cuidado e diversidade nos sabores é altamente reconhecido. Suas lojas espalhadas por Gramado refletem a beleza de seus produtos. Oferece a opção de compra pelo seu próprio website.Horário de Visitação Gratuita a Fábrica está cancelado até segunda ordem da secretaria de saúde.</div>

                <div class="paragrafo">
                <p></p>
                <p>Endereço: Av. das Hortênsias, 4100, Estrada Gramado/Canela.</p>
                <p>Avaliação:4,5 (1396)</p>
                <p>Horário de Funcionamento:de Segunda a Segunda das 09:30 às 17:30</p>
                <p>Telefone:(54) 3286.1580</p>
                <p>Valor:$$ - $$$</p>
                <p>Site:<a href="https://www.prawer.com.br/">https://www.prawer.com.br/</a></p>
                </div>
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>
  
  <!---------->

  <div class="modal fade" id="modal-caracol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Caracol Chocolates Boutique</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <main class="modal-body">
          <form>
  
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../src/img/modais/alimentacao/caracol1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/caracol2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/caracol3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/alimentacao/caracol4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
            
  
            <div class="form-group">
              <label for="formGroupExampleInput"> 
                <div class="descricao">Em 1982, na cidade de Canela, foi inaugurada a primeira fábrica da Caracol Chocolates – nome  homenageando a  Cascata do Caracol, um dos pontos turísticos mais visitados da região. Em 2001, a fábrica foi para Gramado, onde se tornou a precursora na fabricação de chocolates na Serra Gaúcha. 
                Até então, o chocolate não era produzido nas fábricas locais, mas apenas derretido e convertido em produtos. <p></p>Passamos, então, a produzir o nosso próprio chocolate, priorizando a qualidade e a pureza, sem usar nenhuma outra fonte sequer de gordura , apenas a da manteiga de cacau e a do leite. Sem adição alguma de gordura hidrogenada e, portanto, zero gordura trans. Oferece a opção de compra pelo seu próprio website</div>
                
                <div class="paragrafo">
                <p></p>
                <p>Endereço: Av. Borges de Medeiros, 2935 - Centro, Gramado - RS, 95670-000</p>
                <p>Avaliação:4,5 (275)</p>
                <p>Horário de Funcionamento:de Segunda a Segunda das 10:00 às 22:00</p>
                <p>Telefone:(54)3286.4253</p>
                <p>Valor:$$ - $$$</p>
                <p>Site:<a href="https://www.caracolchocolates.com.br/">https://www.caracolchocolates.com.br/</a></p>
                </div>
              
              </label>
             </div>
          
        </form>
        </main>
        <footer class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </footer>
      </dialog>
    </div>
  </div>




  

  

  

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   </script>
    
 
</body>
</html>
