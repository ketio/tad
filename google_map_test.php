<!DOCTYPE html>
 
<html>
<head runat="server">
    <title>內嵌Google地圖</title>
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.js'></script>   
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style>
        body,input { font-size: 9pt; }
        html { height: 100% }  
        body { height: 100%; margin: 0px; padding: 0px }  
        #map_canvas { height: 100% }        
    </style>
    <script>
        $(function () {
            //定義經緯度位置: 以政大校園的八角亭為例
            var latlng = new google.maps.LatLng(24.985505, 121.57531);
            //設定地圖參數
            var mapOptions = {
                zoom: 16, //初始放大倍數
                center: latlng, //中心點所在位置
                mapTypeId: google.maps.MapTypeId.ROADMAP //正常2D道路模式
            };
            //在指定DOM元素中嵌入地圖
            var map = new google.maps.Map(
                document.getElementById("map_canvas"), mapOptions);
            //加入標示點(Marker)
            var marker = new google.maps.Marker({
                position: latlng, //經緯度
                title: "八角亭", //顯示文字
                map: map //指定要放置的地圖對象
            });
        });
    </script>
</head>
<body>
<div id="map_canvas" style="width:50%; height:50%"></div>
</body>