


 ### برنامج بسيط لادارة العهد
#### برنامج بواسطة Laravel يقوم بادخال العهد ثم اخراجها على هيئة pdf


يحتوي البرنامج على 4 جداول اساسية والعلاقة التي بينهم many-to-many

- employees
- assets_items
- employees_items
- items



جدول الموظفين

``` sql

CREATE TABLE `employees` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `national_id` varchar(15) DEFAULT NULL,
 `full_name` varchar(255) NOT NULL,
 `job_title` varchar(255) NOT NULL,
 `email` varchar(225) NOT NULL,
 `phone` varchar(15) NOT NULL,
 `exs` varchar(15) NOT NULL,
 `dept_name` varchar(255) NOT NULL,
 `dept_id` int(11) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8



```


جدول العهد  السابقة يمكن استيراد العهد كملف   excel 
  
 
 هذا الجدول قمت باستيراده مع معلومات الموظف لاظهار الجرد السابق ومقارنته مع الجرد الجديد
 
 ملاحظة :
 item_type 
 - 
  - 1 = اجهزة
  - 2 = اثاث
  - 3 = قرطاسية

``` sql
CREATE TABLE `assets_items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `item` varchar(255) DEFAULT NULL,
 `item_count` int(11) DEFAULT NULL,
 `item_type` int(11) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=164 DEFAULT CHARSET=utf8
```


جدول العلاقة 

``` sql
CREATE TABLE `employees_items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` varchar(11) DEFAULT NULL,
 `item_id` varchar(11) DEFAULT NULL,
 `item_desc` varchar(255) DEFAULT NULL,
 `item_status` varchar(255) DEFAULT NULL,
 `item_count` varchar(11) DEFAULT NULL,
 `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=634 DEFAULT CHARSET=utf8

```

جدول العهد السابقة للموظفين العام الماضي

``` sql	
CREATE TABLE `items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) DEFAULT NULL,
 `dept_name` varchar(255) NOT NULL,
 `full_name` varchar(255) NOT NULL,
 `national_id` varchar(255) NOT NULL,
 `items` varchar(255) NOT NULL,
 `items_desc` varchar(255) NOT NULL,
 `items_status` varchar(255) NOT NULL,
 `items_qr` varchar(255) NOT NULL,
 `emp_name` varchar(255) NOT NULL,
 `enter_date` date NOT NULL,
 `editor_name` varchar(255) NOT NULL,
 `edit_date` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=668 DEFAULT CHARSET=utf8

```


يقوم البرنامج بالاستعلام برقم الهوية 
 ثم ادخال الاصول في جدول العلاقة 

ويمكن مشاهدة الاصول في السنة الماضية
