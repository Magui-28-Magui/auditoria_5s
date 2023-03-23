 <!-- partial -->
 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url(); ?>">
                 <i class="icon-grid menu-icon"></i>
                 <span class="menu-title">Inicio</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                 <i class="icon-clipboard menu-icon"></i>
                 <span class="menu-title">Auditorias</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-basic">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>auditorias">Almacen</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pages/ui-features/dropdowns.html">Produccion</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pages/ui-features/typography.html">Oficinas</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                 <i class="icon-file menu-icon"></i>
                 <span class="menu-title">Reportes</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="form-elements">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pages/forms/basic_elements.html">General</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pages/forms/basic_elements.html">Especifico</a></li>
                 </ul>
             </div>
         </li>
     </ul>
 </nav>