<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<title>PHPki: {$title}</title>
	<link rel="stylesheet" type="text/css" href="{$style_css}">
	<script type="text/javascript" language="javascript">

	function setVisibility(rowName, show) {
        // Tabellenzelle ermitteln
 
        var actualVisibility=document.getElementById(rowName).style.visibility;
 
        if(show==false) {
                document.getElementById(rowName).style.visibility = "hidden";
                document.getElementById(rowName).style.display = "none";
        } else {
                document.getElementById(rowName).style.visibility = "visible";
                document.getElementById(rowName).style.display = "";
        }
	}

	</script>
	</head>
	<body>
	<div class={$logoclass}>PHPki</div>
	<div class={$titleclass}>{$title}</div>