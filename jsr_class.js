function JSONscriptRequest(fullUrl) {
     this.fullUrl = fullUrl;
     this.headLoc = document.getElementsByTagName("head").item(0);
 }

JSONscriptRequest.prototype.buildScriptTag = function () {

    this.scriptObj = document.createElement("script");
     this.scriptObj.setAttribute("type", "text/javascript");
     this.scriptObj.setAttribute("src", this.fullUrl);
}

 JSONscriptRequest.prototype.removeScriptTag = function () {
     this.headLoc.removeChild(this.scriptObj);
 }

JSONscriptRequest.prototype.addScriptTag = function () {
     this.headLoc.appendChild(this.scriptObj);
 }
