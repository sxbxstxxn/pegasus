<html>
	<head>
		<!-- JQUERY -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- SC CLOCK -->
		<script src="/scripts/clock.js"></script>
		<!-- GOOGLE FONT -->
		<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
		<!-- PEGASUS -->
		<link href="http://pegasus.sebastian-christoph.de/styles/style.css" type="text/css" rel="stylesheet"/>
		<title>{#pageTitle#}{if isset($title) } - {$title}{/if}</title>
		
		<script>
		
		$( function() {
			//$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker({
			  dateFormat: "yy-mm-dd",
			  firstDay: 1,
			  changeMonth: true,
			  changeYear: true,
			  minDate: "-100Y",
			  maxDate: 0,
			  defaultDate: "-30Y"
			  //showAnim: none
			});		
		});
		
		
		
  
    
		</script>
		<script>
		(function(e,t,n){
			var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")}
		)
		(document,window,0);
		</script>
	</head>
<body>