<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

<link rel="stylesheet" href="http://www.favcy.com/wconf.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="http://connect.facebook.net/en_US/all.js"></script>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id='cptup-ready'></div> 
<div id='user'></div>
<script data-cfasync='false' type='text/javascript'>
  (function() {
    var cpt = document.createElement('script'); cpt.type = 'text/javascript'; cpt.async = true;
    cpt.src='http://www.favcy.com/js/test2.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(cpt);
  })();
  var app_id ='qwertyuiop';
  var watch_a_video1 = "";
  
	//var rString = randomString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
 /* var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);*/
 function randomString(length, chars) {
	    var result = '';
	    for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
	    return result;
	}
	var rString = randomString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
	function favcyload(){fld()}
	/*var tag = document.createElement('script');
	  tag.src = "http://www.favcy.com/js/youtube-track-event.js?"+rString;
	  var firstScriptTag = document.getElementsByTagName('script')[0];
	  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);*/
	  var gplus = document.getElementsByClassName("g-plusone");
		if(gplus!=null)
		{
		console.log(gplus);
		 var x = document.getElementsByClassName("g-plusone");
		if(undefined!=x[0])
	   	{
		 $(".g-plusone").attr("data-callback", "favcyload");
		  console.log("testgplus", $(".g-plusone").attr("data-callback"));
	   	}
		else
		{
	$(".g-plusone").attr("data-callback", "favcyload");
	console.log("testgplus", $(".g-plusone").attr("data-callback"));
		}
		}
		        var plusoneTag = $('G\\:PLUSONE');
		        console.log(plusoneTag);
			    $(plusoneTag).attr("callback", "favcyload");
				console.log("testtaggplus", $(plusoneTag).attr("callback"));
				console.log(plusoneTag);
		
	</script>
		  
  <script>

window.twttr = (function(d, s, id) {
	 var js, fjs = d.getElementsByTagName(s)[0],
	   t = window.twttr || {};
	 if (d.getElementById(id)) return;
	 js = d.createElement(s);
	 js.id = id;
	 js.src = "https://platform.twitter.com/widgets.js";
	 fjs.parentNode.insertBefore(js, fjs);

	 t._e = [];
	 t.ready = function(f) {
	   t._e.push(f);
	 };

	 return t;
	}(document, "script", "twitter-wjs"));

</script>
	  
