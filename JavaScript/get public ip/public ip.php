<script type="text/javascript">
  function getIP(json) {
    //document.write("My public IP address is: ", json.ip);
    var ipadd = json.ip;
    ip = document.getElementById('ip').innerHTML = ipadd;
  }
</script>

<p id="ip"></p>

<script type="text/javascript">
	var getip = document.getElementsByTagName("p");
	var mainip = getip[0];
	var ip = getip

	console.log(mainip);
</script>




<script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
