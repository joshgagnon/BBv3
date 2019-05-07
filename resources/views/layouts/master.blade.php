<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <title>
		@section('title')
		Redvale Ridge B&B
		@show
		</title>
		<meta name="description" content="Join us at our beautiful contemporary country home, which incorporates many eco features, and enjoy the stunning views and myriad things to see and do.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keywords"  content="B&B, hosted accommodation, Nelson, Tasman, Mapua,  sea views, mountain views, art, hot tub, eco, environmentally friendly, green, quiet">


		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon"   type="image/png" href="/favicon.png" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

 <body>

  @yield('content')

  <section id="footer" class="footer">
<div class="container">
<div class="footer-links">
	<a href="#home-head" >The Home</a>
	<a href="#rooms-head" >Rooms</a>
	<a href="#todo-head" >Things to do</a>
	<a href="#todo-hosts" >About Us</a>
	<a href="#todo-head" >Things to do</a>
	<a href="#location-head" >Location &amp; Bookings</a>

</div>



<div class="contact-info">
	Telephone -
	<a href="tel:+64035446478">+64 224 566 478
	</a>
	Email -
	<a href="mailto:redvaleridge@gmail.com">
    	redvaleridge@gmail.com
	</a>
</div>
<div class="copyright-info">
		©Copyright 2019 Joshua Gagnon
</div>
</div>
</section>


<script src="{{ asset('js/app.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59847244-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>