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
.title {
    background: #008996;
    padding: 10px;
    border-radius: 2px;
    cursor: pointer;
    color:white;
}
    span{
    font-weight: bold;
    color: #008996;
    }

buttun {
    cursor: pointer;
    background:#fffff;
}
p{
        font-weight: bold;
        color: white;
    }
    label {
        font-size:14px;
    }

</style>
<body>

<div class="container">

    <div class="row justify-content-center ">
        <div class="col-md-12 mt-5">
            <div class="col-md-6 col-sm-12 mx-auto">
                            <img  class="rounded mx-auto d-block" src="https://new.benaa.org.sa/wp-content/uploads/2019/04/benaa-logo-col.x1179088.png" alt=""/>
                <div class="row" style="margin:10px 0">
                    @if(isset($result))
                    <a href="http://dev.benaa-v.com/admin/items/show?national_id={{$result[0]->national_id}}" class="col btn btn-dark" style="margin: 0 10px;">جرد 2019</a>
                    <a  class="col btn btn-dark"  href="http://dev.benaa-v.com/admin/items/create?national_id={{$result[0]->national_id}}">جرد 2020</a>
                    @endif
                </div>
                <p class="text-center">
                </p>
            </div>
            <div class="card">


                <div class="card-header text-center">  اضافه وتعديل العهد    </div>

                <div class="card-body "  style="background:#f1f1f1">
                    <div class="card-body">
                        <div class="col">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                    {{ session()->pull('message') }}
                                </div>
                            @endif
                        </div>
                        
                        @if(isset($result))
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
                                <span>{{$result[0]->full_name}} <br></span>
                            </div>
                          
                            <div class="form-group text-center col">
                                <label>تاريخ الادخال  : </label>
                                 <span>{{date('d-m-Y')}} <br></span>
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
                        @endif
                            <div class="row">
                                <div class="row">
                                    
                                </div>
                            </div>
                                <hr/>
                        <div class="row">                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">الاصل</th> 
                                        <th scope="col">وصف الاصل</th> 
                                        <th scope="col">حالة الاصل</th>
                                        <th scope="col"> العدد</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                 {!! Form::open(['route'=>'items.store','method'=>'post']) !!}
                                    <input type="hidden" name="user_id" value="{{$result[0]->id}}" />
                                <tr>
                                    <th  colspan="4" class="text-center title " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >الاجهزة الكهربائية</th>
                                </tr>
                                @foreach($result1 as $items)
                                   @if($items->item_type == 1)
                                    <tr class="collapse" class="collapse" id="collapseExample">
                                                <td>
                                                    <input type="checkbox" class="checkbox" name="item[]" value="{{$items->id}}">
                                                    <label>{{$items->item}}</label>
                                                </td>
                                                <td><input type="text" class="form-control" name="item_desc[]" disabled></td>
                                                <td>
                                                    <select class="form-control" name="item_status[]" disabled>
                                                        <option value="صالح">صالح</option>
                                                        <option value="غير صالح">غير صالح</option>
                                                        <option value=" يحتاج الى صيانة"> يحتاج الى صيانة</option>

                                                    </select>
                                                </td>
                                            <td>
                                                <select class="form-control" name="item_count[]" disabled>
                                                    @foreach(range(1, 10) as $number)
                                                    <option value="{{$number}}">{{$number}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                        <tr>
                                        <th colspan="4" class="text-center title " data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">الاثاث </th>
                                        </tr>
                                    @foreach($result1 as $items)
                                    @if($items->item_type == 2)
                                    <tr  class="collapse" id="collapseExample1">
                                                <td>
                                                    <input type="checkbox" class="checkbox" name="item[]" value="{{$items->id}}">
                                                    <label>{{$items->item}}</label>
                                                </td>
                                                <td><input type="text" class="form-control" name="item_desc[]" disabled></td>
                                                <td>
                                                    <select class="form-control" name="item_status[]" disabled>
                                                        <option value="صالح">صالح</option>
                                                        <option value="غير صالح">غير صالح</option>
                                                        <option value=" يحتاج الى صيانة"> يحتاج الى صيانة</option>

                                                    </select>
                                                </td>
                                            <td>
                                                <select class="form-control" name="item_count[]" disabled>
                                                    @foreach(range(1, 10) as $number)
                                                    <option value="{{$number}}">{{$number}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                        <tr>
                                        <th  colspan="4" class="text-center title " data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">القرطاسية </th>
                                        </tr>
                                    @foreach($result1 as $items)
                                    @if($items->item_type == 3)
                                    <tr  class="collapse" id="collapseExample2">
                                                <td>
                                                    <input type="checkbox" class="checkbox" name="item[]" value="{{$items->id}}">
                                                    <label>{{$items->item}}</label>
                                                </td>
                                                <td><input type="text" class="form-control" name="item_desc[]" disabled></td>
                                                <td>
                                                    <select class="form-control" name="item_status[]" disabled>
                                                        <option value="صالح">صالح</option>
                                                        <option value="غير صالح">غير صالح</option>
                                                        <option value=" يحتاج الى صيانة"> يحتاج الى صيانة</option>

                                                    </select>
                                                </td>
                                            <td>
                                                <select class="form-control" name="item_count[]" disabled>
                                                    @foreach(range(1, 10) as $number)
                                                    <option value="{{$number}}">{{$number}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                    </tr>
                                    @endif
                                    @endforeach

           

                                </tbody>
                              
                            </table>
                        </div> 
                        
                            
                        
                        <hr>
                        <div class="form-group">
             
                                {!! Form::submit('حفظ وارسال',['class'=>'btn text-uppercase form-control  btn-dark']) !!}
    
                                {!! Form::close() !!}                        </div>
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
    $(document).ready(function(){
    
         $('.checkbox').on('click',function(){
            var check = $(this).parent('td').parent('tr').children('td').find('select , input');
            if(check.is(':checked'))
                $(this).parent('td').parent('tr').children('td').find('select , input').removeAttr('disabled');
            else 
                $(this).parent('td').parent('tr').children('td').find('select , input[type=text]').attr('disabled', 'disabled');
        });




        });
</script>
</body>
</html>
