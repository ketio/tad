<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
	$("#activities").mouseover(function(){
		$("#active_list").css("visibility","visible");
	});
	
	$("#activities").mouseleave(function(){
		$("#active_list").css("visibility","hidden");
	});
});
</script>

<link type="text/css" rel="stylesheet" href="css/header_style.css"/>
<div id="header">
	<div id="logo">
		<a href="index.php"><img src="img/Web_logo.png" height="100"></a>
	</div>
	<div class="top_category">
		<a href="abouts.php">
			<div class="top_category_item">
				關於
				<br>
				ABOUTS
			</div>
			<div class="category_bar"></div>
		</a>
	</div>
	<div class="top_category">
		<a href="map.php">
			<div class="top_category_item">
				TAD 地圖
				<br>
				TAD MAP
			</div>
			<div class="category_bar"></div>
		</a>
	</div>
	<div id="activities" class="top_category">
		<div class="top_category_item">
			活動
			<br>
			ACTIVITIES
		</div>
		<div class="category_bar"></div>
		<!--活動下拉式選單-->
		<div id="active_list" class="active_list" >
			<div class="active_list_item">
				<a href="theme_exhibit.php">
					年度主題展
				</a>
			</div>			
			<div class="active_list_item">
			導覽
			</div>
			<div class="active_list_item">
			講座
			</div>
		</div>
	</div>
	<div class="top_category">
		<div class="top_category_item">
			媒體報導
			<br>
			ARTICLES
		</div>
		<div class="category_bar"></div>
	</div>
</div>



