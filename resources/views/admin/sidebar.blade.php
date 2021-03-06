<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">Safari Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>







    <!-- Nav Item - Pages Collapse Menu -->
      <!-- Users Menu -->
      <li class="nav-item {{Request::is('users_show')?'active':''}} ">
        <a class="nav-link collapsed" href="{{url('users_show')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
    </li>




     <!-- Nav Item - welcome message Collapse Menu -->
     <li class="nav-item {{Request::is('welcomemessage')?'active':''}}">
        <a class="nav-link collapsed" href="{{url('welcomemessage')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Welcome Message</span>
        </a>
    </li>




    <!-- Nav Item - Bookings Collapse Menu -->
    <li class="nav-item {{Request::is('booking_show')?'active':''}}">
        <a class="nav-link collapsed" href="{{url('booking_show')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Bookings</span>
        </a>
    </li>



       <!-- Nav Item - Offers Collapse Menu -->
       <li class="nav-item {{Request::is('offers')?'active':''}}">
        <a class="nav-link collapsed" href="{{url('offers')}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Offers</span>
        </a>
    </li>



           <!-- Nav Item - User Messages Collapse Menu -->
           <li class="nav-item {{Request::is('user_messages')?'active':''}}">
            <a class="nav-link collapsed" href="{{url('user_messages')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>User Messages</span>
            </a>
        </li>


         <!-- Nav Item - About us Collapse Menu -->
         <li class="nav-item {{Request::is('aboutus')?'active':''}}">
            <a class="nav-link collapsed" href="{{url('aboutus')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>About us</span>
            </a>
        </li>


          <!-- Nav Item - About us Collapse Menu -->
          <li class="nav-item {{Request::is('moredetails')?'active':''}}">
            <a class="nav-link collapsed" href="{{url('moredetails')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>More Details</span>
            </a>
        </li>


 <!-- Nav Item - About us Collapse Menu -->
 <li class="nav-item {{Request::is('slider')?'active':''}}">
    <a class="nav-link collapsed" href="{{url('slider')}}">
        <i class="fas fa-fw fa-cog"></i>
        <span>Slider Images</span>
    </a>
</li>




    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
