<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/app.css">
	<style type="text/css">
		::selection { background-color: #f07746; color: #fff; }
		::-moz-selection { background-color: #f07746; color: #fff; }
		body {
			background-color: #fff;
			margin: 40px auto;
			max-width: 1024px;
			font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
			color: #808080;
		}
		a {
			color: #dd4814;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}
		a:hover {
			color: #97310e;
		}
		
		h1 img {
			display: block;
		}
		h2 {
			color:#404040;
			margin:0;
			padding:0 0 10px 0;
		}
		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 13px;
			background-color: #f5f5f5;
			border: 1px solid #e3e3e3;
			border-radius: 4px;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}
		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}
		p {
			margin: 0 0 10px;
			padding:0;
		}
		p.footer {
			text-align: right;
			font-size: 12px;
			border-top: 1px solid #d0d0d0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
			background:#8ba8af;
			color:#fff;
		}
		#container {
			margin: 10px;
			border: 1px solid #d0d0d0;
			box-shadow: 0 0 8px #d0d0d0;
			border-radius: 4px;
		}
	</style>
</head>
<body>

	<div id="container">
		<div id="app">
			<h1><span v-if="seen">Welcome to codeIgniter and VueJS</span></h1>
		</div>
		<div class="alert alert-primary" role="alert">
			This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
		</div>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>
	<script type="text/javascript" src=<?php echo base_url()."assets/dist/app.js" ?> ></script>
</body>
</html>