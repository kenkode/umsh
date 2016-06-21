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
                        <a href="{{ URL::to('departments') }}"><i class="fa fa-list fa-fw"></i> Departments</a>
                    </li>
                    
                    <li>
                        <a href="{{ URL::to('banks') }}"><i class="fa fa-users fa-fw"></i> Banks</a>
                    </li>

                     <li>
                        <a href="{{ URL::to('bank_branch') }}"><i class="fa fa-users fa-fw"></i> Bank Branches</a>
                    </li>
                    
                    <li>
                        <a href="{{ URL::to('employee_type') }}"><i class="fa fa-users fa-fw"></i> Employee Types</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('citizenships') }}"><i class="fa fa-users fa-fw"></i> Citizenship</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('occurencesettings') }}"><i class="fa fa-list fa-fw"></i> Occurence Settings</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('benefitsettings') }}"><i class="fa fa-list fa-fw"></i> Benefits</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('job_group') }}"><i class="fa fa-users fa-fw"></i> Job Groups</a>
                    </li>
                   
                    <li>
                        <a href="{{ URL::to('AppraisalSettings') }}"><i class="fa fa-list fa-fw"></i> Appraisal Setting</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('appraisalcategories') }}"><i class="fa fa-list fa-fw"></i> Appraisal Category</a>
                    </li>

                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->