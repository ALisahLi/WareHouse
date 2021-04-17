<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Assets;
use App\Models\Employee;
use App\Models\Employees_items;
use Spipu\Html2Pdf\HTML2PDF;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;



class PDFController extends Controller{
    

    protected function pdf($national_id){
        
      
      ob_start();
         $result = DB::table('employees_items')
            ->join('employees','employees.id','=','employees_items.user_id')
            ->join('assets_items','assets_items.id','=','employees_items.item_id')
            ->select('*')
            ->addSelect(DB::raw('employees_items.item_count as items_count'))
            ->where('employees.id',$national_id)->get();


        // الفيو اللي راح ينعمل عليه ريندر
        $content = view('admin.items.pdf',compact('result'))->render();
        // مسار مكتبة اتش تي ام ال تو بي دي اف
        $html2pdf_path = base_path().'/vendor/spipu/html2pdf/src/Html2Pdf.php';
        File::requireOnce($html2pdf_path);

        try {
            /*
             * المتغير الاول L تعني Landscape بمعنى عرضي وتقدر تحطه V بمعنى عمودي
             * المتغير الثاني حجم الصفحة 
             * المتغير الثالث اللغة خله انجليزي لأن راح اعدلها تحت
             */
            $html2pdf = new HTML2PDF('P', 'A4', 'en');
            /*
             * المتغير lg ذا لإعدادات اللغة لو ما حطيتها راح تطلع معاك اللغة بالعربي مربعات
             */
            $lg = Array();
            $lg['a_meta_charset'] = 'UTF-8';
            $lg['a_meta_dir'] = 'ltr';
            $lg['a_meta_language'] = 'ar'; // اذا ما ضبط معاك اللغة وطلعت مربعات حطها fr بدل ar
            $lg['w_page'] = 'page';
            $html2pdf->pdf->setLanguageArray($lg);
            // نوع الخط
            $html2pdf->setDefaultFont('aealarabiya');
            // المحتوى اللي جاي من الفيو
            $html2pdf->WriteHTML($content);
            // اسم الملف اللي راح يطلع
            $html2pdf->Output('example.pdf');

            ob_flush();
            ob_end_clean();
        }
        catch (\Exception $e) {
            echo $e;
            exit;
        }
        $pdf= $html2pdf->Output('', 'S');
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Length', strlen($pdf))
            ->header('Content-Disposition', 'inline','filename="example.pdf"');
    }
}