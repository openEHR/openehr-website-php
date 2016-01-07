<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Search';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id="MainArea" >
		
		<h1>Search</h1>
		<br/>

		<div id="cse" style="width: 100%;">Loading</div>
			<script src="http://www.google.com/jsapi" type="text/javascript"></script>
			<script type="text/javascript"> 
			  google.load('search', '1', {language : 'en', style : google.loader.themes.ESPRESSO});
			  google.setOnLoadCallback(function() {
				var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
				  '012150377208032227381:uwpn0z1deyi', customSearchOptions);
				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
				customSearchControl.draw('cse');
				function parseParamsFromUrl() {
				  var params = {};
				  var parts = window.location.search.substr(1).split('\x26');
				  for (var i = 0; i < parts.length; i++) {
					var keyValuePair = parts[i].split('=');
					var key = decodeURIComponent(keyValuePair[0]);
					params[key] = keyValuePair[1] ?
						decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
						keyValuePair[1];
				  }
				  return params;
				}

				var urlParams = parseParamsFromUrl();
				var queryParamName = "q";
				if (urlParams[queryParamName]) {
				  customSearchControl.execute(urlParams[queryParamName]);
				}
			  }, true);
			</script>

			<style type="text/css">
			  .gsc-control-cse {
				font-family: Verdana, sans-serif;
				border-color: #ffffff;
				background-color: #FFFFFF;
			  }
			  .gsc-control-cse .gsc-table-result {
				font-family: Verdana, sans-serif;
			  }
			  input.gsc-input {
				border-color: #cccccc;
			  }
			  input.gsc-search-button {
				border-color: #00355f;
				background-color: #00355f;
			  }
			  .gsc-tabHeader.gsc-tabhInactive {
				border-color: #ffffff;
				background-color: #ffffff;
			  }
			  .gsc-tabHeader.gsc-tabhActive {
				border-color: #ffffff;
				background-color: #ffffff;
			  }
			  .gsc-tabsArea {
				border-color: #ffffff;
			  }
			  .gsc-webResult.gsc-result,
			  .gsc-results .gsc-imageResult {
				border-color: #FFFFFF;
				background-color: #FFFFFF;
			  }
			  .gsc-webResult.gsc-result:hover,
			  .gsc-imageResult:hover {
				border-color: #eeeeff;
				background-color: #FFFFFF;
			  }
			  .gsc-webResult.gsc-result.gsc-promotion:hover {
				border-color: #eeeeff;
				background-color: #FFFFFF;
			  }
			  .gs-webResult.gs-result a.gs-title:link,
			  .gs-webResult.gs-result a.gs-title:link b,
			  .gs-imageResult a.gs-title:link,
			  .gs-imageResult a.gs-title:link b {
				color: #3386AE;
			  }
			  .gs-webResult.gs-result a.gs-title:visited,
			  .gs-webResult.gs-result a.gs-title:visited b,
			  .gs-imageResult a.gs-title:visited,
			  .gs-imageResult a.gs-title:visited b {
				color: #023670;
			  }
			  .gs-webResult.gs-result a.gs-title:hover,
			  .gs-webResult.gs-result a.gs-title:hover b,
			  .gs-imageResult a.gs-title:hover,
			  .gs-imageResult a.gs-title:hover b {
				color: #3386AE;
			  }
			  .gs-webResult.gs-result a.gs-title:active,
			  .gs-webResult.gs-result a.gs-title:active b,
			  .gs-imageResult a.gs-title:active,
			  .gs-imageResult a.gs-title:active b {
				color: #3386AE;
			  }
			  .gsc-cursor-page {
				color: #3386AE;
			  }
			  a.gsc-trailing-more-results:link {
				color: #3386AE;
			  }
			  .gs-webResult .gs-snippet,
			  .gs-imageResult .gs-snippet,
			  .gs-fileFormatType {
				color: #333333;
			  }
			  .gs-webResult div.gs-visibleUrl,
			  .gs-imageResult div.gs-visibleUrl {
				color: #777777;
			  }
			  .gs-webResult div.gs-visibleUrl-short {
				color: #777777;
			  }
			  .gs-webResult div.gs-visibleUrl-short {
				display: none;
			  }
			  .gs-webResult div.gs-visibleUrl-long {
				display: block;
			  }
			  .gs-promotion div.gs-visibleUrl-short {
				display: none;
			  }
			  .gs-promotion div.gs-visibleUrl-long {
				display: block;
			  }
			  .gsc-cursor-box {
				border-color: #FFFFFF;
			  }
			  .gsc-results .gsc-cursor-box .gsc-cursor-page {
				border-color: #ffffff;
				background-color: #FFFFFF;
				color: #3386AE;
			  }
			  .gsc-results .gsc-cursor-box .gsc-cursor-current-page {
				border-color: #ffffff;
				background-color: #ffffff;
				color: #023670;
			  }
			  .gsc-webResult.gsc-result.gsc-promotion {
				border-color: #FEFEDC;
				background-color: #FFFFCC;
			  }
			  .gsc-completion-title {
				color: #3386AE;
			  }
			  .gsc-completion-snippet {
				color: #333333;
			  }
			  .gs-promotion a.gs-title:link,
			  .gs-promotion a.gs-title:link *,
			  .gs-promotion .gs-snippet a:link {
				color: #3386AE;
			  }
			  .gs-promotion a.gs-title:visited,
			  .gs-promotion a.gs-title:visited *,
			  .gs-promotion .gs-snippet a:visited {
				color: #023670;
			  }
			  .gs-promotion a.gs-title:hover,
			  .gs-promotion a.gs-title:hover *,
			  .gs-promotion .gs-snippet a:hover {
				color: #3386AE;
			  }
			  .gs-promotion a.gs-title:active,
			  .gs-promotion a.gs-title:active *,
			  .gs-promotion .gs-snippet a:active {
				color: #3386AE;
			  }
			  .gs-promotion .gs-snippet,
			  .gs-promotion .gs-title .gs-promotion-title-right,
			  .gs-promotion .gs-title .gs-promotion-title-right *  {
				color: #333333;
			  }
			  .gs-promotion .gs-visibleUrl,
			  .gs-promotion .gs-visibleUrl-short {
				color: #777777;
			  }</style> 
				  
			<br/><br/><br/>
					


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>