
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Meus agendamentos</title>
  <!-- Favicon -->
  <link rel="icon" href="http://aula.test/assets/img/motocicleta.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="http://aula.test/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="http://aula.test/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
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
              <a class="nav-link" href="{{route('site.dashboard') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('site.listagenda') }}">
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
              <a class="nav-link" href="{{route('site.listaorcamento') }}">
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
    <div class="header bg-default pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-white d-inline-block mb-0">Meus Agendamentos</h6>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Registros</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Serviço</th>
                    <th scope="col" class="sort" data-sort="budget">Data</th>
                    <th scope="col" class="sort" data-sort="status">Horário</th>
                    <th scope="col">Veículo</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($agendamentos as $agendamento)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$agendamento->Servico}}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      {{$agendamento->Data}}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">{{$agendamento->Horario}}</span>
                      </span>
                    </td>
                    
                    <td class="budget">
                     @foreach($veiculos as $veiculo)
                       @if($agendamento->veiculo_id == $veiculo->id)
                      {{$veiculo->Modelo}}
                      @endif
                    @endforeach
                    </td>
                    <td>
                    <a href="{{ route('site.editagenda', $agendamento->id )}}">
                      <button class="btn btn-icon btn-primary" type="submit">
                        <span class="btn-inner--icon">Alterar<i class="ni ni-ruler-pencil"></i></span>
                     </button>
                    </a>
                    </td>
                    <td>
                     <form action="{{route('site.destroy', $agendamento->id)}}" method="post">
                     @csrf
                    <input type="hidden" name="_method" value="DELETE">   
                     <button class="btn btn-icon btn-primary" type="submit">
                            <span class="btn-inner--icon">Remover<i class="ni ni-fat-remove"></i></span>
                      </button>
                    </form>
                    </td>
                  <tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Card footer -->
            <div class="card-footer py-4">
           
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                <a href="{{ route('site.agendamento') }}">
                <button class="btn btn-icon btn-primary" type="button">
                    <span class="btn-inner--icon">Novo Agendamento<i class="ni ni-fat-add"></i></span>
                </button></a>
                  <li class="page-item disabled"style="padding-left: 215px;">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <footer class="footer pt-0">
        
      </footer>
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