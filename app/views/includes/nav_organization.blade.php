<style type="text/css">
#wrap{
    margin-top: 90px !important;
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}
.dropdown-menu {
    margin-left: 110px;
}
</style>

 <nav class="navbar-default navbar-static-side" id="wrap" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="{{ URL::to('organizations') }}"><i class="glyphicon glyphicon-home fa-fw"></i> Organization</a>
                    </li>

                     <li>
                        <a href="{{ URL::to('branches') }}"><i class="fa fa-list fa-fw"></i> Branches</a>
                    </li>

                     <li>
                        <a href="{{ URL::to('groups') }}"><i class="fa fa-users fa-fw"></i> Groups</a>
                    </li>


                    <li>
                        <a href="{{ URL::to('currencies') }}"><i class="fa fa-list-alt fa-fw"></i> Currency</a>
                    </li>

                    <li>
                    <a href="{{ URL::to('departments') }}"><i class="glyphicon glyphicon-cog fa-fw"></i>   Settings</a>
                  </li>

                   <li>
                        <a href="{{ URL::to('deactives') }}"><i class="fa fa-users fa-fw"></i> Activate Employee</a>
                    </li>

                    
                    
<li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-list fa-fw"></i> Reminders <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu">

                    <li>
                        <a href="{{ URL::to('reminderview') }}"><i class="fa fa-list fa-fw"></i> Contract Reminders</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('reminderdoc/indexdoc') }}"><i class="fa fa-file fa-fw"></i>Document Reminders</a>
                    </li>

                    </ul>
                    </li>
                   
                     
                    


                     


                    




                     


                    
                     
                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->