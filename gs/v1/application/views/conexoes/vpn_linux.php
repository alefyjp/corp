<?php 
  $this->load->helper('url')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Guia do Suporte - Instalações</title>
  <!--*************************************************************************************
    Carregando Head padrão
  **************************************************************************************-->
  <?php     
      $this->load->helper('url');
      $this->load->view('head');  
  ?>
</head>

<body id="page-top" class="">
  <!-- Page Wrapper -->
  <div id="wrapper">
  <!--*************************************************************************************
    Menu-lateral
  **************************************************************************************-->
    
    <div id="menu-lateral">
        <?php     
            $this->load->view('/partialViews/menu-lateral');  
        ?>
    </div>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
      <!--*************************************************************************************
        Barra superior
      **************************************************************************************-->
        <div id="barra-superior">
            <?php     
                $this->load->view('/partialViews/toolbar.php');  
            ?>
        </div>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!--*************************************************************************************
          Trilha
          **************************************************************************************-->
          <div class="row">
              <div class="col-lg-12 col-lg-12">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">CRIANDO VPN NO LINUX</li>
                      </ol>
                    </nav>
              </div>
          </div>      
          <!--*************************************************************************************
          Equipamentos
          **************************************************************************************-->
          <div class="row">
            <!-- tl wr 849n-->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row div-vazia">
                        <div class="col-xl-12 col-lg-12">
                            <p><b>Passo 1</b>. Abra o terminal e instale o OpenVPN com o seguinte comando.</p>
                            <p><b>Comando:</b>. sudo apt-get install openvpn network-manager-openvpn network-manager-openvpn-gnome</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_1.png")?>"/>
                            <br/>
                            <br/>
                            <p><b>Passo 2</b>. Abra o menu de rede, vá até "VPN Connections" e clique em "Configure VPN...".</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_2.png")?>"/> 
                            <br/>
                            <br/>
                            <p><b>Passo 3</b>.  Clique em "Add".</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_3.png")?>"/>
                            <br/>
                            <br/>
                            <p><b>Passo 4</b>. Clique em "Import a saved VPN configuration...".</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_4.png")?>"/>
                            <br/>
                            <br/>
                            <p><b>Passo 5</b>. Clique em "Create".</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_5.png")?>"/>
                            <br/> 
                            <br/>
                            <p><b>Passo 6</b>. Transfira a configuração OpenVPN, e faça unzip e importe o ficheiro .ovpn.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_6.png")?>"/>
                            <br/> 
                            <br/><p><b>Passo 7</b>. Insira os seus dados de login hide.me e clique em "Save..."</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_7.png")?>"/>
                            <br/> 
                            <br/><p><b>Passo 8</b>. Mude para "Advanced Configuration" e depois na aba "TLS Authentication" marque "Use additional TLS authentication". Selecione o ficheiro "StaticKey.pem" da configuração e defina o "Key Direction" para "0". Confirme com "OK"</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_8.png")?>"/>
                            <br/> 
                            <br/><p><b>Passo 9</b>. Abra o menu da rede para estabelecer uma ligação VPN.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_9.png")?>"/>
                            <br/> 
                            <br/> <br/><p><b>Passo 10</b>. Se a ligação tiver sido estabelecida com sucesso, o estado será mostrado na barra de menu. Pode gerir a sua ligação VPN usando as definições de rede.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/vpn_linux_10.png")?>"/>
                            <br/> 
                            <br/>                           
                            <p>Dessa forma, você poderá configurar uma conexão VPN em seu computador com Linux e acessar redes privadas de uma empresa ou site.</p>
                            <br/>                           
                        </div>                       
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><?php $this->load->view('footer')?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url("publico/vendor/jquery/jquery.min.js")?>"></script>
  <script src="<?php echo base_url("publico/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url("publico/vendor/jquery-easing/jquery.easing.min.js")?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url("publico/js/sb-admin-2.min.js")?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url("publico/vendor/chart.js/Chart.min.js")?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url("publico/js/demo/chart-area-demo.js")?>"></script>
  <script src="<?php echo base_url("publico/js/demo/chart-pie-demo.js")?>"></script>

  <!-- Inclusão dos menus -->
  <script src="<?php echo base_url("publico/js/menus.js")?>"></script>
</body>

</html>
