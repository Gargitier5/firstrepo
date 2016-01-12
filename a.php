<html>
<head>
  <meta charset=utf-8>
  <title>jsTime</title>
</head>
<body>
<p>Time left: <span id="time">30</span> seconds.</p>
<p><a href="#" onclick="play()">Play</a> <a href="#" onclick="pause()">Pause</a></p>
<script>
var time = 30,
timeElement = document.getElementById('time'),
timer = null;
var updateTimer = function() {
  timeElement.innerHTML = time--;
  if (time == 0) {
  	clearInterval(timer);
  }
}
function play() {
	timer = setInterval(updateTimer, 1000);
	return false;
}
function pause() {
	clearInterval(timer);
	return false;
}
</script>
</body>
</html>
