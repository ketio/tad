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

<link type="text/css" rel="stylesheet" href="header_style.css"/>
<link type="text/css" rel="stylesheet" href="common.css"/>
<div id="header">
	<div id="logo">
		<a href="index.php"><img src="img/Web_logo.png" height="100"></a>
	</div>
	<div class="top_category">
		<a href="abouts.php">
			<div class="chinese_category">
			關於
			</div>
			<div class="english_category">
			ABOUTS
			</div>
		</a>
	</div>
	<div class="top_category">
		<div class="chinese_category">
		TAD 地圖
		</div>
		<div class="english_category">
		TAD MAP
		</div>
	</div>
	<div id="activities" class="top_category">
		<div class="chinese_category">
		活動
		</div>
		<div class="english_category">
		ACTIVITIES
		</div>
		<!--活動下拉式選單-->
		<div id="active_list" class="active_list" >
			<div class="active_list_item">
			年度主題展
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
		<div class="chinese_category">
		近期文章
		</div>
		<div class="english_category">
		ARTICLES
		</div>
	</div>
	

	
</div>



