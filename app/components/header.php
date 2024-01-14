<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $site ?></title>
	<link rel="icon" href="./dist/assets/images/site-icon.png" type="image/x-icon">
	<link rel="stylesheet" href="./dist/styles/main.css">
	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>
	<!-- AOS Library -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- Google Tag Manager -->

	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start':

					new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],

				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =

				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);

		})(window, document, 'script', 'dataLayer', 'GTM-KFZM84C2');
	</script>

	<!-- End Google Tag Manager -->

	<!-- Google tag (gtag.js) -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-16REYXSWQ2"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'G-16REYXSWQ2');
	</script>

	<!-- Google tag (gtag.js) -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11393952097"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'AW-11393952097');
	</script>

	<script>
		(function(w, d, t, r, u) {
			var f, n, i;
			w[u] = w[u] || [], f = function() {
				var o = {
					ti: "97079886",
					enableAutoSpaTracking: true
				};
				o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
			}, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
				var s = this.readyState;
				s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
			}, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
		})(window, document, "script", "//bat.bing.com/bat.js", "uetq");
	</script>

	<script async src="https://trkcall.com/scripts/96673.js"></script>
</head>

<body class="bg-primary">
	<!-- Google Tag Manager (noscript) -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFZM84C2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->