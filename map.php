<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="css/map.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script>
		var now_gallery="0";
		$(document).ready(function(){
		
			$(".marker").click(function(){			
				choose_gallery($(this).attr("id"));
			});
			$(".info_item").click(function(){			
				choose_gallery($(this).attr("id"));
			});
		});
		function choose_gallery(id){
			$("#gallery_marker_"+now_gallery).removeClass("marker_chosen");
			$("#gallery_info_"+now_gallery).removeClass("info_item_chosen");
			$("#gallery_detail_info_"+now_gallery).css("visibility","hidden");
			
			now_gallery=$("#"+id).attr("data");
			$("#gallery_marker_"+now_gallery).addClass("marker_chosen");
			$("#gallery_info_"+now_gallery).addClass("info_item_chosen");
			$("#gallery_detail_info_"+now_gallery).css("visibility","visible");
		}
	</script>
	</head>	
	<body>
		<div id="content_wrapper">

		<!-- header -->
		<?php 
			include_once "header.php"; 		
		?>
			<div id="content">
				<div id="map">
					<div id="gallery_marker_1" data="1" class="marker">1</div>
					<div id="gallery_marker_2" data="2" class="marker">2</div>
					<div id="gallery_marker_3" data="3" class="marker">3</div>
					<div id="gallery_marker_4" data="4" class="marker">4</div>
					<div id="gallery_marker_5" data="5" class="marker">5</div>
					<div id="gallery_marker_6" data="6" class="marker">6</div>
					<div id="gallery_marker_7" data="7" class="marker">7</div>
					<div id="gallery_marker_8" data="8" class="marker">8</div>
					<div id="gallery_marker_9" data="9" class="marker">9</div>
					<div id="gallery_marker_10" data="10" class="marker">10</div>
					<div id="gallery_marker_11" data="11" class="marker">11</div>
					<div id="gallery_marker_12" data="12" class="marker">12</div>
					<div id="gallery_marker_13" data="13" class="marker">13</div>
					<div id="gallery_marker_14" data="14" class="marker">14</div>
					<div id="gallery_marker_15" data="15" class="marker">15</div>
					<div id="gallery_marker_16" data="16" class="marker">16</div>
					<div id="gallery_marker_17" data="17" class="marker">17</div>
					<div id="gallery_marker_18" data="18" class="marker">18</div>
					<div id="gallery_marker_19" data="19" class="marker">19</div>
					<div id="gallery_marker_20" data="20" class="marker">20</div>
					<div id="gallery_marker_21" data="21" class="marker">21</div>
				</div>
				<div id="info_interface">
					<div id="detail_info">
						<div id="gallery_detail_info_1" data="1" class="gallery_detail_info">
							<div class="detail_info_name">采泥藝術 Chini Gallery</div>
							<div class="detail_info_address">台北市中山區敬業一路128巷46、48號1樓</div>
							<div class="detail_info_website"></div>
						</div>
						<div id="gallery_detail_info_2" data="2" class="gallery_detail_info">
							<div class="detail_info_name">餘白 Yohaku Gallery</div>
							<div class="detail_info_address">台北市中山區敬業二路69巷28號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_3" data="3" class="gallery_detail_info">
							<div class="detail_info_name">菲利浦畫廊 Philippe Staib Gallery</div>
							<div class="detail_info_address">台北市中山區敬業一路128巷38號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_4" data="4" class="gallery_detail_info">
							<div class="detail_info_name">青雲畫廊 Cloud Gallery</div>
							<div class="detail_info_address">台北市中山區明水路469、471號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_5" data="5" class="gallery_detail_info">
							<div class="detail_info_name">亞洲藝術中心 Asia Art Center</div>
							<div class="detail_info_address">台北市中山區樂群二路93號</div>
							<div class="detail_info_website"></div>
						</div>
						<div id="gallery_detail_info_6" data="6" class="gallery_detail_info">
							<div class="detail_info_name">藝術計畫 Art Issue Projects</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段407巷32號1樓</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_7" data="7" class="gallery_detail_info">
							<div class="detail_info_name">秋刀魚藝術中心 Fish Art Center</div>
							<div class="detail_info_address">台北市中山區基湖路137號1樓</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_8" data="8" class="gallery_detail_info">
							<div class="detail_info_name">耿畫廊 Tina Keng Gallery</div>
							<div class="detail_info_address">台北市內湖區瑞光路548巷15號1樓</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_9" data="9" class="gallery_detail_info">
							<div class="detail_info_name">TKG+</div>
							<div class="detail_info_address">台北市內湖區瑞光路548巷15號B1</div>
							<div class="detail_info_website"></div>
						</div>
						<div id="gallery_detail_info_10" data="10" class="gallery_detail_info">
							<div class="detail_info_name">TKG+ Projects</div>
							<div class="detail_info_address">台北市內湖區瑞光路548巷15號4樓</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_11" data="11" class="gallery_detail_info">
							<div class="detail_info_name">曼谷藝術 Ming Art Gallery</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段295號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_12" data="12" class="gallery_detail_info">
							<div class="detail_info_name">威廉藝術沙龍 William Art Salon</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段356號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_13" data="13" class="gallery_detail_info">
							<div class="detail_info_name">學學白色空間 XUE XUE WHITE</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段207號7樓</div>
							<div class="detail_info_website"></div>
						</div>
						<div id="gallery_detail_info_14" data="14" class="gallery_detail_info">
							<div class="detail_info_name">學學原色空間 XUE XUE GREEN</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段207號5樓</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_15" data="15" class="gallery_detail_info">
							<div class="detail_info_name">愛力根畫廊 Galerie Elegance Taipei</div>
							<div class="detail_info_address">台北市內湖區瑞光路408號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_16" data="16" class="gallery_detail_info">
							<div class="detail_info_name">尊彩藝術中心 Liang Gallery</div>
							<div class="detail_info_address">台北市內湖區瑞光路366號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_17" data="17" class="gallery_detail_info">
							<div class="detail_info_name">藝星藝術中心 Star Gallery</div>
							<div class="detail_info_address">台北市內湖區新湖一路128巷15號1樓</div>
							<div class="detail_info_website"></div>
						</div>
						<div id="gallery_detail_info_18" data="18" class="gallery_detail_info">
							<div class="detail_info_name">台灣工銀藝文空間 Industrial Bank of Taiwan Art and Cultural Galleria</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段99號1樓</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_19" data="19" class="gallery_detail_info">
							<div class="detail_info_name">沁德居藝廊 Chin Der Jyu Gallery</div>
							<div class="detail_info_address">台北市中山區堤頂大道2段352號</div>
							<div class="detail_info_website"></div>
						</div>		
						<div id="gallery_detail_info_20" data="20" class="gallery_detail_info">
							<div class="detail_info_name">哥德藝術中心 Goethe Art Center</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段293號</div>
							<div class="detail_info_website"></div>
						</div>	
						<div id="gallery_detail_info_21" data="21" class="gallery_detail_info">
							<div class="detail_info_name">名典畫廊 Ming Dian Gallery</div>
							<div class="detail_info_address">台北市內湖區新湖一路128巷15號2樓B005</div>
							<div class="detail_info_website"></div>
						</div>							
					</div>
					<div id="gallery">
						<div id="gallery_info_1" data="1" class="info_item">采泥藝術</div>
						<div id="gallery_info_2" data="2" class="info_item">餘白</div>
						<div id="gallery_info_3" data="3" class="info_item">菲利浦畫廊</div>
						<div id="gallery_info_4" data="4" class="info_item">青雲畫廊</div>
						<div id="gallery_info_5" data="5" class="info_item">亞洲藝術中心</div>
						<div id="gallery_info_6" data="6" class="info_item">藝術計畫</div>
						<div id="gallery_info_7" data="7" class="info_item">秋刀魚藝術中心</div>
						<div id="gallery_info_8" data="8" class="info_item">耿畫廊</div>
						<div id="gallery_info_9" data="9" class="info_item">TKG+</div>
						<div id="gallery_info_10" data="10" class="info_item">TKG+ Projects</div>
						<div id="gallery_info_11" data="11" class="info_item">曼谷藝術</div>
						<div id="gallery_info_12" data="12" class="info_item">威廉藝術沙龍</div>
						<div id="gallery_info_13" data="13" class="info_item">學學白色空間</div>
						<div id="gallery_info_14" data="14" class="info_item">學學原色空間</div>
						<div id="gallery_info_15" data="15" class="info_item">愛力根畫廊</div>
						<div id="gallery_info_16" data="16" class="info_item">尊彩藝術中心</div>
						<div id="gallery_info_17" data="17" class="info_item">藝星藝術中心</div>
						<div id="gallery_info_18" data="18" class="info_item">台灣工銀藝文空間</div>
						<div id="gallery_info_19" data="19" class="info_item">沁德居藝廊</div>
						<div id="gallery_info_20" data="20" class="info_item">哥德藝術中心</div>
						<div id="gallery_info_21" data="21" class="info_item">名典畫廊</div>
					</div>
					<div id="restaurant">
					
					</div>
				</div>
			</div>
		</div>		
	</body>
</html>