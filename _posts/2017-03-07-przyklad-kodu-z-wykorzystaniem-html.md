---
title: Przykład kodu z wykorzystaniem CSS
layout: post
---


```html
<html>
	<head>
		<style>
			body {
				border: 2px solid black;
				width: 80%;
				margin: auto auto;
			}
			.slogan {
				padding: 0 20px;
				font-size: 400%;
			}
			.zawartosc {
				height: 300px;
				width: 80%;
				margin: auto auto;
				background-color: orange;
				border: 1px solid black;
			}
			.stopka {
				margin: 20px auto;
				height: 100px;
				width: 80%;
				background-color: orange;
				border: 1px solid black;
				text-align: center;
				color: black;
				line-height:100px;
			}
			
			.naglowek {
				background-image: url(http://raw.githubusercontent.com/wwphp-fb/php-resources-assets/master/images/community/elephpant.png);
				background-repeat: no-repeat;
				background-position: center right;
				height:200px;
			}
		</style>
	</head>
	<body>
		<div class="naglowek">
			<div class="slogan">
				<h3>Witaj <br/> przybyszu</h3>
			</div>
			
		</div>
		<div class="zawartosc">
			
		</div>
		<div class="stopka">$SERVER</div>
	</body>


```