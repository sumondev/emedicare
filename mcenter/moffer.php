


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>Continuous News Scroller</title>

<style>
/*body, ul, h1 {
	margin: 0;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight: bold;
	background: #f4f4f4;
	padding:0;
}
h1 {
	padding: 30px 0 0;
	text-align: center;
	font-size: 44px;
	color: #333;
	margin-bottom: 20px;
	font-weight: normal

}*/





ul {
	list-style: none;
}
.newsTickerCon {
	background: #333;
	overflow: hidden
}
.newsTickerCon li {
	background: rgba(0, 0, 0, 0) url("tick_list_dot.png") no-repeat scroll left center;
	color: #fff;
	float: left;
	font-size: 12px;
	line-height: 18px;
	padding: 11px 15px;
	white-space: nowrap;
}
</style>
<script src="../js/jquery-1.8.2.min.js"></script>

<script>
$(document).ready(function(e) {
	var newsNum = $(".newsTicker li").length;
	
	var totalNews_W =0;	
	for(var i=0; i<newsNum; i++){
		var news_W = $(".newsTicker li").eq(i).outerWidth(true);
		totalNews_W = totalNews_W + news_W;
	}
	
	$(".newsTicker").css('width', totalNews_W+'px');	
	
	var speed =1, animAmount, animInterval;
	
	animateNews();

	function animateNews(){
		$(".newsTicker li").eq(0).animate({
			'marginLeft' : '-='+ speed + 'px'
		},1, function(){
			animAmount = speed;
			var animNews_W = $(".newsTicker li").eq(0).outerWidth(true);
			
			console.log($(this));
			
			if(animAmount >= animNews_W){
				$(this).parent().append($(this));
				$(this).removeAttr('style');	
			}
			
			animInterval = setTimeout(function(){
				animateNews();	
			});	
		});
	}
	
	$(".newsTicker").hover(function(){
		clearTimeout(animInterval);
		$(".newsTicker li").eq(0).stop();	
	}, function(){
		animateNews();	
	});
});
</script>
</head>

<body>


<div class='panel panel-default'>

        <div class='panel-heading text-center table-top'>
          <!--  -->
          <h1>Continuous News Scroller</h1>
<div class="newsTickerCon">
  <ul class="newsTicker">
    <li>Lorem Ipsum is simply dummy</li>
    <li>Lorem Ipsum is simply dummy text of the printing</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
  </ul>
</div>

                




                <!--  -->

        </div>
</div>        













<!-- 	
<h1>Continuous News Scroller</h1>
<div class="newsTickerCon">
  <ul class="newsTicker">
    <li>Lorem Ipsum is simply dummy</li>
    <li>Lorem Ipsum is simply dummy text of the printing</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
    <li>Lorem Ipsum is simply.</li>
    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
  </ul>
</div> -->

</body>
</html>
