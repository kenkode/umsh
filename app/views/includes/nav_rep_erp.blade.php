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
                        <a href="{{ URL::to('erpReports/clients') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> Clients</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('erpReports/items') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> Items</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('erpReports/expenses') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> Expenses</a>
                    </li>

                    <li>
                        <a href="{{ URL::to('erpReports/paymentmethods') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> Payment Methods</a>
                    </li>  

                    <li>
                        <a href="{{ URL::to('erpReports/payments') }}" target="_blank"><i class="glyphicon glyphicon-file fa-fw"></i> Payments</a>
                    </li>  

                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->