
  <!-- HEADER -->
  <div id="header" class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>@yield('title')</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Loja</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
            <li class="breadcrumb-item active">@yield('description')</li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
              </a>

              <ul class="dropdown-menu" role="menu">
                <li class="nav-item d-none d-sm-inline">
                  <a class="nav-link logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Sair
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>




