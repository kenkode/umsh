<style type="text/css">
#wrap{
    margin-top: 90px !important;
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}
</style>

 <nav class="navbar-default navbar-static-side" id="wrap" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">
                     <li>
                        <a href="{{ URL::to('employees/create') }}"><i class="fa fa-user fa-fw"></i> New Employee </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('employees') }}"><i class="fa fa-users fa-fw"></i> Employees </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('Properties') }}"><i class="fa fa-users fa-fw"></i> Company Property </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('Appraisals') }}"><i class="fa fa-users fa-fw"></i> Employee Appraisal </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('occurences') }}"><i class="fa fa-users fa-fw"></i> Employee Occurence </a>
                    </li>

                    <li>
                        <a target="_blank" href="{{ URL::to('EmployeeForm') }}"><i class="fa fa-file fa-fw"></i> Employee Detail Form </a>
                    </li>

                     <li>
                        <a href="{{ URL::to('reports/employees') }}"><i class="fa fa-folder fa-fw"></i> HR Reports </a>
                    </li>
                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->