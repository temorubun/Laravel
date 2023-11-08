<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}" href="{{route('dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('profile.index') ? '' : 'collapsed' }}" href="{{route('profile.index')}}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>
</ul>