<!doctype html>
<html lang="en" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"  >
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}"  >
    <title>الجرد السنوي </title>
</head>
<style>
.filedn {
  background: #fff;
  color: #a3a3a3;
  font: inherit;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.1);
  border: 0;
  outline: 0;
}
label {

    
}
@import url(http://fonts.googleapis.com/css?family=Oswald);

body{
    /*font-family: 'Oswald', sans-serif;   */
     font-family: DejaVu Sans;

}

h2{
    display:inline-block;
}
.btn{
    margin: 4px;
    box-shadow: 1px 1px 5px #888888;
}

.btn-xs{
    font-weight: 300;
}
   
.btn-hot {
color: #fff;
background-color: #db5566;
border-bottom:2px solid #af4451;
}

.btn-hot:hover, .btn-sky.active:focus, .btn-hot:focus, .open>.dropdown-toggle.btn-hot {
color: #fff;
background-color: #df6a78;
border-bottom:2px solid #b25560;
outline: none;}


.btn-hot:active, .btn-hot.active {
color: #fff;
background-color: #c04b59;
border-top:2px solid #9a3c47;
margin-top: 2px;
}

.btn-sunny {
color: #fff;
background-color: #f4ad49;
border-bottom:2px solid #c38a3a;
}

.btn-sunny:hover, .btn-sky.active:focus, .btn-sunny:focus, .open>.dropdown-toggle.btn-sunny {
color: #fff;
background-color: #f5b75f;
border-bottom:2px solid #c4924c;
outline: none;
}


.btn-sunny:active, .btn-sunny.active {
color: #fff;
background-color: #d69840;
border-top:2px solid #ab7a33;
margin-top: 2px;
}

.btn-fresh {
color: #fff;
background-color: #51bf87;
border-bottom:2px solid #41996c;
}

.btn-fresh:hover, .btn-sky.active:focus, .btn-fresh:focus, .open>.dropdown-toggle.btn-fresh {
color: #fff;
background-color: #66c796;
border-bottom:2px solid #529f78;
outline: none;
}


.btn-fresh:active, .btn-fresh.active {
color: #fff;
background-color: #47a877;
border-top:2px solid #39865f;
outline: none;
outline-offset: none;
margin-top: 2px;
}

.btn-sky {
color: #fff;
background-color: #0bacd3;
border-bottom:2px solid #098aa9;
}

.btn-sky:hover,.btn-sky.active:focus, .btn-sky:focus, .open>.dropdown-toggle.btn-sky {
color: #fff;
background-color: #29b6d8;
border-bottom:2px solid #2192ad;
outline: none;
}

.btn-sky:active, .btn-sky.active {
color: #fff;
background-color: #0a97b9;
border-top:2px solid #087994;
outline-offset: none;
margin-top: 2px;
}

.btn:focus,
.btn:active:focus,
.btn.active:focus {
    outline: none;
    outline-offset: 0px;
}

a {color:#fff;}
a:hover {text-decoration:none; color:#fff;}

</style>
<body>

<div class="container">
    
 

    <div class="row justify-content-center ">
        <div class="col-md-12 mt-20">
            <div class="col-md-6 col-sm-12 mx-auto">
                <p class="text-center">
            <img  class="rounded mx-auto d-block" src="https://new.benaa.org.sa/wp-content/uploads/2019/04/benaa-logo-col.x1179088.png" alt=""/>

                </p>
            </div>
            <div class="card">


                <div class="card-header text-center"> العهد والجرد السنوي   </div>

                <div class="card-body">
                    <div class="card-body">
                        <div class="col">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                    {{ session()->pull('message') }}
                                </div>
                            @endif
                        </div>
                        
                        

                        {!! Form::open(['url'=>'admin/items/create','method'=>'get']) !!}
                        <div class="form-group">
                        </div>

                        <div class="form-group" @if($errors->has('national_id')) has-error @endif>
                            {!! Form::label('فضلاً ادخل رقم الهوية للجرد   ') !!}
                            <br>
                            {!! Form::text('national_id', null, ['class' => 'form-control filedn', 'placeholder' => 'رقم الهوية','required'=>'']) !!}
                            @if(session()->has('message_error'))
                                <div class="alert alert-success mt-5">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                    {{ session()->pull('message_error') }}
                                </div>
                            @endif                            @if($errors->has('national_id'))
                                <span class="help-block">
                                {!! $errors->first('national_id') !!}
                                 </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('ارسال',['class'=>'btn text-uppercase form-control  btn-dark']) !!}

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vue.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/vue.js')}}"></script> -->
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
    <script src="{{asset('assets/js/form.js')}}"></script>
    <script>
    </script>
</body>
</html>
