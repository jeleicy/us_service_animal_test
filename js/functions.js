function showSsn() {
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("ssn_number").innerHTML = this.responseText;
		}
	  }
	  xmlhttp.open("GET", "get_ssn.php");
	  xmlhttp.send();
}