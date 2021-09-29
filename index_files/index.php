<?PHP
include "config.php";
$s = $_SERVER['QUERY_STRING'];

if ($s==null) {echo "<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<meta name=\"description\" content=\"隐藏你的网址 $sitename\" />
	<meta name=\"keywords\" content=\"anonymous,link,url,redirect,forum,board,script,domain,external,hompage\" />
	<title>$sitename | link to other sites anonymously</title>

	<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />
	<script type=\"text/javascript\" src=\"anonymizerTool.js\"></script>
</head>

	
<body>
	<div id=\"page\">
		<div id=\"header\"></div>			
		
		<div id=\"content\">
			<div class=\"lang_content\">

			<h1>$sitename</h1>
			
			<div align=\"center\" class=\"nav_symbols\">
				<div style=\"width: 180px; float: left;\">
					<a href=\"#singleLink\"><img src=\"images/link.gif\" alt=\" anonymize a single link\" title=\" anonymize a single link\" /></a><br />
					<a href=\"#singleLink\">单个网址</a>
				</div>
			
				<div style=\"width: 180px; float: left; margin-left: 20px;\">
					<a href=\"#multiLink\"><img src=\"images/script.gif\" alt=\"Script to anonymize all the links on your homepage or board\" title=\"Script to anonymize all the links on your homepage or board\" /></a><br />

					<a href=\"#multiLink\"> 整页替换</a>
				</div>
				<div style=\"width: 180px; float: left; margin-left: 20px;\">
					<a href=\"#info\"><img src=\"images/why.gif\" alt=\"Why use $sitename?\" title=\"Why use $sitename?\" /></a><br />
					<a href=\"#info\">为什么用$sitename?</a>
				</div>
			
			</div>

			<div class=\"clearer\"></div>
			<br />

			<h2 id=\"singleLink\">单个网址</h2>
			<p>输入你要匿名跳转的网址，然后点 \"生成网址\".</p>

			<form name=\"theform\" onSubmit=\"return go();\" action=\"#\">
				<fieldset>
					<h3>输入网址:</h3>

					<input class=\"anonym_input\" type=\"text\" maxlength=\"255\" name=\"nick\" value=\"http://\" />
					<input class=\"anonym_FormSubmit\" type=\"button\" onClick=javascript:go() value=\"生成网址\" /><br /><br />
			
					<h3>生成的匿名网址:</h3>
					<textarea class=\"anonym_textarea\" name=\"thelink1\" wrap=\"soft\" cols=\"66\" rows=\"1\" style=\"height: 30px; overflow: auto;\"></textarea><br />
					<br /><h3>生成的匿名网址 HTML 格式:</h3>
					<textarea class=\"anonym_textarea_big\" name=\"thelink2\" wrap=\"soft\" cols=\"66\" rows=\"2\" style=\"height: 30px; overflow: auto;\"></textarea><br />
					<br /><h3>生成的匿名网址 UBB 格式:</h3>

					<textarea class=\"anonym_textarea_big\" name=\"thelink3\" wrap=\"soft\" cols=\"66\" rows=\"2\" style=\"height: 30px; overflow: auto;\"></textarea><br />
			
				</fieldset>
			</form>
			<br />

			<h2 id=\"multiLink\">页面批量替换</h2>
			<p>在页面中嵌入下列JS代码，批量隐藏页面中的网址来源。部分不需要匿名的网址可以在下面关键词配置.</p>
		
			<form name=\"anonymizerForm\" onsubmit=\"generateCode('anonymizerForm', 'embeddingCode'); return false;\" action=\"#\">
				<fieldset class=\"generationData\">
					<label for=\"keywordsInput\" accesskey=\"1\" style=\"padding-top: 4px; display: block;\">不需要匿名的域名 / 关键字 (多个用半角逗号分割: domain1.tld, domain2.tld, keyword1, ...):</label>
					<input type=\"text\" id=\"keywordsInput\" name=\"keywords\" class=\"anonym_input\" /><br />
					<input type=\"submit\" id=\"submitButton\" value=\"配置\" class=\"anonym_FormSubmit\" />

			
				</fieldset>
			</form>
			
			<form name=\"displayResult\" onsubmit=\"return false;\" action=\"#\">
				<fieldset class=\"embeddingData\">
					<label for=\"embeddingCode\" accesskey=\"2\" style=\"padding-top: 4px; display: block;\">复制下面的代码到页面(在 &lt;/body&gt; 标签之前)。 </label>
			
					<textarea class=\"anonym_textarea\" cols=\"66\" rows=\"8\" id=\"embeddingCode\" name=\"embeddingCode\"></textarea>
					<input class=\"anonym_FormSubmit\" type=\"button\" name=\"markAll\" id=\"markAll\" value=\" 全选 \" onclick=\"document.displayResult.embeddingCode.select();\" />

				</fieldset>
			</form>
		
			
			<br />
			<script type=\"text/javascript\">
			   generateCode(\"anonymizerForm\", \"embeddingCode\");
			</script>
			
			<h2 id=\"info\">使用 $sitename 隐藏网址来源</h2>
			<p>有很多网站不想把来源地址透露给目标网址<br>
			只要简单的使用以下方式隐藏:<br>

			<a href=\"http://$url/?http://www.ccw8.com/\" target=\"_blank\">http://$url/?http://www.ccw8.com/</a>
			这种方式将会匿名访问 <a href=\"http://www.ccw8.com/\">西西网</a> 目标网址的只会统计到 $url.</p>
			

			<br />
			$sitename 隐藏网址来源!

			<div class=\"clearer\"></div>

			</div>
		</div>

		
		<div id=\"footer\">
			<div id=\"footer_inside\">
				<p>
				技术支持 <a href=\"http://www.ccw8.com/\">西西网</a>, an <a href=\"http://www.ccw8.com/demos/anonym/\">演示地址</a
				</p>
				<div class=\"sp16\"></div>
			</div>
		</div>
		
	</div>
</body>
</html>"; }
else echo "
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
	<meta http-equiv=\"refresh\" content=\"$wait; URL=$s\">
	<title>$sitename - free dereferer service</title>
	<style type=\"text/css\">
	html {
		background: #f9f9f9;
	}
	body {
		background: #fff;
		color: #666;
		font: 14px tahoma, verdana, arial, sans-serif;
		margin: 5% 10%;
		text-align: center;
	}
	
	a {
		color: #f80;
	}
	
	h1 {
		color: #690;
	}
	
	#container {
		background: #f9f9f9;
		line-height: 2.4;
		padding: 1em;
	}
	
	p#url {
		font-weight: bold;
		overflow: hidden;
		width: 100%;
	}
	
	</style>
</head>

<body>

	<h1>$sitename</h1>
	<div id=\"container\">

		
		<p>正在转向 ...<br />
		<p id=\"url\"><a href=\"$s\">$s</a></p>

		<hr />
		<p><a href=\"http://$url/\">$sitename</a></p>
		
	</div>

 
</body>
</html>";
?>