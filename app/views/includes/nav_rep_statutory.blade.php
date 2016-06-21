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
                        <a href="{{ URL::to('payrollReports/selectNssfPeriod') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> NSSF Returns</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('payrollReports/selectNhifPeriod') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> NHIF Returns</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('payrollReports/selectPayePeriod') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> Paye Returns</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('payrollReports/selectNssfExcelPeriod') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> NSSF EXCEL</a>
                    </li>
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->