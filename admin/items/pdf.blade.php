<style>

    *{
        font-family: 'Cairo-Regular ', serif;
    }
    .header{
        margin:70px 0 0 0;
    }
    table{        width: 100%;
    }
    table.header{
        border: 1px #000000 solid;  background: #cccccc
    }
    h4.title{
        /*text-align: center;*/
        width: 100%;
    }
    h3.logo{
        text-align: center;
        width: 100%;
        /*font-size: 60px;*/
        color: #0a3b54;
    }
    h3.menu{
        text-align: center;
        width: 100%;
        font-size: 24px;
        /*color: #0a3b54;*/
    }
    h1.title{
        font-size: 40px;
        padding: 0;
        margin: 0;
    }
    td.a-header{
        width: 100%;
        text-align: center;
        font-size: 30px;
    }
    td.a-name{
        width: 100%;
        text-align: center;
        font-size: 40px;
    }
    td.a-company{
        width: 100%;
        text-align: center;
        font-size: 60px;
    }
    .footer{
        margin:30px 0 0 0;
        float:right;
    }
</style>

<page backtop="50mm" backbottom="10mm" backleft="30mm" backright="20mm">
    <page_header backtop="" backbottom="20mm" backleft="30mm" backright="20mm">
         <div class="header">

            <table>
                <tr>
                    <td style="width: 30%; text-align: right; padding: 0; margin: 0;font-size:15px">
                        <h4 class="title">
                          الموظف : {!! $result[0]->full_name !!}
                        </h4>
                    </td>
                    <td style="width: 20%; text-align: center">
    
                    </td>
                    <td style="width: 40%; text-align: right; padding: 0; margin: 0">
                        <h4 class="title">
                           الادارة : {!! $result[0]->dept_name !!}
                        </h4>
                    </td>
                </tr>
            </table>
            
                                <table>
                <tr>
                    <td style="width: 30%; text-align: right; padding: 0; margin: 0">
                        <h4 class="title">
                          التاريخ :  {!! $result[0]->created_at !!} 
                        </h4>
                    </td>
                    <td style="width: 20%; text-align: center">
    
                    </td>
                    <td style="width: 40%; text-align: right; padding: 0; margin: 0">
                        <h4 class="title">
                           المدخل :    {!! $result[0]->full_name !!} 
                        </h4>
                    </td>
                </tr>
            </table>
        </div>
    </page_header>
    
    
    
    <page_footer>
 
    </page_footer>
    
    
    <h3 class="menu">
        <u>قائمة استلام عهدة أصول موظف</u>
    </h3>
    
    
    <table style="width: 100%;border: solid 1px #CCC;border-collapse: collapse;">
        <thead style="border: solid 1px #CCC">
            <tr>
                <th style="width: 20%; text-align: center; background: #ddd; padding:10px ">ملاحظات</th>
                <th style="width: 4%; text-align: center; background: #ddd; padding:10px ">العدد</th>
                <th style="width: 20%; text-align: center; background: #ddd">حالة الاصل</th>
                <th style="width: 20%; text-align: center; background: #ddd">وصفه</th>
                <th style="width: 20%; text-align: center; background: #CCC">اسم الاصل</th>
                <th style="width:10%; text-align: center; background: #ddd">م</th>

            </tr>
        </thead>
        <tbody style="border: solid 1px #CCC">
        <?php 
            foreach($result as $rs){
            
            ?>
            <tr style=" border-bottom: solid 1px #55DD44">
            <!--Note-->

            <!--Status-->
            <td style="width: 20%; text-align: right; border: solid 1px #c3c3c3; padding:5px">
                
            </td>
            <!--Desc-->
            
            <td style="width: 4%; text-align: right; border: solid 1px #c3c3c3; padding:5px">
                {!! $rs->items_count !!}
            </td>
            <!--Desc-->
            <td style="width: 20%; text-align: right; border: solid 1px #c3c3c3; padding:5px">
                                 {!! $rs->item_status !!}

            </td>
            <!--الأصل-->
            <td style="width: 20%; text-align: right; border: solid 1px #c3c3c3; padding:5px">
                                 {!! $rs->item_desc !!}

            </td>
            <!--Barcode-->
            <td style="width: 15%; text-align: right; border: solid 1px #c3c3c3; padding:5px">
                {!! $rs->item !!}
            </td>
            <td style="width: 5%; text-align: right;border: solid 1px #c3c3c3; padding:5px">
            </td>
        </tr>
            <?php
        }
                    ?>
        </tbody>
    </table>
    
    
    
           <div class="footer">
            <table>
                <tr>
                    <td style="width: 100%; text-align: right;font-size:20px">
                        اسم الموظف: ...................................
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%; text-align: right;font-size:20px">
                        التوقيع:
                    </td>
                </tr>
            </table>
        </div>
        

</page>
