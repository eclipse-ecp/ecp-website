function getCookie(name, expected) {
  var cookieValues = getCookies(name);
  if (cookieValues.length === 0) {
    return false;
  }
  return cookieValues.reduce(function (acc, val) { return acc && val === expected }, true);
}

var getCookies = function(name){
  var pairs = document.cookie.split(";");
  var cookies = [];
  for (var i = 0; i < pairs.length; i++){
    var pair = pairs[i].split("=");
    if (pair[0].trim() === name) {
      cookies.push(decodeURI(pair[1]))
    }
  }
  return cookies;
}

function createTimeline() {
  var twitterContainer = document.getElementById("twitter-container");
  twttr.widgets.createTimeline(
    '344734102089510912',
    twitterContainer,
    {
      height: 400
    }
  );
  twitterContainer.innerText = '';
}

function createTwitterWidget() {
  if (getCookie("eclipse_cookieconsent_status", "allow")) {
    $.getScript(
      "https://platform.twitter.com/widgets.js",
      function () {
        createTimeline()
      }
    );
  }
}
