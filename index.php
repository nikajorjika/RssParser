<html>
<head>
</head>
<body>

<?php 

$link="http://rss.cnn.com/rss/edition.rss";
$file=simplexml_load_file($link);
//printf('<pre>%s</pre>', print_r($file, TRUE));

echo "<link rel='stylesheet' href='style.css' type='text/css'/>";
echo "<div> <a href=\"http://CNN.com\" class='header'><img src=\"http://i.cdn.turner.com/cnn/.e/img/1.0/logo/cnn.logo.rss.gif\"/></a></div>";
echo "<p class='header'>".$file->channel->title."</p>";
echo "<ul type=\"none\" id=\"ul\">";
echo "<title>".$file->channel->title."</title>";
 foreach($file->channel->item as $a)
 
 {      echo "<li>";
        $data = strtotime($a->pubDate);
        $time = date('j M  g:i A', $data);
        echo "<div id=\"body\"><div><h1 id=\"title\">$a->title <p id=\"time\">$time</p></h1></div>
			 <br/>
			 <div ><p id=\"content\">$a->description<a href=\"$a->link\" id=\"readmore\">Read More...</a></p></div>
			
			</div>
			 
		
		";
		
        echo "</li>";
  }
echo "</ul>";
 
?>
</body>
</html>