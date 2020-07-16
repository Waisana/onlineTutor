<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active"><a href="{{route('dashboard')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
            </a></li>
            <li>
                <a href="{{route('teachers')}}">
                    <i class="menu-icon icon-inbox"></i>Teachers 
                    <b class="label green pull-right">12</b> 
                </a>
            </li>
            <li>
                <a href="{{route('students')}}">
                    <i class="menu-icon icon-inbox"></i>Students 
                    <b class="label green pull-right">11</b> 
                </a>
            </li>
        </ul>
        <!--/.widget-nav-->
        
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{route('classes')}}">
                    <i class="menu-icon icon-bullhorn"></i>Classes 
                </a>
            </li>
            <li>
                <a href="{{route('subjects')}}">
                    <i class="menu-icon icon-bold"></i> Subjects 
                </a>
            </li>
            <li>
                <a href="{{route('files')}}">
                    <i class="menu-icon icon-book"></i>Video/PDF Library 
                </a>
            </li>
            <li>
                <a href="{{route('userLogs')}}">
                    <i class="menu-icon icon-paste"></i>UserLogs 
                </a>
            </li>
        </ul>
        <!--/.widget-nav-->
        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right"></i>
                    Accounts Managment 
                </a>
                    <ul id="togglePages" class="collapse unstyled">
                        <li><a href="{{route('profile')}}"><i class="icon-inbox"></i>Profile </a></li>
                        <li><a href="{{route('teacherAccounts')}}"><i class="icon-inbox"></i>Teachers </a></li>
                        <li><a href="{{route('studentsAccounts')}}"><i class="icon-inbox"></i>Students</a></li>
                    </ul>
            </li>
            <li><a href="{{route('dashboard')}}"><i class="menu-icon icon-signout"></i>Logout </a></li>
        </ul>
    </div>
    <!--/.sidebar-->
</div>