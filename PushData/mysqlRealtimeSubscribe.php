<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	let socket = new WebSocket("ws://realtime-socket.soserba.com/realtime-mysql/SocketIdentityAnda");

	var obj = 
	{
		type: "subscribe"
	}

	socket.onopen = function(e) {
		alert("[open] Connection established");
	};

	socket.onmessage = function(e) {
	  alert(e.data);
	};
});
</script>