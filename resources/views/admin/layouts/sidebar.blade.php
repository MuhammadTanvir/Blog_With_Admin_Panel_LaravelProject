<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/admin/post')}}"><i class="fa fa-circle-o"></i> Posts</a></li>

             @can('posts.category',Auth::user())
            <li><a href="{{url('/admin/category')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            @endcan

             @can('posts.tag',Auth::user())
            <li><a href="{{url('/admin/tag')}}"><i class="fa fa-circle-o"></i> Tags</a></li>
            @endcan

            <li><a href="{{url('/admin/user')}}"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="{{url('/admin/role')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
            <li><a href="{{url('/admin/permission')}}"><i class="fa fa-circle-o"></i> Permissions</a></li>
          </ul>
        </li>
        <li class="treeview">
         
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
       
        
       
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>