<style type="text/css">
#wrap{
    margin-top: 90px !important;
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}
.side {
    margin-left: 160px;
}

</style>

 <nav class="navbar-default navbar-static-side" id="wrap" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">
 
                 <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-credit-card fa-fw"></i> Employee Earnings <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu side">

                 <li>
                    <a href="{{ URL::to('other_earnings') }}"><i class="glyphicon glyphicon-credit-card fa-fw"></i> Earnings</a>
                  </li>

                  <li>
                    <a href="{{ URL::to('overtimes') }}"><i class="glyphicon glyphicon-credit-card fa-fw"></i> Overtimes</a>
                  </li>


                  <li>
                    <a href="{{ URL::to('employee_allowances') }}"><i class="glyphicon glyphicon-credit-card fa-fw"></i> Allowances</a>
                  </li>

              </ul>
             </li> 
                    
                  <li>
                    <a href="{{ URL::to('employeenontaxables') }}"><i class="glyphicon glyphicon-credit-card fa-fw"></i>Non Taxable Income</a>
                  </li>     

                  <li>
                    <a href="{{ URL::to('employee_relief') }}"><i class="glyphicon glyphicon-credit-card fa-fw"></i>Relief</a>
                  </li>    
               
                  <li>
                    <a href="{{ URL::to('employee_deductions') }}"><i class="glyphicon glyphicon-barcode fa-fw"></i> Deductions</a>
                  </li>

                  <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Process <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu side">

                 <li>
                    <a href="{{ URL::to('advance') }}"><i class="glyphicon glyphicon-circle-arrow-right fa-fw"></i>  Advance Salaries</a>
                  </li>
                        
                  <li>
                    <a href="{{ URL::to('payroll') }}"><i class="glyphicon glyphicon-circle-arrow-right fa-fw"></i>   Payroll</a>
                  </li>
              </ul>
             </li> 

                 <li class="dropdown-submenu" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i> Report <i class="fa fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu side">

                 <li>
                    <a href="{{ URL::to('advanceReports') }}"><i class="fa fa-file fa-fw"></i>  Advance Reports</a>
                  </li>
                  
                  <li>
                    <a href="{{ URL::to('payrollReports') }}"><i class="fa fa-file fa-fw"></i>  Payroll Reports</a>
                  </li>
                        
                  <li>
                    <a href="{{ URL::to('statutoryReports') }}"><i class="fa fa-file fa-fw"></i>  Statutory Reports</a>
                  </li>
              </ul>
             </li> 
                  
                
                  

                  <li>
                  <a href="{{ URL::to('payrollcalculator') }}"><i class="glyphicon glyphicon-calendar"></i> Payroll Calculator</a>
                  </li>

                  <li>
                    <a href="{{ URL::to('allowances') }}"><i class="glyphicon glyphicon-cog fa-fw"></i>  Payroll Settings</a>
                  </li>

                  <li>
                    <a href="{{ URL::to('email/payslip') }}"><i class="glyphicon glyphicon-envelope fa-fw"></i>  Email Payslips</a>
                  </li>   


                  <li>
                    <a href="{{ URL::to('migrate') }}"><i class="glyphicon glyphicon-random fa-fw"></i>  Data Migration</a>
                  </li>   
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
