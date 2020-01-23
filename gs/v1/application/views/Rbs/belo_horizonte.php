<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Suporte Corp - Inicio</title>
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
        <div class="container-fluid welcome" style="min-height:70vh">
         <!--*************************************************************************************
          Trilha
          **************************************************************************************-->
          <div class="row">
              <div class="col-lg-12 col-lg-12">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">RBS Belo Horizonte</li>
                      </ol>
                    </nav>
              </div>

              <div class="col-lg-12 col-lg-12">
                  <button onclick="porCidade('Betim')" class="btn btn-light">Betim</button>
                  <button onclick="porCidade('Belo Horizonte')" class="btn btn-light">Belo Horizonte</button>
                  <button onclick="porCidade('Vespasiano')" class="btn btn-light">Vespasiano</button>
                  <button onclick="porCidade('Ibirité')" class="btn btn-light">Ibirité</button> 
                  <button onclick="porCidade('Todas')" class="btn btn-light">Todas</button>                  
              </div>
          </div>   

          <br/>
          <!--*************************************************************************************
          Equipamentos
          **************************************************************************************-->
          <div class="row" id="row-rbs">
              
          </div>   
         
        </div><!--fim row-->
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

  <script type="text/javascript">
        /******************************************************************************
          Lista de RBS
        ******************************************************************************/
        var todasRbs = [
          {"nome":"Bone Ingá", "bairros": [""], 'ip':'177.91.75.148', 'modelo':'1036', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/ccr1036-8g-2s+.jpg', "cidade":"Betim"},
          {"nome":"Tropical 1 ", "bairros": ["Cond - Dakota", "Capelinha"], 'ip':'177.91.74.53', 'modelo':'CCR109-8G-1S', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/CCR109-8G-1S.png', "cidade":"Betim"},
          {"nome":"Haul Camargos ", "bairros": ["PRF", "InterCity", "SEST SENAT"], 'ip':'177.91.74.198', 'modelo':'ccr1009-7G-1C-1S+', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/CCR1009-7G-1C-1S+.jpg'},
          {"nome":"Haul Petrolina ", "bairros": ["White Martins"], 'ip':'177.91.74.170', 'modelo':'RB750', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/RB750.jpg', "cidade":"Ibirité"},
          {"nome":"Laranajeiras ", "bairros": ["JD.Teresópolis", "São Caetano", "São Luiz", "Vila Cristina","São Cristovão","Cond Aquarela", "Cond Rossi A", "Cond Rossi B","Santo Antonio","Laranjeiras"], 'ip':'177.91.74.113', 'modelo':'CCR1036-8G-2S+', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/ccr1036-8g-2s+.jpg', "cidade":"Betim"},
          {"nome":"Valent ", "bairros": ["Laranjeiras"], 'ip':'177.91.74.62', 'modelo':'RB3011UIAS', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/rb3011.png', "cidade":"Betim"},
          {"nome":"Morro Alto 1,2 e 3 ", "bairros": ["JD. Comerciários", "Cond Veneza", "Nova Pampulha", "Cond Dubai"], 'ip':'177.91.72.198', 'modelo':'CCR1009-7G-1C-1S+', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/CCR1009-7G-1C-1S+.jpg', "cidade":"Vespasiano"},
          {"nome":"Parque Avenida ", "bairros": ["Parque Avenida","Alpes", "Vila Leonina"], 'ip':'177.91.74.238', 'modelo':'CCR109-8G-1S', 'img':'http://corporativa.com.br/gs/v1/publico/img/RB/CCR109-8G-1S.png', "cidade":"Belo Horizonte"}
          
          /*pq av/ havai/alpes/vila leonina*/
        ]
      
      /******************************************************************************
          Criando HTML
        ******************************************************************************/
      
      /******************************************************************************
          Filtrando
          ******************************************************************************/
          function porCidade(cidade)
          {
            var resultado = [];

            for(indice=0; indice < todasRbs.length; indice++)
            {
                if(cidade == "Todas")
                {
                    resultado = todasRbs;
                }
                else
                {
                  if(todasRbs[indice]["cidade"] == cidade)
                  {
                   resultado.push(todasRbs[indice]);
                  }
                }
            }

            gerarHtml(resultado);
          }

          /******************************************************************************
          Criando HTML
          ******************************************************************************/
          function gerarHtml(rbs)
          {
            document.getElementById("row-rbs").innerHTML='';

            for(indice=0; indice < rbs.length; indice++)
            {
              $("#row-rbs").append('<div class="col-xl-3 col-lg-3 col-rb" id="rb'+indice+'"></div>');
              $('#rb'+indice).append('<div class="card" id="card'+indice+'" style="width: 18rem;"></div>');
              document.getElementById('card'+indice).innerHTML+='<img class="card-img-top img-rb" src="'+rbs[indice]["img"]+'" alt="Card image cap"/>';
              $('#card'+indice).append('<div class="card-body" id="card-body'+indice+'"></div>');
              document.getElementById('card-body'+indice).innerHTML+='<h5 class="card-title">'+rbs[indice]["nome"]+'</h5></div>';
              $('#card-body'+indice).append('<div class="informacoes-equipamento" id="info'+indice+'"></div>');
              document.getElementById('info'+indice).innerHTML+='<ol id="ol'+indice+'"></ol>';

              for(b=0; b < rbs[indice]["bairros"].length; b++)
              {
                document.getElementById('ol'+indice).innerHTML+='<li>'+rbs[indice]["bairros"][b]+'</li>';
              }


              $('#card'+indice).append('<div class="card-footer" id="card-footer'+indice+'"></div>');
              document.getElementById('card-footer'+indice).innerHTML+='<span class="">IP: '+rbs[indice]["ip"]+'</span><br/>';
              document.getElementById('card-footer'+indice).innerHTML+='<span class="">Modelo: '+rbs[indice]["modelo"]+'</span><br/>';
            }
          }

      $(document).ready(function(){         
          
          gerarHtml(todasRbs);          
      });
    </script>
</body>

</html>
