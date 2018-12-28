<?php
$servername = "localhost";
$username = "id2366159_funkypanda";
$password = "hakunamatata";
$dbname = "id2366159_funkypanda";
date_default_timezone_set("Asia/Kolkata");
$dat = date("d-m-Y h:i:sa");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
$sql = "UPDATE View_Counter SET Views = Views + 1, Date_Time ='".$dat."' WHERE Id=4";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<html>
<head>
<title>Quotes</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
<meta name="theme-color" content="purple" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>



@import url('https://fonts.googleapis.com/css?family=Zilla+Slab');

#box{
 

  color:purple;
 margin: 8%  auto auto auto;
  width:50%;
  font-family: 'Zilla Slab', serif;
  
  border-radius:3px;
  text-align:center;
  font-size:40px;
}
@media only screen and (max-width: 900px) { 
		           #box{
                             width:80%;
                      }
		} 
@media only screen and (max-width: 900px) { 
		           #getQuote{
                             padding-bottom:40px;
                      }
		} 
.turnDeviceNotification {
             background-image:url('turndevice.png');
             background-size:cover;
             position:fixed;
             top: 0;
             left:0;
             z-index:9999;
             height:100%;
             width:100%;
             display: none;
         }
#getQuote{
  cursor:pointer;
  border-radius:5px;
  border-color:purple;
  text-decoration:none;
  background-color:purple;
  border:none;
  color:white;
  padding:5px 7px 5px 7px;
  font-size:22px;
  font-family: 'Zilla Slab', serif;
}
#tweet{
  cursor:pointer;
  border-radius:5px;
  border-color:purple;
  text-decoration:none;
  background-color:purple;
  border:none;
  color:white;
  padding:5px 7px 5px 7px;
  font-size:22px;
  font-family: 'Zilla Slab', serif;
}
#quote{
  margin:5% auto auto auto;
  font-size:20px;
  height
}
#auth{
  margin:3% auto auto auto;
  font-size:18px;
  color:#8941f4;
  font-weight:bold;
}
#apu{
  text-align:center;
  width:100%;
}

</style>
</head>
<body>
<div class="turnDeviceNotification"></div>	
<div id="box">
  <div style="font-weight:bold;">Quotes</div>
  <div style="font-weight:100;font-size:18px;padding-top:5px;color:black;
;">for the legends from the legends</div>
  <div id="gus"><p id="quote"></p></div>
  <div id="auth" style="text-align:center;"></div>
  <div style="padding-top:10px;" class="btn-group">
  <a id="getQuote">Another one</a>
    <a id="tweet"><i style="font-size:18px;text-decoration:none;" class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
    <script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>
    </div> 
</div>
 <div id="apu" class="navbar-fixed-bottom text-center" style="margin:auto;padding-bottom:10px;">
    <h6 style="color:purple;text-decoration:none;font-family:Zilla Slab;" > Powered by FORISMATIC API</h6>
   <div class="container" style="display:inline-block;"><a target="_blank" href="https://www.facebook.com/Gunalopez97"><i style="font-size:20px;border-radius:5px;padding-left:15px;padding-right:15px;padding-top:10px;padding-bottom:10px;background-color:rgba(0,0,0,0);color:purple;" class="fa fa-facebook" aria-hidden="true"> </i></a>&nbsp;&nbsp;
       <a target="_blank" href="https://twitter.com/Gunainspire"><i style="font-size:20px;border-radius:5px;padding:10px;background-color:rgba(0,0,0,0);color:purple;" class="fa fa-twitter" aria-hidden="true"> </i></a>&nbsp;&nbsp; <a target="_blank" href="https://github.com/gunasuriya"><i style="font-size:20px;border-radius:5px;padding:10px;background-color:rgba(0,0,0,0);color:purple;" class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;
          <a target="_blank" href="https://www.linkedin.com/in/gunasuriya-balasubramani-470015b1/"><i style="font-size:20px;border-radius:5px;padding:10px;background-color:rgba(0,0,0,0);color:purple;" class="fa fa-linkedin" aria-hidden="true"></i></a>
  </div>
   <br>
  <div style="color:purple;font-family:Zilla Slab;font-size:20px;font-weight:bold;"> Created By&nbsp;<a target="_blank" href="http://funkypanda.000webhostapp.com/" style="color:#8941f4;text-decoration:none;font-family:Zilla Slab;" target="_blank"> Gunasuriya</a></div>

</div>



<script>
$(document).ready(function(){
  
  var author = $('#auth');
  var quote = $('#quote');
  genQuote(quote,author);
  $('#quote').addClass('animated bounceIn');
  
  
  
  $('#getQuote').click(function(event){
    $("#gus").animate({opacity: "0"});
    
    genQuote(quote,author);
    $('#tweetOut').removeClass("disabled");
     
		$("#gus").animate({opacity: "1"});
   $('#tweet').html('<i style="font-size:18px;" class="fa fa-twitter" aria-hidden="true"></i> Tweet');
    
     
  });
  function myFunc(){
alert('Sorry! 140 chars exceeded!');
}
  var tweetThis = "";
$('#tweet').click(function() {
  if (tweetThis.length > 140) {
 

myFunc();
  } else {
    $(this).attr("href", "https://twitter.com/intent/tweet?text=" + tweetThis);
  }

})

  
  function genQuote(quote,author){
    var api_url="https://api.forismatic.com/api/1.0/?method=getQuote&lang=en&format=jsonp&jsonp=?";
    
    $.getJSON(api_url,function(data){
      quote.html(data.quoteText);
      //console.log(JSON.stringify(data));
         if (data.quoteAuthor) {
      author.html(data.quoteAuthor);
      author.attr("href", data.quoteLink);
    } else {
      author.removeAttr("href");
      author.html("<strong>Anonymous</strong>");
    }
     tweetThis = data.quoteText + " By - " + data.quoteAuthor;
    });
    
  }
  jQuery(window).bind('orientationchange', function(e) {
 switch ( window.orientation ) {
  case 0:
    $('.turnDeviceNotification').css('display', 'none');
    // The device is in portrait mode now
  break;

  case 180:
    $('.turnDeviceNotification').css('display', 'none');
    // The device is in portrait mode now
  break;

  case 90:
    // The device is in landscape now
    $('.turnDeviceNotification').css('display', 'block');
  break;

  case -90:
    // The device is in landscape now
    $('.turnDeviceNotification').css('display', 'block');
  break;
 }
});
  
}); 

</script>
</body> 

</html>