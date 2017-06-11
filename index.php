<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="isi dengan URL Favicon anda" type="image/x-icon" />
	<title>Google Drive Player</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<style type="text/css">
		.besar {
			font-size: 2em;
		}
	</style>
</head>
<body>
	<?php
	include 'config.php';
	?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">Google Drive Player</a>
			</div>
			<ul class="nav navbar-nav">
				<li>
					<a href="javascript:void(0)" onclick="window.open ('index.php')">
						EMBED Generator
					</a>
				</li>
				<li>
					<a href="javascript:void(0)" onclick="window.open ('imdbgrab.php')">
						IMDB Generator
					</a>
				</li>				
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
			<!-- Dengan Adsense anda -->
					<h1>
						<span class="label label-success">
							Embed Generator
						</span>
					</h1>
				</center>

				<div class="alert alert-success"><b>Link Demo Video : </b> https://drive.google.com/file/d/0B0KUwkavRLIzVFJSVjdsQ1NSdG8/view?usp=sharing
				</div>
				<div class="alert alert-dismissable alert-success">
					<strong>Link Demo Subtitle:</strong> <?php echo $baseurl; ?>/Headshot.2016.srt
				</div>
				<div class="alert alert-dismissable alert-success">
					<strong>Link Demo Poster:</strong> <?php echo $baseurl; ?>/Headshot.2016.jpg
				</div>
			</div>

			<div class="col-md-12">
				<form action="" method="POST">
					<div class="form-group">
						<div class="input-group input-group-lg">
							<span class="input-group-addon">Link Video</span>
							<input type="form-control" name="url" class="form-control" placeholder="Put Link Video Here" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-lg">
							<span class="input-group-addon">Link Subtitle</span>
							<input type="form-control" name="suburl" class="form-control" placeholder="Put Link Subtitle Here">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-lg">
							<span class="input-group-addon">Link Poster</span>
							<input type="form-control" name="thumbnail" class="form-control" placeholder="Put Link Poster Here">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Procesar</button>
					</div>
				</form>
			</div>

			<?php
				if (!empty($_POST)) {
					extract($_POST);
					$urlEncode = urlencode(base64_encode($url));
				}
			?>
			
			<div class="col-md-12">
				<div>
					<span class="label label-primary">
						JWPlayer Code
					</span>
					<br/>
					<textarea class="form-control"><iframe src="<?php echo $baseurl; ?>/embed/?type=jwplayer&url=<?php echo @$urlEncode; ?>&sub=<?php echo @$suburl; ?>&thumbnail=<?php echo @$thumbnail; ?>" frameborder="0" width="100%" height="100%" scrolling="no" allowfullscreen></iframe></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div>
					<span class="label label-primary">
						Videojs Code
					</span>
					<br/>
					<textarea class="form-control"><iframe src="<?php echo $baseurl; ?>/embed/?type=videojs&url=<?php echo @$urlEncode; ?>&sub=<?php echo @$suburl; ?>&thumbnail=<?php echo @$thumbnail; ?>" frameborder="0" width="100%" height="100%" scrolling="no" allowfullscreen></iframe></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div>
					<span class="label label-primary">
						Download Link Code
					</span>
					<br/>
					<textarea class="form-control"><?php echo $baseurl; ?>/embed/?type=download&url=<?php echo @$urlEncode; ?>&sub=<?php echo @$suburl; ?></textarea>
				</div>
			</div>
		</div>
		<center>
			<!-- Dengan Adsense anda -->
		</center>

		<div class="row">
			<center>
				Copyright &copy; google.com 2017
			</center>
		</div>
	</div>
	<?php// include 'tracking.php'; ?>
	<!-- AdsBlocker Start -->
<style>#h237{position:fixed !important;position:absolute;top:0;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");left:0;width:102%;height:102%;background-color:#f9f9f9;opacity:.97;display:block;padding:10% 0}#h237 *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 14px Verdana,Arial,sans-serif;text-decoration:none}#h237 ~ *{display:none}</style><div style='display: none;'><a href='http://sekolahblogger.net'> Blogger</a></div><div id="h237">
<span>Please Enable JavaScript!<br />Mohon Aktifkan Javascript!<a href="http://www.enable-javascript.com/">[ Enable JavaScript ]</a></span></div>
<script>window.document.getElementById("h237").parentNode.removeChild(window.document.getElementById("h237"));(function(l,m){function n(a){a&&h237.nextFunction()}var h=l.document,p=["i","s","u"];n.prototype={rand:function(a){return Math.floor(Math.random()*a)},getElementBy:function(a,b){return a?h.getElementById(a):h.getElementsByTagName(b)},getStyle:function(a){var b=h.defaultView;return b&&b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},deferExecution:function(a){setTimeout(a,250)},insert:function(a,b){var e=h.createElement("span"),d=h.body,c=d.childNodes.length,g=d.style,f=0,k=0;if("h237"==b){e.setAttribute("id",b);g.margin=g.padding=0;g.height="100%";for(c=this.rand(c);f<c;f++)1==d.childNodes[f].nodeType&&(k=Math.max(k,parseFloat(this.getStyle(d.childNodes[f]).zIndex)||0));k&&(e.style.zIndex=k+1);c++}e.innerHTML=a;d.insertBefore(e,d.childNodes[c-1])},displayMessage:function(a){var b=this;a="abisuq".charAt(b.rand(5));b.insert("<"+a+'><img src="https://lh3.googleusercontent.com/-1zyvBGHoXLg/Vugs3KGfrKI/AAAAAAAAAD0/IN60lPxm4aQY5Z_sTPmKvzx5vLq5jv62ACCo/s699-Ic42/cara%2Bmembuat%2Bscript%2Bmemasang%2Bscript%2Banti%2Badblock%2Bdi%2Bblog%2Bagar%2Bmenjadi%2Blebih%2Bkeren%2B10.png" height="350" width="699" alt="Disable-AdBlock" /> <a href="JavaScript:window.location.reload()">[ Reload ]</a>'+("</"+a+">"),"h237");h.addEventListener&&b.deferExecution(function(){b.getElementBy("h237").addEventListener("DOMNodeRemoved",function(){b.displayMessage()},!1)})},i:function(){for(var a="DivTopAd,ad-zone-1,ad_190x90,ads-sticky,iqadtile5,leftframeAD,tobsideAd,ad,ads,adsense".split(","),b=a.length,e="",d=this,c=0,g="abisuq".charAt(d.rand(5));c<b;c++)d.getElementBy(a[c])||(e+="<"+g+' id="'+a[c]+'"></'+g+">");d.insert(e);d.deferExecution(function(){for(c=0;c<b;c++)if(null==d.getElementBy(a[c]).offsetParent||"none"==d.getStyle(d.getElementBy(a[c])).display)return d.displayMessage("#"+a[c]+"("+c+")");d.nextFunction()})},s:function(){var a={'pagead2.googlesyndic':'google_ad_client','js.adscale.de/getads':'adscale_slot_id','get.mirando.de/miran':'adPlaceId'},b=this,e=b.getElementBy(0,"script"),d=e.length-1,c,g,f,k;h.write=null;for(h.writeln=null;0<=d;--d)if(c=e[d].src.substr(7,20),a[c]!==m){f=h.createElement("script");f.type="text/javascript";f.src=e[d].src;g=a[c];l[g]=m;f.onload=f.onreadystatechange=function(){k=this;l[g]!==m||k.readyState&&"loaded"!==k.readyState&&"complete"!==k.readyState||(l[g]=f.onload=f.onreadystatechange=null,e[0].parentNode.removeChild(f))};e[0].parentNode.insertBefore(f,e[0]);b.deferExecution(function(){if(l[g]===m)return b.displayMessage(f.src);b.nextFunction()});return}b.nextFunction()},u:function(){var a="ad&adv_keywords=,-page-peel/,/adchain.,/adfootright.,/adsxml/ad,/adyard300.,/impopup/ad,/loadadsparam.,/meme_ad.,_adshare.".split(","),b=this,e=b.getElementBy(0,"img"),d,c;e[0]!==m&&e[0].src!==m&&(d=new Image,d.onload=function(){c=this;c.onload=null;c.onerror=function(){p=null;b.displayMessage(c.src)};c.src=e[0].src+"#"+a.join("")},d.src=e[0].src);b.deferExecution(function(){b.nextFunction()})},nextFunction:function(){var a=p[0];a!==m&&(p.shift(),this[a]())}};l.h237=h237=new n;h.addEventListener?l.addEventListener("load",n,!1):l.attachEvent("onload",n)})(window);</script>
<!-- AdsBlocker End -->
<!-- nerdecuador lo robo de kekohblogger y yo se lo saque a nerdecuador por una liga que dejo en su sitio del vide3o  https://youtu.be/N0ZDdFZP6Go?t=2m55s-->
</body>
</html>
