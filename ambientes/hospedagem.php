<?php
require 'conexao.php';

$lista = [];
$sql =$pdo->query("SELECT * FROM pontos_turisticos");

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
            
           <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-contato">Cadastro</a></li>
           <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-contato2">Login</a></li>
           <li><a class="nav-link" href="../Home.html">Início</a></li>
           <li><a class="nav-link"data-bs-toggle="modal" data-bs-target="#modal-quem_somos">Quem somos</a></li>
           
           </ul>
        </div>
      </div>
    </nav> 
  </header> 
  
  <main class="cards cor-de-fundo">

   <section class="container-fluid cor-de-fundo " id="ambientes">
     <div class="row justify-content-center">
      <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
        <img src="../src/img/hospedagem_cards/hotel_sky.card.png" class=" card-img-top card-posicao-imagem" alt="">
        <div class="card-body">
          <h5 class="card-title titulo_card">Hotel Sky</h5>
          <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
        </div>
      </article>
    

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_fazenda_pampas.card.png" class=" card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Fazenda Pampas </h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_sky_ville.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Sky Ville</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_azaleia.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Azaléia</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_due.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Due Nobili</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_cercano.card.png" class="card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Cercano</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/pousada_gramado.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Pousada Gramado</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/pousada_viena.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Pousada Viena</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  
    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/pousada_recanto_lua.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Pousada Recanto da Lua</h5>
        <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/pousada_do_lago.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Pousada do Lago</h5>
      <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/pousada_ tres_pinheiros.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Pousada Três Pinheiros</h5>
      <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/pousada_betania.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Pousada Betânia</h5>
      <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/hostel_chocolatche.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Albergue Hostel Chocolatchê</h5>
      <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/albergue_eleganz.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Albergue Eleganz Hostel e Suítes</h5>
      <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/casa_da_juventude.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Albergue Casa da Juventude</h5>
      <a href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  

   </div>
   </section> 

</main>

<footer class="bg-white p-3">
  <img src="../src/img/icone_braso_prefeitura/brasao_gramado.png" class="imagem-rodape">
  <p class="p-rodape text-center"> Contato: <a class="cor-especial" href="mailto:eduardazingano@gmail.com">eduardazingano@gmail.com</a></p>
</footer>

<!-- Modal -->
<div class="modal fade" id="modal-contato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Nome </label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira seu nome completo">
           </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Endereço de e-mail</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Insira uma senha</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*******">
        </div>
      </form>
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn botao-cor-especial">Enviar</button>
      </footer>
    </dialog>
  </div>
</div>

<div class="modal fade" id="modal-contato2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Endereço de e-mail</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Insira sua senha</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*******">
        </div>
      </form>
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn botao-cor-especial">Entrar</button>
      </footer>
    </dialog>
  </div>
</div>

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



  

  

  

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   </script>
    
 
</body>
</html>
