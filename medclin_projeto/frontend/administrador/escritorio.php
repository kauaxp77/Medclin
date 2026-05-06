<?php
session_start();

if (!isset($_SESSION['cargo']) == 1) {
     header('location: ../login.php');
}
?>
<?php if (isset($_SESSION['id'])) { ?>
     <!DOCTYPE html>
     <html lang="pt-br">

     <head>
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <title>Painel de controle do Administrator</title>
          <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
          <link rel="icon" href="../../backend/img/farmacia.png" type="image/x-icon" />

          <!-- Fonts and icons -->
          <script src="../../backend/js/plugin/webfont/webfont.min.js"></script>
          <script>
               WebFont.load({
                    google: { "families": ["Lato:300,400,700,900"] },
                    custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../backend/css/fonts.min.css'] },
                    active: function () {
                         sessionStorage.fonts = true;
                    }
               });
          </script>

          <!-- CSS Files -->
          <link rel="stylesheet" href="../../backend/css/bootstrap.min.css">
          <link rel="stylesheet" href="../../backend/css/atlantis.min.css">

          <!-- CSS Just for demo purpose, don't include it in your project -->
          <link rel="stylesheet" href="../../backend/css/demo.css">
     </head>

     <body data-background-color="dark">
          <div class="wrapper">
               <div class="main-header">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark2">

                         <a href="escritorio.php" class="logo">
                              <img src="../../backend/img/logo_Med.png" alt="navbar brand" class="navbar-brand" style="margin-bottom: 0px; width: 60%;">
                         </a>
                         <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                              data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon">
                                   <i class="icon-menu"></i>
                              </span>
                         </button>
                         <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                         <div class="nav-toggle">
                              <button class="btn btn-toggle toggle-sidebar">
                                   <i class="icon-menu"></i>
                              </button>
                         </div>
                    </div>
                    <!-- End Logo Header -->

                    <!-- Navbar Header -->
                    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">

                         <div class="container-fluid">
                              <div class="collapse" id="search-nav">
                                   <form class="navbar-left navbar-form nav-search mr-md-3">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                  <button type="submit" class="btn btn-search pr-1">
                                                       <i class="fa fa-search search-icon"></i>
                                                  </button>
                                             </div>
                                             <input type="text" placeholder="procurar..." class="form-control">
                                        </div>
                                   </form>
                              </div>
                              <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                                   <li class="nav-item toggle-nav-search hidden-caret">
                                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                             aria-expanded="false" aria-controls="search-nav">
                                             <i class="fa fa-search"></i>
                                        </a>
                                   </li>

                                   <li class="nav-item dropdown hidden-caret">
                                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                             aria-expanded="false">
                                             <div class="avatar-sm">
                                                  <img src="../../backend/img/mujer.png" alt="..."
                                                       class="avatar-img rounded-circle">
                                             </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                                             <div class="dropdown-user-scroll scrollbar-outer">
                                                  <li>
                                                       <div class="user-box">
                                                            <div class="avatar-lg"><img src="../../backend/img/mujer.png"
                                                                      alt="image profile" class="avatar-img rounded"></div>
                                                            <div class="u-text">
                                                                 <h4>
                                                                      <?php echo ucfirst($_SESSION['nombre']); ?>
                                                                 </h4>
                                                                 <p class="text-muted">
                                                                      <?php echo ucfirst($_SESSION['email']); ?>
                                                                 </p><a href="../profile/mostrar.php"
                                                                      class="btn btn-xs btn-secondary btn-sm">ver perfil</a>
                                                            </div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="dropdown-divider"></div>
                                                       <a class="dropdown-item" href="../profile/mostrar.php">Meu Perfil</a>

                                                       <div class="dropdown-divider"></div>
                                                       <a class="dropdown-item" href="../salir.php">Encerrar sessão</a>
                                                  </li>
                                             </div>
                                        </ul>
                                   </li>
                              </ul>
                         </div>
                    </nav>
                    <!-- End Navbar -->
               </div>

               <!-- Sidebar -->
               <div class="sidebar sidebar-style-2" data-background-color="dark2">
                    <div class="sidebar-wrapper scrollbar scrollbar-inner">
                         <div class="sidebar-content">
                              <div class="user">
                                   <div class="avatar-sm float-left mr-2">
                                        <img src="../../backend/img/mujer.png" alt="..." class="avatar-img rounded-circle">
                                   </div>
                                   <div class="info">
                                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                        <?php echo ucfirst($_SESSION['nombre']); ?>
                                   <span class="user-level">
                                        <?php
                                        if ($_SESSION['cargo'] == 1) {
                                             echo "Administrador";
                                        } elseif ($_SESSION['cargo'] == 3) {
                                             echo "Recepcionista";
                                        } else {
                                             echo "Outro Cargo"; // Caso queira adicionar uma opção padrão para outros cargos
                                        }
                                        ?>
                                   </span>
                                   <span class="caret"></span>
                                   
                                        </a>
                                        <div class="clearfix"></div>

                                        <div class="collapse in" id="collapseExample">
                                             <ul class="nav">
                                                  <li>
                                                       <a href="../profile/mostrar.php">
                                                            <span class="link-collapse">MEU Perfil</span>
                                                       </a>
                                                  </li>

                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              <ul class="nav nav-primary">
                                   <li class="nav-item active">
                                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                             <i class="fas fa-home"></i>
                                             <p>PAINEL DE CONTROLE</p>
                                             <span class="caret"></span>
                                        </a>

                                   </li>
                                   <li class="nav-section">
                                        <span class="sidebar-mini-icon">
                                             <i class="fa fa-ellipsis-h"></i>
                                        </span>
                                        <h4 class="text-section">Componentes</h4>
                                   </li>
                                   <li class="nav-item">
                                        <a data-toggle="collapse" href="#base">
                                             <i class="fas fa-layer-group"></i>
                                             <p>Consultas</p>
                                             <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="base">
                                             <ul class="nav nav-collapse">
                                                  <li>
                                                       <a href="../citas/mostrar.php">
                                                            <span class="sub-item">Mostrar</span>
                                                       </a>
                                                  </li>

                                             </ul>
                                        </div>
                                   </li>
                                   <li class="nav-item">
                                        <a data-toggle="collapse" href="#sidebarLayouts">
                                             <i class="fas fa-male"></i>
                                             <p>Pacientes</p>
                                             <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="sidebarLayouts">
                                             <ul class="nav nav-collapse">
                                                  <li>
                                                       <a href="../pacientes/mostrar.php">
                                                            <span class="sub-item">Mostrar</span>
                                                       </a>
                                                  </li>

                                             </ul>
                                        </div>
                                   </li>
                                   <li class="nav-item">
                                        <a data-toggle="collapse" href="#forms">
                                             <i class="fas fa-user-md"></i>
                                             <p>Médicos</p>
                                             <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="forms">
                                             <ul class="nav nav-collapse">
                                                  <li>
                                                       <a href="../medicos/mostrar.php">
                                                            <span class="sub-item">Mostrar</span>
                                                       </a>
                                                  </li>
                                             </ul>
                                        </div>
                                   </li>
                                   <li class="nav-item">
                                        <a data-toggle="collapse" href="#tables">
                                             <i class="fas fa-table"></i>
                                             <p>Áreas médicas</p>
                                             <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="tables">
                                             <ul class="nav nav-collapse">
                                                  <li>
                                                       <a href="../especialidad/mostrar.php">
                                                            <span class="sub-item">Mostrar</span>
                                                       </a>
                                                  </li>

                                             </ul>
                                        </div>
                                   </li>
                                   <li class="nav-item">
                                        <a data-toggle="collapse" href="#calendar">
                                             <i class="fas fa-calendar-alt"></i>
                                             <p>Horarios</p>
                                             <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="calendar">
                                             <ul class="nav nav-collapse">
                                                  <li>
                                                       <a href="../horarios/mostrar.php">
                                                            <span class="sub-item">Mostrar</span>
                                                       </a>
                                                  </li>

                                             </ul>
                                        </div>
                                   </li>
                                   <li class="nav-item">
                                        <a data-toggle="collapse" href="#user">
                                             <i class="fas fa-user"></i>
                                             <p>Usuarios</p>
                                             <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="user">
                                             <ul class="nav nav-collapse">
                                                  <li>
                                                       <a href="../usuarios/mostrar.php">
                                                            <span class="sub-item">Mostrar</span>
                                                       </a>
                                                  </li>

                                             </ul>
                                        </div>
                                   </li>

                              </ul>
                         </div>
                    </div>
               </div>
               <!-- End Sidebar -->

               <div class="main-panel">
                    <div class="content">
                         <div class="page-inner">
                              <div class="mt-2 mb-4">
                                   <h2 class="text-white pb-2">Bem-vindo(a),
                                        <?php echo ucfirst($_SESSION['nombre']); ?>
                                   </h2>

                              </div>
                              <div class="row">
                                   <div class="col-md-4">
                                        <div class="card card-dark bg-primary-gradient">
                                             <div class="card-body pb-0">
                                                  <?php
                                                  require_once ('../../backend/db/config.php');
                                                  $sql = "SELECT COUNT(*) total FROM appointment";
                                                  $result = $connect->query($sql); //$pdo sería el objeto conexión
                                                  $total = $result->fetchColumn();
                                                  ?>
                                                  <div class="h1 fw-bold float-right">
                                                       <?php echo $total; ?>%
                                                  </div>
                                                  <h2 class="mb-2">
                                                       <?php echo $total; ?>
                                                  </h2>
                                                  <p>Consultas</p>

                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="card card-dark bg-secondary-gradient">
                                             <div class="card-body pb-0">
                                                  <?php
                                                  $sql = "SELECT COUNT(*) total FROM customers";
                                                  $result = $connect->query($sql); //$pdo sería el objeto conexión
                                                  $total = $result->fetchColumn();
                                                  ?>
                                                  <div class="h1 fw-bold float-right">
                                                       <?php echo $total; ?>%
                                                  </div>
                                                  <h2 class="mb-2">
                                                       <?php echo $total; ?>
                                                  </h2>
                                                  <p>Pacientes</p>

                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="card card-dark bg-success2">
                                             <div class="card-body pb-0">
                                                  <?php
                                                  $sql = "SELECT COUNT(*) total FROM doctor";
                                                  $result = $connect->query($sql); //$pdo sería el objeto conexión
                                                  $total = $result->fetchColumn();
                                                  ?>
                                                  <div class="h1 fw-bold float-right">
                                                       <?php echo $total; ?>%
                                                  </div>
                                                  <h2 class="mb-2">
                                                       <?php echo $total; ?>
                                                  </h2>
                                                  <p>Médicos</p>

                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-4">
                                        <div class="card">
                                             <div class="card-header">
                                                  <div class="card-title">ultimos pacientes adicionados(a)</div>
                                             </div>
                                             <?php
                                             $sentencia = $connect->prepare("SELECT * FROM customers ORDER BY codpaci DESC LIMIT 5;");
                                             $sentencia->execute();
                                             $data = array();
                                             if ($sentencia) {
                                                  while ($r = $sentencia->fetchObject()) {
                                                       $data[] = $r;
                                                  }
                                             }
                                             ?>
                                             <?php if (count($data) > 0): ?>
                                                  <?php foreach ($data as $d): ?>
                                                       <div class="card-body pb-0">
                                                            <div class="d-flex">

                                                                 <div class="flex-1 pt-1 ml-2">
                                                                      <h6 class="fw-bold mb-1">
                                                                           <?php echo $d->dnipa ?>
                                                                      </h6>
                                                                      <small class="text-muted">
                                                                           <?php echo $d->apellidop ?>
                                                                      </small>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  <?php endforeach; ?>
                                             <?php else: ?>

                                                  <div class="alert alert-dark" role="alert">
                                                       Não ha dados.
                                                  </div>
                                             <?php endif; ?>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="card">
                                             <div class="card-body">
                                                  <div class="card-title fw-mediumbold">ultimas consultas adicionadas: </div>
                                                  <?php
                                                  $sentencia = $connect->prepare("SELECT appointment.codcit, appointment.dates, appointment.hour, customers.codpaci,customers.nombrep ,customers.apellidop, customers.dnipa, doctor.coddoc, doctor.apedoc, specialty.codespe, specialty.nombrees, appointment.estado FROM appointment INNER JOIN customers ON appointment.codpaci = customers.codpaci INNER JOIN doctor ON appointment.coddoc = doctor.coddoc INNER JOIN specialty ON appointment.codespe = specialty.codespe ORDER BY codcit DESC LIMIT 5;");
                                                  $sentencia->execute();
                                                  $data = array();
                                                  if ($sentencia) {
                                                       while ($r = $sentencia->fetchObject()) {
                                                            $data[] = $r;
                                                       }
                                                  }
                                                  ?>
                                                  <?php if (count($data) > 0): ?>
                                                       <?php foreach ($data as $d): ?>
                                                            <div class="card-list">
                                                                 <div class="item-list">
                                                                      <div class="info-user ml-3">
                                                                           <div class="username">
                                                                                <?php echo $d->apellidop ?>&nbsp;
                                                                                <?php echo $d->nombrep ?>
                                                                           </div>
                                                                           <div class="status">
                                                                                <?php echo $d->dates ?>
                                                                           </div>
                                                                      </div>

                                                                 </div>
                                                            </div>
                                                       <?php endforeach; ?>
                                                  <?php else: ?>

                                                       <div class="alert alert-dark" role="alert">
                                                            Não ha dados.
                                                       </div>
                                                  <?php endif; ?>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4">
                                        <div class="card">
                                             <div class="card-body">
                                                  <div class="card-title fw-mediumbold">ultimas especialidades adicionadas:</div>
                                                  <?php
                                                  $sentencia = $connect->prepare("SELECT * FROM specialty ORDER BY codespe DESC LIMIT 5;");
                                                  $sentencia->execute();
                                                  $data = array();
                                                  if ($sentencia) {
                                                       while ($r = $sentencia->fetchObject()) {
                                                            $data[] = $r;
                                                       }
                                                  }
                                                  ?>
                                                  <?php if (count($data) > 0): ?>
                                                       <?php foreach ($data as $d): ?>
                                                            <div class="card-list">
                                                                 <div class="item-list">
                                                                      <div class="info-user ml-3">
                                                                           <div class="username">
                                                                                <?php echo $d->nombrees ?>
                                                                           </div>
                                                                           <div class="status">
                                                                                <?php echo $d->fecha_create ?>
                                                                           </div>
                                                                      </div>
                                                                 </div>

                                                            </div>
                                                       <?php endforeach; ?>
                                                  <?php else: ?>

                                                       <div class="alert alert-dark" role="alert">
                                                            Não ha dados.
                                                       </div>
                                                  <?php endif; ?>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-header">
                                                  <div class="card-title">Histórico</div>
                                             </div>
                                             <div class="card-body">
                                                  <ol class="activity-feed">
                                                       <?php
                                                       $sentencia = $connect->prepare("SELECT appointment.codcit, appointment.dates, appointment.hour, customers.codpaci,customers.nombrep ,customers.apellidop, customers.dnipa, doctor.coddoc, doctor.apedoc, specialty.codespe, specialty.nombrees, appointment.estado FROM appointment INNER JOIN customers ON appointment.codpaci = customers.codpaci INNER JOIN doctor ON appointment.coddoc = doctor.coddoc INNER JOIN specialty ON appointment.codespe = specialty.codespe ORDER BY codcit DESC LIMIT 5;");
                                                       $sentencia->execute();
                                                       $data = array();
                                                       if ($sentencia) {
                                                            while ($r = $sentencia->fetchObject()) {
                                                                 $data[] = $r;
                                                            }
                                                       }
                                                       ?>
                                                       <?php if (count($data) > 0): ?>
                                                            <?php foreach ($data as $d): ?>
                                                                 <li class="feed-item feed-item-secondary">
                                                                      <time class="date" datetime="9-25">
                                                                           <?php echo $d->dates ?>
                                                                      </time>
                                                                      <span class="text">adicionado<a href="#">"
                                                                                <?php echo $d->nombrees ?>"
                                                                           </a></span>
                                                                 </li>

                                                            <?php endforeach; ?>
                                                       <?php else: ?>

                                                            <div class="alert alert-dark" role="alert">
                                                                 não ha dados.

                                                            </div>
                                                       <?php endif; ?>

                                                  </ol>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-header">
                                                  <div class="card-head-row">
                                                       <div class="card-title">Consultas</div>
                                                       <div class="card-tools">
                                                            <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm"
                                                                 id="pills-tab" role="tablist">
                                                                 <li class="nav-item">
                                                                      <a class="nav-link" id="pills-today" data-toggle="pill"
                                                                           href="#pills-today" role="tab"
                                                                           aria-selected="true">hoje</a>
                                                                 </li>

                                                            </ul>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="card-body">
                                                  <?php
                                                  $sentencia = $connect->prepare("SELECT appointment.codcit, appointment.dates, appointment.hour, customers.codpaci,customers.nombrep ,customers.apellidop, customers.dnipa, doctor.coddoc, doctor.apedoc, specialty.codespe, specialty.nombrees, appointment.estado FROM appointment INNER JOIN customers ON appointment.codpaci = customers.codpaci INNER JOIN doctor ON appointment.coddoc = doctor.coddoc INNER JOIN specialty ON appointment.codespe = specialty.codespe ORDER BY codcit DESC LIMIT 5;");
                                                  $sentencia->execute();
                                                  $data = array();
                                                  if ($sentencia) {
                                                       while ($r = $sentencia->fetchObject()) {
                                                            $data[] = $r;
                                                       }
                                                  }
                                                  ?>
                                                  <?php if (count($data) > 0): ?>
                                                       <?php foreach ($data as $d): ?>
                                                            <div class="d-flex">
                                                                 <div class="avatar avatar-online">
                                                                      <span
                                                                           class="avatar-title rounded-circle border border-white bg-info">A</span>
                                                                 </div>
                                                                 <div class="flex-1 ml-3 pt-1">
                                                                      <h6 class="text-uppercase fw-bold mb-1">
                                                                           <?php echo $d->apellidop ?>&nbsp;
                                                                           <?php echo $d->nombrep ?>

                                                                           <?php if ($d->estado == 1) { ?>
                                                                                <span
                                                                                     class="text-success pl-3"><strong>Confirmada</strong></span>
                                                                           <?php } else { ?>

                                                                                <span class="text-danger pl-3">cancelada</span>
                                                                           <?php } ?>



                                                                      </h6>
                                                                      <span class="text-muted">
                                                                           <?php echo $d->nombrees ?>
                                                                      </span>
                                                                 </div>
                                                                 <div class="float-right pt-1">
                                                                      <small class="text-muted">
                                                                           <?php echo $d->hour ?>
                                                                      </small>
                                                                 </div>
                                                            </div>
                                                            <div class="separator-dashed"></div>
                                                       <?php endforeach; ?>
                                                  <?php else: ?>

                                                       <div class="alert alert-dark" role="alert">
                                                            não ha dados.

                                                       </div>
                                                  <?php endif; ?>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <footer class="footer">
                         <div class="container-fluid">

                              <div class="copyright ml-auto">
                                   2024, made with <i class="fa fa-heart heart text-danger"></i> by kauã
                              </div>
                         </div>
                    </footer>
               </div>

               <!-- End Custom template -->
          </div>
          <!--   Core JS Files   -->
          <script src="../../backend/js/core/jquery.3.2.1.min.js"></script>
          <script src="../../backend/js/core/popper.min.js"></script>
          <script src="../../backend/js/core/bootstrap.min.js"></script>

          <!-- jQuery UI -->
          <script src="../../backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
          <script src="../../backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

          <!-- jQuery Scrollbar -->
          <script src="../../backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
          <!-- jQuery Sparkline -->
          <script src="../../backend/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

          <!-- Datatables -->
          <script src="../../backend/js/plugin/datatables/datatables.min.js"></script>

          <!-- Sweet Alert -->
          <script src="../../backend/js/plugin/sweetalert/sweetalert.min.js"></script>

          <!-- Atlantis JS -->
          <script src="../../backend/js/atlantis.min.js"></script>

     </body>

     </html>
<?php } else {
     header('Location: ../login.php');
} ?>