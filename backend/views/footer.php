
<!--script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script-->
<script src="raw/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
     <script>              
	$(document).ready(function() {
		$.simpleWeather({
			location:'Guwahati',
			woeid: '',
			unit: 'C',
			success: function(weather) {
			html = weather.temp+'&deg;'+weather.units.temp;
			$("#weather").html(html);
			},
			error: function(error) {
			$("#weather").html('<p>'+error+'</p>');
			}
		});
	});

	$(document).ready(function(){
		$("#target").click( function(){
			$("#menu").toggleClass('active');
			$(".div").toggleClass('off');
			$("#target").toggleClass('on');
		});	
		$("#block").click( function(){
					$("#menu").toggleClass('active');
					$(".div").toggleClass('off');
					$("#target").toggleClass('on');
		});
	});
	
</script>
</body>
</html>