
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Orçamentos</title>
  <!-- Favicon -->
  <link rel="icon" href="http://aula.test/assets/img/motocicleta.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="http://aula.test/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="http://aula.test/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="http://aula.test/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="http://aula.test/assets/img/motocicleta.png" class="navbar-brand-img" alt="...">
          <p style="font-weight: bold;">MotoMechanics</p>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.agendamento') }}">
                <i class="ni ni-calendar-grid-58   text-orange"></i>
                <span class="nav-link-text">Agendamento</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('site.meusservicos')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Meus Serviços</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('site.orcamento') }}">
                <i class="ni ni-cart text-pink"></i>
                <span class="nav-link-text">Orçamentos</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="http://aula.test/assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Dilma Rousseff</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(http://aula.test/assets/img/back.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Orçamentos</h1>
            <p class="text-white"style="vertical-align: inherit; width:407px"">
              Faça uma solicitação de orçamento com a nossa equipe:
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
        <div class="col-xl-11 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"style="text-align: left;">Preencha os campos com as informações necessárias: </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="{{route('site.updateorcamento',$orcamento->id)}}" method="post">
                @method("put")
                @csrf
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Solicitação</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                      <label for="form-control-label">Serviços</label>
                      <select class="form-control" id="exampleFormControlSelect1"name="Servico" id="Servico">{{$orcamento->Servico}}
                        <option>Troca de óleo</option>
                        <option>Troca de relação</option>
                        <option>Troca de pneu</option>
                      </select>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Descrição do problema</label>
                        <textarea rows="4" class="form-control" name="Descricao" id="Descricao" >{{$orcamento->Descricao}}</textarea>
                      </div>
                    </div>
                  </div>
                  <label class="form-control-label">Insira fotos ou vídeos do problema</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileLang" lang="pt-BR">
                      <label class="custom-file-label" for="customFileLang">Selecione</label>
                  </div>
                  <div>
                  <p></p>
                  </div>
                </div>
                <button type="submit" class="btn btn-default" style="padding-left: 20px; left: 400px;">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="http://aula.test/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="http://aula.test/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="http://aula.test/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="http://aula.test/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="http://aula.test/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="http://aula.test/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>