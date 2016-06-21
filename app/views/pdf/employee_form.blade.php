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
}
.table {
  width: 100%;
  margin-bottom: 2px;
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

.ch {
    width: 13px;
    height: 13px;
    padding: 0;
    margin-right:5px;
    margin-bottom:8px;
    vertical-align: bottom;
    position: relative;
    top: -1px;
    *overflow: hidden;
}

#nav_doc {
    width:300px;
    float:left;
    padding:5px;
}

#section_doc {
    width:350px;
    float:left;
    padding:10px;
    margin-top: -500px;
}

p.solid {
  border-style: solid;
  width:150px;
  height: 180px;
  margin-left: 500px;
  text-align:center;
}


 @page { margin-top: 160px; margin-left:30px; margin-right:30px; margin-bottom: 60px; }
 .header { position: top; left: 0px; top: -150px; right: 0px; height: 150px;  text-align: center; }
 .content {margin-top: -100px; margin-bottom: -150px; margin-left:auto; margin-right: auto;}
 .footer { position: fixed; left: 0px; bottom: -80px; right: 0px; height: 50px;  }
 .footer .page:after { content: counter(page, upper-roman); }



</style>

</head>

<body>


  <div class="header"  style="margin-top:-150px">
     <table >

      <tr>


       
        <td style="width:150px">

            <img src="{{public_path().'/uploads/logo/'.$organization->logo}}" alt="logo" width="80%">

    
        </td>

        <td>
        <strong>
          {{ strtoupper($organization->name)}}
          </strong><br>
          {{ $organization->phone}}<br>
          {{ $organization->email}}<br>
          {{ $organization->website}}<br>
          {{ $organization->address}}
       

        </td>
        

      </tr>


      <tr>

        <hr>
      </tr>



    </table>
   </div>

   <div class="footer">
     <p class="page">Page <?php $PAGE_NUM ?></p>
   </div>


	<div class="emp" style="margin-top:-70px">
     
  <div style="margin-top:20px" align="center"> <h3>EMPLOYEE DETAILS FORM</h3></div>
  <div><p>This <input type="checkbox" class="ch"/>CONTRACT  <input class="ch" type="checkbox" />APPOINTMENT LETTER is entered into between <strong>UMASH FUNERAL SERVICES LTD</strong> (herein after referred to as ‘Employer’) and ______________________________________________________(herein after referred to as ‘Employee’) on ___________________________________________________  under the terms and conditions below.</p></div>
    <table style="margin-top:0px" style="margin-left:40px" border='0' width='500' height='300' cellspacing='0' cellpadding='0'> 
      <tr><td colspan='2'><strong><span style="font-size:14px">Personal Details</span></strong></td></tr>
      <tr><td width="150" height="20">Surname Name: </td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">First Name:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Other Names:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Identity Number:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Passport Number:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="10">Gender:</td>
      <td><input type="checkbox" class="ch" />Male <input type="checkbox" class="ch" />Female</td></tr>
      <tr><td width="150" height="20">Marital Status:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Date of Birth:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Highest Education Level:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Citizenship:</td><td>.........................................................................................................................</td></tr>
      <tr><td colspan='2'><strong><span style="font-size:14px">Next of Kin Details</span></strong></td></tr>
      <tr><td width="150" height="20">Kin`s Name:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Kin`s Identity Number:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Kin`s Telephone Number:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Relationship:</td><td>..........................................................................................................................</td></tr>
      <tr><td colspan='2'><strong><span style="font-size:14px">Goverment Details</span></strong></td></tr>
      <tr><td width="150" height="20">Kra Pin:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Nssf Number:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Nhif Number:</td><td>.........................................................................................................................</td></tr>
      <tr><td colspan='2'><strong><span style="font-size:14px">Bank Details</span></strong></td></tr>
      <tr><td width="150" height="20">Bank Name:</td><td>........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Bank Branch:</td><td>........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Bank Account Number:</td><td>........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Bank EFT Code:</td><td>........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Swift Code:</td><td>........................................................................................................................</td></tr>
      <tr><td colspan='2'><strong><span style="font-size:14px">Contact Details</span></strong></td></tr>
      <tr><td width="150" height="20">Personal Email:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Mobile Phone:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Postal Address:</td><td>.........................................................................................................................</td></tr>
      <tr><td width="150" height="20">Postal Zip:</td><td>..........................................................................................................................</td></tr>
      </table>
      <br/>
      <div><strong><span style="font-size:14px">DOCUMENTS ATTACHED</span></strong></div>
      <div id="nav_doc">
      <p>1. <input type="checkbox" class="ch"/>Identification Copy</p>
      <p>2. <input type="checkbox" class="ch"/>Application letter</p>
      <p>3. <input type="checkbox" class="ch"/>Personal curriculum vitae</p>
      <p>4. <input type="checkbox" class="ch"/>Copy of Driving License</p>
      <p>5. <input type="checkbox" class="ch"/>Copy PSV Document</p>
      <p>6. <input type="checkbox" class="ch"/>Certificate of good conduct</p>
      <p>7. <input type="checkbox" class="ch"/>PIN </p>
      <p>8. <input type="checkbox" class="ch"/>NHIF Number ……………………… </p>
      <p>9. <input type="checkbox" class="ch"/>NSSF Number…………………………….</p>
    </div>
    <div style="margin-top:-100px;"><p class="solid" style="margin-top:-270px;">ATTACH<br> EMPLOYEE<br> PHOTO.</p></div>
    <p>1. <strong>Commencement of Employment</strong> Effective from  ______________________________</p>
    <p><input type="checkbox" class="ch"/>for a fixed term contract for a period of <strong>*day(s)/ month(s)/ year(s)</strong>,ending on__________________________.</p>

<p>2. <strong>Probation Period</strong>  <input type="checkbox" class="ch"/>No <input type="checkbox" class="ch"/>Yes ______________________________________ <strong>*day(s) / week(s)/ month(s) </strong>
<br><br><br><br>

<p>AT THE BOTTOM OF THE CONTRACT ADD</p>

<p>11. <strong>Termination of Employment Contract </strong>  A notice period of  1 month Required from employee for termination of this contract. 
    Failure to give a notice Umash Funeral Services LTD will assume that the employee abdicated work thereby nullifying any benefits accrued.
Umash Funeral Services reserves the right to terminate this contract WITHOUT NOTICE for gross misconduct. </p>
<br>
<p><strong>The Employer and the Employee hereby declare that they understand thoroughly the above provisions and agree to sign to abide by such provisions. They shall each retain a copy of this contract for future reference.</strong></p>

<p><strong>Signature of Employee</strong> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <strong>Signature of Employer or Employer’s Representative</strong><p>

<p>____________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ______________________________________________</p>
<p>Name in full:____________________________________     Name in full:________________________________________________ </p>
<p>I.D. No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________     Position held: _______________________________________________ </p>
<p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________________________   Date: _____________________________________________________</p>
        


</body>

</html>



