<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <?php
                    /*  $mimenu = json_decode($_SESSION['usuario']["menu"],true);
                        $numero = 1;$grupo = "";
                                           foreach ($mimenu as $posicion ) {         
                                               foreach ($posicion as $name) {
                                                   
                                                   if($numero == $name[0]){
                                                     switch($numero){
                                                         case '1':
                                                             $grupo = "PACIENTE";
                                                             break;
                                                        case '2':
                                                            $grupo = "CONSULTORIO";
                                                            break;
                                                        case '3':
                                                            $grupo = "AVANZADO";
                                                            break;
                                                        default:
                                                            $grupo = "GRUPO DESCONOCIDO";
                                                        break;
                                                     }
                                                    echo '<div class="sb-sidenav-menu-heading">'.$grupo.'</div>';
                                                            if($numero === '3'){                                              
                                                                ++$numero;
                                                            }else{
                                                                $numero++;
                                                            }
                                                        } 
                                                        echo '<a class="nav-link" href="'.base_url.$name[2].'">
                                                        <div class="sb-nav-link-icon"><i class="'.$name[3].'" aria-hidden="true"></i></div>
                                                       '.$name[1].'
                                                    </a>';
                                                  //echo $name[1]."=> ".$name[2];
                                              }
                  
                                           } 
                            */
                    ?>




                    <div class="sb-sidenav-menu-heading">Inicio</div>
                    <a class="nav-link" href="<?= base_url ?>Cliente/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        NUEVO CLIENTE
                    </a>
                    <a class="nav-link" href="<?= base_url ?>Cliente/lista">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        CONSULTA CLIENTE
                    </a>
                    <a class="nav-link" href="<?= base_url ?>Proveedor/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        NUEVO PROVEEDOR
                    </a>
                    <a class="nav-link" href="<?= base_url ?>Proveedor/lista">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        CONSULTA PROVEEDOR
                    </a>
                    <a class="nav-link" href="<?= base_url ?>Compras/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        COMPRAS
                    </a>
                    <a class="nav-link" href="<?= base_url ?>Remision/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        REMISIONES
                    </a>
                    <a class="nav-link" href="<?= base_url ?>Pedido/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        PEDIDOS
                    </a>
                    <div class="sb-sidenav-menu-heading">SUCURSALES</div>
                  <!--   <a class="nav-link" href="<?= base_url ?>Consultorio/nuevo">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        PACIENTES NUEVOS
                    </a> -->
                 <!--    <a class="nav-link" href="<?= base_url ?>Consulta/lista">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        MIS PACIENTES
                    </a> -->

                    <div class="sb-sidenav-menu-heading">Administracion</div>
                 <!--    <a class="nav-link" href="<?= base_url ?>Consultorio/control">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        CONTROL
                    </a> -->
                <!--     <a class="nav-link" href="<?= base_url ?>Doctor/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        ALTA DOCTOR
                    </a> -->

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small" id="saludoDoctor" data-id="<?= $_SESSION['usuario']['status'] ?>">Hola Usuario:</div>
                <?php
                echo ucwords(SED::decryption($_SESSION['usuario']['nombre'])) . ' ' . Utls::getApellido($_SESSION['usuario']['apeliidos']);
                //echo ucwords(SED::decryption($_SESSION['usuario']['nombre']));  
                ?>

            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">