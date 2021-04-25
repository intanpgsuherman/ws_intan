<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../AdminLTE/assets/img/brand/intan.jpg" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link {{request() -> is('list') ?'active' : ''}}" href="{{route('list')}}">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">List Dosen</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link {{request() -> is('list_json') ?'active' : ''}}" href="{{route('list_json')}}">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">List Dosen (DB to JSON)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{request() -> is('create_json') ?'active' : ''}}" href="{{route('create_json')}}">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Create JSON to DB</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{request() -> is('matakuliah') ?'active' : ''}}" href="{{route('matakuliah')}}">
                <i class="ni ni-books"></i>
                <span class="nav-link-text">Matakuliah</span>
              </a>
            </li>
          </ul>
<br>
 <!-- Divider -->
 <hr class="my-3">
          <li class="nav-item">
            <i class="ni ni-button-power"></i>
            <a class="col" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
            </li>

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
         
          <!-- Navigation -->
        </div>
      </div>
    </div>
  </nav>