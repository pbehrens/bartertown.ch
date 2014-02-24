<html>
<head>
	<script src="headtrackr.js" type="text/javascript" charset="utf-8"></script>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="description" content="">
       <meta name="author" content="Pat Behrens">
	   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
	   <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	   <script>
	     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	     ga('create', 'UA-47839468-1', 'bartertown.ch');
	     ga('send', 'pageview');

	   </script>
</head>
<body>
<?php require('./functions.php'); ?> 
<header>
<div class="row">
	<div class="col-md-4">
		<h1>WELCOME TO BARTER TOWN</h1>
	</div>
	<div class="col-md-4">
		<h2>MEDIA BY PATRICK BEHRENS</h2>
	</div>
		<div class="col-md-4">
		<h3><a href="http://patrickbehrens.com">PATRICKBEHRENS.COM</a></h3>
	</div>
	</div>
</div>
</header>
<div class="row">
  <div class="col-md-6">
	<div id="main">

		<canvas id="compare" width="320" height="240" style="display:none"></canvas>
				<video id="vid" autoplay loop width="320" height="240"></video>
				<canvas id="overlay" width="320" height="240"></canvas>
				<canvas id="debug" width="320" height="240"></canvas>

				<p id='gUMMessage'></p>
				<p>Status : <span id='headtrackerMessage'></span></p>
				<p><input type="button" onclick="htracker.stop();htracker.start();" value="reinitiate facedetection"></input>
				<br/><br/>
				<input type="checkbox" onclick="showProbabilityCanvas()" value="asdfasd"></input>Show probability-map</p>


	</div>

	<script src="face.js" type="text/javascript" charset="utf-8"></script>
  </div>
  <div class="col-md-6">
   <iframe src="//player.vimeo.com/video/79086302" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/79086302">No Parking</a> from <a href="http://vimeo.com/jhowe78">Justin Howe</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
 </div>
 <div class="row">
  <div class="col-md-6 col-md-offset-3 ">
   <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/7844092&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
  </div>
</div>
</div>




<?php printPicRows(); ?> 
    <div class="container">
      <!-- Example row of columns -->
      

      <hr>
      <div class="row">
        <div class="col-md-4">
			<img src="4D7yt.gif"class="img-responsive" alt="4D7yt">

        </div>
        <div class="col-md-4">
			<img src="babababillmurray.jpg" class="img-responsive" alt="Babababillmurray">

       </div>
        <div class="col-md-4">
			<img src="Fame_by_the_beagle.jpeg" class="img-responsive" alt="Fame By The Beagle">

        </div>
      </div>
	  
      <div class="row">
        <div class="col-md-4">
			<img src="Hamburger_Dillusion_by_the_beagle.jpeg" class="img-responsive" alt="Hamburger Dillusion By The Beagle">

        </div>
        <div class="col-md-4">
			<img src="Hinkley_Danger_by_the_beagle.jpeg" class="img-responsive"  alt="Hinkley Danger By The Beagle">

       </div>
        <div class="col-md-4">
			<img src="landooooooyo.jpg" class="img-responsive" alt="Landooooooyo">

        </div>
      </div>
	  
      <div class="row">
        <div class="col-md-4">
			<img src="lazerrrrrr.jpg" class="img-responsive"  alt="Lazerrrrrr">

        </div>
        <div class="col-md-4">
			<img src="Mathematics_Under_Peter_by_the_beagle.jpeg" class="img-responsive" alt="Mathematics Under Peter By The Beagle">

       </div>
        <div class="col-md-4">
			<img src="Oscar_Odealy_by_the_beagle.jpeg" class="img-responsive" alt="Oscar Odealy By The Beagle">

        </div>
      </div>

	
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->
	
	
	

	
	
	
	





</body>

</html>