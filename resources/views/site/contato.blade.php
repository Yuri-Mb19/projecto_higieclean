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

  <title>JMK</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="top_nav">
      <div class="container">
        <div class="contact_link-container">
          <a href="" class="contact_link1">
            <img src="{{ asset('images/location.png') }}" alt="" />
            <span>
              Av. Samora Machel, Q17, Bairro Tchumene 2
            </span>
          </a>
          <a href="" class="contact_link2">
            <img src="{{asset('images/call.png')}}" alt="" />
            <span>
              Cell : +(258)841032766/872148935
            </span>
          </a>
          <a href="" class="contact_link3">
            <img src="{{asset ('images/mail.png') }}" alt="" />
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
            <img src="{{asset ('images/logo_Higeclean.png')}} " alt="" />
            <span>
              HIGI CLEAN
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  </div>

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
            <form action={{ route('site.contato') }} method="post">
                @csrf
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" value="{{ old('nome') }}" placeholder="Nome Completo" name="nome"/>
                    @if($errors->has('nome'))
                        {{ $errors->first('nome') }}
                    @endif
                  </div>
                  <div>
                    <input type="text" value="{{ old('telefone') }}"  placeholder="Numero de telefone" name="telefone"/>
                    {{ $errors->has('telefone') ? $errors->first('telefone') : ''}}
                  </div> 
                  <div>
                    <input type="text" value="{{ old('email') }}"  placeholder="E-mail" name="email"/>
                    {{ $errors->has('email') ? $errors->first('email') : ''}}
                  </div>
                  <div class="">
                    <input type="text" placeholder="Mensagem" class="message_input" name="mensagem"/>
                    {{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}
                  </div>
                  <div class=" ">
                    <button type="submit" class="borda-preta"> Enviar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
         
          <div class="col-md-6">
            <div class="img-box">
              <img src="{{asset('images/map.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="index.html">
               <img src="{{asset('images/logo_Higeclean.png')}}" alt="" />
              <span>
                JAK
              </span>
            </a>
            <p>
              Visite nos :  Av. Samora Machel, Q17, Bairro Tchumene 2<br>
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
            </h5>
            <form action="">
              <input type="email" placeholder="Inserir o seu email">
              <button>
                Subscrever
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="{{asset('images/fb.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('images/twitter.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('images/linkedin.png')}}" alt="">
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
      &copy; 2021 Todos os direitos reservados. Desenvolvido Pela
      <a href="">V-TECH SERVICES</a>
    </p>
  </footer>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>

@if($errors->any())
    <div style="position:absolute; top:0px; margin-right: 50%; width:50%; background:red">

        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br >
        @endforeach

    </div>
@endif

