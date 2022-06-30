<footer style="width:100%;height:48px;background-color:rgb(15,15,15);position:fixed;bottom:0">
	<div class="w3-section">
		<label style="margin-left:16px">Language</label>
		
		<!-- on load page this select element has a style attr 'display' with value of 'none' -->
		<!-- if js is enabled the value of display changes to 'inline' -->
		<select id="lang_sect" style="margin-left:8px;display:none" onchange="d()">
			<option>Farsi</option>
			<option selected>English</option>
		</select>
		
		<!-- if js is disabled below anchor is going to be shown up -->
		<noscript>
			<a href="">Farsi</a>
		</noscript>
		
		<div style="float:right"><a href=""><i class="fa fa-github-square"></i></a></div>
	</div>
</footer>
	
	<script>
	
		function d()
		{
			// redirect to farsi version
			window.location.href = "/";
		}
	
		document.getElementById("lang_sect").style.display = "inline";
	
	</script>