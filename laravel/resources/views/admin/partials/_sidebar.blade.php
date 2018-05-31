
    <aside id="sidebar" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('images/logo.jpeg') }}" alt="AdminLTE Logo" class="img-circle elevation-4"
           style="opacity: 1; width: 120px; height: auto; margin: 0 auto; display:block;"><br>
      <span class="brand-text font-weight-light">Painel Adminstrativo da Loja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-shopping-cart"></i>&nbsp;
              <p>Loja</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/produtos') }}" class="nav-link">
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/categorias') }}" class="nav-link">
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Pedidos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="fa fa-image"></i>
              <p>Galeria</p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{ url('admin/imagens') }}" class="nav-link">
                  
                  <p>Imagens</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-envelope nav-icon"></i>
              <p>Contato</p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{ Request::route('admin.mensagens') }}" class="nav-link">
                  
                  <p>Mensagens</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->





