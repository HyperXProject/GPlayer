jwplayer().registerPlugin('BSnewsticker', '6.0', function(player, config, BSnewsticker){
	//setup
	function setup(evt) {	
		if (player.getRenderingMode() == "html5"){
		var theBody = document.getElementById(player.id);
		var playerWidthPX2 = player.getHeight();
		var playerWidthPX = parseFloat(playerWidthPX2);
		var playerHeightPX2 = player.getWidth();
		var playerHeightPX = parseFloat(playerHeightPX2);
		var bg = document.createElement("div");
		bg.setAttribute('id', 'bg');
		bg.style.height = 20 + "px";
		bg.style.width = player.getWidth() + "px";
		if (config.backgroundcolor == null){
		bg.style.background = "#666666";
		} else {
		bg.style.background = config.backgroundcolor;
		}
		bg.style.opacity = "0.55";
		bg.style.position = "absolute";
		bg.style.zIndex = "999";
		bg.width = player.getWidth();
		bg.height = 24;
		var BSnewsticker1 = document.createElement("marquee");
		BSnewsticker1.setAttribute('id', 'BSnewsticker1');
		if (config.textcolor == null){
		BSnewsticker1.style.color = "#FFFF00";
		} else {
		BSnewsticker1.style.color = config.textcolor;
		}
		if (config.text == null){
		BSnewsticker1.innerHTML = "";
		} else {
		BSnewsticker1.innerHTML = config.text;
		}
		if (config.scrollspeed == null){
		BSnewsticker1.setAttribute('scrollamount', '6');
		} else {
		BSnewsticker1.setAttribute('scrollamount',config.scrollspeed);
		}
		if (config.scrolldirection == null){
		BSnewsticker1.setAttribute('direction', 'left');
		}
		if (config.scrolldirection == "right"){
		BSnewsticker1.setAttribute('direction','right');
		}
		if (config.scrolldirection == "up"){
		BSnewsticker1.setAttribute('direction', 'left');
		}
		if (config.scrolldirection == "down"){
		BSnewsticker1.setAttribute('direction', 'left');
		}
		BSnewsticker1.style.fontSize = '14px';
		BSnewsticker1.style.fontWeight = 'bold';
		BSnewsticker1.style.cursor = "default";
		BSnewsticker1.style.fontFamily = 'arial,_sans';
		BSnewsticker1.style.position = "absolute";
		BSnewsticker1.style.zIndex = "1000";
		BSnewsticker1.style.width = player.getWidth()+"px";
		BSnewsticker1.style.top = player.getHeight()+"px";
		if (config.position == "top"){
		BSnewsticker1.style.top = playerHeightPX - playerHeightPX + 2 +"px";
		bg.style.top = playerHeightPX - playerHeightPX + "px";
		} else {
		BSnewsticker1.style.top = player.getHeight()-18+"px";
		bg.style.top = player.getHeight()-20+"px";
		}
		theBody.appendChild(bg);
		theBody.appendChild(BSnewsticker1);
		BSnewsticker1.onmouseup = function(){
		if (config.link != null){
		BSnewsticker1.style.cursor = "pointer";
		window.open(config.link,config.linktarget);
		}
		}
		BSnewsticker1.onmouseover = function(){
		BSnewsticker1.setAttribute('scrollamount', '0');
		}
		BSnewsticker1.onmouseout = function(){
		if (config.scrollspeed != null){
		BSnewsticker1.setAttribute('scrollamount',config.scrollspeed);
		} else {
		BSnewsticker1.setAttribute('scrollamount','6');
		}
		}
		}
	}
	player.onReady(setup);
	var txt = new String("is_on");
    this.resize = function(width, height) {
	if(player.getFullscreen() == true){
			player.removeButton("BSnewstickerdock");
		} else {
		player.addButton("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAdCAYAAADLnm6HAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABeUlEQVR42mL8//8/w0ACgABiYhhgABBAA+4AgABigdIOUFoAiPWh7IlA/AGLHgcsYg+g2ABqBoyPDShAMQh8AAggBlAa+I8d9EPl0DE2UI9HDh/YDxBA+KKgAIgDSAhNAXKiACCACKWB+SQY7ECOAwACiIUIX60HYkciQ+AAWrpIwKJuAjStgMAFgACCxet5AnFVgJQGsKlNwJJWHHCYhaIOIICY4KkRP6hHcvUHHLmALAAQQEwkJLD5tCgHAAKIlIIIFAL91HYAQADhc8AGHFnTgJoOAAggfA6YiJaqKcrvuABAABGKgkAiEihFACCACDkAZHkimWYLECMOEEBMRJRiG6CFB6lAH09ihgOAACI2FxSCSy0aAIAAIiUbJtIiPQAEECkOAIVAI7UdABBAsMqogcjiFZYW+IlQe5AYcwECiHGgG6UAATTgbUKAABpwBwAEECgNnBlIBwAEEOP/AU4EAAE04FEAEECgKGAcSAcABNCAhwBAgAEAT8sXNkFY65kAAAAASUVORK5CYII%3D", 
            "BSnewsticker", 
            function() { BSnewstickerToggle(); }, 
            "BSnewstickerdock");
		}
	if (config.nobutton == "true" || config.nobutton == true){
		player.removeButton("BSnewstickerdock");
	}
	var theBg = document.getElementById('bg');
	var theNt = document.getElementById('BSnewsticker1');
	theNt.style.visibility = "visible";
	theBg.style.visibility = "visible"
	BSnewstickerToggle = function(){
	if(theNt.style.visibility == "visible" && theBg.style.visibility == "visible"){
		theNt.style.visibility = "hidden";
		theBg.style.visibility = "hidden";
		txt = "is_off";
		} else {
		theNt.style.visibility = "visible";
		theBg.style.visibility = "visible";
		txt = "is_on";
		}
	}
	if(player.getFullscreen() == true && txt == "is_off") {
	theNt.style.visibility = "hidden";
	theBg.style.visibility = "hidden";
	} 
	if(player.getFullscreen() == false && txt == "is_off"){
	theNt.style.visibility = "hidden";
	theBg.style.visibility = "hidden";
	}
	if(player.getFullscreen() == true && txt == "is_on") {
	theNt.style.visibility = "hidden";
	theBg.style.visibility = "hidden";
	} 
	if(player.getFullscreen() == false && txt == "is_on"){
	theNt.style.visibility = "visible";
	theBg.style.visibility = "visible";
	}
	};
	//fall back to flash
}, './BSnewsticker.swf');
