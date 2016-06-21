
@extends('layouts.payroll')

{{HTML::script('media/jquery-1.8.0.min.js') }}

<script type="text/javascript">
 function totalBalance() {
      var instals = document.getElementById("instalments").value;
      var amt = document.getElementById("amount").value.replace(/,/g,'');
      var total = instals * amt;
      total=total.toLocaleString('en-US',{minimumFractionDigits: 2});
      document.getElementById("balance").value = total;

}

function totalB() {
      var instals = document.getElementById("instalments").value;
      var amt = document.getElementById("amount").value.replace(/,/g,'');
      var total = instals * amt ;
      total=total.toLocaleString('en-US',{minimumFractionDigits: 2});
      document.getElementById("balance").value = total;

}


</script>

<script type="text/javascript">
$(document).ready(function(){
$('#insts').hide();
$('#meth').hide();
$('#bal').hide();
$('#formular').change(function(){
if($(this).val() == "Instalments"){
    $('#insts').show();
    $('#bal').show();
}else{
    $('#insts').hide();
    $('#bal').hide();
}
});

    $('#method').change(function(){
      if($(this).val() == 'Salary'){
        $('#meth').show();
        $('#amount').prop('readonly','readonly');
        $.get("{{ url('api/ded')}}", 
        { option: $("#employee").val() }, 
        function(data) {
          //alert(data.replace(/,/g, ''));

          console.log(data.replace(/,/g, ''));

          if($('#type').val() == '' || $('#period').val() == ''){
                $('#amount').val(0.00);
                $('#faker').val(0.00);
          }else if($('#type').val() == 'Hourly' && $('#period').val() != ''){
                  $('#faker').val(((data.replace(/,/g, ''))/24/30).toFixed(2));
                  $('#amount').val((((data.replace(/,/g, ''))/24/30).toFixed(2)*($('#period').val())).toFixed(2));
          }else if($('#type').val() == 'Daily' && $('#period').val() != ''){
                $('#faker').val(((data.replace(/,/g, ''))/30).toFixed(2));
                $('#amount').val((((data.replace(/,/g, ''))/30).toFixed(2)*($('#period').val())).toFixed(2));
                }
          $('#type').change(function(){
                if($(this).val() == ''){
                $('#amount').val(0.00);
                }else if($(this).val() == 'Hourly'){
                  $('#faker').val(((data.replace(/,/g, ''))/24/30).toFixed(2));
                }else{
                $('#faker').val(((data.replace(/,/g, ''))/30).toFixed(2));
                }
              
                if($('#period').val() != '' && $(this).val() == 'Hourly'){
                $('#amount').val((((data.replace(/,/g, ''))/24/30).toFixed(2)*($('#period').val())).toFixed(2));
                }else if($('#period').val() != '' && $(this).val() == 'Daily'){
                $('#amount').val((((data.replace(/,/g, ''))/30).toFixed(2)*($('#period').val())).toFixed(2));
                }
                else{
                $('#amount').val(0.00);
                } 
         
          });
       });
     }else{
    $('#meth').hide();
    $('#amount').prop('readonly',false);
    }
  });
});
</script>

<script type="text/javascript">
 function totalBnew() {
      var p = document.getElementById("period").value;
      var amt = document.getElementById("faker").value.replace(/,/g,'');
      var total = amt * p;
      total=total.toLocaleString('en-US',{minimumFractionDigits: 2});
      document.getElementById("amount").value = total;

}

function totalBnew1() {
      var p = document.getElementById("period").value;
      var instals = document.getElementById("instalments").value;
      var amt = document.getElementById("amount").value.replace(/,/g,'');
      var total = instals * amt * p;
      total=total.toLocaleString('en-US',{minimumFractionDigits: 2});
      document.getElementById("total").value = total;

}


</script>


@section('content')
<br/>

<div class="row">
    <div class="col-lg-12">
  <h3>New Employee Deduction</h3>

<hr>
</div>  
</div>


<div class="row">
    <div class="col-lg-5">

    
        
         @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

  {{ HTML::style('jquery-ui-1.11.4.custom/jquery-ui.css') }}
  {{ HTML::script('jquery-ui-1.11.4.custom/jquery-ui.js') }}

  <style>
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
    .ui-dialog 
    {
    position: fixed;
    margin-bottom: 950px;
    }


    .ui-dialog-titlebar-close {
  background: url("{{ URL::asset('jquery-ui-1.11.4.custom/images/ui-icons_888888_256x240.png'); }}") repeat scroll -93px -128px rgba(0, 0, 0, 0);
  border: medium none;
}
.ui-dialog-titlebar-close:hover {
  background: url("{{ URL::asset('jquery-ui-1.11.4.custom/images/ui-icons_222222_256x240.png'); }}") repeat scroll -93px -128px rgba(0, 0, 0, 0);
}
    
  </style>

  <script>
  $(function() {
    var dialog, form,
 
      // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
      name = $( "#name" ),
      
      allFields = $( [] ).add( name ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o) {
      if ( o.val().length == 0 ) {
        o.addClass( "ui-state-error" );
        updateTips( "Please insert deduction type!" );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );
 
      valid = valid && checkLength( name );
 
      valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Please insert a valid name for deduction type." );
 
      if ( valid ) {

      /* displaydata(); 

      function displaydata(){
       $.ajax({
                      url     : "{{URL::to('reloaddata')}}",
                      type    : "POST",
                      async   : false,
                      data    : { },
                      success : function(s){
                        var data = JSON.parse(s)
                        //alert(data.id);
                      }        
       });
       }*/

        $.ajax({
            url     : "{{URL::to('createDeduction')}}",
                      type    : "POST",
                      async   : false,
                      data    : {
                              'name'  : name.val()
                      },
                      success : function(s){
                         $('#deduction').append($('<option>', {
                         value: s,
                         text: name.val(),
                         selected:true
                        }));
                      }        
        });
        
        dialog.dialog( "close" );
      }
      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 250,
      width: 350,
      modal: true,
      buttons: {
        "Create": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $('#deduction').change(function(){
    if($(this).val() == "cnew"){
    dialog.dialog( "open" );
    }
      
    });
  });
  </script>
 
   {{ HTML::script('datepicker/js/bootstrap-datepicker.min.js') }}

<div id="dialog-form" title="Create new deduction type">
  <p class="validateTips">Please insert Deduction Type.</p>
 
  <form>
    <fieldset>
      <label for="name">Name <span style="color:red">*</span></label>
      <input type="text" name="name" id="name" value="" class="text ui-widget-content ui-corner-all">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>

         <form method="POST" action="{{{ URL::to('employee_deductions') }}}" accept-charset="UTF-8">
   
    <fieldset>

       <div class="form-group">
                        <label for="username">Employee <span style="color:red">*</span></label>
                        <select name="employee" id="employee" class="form-control">
                           <option></option>
                            @foreach($employees as $employee)
                            <option value="{{ $employee->id }}"> {{ $employee->first_name.' '.$employee->middle_name.' '.$employee->last_name }}</option>
                            @endforeach
                        </select>
                
                    </div>                    

         <div class="form-group">
         <label for="username">Deduction Type <span style="color:red">*</span></label>
                        <select name="deduction" id="deduction" class="form-control">
                           <option></option>
                           <option value="cnew">Create New</option>
                            @foreach($deductions as $deduction)
                            <option value="{{ $deduction->id }}"> {{ $deduction->deduction_name }}</option>
                            @endforeach
                        </select>
                
        </div>          


        <div class="form-group">
                        <label for="username">Formular <span style="color:red">*</span></label>
                        <select name="formular" id="formular" class="form-control forml">
                            <option></option>
                            <option value="One Time">One Time</option>
                            <option value="Recurring">Recurring</option>
                            <option value="Instalments">Instalments</option>
                        </select>
                
                    </div>

        <div class="form-group">
                        <label for="username">Deduction Method <span style="color:red">*</span></label>
                        <select name="method" id="method" class="form-control forml">
                            <option></option>
                            <option value="Normal">Nomal</option>
                            <option value="Salary">From Employee Salary</option>
                        </select>
                
                    </div>

        <div class="form-group meth" id="meth">

        <div class="form-group">
                        <label for="username">Method Type <span style="color:red">*</span></label>
                        <select name="type" id="type" class="form-control forml">
                            <option></option>
                            <option value="Hourly">Hourly</option>
                            <option value="Daily">Daily</option>
                        </select>
                
                    </div>

          <div class="form-group">
            <label style="display:none" for="username">Faker <span style="color:red">*</span> </label>
            <input class="form-control" placeholder="" type="hidden" name="faker" id="faker" value="">
        </div>

        <div class="form-group">
            <label for="username">Period <span style="color:red">*</span> </label>
            <input class="form-control" placeholder="" type="text" onkeypress=" totalBnew()" onkeyup="totalBnew()" name="period" id="period" value="{{{ Input::old('period') }}}">
        </div>
      </div>

        <div class="form-group insts" id="insts">
            <label for="username">Instalments </label>
            <input class="form-control" placeholder="" onkeypress="totalB(),getdate()" onkeyup="totalB(),getdate()" type="text" name="instalments" id="instalments" value="{{{ Input::old('instalments') }}}">
        </div>

        <div class="form-group">
            <label for="username">Amount <span style="color:red">*</span> </label>
            <div class="input-group">
            <span class="input-group-addon">{{$currency->shortname}}</span>
            <input class="form-control" placeholder="" type="text" onkeypress="totalBalance()" onkeyup="totalBalance()" name="amount" id="amount" value="{{{ Input::old('amount') }}}">
           </div>  
        </div>

        <div class="form-group bal_amt" id="bal">
            <label for="username">Total </label>
            <div class="input-group">
            <span class="input-group-addon">{{$currency->shortname}}</span>
            <input class="form-control" placeholder="" readonly="readonly" type="text" name="balance" id="balance" value="{{{ Input::old('balance') }}}">
            </div>
        </div>

        
        <div class="form-group">
                        <label for="username">Deduction Date <span style="color:red">*</span></label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control deductiondate" readonly="readonly" placeholder="" type="text" name="ddate" id="ddate" value="{{{ Input::old('ddate') }}}">
                        </div>
        </div>

        <script type="text/javascript">
$(function(){ 

$('.deductiondate').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-60y',
    autoclose: true
});
});

</script>

        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Create Employee Deduction</button>
        </div>

    </fieldset>
</form>
        

  </div>

</div>

@stop