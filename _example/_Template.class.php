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
    'app_name'=>'템플릿 테스트',
    'template'=>'fancy-up-php-template'
);

$tpl['items'] =$items;

# prints
$tpl->compile_dir =_ROOT_PATH_.'/'._TPL_;
$tpl->chgimgpath  = true;       # 이미지경로 자동 변경 기능 (기본 true)
$tpl->compile     = true;       # 강제 컴파일 여부 [개발이 완료되면 false로 전환하세요] (기본 true)
$tpl->compression = false;      # 압축(min)여부 (기본 true)
$tpl->gzlib_compression = true; # gzib 압축여부(gzib 라이브러리 설치 서버에서만 사용가능) (기본 true)
$tpl->display();                # gzib 출력이 가능할 경우 (기본 return String)
# echo $tpl->display();         # gzib 출력이 안될 경우
?>