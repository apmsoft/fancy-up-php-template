<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>퓨전(fusion) 템플릿 0.84beta</title>
<style type="text/css">
body { margin:50px; padding:0px; font-size:9pt; font-family:돋움,Arial; background-color:#F9F9F9; }

td,textarea { line-height:150%; }
h3 { font-size:10px; font-weight:bold; }
form { margin:0px; }

a:link { font-size:9pt; font-family:돋움,Arial; color:blue; }
a:visited { font-size:9pt; font-family:돋움,Arial; color:blue; }
a:active { font-size:9pt; font-family:돋움,Arial; color:blue; }
a:hover { font-size:9pt; font-family:돋움,Arial; color:blue; }

#layout_head { width:876px; margin-left:auto; margin-right:auto; background-image:url(images/bg_r.gif); }
#layout_body { width:876px; margin-left:auto; margin-right:auto; background-image:url(images/bg_r.gif); }
#layout_foot { width:876px; margin-left:auto; margin-right:auto; background-image:url(images/bg_r.gif); }
.lay_con { margin-left:34px; width:809px; }
.menu { height:30px; background-image:url(images/menu_back_bg.gif); }
.menu li { list-style-type:none; float:left; padding:10px; color:#FFFFFF; font-weight:bold; }
a.menulink:link { font-size:10pt ; font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF; text-decoration:none; }
a.menulink:visited { font-size:10pt ; font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF; text-decoration:none; }
a.menulink:active { font-size:10pt ; font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF; text-decoration:none; }
a.menulink:hover { font-size:10pt ; font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF; text-decoration:none; }

a.englink:link { font-size:8pt ; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-weight:bold; }
a.englink:visited { font-size:8pt ; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-weight:bold; }
a.englink:active { font-size:8pt ; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-weight:bold; }
a.englink:hover { font-size:8pt ; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-weight:bold; }

.logo { font-size:36px; font-weight:bold; font-family:Verdana, Arial, Helvetica, sans-serif; width:60px; padding:10px; }
.ads_top { width:300px; padding:10px; }

#con_d1 { width:180px; border:1px #000000 solid; }
#con_d2 { width:576px; border:1px #000000 solid; }
.style1 {
	color: #FF6600;
	font-weight: bold;
}
.style2 {
	color: #6699FF;
	font-weight: bold;
}
</style>
</head>

<body>
<style type="text/css">
<!--
.style1 {color: #0066FF}
.style3 {color: #006600}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style7 {
	color: #006699;
	font-weight: bold;
}
.style8 {
	color: #003399;
	font-weight: bold;
}
.style9 {
	color: #0066CC;
	font-weight: bold;
}
.style10 {color: #FF0000}
.style11 {color: #009900}
.style16 {color: #009933; font-weight: bold; }
.style17 {color: #FF3300}
.style20 {color: #FF3300; font-weight: bold; }
.style21 {color: #666666}
.style22 {
	color: #339900;
	font-weight: bold;
}
.style23 {
	color: #336666;
	font-weight: bold;
}
.style24 {
	color: #CC00FF;
	font-weight: bold;
}
.style25 {color: #6633FF}
.style27 {
	color: #9900CC;
	font-weight: bold;
}
.style28 {color: #9900CC}
.style30 {
	color: #FF6600;
	font-weight: bold;
}
.style32 {color: #CC00CC; font-weight: bold; }
-->
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td width="120" valign="top">
    <table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td><a href="./fusion.html">퓨전 템플릿소개</a></td>
  </tr>
  <tr>
    <td><a href="./fusion01.html">설명서1</a></td>
  </tr>
  <tr>
    <td><a href="#">설명서2</a></td>
  </tr>
  <tr>
    <td><a href="#">설명서3</a></td>
  </tr>
  <tr>
    <td><a href="#">설명서4</a></td>
  </tr>
</table>
    </td>
    <td>
    <p><strong><a name="#1000">설명서1</a></strong></p>
    <ol>
    	<li><a href="#1">환경설정</a></li>
        <li><a href="#2">템플릿태그</a></li>
        <li><a href="#3">템플릿 파일 정의, 템플릿 변수 할당, 출력</a>
       	  <ul>
            <li><a href="#31">-예제</a></li>
          </ul>
        </li>
        <li><a href="#4">루프(1)</a>
          <ul>
            <li><a href="#41">-기본 루프 예제</a></li>
            <li><a href="#42">-중첩 루프 예제</a></li>
          </ul>
        </li>
		<li><a href="#6">다차원배열</a>
          <ul>
            <li><a href="#41">배열값 예제</a></li>
          </ul>
        </li>
        <li><a href="#5">인클루드</a>
          <ul>
            <li><a href="#51">-예제</a></li>
          </ul>
        </li>
    </ol>
    <br />
    <br />
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td><strong><a name="#1">1. 환경설정</a></strong></td>
  </tr>
  <tr>
    <td height="33">퓨전템플릿(Fusion Template)은 PHP5.0 (Standard PHP Library)이상에서 작동합니다.</td>
  </tr>
  <tr>
    <td><div style="width:500px; background-color:#f4f4f4; padding:7px;"><span class="style1">const</span> compile_dirname = <span class="style3">'compile_'</span>;<span class="style1"><br />
      private</span> $compile_dir = '';</div></td>
  </tr>
  <tr>
    <td height="60">$compile_dir .'/<span class="style3">compile_</span>'; 사용자가 정의한 $compile_dir 경로에 compile_ 이라는 디렉토리를 생성하며<br />
      HTML 파일을 변환하여 저장하는 곳입니다. 지정된 디렉토리에 대해 웹서버(nobody)가 <br />
      읽고 쓰기 권한을 가져야 합니다</td>
  </tr>
  <tr>
    <td><a href="#1000"><strong>↑ 목차</strong></a></td>
  </tr>
</table>

    <br />
    <br />
    <br />
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td><strong><a name="#2">2. 템플릿 태그</a></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>템플릿 태그는 템플릿 파일내에서 템플릿엔진이 해석할 위치를 표시합니다. <br />
          해석할 내용이 변수이든 제어명령이든 관계없이   {% %}, &lt;% %&gt; 모두가 유효한   템플릿 태그입니다.
          <br />
          <br /></td>
      </tr>
      <tr>
        <td>
          <p>템플릿 파일을 드림위버나 기타 에디터에서 보기 편한 방식을 선택하여 활용하시면 됩니다.<br />
            {%%} 는 노출이 되는 태그 이며, &lt;%%&gt; 은 드림위버와 같은 에디터에서 소스를 숨김 기능을 할 수 있습니다.<br />
          </p>          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p><strong>퓨전템플릿</strong>에서는 단라인 중심의 코딩과 멀티라인 코딩을 선택해서 활용 할 수 있습니다.</p>          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong>#php<br />
        </strong><br />
        <span class="style4">&lt;?php</span><br />
$name = '퓨전템플릿';<span class="style4"><br />
?&gt;</span></div>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="57">
        <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong># html : 단라인코딩</strong><br />
          <br />
          <span class="style4">{%</span> if (name == '퓨전템플릿'): <span class="style4">%}</span> <span class="style4">{%</span>name<span class="style4">%}</span> <span class="style4">{%</span> :if <span class="style4">%}</span></div>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td height="57">
        <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong># html : if , else if</strong><br />
          <br />
          <span class="style4">{%</span> if (name == '퓨전템플릿'): <span class="style4">%}</span> <br />
		  <span class="style11">내이름은 000이다</span> <br />
		  <span class="style4">{%</span>:else if (name == '퓨전템플릿2'): <span class="style4">%}</span><br />
		  <span class="style11">내 나이는 0살이다</span> <br />
		  <span class="style4">{%</span>:else: <span class="style4">%}</span><br />
		  <span class="style11">나는 누구 일까용</span> <br />
		  <span class="style4">{%</span> :if <span class="style4">%}</span>
		 </div>        
		</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong># html : 멀티라인 코딩</strong><br />
          <br />
          <span class="style4">{%</span><br />
if (name == '퓨전템플릿') :<br />
&nbsp;&nbsp;&nbsp;echo name<br />
:if<br />
<span class="style4">%}</span></div></td>
      </tr>
    </table>
    <a href="#1000"><strong>↑ 목차</strong></a>
    <br />
    <br />
    <br />
    <br />
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td><strong><a name="#3">3.  템플릿 파일 정의, 템플릿 변수 할당, 출력</a></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
          <tr>
            <td width="171" bgcolor="#e4e4e4">메소드</td>
            <td width="314" bgcolor="#e4e4e4">기능</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">__construct</span></td>
            <td bgcolor="#FFFFFF">템플릿 변환할 HTML파일 등록</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">offsetSet</span></td>
            <td bgcolor="#FFFFFF">템플릿 변수에 값을 할당(인터페이스)</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">display</span> , <span class="style8">__toString</span></td>
            <td bgcolor="#FFFFFF">출력(RETURN), 출력(echo)</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a href="#1000"><strong>↑ 목차</strong></a></td>
      </tr>
    </table>
    <br />
    <a name="#31">예제)</a><br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">index.php</div>
    <div style="width:500px; padding:7px;">&lt;?php<br />
      <br />
      /**<span class="style9">__construct</span> */<br />
    	try{
	      <br />
&nbsp;&nbsp;        $tpl = <span class="style9">new</span> Template('./template.html');<br />
}catch(Exception $e){<br />
&nbsp;&nbsp;	echo $e->getMessage();
<br />
}<br />
<br />
<br /> 
/**
 <span class="style7">offsetSet</span> */<br />
 <span class="style9">$tpl</span>['<span class="style10">title</span>'] &nbsp;&nbsp;&nbsp;='<span class="style11">퓨전템플릿(Fusion Template)</span>';<br />
 <span class="style9">$tpl</span>['<span class="style10">content</span>']	= '<span class="style11">쉽고, 편리하고, 간편한</span>';<br />
<br />
<br />
/** <span class="style8">__toString</span> */<br />
echo <span class="style9">$tpl</span>;    <br />
    <br />
    ?&gt;</div>
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">template.html</div>
    <div style="width:500px; padding:7px;">&lt;html&gt;<br />
      &lt;head&gt;<br />
        &lt;title&gt;<span class="style10">{%title%}</span>&lt;/title&gt;<br />
        &lt;/head&gt;<br />
      &lt;body&gt;<br />
          <span class="style10">{%content%}</span><br />
        &lt;/body&gt;<br />
    &lt;/html&gt;</div>
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">&gt;&gt;output</div>
    <div style="width:500px; padding:7px;">&lt;html&gt;<br />
      &lt;head&gt;<br />
        &lt;title&gt;<span class="style10">퓨전템플릿(Fusion Template)</span>&lt;/title&gt;<br />
        &lt;/head&gt;<br />
      &lt;body&gt;<br />
      <span class="style10">쉽고,편리하고,간편한</span><br />
        &lt;/body&gt;<br />
    &lt;/html&gt;</div>
    <a href="#1000"><strong>↑ 목차</strong></a>
    <br />
    <br />
    <br />
    <br />
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td><strong><a name="#4">4. 루프 </a></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
          <tr>
            <td width="171" bgcolor="#e4e4e4">명령어</td>
            <td width="314" bgcolor="#e4e4e4">기능</td>
            <td width="314" bgcolor="#e4e4e4">사용법</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">for( ) :</span></td>
            <td bgcolor="#FFFFFF">루프의 시작</td>
            <td bgcolor="#FFFFFF">{% <strong>for (</strong> 루프아이디 <strong>) :</strong> %}</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">: for</span></td>
            <td bgcolor="#FFFFFF">루프의 끝</td>
            <td bgcolor="#FFFFFF">{% <strong>:for</strong> %}</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a href="#1000"><strong>↑ 목차</strong></a></td>
      </tr>
    </table>
    <br />
    <a name="#41">기본 루프 예제)</a><br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">index.php</div>
    <div style="width:500px; padding:7px;">
      <p>&lt;?php<br />
          <br />
        try{
        <br />
  &nbsp;&nbsp;        $tpl = <span class="style9">new</span> Template('./template.html');<br />
        }catch(Exception $e){<br />
  &nbsp;&nbsp;	echo $e->getMessage(); <br />
        }<br />
        <br />
  <br />
  <span class="style16">$loop</span>[] = array();<br />
        for ( $i=1; $i&lt;=3; $i++ ) {<br />
  &nbsp;&nbsp;&nbsp;<span class="style16">$loop</span>[] = array(<br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style17">num</span>' =&gt; $i,<br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style17">add</span>' =&gt; $i + 1<br />
&nbsp;&nbsp;&nbsp;);<br />
        }<br />
        <br />
        <span class="style9">$tpl</span>['<span class="style4">list</span>'] &nbsp;&nbsp;&nbsp;= <span class="style16">$loop</span>;<br />
          <br />
          <br />
        echo <span class="style9">$tpl</span>; <br />
        <br />
        ?&gt;</p>
      </div>
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">template.html</div>
    <div style="width:500px; padding:7px;">      &lt;table&gt;<br />
      <br />
        <span class="style7">{%&nbsp;for (</span> <span class="style4">list</span> <span class="style9">) : %}</span><br />
        <span class="style21">&lt;tr&gt; &lt;td&gt;</span><span class="style17">{%<span class="style4">list</span>.num%}</span><span class="style21">&lt;/td&gt;</span> &nbsp;&nbsp;<span class="style21">&lt;td&gt;</span><span class="style17">{%<span class="style4">list</span>.add%}</span><span class="style21">&lt;/td&gt; &lt;/tr&gt;</span><br />
          <span class="style9">{% :for %}</span><br />
          <br />
      &lt;/table&gt;<br />
    </div>
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">&gt;&gt;output</div>
    <div style="width:500px; padding:7px;">&lt;table&gt;<br />
      <br />
        <span class="style21">&lt;tr&gt; &lt;td&gt;</span> <span class="style20">1</span> <span class="style21">&lt;/td&gt; &nbsp;&lt;td&gt;</span> <span class="style17"><strong>2</strong></span> <span class="style21">&lt;/td&gt; &lt;/tr&gt;</span><br />
        <span class="style21">&lt;tr&gt; &lt;td&gt;</span> <span class="style20">2 </span><span class="style21">&lt;/td&gt; &nbsp;&lt;td&gt; </span><span class="style17"><strong>3 </strong></span><span class="style21">&lt;/td&gt; &lt;/tr&gt;</span><br />
          <span class="style21">&lt;tr&gt; &lt;td</span>&gt; <span class="style20">3</span><span class="style21"> &lt;/td&gt; &nbsp;&lt;td&gt; </span><span class="style17"><strong>4</strong></span><span class="style21"> &lt;/td&gt; &lt;/tr&gt;</span><br />
        <br />
    &lt;/table&gt;</div>
    <a href="#1000"><strong>↑ 목차</strong></a>
    <br />
    <br />
    <br />
    <br />
    
    <a name="#42">중첩 루프 예제)</a><br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">index.php</div>
    <div style="width:500px; padding:7px;">
      <p>&lt;?php<br />
          <br />
        try{
        <br />
  &nbsp;&nbsp;        $tpl = <span class="style9">new</span> Template('./template.html');<br />
        }catch(Exception $e){<br />
  &nbsp;&nbsp;	echo $e->getMessage(); <br />
        }<br />
        <br />
  <br />
  <span class="style16">$loop</span>[] = array();<br />
        for ( $i=1; $i&lt;=3; $i++ ) {<br />
  &nbsp;&nbsp;&nbsp;<span class="style16">$loop</span>[] = array(<br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style17">num</span>' =&gt; $i,<br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style17">add</span>' =&gt; $i + 1<br />
&nbsp;&nbsp;&nbsp;);
<br />
&nbsp;&nbsp;&nbsp;<span class="style23">$loop2</span> =&amp; <span class="style22">$loop</span>[$i]['<span class="style24">list2</span>'];<br />
&nbsp;&nbsp;&nbsp;for ( $j=1; $j&lt;=3; $j++ ) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style23">$loop2 </span>[] = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style25">number</span>' =&gt; $j,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style25">age</span>' =&gt; $j + 7<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
&nbsp;&nbsp;&nbsp;}<br />
        }<br />
        <br />
        <span class="style9">$tpl</span>['<span class="style4">list</span>'] &nbsp;&nbsp;&nbsp;= <span class="style16">$loop</span>;<br />
        <br />
        <br />
        echo <span class="style9">$tpl</span>; <br />
          <br />
        ?&gt;</p>
      </div>
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">template.html</div>
    <div style="width:500px; padding:7px;">      &lt;ol&gt;
      <br />
        <span class="style7">{%&nbsp;for (</span> <span class="style4">list</span> <span class="style9">) : %}</span><br />
        <span class="style21">&lt;li&gt; </span><span class="style17">{%<span class="style4">list</span>.num%}</span><span class="style21"> &lt;/li&gt;</span><br />
        <span class="style21">&lt;li&gt; </span><span class="style17">{%<span class="style4">list</span>.add%}</span><span class="style21"> &lt;/li&gt;</span><br />
        &nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;        &lt;ul&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="style7">{%&nbsp;for (</span> <span class="style27">list2</span> <span class="style9">) : %}</span><br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt; <span class="style28">{%list2.number%}</span> &lt;/li&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt; <span class="style28">{%list2.age%}</span> &lt;/li&gt;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="style9">{% :for %}</span><br />
        &nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />
        <br />
          <span class="style9">{% :for %}</span><br />
      &lt;/ol&gt;<br />
    </div>
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">루프 변수는 상위 변수는 상위 루프아이디.변수명으로 선언하여 사용할 수 있습니다.<br />
      즉, 하위 루프에서 상단 루프의 변수 값을 호출 할 경우 list.num 와 같이 하단루프에서 상위 루프 변수 값을 사용할 수 있습니다.<br />
    </div>
    <a href="#1000"><strong>↑ 목차</strong></a>
    <br /><br /><br />
    
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td><strong><a name="#4">4.1 루프 INDEX / 총가운트 </a></strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
          <tr>
            <td width="171" bgcolor="#e4e4e4">명령어</td>
            <td width="314" bgcolor="#e4e4e4">기능</td>
            <td width="314" bgcolor="#e4e4e4">사용법</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">list_count</span></td>
            <td bgcolor="#FFFFFF">루프아이디 + "_count"</td>
            <td bgcolor="#FFFFFF">{% <strong></strong> 루프아이디 <strong>_count</strong> %}</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">list.index</span></td>
            <td bgcolor="#FFFFFF">루프아이디 + ".index"</td>
            <td bgcolor="#FFFFFF">{% <strong>루프아이디.index</strong> %}</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><a href="#1000"><strong>↑ 목차</strong></a></td>
      </tr>
    </table>
    <br />
    <a name="#41">(루프 index / 갯수 출력 예제)</a><br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">index.php</div>
    <div style="width:500px; padding:7px;">
      <p>&lt;?php<br />
          <br />
        try{
        <br />
  &nbsp;&nbsp;        $tpl = <span class="style9">new</span> Template('./template.html');<br />
        }catch(Exception $e){<br />
  &nbsp;&nbsp;  echo $e->getMessage(); <br />
        }<br />
        <br />
  <br />
  <span class="style16">$loop</span>[] = array();<br />
        for ( $i=1; $i&lt;=3; $i++ ) {<br />
  &nbsp;&nbsp;&nbsp;<span class="style16">$loop</span>[] = array(<br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style17">name</span>' =&gt; '홍길동'.$i,<br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'<span class="style17">address</span>' =&gt; '서울'<br />
&nbsp;&nbsp;&nbsp;);<br />
        }<br />
        <br />
        <span class="style9">$tpl</span>['<span class="style4">list</span>'] &nbsp;&nbsp;&nbsp;= <span class="style16">$loop</span>;<br />
          <br />
          <br />
        echo <span class="style9">$tpl</span>; <br />
        <br />
        ?&gt;</p>
      </div>
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">template.html</div>
    배열갯수 : <span class="style7">{%&nbsp;</span> <span class="style4">list_count</span> <span class="style9">%}</span><br />
    <div style="width:500px; padding:7px;">      &lt;table&gt;<br />
      <br />
        <span class="style7">{%&nbsp;for (</span> <span class="style4">list</span> <span class="style9">) : %}</span><br />
        <span class="style21">&lt;tr&gt; &lt;td&gt;</span><span class="style17">{%<span class="style4">list</span>.index%}</span><span class="style21">&lt;/td&gt;</span> &nbsp;&nbsp;<span class="style21">&lt;td&gt;</span><span class="style21">{%<span class="style21">list</span>.name%}</span><span class="style21">&lt;/td&gt; &lt;/tr&gt;</span><br />
          <span class="style9">{% :for %}</span><br />
          <br />
      &lt;/table&gt;<br />
    </div>
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">&gt;&gt;output</div>
    배열갯수 : <span class="style4">3</span> <br />
    <div style="width:500px; padding:7px;">&lt;table&gt;<br />
      <br />
        <span class="style21">&lt;tr&gt; &lt;td&gt;</span> index : <span class="style20">0</span> <span class="style21">&lt;/td&gt; &nbsp;&lt;td&gt;</span> <strong>홍길동1</strong> <span class="style21">&lt;/td&gt; &lt;/tr&gt;</span><br />
        <span class="style21">&lt;tr&gt; &lt;td&gt;</span> index : <span class="style20">1</span><span class="style21">&lt;/td&gt; &nbsp;&lt;td&gt; </span><strong>홍길동2</strong><span class="style21">&lt;/td&gt; &lt;/tr&gt;</span><br />
          <span class="style21">&lt;tr&gt; &lt;td</span>&gt; index : <span class="style20">2</span><span class="style21"> &lt;/td&gt; &nbsp;&lt;td&gt; </span><strong>홍길동3</strong><span class="style21"> &lt;/td&gt; &lt;/tr&gt;</span><br />
        <br />
    &lt;/table&gt;</div>
    <a href="#1000"><strong>↑ 목차</strong></a>
    <br />
    <br />
    <br />
    <br />
    
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td><strong><a name="#5">5. 인클루드</a></strong></td>
  </tr>
  <tr>
    <td height="33">퓨전템플릿(Fusion Template)은 디자이너와의 성공적인 협력 작업을 위해 HTML 에서 <br />
      직접 인클루드 명령어를 사용하도록 제공합니다.</td>
  </tr>
  <tr>
    <td><table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
          <tr>
            <td width="190" bgcolor="#e4e4e4">명령어</td>
            <td width="150" bgcolor="#e4e4e4">기능[PHP 와동일]</td>
            <td width="314" bgcolor="#e4e4e4">사용법</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">{% include %}</span></td>
            <td bgcolor="#FFFFFF">&lt;? include ?&gt;</td>
            <td bgcolor="#FFFFFF">{% <strong>include </strong><strong>&quot;</strong> 파일경로<strong> &quot; </strong>%}</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">{% include_once %}</span></td>
            <td bgcolor="#FFFFFF">&lt;? include_once ?&gt;</td>
            <td bgcolor="#FFFFFF">{% <strong>include_once</strong> <strong>&quot;</strong> 파일경로 <strong>&quot;</strong> %}</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">{% require %}</span></td>
            <td bgcolor="#FFFFFF">&lt;? require ?&gt;</td>
            <td bgcolor="#FFFFFF">{% <strong>require </strong> <strong>&quot;</strong> 파일경로 <strong>&quot;</strong> %}</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><span class="style7">{% require_once %}</span></td>
            <td bgcolor="#FFFFFF">&lt;? require_once ?&gt;</td>
            <td bgcolor="#FFFFFF">{% <strong>require_once</strong> <strong>&quot;</strong> 파일경로 <strong>&quot;</strong> %}</td>
          </tr>
        </table>
        
        
        </td>
  </tr>
  <tr>
    <td height="60">
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong>main</strong>.html</div>
    <div style="width:500px; padding:7px;">
      <p><span class="style7">{%&nbsp;include_once &quot;</span> <span class="style32">./header.html</span> <span class="style9">&quot; %}</span><br />
          </p>
      <p>&lt;body&gt;</p>
      <p>퓨전 템플릿( <span class="style10">{%content%} </span>) 인클루드 화는 HTML 페이지 입니다.<br />
        HTML 에서 바로 인클루드를 사용하기 때문에 디자이너들도<br />
          쉽게 어느 경로에 파일을 수정 하면 되는지 쉽게 확인 할 수 있습니다.<span class="style9"></span><br />
                <br />
&lt;/body&gt;<br />
            <br />
                <span class="style7">{%&nbsp;include_once &quot;</span> <span class="style32">./footer.html</span> <span class="style9">&quot; %}</span><br />
        </p>
    </div>
    
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong>header</strong>.html</div>
    <div style="width:500px; padding:7px;">
      <p>&lt;html&gt;<br />
        &lt;title&gt; <span class="style10">{%title%}</span> &lt;/title&gt;<br />
        </p>
      </div>
    
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;"><strong>footer</strong>.html</div>
    <div style="width:500px; padding:7px;"><br />
      copyright (c) <span class="style10">{%copyname%}</span><br />
      &lt;/html&gt;        </div>
      
      
      <br />
      <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">index.php</div>
    <div style="width:500px; padding:7px;">&lt;?php<br />
    <br />
    	try{
	      <br />
&nbsp;&nbsp;        $tpl = <span class="style9">new</span> Template('<span class="style30">./main.html</span>');<br />
}catch(Exception $e){<br />
&nbsp;&nbsp;	echo $e->getMessage();
<br />
}<br />
<br />
<br />
 <span class="style9">$tpl</span>['<span class="style10">title</span>'] &nbsp;&nbsp;&nbsp;='<span class="style11">퓨전템플릿(Fusion Template)</span>';<br />
 <span class="style9">$tpl</span>['<span class="style10">content</span>']	= '<span class="style11">쉽고, 편리하고, 간편한</span>';<br />
 <span class="style9">$tpl</span>['<span class="style10">copyname</span>']	= '<span class="style11">오픈소스</span>';<br />
<br />
<br />
/** <span class="style8">__toString</span> */<br />
echo <span class="style9">$tpl</span>;    <br />
    <br />
    ?&gt;</div>
    
    <br />
    <div style="width:500px; background-color:#f4f4f4; padding:7px;">output</div>
    <div style="width:500px; padding:7px;">
      <p>&lt;html&gt;<br />
&lt;title&gt; <span class="style10">퓨전템플릿(Fusion Template)</span> &lt;/title&gt;<br />
          </p>
      <p>&lt;body&gt;</p>
      <p>퓨전 템플릿( <span class="style10">쉽고, 편리하고, 간편한 </span>) 인클루드 화는 HTML 페이지 입니다.<br />
        HTML 에서 바로 인클루드를 사용하기 때문에 디자이너들도<br />
          쉽게 어느 경로에 파일을 수정 하면 되는지 쉽게 확인 할 수 있습니다.<span class="style9"></span><br />
                <br />
&lt;/body&gt;<br />
            <br />
            copyright (c) <span class="style10">오픈소스</span><br />
&lt;/html&gt; <br />
        </p>
    </div>
    </td>
  </tr>
  <tr>
    <td height="60">인클루드 되어지는 파일 중 ( header.html, footer.html ) 중 수정된 파일이 있다면 그 파일 만<br />
      다시 컴파일용 파일로 변경하여 
      적용합니다.</td>
  </tr>
  <tr>
    <td><a href="#1000"><strong>↑ 목차</strong></a></td>
  </tr>
</table>
    
    </td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

# 다차원배열============================================
[month] => Array
                (
                    [0] => Array
                        (
                            [0] => Array
                                (
                                    [date] => 2012-04-29
                                    [day] => 29
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [1] => Array
                                (
                                    [date] => 2012-04-30
                                    [day] => 30
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [2] => Array
                                (
                                    [date] => 2012-05-01
                                    [day] => 1
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 근로자의날
                                )

                            [3] => Array
                                (
                                    [date] => 2012-05-02
                                    [day] => 2
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [4] => Array
                                (
                                    [date] => 2012-05-03
                                    [day] => 3
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [5] => Array
                                (
                                    [date] => 2012-05-04
                                    [day] => 4
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [6] => Array
                                (
                                    [date] => 2012-05-05
                                    [day] => 5
                                    [moon] => 03.15
                                    [holiday] => 1
                                    [holiday_title] => 어린이날
                                )

                        )

                    [1] => Array
                        (
                            [0] => Array
                                (
                                    [date] => 2012-05-06
                                    [day] => 6
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [1] => Array
                                (
                                    [date] => 2012-05-07
                                    [day] => 7
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [2] => Array
                                (
                                    [date] => 2012-05-08
                                    [day] => 8
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 어버이날
                                )

                            [3] => Array
                                (
                                    [date] => 2012-05-09
                                    [day] => 9
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [4] => Array
                                (
                                    [date] => 2012-05-10
                                    [day] => 10
                                    [moon] => 03.20
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [5] => Array
                                (
                                    [date] => 2012-05-11
                                    [day] => 11
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                            [6] => Array
                                (
                                    [date] => 2012-05-12
                                    [day] => 12
                                    [moon] => 
                                    [holiday] => 
                                    [holiday_title] => 
                                )

                        )

                )

@ 방법1
<table>
{%for(month):%}
	<tr>
		<td><p>{%month.key.0.day%}</p></td>
		<td><p>{%month.key.1.day%}</p></td>
		<td><p>{%month.i.2.day%}</p></td>
		<td><p>{%month.i.3.day%}</p></td>
		<td><p>{%month.i.4.day%}</p></td>
		<td><p>{%month.key.5.day%}</p></td>
		<td><p>{%month.key.6.day%}</p></td>
	</tr>
	{%endfor%}
</table>

@ 방법2
<p>{%month.0.0.day%}</p>
<p>{%month.0.1.day%}</p>



</body>
</html>
