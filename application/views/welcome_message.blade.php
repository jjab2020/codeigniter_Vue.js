<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="{{base_url()}}assets/dist/app.css">
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
			<h1><span>@{{ msg }} </span></h1>	
		</div>
		<h1>Hello my friend {{ $name }} from codeigniter</h1>
		@for($a=1;$a<=3;$a++)
		   <p>{{$a}}</p>
		@endfor
		<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4 class="alert-heading">Warning!</h4>
			<p class="mb-0"><i class="fas fa-user"></i> Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
		</div>
		<div class="container">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Type</th>
						<th scope="col">Column heading</th>
						<th scope="col">Column heading</th>
						<th scope="col">Column heading</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-active">
						<th scope="row">Active</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<th scope="row">Default</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-primary">
						<th scope="row">Primary</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-secondary">
						<th scope="row">Secondary</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-success">
						<th scope="row">Success</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-danger">
						<th scope="row">Danger</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-warning">
						<th scope="row">Warning</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-info">
						<th scope="row">Info</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-light">
						<th scope="row">Light</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="table-dark">
						<th scope="row">Dark</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
				</tbody>
			</table> 
		</div>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>
	<script type="text/javascript" src={{base_url()}}assets/dist/app.js ></script>
</body>
</html>