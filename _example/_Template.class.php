<?php
$path = str_replace($_SERVER['PHP_SELF'],'',__FILE__);
include_once $path.'/config/config.inc.php';

# <주의>
# config.inc.php 에서 설정한 _data 폴더가 707 로 생성이 되어 있어 있는지 체크

# template 선언
try{
    $tpl = new Template('./_template.html');
}catch(Exception $e){
    throw new ErrorException($e->getMessage(),__LINE__);
}

$items = array();
for($i=0; $i<3; $i++){
    $items[] = array(
        'title' => '루프배열 기본 index 키 찾기'.$i
    );
}

# tpl 변수
$tpl['strings'] = array(
    'name'=>'이름',
    'template'=>'fancy-up-php-template'
);

$tpl['items'] =$items;

# prints
$tpl->compile_dir =_ROOT_PATH_.'/'._TPL_;
$tpl->compile     = true;   # 강제컴파일여부
$tpl->compression = false;  # 압축(min)여부
echo $tpl->display();
?>