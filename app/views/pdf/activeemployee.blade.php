<?php


function asMoney($value) {
  return number_format($value, 2);
}

?>
<html >



<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style type="text/css">

table {
  max-width: 100%;
  background-color: transparent;
}
th {
  text-align: left;
<<<<<<< HEAD
  position: fixed;
}
.table {
  width: 100%;
  margin-bottom: 50px;
=======
}
.table {
  width: 100%;
  margin-bottom: 2px;
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
}
hr {
  margin-top: 1px;
  margin-bottom: 2px;
  border: 0;
  border-top: 2px dotted #eee;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  line-height: 1.428571429;
  color: #333;
  background-color: #fff;
}



 @page { margin: 170px 30px; }
<<<<<<< HEAD
 .header { position: top; left: 0px; top: -150px; right: 0px;  text-align: center; }
 .content {margin-top: -100px; margin-bottom: -150px}
 .footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 50px;  }
 .footer .page:after { content: counter(page, upper-roman);}
=======
 .header { position: fixed; left: 0px; top: -150px; right: 0px; height: 150px;  text-align: center; }
 .content {margin-top: -100px; margin-bottom: -150px}
 .footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 50px;  }
 .footer .page:after { content: counter(page, upper-roman); }
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8



</style>

</head>

<body>

<<<<<<< HEAD
  <div class="header" style="margin-top:-150px">
     <table class="tpage">
=======
  <div class="header">
     <table >
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8

      <tr>


       
        <td style="width:150px">

<<<<<<< HEAD
            <img src="{{public_path().'/uploads/logo/'.$organization->logo}}" alt="logo" width="80%">
=======
            <img src="{{public_path().'/uploads/logos/'.$organization->logo}}" alt="logo" width="80%">
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8

    
        </td>

        <td>
        <strong>
<<<<<<< HEAD
          {{ strtoupper($organization->name)}}
          </strong><br>
          {{ $organization->phone}}<br>
          {{ $organization->email}}<br>
=======
          {{ strtoupper($organization->name)}}<br>
          </strong>
          {{ $organization->phone}} |
          {{ $organization->email}} |
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
          {{ $organization->website}}<br>
          {{ $organization->address}}
       

        </td>
        

      </tr>


      <tr>

        <hr>
      </tr>



    </table>
   </div>

<br>

<div class="footer">
<<<<<<< HEAD

=======
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
     <p class="page">Page <?php $PAGE_NUM ?></p>
   </div>


<<<<<<< HEAD
	<div class="content" style='margin-top:-70px;'>

<div align="center"><strong>Employee List Report For Active Employees </strong></div><br>
    <table class="table tafter" border='1' cellspacing='0' cellpadding='0'>
=======
	<div class="content" style='margin-top:0px;'>

<div align="center"><strong>Employee List Report For Active Employees </strong></div><br>
    <table class="table table-bordered" border='1' cellspacing='0' cellpadding='0'>
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8

      <tr>
        


        <td width='20'><strong># </strong></td>
        <td><strong>Payroll Number </strong></td>
        <td><strong>Employee Name </strong></td>
        <td><strong>Branch </strong></td>
        <td><strong>Department </strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Kra Pin</strong></td>  
        <td><strong>Nssf Number</strong></td>
        <td><strong>Nhif Number</strong></td>
       

      </tr>
      <?php $i =1; ?>
      @foreach($employees as $employee)
      <tr>


       <td td width='20'>{{$i}}</td>
        <td>{{$employee->personal_file_number}}</td>
<<<<<<< HEAD
        @if($employee->middle_name != null || $employee->middle_name != '')
        <td> {{$employee->first_name.' '.$employee->middle_name.' '.$employee->last_name}}</td>
        @else
        <td> {{$employee->first_name.' '.$employee->last_name}}</td>
        @endif
=======
        <td> {{$employee->last_name.' '.$employee->first_name.' '.$employee->middle_name}}</td>
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8

         @if($employee->branch_id != 0)
        <td> {{ $employee->branch->name}}</td>
        @else
        <td></td>
        @endif
       

        @if($employee->department_id != 0)
        <td> {{ $employee->department->department_name}}</td>
        @else
        <td></td>
        @endif

        @if($employee->gender != null)
        <td>{{$employee->gender}}</td>
        @else
        <td></td>
        @endif
        
        @if($employee->pin != null)
        <td>{{$employee->pin}}</td>
        @else
        <td></td>
        @endif

        @if($employee->social_security_number != null)
        <td>{{$employee->social_security_number}}</td>
        @else
        <td></td>
        @endif

        @if($employee->hospital_insurance_number != null)
        <td>{{$employee->hospital_insurance_number}}</td>
        @else
        <td></td>
        @endif
       
        </tr>
      <?php $i++; ?>
   
    @endforeach

     
<<<<<<< HEAD
    </table>
   
</div>

=======


    </table>

<br><br>

    





   
</div>


>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
</body>

</html>



