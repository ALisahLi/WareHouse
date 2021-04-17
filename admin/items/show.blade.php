<!doctype html>
<html lang="en" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"  >
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}"  >
    <title>العهد والجرد السنوي</title>
</head>
<style>
    body{

    }
    p {
        font-weight: bold;
        color: white;
    }
    .btn-primary{
        background:#51bf87
    }
    label {
        color:#00ff0a;
    }
    th {
        color:#000;
    }
</style>
<body>

<div class="container">

    <div class="row justify-content-center ">
        <div class="col-md-12 mt-5">
            <div class="col-md-6 col-sm-12 mx-auto">
                            <img  class="rounded mx-auto d-block" src="https://new.benaa.org.sa/wp-content/uploads/2019/04/benaa-logo-col.x1179088.png" alt=""/>
                <div class="row" style="margin:10px 0">
                    <a href="http://dev.benaa-v.com/admin/items/show?national_id={{$result[0]->national_id}}" class="col btn btn-dark" style="margin: 0 10px;">جرد 2019</a>
                    <a class="col btn btn-dark"  href="http://dev.benaa-v.com/admin/items/create?national_id={{$result[0]->national_id}}">جرد 2020</a>
                </div>
                
                <p class="text-center">
                </p>
            </div>
            <div class="card">


                <div class="card-header text-center">  اضافه وتعديل العهد    </div>

                <div class="card-body " style="background: #5f4d4c;color: white;">
                    <div class="card-body">
                        <div class="col">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                    {{ session()->pull('message') }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="row">
                            <div class="form-group text-center col">
                                <label>الاسم : </label>
                                <span>{{$result[0]->full_name}} <br></span>
                            </div>
                          
                            <div class="form-group text-center col">
                                <label>الوظيفة : </label>
                                 <span>{{$result[0]->job_title}} <br></span>
                            </div>
                            
                            <div class="form-group text-center col">
                                <label>الادارة : </label>
                                 <span>{{$result[0]->dept_name}} <br></span>
    
                            </div>
                            
                            <div class="form-group text-center col">
                                <label>الايميل : </label>
                                <span>{{$result[0]->email}} <br></span>

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group text-center col">
                                <label>المدخل : </label>
                                <span>{{$result[0]->emp_name}} <br></span>
                            </div>
                          
                            <div class="form-group text-center col">
                                <label>تاريخ الادخال  : </label>
                                 <span>{{$result[0]->enter_date}} <br></span>
                            </div>
                            
                            <div class="form-group text-center col">
                                <label>المعدل : </label>
                                 <span>{{$result[0]->editor_name}} <br></span>
    
                            </div>
                            
                            <div class="form-group text-center col">
                                <label>تاريخ التعديل : </label>
                                <span>{{$result[0]->edit_date}} <br></span>
                            </div>

                            </div>
                                <hr/>
                        <div class="row">                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">الاصل</th> 
                                        <th scope="col">وصف الاصل</th> 
                                        <th scope="col">حالة الاصل</th>
                                        <th scope="col">رقم الباركود</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   @foreach ($result as $rs)
                                    <tr>
                                        <form>
                                                <td> {{$rs->items}}</td>
                                                <td >{{$rs->items_desc}} </td>
                                                <td >{{$rs->items_status}}  </td>
                                                <td >{{$rs->items_qr}}</td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                              
                            </table>
                        </div>
                        
                            
                        
                        <hr>
                        <div class="form-group">
             
                                <div class="text-center">معلومات اضافية</div>
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
