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

  <title>Guia do Suporte - Guia</title>
  <!--*************************************************************************************
    Carregando Head padrão
  **************************************************************************************-->
  <?php     
      $this->load->helper('url');
      $this->load->view('head');  
  ?>
</head>

<body id="page-top">
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
                        <li class="breadcrumb-item">Guia</li>
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
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <!-- Page Heading -->
                        <?php
                            $this->load->View("/partialViews/menu_guia_roteadores");
                        ?>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body div-vazia">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <h4 id="1-acessando-pagina-de-configuracao_1">1º Página de configuração</h4>
                                <p>Abra a página de configuração atráves de um navegador de internet, em seguida insira o endereço de acesso padrão deste modelo:<b> 10.0.0.1</b><p>
                                <a href="<?php echo base_url("/publico/img/intebras-roteador-tela-login.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intebras-roteador-tela-login.png")?>" style="width:480px"/>
                                </a>
                                <p>Informe um dos seguintes dados de acesso na tela acima:</p>
                                <table class="table table-bordered">
                                    <thead class="alert-danger">
                                        <tr>
                                            <th>Senha</th>
                                            <th>OBS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>admin</td>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <td>corp</td>
                                            <td>nc111</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Discar pppoe-->
                                <br/>
                                <h4 id="2-modo-de-conexao-pppoe-alternativa-ao-modo-ip-dinamico">2º Configurando o roteador para discar o PPPoE do cliente</h4>
                                <p>Clique em <b>Manutenção > Assistente de instalação</b>, que esta localizada no menu a esquerda.</p>
                                <br/>
                                <p><a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <p>Clique em <b>Iniciar assistente</b> .</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_iniciar.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_iniciar.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <p>Caso o roteador não identifique o tipo de conexão, você poderá configurar manualmente clicando no botão <b>Configurar manualmente</b></p>
                                <a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_configurar_manualmente.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_configurar_manualmente.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <p>Selecione o modo de conexão <b>PPPoE</b>, informe os dados de acesso do cliente e em seguida clique na <b>seta a esquerda</b> para avançar</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_pppoe.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_pppoe.png")?>" style="width:480px"/>
                                </a>
                                <br/><br/>
                                <!-- IP Dinamico-->
                                <h4 id="2-modo-de-conexao-ip-dinamico-alternativa-ao-modo-pppoe">2º Configurando o roteador com IP Dinâmico (alternativa ao modo PPPOE)</h4>
                                <p>Clique em <b>Manutenção > Assistente de instalação</b>, que esta localizada no menu a esquerda.</p>
                                <br/>
                                <p><a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <p>Clique em <b>Iniciar assistente</b> .</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_iniciar.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_iniciar.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <p>Caso o roteador não identifique o tipo de conexão, você poderá configurar manualmente clicando no botão <b>Configurar manualmente</b></p>
                                <a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_configurar_manualmente.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_btn_configurar_manualmente.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <p>Selecione o modo de conexão PPPoE,<b>Configurar manualmente</b></p>
                                <a href="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_DHCP.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/guia_rapido_manutencao_assistente_de_conexao_DHCP.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <br/>
                                <!--Configurar servidor DHCP-->
                                <h4 id="">3º Configurando DNS</h4>
                                <p>Clique em <b>Ir para modo avançado</b>.</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>" style="width:480px"/>
                                </a>
                                <p>Em seguida clique em <b>Rede local (LAN) > Servidor DHCP</b></p>
                                <a href="<?php echo base_url("/publico/img/intelbras/lan_servidor_dhcp.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/lan_servidor_dhcp.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <!--Configurar servidor DHCP-->
                                <h4 id="">4º Configurando WIFI</h4>
                                <p>Clique em <b>Ir para modo avançado</b>.</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>" style="width:480px"/>
                                </a>

                                <p>Clique em <b>Ir para modo avançado</b>.</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>" style="width:480px"/>
                                </a>
                                <br/>
                                <br/>
                                <!--Configurar Acesso Remoto-->
                                <h4 id="">5º Configurando Acesso Remoto</h4>
                                <p>Clique em <b>Ir para modo avançado</b>.</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/modo avançado.png")?>" style="width:480px"/>
                                </a>
                            
                                <p>Clique em <b>Ir para modo avançado</b>.</p>
                                <a href="<?php echo base_url("/publico/img/intelbras/wan_acesso_remoto.png")?>">
                                    <img src="<?php echo base_url("/publico/img/intelbras/wan_acesso_remoto.png")?>" style="width:480px"/>
                                </a>
                            
                            </div>
                        </div>
                    </div>
                    <!-- / .Card Body -->
                </div>
              <!-- / .Card-->
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
