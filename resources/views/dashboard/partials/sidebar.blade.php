<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard*') ? 'active' : '' }}" href="/dashboard/home">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/page*') ? 'active' : '' }}" href="/dashboard/page">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Page</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/experience*') ? 'active' : '' }}" href="/dashboard/experience">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Experience</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/education*') ? 'active' : '' }}" href="/dashboard/education">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Education</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/skill*') ? 'active' : '' }}" href="/dashboard/skill">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Skill</span>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- partial -->