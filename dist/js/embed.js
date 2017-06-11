$.fn.embedPlayer = function() {
	var urlDrive = this.attr("data-url");
	var subtitle = this.attr("data-subtitle");
	var thumbnail = this.attr("data-thumbnail");
	var urlIframe = this.attr("hostname") + "/embed/?type=jwplayer";
	urlIframe += urlDrive ? "&url=" + urlDrive : "&url=";
	urlIframe += subtitle ? "&sub=" + subtitle : "&sub=";
	urlIframe += thumbnail ? "&thumbnail=" + thumbnail : "&thumbnail=";

	this.html("<iframe src=" + urlIframe + " frameborder=\"0\" width=\"100%\" height=\"100%\" scrolling=\"no\" allowfullscreen></iframe>");
}