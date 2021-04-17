<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Assets;
use App\Models\Employee;
use App\Models\Employees_items;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.items.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        
          $emp = DB::table("employees")->where("national_id","=",$request["national_id"])->get();
          $result = DB::table('items')
            ->leftjoin('employees','employees.national_id','=','items.national_id')
            ->select('*')
            ->where('employees.national_id',$request->national_id)->get();
            
           if(count($emp) == 0){
                  $request->session()->flash('message_error', 'رقم الهوية المدخل لا ينتمي الى موظف  ');
                    return redirect()->route('items.index');
                    

                  
           }elseif(count($result) == 0){
                     $result1 = Assets::all();
                     $result = Employee::where('national_id',$request->national_id)->get();
                     
                     return view('admin.items.create',compact('result1','result'));
           }elseif(count($result) > 0 && count($emp) > 0){
               
                 $result1 = Assets::all();
                return view('admin.items.create',compact('result1','result'));
           }
            
            

            


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        if(is_countable($request->item) && count($request->item) > 1){
            $count =  count($request->item);
        if($count >= 1 && $request->has('_token'))
        {
            
            
        for($i = 0; $i < $count; $i++){
            $data = $request->all();
            $insert = new Employees_items();
            $insert->user_id = $request->user_id;
            $insert->item_id = $request->item[$i];
            $insert->item_desc = $request->item_desc[$i]; 
            $insert->item_status = $request->item_status[$i];
            $insert->item_count = $request->item_count[$i];
            $insert->save();
        }
        
        $request->session()->flash('message_error', 'تم الاداخال بنجاح والارسال للموظف');
        return redirect()->route('items.index');
        
        
        }else{
            
        $request->session()->flash('message_error', 'هناك مشكلة تواصل مع الدعم ');
        return redirect()->route('items.index');
        
        }
        
        }else{
        $request->session()->flash('message', 'يرجى ادخال المزيد من الحقول');
        return redirect()->route('items.create');
        }
       
                    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
            $result = DB::table('items')
            ->leftjoin('employees','employees.national_id','=','items.national_id')
            ->select('*')
            ->where('employees.national_id',$request->national_id)->get();
                
            if(count($result) == 0){
                $request->session()->flash('message_error', '   لايوجد لديك جرد سابق  ');
                return redirect()->route('items.index');
            }elseif($result){
            
            return view('admin.items.show',compact('result'));
            }
            

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
    
        
    // How IS Enterd
    function showdata(){
         $result = 'd';
            
            return view('admin.items.showdata',compact('result'));
            
    } 
}
