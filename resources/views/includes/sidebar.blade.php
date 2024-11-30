<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brndlogo user-panel mt-3 pb-3 mb-3 d-flex"> <img src="../../assets/images/logo.svg" style="width: 100%;"></div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">          
              <li class="nav-header">MANAGE USERS</li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unapproved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
              <li class="nav-header">MANAGE EVENTS</li>
              <li class="nav-item">
                @if($sidebarMenu === 'Event')
                <a href="{{route('Event')}}" class="nav-link active">
                @else
                <a href="{{route('Event')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Events</p>
                </a>
              </li>
              <li class="nav-item">
                @if($sidebarMenu === 'Add Event')
                <a href="{{route('addEvent')}}" class="nav-link active">
                @else
                <a href="{{route('addEvent')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Events</p>
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