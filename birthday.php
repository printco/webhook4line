<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My LIFF v2</title>
  <style>
    #pictureUrl { display: block; margin: 0 auto }
  </style>
</head>
<body>
  <img id="pictureUrl" width="25%">
  <p id="userId"></p>
  <p id="displayName"></p>
  <p id="statusMessage"></p>
  <p id="getDecodedIDToken"></p>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.9.0/sdk.js"></script>
  <script>
    function runApp() {
		liff.getProfile().then(profile => {
			var displayName = profile.displayName;
			var owner = "แล่ครับ";
			if( displayName === owner ){
				window.location.href="https://lottiefiles.com/5188-gift-box-opening-animation";
			} else {
				$("#msg").text("ของขวัญเฉพาะ " + owner + "เท่านั่น");
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
</body>
</html>