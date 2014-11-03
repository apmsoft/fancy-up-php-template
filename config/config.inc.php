<?php
/** ======================================================
| @Author	: 김종관
| @Email	: apmsoft@gmail.com
| @Editor	: Eclipse(default)
| @UPDATE	: 12-06-30
----------------------------------------------------------*/
session_start();

# $path 경로 설정 필요 및 설정
define('_ROOT_PATH_',$path);
define('_CHRSET_','utf-8');

# 데이터 업로드 및 캐슁파일
define('_DATA_','_data');
define('_TPL_','_data/tpl');

# 클래스 자동 인클루드
function __autoload($class_name){
    $tmp_args=explode(' ',preg_replace('/([a-z0-9])([A-Z])/',"$1 $2",$class_name));
    $class_path_name=sprintf("%s/{$class_name}",strtolower($tmp_args[0]));
    if(!class_exists($class_path_name,false)){
        # classes 폴더
        if(file_exists(_ROOT_PATH_.'/classes/'.$class_path_name.'.class.php')!==false){
            include_once _ROOT_PATH_.'/classes/'.$class_path_name.'.class.php';
        }
        # 기타 만든 클래스 폴더 [첫대문자만 폴더로 지원]
        # ( /my/MyTest.class.php -> MyTest.class.php)
        else if(file_exists(_ROOT_PATH_.'/'.$class_path_name.'.class.php')!==false){
            include_once _ROOT_PATH_.'/'.$class_path_name.'.class.php';
        }
    }
}
?>