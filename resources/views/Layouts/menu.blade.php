 <ul class="sidebar-menu">
     <li class="menu-header">Dashboard</li>
     <li
         class="nav-item dropdown {{ request()->routeIs('dashboard.index',
         'kategori.index',
         'kategori.add',
         'kategori.edit') ? 'active' : '' }}">

         <a href="{{ route('dashboard.index') }}"
             class="nav-link has-dropdown {{ request()->routeIs('dashboard.index',
             'kategori.index',
             'kategori.add',
             'kategori.edit') ? 'active' : '' }}">
             <i class="fas fa-fire"></i><span>Dashboard</span></a>
         <ul
             class="dropdown-menu {{ request()->routeIs('dashboard.index',
             'kategori.index',
             'kategori.add',
             'kategori.edit') ? 'show' : '' }}">

             <li><a class="nav-link" href="/users">Users</a></li>
             <li class="{{ request()->routeIs('kategori.index',
             'kategori.add',
             'kategori.edit') ? 'active' : '' }}">
                 <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
             </li>
             <li><a class="nav-link" href="#">Postingan</a></li>
         </ul>
     </li>
