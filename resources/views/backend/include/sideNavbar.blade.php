 <div id="layoutSidenav_nav">
     <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
         <div class="sb-sidenav-menu">
             <div class="nav">
                 <div class="sb-sidenav-menu-heading">Core</div>
                 <a class="nav-link" href="index.html">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Dashboard
                 </a>
                 <div class="sb-sidenav-menu-heading">Interface</div>
                 <a class="nav-link" href="{{ route('addproducts') }}">
                     <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Add Product

                 </a>

                 <a class="nav-link" href="{{ route('manage') }}">
                     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     Manage Product

                 </a>

                 <div class="sb-sidenav-menu-heading">Addons</div>
                 <a class="nav-link" href="charts.html">
                     <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                     Charts
                 </a>
                 <a class="nav-link" href="tables.html">
                     <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                     Tables
                 </a>
             </div>
         </div>
         <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             Start Bootstrap
         </div>
     </nav>
 </div>
