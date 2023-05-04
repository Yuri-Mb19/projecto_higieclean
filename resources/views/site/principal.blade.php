<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>JAK</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <script src="toggleAria.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>


  <style>
    .user-pic {
      width: 150px;
      height: 150px;
      overflow: hidden;
      border-radius: 100%;
      margin: 20px auto 20px;
      border-left: 3px solid #ddd;
      border-right: 3px solid #ddd;
      border-top: 3px solid #031652;
      border-bottom: 3px solid #031652;
      transition: 0.5s;
    }

    .card-box:hover .user-pic {
      transform: rotate(0deg);
      transform: scale(1.1);
    }

    .card-box {
      padding: 15px;
      background-color: #fdfdfd;
      margin: 20px 0px;
      border-radius: 10px;
      border: 1px solid #eee;
      box-shadow: 0px 0px 8px 0px #d4d4d4;
      transition: 0.5s;
    }

    .card-box:hover {
      border: 1px solid #007bff;
    }

    .card-box p {
      color: #031652;
    }

    .btn-secondary {

      background-color: #031652;

      color: #FFF;

      border-color: #2F3E48;

    }
  </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="top_nav">
      <div class="container">
        <div class="contact_link-container">
          <a href="" class="contact_link1">
            <img src="images/location.png" alt="" />
            <span>
              Av. Samora Machel, Q17, Bairro Tchumene 2
            </span>
          </a>
          <a href="" class="contact_link2">
            <img src="images/call.png" alt="" />
            <span>
              Cell : +(258)841032766/872148935
            </span>
          </a>
          <a href="" class="contact_link3">
            <img src="images/mail.png" alt="" />
            <span>
              higicleanservice.mz@gmail.com
            </span>
          </a>
        </div>
      </div>
    </div>
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo_Higeclean.png" alt="" />
            <span>
              HIGI CLEAN
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('site.index') }}">Principal <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.sobrenos') }}"> Sobre Nos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.produtov') }}"> Produtos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.contato') }}">Contacte nos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.login') }}">Login</a>
              </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <input type="search" placeholder="Search" />
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>-->
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Produtos
                      <br />
                      <span>
                        de Limpeza
                      </span>
                    </h1>
                    <p>
                      Um simples toque de frescura...
                    </p>
                    <div class="btn-box">
                      <a href="{{ route('site.galeria_img') }}" class="btn-1">Ler mais</a>
                      <a href="" class="btn-2">Cotações </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="img-box">
                    <img src="images/Logo_JAK.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2><span>Sobre a</span> Empresa</h2>
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/produtos.JPG" alt="" />
            </div>
            <div class="btn-box">
              <a href="{{ route('site.galeria_img') }}">
                Ler mais
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <h3>
              JAK
            </h3>
            <p>
              A JAK é uma marca moçambicana que se dedica na concepção e comércio de produtos
              de limpeza, desinfeção, para o tratamento e manutenção de diferentes espaços,
              equipamentos e materiais. Simultaneamente, disponibiliza um conjunto de serviços
              que facilitam as ações de higienização.
              A nossa empresa (marca) encontra-se no mercado a 7 (sete) anos, Esta conta com
              instalações próprias e possui capacidade de produção desejável e de qualidade, é
              composta por uma equipe jovem e dinâmica, e garante o fornecimento dos seus produtos
              em diferentes praças e possui o serviço de entrega ao domicílio, tendo para isso
              viaturas próprias, o que garante que a entrega seja imediata.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Objectivos da empresa
        </h2>
      </div>
      <div class="service_container">
        <div class="box b1">
          <div class="img-box">

          </div>
          <div class="detail-box">
            <h6>
              Missão
            </h6>
            <p>
              A empresa tem como missão fornecer soluções de higiene e limpeza, por meio de produtos
              de qualidade e eficaz, que garantem praticidade e excelentes resultados aos
              nossos clientes, proporcionando assim a sua satisfação.
            </p>
            <a href="{{ route('site.galeria_img') }}">
              Ler mais
            </a>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">

          </div>
          <div class="detail-box">
            <h6>
              Visão
            </h6>
            <p>
              Ser líder no mercado de higiene e limpeza, garantir sustentabilidade a nível do país fornecendo
              aos nossos clientes produtos de alto nível de qualidade e com design inovador.
            </p>
            <a href="{{ route('site.galeria_img') }}">
              Ler mais
            </a>
          </div>
        </div>
        <div class="box b3">
          <div class="img-box">

          </div>
          <div class="detail-box">
            <h6>
              Nosso Plano
            </h6>
            <p>
              O nosso plano envolve o comprometimento com as pessoas e com a sustentabilidade do negócio;
              Atuação com ética, garra e ousadia, procurando sempre oferecer o nosso melhor aos nossos clientes,
              Novos conceitos de qualidade baseados na inovação e criatividade.
            </p>
            <a href="{{ route('site.galeria_img') }}">
              Ler mais
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- product section -->
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Nossos Produtos
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <img src="{{asset('images/produtos/1.png')}}" width="278" height="240'" alt="" />
        </div>
        <div class="box">
          <img src="{{asset('images/produtos/2.png') }}" width="278" height="240" alt="" />
        </div>
        <div class="box">
          <img src="{{asset('images/produtos/3.png')}}" width="278" height="240" alt="" />
        </div>
        <div class="box">
          <img src="images/produtos/4.png" width="278" height="240" alt="" />
        </div>
        <div class="box">
          <img src="{{asset('images/produtos/5.png')}}" width="278" height="240" alt="" />
        </div>
        <div class="box">
          <img src="images/produtos/6.png" width="278" height="240" alt="" />
        </div>
        <div class="box">
          <img src="images/produtos/7.png" width="278" height="240" alt="" />
        </div>
        <div class="box">
          <img src="images/produtos/8.png" width="278" height="240" alt="" />
        </div>
      </div>



      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <div class="btn-box">
        <a href="{{ route('site.galeria_img') }}">
          Ver mais
        </a>
      </div>
    </div>


  </section>


  <!-- end product section -->

  <section class="metal_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <h2>
          Os <br />
          Melhores<br />
          Productos <br />
          De Limpeza
        </h2>
        <a href="">
          Pedir Cotação
        </a>
      </div>
    </div>
  </section>

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Nossa Equipa
        </h2>
      </div>


      <div class="row">
        <div class="col-md-3">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="images/foto.jpeg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Adelina Tembe</h4>
            <h6>Comercial</h6>
            <hr>
            <p>Cidade da Maputo e Matola</p>
            <hr>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
              <a href="https://wa.link/mqryaf">
                Entrar
                em contacto
              </a>
             </button>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="images/elisa-imagem.jpeg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Elisa Chambale</h4>
            <h6>Secretaria</h6>
            <hr>
            <p>SEDE</p>
            <hr>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><a href="https://wa.link/mqryaf">
              Entrar
              em contacto
            </a></button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="images/imagem-matias.jpeg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Matias Sivala</h4>
            <h6>Gestor de encomendas</h6>
            <hr>
            <p>Responsável de stock</p>
            <hr>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><a href="https://wa.link/mqryaf">
              Entrar
              em contacto
            </a></button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="images/adelina-imagem.jpeg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Amira Zandamela</h4>
            <h6>Comercial</h6>
            <hr>
            <p>Província de Gaza</p>
            <hr>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><a href="https://wa.link/mqryaf">
              Entrar
              em contacto
            </a></button>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          O que os nossos clientes dizem sobre nos
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Minim Veniam
                </h4>
                <p>
                  Os produtos da JAK são os melhores para a limpeza da minha casa.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Marta Cumbe
                </h4>
                <p>
                  Uso sempre os produtos da JAK para a higienização da minha empresa o meu carro.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Carlos batista
                </h4>
                <p>
                  A melhor solução de produtos de limpeza de moçambique.
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- end client section -->




  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Entre em contacto
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-6 ">
          
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/map.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo_Higeclean.png" alt="" />
              <span>
                JAK
              </span>
            </a>
            <p>
              Visite nos : Av. Samora Machel, Q17, Bairro Tchumene 2<br>
              Cidade da Matola
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Links Úteis
            </h5>
            <ul>
              <li>
                <a href="">
                  Principal
                </a>
              </li>
              <li>
                <a href="">
                  Sobre nos
                </a>
              </li>
              <li>
                <a href="">
                  Produtos
                </a>
              </li>
              <li>
                <a href="">
                  Contacte nos
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contacte nos
            </h5>
            <p>
              Cell : +(258)841032766<br>
              Cell : +(258)872148935<br>
              Email : higicleanservice.mz@gmail.com
            </p>
          </div>
        </div>


        <div class="col-md-3">
          <div class="info_form ">
            <h4>
              Receba lista de Produtos actualizados sempre
            </h4>
            <form action="">
              <input type="email" placeholder="Inserir o seu email">
              <button>
                Subscrever
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2022 Todos os direitos reservados. Desenvolvido Pela
      <a href="">V-TECH SERVICES</a>
    </p>
  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>


  </script>

</body>

</html>