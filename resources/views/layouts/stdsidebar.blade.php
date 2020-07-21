<div class="col-md-3">
    <div class="sidebar">
        <ul class="widget widget-menu list-unstyled">
            <li>
                <a href="{{route('studentsPage')}}">
                    <i class="menu-icon icon-inbox"></i>Home  
                </a>
            </li>
            <li>
                <a href="{{route('stdassignment')}}">
                    <i class="menu-icon icon-inbox"></i>Tasks 
                    <b class="label green pull-right">12</b> 
                </a>
            </li>
            <li>
                <a href="{{route('files')}}">
                    <i class="menu-icon icon-book"></i>Video/PDF Library 
                </a>
            </li>
            
        </ul>
        <!--/.widget-nav-->
        
        <ul class="widget widget-menu list-unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right"></i>
                    Accounts Managment 
                </a>
                    <ul id="togglePages" class="collapse list-unstyled">
                        <li><a href="{{route('profile')}}"><i class="icon-inbox"></i>Profile </a></li>
                    </ul>
            </li>
            <li><a href="{{route('dashboard')}}"><i class="menu-icon icon-signout"></i>Logout </a></li>
            
        </ul>
            
    </div>
    
</div>