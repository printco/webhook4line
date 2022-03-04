<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Birth Day</title>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.9.0/sdk.js"></script>
  <style>
img {
	width:500px;
	height:500px;
}
  </style>
</head>
<body>
  <script>
    function runApp() {
		liff.getProfile().then(profile => {
			var displayName = profile.displayName;
			var owner = "แล่ครับ";
			if( displayName === owner ){
				document.getElementById("msg").innerHTML = "<img src='gift-box-opening-animation.gif' />"
			} else {
				console.log("ok");
				document.getElementById("msg").textContent = ("ของขวัญเฉพาะ " + owner + " เท่านั่น");
			}
		}).catch(err => console.error(err));
    }
    liff.init({ liffId: "1656941126-zd37JkBL" }, () => {
      if (liff.isLoggedIn()) {
        runApp()
      } else {
        liff.login();
      }
    }, err => console.error(err.code, error.message));
  </script>
  <div id="msg"></div>
  <div id="animation"></div>
</body>
</html>