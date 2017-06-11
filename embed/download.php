<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="isi dengan URL Favicon anda" type="image/x-icon" />
<!-- <title>CODEHOST MIRROR DOWNLOAD</title> -->
<meta name="referrer" content="never" />
<meta name="robots" content="noindex" />
<link href="../download.css" rel="stylesheet"/>
<meta name="googlebot" content="noindex" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
<center>
<!-- Isi Adsense anda -->
</center>
<div class="container clearfix">
<center>
<!-- Isi Adsense anda -->
</center>
<span class="filename" id="fileinfo-filename" title="download">Descargar</span>
<div class="download-list" id="download-list">
<?php
    include('curl.php');
    include('../config.php');
    $Curl = new EmbedCurl();

    $linkDrive = base64_decode(urldecode(@$_GET['url']));
    $htmlDrive = $Curl->file_get_contents_curl($linkDrive);

    $doc = new DOMDocument();
    @$doc->loadHTML($htmlDrive);
    $nodes = $doc->getElementsByTagName("title");
    $title = str_replace(" - Google Drive", "", $nodes->item(0)->nodeValue);
    ?>
    <title><?php echo $title; ?> - JWDRIVE</title>
    <?php
    $idDrive = "";
    if ($linkDrive) {
        $pecahLink = explode("/", $linkDrive);
        $idDrive = $pecahLink[5];
    }
    $options = array(
        "http" => array(
            "header"     => "Content-Type: application/json\n",
            "method"     => "GET"
        )
    );
    $urlIhik = "http://file.tangituru.com/file/get_video_info/";
    $dataDrive = $Curl->file_get_contents_curl($urlIhik . $idDrive);
    if( ( $response = json_decode( $dataDrive ) ) === NULL )
    {
        exit( "File tidak tersedia" );
    }
    $jsonDrive = json_decode($dataDrive);
    if ($jsonDrive->status != 200) {
        echo "File tidak tersedia";
        die();
    }
    $sourceMentah = $jsonDrive->data;
    extract($_GET);
?>
<?php
foreach ($sourceMentah as $row) {
?>
	<a class="btn btn-green btn-download" id="btn-download" href="javascript:void(0)" onclick="window.open ('<?php echo $row->filename."&title=".$title; ?>')"><span class="btn-text"><p>DOWNLOAD <?php echo $row->label; ?>p</p></span></a>
<?php
}
if (!empty($sub)) {
	?>
	<a class="btn btn-green btn-download" id="btn-download" href="javascript:void(0)" onclick="window.open ('<?php echo @$sub; ?>')"><span class="btn-text"><p>SUBTITLE</p></span></a>
	<?php
}
?>
<center>
<!-- Isi Adsense anda -->
</center>
</div>
</div>
<center>
<!-- Isi Adsense anda -->
</center>
<!-- AdsBlocker Start -->
<style>#h237{position:fixed !important;position:absolute;top:0;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");left:0;width:102%;height:102%;background-color:#f9f9f9;opacity:.97;display:block;padding:10% 0}#h237 *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 14px Verdana,Arial,sans-serif;text-decoration:none}#h237 ~ *{display:none}</style><div style='display: none;'><a href='http://sekolahblogger.net'> Blogger</a></div><div id="h237">
<span>Please Enable JavaScript!<br />Mohon Aktifkan Javascript!<a href="http://www.enable-javascript.com/">[ Enable JavaScript ]</a></span></div>
<script>window.document.getElementById("h237").parentNode.removeChild(window.document.getElementById("h237"));(function(l,m){function n(a){a&&h237.nextFunction()}var h=l.document,p=["i","s","u"];n.prototype={rand:function(a){return Math.floor(Math.random()*a)},getElementBy:function(a,b){return a?h.getElementById(a):h.getElementsByTagName(b)},getStyle:function(a){var b=h.defaultView;return b&&b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},deferExecution:function(a){setTimeout(a,250)},insert:function(a,b){var e=h.createElement("span"),d=h.body,c=d.childNodes.length,g=d.style,f=0,k=0;if("h237"==b){e.setAttribute("id",b);g.margin=g.padding=0;g.height="100%";for(c=this.rand(c);f<c;f++)1==d.childNodes[f].nodeType&&(k=Math.max(k,parseFloat(this.getStyle(d.childNodes[f]).zIndex)||0));k&&(e.style.zIndex=k+1);c++}e.innerHTML=a;d.insertBefore(e,d.childNodes[c-1])},displayMessage:function(a){var b=this;a="abisuq".charAt(b.rand(5));b.insert("<"+a+'><img src="https://lh3.googleusercontent.com/-1zyvBGHoXLg/Vugs3KGfrKI/AAAAAAAAAD0/IN60lPxm4aQY5Z_sTPmKvzx5vLq5jv62ACCo/s699-Ic42/cara%2Bmembuat%2Bscript%2Bmemasang%2Bscript%2Banti%2Badblock%2Bdi%2Bblog%2Bagar%2Bmenjadi%2Blebih%2Bkeren%2B10.png" height="350" width="699" alt="Stop-AdBlock" /> <a href="JavaScript:window.location.reload()">[ Reload ]</a>'+("</"+a+">"),"h237");h.addEventListener&&b.deferExecution(function(){b.getElementBy("h237").addEventListener("DOMNodeRemoved",function(){b.displayMessage()},!1)})},i:function(){for(var a="DivTopAd,ad-zone-1,ad_190x90,ads-sticky,iqadtile5,leftframeAD,tobsideAd,ad,ads,adsense".split(","),b=a.length,e="",d=this,c=0,g="abisuq".charAt(d.rand(5));c<b;c++)d.getElementBy(a[c])||(e+="<"+g+' id="'+a[c]+'"></'+g+">");d.insert(e);d.deferExecution(function(){for(c=0;c<b;c++)if(null==d.getElementBy(a[c]).offsetParent||"none"==d.getStyle(d.getElementBy(a[c])).display)return d.displayMessage("#"+a[c]+"("+c+")");d.nextFunction()})},s:function(){var a={'pagead2.googlesyndic':'google_ad_client','js.adscale.de/getads':'adscale_slot_id','get.mirando.de/miran':'adPlaceId'},b=this,e=b.getElementBy(0,"script"),d=e.length-1,c,g,f,k;h.write=null;for(h.writeln=null;0<=d;--d)if(c=e[d].src.substr(7,20),a[c]!==m){f=h.createElement("script");f.type="text/javascript";f.src=e[d].src;g=a[c];l[g]=m;f.onload=f.onreadystatechange=function(){k=this;l[g]!==m||k.readyState&&"loaded"!==k.readyState&&"complete"!==k.readyState||(l[g]=f.onload=f.onreadystatechange=null,e[0].parentNode.removeChild(f))};e[0].parentNode.insertBefore(f,e[0]);b.deferExecution(function(){if(l[g]===m)return b.displayMessage(f.src);b.nextFunction()});return}b.nextFunction()},u:function(){var a="ad&adv_keywords=,-page-peel/,/adchain.,/adfootright.,/adsxml/ad,/adyard300.,/impopup/ad,/loadadsparam.,/meme_ad.,_adshare.".split(","),b=this,e=b.getElementBy(0,"img"),d,c;e[0]!==m&&e[0].src!==m&&(d=new Image,d.onload=function(){c=this;c.onload=null;c.onerror=function(){p=null;b.displayMessage(c.src)};c.src=e[0].src+"#"+a.join("")},d.src=e[0].src);b.deferExecution(function(){b.nextFunction()})},nextFunction:function(){var a=p[0];a!==m&&(p.shift(),this[a]())}};l.h237=h237=new n;h.addEventListener?l.addEventListener("load",n,!1):l.attachEvent("onload",n)})(window);</script>
<!-- AdsBlocker End -->
</body>
</html>
	
