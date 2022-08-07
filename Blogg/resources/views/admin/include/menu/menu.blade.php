
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge badge-pill badge-info float-right"></span>
                        <span>Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span>Category Module </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('category.add')}}">Add Category</a></li>
                        <li><a href="{{route('category.manage')}}">Manage Category</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-blog"></i>
                        <span>Blog Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('blog.add')}}">Add Blog</a></li>
                        <li><a href="{{route('blog.manage')}}">Manage Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span>Commennts Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.html">Manage Comment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-user"></i>
                        <span>Author Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.html">Add Author</a></li>
                        <li><a href="tasks-kanban.html">Manage Author</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-gear"></i>
                        <span>Setting Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-kanban.html">Manage </a></li>

                    </ul>
                </li>
                @if(Auth::user()->id == 1)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-user-group"></i>
                        <span>User Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('user.add')}}">Add User </a></li>
                        <li><a href="{{route('user.manage')}}">Manage User</a></li>

                    </ul>
                </li>
                @endif


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
