      <!--sidebar start-->
      <aside>



          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <!--
              	  <h5 class="centered">
                   
                    <?php 
                      if (isset($_SESSION['usua_nombres']) && isset($_SESSION['usua_apellidos']) ) {
                        echo strtoupper($_SESSION['usua_nombres'])." ".strtoupper($_SESSION['usua_apellidos']);
                      }
                     ?>

                  </h5>
                -->
              	  	
                  <li>
                      <a href="<?= base_url()?>Portada">                       
                          <span>Categoria</span>
                      </a>
                  </li>
                  
                  

              </ul>
             
          </div>
      </aside>
      <!--sidebar end-->