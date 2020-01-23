<?php 
  $this->load->helper('url');
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
      <img class="" src="<?php echo base_url('publico/img/logo-corp.png')?>" style="width:100%"/>
    </div>
    <div class="sidebar-brand-text mx-3"></div>
  </a>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-wifi"></i>
      <span>Equipamentos</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url("index.php/equipamentos/fontes?modelo=")?>">Fontes</a>
        <a class="collapse-item" href="<?php echo base_url("/index.php/Equipamentos/Roteadores?modelo=")?>">Roteadores</a>
        <a class="collapse-item" href="<?php echo base_url("index.php/equipamentos/modens?modelo=")?>">Modens</a>
        <a class="collapse-item" href="<?php echo base_url("index.php/equipamentos/onus?modelo=")?>">ONUs</a> 
      </div>
    </div>
  </li>

  <!-- Instalações -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('index.php/instalacoes/')?>" >
      <i class="fas fa-fw fa-wrench"></i>
      <span>Instalações</span>
    </a>
  </li>
  <!--RBS-->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>RBs</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url("index.php/Rbs/Cidade?c=belo_horizonte")?>">Belo Horizonte</a>
      </div>
    </div>
  </li>
  <!--FIM RBS-->
  <!--CTOS-->
  <!--
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ctos" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>CTOS</span>
      </a>
      <div id="ctos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="/ctos/index.html">Betim</a>
          <a class="collapse-item" href="utilities-border.html">Contagem</a>
          <a class="collapse-item" href="utilities-border.html">Vespasiano</a>
        </div>
      </div>
    </li>
  -->
    <!--FIM CTOS-->
  <!--Sistemas-->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sistemas" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-cloud-download-alt"></i>
        <span>Downloads</span>
      </a>
      <div id="sistemas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?php echo base_url("index.php/Downloads/Programas")?>">Programas</a>
        </div>
      </div>
    </li>
    <!--FIM SISTEMAS-->
    <!--VPN-->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vpn" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-project-diagram"></i>
        <span>Conexões</span>
      </a>
      <div id="vpn" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?php echo base_url("index.php/Conexoes/Index?c=vpn_windows7")?>">VPN Windows 7</a>
          <a class="collapse-item" href="<?php echo base_url("index.php/Conexoes/Index?c=vpn_windows10")?>">VPN Windows 10</a>
          <a class="collapse-item" href="<?php echo base_url("index.php/Conexoes/Index?c=vpn_linux")?>">VPN Linux</a>
          <a class="collapse-item" href="<?php echo base_url("index.php/Conexoes/Index?c=pppoe_windows_7")?>">PPPoE pppoe_windows7</a>
          <a class="collapse-item" href="<?php echo base_url("index.php/Conexoes/Index?c=pppoe_windows_10")?>">PPPoE pppoe_windows10</a>
        </div>
      </div>
    </li>
    <!--FIM VPN-->
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class=" border-0 btn" id="sidebarToggle"></button>
  </div>

</ul>
<script src="<?php echo base_url('publico/js/sb-admin-2.min.js')?>"></script>
    