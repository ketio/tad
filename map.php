<!DOCTYPE html>
<html>
	<head>
	<link type="text/css" rel="stylesheet" href="css/common.css"/>
	<link rel="stylesheet" href="css/map.css">	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>大內藝術節｜TAD 地圖</title>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script>
		var now_gallery="0";
		$(document).ready(function(){
			$("#gallery_detail_info_0").css("visibility","visible");
		
			$(".marker").click(function(){			
				choose_gallery($(this).attr("id"));
			});
			$(".info_item").click(function(){			
				choose_gallery($(this).attr("id"));
			});
			$(".detail_info_address").each(function(){
				
				var address=$(this).html();
				var map_search_str="https://www.google.com.tw/maps/place/"+address;				
				map_search_str=encodeURI(map_search_str);				
				map_search_str="<a href='"+map_search_str+"' target='_blank'>"+address+"</a>";
				$(this).html(map_search_str);				
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
			<div id="map_content">
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
					<div id="gallery_marker_22" data="22" class="marker">22</div>
					<div id="gallery_marker_23" data="23" class="marker">23</div>
				</div>
				<div id="info_interface">
					<div id="detail_info">
						<div id="gallery_detail_info_0" data="0" class="gallery_detail_info">
							<div>請點選左方圖示或下方藝廊列表</div>
						</div>
						<div id="gallery_detail_info_1" data="1" class="gallery_detail_info">
							<div class="detail_info_name">采泥藝術 Chini Gallery</div>
							<div class="detail_info_address">台北市中山區敬業一路 128 巷 46、48 號 1 樓</div>
							<div class="detail_info_website"><a href="http://www.chinigallery.com" target="_blank">前往官方網站 〉</a></div>
						</div>
						<div id="gallery_detail_info_2" data="2" class="gallery_detail_info">
							<div class="detail_info_name">餘白藝廊 Yohaku Gallery</div>
							<div class="detail_info_address">台北市中山區敬業二路 69 巷 28 號</div>
							<div class="detail_info_website"><a href="http://www.yohakugallery.com" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_3" data="3" class="gallery_detail_info">
							<div class="detail_info_name">菲利浦畫廊 Philippe Staib Gallery</div>
							<div class="detail_info_address">台北市中山區敬業一路 128 巷 38 號</div>
							<div class="detail_info_website"><a href="http://www.philippestaibgallery.com" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_4" data="4" class="gallery_detail_info">
							<div class="detail_info_name">青雲畫廊 Cloud Gallery</div>
							<div class="detail_info_address">台北市中山區明水路 469、471 號</div>
							<div class="detail_info_website"><a href="http://www.cloud-gallery.org/" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_5" data="5" class="gallery_detail_info">
							<div class="detail_info_name">亞洲藝術中心 Asia Art Center</div>
							<div class="detail_info_address">台北市中山區樂群二路 93 號</div>
							<div class="detail_info_website"><a href="http://www.asiaartcenter.org" target="_blank">前往官方網站 〉</a></div>
						</div>
						<div id="gallery_detail_info_6" data="6" class="gallery_detail_info">
							<div class="detail_info_name">藝術計畫 Art Issue Projects</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 407 巷 32 號 1 樓</div>
							<div class="detail_info_website"><a href="http://www.art-issue.com/" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_7" data="7" class="gallery_detail_info">
							<div class="detail_info_name">秋刀魚藝術中心 Fish Art Center</div>
							<div class="detail_info_address">台北市中山區基湖路 137 號 1 樓</div>
							<div class="detail_info_website"><a href="http://www.fishart.com.tw" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_8" data="8" class="gallery_detail_info">
							<div class="detail_info_name">耿畫廊 Tina Keng Gallery</div>
							<div class="detail_info_address">台北市內湖區瑞光路 548 巷 15 號 1 樓</div>
							<div class="detail_info_website"><a href="http://www.tinakenggallery.com" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_9" data="9" class="gallery_detail_info">
							<div class="detail_info_name">TKG+</div>
							<div class="detail_info_address">台北市內湖區瑞光路 548 巷 15 號 B1</div>
							<div class="detail_info_website"><a href="http://www.tinakenggallery/plus" target="_blank">前往官方網站 〉</a></div>
						</div>
						<div id="gallery_detail_info_10" data="10" class="gallery_detail_info">
							<div class="detail_info_name">TKG+ Projects</div>
							<div class="detail_info_address">台北市內湖區瑞光路 548 巷 15 號 4 樓</div>
							<div class="detail_info_website"><a href="http://www.tinakenggallery/plus" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_11" data="11" class="gallery_detail_info">
							<div class="detail_info_name">旻谷藝術 Ming Art Gallery</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 295 號</div>
							<div class="detail_info_website"><a href="http://www.goethe-ming.com" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_12" data="12" class="gallery_detail_info">
							<div class="detail_info_name">威廉藝術沙龍 William Art Salon</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 356 號</div>
							<div class="detail_info_website"><a href="http://www.williamartsalon.com/" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_13" data="13" class="gallery_detail_info">
							<div class="detail_info_name">學學白色空間 XUE XUE WHITE</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 207 號 7 樓</div>
							<div class="detail_info_website"><a href="http://white.xuexue.tw" target="_blank">前往官方網站 〉</a></div>
						</div>
						<div id="gallery_detail_info_14" data="14" class="gallery_detail_info">
							<div class="detail_info_name">學學原色空間 XUE XUE GREEN</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 207 號 5 樓</div>
							<div class="detail_info_website"><a href="http://green.xuexue.tw" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_15" data="15" class="gallery_detail_info">
							<div class="detail_info_name">愛力根畫廊 Galerie Elegance Taipei</div>
							<div class="detail_info_address">台北市內湖區瑞光路 408 號</div>
							<div class="detail_info_website"><a href="https://www.facebook.com/galerie.elegance?fref=ts" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_16" data="16" class="gallery_detail_info">
							<div class="detail_info_name">尊彩藝術中心 Liang Gallery</div>
							<div class="detail_info_address">台北市內湖區瑞光路 366 號</div>
							<div class="detail_info_website"><a href="http://www.lianggallery.com/" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_17" data="17" class="gallery_detail_info">
							<div class="detail_info_name">藝星藝術中心 Star Gallery</div>
							<div class="detail_info_address">台北市內湖區新湖一路 128 巷 15 號 1 樓</div>
							<div class="detail_info_website"><a href="www.stargallery.tw" target="_blank">前往官方網站 〉</a></div>
						</div>
						<div id="gallery_detail_info_18" data="18" class="gallery_detail_info">
							<div class="detail_info_name">台灣工銀藝文空間 Industrial Bank of Taiwan Art and Cultural Galleria</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 99 號 1 樓</div>
							<div class="detail_info_website"><a href="http://www.ibtef.org.tw" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_19" data="19" class="gallery_detail_info">
							<div class="detail_info_name">沁德居藝廊 Chin Der Jyu Gallery</div>
							<div class="detail_info_address">台北市中山區堤頂大道二段 352 號</div>
							<div class="detail_info_website"><a href="http://tw.myblog.yahoo.com/chinderjyugallery" target="_blank">前往官方網站 〉</a></div>
						</div>		
						<div id="gallery_detail_info_20" data="20" class="gallery_detail_info">
							<div class="detail_info_name">哥德藝術中心 Goethe Art Center</div>
							<div class="detail_info_address">台北市內湖區堤頂大道二段 293 號</div>
							<div class="detail_info_website"><a href="http://www.goethe-ming.com" target="_blank">前往官方網站 〉</a></div>
						</div>	
						<div id="gallery_detail_info_21" data="21" class="gallery_detail_info">
							<div class="detail_info_name">名典畫廊 Ming Dian Gallery</div>
							<div class="detail_info_address">台北市內湖區新湖一路 128 巷 15 號 2 樓 B005</div>
							<div class="detail_info_website"><a href="www.mingdianart.com.tw" target="_blank">前往官方網站 〉</a></div>
						</div>			
						<div id="gallery_detail_info_22" data="22" class="gallery_detail_info">
							<div class="detail_info_name">大德畫廊 Da De Gallery</div>
							<div class="detail_info_address">台北市堤頂大道二段 297 號 5 樓	</div>
							<div class="detail_info_website"><a href="https://www.facebook.com/dadeartgallery" target="_blank">前往官方網站 〉</a></div>
						</div>	
						<div id="gallery_detail_info_23" data="23" class="gallery_detail_info">
							<div class="detail_info_name">藝境畫廊 ARTDOOR Gallery</div>
							<div class="detail_info_address">台北市內湖區瑞光路 639 號 1 樓</div>
							<div class="detail_info_website"><a href="http://www.artdoor.com.tw" target="_blank">前往官方網站 〉</a></div>
						</div>						
					</div>
					<div id="gallery">
						<div id="gallery_info_1" data="1" class="info_item"><div class="info_item_number">1</div>采泥藝術</div>
						<div id="gallery_info_2" data="2" class="info_item"><div class="info_item_number">2</div>餘白藝廊</div>
						<div id="gallery_info_3" data="3" class="info_item"><div class="info_item_number">3</div>菲利浦畫廊</div>
						<div id="gallery_info_4" data="4" class="info_item"><div class="info_item_number">4</div>青雲畫廊</div>
						<div id="gallery_info_5" data="5" class="info_item"><div class="info_item_number">5</div>亞洲藝術中心</div>
						<div id="gallery_info_6" data="6" class="info_item"><div class="info_item_number">6</div>藝術計畫</div>
						<div id="gallery_info_7" data="7" class="info_item"><div class="info_item_number">7</div>秋刀魚藝術中心</div>
						<div id="gallery_info_8" data="8" class="info_item"><div class="info_item_number">8</div>耿畫廊</div>
						<div id="gallery_info_9" data="9" class="info_item"><div class="info_item_number">9</div>TKG+</div>
						<div id="gallery_info_10" data="10" class="info_item"><div class="info_item_number">10</div>TKG+ Projects</div>
						<div id="gallery_info_11" data="11" class="info_item"><div class="info_item_number">11</div>旻谷藝術</div>
						<div id="gallery_info_12" data="12" class="info_item"><div class="info_item_number">12</div>威廉藝術沙龍</div>
						<div id="gallery_info_13" data="13" class="info_item"><div class="info_item_number">13</div>學學白色空間</div>
						<div id="gallery_info_14" data="14" class="info_item"><div class="info_item_number">14</div>學學原色空間</div>
						<div id="gallery_info_15" data="15" class="info_item"><div class="info_item_number">15</div>愛力根畫廊</div>
						<div id="gallery_info_16" data="16" class="info_item"><div class="info_item_number">16</div>尊彩藝術中心</div>
						<div id="gallery_info_17" data="17" class="info_item"><div class="info_item_number">17</div>藝星藝術中心</div>
						<div id="gallery_info_18" data="18" class="info_item"><div class="info_item_number">18</div>台灣工銀藝文空間</div>
						<div id="gallery_info_19" data="19" class="info_item"><div class="info_item_number">19</div>沁德居藝廊</div>
						<div id="gallery_info_20" data="20" class="info_item"><div class="info_item_number">20</div>哥德藝術中心</div>
						<div id="gallery_info_21" data="21" class="info_item"><div class="info_item_number">21</div>名典畫廊</div>
						<div id="gallery_info_22" data="22" class="info_item"><div class="info_item_number">22</div>大德畫廊</div>		
						<div id="gallery_info_23" data="23" class="info_item"><div class="info_item_number">23</div>藝境畫廊</div>							
					</div>
					<div id="restaurant">
					
					</div>
				</div>
			</div>
		</div>	
		<div id="footer">
		</div>
	</body>
</html>