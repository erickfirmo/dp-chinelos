
  <aside id="sidebar" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" 
           style="opacity: 1; width: 150px; height: auto; margin: 0 auto; display:block;"><br>
      <span class="brand-text centralize font-weight-light">&nbsp;&nbsp;Seja Bem Vindo, Hallo </span>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p>Loja</p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('admin/home') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/produtos') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/categorias') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ url('admin/pedidos') }}" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
                  <p>
                    Pedidos&nbsp;
                    @if($count_novos_pedidos > 0)
                    <span class="badge badge-danger right">{{ $count_novos_pedidos }}</span>
                    

                    @endif
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <!--<li class="nav-item has-treeview menu-open">
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
          </li>-->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p>Contato</p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{ Request::route('admin.mensagens') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
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





