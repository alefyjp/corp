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
                        <li class="breadcrumb-item">CRIANDO PPPOE NO WINDOWS 10</li>
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
                            <p><b>Passo 1</b>. Para iniciar a configuração Banda Larga, Clique em "Iniciar".</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_1.png")?>"/>
                            <br/>
                            <br/>
                            <p><b>Passo 2</b>. Clique no ícone "Configurações".</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_2.png")?>"/> 
                            <br/>
                            <br/>
                            <p><b>Passo 3</b>.  Na primeira fileira, clique em “Rede e Internet”.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_3.png")?>"/>
                            <br/>
                            <br/>
                            <p><b>Passo 4</b>. Na lado esquerdo, clique em “Conexão discada”.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_4.png")?>"/>
                            <br/>
                            <br/>
                            <p><b>Passo 5</b>. Clique em “Configurar uma nova conexão”.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_5.png")?>"/>
                            <br/> 
                            <br/>  
                            <p><b>Passo 6</b>. Clique em "Conectar-se à Internet” e clique no botão “Avançar”.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_6.png")?>"/> 
                            <br/>
                            <br/>
                            <p><b>Passo 7</b>. Clique em "Banda larga" (PPPoE).</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_7.png")?>"/> 
                            <br/>
                            <br/>
                            <p><b>Passo 8</b>. Preencha o campo Nome de usuário com o endereço de e-mail de conexão completo abaixo, insira a senha e em seguida dê um nome para a conexão.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_8.png")?>"/> 
                            <br/>
                            <br/>
                            <p><b>Passo 9</b>. Pronto, o discador foi criado. Agora clique em "Conectar agora" para se conectar à internet.</p>
                            <br/>
                            <img src="<?php echo base_url("publico/img/conexoes/ppoe_windows10_9.png")?>"/> 
                            <br/>
                            <br/>                          
                            <p>Sempre que desejar conectar, basta acessar a conexão criada e clicar em “Conectar”.</p>
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
