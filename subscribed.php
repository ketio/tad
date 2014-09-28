<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit_b").click(function(){
		$.ajax({
			async:true,
			type:"GET",
			url:"subscribed/insert.php",
			data:{
				name:$( "input[name$='name']" ).val(),
				email:$( "input[name$='email']" ).val(),
			},
			cache:false,
			success:function(response){
			
				alert(response);
			}
		});
	
	});
});
</script>

<div>
	名字<input type="text" name="name">
	信箱<input type="text" name="email">
	<div id="submit_b" style="width:40px;height:20px;border:1px solid black;">送出</div>
</div>



