@include('includes.head')

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">
                      
                    <div class="panel-body">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<<<<<<< HEAD
                        <img src="{{asset('public/uploads/logo/'.$organization->logo)}}" alt="logo" width="60%">
=======
                        <img src="{{ asset('public/uploads/logos/'.$organization->logo) }}" alt="LOGO" width="50%"/>
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8

                        <br>
               
                        {{ Confide::makeLoginForm()->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
