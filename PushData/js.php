<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	let socket = new WebSocket("ws://realtime-socket.soserba.com/push/SocketIdentityAnda");

	var obj = [
		{ name: "Contoh 1", age: 30, city: "Bandung" },
		{ name: "Contoh 2", age: 30, city: "Jawa Barat" }
	];

	socket.onopen = function(e) {
		alert("[open] Connection established");
	  	alert("Sending to server");
	  	socket.send(JSON.stringify(obj));
	};

	socket.onmessage = function(e) {
	  alert(e.data);
	};
});
</script>