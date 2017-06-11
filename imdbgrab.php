<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="isi dengan URL Favicon anda" type="image/x-icon" />
	<title>Rellena el Título</title>
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
		include('embed/curl.php');
		if (@$_POST) {
			$Curl = new EmbedCurl();
			extract($_POST);
			$linkAsli = explode("/", $imdb_url);
			$data = "";
			$errorMsg = "";
			if ($linkAsli[3]) {
				$linkImdb = "http://www.omdbapi.com/?i=".$linkAsli[4];
				$jsonImdb = $Curl->file_get_contents_curl($linkImdb);
				$data = json_decode(json_decode(json_encode($jsonImdb)));
			}
			else {
				$errorMsg = "Url tidak valid";
			}
		}
	?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">Google</a>
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
				<li>
					<a href="javascript:void(0)" onclick="window.open ('nerdecuador:isi dengan email anda')">
						Contactame
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
							IMDB GENERATOR
						</span>
					</h1>
				</center>

				<div class="alert alert-success"><b>Link Demo IMDB : </b> http://www.imdb.com/title/tt5147214
				</div>
			</div>

			<div class="col-md-12">
				<form action="" method="POST">
					<div class="form-group">
						<div class="input-group input-group-lg">
							<span class="input-group-addon">IMDB Url</span>
							<input type="form-control" name="imdb_url" class="form-control" placeholder="input url imdb here" autofocus required>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">PROCESO</button>
					</div>
				</form>
			</div>
			<div class="col-md-12">
				<?php
					if (@$_POST) {
						?>
						<div>
							<div class='imdb' style='font-size: 12px !important;'><span class='imdbposter' style='float:left;padding-right: 10px; '><img width='182px' height='268' src='<?php echo @$data->Poster; ?>'/></span><span class='imdbright' style='font-family:Verdana;'><h1 style='font-family:Arial;margin: 0;'><?php echo @$data->Title; ?> (<?php echo @$data->Year; ?>)</h1> <span style='font-size:10px;'><?php echo @$data->Runtime; ?> | <?php echo @$data->Genre; ?> | <?php echo @$data->Released; ?> (<?php echo @$data->Country; ?>) | <a href='<?php echo @$imdb_url; ?>'><img alt="IMDB" src="//codehost.me/api/imdbicon.png"></a></span><br><hr style='color:rgba(0, 0, 0, 0.42);padding: 0;margin: 0;'> <br><span class='ratting' style='font-weight:bold; background: url(//codehost.me/api/stars.png) no-repeat;padding: 16px;width: 60px;float: left;'>9.5</span><b>Rating : </b><?php echo @$data->imdbRating; ?> /10 from <?php echo @$data->imdbVotes; ?> users<br><b>Metascore : </b> <?php echo @$data->Metascore; ?><br><br><span class='ratting2' style='clear:both;'><?php echo @$data->Plot; ?></span><br><hr style='color:rgba(0, 0, 0, 0.42);padding: 0;margin: 0;'> <br> <b>Director :</b> <?php echo @$data->Director; ?> <br><b>Stars :</b> <?php echo @$data->Actors; ?> <br> </span></div>
							<div style="clear:both;"></div>
						</div>

						<br/>
						<span class="label label-primary">
							IMDB Code
						</span>
						<br/>
						<div class="form-group">
							<textarea class="form-control" rows="5"><div class='imdb' style='font-size: 12px !important;'><span class='imdbposter' style='float:left;padding-right: 10px; '><img width='182px' height='268' src='<?php echo @$data->Poster; ?>'/></span><span class='imdbright' style='font-family:Verdana;'><h1 style='font-family:Arial;margin: 0;'><?php echo @$data->Title; ?> (<?php echo @$data->Year; ?>)</h1> <span style='font-size:10px;'><?php echo @$data->Runtime; ?> | <?php echo @$data->Genre; ?> | <?php echo @$data->Released; ?> (<?php echo @$data->Country; ?>) | <a href='<?php echo @$imdb_url; ?>' target='_blank'>Imdb</a></span><br><hr style='color:rgba(0, 0, 0, 0.42);padding: 0;margin: 0;'> <br><span class='ratting' style='font-weight:bold; background: url(//codehost.me/api/stars.png) no-repeat;padding: 16px;width: 60px;float: left;'>9.5</span><b>Rating : </b><?php echo @$data->imdbRating; ?> /10 from <?php echo @$data->imdbVotes; ?> users<br><b>Metascore : </b> <?php echo @$data->Metascore; ?><br><br><span class='ratting2' style='clear:both;'><?php echo @$data->Plot; ?></span><br><hr style='color:rgba(0, 0, 0, 0.42);padding: 0;margin: 0;'> <br> <b>Director :</b> <?php echo @$data->Director; ?> <br><b>Stars :</b> <?php echo @$data->Actors; ?> <br> </span></div></textarea>
						</div>
						<?php
					}
				?>
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
<!-- AdsBlocker Start -->
<style>#h237{position:fixed !important;position:absolute;top:0;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");left:0;width:102%;height:102%;background-color:#f9f9f9;opacity:.97;display:block;padding:10% 0}#h237 *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 14px Verdana,Arial,sans-serif;text-decoration:none}#h237 ~ *{display:none}</style><div style='display: none;'><a href='http://sekolahblogger.net'> Blogger</a></div><div id="h237">
<span>Please Enable JavaScript!<br />Mohon Aktifkan Javascript!<a href="http://www.enable-javascript.com/">[ Enable JavaScript ]</a></span></div>
<script>window.document.getElementById("h237").parentNode.removeChild(window.document.getElementById("h237"));(function(l,m){function n(a){a&&h237.nextFunction()}var h=l.document,p=["i","s","u"];n.prototype={rand:function(a){return Math.floor(Math.random()*a)},getElementBy:function(a,b){return a?h.getElementById(a):h.getElementsByTagName(b)},getStyle:function(a){var b=h.defaultView;return b&&b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},deferExecution:function(a){setTimeout(a,250)},insert:function(a,b){var e=h.createElement("span"),d=h.body,c=d.childNodes.length,g=d.style,f=0,k=0;if("h237"==b){e.setAttribute("id",b);g.margin=g.padding=0;g.height="100%";for(c=this.rand(c);f<c;f++)1==d.childNodes[f].nodeType&&(k=Math.max(k,parseFloat(this.getStyle(d.childNodes[f]).zIndex)||0));k&&(e.style.zIndex=k+1);c++}e.innerHTML=a;d.insertBefore(e,d.childNodes[c-1])},displayMessage:function(a){var b=this;a="abisuq".charAt(b.rand(5));b.insert("<"+a+'><img src="https://lh3.googleusercontent.com/-1zyvBGHoXLg/Vugs3KGfrKI/AAAAAAAAAD0/IN60lPxm4aQY5Z_sTPmKvzx5vLq5jv62ACCo/s699-Ic42/cara%2Bmembuat%2Bscript%2Bmemasang%2Bscript%2Banti%2Badblock%2Bdi%2Bblog%2Bagar%2Bmenjadi%2Blebih%2Bkeren%2B10.png" height="350" width="699" alt="Disable-AdBlock" /> <a href="JavaScript:window.location.reload()">[ Reload ]</a>'+("</"+a+">"),"h237");h.addEventListener&&b.deferExecution(function(){b.getElementBy("h237").addEventListener("DOMNodeRemoved",function(){b.displayMessage()},!1)})},i:function(){for(var a="DivTopAd,ad-zone-1,ad_190x90,ads-sticky,iqadtile5,leftframeAD,tobsideAd,ad,ads,adsense".split(","),b=a.length,e="",d=this,c=0,g="abisuq".charAt(d.rand(5));c<b;c++)d.getElementBy(a[c])||(e+="<"+g+' id="'+a[c]+'"></'+g+">");d.insert(e);d.deferExecution(function(){for(c=0;c<b;c++)if(null==d.getElementBy(a[c]).offsetParent||"none"==d.getStyle(d.getElementBy(a[c])).display)return d.displayMessage("#"+a[c]+"("+c+")");d.nextFunction()})},s:function(){var a={'pagead2.googlesyndic':'google_ad_client','js.adscale.de/getads':'adscale_slot_id','get.mirando.de/miran':'adPlaceId'},b=this,e=b.getElementBy(0,"script"),d=e.length-1,c,g,f,k;h.write=null;for(h.writeln=null;0<=d;--d)if(c=e[d].src.substr(7,20),a[c]!==m){f=h.createElement("script");f.type="text/javascript";f.src=e[d].src;g=a[c];l[g]=m;f.onload=f.onreadystatechange=function(){k=this;l[g]!==m||k.readyState&&"loaded"!==k.readyState&&"complete"!==k.readyState||(l[g]=f.onload=f.onreadystatechange=null,e[0].parentNode.removeChild(f))};e[0].parentNode.insertBefore(f,e[0]);b.deferExecution(function(){if(l[g]===m)return b.displayMessage(f.src);b.nextFunction()});return}b.nextFunction()},u:function(){var a="ad&adv_keywords=,-page-peel/,/adchain.,/adfootright.,/adsxml/ad,/adyard300.,/impopup/ad,/loadadsparam.,/meme_ad.,_adshare.".split(","),b=this,e=b.getElementBy(0,"img"),d,c;e[0]!==m&&e[0].src!==m&&(d=new Image,d.onload=function(){c=this;c.onload=null;c.onerror=function(){p=null;b.displayMessage(c.src)};c.src=e[0].src+"#"+a.join("")},d.src=e[0].src);b.deferExecution(function(){b.nextFunction()})},nextFunction:function(){var a=p[0];a!==m&&(p.shift(),this[a]())}};l.h237=h237=new n;h.addEventListener?l.addEventListener("load",n,!1):l.attachEvent("onload",n)})(window);</script>
<!-- AdsBlocker End -->
</body>
</html>
