<HTML>
<HEAD>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://www.google.com/jsapi?key=ABQIAAAAcBlCkeOPJin8k-qaQXzU7BT2yXp_ZAY8_ufC3CFXhHIE1NvwkxR2nqmQ7b9YsHQnrE5X5lt81xC_8A" type="text/javascript"></script>
<script type="text/javascript">google.load('search','1');</script>
<TITLE>Real Time Search - viralpatel.net/realtime</TITLE>
<STYLE>body,input{font:12px Calibri,Arial}#page-wrap{width:900px;text-align:left;height:90%}#logo{font-family:Helvetica,sans-serif}#searchbox{border:3px solid #fe9;font-size:35px;width:450px;-moz-border-radius:5px;font-weight:bold;padding-left:5px}#search-content{display:none}#tweet{text-align:center;width:130px;position:absolute;top:40px;left:80%;display:inline}#footer{text-align:center;font:12px verdana;color:#888;clear:both}.text-label{background-image:url(xreal-time-search.png.pagespeed.ic.45ekxG4Kat.png);background-repeat:no-repeat;background-position:80px 0px}.content{border:0px solid gray;float:left;margin:10px}.content .header{background-color:#fe9;font-size:18px;height:30px;-moz-border-radius:5px;font:bold 18px Cambria;margin:0 -5px 10px -5px;padding:6px 0 0 10px}.content .data{margin-bottom:10px}.content a{font:13px sans-serif}a{color:#0075ca}#image-content img{border:1px solid #ddd;margin:1px;padding:1px}</STYLE>
</HEAD>
<BODY>

<center>


<div id="page-wrap">
<div style="height:30px"></div>

<center>

<input type="text" title="Real Time Search" id="searchbox" name="searchbox"/>
</center>
<br/><br/>
<div id="search-content">
	<div class="content" style="width:400px; display:inline">
		<div class="header">All</div>
		<div class="data" id="web-content"></div>
	</div>

	<div class="content" style="width:400px; display:inline">
		<div class="header">Projects</div>
		<div class="data" id="news-content"></div>
	</div>
	<div class="content" style="width:400px; display:inline">
		<div class="header">Users</div>
		<div class="data" id="web-content1"></div>
	</div>

	<div class="content" style="width:400px; display:inline">
		<div class="header">Activity</div>
		<div class="data" id="news-content1"></div>
	</div>

	<div class="content" style="width:800px">
		<div class="header">Proe</div>
		<div class="data" id="image-content"></div>
	</div>
</div>

</div>
</center>
</BODY>
<SCRIPT>

var imageSearch;
var webSearch;
var webSearch1;
var newsSearch;
var blogSearch;
var lastSearch = 0;
$(function() {
    imageSearch = new google.search.ImageSearch();
    imageSearch.setSearchCompleteCallback(this, imgSearchComplete, null);
    webSearch = new google.search.WebSearch();
    webSearch.setSearchCompleteCallback(this, webSearchComplete, [webSearch, lastSearch]);
    webSearch1 = new google.search.WebSearch();
    webSearch1.setSearchCompleteCallback(this, webSearchCompleteUser, [webSearch1, lastSearch]);
    newsSearch = new google.search.NewsSearch();
    newsSearch.setSearchCompleteCallback(this, newsSearchComplete, [newsSearch, lastSearch]);
    var hash = window.location.hash;
    if (hash != "" && hash.length > 0) {
        if (hash.substr(0, 3) == '#q=') {
            var query = hash.substr(3, hash.length - 3);
            $('#searchbox').removeClass('text-label').val(query);
            search(query);
        }
    }
    $('#searchbox').focus();
});

function imgSearchComplete() {
    if (imageSearch.results && imageSearch.results.length > 0) {
        var contentDiv = document.getElementById('image-content');
        contentDiv.innerHTML = '';
        var results = imageSearch.results;
        for (var i = 0; i < results.length; i++) {
            var result = results[i];
            var imgContainer = document.createElement('div');
            imgContainer.setAttribute("align", "left");
            var newLink = document.createElement('a');
            newLink.href = result.unescapedUrl
            newLink.target = "_new";
            newLink.title = result.titleNoFormatting;
            var newImg = document.createElement('img');
            newImg.src = result.tbUrl;
            newImg.setAttribute("align", "left");
            newLink.appendChild(newImg);
            imgContainer.appendChild(newLink);
            contentDiv.appendChild(imgContainer);
        }
    }
}

function webSearchComplete(searcher, searchNum) {
    var contentDiv = document.getElementById('web-content');
    contentDiv.innerHTML = '';
    var results = searcher.results;
    var newResultsDiv = document.createElement('div');
    newResultsDiv.id = 'web-content';
    for (var i = 0; i < results.length; i++) {
        var result = results[i];
        var resultHTML = '<div style="height:70px; margin-top:5px;">';
        resultHTML += '<a href="' + result.unescapedUrl + '" target="_blank"><b>' + result.titleNoFormatting + '</b></a><br/>' + result.content + '<div/>';
        newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);
}

function webSearchCompleteUser(searcher, searchNum) {
    var contentDiv = document.getElementById('web-content1');
    contentDiv.innerHTML = '';
    var results = searcher.results;
    var newResultsDiv = document.createElement('div');
    newResultsDiv.id = 'web-content1';
    for (var i = 0; i < results.length; i++) {
        var result = results[i];
        var resultHTML = '<div style="height:70px; margin-top:5px;">';
        resultHTML += '<a href="' + result.unescapedUrl + '" target="_blank"><b>' + result.titleNoFormatting + '</b></a><br/>' + result.content + '<div/>';
        newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);
}


function newsSearchComplete(searcher, searchNum) {
    var contentDiv = document.getElementById('news-content');
    contentDiv.innerHTML = '';
    var results = searcher.results;
    var newResultsDiv = document.createElement('div');
    newResultsDiv.id = 'news-content';
    for (var i = 0; i < results.length; i++) {
        var result = results[i];
        var resultHTML = '<div style="height:70px; margin-top:5px;">';
        if (result.image != undefined) {
            resultHTML = '<img align="right" src="' + result.image.tbUrl + '"/>';
        }
        resultHTML += '<a href="' + result.unescapedUrl + '" target="_blank"><b>' + result.titleNoFormatting + '</b></a><br/>';
        resultHTML += result.content + '<br/></div>';
        newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);
}
$('#searchbox').keyup(function() {
    var query = $(this).val() + " site:collap.com";
    search(query);
});

function search(query) {
    if (query.length > 0) {
        $("#search-content").show();
        document.title = query;
        window.location.hash = "q=" + query;
    } else {
        document.title = "Collap.com | Search | Search People | Search Activity | Search Projects";
        $("#search-content").hide();
    }
    imageSearch.execute(query);
    webSearch.execute(query);
    webSearch1.execute(query+"/profile");
    newsSearch.execute(query);
}
$('#searchbox').each(function() {
    $(this).addClass('text-label');
    $(this).keyup(function() {
        if (this.value.length == 1) {
            $(this).removeClass('text-label');
        }
        if (this.value == '') {
            $(this).addClass('text-label');
        }
    });
});</SCRIPT>

</HTML>

<form>
<input type="text" name="search" />
</form>
<?php
$query = urlencode($_GET['search'] . " site:collap.com/profile.php ");
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&start=0&rsz=large&q=".$query;

$body = file_get_contents($url);
$json = json_decode($body);


for($x=0;$x<count($json->responseData->results);$x++){

echo "<b>Result ".($x+1)."</b>";
echo "<br>URL: ";
echo $json->responseData->results[$x]->url;
echo "<br>VisibleURL: ";
echo $json->responseData->results[$x]->visibleUrl;
echo "<br>Title: ";
echo $json->responseData->results[$x]->title;
echo "<br>Content: ";
echo $json->responseData->results[$x]->content;
echo "<br><br>";

}

?>



 
