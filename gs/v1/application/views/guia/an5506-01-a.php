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
                <!-- Card Body -->
                <div class="card-body">
                    <p><b>Passo 1</b>. Localize o endereço mac da ONU</b><p>
                    <a href="<?php echo base_url("/publico/img/onu/mac.jpg")?>">
                        <img class="img-ilustrativa" src="<?php echo base_url("/publico/img/onu/mac.jpg")?>"/>
                    </a>
                    <br/>
                    <br/>
                    <p><b>Passo 2</b>. </b><p>
                    <a href="<?php echo base_url("/publico/img/onu/ordem-de-servico.jpg")?>">
                        <img class="img-ilustrativa" src="<?php echo base_url("/publico/img/onu/ordem-de-servico.jpg")?>"/>
                    </a>

                    <br/>
                    <h4 id="1-acessando-pagina-de-configuracao">3 - Abrindo o ANM2000</h4>
                    <p>Abra o ANM2000 e insira o <b>usuário:</b> 1 e <b>senha:</b> 1</b><p>
                    <p><b>Obs:</b> Caso seja o primeiro acesso insira o seguinte endereço para o servidor: 177.91.78.253<p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-login.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-login.png")?>" style="width:480px"/>
                    </a>

                    <br/>
                    <h4 id="1-acessando-pagina-de-configuracao">4 - Localizando e habilitando a ONU</h4>
                    <p>No menu a esquerda, clique em <b>Corporativa telecom.</b> Agora localize a OLT correspondente a RB do cliente, no nosso caso é: <b>OLT_BHE_BETIM_LARANJEIRAS.</b> 
                        Em seguida clique em <b>AN5516-06-NODE1.</b> E finalmente em <b>HSWA[9]_GERENCIA</b>.<p>
                    <p>
                        Agora com o botão direito do mouse, clique em <b>HSWA[9]_GERENCIA</b> e selecione <b>Service Configuration Management</b>.
                    </p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-management.png")?>" style="width:480px">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-management.png")?>"/>
                    </a>
                    <p>
                        Será apresentado a seguinte tela:
                    </p> 
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-management-olt.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-management-olt.png")?>"/>
                    </a>
                    <p>
                        Clique em <b>ONU Autentication</b> > <b>ONU Physic_IDaddress Whitelist</b>
                    </p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-management-olt-2.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-management-olt-2.png")?>"/>
                    </a>
                    <p>Será apresentado a seguinte tela:</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-ONU-Physic-IDaddress-Whitelist.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-ONU-Physic-IDaddress-Whitelist.png")?>"/>
                    </a>

                    <p>Clique no botão <b>ONU</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-ONU-Physic-IDaddress-Whitelist-Get-Unauthorized-ONU.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-ONU-Physic-IDaddress-Whitelist-Get-Unauthorized-ONU.png")?>"/>
                    </a>

                    <p>Agora clique em <b>Get Unauthorized ONU</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU.png")?>"/>
                    </a>

                    <p>Selecione o checkbox correspondente ao mac da ONU e clique no botão <b>OK</b>.</p>
                    <p class="alert alert-warning">
                        <b>Obs: </b>Guarde o numero do Slot e o numero da Pon, os mesmos serão usados mais a diante.
                    </p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU-2.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU-2.png")?>"/>
                    </a>

                    <p>Clique no botão <b>Write Device</b>(4º botão)</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU-3.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU-3.png")?>"/>
                    </a>
                    
                    <p>Agora no botão <b>Write to Database</b>(6º botão)</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU-4.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-Get-Unauthorized-ONU-4.png")?>"/>
                    </a>

                    <p>Feche todas as abas, deixando aberta apenas a <b>Topology View</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-inicio.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-inicio.png")?>"/>
                    </a>

                    <p>Em seguida clique com o boão direito encima da OLT referente a instalação do cliente <b>(em nosso caso é OLT_BHE_BETIM_LARANJEIRAS)</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-inicio-onu-manual-synchronization.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-inicio-onu-manual-synchronization.png")?>"/>
                    </a>

                    <p>Dentro da OLT, selecione a opção que corresponde ao Slot onde a ONU esta conectada</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-slot-olt.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-slot-olt.png")?>"/>
                    </a>

                    <p>Em nosso caso será o Slot 12 e a PON 12.  <b>GCOB 12</b> > <b>PON12_CORP_IMBIRUCU_VLAN_2111</b></p>
                    <p class="alert alert-warning"><b>Obs: </b>Guarde o numero da VLAN, será necessário mais a frente. Neste caso é a VLAN <b>2111</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-slot-olt-pon.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-slot-olt-pon.png")?>"/>
                    </a>

                    <p>Nesta nova tela procure pelo mac da ONU. Caso necessário aperte <button>Ctrl</button> +<button>F</button> para exibir a opção de filtro</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-filtrando-mac.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-filtrando-mac.png")?>"/>
                    </a>

                    <p>Clique com o botão direito encima do nome da ONU e escolha a opção <b>Service Config Management</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-pon-service-config-management.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-pon-service-config-management.png")?>"/>
                    </a>

                    <p>Clique em <b>Config</b> > <b>WAN Service</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-pon-wan-service.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-pon-wan-service.png")?>"/>
                    </a>

                    <p>Note que o console exibe a mensagem: <b>Command Succeed</b>, informando que a ONU aceita ser configurada como router.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-pon-wan-service.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-pon-wan-service.png")?>"/>
                    </a>

                    <p>Clique no botão <b>Append</b>. Será perguntado o numero de linhas, não mude nada, apenas clique em <b>Ok</b>.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-pon-wan-service-numero-rows.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-pon-wan-service-numero-rows.png")?>"/>
                    </a>

                    <p>Note que algumas colunas ficaram disponiveis, apresentando uma coloração azul.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-pon-wan-service-2.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-pon-wan-service-2.png")?>"/>
                    </a>

                    <p>Altere os seguintes valores:</p>
                    <div class="overflow-horizontal-9">
                        <table class="table-mini">
                            <thead>
                                <tr>
                                    <th>WAN_Mode</th>
                                    <th>WAN_Conn_Type</th>
                                    <th>WAN_Vlan_ID</th>
                                    <th>Wan_PPPOE_Username</th>
                                    <th>Wan_PPPOE_Password</th>
                                    <th>LAN 1</th>
                                    <th>LAN 2</th>
                                    <th>LAN 3</th>
                                    <th>LAN 4</th>
                                    <th>SSID 1</th>
                                    <th>SSID 2</th>
                                    <th>SSID 3</th>
                                    <th>SSID 4</th>
                                </tr>
                            </thead>
                            <tbody class="bg-azul">
                                <tr>
                                    <td>Internet</td>
                                    <td>Route</td>
                                    <td>Nº da Vlan</td>
                                    <td>PPPoE do cliente</td>
                                    <td>q1w2e3</td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td><input type="checkbox" checked="checked"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br/>
                    <p>Salve as alterações clicando no botão <b>write to database</b>.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-btn-write-to-database.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-btn-write-to-database.png")?>"/>
                    </a>
                    
                    <p>E depois em <b>Create on database</b>.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-btn-create-no-database.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-btn-create-no-database.png")?>"/>
                    </a>

                    <p>Agora clique com o botão direito no nome da ONU e selecione a opção Service Config</b>.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-onu-service-config.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-onu-service-config.png")?>"/>
                    </a>

                    <p>Clique no botão <b>Add</b>.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-btn-add.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-btn-add.png")?>"/>
                    </a>

                    <p>Na tela abaixo entre com as seguintes configurações e depos clique em <b>Ok</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-btn-add.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-btn-add.png")?>"/>
                    </a>

                    <p>Clique no botão <b>Modify On Divice</b> e depois em <b>Write DB</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-btn-modify-on-device.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-btn-modify-on-device.png")?>"/>
                    </a>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-btn-write-db.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-btn-write-db.png")?>"/>
                    </a>

                    <p>Agora clique em <b>Close</b> para fechar esta janela.</p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-btn-close.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-btn-close.png")?>"/>
                    </a>

                    <p>Agora precisamos mudar o nome da ONU. Clique novamente com o botão direito encima do nome e escolha a opção <b>Property</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-property.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-property.png")?>"/>
                    </a>

                    <p>Agora precisamos mudar o nome da ONU. Clique novamente com o botão direito encima do nome e escolha a opção <b>Property</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-property.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-property.png")?>"/>
                    </a>

                    <p>Altere o nome da ONU para o nome completo do cliente e clique em <b>Ok</b></p>
                    <p class="alert alert-warning">OBS: Geralmente o nome estará no seguinte formato <b>OLT_BH_BETIM_LARANJEIRAS_172.168.123.10</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-property-btn-ok.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-property-btn-ok.png")?>"/>
                    </a>

                    <p>Clique novamente com o botão direito na gerencia da OLT, neste caso é a <b>HSWA[9]_GERENCIA</b> e selecione <b>Service Configuration Management</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-management.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-management.png")?>"/>
                    </a>

                    <p>Clique em <b>System control</b> > <b>Save config to flash</b></p>
                    <a href="<?php echo base_url("/publico/img/onu/anm-service-config-management.png")?>">
                        <img src="<?php echo base_url("/publico/img/onu/anm-service-config-management.png")?>"/>
                    </a>
                    <div style="visibility:hidden">configurar roteador ; passo a passo ; multilaser</div>
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
