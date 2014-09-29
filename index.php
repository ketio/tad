	<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="common.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jssor.core.js"></script>
	<script type="text/javascript" src="js/jssor.utils.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script>
		jQuery(document).ready(function ($) {

			var _SlideshowTransitions = [
			//Fade
			{ $Duration: 1200, $Opacity: 2 }
			];

			var options = {
				$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
				$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
				$AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
				$PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

				$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
				$SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
				$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
				//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
				//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
				$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
				$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
				$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
				$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
				$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
				$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

				$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
					$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
					$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
					$TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
					$ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
				},

				$BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
					$Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
					$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
					$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
					$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
					$SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
					$SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
					$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
				},

				$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
					$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
				}
			};
			var jssor_slider1 = new $JssorSlider$("slider1_container", options);

			//responsive code begin
			//you can remove responsive code if you don't want the slider scales while window resizes
			function ScaleSlider() {
				var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
				if (parentWidth)
					jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 1140));
				else
					window.setTimeout(ScaleSlider, 30);
			}

			ScaleSlider();

			if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
				$(window).bind('resize', ScaleSlider);
			}


			//if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
			//    $(window).bind("orientationchange", ScaleSlider);
			//}
			//responsive code end
		});
	</script>	
	</head>

	<body>
		<div id="content_wrapper">

			<!-- header -->
			<?php 
				include_once "header.php"; 
			?>	
			<div id="index_slideshow">
			
				<!-- Jssor Slider Begin -->
				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1140px; height: 494px; overflow: hidden; ">

					<!-- Loading Screen -->
					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div style="filter: alpha(opacity=70); opacity:1;background:#15191f; position: absolute; display: block;
							 top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
						<div style="position:absolute; display: block; top: 0px; left: 0px;width: 100%;height:100%; width:100%;text-align:center">
							<img src="img/slider/loading.gif"/>
						</div>
						
						<!--<div style="position: absolute; display: block; background: url(img/slider/loading.gif) no-repeat center center;
							top: 200px; left: 250px;width: 30%;height:30%;">
						</div>
						-->
					</div>
					<!-- Slides Container -->
					<div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 494px; overflow: hidden;">
						<div>
							<img u="image" src="img/slider/slider1.png" />
						</div>
						<div>
							<img u="image" src="img/slider/slider2.png" />
						</div>
						<div>
							<img u="image" src="img/slider/_0006397.png" />
						</div>
					</div>
					<!-- bullet navigator container -->
					<div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">
						<!-- bullet navigator item prototype -->
						<div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>
					</div>
					<!-- Arrow Navigator Skin Begin -->
					<!-- Arrow Left -->
					<span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 230px; left: 0px;">
					</span>
					<!-- Arrow Right -->
					<span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 230px; right: 0px">
					</span>
					<!-- Arrow Navigator Skin End -->
					<a style="display: none" href="http://www.jssor.com">javascript</a>
				</div>
				<!-- Jssor Slider End -->
			</div>

			<!-- facebook & news linl function -->

			<div>
				<div id="news_title">
					NEWS
				</div>
				<div id="facebook_title">
					FACEBOOK
				</div>
			</div>
			<div>
				<div id="news_content">

				</div>
				<div id="facebook_content">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftadfestival&amp;width&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px;height:400px;background:white" allowTransparency="true"></iframe>
				</div>
			</div>

			<!-- subscribe function -->

			<div class="subscription">
				<div id="subscription_text">
					SUBSCRIBE
				</div>
				<div id="subscription_function">
					
				</div>
			</div>
			
			<!-- header -->
			<?php 
				include_once "footer.php"; 
			?>	
		</div>
	</body>