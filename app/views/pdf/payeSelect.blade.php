@extends('layouts.ports')
@section('content')
<br/>

<div class="row">
	<div class="col-lg-12">
  <h3>Select Period</h3>

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

		 <form target="_blank" method="POST" action="{{URL::to('payrollReports/payeReturns')}}" accept-charset="UTF-8">
   
    <fieldset>

        <div class="form-group">
                        <label for="username">Period <span style="color:red">*</span></label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input required class="form-control datepicker2" readonly="readonly" placeholder="" type="text" name="period" id="period" value="{{{ Input::old('period') }}}">
                    </div>
       </div>
       
       <div>
       <div class="form-group">
                        <label for="username">Disabled: <span style="color:red">*</span></label><br>
                        <input class=""  type="radio" required name="type" id="type" value="enabled"> No
                        <input class=""  type="radio" required name="type" id="type" value="disabled"> Yes
                
            </div>

       <div class="form-group">
                        <label for="username">Download as: <span style="color:red">*</span></label>
                        <select required name="format" class="form-control">
                            <option></option>
<<<<<<< HEAD
                            <option value="excel"> Excel</option>
                            <option value="csv"> CSV</option>
=======
                            <option value="excel"> CSV</option>
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
                            <option value="pdf"> PDF</option>
                        </select>
                
            </div>
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Select</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>


@stop