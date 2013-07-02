function go(param, value, tripFile) {
	var stringObj = window.location.href;
	if (typeof tripFile == 'undefined'){
		tripFile = window.location.pathname;
	}
	var lstr = "&";

	if (stringObj.indexOf(tripFile+'?') == -1) {
		lstr = "?";
	}
	if (param != 'page')
		stringObj = stringObj.replace(/page=[0-9]*/, '');
    if (param == 'kw')
        stringObj = stringObj.replace(/kw=[^`]*/, 'kw=');
	var reg = new RegExp(param + "=[0-9a-zA-Z,-]*", "g"); //创建正则RegExp对象
	var urlGo = "";
	var ch = stringObj.indexOf(param+'=');
	if (ch == -1) {
		urlGo = urlGo + stringObj + lstr + param + "=" + value;
	}
	if (ch != -1) {
		urlGo = stringObj.replace(reg, param + "=" + value);
	}
	window.location = urlGo;
}