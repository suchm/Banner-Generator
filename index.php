<!DOCTYPE html>
<html>
	<head>
		<title>Banner Generatior</title>
		<meta name="keywords" content="Banner Generator">
	    <meta name="description" content="Adds text to banners which you can then add to your website">
	    <link media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C400%2C300%2C600&amp;ver=1.0" id="google_fonts-css" rel="stylesheet">
	    <link rel="stylesheet" href="./css/custom.css" type="text/css" />
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	    <script src="./js/script.js"></script>
	</head>
	<body>
		<header>
			<div id="header">
				<div class="container">
					<h1 title="visit michaelsuch.co.uk"></h1>
					<img src="./images/logo.png">
				</div>
			</div>
		</header>

		<section>
			<div class="container">

				<h2>Web Banners</h2>

				<h3>Create your own Web Banners</h3>

				<p><strong>Add these banners to your site:</strong></p>

				<p>There are 5 banners below you can choose from but more could be added</p>

				<div id="form">
					<form method="post" id="customBanner">
						<div class="row">
							<div class="col-sm-12">
							
								<div class="hightlight-box select-banner">
									<h4>1. Select banner size</h4>
									<div class="highlight-box-content">
										<div class="form-left">
											<div class="form-inline">
												<div class="form-group">
													<label class="radio-inline"><input type="radio" checked="checked" value="image_120x600" data-char-limit="10" name="banner_size"> 120 x 600</label><br><img class="img-responsive" alt="Skyscraper Banner Image" src="./banners/banner_120x600.jpg">
												</div>	
											</div>
										</div>
										<div class="form-right">
											<div class="form-inline">
												<div class="form-group">
													<label class="radio-inline"><input type="radio" value="image_125x125" data-char-limit="10" name="banner_size"> 125 x 125</label><br><img class="img-responsive" alt="Small Banner Image" src="./banners/banner_125x125.jpg">
												</div>
												<div class="form-group">									
													<label class="radio-inline"><input type="radio" value="image_234x60" data-char-limit="10" name="banner_size"> 234 x 60</label><br><img class="img-responsive" alt="Medium Banner Image" src="./banners/banner_234x60.jpg">
												</div>		
												<div class="form-group">
													<label class="radio-inline"><input type="radio" value="image_468x60" data-char-limit="15" name="banner_size"> 485 x 60</label><br><img class="img-responsive" alt="Large Banner Image" src="./banners/banner_485x60.jpg">
												</div>	
												<div class="form-group">
													<label class="radio-inline"><input type="radio" value="image_728x90" data-char-limit="20" name="banner_size"> 728 x 90</label><br><img class="img-responsive" alt="Leaderboard Banner" src="./banners/banner_728x90.jpg">
												</div>							
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								
							</div>				
						</div>
						<div class="row">
							<div class="col-sm-12">
							
								<div class="hightlight-box">
									<h4>2. Enter your text</h4>
									<div class="highlight-box-content">
										
										<p>Character limit per line: <span class="char-limit-notice">22</span></p>
										
										<div class="form-inline">
											<div class="form-group">
												<label for="banner_line1" class="sr-only">Line 1</label>
												<input type="text" placeholder="Line 1 text here..." id="banner_line1" class="form-control" name="banner_line1"><br><div class="banner_line1_limit"></div>
												<label class="error" for="banner_line1" id="banner_line1_error">The number of characters exceeds 22</label>
											</div>
											<div class="form-group">
												<label for="banner_line2" class="sr-only">Line 2</label>
												<input type="text" placeholder="Line 2 text here..." id="banner_line2" class="form-control" name="banner_line2"><br><div class="banner_line2_limit"></div>
												<label class="error" for="banner_line2" id="banner_line2_error">The number of characters exceeds 22</label>
											</div>
											<button id="submitForm" class="btn btn-primary" type="submit">Generate banners <span class="icon-arrow-right"></span></button>
											
										</div>
										
									</div>
								</div>
								
							</div>				
						</div>
					</form>
				</div><!-- End of #Form-->
				<div id="row">
						
					<div class="hightlight-box">
						<h4>3. Your custom banner</h4>
						<div class="highlight-box-content">								

							<div id="response"><p>...will appear here once generated</p></div>
							
							<div id="html-embed"></div>

						</div>
					</div>
			
				</div>

			</div><!-- End of #Container-->

		</section>

		<footer>
			<div id="footer">
				<div class="container">
		            <div class="footer-copyright">
		              <div class="row">           
		                  <ul>
		                    <li>&copy; <a href="michaelsuch.co.uk" title="visit michaelsuch.co.uk">michaelsuch.co.uk</a> <?php echo date('Y'); ?> | All rights reserved</li>
		                  </ul> 
		              </div>
		            </div>
		            <div class="clear"></div>
		        </div>
			</div>
		</footer>

	</body>
</html>