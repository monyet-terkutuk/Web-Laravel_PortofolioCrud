<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard*') ? 'active' : '' }}" href="/dashboard/home">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/page*') ? 'active' : '' }}" href="/dashboard/page">
          <i class="mdi mdi-book-open menu-icon"></i>
          <span class="menu-title">Page</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/experience*') ? 'active' : '' }}" href="/dashboard/experience">
          <i class="mdi mdi-account-card-details menu-icon"></i>
          <span class="menu-title">Experience</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/education*') ? 'active' : '' }}" href="/dashboard/education">
          <i class="mdi mdi-school menu-icon"></i>
          <span class="menu-title">Education</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/skill*') ? 'active' : '' }}" href="/dashboard/skill">
          <i class="mdi mdi-tooltip-edit menu-icon"></i>
          <span class="menu-title">Skill</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/profile*') ? 'active' : '' }}" href="/dashboard/profile">
          <i class="mdi mdi-account-edit menu-icon"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/setting*') ? 'active' : '' }}" href="/dashboard/setting">
          <i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Setting Page</span>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- partial -->