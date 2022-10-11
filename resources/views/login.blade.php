<!DOCTYPE html>
<html lang="en">

<head>
	<title> SRTS CRM Login </title>
	<!-- META SECTION -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- END META SECTION -->
	<!-- CSS INCLUDE -->

    <style>
.app {
  float: left;
  width: 100%;
  min-height: 100%;
  position: relative;
}

.app.app-fh, .app.app-fh .app-container {
  height: 100%;
}
.app .app-container {
  float: left;
  width: 100%;
  position: relative;
  background: #EDEFF0;
}



.app, body {
  overflow-x: hidden;
}
.app.app-fh, .app.app-fh .app-container {
  height: 100%;
}
.app .app-container {
  float: left;
  width: 100%;
  position: relative;
}
.app .app-login-box {
  width: 340px;
  margin: 10% auto;
  background: #FFF;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  zoom: 1;
  box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
}
.app .app-login-box::after, .app .app-login-box::before {
  content: "";
  display: table;
}
.app .app-login-box .app-login-box-user {
  width: 100%;
  float: left;
  text-align: center;
  margin-bottom: 20px;
  padding: 30px 30px 0;
}
.app .app-login-box .app-login-box-user img {
  width: 100px;
  border: 1px solid #DBE0E4;
  padding: 5px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}
.app .app-login-box .app-login-box-title {
  float: left;
  width: 100%;
  text-align: center;
  margin-bottom: 20px;
  padding: 0 30px;
}
.app .app-login-box .app-login-box-title .title {
  font-size: 18px;
  font-weight: 400;
  color: #1B2431;
  margin-bottom: 5px;
}
.app .app-login-box .app-login-box-title .subtitle {
  font-size: 14px;
  color: #7F8FA4;
}


.form-group, .input-group {
	margin-bottom: 15px;
	float: left;
	width: 100%;
	position: relative
}
.form-group .input-group {
	margin-bottom: 0
}
.form-group>label+.help-block {
	margin-top: -5px;
	margin-bottom: 10px
}
.form-group:last-child {
	margin-bottom: 0
}
.input-lg {
	height: 50px;
	font-size: 16px
}
.input-sm {
	height: 30px;
	font-size: 12px
}
.has-feedback label~.form-control-feedback {
	top: 25px
}
.form-control-feedback {
	width: 40px;
	height: 40px;
	line-height: 40px
}
.form-control-feedback .fa {
	font-size: 14px
}
.form-control-feedback [class^=icon-] {
	font-size: 20px
}
.has-success .form-control, .has-success .input-group-addon {
	border-color: #76AB3C;
	color: #76AB3C
}
.has-success .form-control:focus {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #699835
}
.has-success .app-checkbox span:before, .has-success .app-radio span:before {
	border-color: #76AB3C
}
.form-control {
  height: 40px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.form-control, .input-group .input-group-addon {
  color: #454545;
  background: #FFF;
  border-color: #DBE0E4;
}
.form-control {
  width: 100%;
  padding: 5px 10px;
  font-size: 13px;
  background-color: #fff;
  border: 1px solid #ccc;
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.btn.btn-success {
  background: #3a86f6;
  color: #FFF;
}
.btn {
  padding: 5px 20px;
  line-height: 28px;
  text-decoration: none;
  font-weight: 600;
  overflow: hidden;
  position: relative;
  -webkit-transition: all .1s ease-in;
  -moz-transition: all .1s ease-in;
  -ms-transition: all .1s ease-in;
  -o-transition: all .1s ease-in;
  transition: all .1s ease-in;
}
.btn-block {
  display: block;
  width: 100%;
}


























@charset "UTF-8";
.fc table, table {
	border-spacing: 0
}
.mta-15 {
    padding: 6px 0px;
}

.form-control {
  appearance: auto !important;
}


.btn-blue{
background-color: #408bfe !important;
color: #fff !important;
border-radius: 7px !important;
}

.Permission_box_li .active {
color: #3a86f6 !important;
background: #ebf3fe !important;
border-left: 3px solid #3a86f6 !important;
}

.as_btn{
border:1px solid #6825d4;
padding: 3px 10px;
  background:none;
border-radius: 4px;
font-size: 11px;
color:#6825d4 !important;

}


.as_btn a{
	text-decoration:none;
}




  .loading {
 width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
	z-index:9999;
    background-color: rgba(0,0,0,.5);
  }


  .loading img{
    margin-top: -40px;
    margin-left: -40px;

    position: absolute;
    top: 50%;
    left: 50%;}



button, input, optgroup, select, textarea {
	color: inherit;
	font: inherit;
	margin: 0
}
button {
	overflow: visible
}
button, select {
	text-transform: none
}
button, html input[type=button], input[type=reset], input[type=submit] {
	-webkit-appearance: button;
	cursor: pointer
}
button[disabled], html input[disabled] {
	cursor: default
}
button::-moz-focus-inner, input::-moz-focus-inner {
border:0;
padding:0
}
input[type=checkbox], input[type=radio] {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0
}
input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
height:auto
}
input[type=search]::-webkit-search-cancel-button, input[type=search]::-webkit-search-decoration {
-webkit-appearance:none
}
table {
	border-collapse: collapse
}
td, th {
	padding: 0
}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
blockquote, img, pre, tr {
	page-break-inside: avoid
}
*, :after, :before {
	background: 0 0!important;
	color: #000!important;
	-webkit-box-shadow: none!important;
	box-shadow: none!important;
	text-shadow: none!important
}
a, a:visited {
	text-decoration: underline
}
a[href]:after {
	content: " (" attr(href) ")"
}
abbr[title]:after {
	content: " (" attr(title) ")"
}
a[href^="#"]:after, a[href^="javascript:"]:after {
	content: ""
}
blockquote, pre {
	border: 1px solid #999
}
thead {
	display: table-header-group
}
img {
	max-width: 100%!important
}
h2, h3, p {
	orphans: 3;
	widows: 3
}
h2, h3 {
	page-break-after: avoid
}
.navbar {
	display: none
}
.btn>.caret, .dropup>.btn>.caret {
	border-top-color: #000!important
}
.label {
	border: 1px solid #000
}
.table {
	border-collapse: collapse!important
}
.table td, .table th {
	background-color: #fff!important
}
.table-bordered td, .table-bordered th {
	border: 1px solid #ddd!important
}
}
.dropdown-menu, .modal-content {
	-webkit-background-clip: padding-box
}
.btn, .btn-danger.active, .btn-danger:active, .btn-default.active, .btn-default:active, .btn-info.active, .btn-info:active, .btn-primary.active, .btn-primary:active, .btn-warning.active, .btn-warning:active, .btn.active, .btn:active, .dropdown-menu>.disabled>a:focus, .dropdown-menu>.disabled>a:hover, .form-control, .navbar-toggle, .open>.dropdown-toggle.btn-danger, .open>.dropdown-toggle.btn-default, .open>.dropdown-toggle.btn-info, .open>.dropdown-toggle.btn-primary, .open>.dropdown-toggle.btn-warning {
	background-image: none
}
.img-thumbnail, body {
	background-color: #fff
}
*, :after, :before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box
}
html {
	font-size: 10px
}
button, input, select, textarea {
	font-family: inherit;
	font-size: inherit;
	line-height: inherit
}
a {
	color: #1b2531;
	text-decoration: none
}
a:focus, a:hover {
	color: #000;
	text-decoration: underline
}
a:focus {
	outline: -webkit-focus-ring-color auto 5px;
	outline-offset: -2px
}
figure {
	margin: 0
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
	display: block;
	max-width: 100%;
	height: auto
}
.img-rounded {
	border-radius: 5px
}
.img-thumbnail {
	line-height: 1.42857143;
	border: 1px solid #ddd;
	-webkit-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	display: inline-block;
	max-width: 100%
}
.img-circle {
	border-radius: 50%
}
hr {
	margin-top: 18px;
	margin-bottom: 18px;
	border: 0;
	border-top: 1px solid #fff
}
[role=button] {
cursor:pointer
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
	font-family: inherit;
	font-weight: 500;
	line-height: 1.1;
	color: inherit
}
.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
	font-weight: 400;
	line-height: 1;
	color: #888
}
.h1, .h2, .h3, h1, h2, h3 {
	margin-top: 18px;
	margin-bottom: 9px
}
.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small {
	font-size: 65%
}
.h4, .h5, .h6, h4, h5, h6 {
	margin-top: 9px;
	margin-bottom: 9px
}
.h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
	font-size: 75%
}
.h1, h1 {
	font-size: 33px
}
.h2, h2 {
	font-size: 27px
}
.h3, h3 {
	font-size: 23px
}
.h4, h4 {
	font-size: 17px
}
.h5, h5 {
	font-size: 13px
}
.h6, h6 {
	font-size: 12px
}
p {
	margin: 0 0 9px
}
.lead {
	margin-bottom: 18px;
	font-size: 14px;
	font-weight: 300;
	line-height: 1.4
}
dt, kbd kbd {
	font-weight: 700
}
address, blockquote .small, blockquote footer, blockquote small, dd, dt, pre {
	line-height: 1.42857143
}
@media (min-width:768px) {
.lead {
	font-size: 19.5px
}
}

body {
	padding: 0;
	margin: 0;
	color: #454545;
	font-family: 'Open Sans', sans-serif;
	font-size: 13px;
	line-height: 20px;
	font-weight: 400;
	background:#efefef !important;
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column .container, body .row>div[class^=col-] {
	padding-left: 10px;
	padding-right: 10px
}
body a {
	color: #0F9DEA
}
body a:hover {
	color: #0d8dd2
}
body .row {
	margin-left: -10px;
	margin-right: -10px
}
.app {
	/*! float: left; */
	/*! width: 100%; */
	/*! min-height: 100%; */
	/*! position: relative; */
}
.app .app-container {
	float: left;
	width: 100%;
	position: relative;
	background: #EDEFF0;
}
.app .app-container .app-sidebar {
	float: left;
	width: 250px;
	z-index: 1
}
.app .app-container .app-sidebar.dir-left {
	float: left
}
.app .app-container .app-sidebar.dir-right {
	float: right
}
.app .app-container .app-content {
	width: 100%;
	zoom: 1
}
.app .app-container .app-content:after, .app .app-container .app-content:before {
	content: "";
	display: table
}
.app .app-container .app-content:after {
	clear: both
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column {
	float: left;
	position: relative
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column .ui-resizable-handle {
	position: absolute;
	right: -5px;
	top: 0;
	font-size: .1px;
	display: block;
	touch-action: none;
	cursor: e-resize;
	width: 10px;
	height: 100%
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column .ui-resizable-handle:after {
	position: absolute;
	top: 50%;
	left: 3px;
	width: 12px;
	height: 12px;
	margin-top: -6px;
	font-family: linearicons;
	font-size: 12px;
	content: "\e871";
	text-align: center;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-o-transform: rotate(90deg);
	transform: rotate(90deg)
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column:first-child .container {
	padding-left: 15px
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column:last-child .container {
	padding-right: 15px
}
.app .app-container .app-content .app-content-separate {
	float: left;
	width: 100%
}
.app .app-container .app-content .app-content-separate>.app-content-separate-left {
	float: left;
	width: 260px;
	background: #FFF;
	border-right: 1px solid #DBE0E4;
	height:auto !important ;
	margin-bottom:20px;
}

.app .app-container .app-content .app-content-separate>.app-content-separate-left .app-content-separate-panel {
	padding: 15px;
	float: left;
	width: 100%;
	border-bottom: 1px solid #DBE0E4
}
.app .app-container .app-content .app-content-separate>.app-content-separate-left>.app-content-separate-content {
	float: left;
	width: 100%
}
.app .app-container.app-sidebar-left-minimized .app-sidebar.dir-left, .app .app-container.app-sidebar-right-minimized .app-sidebar.dir-right {
	width: 50px
}
.app .app-container .app-content .app-content-separate>.app-content-separate-content {
	padding-left: 260px
}
.app .app-container .app-content.app-sidebar-left {
	padding-left: 265px
}
.app .app-container .app-content.app-sidebar-right {
	padding-right: 300px
}
.app .app-container.app-sidebar-left-closed .app-sidebar.dir-left {
	margin-left: -300px
}
.app .app-container.app-sidebar-left-closed .app-content.app-sidebar-left {
	padding-left: 0!important
}
.app .app-container.app-sidebar-right-closed .app-sidebar.dir-right {
	margin-right: -300px
}
.app .app-container.app-sidebar-right-closed .app-content.app-sidebar-right {
	padding-right: 0!important
}
.app .app-container.app-sidebar-left-minimized .app-content.app-sidebar-left {
	padding-left: 50px
}
.app .app-container.app-sidebar-right-minimized .app-content.app-sidebar-right {
	padding-right: 50px
}
.app .app-container .app-content-heading {
	float: left;
	width: 100%;
	background: #2D3349;
	padding: 50px 20px 150px
}
.app .app-container .app-content-heading>h1 {
	font-size: 19px;
	font-weight: 400;
	padding: 0;
	margin: 0;
	line-height: 30px;
	color: #FFF
}
.app .app-container .app-content-heading>p {
	line-height: 20px;
	margin: 0;
	font-size: 13px;
	color: #F5F5F5;
	font-weight: 300
}
.app .app-container .app-content-wrapped {
	float: left;
	width: 98%;
	padding: 10px 5px;
	margin: -100px 1% 0;
	background: #EDEFF0;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px
}
.app .app-overlay {
	position: fixed;
	left: 0;
	top: 0;
	background: rgba(0,0,0,.6);
	width: 0;
	height: 0;
	z-index: 1000;
	opacity: 0;
	-webkit-transition: opacity .2s linear;
	-moz-transition: opacity .2s linear;
	-ms-transition: opacity .2s linear;
	-o-transition: opacity .2s linear;
	transition: opacity .2s linear
}
.app .app-overlay.show {
	width: 100%;
	height: 100%;
	opacity: 1
}
.app .app-sidepanel {
	position: fixed;
	z-index: 1001;
	top: 0;
	right: -400px;
	width: 400px;
	height: 100%;
	border-left: 1px solid #DBE0E4;
	-webkit-transition: right .1s linear;
	-moz-transition: right .1s linear;
	-ms-transition: right .1s linear;
	-o-transition: right .1s linear;
	transition: right .1s linear
}
.app.app-sidepanel-open {
	overflow-x: visible;
	margin-left: -400px
}
.app.app-sidepanel-open .app-sidepanel {
	right: 0
}
.app.app-loaded {
	-webkit-transition: margin .1s linear;
	-moz-transition: margin .1s linear;
	-ms-transition: margin .1s linear;
	-o-transition: margin .1s linear;
	transition: margin .1s linear
}
.app.app-loaded .app-container .app-sidebar {
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear
}
.app.app-loaded .app-container .app-content {
	-webkit-transition: padding .1s linear;
	-moz-transition: padding .1s linear;
	-ms-transition: padding .1s linear;
	-o-transition: padding .1s linear;
	transition: padding .1s linear
}
.app .app-container .app-content.app-header-fixed>.app-header, .app .app-header .app-header-navigation nav>ul>li>a {
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear
}
.app-layout-boxed {
	background: #dfe3e4
}
.app-layout-boxed>.app {
	float: none;
	width: 1200px;
	margin: 0 auto;
	zoom: 1;
	-webkit-box-shadow: 0 0 16px 0 rgba(0,0,0,.1);
	-moz-box-shadow: 0 0 16px 0 rgba(0,0,0,.1);
	box-shadow: 0 0 16px 0 rgba(0,0,0,.1);
	overflow-x: hidden
}
.app-layout-boxed>.app:after, .app-layout-boxed>.app:before {
	content: "";
	display: table
}
.app-layout-boxed>.app:after {
	clear: both
}
.app-layout-boxed.app-layout-boxed-offset {
	padding-top: 30px
}
.app .app-container .app-content.app-header-fixed {
	padding-top: 60px
}
.app .app-container .app-content.app-header-fixed>.app-header {
	padding-left: 300px;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 9;
	transition: all .1s linear
}
.app .app-container.app-sidebar-left-minimized .app-content.app-header-fixed>.app-header {
	padding-left: 50px
}
.app .app-container.app-sidebar-right-minimized .app-content.app-header-fixed>.app-header {
	padding-right: 50px
}
.app .app-container.app-sidebar-left-closed .app-content.app-header-fixed>.app-header, .app .app-container.app-sidebar-right-closed .app-content.app-header-fixed>.app-header {
	padding-left: 0;
	padding-right: 0
}
@media (max-width:480px) {
.app .row {
	margin: 0
}
.app .row div[class^=col-md-] {
	float: left;
	width: 100%;
	padding-left: 0;
	padding-right: 0
}
}
@media (max-width:992px) {
.app .app-container .app-sidebar {
	float: left;
	position: relative;
	width: 100%;
	display: none;
	left: auto;
	right: auto
}
.app .app-container .app-sidebar.app-sidebar-open {
	display: block;
	margin: 0!important
}
.app .app-container .app-content {
	float: left;
	width: 100%
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column {
	width: 100%!important
}
.app .app-container .app-content.app-content-resizable .app-content-resizable-column .ui-resizable-handle {
	display: none!important
}
.app .app-container .app-content .app-content-separate .app-content-separate-left {
	float: left;
	width: 100%;
	border-right: 0
}
.app .app-container .app-content .app-content-separate .app-content-separate-left .app-content-separate-content {
	display: none
}
.app .app-container .app-content .app-content-separate .app-content-separate-left.open .app-content-separate-content {
	display: block
}
.app .app-container .app-content .app-content-separate .app-content-separate-content {
	padding-left: 0;
	float: left;
	width: 100%
}
.app .app-container .app-content.app-sidebar-left {
	padding-left: 0
}
.app .app-container .app-content.app-sidebar-right {
	padding-right: 0
}
.app .app-container.app-sidebar-left-closed .app-sidebar.dir-left {
	left: auto
}
.app .app-container.app-sidebar-right-closed .app-sidebar.dir-right {
	right: auto
}
.app div[class^=col-md] {
	float: left;
	width: 100%;
	margin-bottom: 20px
}
}
.app .app-header .app-header-buttons.app-header-buttons-separated li:last-child:after, .app .app-header .app-header-navigation nav>ul>li.title {
	display: none
}
@media (max-width:1200px) {
.app-layout-boxed>.app {
	float: left;
	width: 100%
}
}
.app .app-header {
	float: left;
	width: 100%;
	height: 58px
}
.app .app-header .app-header-logo {
	float: left;
	width: 300px;
	height: 59px;
	background: url(../img/logo.png) left top no-repeat;
	text-indent: 9999px;
	font-size: 0;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.app .app-header .app-header-logo.app-header-logo-light {
	background: url(../img/logo-dark.png) left top no-repeat
}
.app .app-header .app-header-logo.app-header-logo-condensed {
	width: 120px;
	margin-right: 20px
}
.app .app-header .app-header-title {
	float: left;
	padding: 10px 10px 10px 15px
}
.app .app-header .app-header-title .title, .app .app-header .app-header-title h1, .app .app-header .app-header-title h2, .app .app-header .app-header-title h3, .app .app-header .app-header-title h4, .app .app-header .app-header-title h5, .app .app-header .app-header-title h6 {
	font-size: 14px;
	line-height: 40px;
	font-weight: 600;
	padding: 0;
	margin: 0
}
.app .app-header .app-header-title .title span, .app .app-header .app-header-title h1 span, .app .app-header .app-header-title h2 span, .app .app-header .app-header-title h3 span, .app .app-header .app-header-title h4 span, .app .app-header .app-header-title h5 span, .app .app-header .app-header-title h6 span {
	font-size: 20px;
	line-height: 40px;
	float: left;
	margin-right: 10px
}
.app .app-header .app-header-buttons {
	float: left;
	padding: 9px 5px 10px 10px;
	margin: 0;
	list-style: none;
	width: auto
}
.app .app-header .app-header-buttons>li {
	float: left;
	position: relative;
	margin-right: 15px;
	width: auto
}
.app .app-header .app-header-buttons>li>.contact {
	margin-bottom: 0
}
.app .app-header .app-header-buttons>li>.contact .contact-container {
	margin-right: 10px
}
.app .app-header .app-header-buttons>li:last-child {
	margin-right: 0
}
.app .app-header .app-header-buttons.app-header-buttons-separated li {
	padding-right: 5px
}
.app .app-header .app-header-buttons.app-header-buttons-separated li:after {
	content: " ";
	position: absolute;
	right: 0;
	top: 10px;
	height: 20px;
	width: 1px
}
.app .app-header .app-header-buttons.app-header-buttons-separated li:last-child {
	padding-right: 0;
	margin-right: 0
}
.app .app-header .app-header-buttons.pull-right {
	padding-right: 25px
}
.app .app-header .app-header-navigation, .app .app-header .app-header-navigation nav {
	float: left;
	width: auto
}
.app .app-header .app-header-navigation nav>ul {
	float: left;
	padding: 0;
	margin: 0;
	list-style: none
}
.app .app-header .app-header-navigation nav>ul>li {
	float: left;
	width: auto;
	position: relative
}
.app .app-header .app-header-navigation nav>ul>li>a {
	display: block;
	float: left;
	line-height: 20px;
	padding: 20px 15px;
	font-size: 12px;
	font-weight: 700;
	color: #1B2431;
	text-transform: uppercase;
	text-decoration: none;
	transition: all .1s linear
}
.app .app-header .app-header-navigation nav>ul>li>a span {
	display: none
}
.app .app-header .app-header-navigation nav>ul>li .app-header-navigation-megamenu {
	display: none;
	width: 94%;
	position: fixed;
	left: 3%;
	top: 60px;
	padding: 15px;
	margin-top: -1px;
	border: 1px solid #DBE0E4;
	z-index: 10;
	background: #FFF;
	-webkit-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	-moz-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	box-shadow: 0 2px 8px rgba(0,0,0,.1)
}
.app .app-header .app-header-navigation nav>ul>li ul, .dropdown-menu {
	-webkit-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	-moz-box-shadow: 0 2px 8px rgba(0,0,0,.1)
}
.app .app-header .app-header-navigation nav>ul>li ul {
	display: none;
	position: absolute;
	left: 0;
	top: 100%;
	width: 250px;
	list-style: none;
	padding: 0;
	margin: -1px 0 0;
	z-index: 10;
	border: 1px solid #DBE0E4;
	box-shadow: 0 2px 8px rgba(0,0,0,.1)
}
.app .app-header .app-header-navigation nav>ul>li ul>li>a {
	float: left;
	width: 100%;
	padding: 15px;
	background: #FFF;
	color: #1B2431;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 700;
	font-size: 11px;
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear
}
.app .app-header .app-header-navigation nav>ul>li ul>li>a span {
	display: none
}
.app .app-header .app-header-navigation nav>ul>li ul>li:hover>a {
	background: #F5F5F5;
	color: #0F9DEA
}
.app .app-header .app-header-navigation nav>ul>li:hover>a {
	color: #0F9DEA
}
.app .app-header .app-header-navigation nav>ul>li:hover>.app-header-navigation-megamenu, .app .app-header .app-header-navigation nav>ul>li:hover>ul {
	display: block
}
.app .app-header .app-header-navigation.app-header-navigation-hover nav>ul>li>a {
	background: #FFF;
	color: #2D3349;
	border-bottom: 1px solid #DBE0E4;
	padding-bottom: 19px
}
.app .app-header .app-header-navigation.app-header-navigation-hover nav>ul>li>a:hover {
	background: #F5F5F5;
	color: #1a1d29
}
.app .app-header .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a {
	color: #2D3349
}
.app .app-header .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a:hover {
	color: #1a1d29
}
.app .app-header .app-header-search {
	float: left;
	padding: 10px 0;
	position: relative
}
.app .app-header .app-header-search>input {
	border: 1px solid transparent;
	float: left;
	width: 40px;
	padding: 0 0 0 40px;
	line-height: 38px;
	overflow: hidden;
	-webkit-transition: width .1s linear;
	-moz-transition: width .1s linear;
	-ms-transition: width .1s linear;
	-o-transition: width .1s linear;
	transition: width .1s linear;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px
}
.app .app-header .app-header-search>input:focus {
	width: 220px
}
.app .app-header .app-header-search:after {
	position: absolute;
	left: 0;
	top: 10px;
	width: 40px;
	font-size: 20px;
	height: 40px;
	line-height: 40px;
	content: "\e853";
	font-family: linearicons;
	text-align: center;
	cursor: pointer
}
.app .app-header .app-header-search.lg, .app .app-header .app-header-search.lg>input, .app .app-header .app-header-search.lg>input:focus {
	width: 100%
}
.app .app-header .container.container-boxed {
	margin: 0 auto
}
.app .app-header .container.container-boxed .app-header-logo {
	background-position-x: -15px
}
.app .app-header .container.container-boxed .app-header-buttons.pull-right {
	padding-right: 0
}
.app .app-header.app-header-design-blue .app-header-search, .app .app-header.app-header-design-dark .app-header-search, .app .app-header.app-header-design-default .app-header-search, .app .app-header.app-header-design-lightblue .app-header-search, .app .app-header.app-header-design-orange .app-header-search {
	padding: 9px 0
}
/*.app .app-header.app-header-design-default {
	background: #FFF;
}*/
.app .app-header.app-header-design-default .app-header-logo {
	background-color: #272c40;
	background-image: url(../img/logo-dark.png)
}
.app .app-header.app-header-design-default .app-header-logo:hover {
	background-color: #252a3c
}
.app .app-header.app-header-design-default .app-header-logo.app-header-logo-light {
	background-color: #FFF
}
.app .app-header.app-header-design-default .app-header-logo.app-header-logo-light:hover {
	background-color: #fcfcfc
}
.app .app-header.app-header-design-default .app-header-title .title, .app .app-header.app-header-design-default .app-header-title h1, .app .app-header.app-header-design-default .app-header-title h2, .app .app-header.app-header-design-default .app-header-title h3, .app .app-header.app-header-design-default .app-header-title h4, .app .app-header.app-header-design-default .app-header-title h5, .app .app-header.app-header-design-default .app-header-title h6 {
	color: #454545
}
.app .app-header.app-header-design-default .app-header-buttons.app-header-buttons-separated li::after {
	background: #DBE0E4
}
.app .app-header.app-header-design-default .app-header-buttons .btn.btn-default, .app .app-header.app-header-design-default .app-header-buttons .btn.btn-link {
	background: #f5f5f5;
	color: #454545;
	border-color: #ebebeb
}
.app .app-header.app-header-design-default .app-header-buttons .btn.btn-default .fa, .app .app-header.app-header-design-default .app-header-buttons .btn.btn-default span[class^=icon-], .app .app-header.app-header-design-default .app-header-buttons .btn.btn-link .fa, .app .app-header.app-header-design-default .app-header-buttons .btn.btn-link span[class^=icon-] {
	color: #454545
}
.app .app-header.app-header-design-default .app-header-buttons .btn.btn-default:hover, .app .app-header.app-header-design-default .app-header-buttons .btn.btn-link:hover {
	background: #f2f2f2;
	border-color: #e6e6e6
}
.app .app-header.app-header-design-default .app-header-buttons>li>.contact.contact-bordered:after {
	border-color: #f2f2f2
}
.app .app-header.app-header-design-default .app-header-search>input {
	background: #f5f5f5;
	color: #454545;
	border-color: #ebebeb
}
.app .app-header.app-header-design-default .app-header-search>input:focus {
	border: 1px solid #DBE0E4;
	background: #fcfcfc
}
.app .app-header.app-header-design-default .app-header-search:hover>input {
	background: #f2f2f2;
	border-color: #e6e6e6
}
.app .app-header.app-header-design-default .app-header-search:after {
	color: #454545
}
.app .app-header.app-header-design-default .app-header-navigation.app-header-navigation-hover nav>ul>li>a {
	background: #FFF;
	border-bottom: 1px solid #DBE0E4;
	color: #454545
}
.app .app-header.app-header-design-default .app-header-navigation.app-header-navigation-hover nav>ul>li>a:hover {
	background: #f2f2f2
}
.app .app-header.app-header-design-default .app-header-navigation.app-header-navigation-hover nav>ul>li ul {
	border: 1px solid #DBE0E4
}
.app .app-header.app-header-design-default .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a {
	background: #FFF;
	color: #454545
}
.app .app-header.app-header-design-default .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a:hover {
	background: #f2f2f2
}
.app .app-header.app-header-design-dark {
	background: #272c40;
	border-bottom: 1px solid #292f43
}
.app .app-header.app-header-design-dark .app-header-logo {
	background-color: #272c40;
	background-image: url(../img/logo.png)
}
.app .app-header.app-header-design-dark .app-header-logo:hover {
	background-color: #252a3d
}
.app .app-header.app-header-design-dark .app-header-logo.app-header-logo-light {
	background-color: #272c40
}
.app .app-header.app-header-design-dark .app-header-logo.app-header-logo-light:hover {
	background-color: #252a3d
}
.app .app-header.app-header-design-dark .app-header-title .title, .app .app-header.app-header-design-dark .app-header-title h1, .app .app-header.app-header-design-dark .app-header-title h2, .app .app-header.app-header-design-dark .app-header-title h3, .app .app-header.app-header-design-dark .app-header-title h4, .app .app-header.app-header-design-dark .app-header-title h5, .app .app-header.app-header-design-dark .app-header-title h6 {
	color: #7F8FA4
}
.app .app-header.app-header-design-dark .app-header-buttons.app-header-buttons-separated li::after {
	background: #292f43
}
.app .app-header.app-header-design-dark .app-header-buttons .btn.btn-default, .app .app-header.app-header-design-dark .app-header-buttons .btn.btn-link {
	background: #1f2333;
	color: #7F8FA4;
	border-color: #181b27
}
.app .app-header.app-header-design-dark .app-header-buttons .btn.btn-default .fa, .app .app-header.app-header-design-dark .app-header-buttons .btn.btn-default span[class^=icon-], .app .app-header.app-header-design-dark .app-header-buttons .btn.btn-link .fa, .app .app-header.app-header-design-dark .app-header-buttons .btn.btn-link span[class^=icon-] {
	color: #7F8FA4
}
.app .app-header.app-header-design-dark .app-header-buttons .btn.btn-default:hover, .app .app-header.app-header-design-dark .app-header-buttons .btn.btn-link:hover {
	background: #1d2130;
	border-color: #141620
}
.app .app-header.app-header-design-dark .app-header-buttons>li>.contact.contact-bordered:after {
	border-color: #1d2130
}
.app .app-header.app-header-design-dark .app-header-search>input {
	background: #1f2333;
	color: #7F8FA4;
	border-color: #181b27
}
.app .app-header.app-header-design-dark .app-header-search>input:focus {
	border: 1px solid #292f43;
	background: #252a3d
}
.app .app-header.app-header-design-dark .app-header-search:hover>input {
	background: #1d2130;
	border-color: #141620
}
.app .app-header.app-header-design-dark .app-header-search:after {
	color: #7F8FA4
}
.app .app-header.app-header-design-dark .app-header-navigation.app-header-navigation-hover nav>ul>li>a {
	background: #272c40;
	border-bottom: 1px solid #292f43;
	color: #7F8FA4
}
.app .app-header.app-header-design-dark .app-header-navigation.app-header-navigation-hover nav>ul>li>a:hover {
	background: #1d2130
}
.app .app-header.app-header-design-dark .app-header-navigation.app-header-navigation-hover nav>ul>li ul {
	border: 1px solid #292f43
}
.app .app-header.app-header-design-dark .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a {
	background: #272c40;
	color: #7F8FA4
}
.app .app-header.app-header-design-dark .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a:hover {
	background: #1d2130
}
.app .app-header.app-header-design-lightblue {
	background: #f0f4f8;
	border-bottom: 1px solid #e1eaf3
}
.app .app-header.app-header-design-lightblue .app-header-logo {
	background-color: #f0f4f8;
	background-image: url(../img/logo-dark.png)
}
.app .app-header.app-header-design-lightblue .app-header-logo.app-header-logo-light, .app .app-header.app-header-design-lightblue .app-header-logo:hover {
	background-color: #edf1f6
}
.app .app-header.app-header-design-lightblue .app-header-logo.app-header-logo-light:hover {
	background-color: #e9eff4
}
.app .app-header.app-header-design-lightblue .app-header-title .title, .app .app-header.app-header-design-lightblue .app-header-title h1, .app .app-header.app-header-design-lightblue .app-header-title h2, .app .app-header.app-header-design-lightblue .app-header-title h3, .app .app-header.app-header-design-lightblue .app-header-title h4, .app .app-header.app-header-design-lightblue .app-header-title h5, .app .app-header.app-header-design-lightblue .app-header-title h6 {
	color: #659bff
}
.app .app-header.app-header-design-lightblue .app-header-buttons.app-header-buttons-separated li::after {
	background: #e1eaf3
}
.app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-default, .app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-link {
	background: #e3eaf1;
	color: #659bff;
	border-color: #d5e0ea
}
.app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-default .fa, .app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-default span[class^=icon-], .app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-link .fa, .app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-link span[class^=icon-] {
	color: #659bff
}
.app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-default:hover, .app .app-header.app-header-design-lightblue .app-header-buttons .btn.btn-link:hover {
	background: #dfe7ef;
	border-color: #cedae7
}
.app .app-header.app-header-design-lightblue .app-header-buttons>li>.contact.contact-bordered:after {
	border-color: #dfe7ef
}
.app .app-header.app-header-design-lightblue .app-header-search>input {
	background: #e3eaf1;
	color: #659bff;
	border-color: #d5e0ea
}
.app .app-header.app-header-design-lightblue .app-header-search>input:focus {
	border: 1px solid #e1eaf3;
	background: #edf1f6
}
.app .app-header.app-header-design-lightblue .app-header-search:hover>input {
	background: #dfe7ef;
	border-color: #cedae7
}
.app .app-header.app-header-design-lightblue .app-header-search:after {
	color: #659bff
}
.app .app-header.app-header-design-lightblue .app-header-navigation.app-header-navigation-hover nav>ul>li>a {
	background: #f0f4f8;
	border-bottom: 1px solid #e1eaf3;
	color: #659bff
}
.app .app-header.app-header-design-lightblue .app-header-navigation.app-header-navigation-hover nav>ul>li>a:hover {
	background: #dfe7ef
}
.app .app-header.app-header-design-lightblue .app-header-navigation.app-header-navigation-hover nav>ul>li ul {
	border: 1px solid #e1eaf3
}
.app .app-header.app-header-design-lightblue .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a {
	background: #f0f4f8;
	color: #659bff
}
.app .app-header.app-header-design-lightblue .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a:hover {
	background: #dfe7ef
}
.app .app-header.app-header-design-orange {
	background: #f7c36e;
	border-bottom: 1px solid #f7c36e
}
.app .app-header.app-header-design-orange .app-header-logo {
	background-color: #f7c36e;
	background-image: url(../img/logo.png)
}
.app .app-header.app-header-design-orange .app-header-logo:hover {
	background-color: #f7c169
}
.app .app-header.app-header-design-orange .app-header-logo.app-header-logo-light {
	background-color: #f7c36e
}
.app .app-header.app-header-design-orange .app-header-logo.app-header-logo-light:hover {
	background-color: #f7c169
}
.app .app-header.app-header-design-orange .app-header-title .title, .app .app-header.app-header-design-orange .app-header-title h1, .app .app-header.app-header-design-orange .app-header-title h2, .app .app-header.app-header-design-orange .app-header-title h3, .app .app-header.app-header-design-orange .app-header-title h4, .app .app-header.app-header-design-orange .app-header-title h5, .app .app-header.app-header-design-orange .app-header-title h6 {
	color: #443853
}
.app .app-header.app-header-design-orange .app-header-buttons.app-header-buttons-separated li::after {
	background: #f7c36e
}
.app .app-header.app-header-design-orange .app-header-buttons .btn.btn-default, .app .app-header.app-header-design-orange .app-header-buttons .btn.btn-link {
	background: #f6bb5b;
	color: #443853;
	border-color: #f5b347
}
.app .app-header.app-header-design-orange .app-header-buttons .btn.btn-default .fa, .app .app-header.app-header-design-orange .app-header-buttons .btn.btn-default span[class^=icon-], .app .app-header.app-header-design-orange .app-header-buttons .btn.btn-link .fa, .app .app-header.app-header-design-orange .app-header-buttons .btn.btn-link span[class^=icon-] {
	color: #443853
}
.app .app-header.app-header-design-orange .app-header-buttons .btn.btn-default:hover, .app .app-header.app-header-design-orange .app-header-buttons .btn.btn-link:hover {
	background: #f6b956;
	border-color: #f4af3e
}
.app .app-header.app-header-design-orange .app-header-buttons>li>.contact.contact-bordered:after {
	border-color: #f6b956
}
.app .app-header.app-header-design-orange .app-header-search>input {
	background: #f6bb5b;
	color: #443853;
	border-color: #f5b347
}
.app .app-header.app-header-design-orange .app-header-search>input:focus {
	border: 1px solid #f7c36e;
	background: #f7c169
}
.app .app-header.app-header-design-orange .app-header-search:hover>input {
	background: #f6b956;
	border-color: #f4af3e
}
.app .app-header.app-header-design-orange .app-header-search:after {
	color: #443853
}
.app .app-header.app-header-design-orange .app-header-navigation.app-header-navigation-hover nav>ul>li>a {
	background: #f7c36e;
	border-bottom: 1px solid #f7c36e;
	color: #443853
}
.app .app-header.app-header-design-orange .app-header-navigation.app-header-navigation-hover nav>ul>li>a:hover {
	background: #f6b956
}
.app .app-header.app-header-design-orange .app-header-navigation.app-header-navigation-hover nav>ul>li ul {
	border: 1px solid #f7c36e
}
.app .app-header.app-header-design-orange .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a {
	background: #f7c36e;
	color: #443853
}
.app .app-header.app-header-design-orange .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a:hover {
	background: #f6b956
}
.app .app-header.app-header-design-blue {
	background: #225280;
	border-bottom: 1px solid #225280
}
.app .app-header.app-header-design-blue .app-header-logo {
	background-color: #225280;
	background-image: url(../img/logo.png)
}
.app .app-header.app-header-design-blue .app-header-logo:hover {
	background-color: #214f7c
}
.app .app-header.app-header-design-blue .app-header-logo.app-header-logo-light {
	background-color: #225280
}
.app .app-header.app-header-design-blue .app-header-logo.app-header-logo-light:hover {
	background-color: #214f7c
}
.app .app-header.app-header-design-blue .app-header-title .title, .app .app-header.app-header-design-blue .app-header-title h1, .app .app-header.app-header-design-blue .app-header-title h2, .app .app-header.app-header-design-blue .app-header-title h3, .app .app-header.app-header-design-blue .app-header-title h4, .app .app-header.app-header-design-blue .app-header-title h5, .app .app-header.app-header-design-blue .app-header-title h6 {
	color: #FFF
}
.app .app-header.app-header-design-blue .app-header-buttons.app-header-buttons-separated li::after {
	background: #225280
}
.app .app-header.app-header-design-blue .app-header-buttons .btn.btn-default, .app .app-header.app-header-design-blue .app-header-buttons .btn.btn-link {
	background: #1e4870;
	color: #FFF;
	border-color: #193d60
}
.app .app-header.app-header-design-blue .app-header-buttons .btn.btn-default .fa, .app .app-header.app-header-design-blue .app-header-buttons .btn.btn-default span[class^=icon-], .app .app-header.app-header-design-blue .app-header-buttons .btn.btn-link .fa, .app .app-header.app-header-design-blue .app-header-buttons .btn.btn-link span[class^=icon-] {
	color: #FFF
}
.app .app-header.app-header-design-blue .app-header-buttons .btn.btn-default:hover, .app .app-header.app-header-design-blue .app-header-buttons .btn.btn-link:hover {
	background: #1d456c;
	border-color: #173858
}
.app .app-header.app-header-design-blue .app-header-buttons>li>.contact.contact-bordered:after {
	border-color: #1d456c
}
.app .app-header.app-header-design-blue .app-header-search>input {
	background: #1e4870;
	color: #FFF;
	border-color: #193d60
}
.app .app-header.app-header-design-blue .app-header-search>input:focus {
	border: 1px solid #225280;
	background: #214f7c
}
.app .app-header.app-header-design-blue .app-header-search:hover>input {
	background: #1d456c;
	border-color: #173858
}
.app .app-header.app-header-design-blue .app-header-search:after {
	color: #FFF
}
.app .app-header.app-header-design-blue .app-header-navigation.app-header-navigation-hover nav>ul>li>a {
	background: #225280;
	border-bottom: 1px solid #225280;
	color: #FFF
}
.app .app-header.app-header-design-blue .app-header-navigation.app-header-navigation-hover nav>ul>li>a:hover {
	background: #1d456c
}
.app .app-header.app-header-design-blue .app-header-navigation.app-header-navigation-hover nav>ul>li ul {
	border: 1px solid #225280
}
.app .app-header.app-header-design-blue .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a {
	background: #225280;
	color: #FFF
}
.app .app-header.app-header-design-blue .app-header-navigation.app-header-navigation-hover nav>ul>li ul>li>a:hover {
	background: #1d456c
}
@media (max-width:992px) {
.app .app-container.app-header-inside-content {
	padding-top: 60px
}
.app .app-container.app-header-inside-content .app-content .app-header {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 100
}
.app .app-header {
	height: auto
}
.app .app-header .app-header-logo {
	background: url(../img/logo.png) left top no-repeat
}
.app .app-header .app-header-logo.app-header-logo-light {
	background: url(../img/logo-dark-sm.png) left top no-repeat
}
.app .app-header .container.container-boxed {
	padding-left: 0
}
.app .app-header .app-header-navigation {
	display: none;
	float: left;
	width: 100%;
	clear: both
}
.app .app-header .app-header-navigation nav, .app .app-header .app-header-navigation nav>ul, .app .app-header .app-header-navigation nav>ul>li {
	width: 100%
}
.app .app-header .app-header-navigation nav>ul>li>a {
	width: 100%;
	border-top: 1px solid #f8f9fa;
	padding: 15px
}
.app .app-header .app-header-navigation nav>ul>li .app-header-navigation-megamenu {
	position: relative;
	top: auto;
	float: left;
	border: 0;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none
}
.app .app-header .app-header-navigation nav>ul>li .app-header-navigation-megamenu div[class^=col-md] {
	margin-bottom: 0
}
.app .app-header .app-header-navigation nav>ul>li ul {
	position: relative;
	top: auto;
	float: left;
	width: 100%;
	border: 0;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none
}
.app .app-header .app-header-navigation nav>ul>li ul>li {
	width: 100%
}
.app .app-header .app-header-navigation nav>ul>li ul>li>a {
	padding-left: 30px
}
.app .app-header .app-header-navigation nav>ul>li:hover>.app-header-navigation-megamenu, .app .app-header .app-header-navigation nav>ul>li:hover>ul {
	display: none
}
.app .app-header .app-header-navigation nav>ul>li.open>.app-header-navigation-megamenu, .app .app-header .app-header-navigation nav>ul>li.open>ul, .app .app-header .app-header-navigation.show {
	display: block
}
.app .app-header .app-header-search>input:focus {
	width: 100px
}
.app .app-header .app-header-buttons .contact {
	padding-left: 40px
}
.app .app-header .app-header-buttons .contact>.contact-container {
	width: 0;
	margin-right: 0!important;
	height: 40px;
	overflow: hidden
}
.app .app-header .app-header-buttons>li, .app .app-header .app-header-buttons>li .dropdown {
	position: initial
}
.app .app-header .app-header-buttons>li .dropdown .dropdown-menu {
	width: 96%;
	right: 2%
}

}
.app .app-footer.app-footer-blue .label-icon, .app .app-footer.app-footer-dark .label-icon, .app .app-footer.app-footer-default .label-icon, .app .app-footer.app-footer-light .label-icon, .app .app-footer.app-footer-purple .label-icon {
	margin-bottom: 5px
}
.app .app-footer {
	float: left;
	width: 100%;
	position: relative
}
.app .app-footer.app-footer-default {
	background: #252a3c;
	color: #80909A;
	font-size: 13px
}
.app .app-footer.app-footer-default a {
	color: #9ca9b1
}
.app .app-footer.app-footer-default .btn.btn-primary {
	background: #1a1d29;
	border-color: #1a1d29;
	color: #80909A
}
.app .app-footer.app-footer-default .title {
	font-size: 12px;
	color: #C5D1CD
}
.app .app-footer.app-footer-default .form-control {
	background: #1d2130;
	border-color: #1b1f2d
}
.app .app-footer.app-footer-default .app-footer-line.darken {
	background: #1b1f2d
}
.app .app-footer.app-footer-default .label-icon.label-icon-footer {
	border: 1px solid #80909A;
	color: #80909A
}
.app .app-footer.app-footer-default .label-icon.label-icon-footer.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(128,144,154,.15);
	-moz-box-shadow: 0 0 0 3px rgba(128,144,154,.15);
	box-shadow: 0 0 0 3px rgba(128,144,154,.15)
}
.app .app-footer.app-footer-default .label-icon.label-icon-footer[href]:hover {
	background: 0 0;
	border-color: #667781;
	color: #667781
}
.app .app-footer.app-footer-default:after {
	background: #212636
}
.app .app-footer.app-footer-light {
	background: #FFF;
	color: #555;
	font-size: 13px
}
.app .app-footer.app-footer-light a {
	color: #666
}
.app .app-footer.app-footer-light .btn.btn-primary {
	background: #f0f0f0;
	border-color: #f0f0f0;
	color: #555
}
.app .app-footer.app-footer-light .title {
	font-size: 12px;
	color: #222
}
.app .app-footer.app-footer-light .form-control {
	background: #f5f5f5;
	border-color: #f2f2f2
}
.app .app-footer.app-footer-light .app-footer-line.darken {
	background: #f2f2f2
}
.app .app-footer.app-footer-light .label-icon.label-icon-footer {
	border: 1px solid #555;
	color: #555
}
.app .app-footer.app-footer-light .label-icon.label-icon-footer.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(85,85,85,.15);
	-moz-box-shadow: 0 0 0 3px rgba(85,85,85,.15);
	box-shadow: 0 0 0 3px rgba(85,85,85,.15)
}
.app .app-footer.app-footer-light .label-icon.label-icon-footer[href]:hover {
	background: 0 0;
	border-color: #3b3b3b;
	color: #3b3b3b
}
.app .app-footer.app-footer-light:after {
	background: #fafafa
}
.app .app-footer.app-footer-dark {
	background: #111;
	color: #666;
	font-size: 13px
}
.app .app-footer.app-footer-dark a {
	color: #999
}
.app .app-footer.app-footer-dark .btn.btn-primary {
	background: #020202;
	border-color: #020202;
	color: #666
}
.app .app-footer.app-footer-dark .title {
	font-size: 12px;
	color: #AAA
}
.app .app-footer.app-footer-dark .form-control {
	background: #070707;
	border-color: #040404
}
.app .app-footer.app-footer-dark .app-footer-line.darken {
	background: #040404
}
.app .app-footer.app-footer-dark .label-icon.label-icon-footer {
	border: 1px solid #666;
	color: #666
}
.app .app-footer.app-footer-dark .label-icon.label-icon-footer.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(102,102,102,.15);
	-moz-box-shadow: 0 0 0 3px rgba(102,102,102,.15);
	box-shadow: 0 0 0 3px rgba(102,102,102,.15)
}
.app .app-footer.app-footer-dark .label-icon.label-icon-footer[href]:hover {
	background: 0 0;
	border-color: #4d4d4d;
	color: #4d4d4d
}
.app .app-footer.app-footer-dark:after {
	background: #0c0c0c
}
.app .app-footer.app-footer-purple {
	background: #2e2639;
	color: #F0F0F0;
	font-size: 13px
}
.app .app-footer.app-footer-purple a {
	color: #F5F5F5
}
.app .app-footer.app-footer-purple .btn.btn-primary {
	background: #1f1a26;
	border-color: #1f1a26;
	color: #F0F0F0
}
.app .app-footer.app-footer-purple .title {
	font-size: 12px;
	color: #f8c36e
}
.app .app-footer.app-footer-purple .form-control {
	background: #241e2c;
	border-color: #221c29
}
.app .app-footer.app-footer-purple .app-footer-line.darken {
	background: #221c29
}
.app .app-footer.app-footer-purple .label-icon.label-icon-footer {
	border: 1px solid #F0F0F0;
	color: #F0F0F0
}
.app .app-footer.app-footer-purple .label-icon.label-icon-footer.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(240,240,240,.15);
	-moz-box-shadow: 0 0 0 3px rgba(240,240,240,.15);
	box-shadow: 0 0 0 3px rgba(240,240,240,.15)
}
.app .app-footer.app-footer-purple .label-icon.label-icon-footer[href]:hover {
	background: 0 0;
	border-color: #d7d7d7;
	color: #d7d7d7
}
.app .app-footer.app-footer-purple:after {
	background: #292233
}
.app .app-footer.app-footer-blue {
	background: #1d456c;
	color: #E5E5E5;
	font-size: 13px
}
.app .app-footer.app-footer-blue a {
	color: #E5E5E5
}
.app .app-footer.app-footer-blue .btn.btn-primary {
	background: #163654;
	border-color: #163654;
	color: #E5E5E5
}
.app .app-footer.app-footer-blue .title {
	font-size: 12px;
	color: #FFF
}
.app .app-footer.app-footer-blue .form-control {
	background: #183b5c;
	border-color: #173858
}
.app .app-footer.app-footer-blue .app-footer-line.darken {
	background: #173858
}
.app .app-footer.app-footer-blue .label-icon.label-icon-footer {
	border: 1px solid #E5E5E5;
	color: #E5E5E5
}
.app .app-footer.app-footer-blue .label-icon.label-icon-footer.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(229,229,229,.15);
	-moz-box-shadow: 0 0 0 3px rgba(229,229,229,.15);
	box-shadow: 0 0 0 3px rgba(229,229,229,.15)
}
.app .app-footer.app-footer-blue .label-icon.label-icon-footer[href]:hover {
	background: 0 0;
	border-color: #ccc;
	color: #ccc
}
.app .app-footer.app-footer-blue:after {
	background: #1b4064
}
.app .app-footer ul {
	margin-bottom: 0
}
.app .app-footer ul.list-unstyled li {
	margin-bottom: 5px
}
.app .app-footer .copyright {
	float: left;
	line-height: 20px
}
.app .app-footer .title {
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 15px;
	margin-top: 30px
}
.app .app-footer .title img {
	float: left;
	margin-right: 10px
}
.app .app-footer .title span[class^=icon-] {
	font-size: 20px;
	float: left;
	margin-right: 10px;
	line-height: 26px
}
.app .app-footer .title:first-child {
	margin-top: 0
}
.app .app-footer .app-footer-line {
	float: left;
	width: 100%;
	padding: 10px
}
.app .app-footer .app-footer-line.extended {
	padding: 30px
}
.app .app-footer .app-footer-articles {
	margin-bottom: 20px
}
.app .app-footer .app-footer-articles>div:first-child {
	padding-right: 0
}
.app .app-footer .app-footer-articles img {
	margin-top: 5px
}
.app .app-footer .app-footer-articles:last-child {
	margin-bottom: 0
}
.app .app-footer .container.container-boxed {
	margin: 0 auto
}
.app .app-footer:after {
	position: absolute;
	left: 0;
	top: 0;
	height: 1px;
	width: 100%;
	content: " "
}
@media (max-width:992px) {
.app .app-footer .app-footer-line {
	text-align: center
}
.app .app-footer .app-footer-line.extended {
	text-align: left
}
.app .app-footer .app-footer-line .copyright {
	margin-bottom: 10px
}
}
.app-navigation, .app-navigation.app-navigation-style-default {
}
.app-navigation.app-navigation-style-default .app-navigation-logo {
	background: url(../img/logo.png) left top no-repeat #272c40
}
.app-navigation.app-navigation-style-default .app-navigation-logo .app-navigation-logo-button {
	background: #252a3c;
	color: #C5D1CD
}
.app-navigation.app-navigation-style-default .app-navigation-logo .app-navigation-logo-button:hover {
	background: #232839
}
.app-navigation.app-navigation-style-default .app-navigation-logo:hover {
	background: url(../img/logo.png) left top no-repeat #212636
}
.app-navigation.app-navigation-style-default nav>ul>li.openable>a:after {
	color: #55698A
}
.app-navigation.app-navigation-style-default nav>ul>li.openable.open>a {
	background: #272c40
}
.app-navigation.app-navigation-style-default nav>ul>li {
	border-bottom: 1px solid #292f43
}
.app-navigation.app-navigation-style-default nav>ul>li a {
	color: #C5D1CD;
	font-size: 11px;
	font-weight: 600;
	text-shadow: 1px 2px rgba(0,0,0,.2)
}
.app-navigation.app-navigation-style-default nav>ul>li a span {
	color: #55698A
}
.app-navigation.app-navigation-style-default nav>ul>li a.active, .app-navigation.app-navigation-style-default nav>ul>li a:hover {
	color: #FFF;
	background: #272c40
}
.app-navigation.app-navigation-style-default nav>ul>li a.active span, .app-navigation.app-navigation-style-default nav>ul>li a.active span.nav-icon-hexa {
	color: #e69c0f
}
.app-navigation.app-navigation-style-default nav>ul>li ul>li>a {
	background: #252a3c
}
.app-navigation.app-navigation-style-default nav>ul>li ul>li.open>a, .app-navigation.app-navigation-style-default nav>ul>li ul>li>a.active, .app-navigation.app-navigation-style-default nav>ul>li ul>li>a:hover {
	background: #232839
}
.app-navigation.app-navigation-style-default nav>ul>li ul>li.open>ul>li>a {
	background: #212636
}
.app-navigation.app-navigation-style-default nav>ul>li ul>li.open>ul>li>a.active, .app-navigation.app-navigation-style-default nav>ul>li ul>li.open>ul>li>a:hover {
	background: #1f2433
}
.app-navigation.app-navigation-style-default nav>ul>li.title {
	font-size: 11px;
	color: #55698A;
	text-shadow: 1px 2px rgba(0,0,0,.2)
}
.app-navigation.app-navigation-style-default.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-sm.png)
}
.app-navigation.app-navigation-style-default.app-navigation-minimized nav>ul>li>a>span {
	color: #C5D1CD
}
/*.app-navigation.app-navigation-style-light {
	background: #FFF;
	border-right: 1px solid #DBE0E4
}
*/.app-navigation.app-navigation-style-light .app-navigation-logo {
	background: url(../img/logo-dark.png) left top no-repeat #FFF
}
.app-navigation.app-navigation-style-light .app-navigation-logo .app-navigation-logo-button {
	background: #f5f5f5;
	color: #333
}
.app-navigation.app-navigation-style-light .app-navigation-logo .app-navigation-logo-button:hover {
	background: #f2f2f2
}
.app-navigation.app-navigation-style-light .app-navigation-logo:hover {
	background: url(../img/logo-dark.png) left top no-repeat #F5F5F5
}
.app-navigation.app-navigation-style-light nav>ul>li.openable>a:after {
	color: #7F8FA4
}
.app-navigation.app-navigation-style-light nav>ul>li.openable.open>a {
	background: #F2F2F2
}
.app-navigation.app-navigation-style-light nav>ul>li {
	border-bottom: 1px solid #F2F2F2
}
.app-navigation.app-navigation-style-light nav>ul>li a {
	color: #333;
	font-size: 11px;
	font-weight: 600;
	text-shadow: none
}
.app-navigation.app-navigation-style-light nav>ul>li a span {
	color: #7F8FA4
}
.app-navigation.app-navigation-style-light nav>ul>li a.active, .app-navigation.app-navigation-style-light nav>ul>li a:hover {
	color: #252525;
	background: #F2F2F2
}
.app-navigation.app-navigation-style-light nav>ul>li a.active span, .app-navigation.app-navigation-style-light nav>ul>li a.active span.nav-icon-hexa {
	color: #7F8FA4
}
.app-navigation.app-navigation-style-light nav>ul>li ul>li>a {
	background: #f5f5f5
}
.app-navigation.app-navigation-style-light nav>ul>li ul>li.open>a, .app-navigation.app-navigation-style-light nav>ul>li ul>li>a.active, .app-navigation.app-navigation-style-light nav>ul>li ul>li>a:hover {
	background: #f2f2f2
}
.app-navigation.app-navigation-style-light nav>ul>li ul>li.open>ul>li>a {
	background: #f0f0f0
}
.app-navigation.app-navigation-style-light nav>ul>li ul>li.open>ul>li>a.active, .app-navigation.app-navigation-style-light nav>ul>li ul>li.open>ul>li>a:hover {
	background: #ededed
}
.app-navigation.app-navigation-style-light nav>ul>li.title {
	font-size: 11px;
	color: #AAA;
	text-shadow: none
}
.app-navigation.app-navigation-style-light.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-dark-sm.png)
}
.app-navigation.app-navigation-style-light.app-navigation-minimized nav>ul>li>a>span {
	color: #333
}
.app-navigation.app-navigation-style-light .app-navigation-logo {
	border-bottom: 1px solid #DBE0E4
}
.app-navigation.app-navigation-style-lightblue {
	background: #f7f9fb;
	border-right: 1px solid #e1eaf3
}
.app-navigation.app-navigation-style-lightblue .app-navigation-logo {
	background: url(../img/logo-dark.png) left top no-repeat #f0f4f8;
	border-bottom: 1px solid #e1eaf3
}
.app-navigation.app-navigation-style-lightblue .app-navigation-logo .app-navigation-logo-button {
	background: #eaf0f6;
	color: #496787
}
.app-navigation.app-navigation-style-lightblue .app-navigation-logo .app-navigation-logo-button:hover {
	background: #e6edf4
}
.app-navigation.app-navigation-style-lightblue .app-navigation-logo:hover {
	background: url(../img/logo-dark.png) left top no-repeat #edf1f6
}
.app-navigation.app-navigation-style-lightblue nav>ul>li.openable>a:after {
	color: #659bff
}
.app-navigation.app-navigation-style-lightblue nav>ul>li.openable.open>a {
	background: #edf2f7
}
.app-navigation.app-navigation-style-lightblue nav>ul>li {
	border-bottom: 1px solid #e1eaf3
}
.app-navigation.app-navigation-style-lightblue nav>ul>li a {
	background: #f8fafc;
	color: #496787;
	font-size: 11px;
	font-weight: 600;
	text-shadow: none
}
.app-navigation.app-navigation-style-lightblue nav>ul>li a span, .app-navigation.app-navigation-style-lightblue nav>ul>li a.active span, .app-navigation.app-navigation-style-lightblue nav>ul>li a.active span.nav-icon-hexa {
	color: #659bff
}
.app-navigation.app-navigation-style-lightblue nav>ul>li a.active, .app-navigation.app-navigation-style-lightblue nav>ul>li a:hover {
	color: #659bff;
	background: #edf2f7
}
.app-navigation.app-navigation-style-lightblue nav>ul>li ul>li>a {
	background: #eaf0f6
}
.app-navigation.app-navigation-style-lightblue nav>ul>li ul>li.open>a, .app-navigation.app-navigation-style-lightblue nav>ul>li ul>li>a.active, .app-navigation.app-navigation-style-lightblue nav>ul>li ul>li>a:hover {
	background: #e6edf4
}
.app-navigation.app-navigation-style-lightblue nav>ul>li ul>li.open>ul>li>a {
	background: #e3ebf3
}
.app-navigation.app-navigation-style-lightblue nav>ul>li ul>li.open>ul>li>a.active, .app-navigation.app-navigation-style-lightblue nav>ul>li ul>li.open>ul>li>a:hover {
	background: #dfe8f1
}
.app-navigation.app-navigation-style-lightblue nav>ul>li.title {
	font-size: 11px;
	color: #99a9bb;
	text-shadow: none
}
.app-navigation.app-navigation-style-lightblue.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-dark-sm.png)
}
.app-navigation.app-navigation-style-lightblue.app-navigation-minimized nav>ul>li>a>span {
	color: #496787
}
.app-navigation.app-navigation-style-purple {
	background: #3b3048
}
.app-navigation.app-navigation-style-purple .app-navigation-logo {
	background: url(../img/logo-dark.png) left top no-repeat #f7c36e;
	border-bottom: 1px solid #3b3048
}
.app-navigation.app-navigation-style-purple .app-navigation-logo .app-navigation-logo-button {
	background: #3a3047;
	color: #edeef4
}
.app-navigation.app-navigation-style-purple .app-navigation-logo .app-navigation-logo-button:hover {
	background: #382e44
}
.app-navigation.app-navigation-style-purple .app-navigation-logo:hover {
	background: url(../img/logo-dark.png) left top no-repeat #f6bf64
}
.app-navigation.app-navigation-style-purple nav>ul>li.openable>a:after {
	color: #f8c36e
}
.app-navigation.app-navigation-style-purple nav>ul>li.openable.open>a {
	background: #3d324a
}
.app-navigation.app-navigation-style-purple nav>ul>li {
	border-bottom: 1px solid #3b3048
}
.app-navigation.app-navigation-style-purple nav>ul>li a {
	background: #443853;
	color: #edeef4;
	font-size: 11px;
	font-weight: 600;
	text-shadow: none
}
.app-navigation.app-navigation-style-purple nav>ul>li a span {
	color: #f8c36e
}
.app-navigation.app-navigation-style-purple nav>ul>li a.active, .app-navigation.app-navigation-style-purple nav>ul>li a:hover {
	color: #fec568;
	background: #3d324a
}
.app-navigation.app-navigation-style-purple nav>ul>li a.active span, .app-navigation.app-navigation-style-purple nav>ul>li a.active span.nav-icon-hexa {
	color: #f8c36e
}
.app-navigation.app-navigation-style-purple nav>ul>li ul>li>a {
	background: #3a3047
}
.app-navigation.app-navigation-style-purple nav>ul>li ul>li.open>a, .app-navigation.app-navigation-style-purple nav>ul>li ul>li>a.active, .app-navigation.app-navigation-style-purple nav>ul>li ul>li>a:hover {
	background: #382e44
}
.app-navigation.app-navigation-style-purple nav>ul>li ul>li.open>ul>li>a {
	background: #352c41
}
.app-navigation.app-navigation-style-purple nav>ul>li ul>li.open>ul>li>a.active, .app-navigation.app-navigation-style-purple nav>ul>li ul>li.open>ul>li>a:hover {
	background: #332a3e
}
.app-navigation.app-navigation-style-purple nav>ul>li.title {
	font-size: 11px;
	color: #9b96a6;
	text-shadow: none
}
.app-navigation.app-navigation-style-purple.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-dark-sm.png)
}
.app-navigation.app-navigation-style-purple.app-navigation-minimized nav>ul>li>a>span {
	color: #edeef4
}
.app-navigation.app-navigation-style-purple .app-navigation-logo>.app-navigation-logo-button {
	background: #f6bd5f
}
.app-navigation.app-navigation-style-purple .app-navigation-logo>.app-navigation-logo-button:hover {
	background: #f6bb5b
}
.app-navigation.app-navigation-style-blue {
	background: #225280
}
.app-navigation.app-navigation-style-blue .app-navigation-logo {
	background: url(../img/logo.png) left top no-repeat #204d78
}
.app-navigation.app-navigation-style-blue .app-navigation-logo .app-navigation-logo-button {
	background: #1d456c;
	color: #fbfcfd
}
.app-navigation.app-navigation-style-blue .app-navigation-logo .app-navigation-logo-button:hover {
	background: #1c4368
}
.app-navigation.app-navigation-style-blue .app-navigation-logo:hover {
	background: url(../img/logo.png) left top no-repeat #1f4a74
}
.app-navigation.app-navigation-style-blue nav>ul>li.openable>a:after {
	color: #478ad9
}
.app-navigation.app-navigation-style-blue nav>ul>li.openable.open>a {
	background: #1f4a74
}
.app-navigation.app-navigation-style-blue nav>ul>li {
	border-bottom: 1px solid #1e4a75
}
.app-navigation.app-navigation-style-blue nav>ul>li a {
	background: #214f7c;
	color: #fbfcfd;
	font-size: 11px;
	font-weight: 600;
	text-shadow: none
}
.app-navigation.app-navigation-style-blue nav>ul>li a span {
	color: #478ad9
}
.app-navigation.app-navigation-style-blue nav>ul>li a.active, .app-navigation.app-navigation-style-blue nav>ul>li a:hover {
	color: #fbfcfd;
	background: #1f4a74
}
.app-navigation.app-navigation-style-blue nav>ul>li a.active span, .app-navigation.app-navigation-style-blue nav>ul>li a.active span.nav-icon-hexa {
	color: #478ad9
}
.app-navigation.app-navigation-style-blue nav>ul>li ul>li>a {
	background: #1d456c
}
.app-navigation.app-navigation-style-blue nav>ul>li ul>li.open>a, .app-navigation.app-navigation-style-blue nav>ul>li ul>li>a.active, .app-navigation.app-navigation-style-blue nav>ul>li ul>li>a:hover {
	background: #1c4368
}
.app-navigation.app-navigation-style-blue nav>ul>li ul>li.open>ul>li>a {
	background: #1b4064
}
.app-navigation.app-navigation-style-blue nav>ul>li ul>li.open>ul>li>a.active, .app-navigation.app-navigation-style-blue nav>ul>li ul>li.open>ul>li>a:hover {
	background: #193d60
}
.app-navigation.app-navigation-style-blue nav>ul>li.title {
	font-size: 11px;
	color: #9099b9;
	text-shadow: none
}
.app-navigation.app-navigation-style-blue.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-sm.png)
}
.app-navigation.app-navigation-style-blue.app-navigation-minimized nav>ul>li>a>span {
	color: #fbfcfd
}
.app-navigation .app-navigation-logo {
	float: left;
	width: 100%;
	height: 60px;
	font-size: 0;
	padding-left: 15px;
	position: relative;
	-webkit-transition: background-color .1s linear;
	-moz-transition: background-color .1s linear;
	-ms-transition: background-color .1s linear;
	-o-transition: background-color .1s linear;
	transition: background-color .1s linear
}
.app-navigation .app-navigation-logo .app-navigation-logo-button {
	position: absolute;
	right: 0;
	top: 0;
	width: 60px;
	height: 59px;
	border: 0;
	background: 0 0;
	padding: 20px;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.app-navigation nav ul>li.openable>a:after, .app-navigation nav>ul>li a {
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear
}
.app-navigation .app-navigation-logo .app-navigation-logo-button .app-navigation-logo-button-alert {
	position: absolute;
	right: 5px;
	top: 5px;
	width: 16px;
	height: 16px;
	text-align: center;
	line-height: 16px;
	font-size: 10px;
	background: #F04E51;
	color: #FFF;
	-webkit-box-shadow: 0 0 0 3px rgba(240,78,81,.2);
	-moz-box-shadow: 0 0 0 3px rgba(240,78,81,.2);
	box-shadow: 0 0 0 3px rgba(240,78,81,.2);
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px
}
.app-navigation .app-navigation-logo .app-navigation-logo-button span[class^=icon-] {
	font-size: 20px
}
.app-navigation nav {
	float: left;
	width: 100%
}
.app-navigation nav ul {
	display: block;
	float: left;
	width: 100%;
	padding: 0;
	margin: 0;
	list-style: none
}
.app-navigation nav ul>li {
	float: left;
	width: 100%;
	position: relative
}
.app-navigation nav ul>li>ul {
	max-height: 0;
	overflow: hidden
}
.app-navigation nav ul>li.openable>a:after {
	position: absolute;
	top: 0;
	right: 0;
	line-height: 30px;
	padding: 10px;
	width: 40px;
	font-size: 10px;
	font-family: linearicons;
	content: "\e874";
	text-align: center;
	transition: all .1s linear
}
.app-navigation nav ul>li.openable.open>a:after {
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg)
}
.app-navigation nav ul>li.openable.open>ul {
	max-height: 1000px;
	overflow: visible
}
.app-navigation nav ul>li.openable>a span.label {
	right: 40px
}
.app-navigation nav>ul>li a {
	display: block;
	float: left;
	width: 100%;
	line-height: 30px;
	padding: 10px 30px 10px 15px;
	text-decoration: none;
	transition: all .1s linear;
	position: relative;
	text-transform: uppercase;
	white-space: nowrap
}
.app-navigation.app-navigation-custom nav>ul>li a span[class^=nav-icon], .app-navigation.app-navigation-minimized .app-navigation-logo .app-navigation-logo-button, .app-navigation.app-navigation-minimized nav>ul>li.openable>a:after, .app-navigation.app-navigation-minimized nav>ul>li.title, .app-navigation.app-navigation-minimized nav>ul>li>a span.label {
	display: none
}
.app-navigation nav>ul>li a span {
	float: left;
	margin: 4px 15px 0 0;
	font-size: 20px;
	width: 20px;
	height: 20px
}
.app-navigation nav>ul>li a span.nav-icon-hexa {
	margin: 0 10px 0 -5px;
	font-size: 11px;
	font-weight: 700;
	height: 30px;
	width: 30px;
	line-height: 30px;
	text-transform: initial;
	text-align: center;
	background: url(../img/navigation/hexa.png) left top no-repeat
}
.app-navigation nav>ul>li a span.nav-icon-circle, .app-navigation nav>ul>li a span.nav-icon-cube {
	margin: 0 10px 0 -5px;
	font-size: 11px;
	font-weight: 700;
	height: 30px;
	width: 30px;
	line-height: 30px;
	text-transform: initial;
	text-align: center;
	background: rgba(0,0,0,.1);
	border: 1px solid rgba(0,0,0,.2)
}
.app-navigation nav>ul>li a span.nav-icon-circle {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app-navigation nav>ul>li a span.label {
	position: absolute;
	float: none;
	width: auto;
	right: 10px;
	top: 15px;
	margin: 0
}
.app-navigation nav>ul>li a span.label.label-ghost {
	margin: 0
}
.app-navigation nav>ul>li ul>li>a {
	padding-left: 25px
}
.app-navigation nav>ul>li ul>li ul>li>a {
	padding-left: 45px
}
.app-navigation nav>ul>li.title {
	line-height: 30px;
	padding: 20px 0 10px 15px
}
.app-navigation.app-navigation-custom nav {
	padding: 0 10px
}
.app-navigation.app-navigation-custom nav>ul>li {
	border-bottom: 0;
	margin-bottom: 1px
}
.app-navigation.app-navigation-custom nav>ul>li.openable>ul>li:last-child>a {
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px
}
.app-navigation.app-navigation-custom nav>ul>li.openable.open>a .active, .app-navigation.app-navigation-custom nav>ul>li.openable.open>a:hover {
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0
}
.app-navigation.app-navigation-custom nav>ul>li>a {
	font-weight: 700
}
.app-navigation.app-navigation-custom nav>ul>li a {
	font-size: 11px;
	font-weight: 600;
	text-transform: none
}
.app-navigation.app-navigation-custom nav>ul>li a span.label {
	top: 10px
}
.app-navigation.app-navigation-custom nav>ul>li.title {
	padding-left: 5px;
	font-size: 10px;
	font-weight: 700;
	text-transform: uppercase
}
.app-navigation.app-navigation-custom nav>ul>li ul>li>a {
	padding-left: 20px
}
.app-navigation.app-navigation-custom nav>ul li>a {
	padding: 5px 30px 5px 10px
}
.app-navigation.app-navigation-custom nav ul>li.openable>a:after {
	padding: 5px;
	font-size: 8px;
	width: 30px
}
.app-navigation.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-sm.png)
}
.app-navigation.app-navigation-minimized nav ul>li>a {
	padding-left: 15px
}
.app-navigation.app-navigation-minimized nav ul>li.openable>a:after {
	content: "\e876"
}
.app-navigation.app-navigation-minimized nav>ul {
	-webkit-animation: nav-appear .3s 1 linear;
	-moz-animation: nav-appear .3s 1 linear;
	-ms-animation: nav-appear .3s 1 linear;
	animation: nav-appear .3s 1 linear
}
.app-navigation.app-navigation-minimized nav>ul>li>a {
	font-size: 0;
	padding: 10px;
	text-align: center
}
.app-navigation.app-navigation-minimized nav>ul>li>a span {
	width: 100%;
	font-size: 20px;
	margin-right: 0;
	margin-top: 0;
	line-height: 30px
}
.app-navigation.app-navigation-minimized nav>ul>li>a span.nav-icon-hexa {
	margin: 0 10px 0 0;
	font-size: 12px;
	font-weight: 700;
	height: 30px;
	width: 30px;
	line-height: 30px;
	text-transform: initial;
	text-align: center;
	background: url(../img/navigation/hexa.png) left top no-repeat
}
.app-navigation.app-navigation-minimized nav>ul>li>a span.nav-icon-circle, .app-navigation.app-navigation-minimized nav>ul>li>a span.nav-icon-cube {
	margin: 0 10px 0 -5px;
	font-size: 12px;
	font-weight: 700;
	height: 30px;
	width: 30px;
	line-height: 30px;
	text-transform: initial;
	text-align: center;
	background: rgba(0,0,0,.1);
	border: 1px solid rgba(0,0,0,.2)
}
.app-navigation.app-navigation-minimized nav>ul>li>a span.nav-icon-circle {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app-navigation.app-navigation-minimized nav>ul>li ul {
	position: absolute;
	left: 100%;
	width: 250px;
	z-index: 10
}
.app-navigation.app-navigation-minimized.app-navigation-custom>nav {
	padding: 0
}
.app-navigation.app-navigation-minimized.app-navigation-custom>nav>ul>li>a>span[class^=nav-icon] {
	display: block
}
.app-navigation.app-navigation-minimized.app-navigation-custom>nav>ul>li.openable.open>a .active, .app-navigation.app-navigation-minimized.app-navigation-custom>nav>ul>li.openable.open>a:hover, .app-navigation.app-navigation-minimized.app-navigation-custom>nav>ul>li.openable>ul>li:last-child>a {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.app-navigation.app-navigation-minimized.dir-right nav ul>li.openable>a:after {
	content: "\e875"
}
.app-navigation.app-navigation-minimized.dir-right nav>ul>li ul {
	left: auto;
	right: 100%
}
.app-navigation.app-navigation-minimized.dir-right nav>ul>li ul>li>a {
	padding-left: 15px
}
.app-navigation.app-navigation-minimized.app-navigation-open-hover nav ul>li.openable:hover>ul {
	max-height: 900px;
	overflow: visible
}
.app-navigation.app-navigation-minimized.mCustomScrollbar .mCustomScrollBox, .app-navigation.app-navigation-minimized.mCustomScrollbar .mCustomScrollBox .mCSB_container {
	overflow: visible
}
.app-navigation.app-navigation-fixed {
	float: none;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 10!important
}
.app-navigation.app-navigation-fixed.app-navigation-fixed-absolute {
	position: absolute
}
.app.app-sidepanel-open .app-navigation.app-navigation-fixed {
	left: -300px
}
@-webkit-keyframes nav-appear {
0%, 75% {
opacity:0
}
100% {
opacity:1
}
}
@keyframes nav-appear {
0%, 75% {
opacity:0
}
100% {
opacity:1
}
}
.app-navigation-mobile-bg, .app.app-navigation-moblie-wrapper {
	background: #2d3349;
	background: -moz-linear-gradient(top, #2d3349 0, #1b202b 100%);
	background: -webkit-linear-gradient(top, #2d3349 0, #1b202b 100%);
	background: linear-gradient(to bottom, #2d3349 0, #1b202b 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2d3349', endColorstr='#1b202b', GradientType=0)
}
.app.app-navigation-moblie-wrapper .app-container {
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear
}
.app.app-navigation-moblie-open {
	overflow: hidden;
	height: 100%
}
.app.app-navigation-moblie-open .app-container {
	width: 100%;
	height: 100%!important;
	overflow: hidden;
	-webkit-box-shadow: 0 0 75px 20px rgba(0,0,0,.5);
	-moz-box-shadow: 0 0 75px 20px rgba(0,0,0,.5);
	box-shadow: 0 0 75px 20px rgba(0,0,0,.5);
	-ms-transform: matrix(.9, 0, 0, .9, 200, 0);
	-webkit-transform: matrix(.9, 0, 0, .9, 200, 0);
	transform: matrix(.9, 0, 0, .9, 200, 0)
}
.app.app-navigation-moblie-open .app-navigation-mobile {
	opacity: 1;
	z-index: 0
}
.app .app-navigation-mobile {
	position: absolute;
	left: 0;
	top: 50px;
	width: 200px;
	opacity: 0;
	-webkit-transition: opacity .5s linear;
	-moz-transition: opacity .5s linear;
	-ms-transition: opacity .5s linear;
	-o-transition: opacity .5s linear;
	transition: opacity .5s linear
}
.app .app-navigation-mobile>ul {
	float: left;
	width: 100%;
	list-style: none
}
.app .app-navigation-mobile>ul>li {
	float: left;
	width: 100%;
	padding: 10px 15px;
	line-height: 20px
}
.app .app-navigation-mobile>ul>li a {
	line-height: 30px;
	font-size: 13px;
	font-weight: 400;
	text-transform: uppercase;
	color: #EDEFF0;
	text-decoration: none;
	-o-transition: color .1s linear;
	transition: color .1s linear
}
.app .app-navigation-mobile>ul>li a span[class^=icon-] {
	font-size: 20px;
	float: left;
	margin-right: 20px;
	color: #55698A
}
.app .app-navigation-mobile>ul>li a span.nav-icon-hexa {
	float: left;
	margin: 0 10px 0 -5px;
	font-size: 11px;
	font-weight: 700;
	height: 30px;
	width: 30px;
	line-height: 30px;
	text-transform: initial;
	text-align: center;
	background: url(../img/navigation/hexa.png) left top no-repeat
}
.app .app-navigation-mobile>ul>li a span.nav-icon-circle, .app .app-navigation-mobile>ul>li a span.nav-icon-cube {
	float: left;
	margin: 0 10px 0 -5px;
	font-size: 11px;
	font-weight: 700;
	height: 30px;
	width: 30px;
	line-height: 30px;
	text-transform: initial;
	text-align: center;
	background: rgba(0,0,0,.1);
	border: 1px solid rgba(0,0,0,.2)
}
.app .app-navigation-mobile>ul>li a span.nav-icon-circle {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .app-navigation-mobile>ul>li a:hover {
	color: #FFF
}
.app .app-navigation-horizontal {
	float: left;
	width: 100%;
	background: #2D3349;
	position: relative
}
.app .app-navigation-horizontal nav>ul {
	float: left;
	width: 100%;
	margin: 0 0 60px;
	list-style: none;
	padding: 10px 0 0 10px;
	position: relative
}
.app .app-navigation-horizontal nav>ul>li {
	width: auto
}
.app .app-navigation-horizontal nav>ul>li>a {
	float: left;
	padding: 10px 20px 12px 15px;
	line-height: 20px;
	color: #C5D1CD;
	text-decoration: none;
	font-size: 11px;
	font-weight: 700;
	text-transform: uppercase;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-transition: color .1s linear;
	-moz-transition: color .1s linear;
	-ms-transition: color .1s linear;
	-o-transition: color .1s linear;
	transition: color .1s linear
}
.app .app-navigation-horizontal nav>ul>li>ul>li>a, .switch span {
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear
}
.app .app-navigation-horizontal nav>ul>li>a .fa, .app .app-navigation-horizontal nav>ul>li>a span[class^=icon-] {
	float: left;
	margin-right: 10px;
	line-height: 20px;
	min-width: 20px;
	text-align: center;
	font-size: 20px
}
.app .app-navigation-horizontal nav>ul>li>a .fa {
	font-size: 14px
}
.app .app-navigation-horizontal nav>ul>li>a:hover {
	color: #FFF
}
.app .app-navigation-horizontal nav>ul>li>ul {
	position: absolute;
	width: 100%;
	left: 0;
	top: 100%;
	list-style: none;
	background: #FFF;
	display: none;
	border-bottom: 1px solid #DBE0E4;
	padding: 10px 0 10px 15px
}
.app .app-navigation-horizontal nav>ul>li>ul>li {
	width: auto
}
.app .app-navigation-horizontal nav>ul>li>ul>li>a {
	float: left;
	color: #2d3c52;
	text-decoration: none;
	font-size: 11px;
	font-weight: 700;
	text-transform: uppercase;
	padding: 10px 15px;
	margin-right: 5px;
	line-height: 20px;
	-webkit-transition: all .1s linear;
	transition: all .1s linear;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px
}
.app .app-navigation-horizontal nav>ul>li>ul>li.active>a, .app .app-navigation-horizontal nav>ul>li>ul>li>a:hover {
	color: #1B2431;
	background: #F5F5F5
}
.app .app-navigation-horizontal nav>ul>li.openable>a {
	-moz-border-radius-topright: 3px;
	-moz-border-radius-bottomright: 0;
	-moz-border-radius-bottomleft: 0;
	-moz-border-radius-topleft: 3px;
	-webkit-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0
}
.app .app-navigation-horizontal nav>ul>li.openable.active>a {
	background: #FFF
}
.app .app-navigation-horizontal nav>ul>li.active>a {
	color: #1B2431
}
.app .app-navigation-horizontal nav>ul>li.active>ul {
	display: block
}
.app .app-navigation-horizontal .container.container-boxed {
	margin: 0 auto
}
.app .app-navigation-horizontal .container.container-boxed>nav>ul, .app .app-navigation-horizontal .container.container-boxed>nav>ul>li>ul {
	padding-left: 0
}
.app .app-navigation-horizontal .container.container-boxed:before {
	position: absolute;
	left: 0;
	bottom: -1px;
	height: 61px;
	width: 100%;
	background: #FFF;
	content: " ";
	border-bottom: 1px solid #DBE0E4
}
@media (max-width:992px) {
.app .app-navigation-horizontal, .app .app-navigation-horizontal .container.container-boxed:before, .app-navigation .app-navigation-logo {
	display: none
}
.app-navigation.app-navigation-style-light {
	border-right: 0;
	border-bottom: 1px solid #DBE0E4
}
.app .app-navigation-horizontal .container.container-boxed {
	padding: 0
}
.app .app-navigation-horizontal nav>ul {
	margin: 0;
	padding: 0
}
.app .app-navigation-horizontal nav>ul>li {
	width: 100%
}
.app .app-navigation-horizontal nav>ul>li>a {
	padding: 15px 20px;
	width: 100%
}
.app .app-navigation-horizontal nav>ul>li.openable.active>a {
	background: 0 0;
	color: #FFF
}
.app .app-navigation-horizontal nav>ul>li>ul {
	position: relative;
	float: left;
	width: 100%;
	padding: 5px
}
.app .app-navigation-horizontal nav>ul>li>ul>li {
	width: 100%;
	margin-bottom: 5px
}
.app .app-navigation-horizontal nav>ul>li>ul>li>a {
	width: 100%
}
.app .app-navigation-horizontal nav>ul>li:last-child {
	margin-bottom: 0
}
.app .app-navigation-horizontal.show {
	display: block
}
}


.typography p {
	margin-bottom: 20px
}
.form-group.form-group-divider {
	border-bottom: 1px solid #DBE0E4;
	padding-bottom: 20px
}
.input-group .input-group-addon {
	min-width: 40px;
	font-weight: 600
}
.input-group .input-group-addon .fa {
	font-size: 14px
}
.input-group .input-group-addon [class^=icon-] {
	font-size: 20px
}
.input-group.input-group-lg .input-group-addon {
	min-width: 50px
}
.input-group.input-group-lg>.form-control, .input-group.input-group-lg>.input-group-addon, .input-group.input-group-lg>.input-group-btn>.btn {
	height: 50px;
	font-size: 14px
}
.input-group.input-group-sm {
	margin: 5px 0
}
.input-group.input-group-sm .input-group-addon {
	min-width: 30px
}
.input-group.input-group-sm>.form-control, .input-group.input-group-sm>.input-group-addon, .input-group.input-group-sm>.input-group-btn>.btn {
	height: 30px;
	padding: 0 5px
}
.input-group .input-group-btn>.btn:active, .input-group .input-group-btn>.btn:focus, .input-group .input-group-btn>.btn:hover {
	z-index: 2
}
.form-control {
	height: 40px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none
}
.form-control[readonly], .help-block {
	color: #7F8FA4
}
.form-control:focus {
	outline: 0;
	border-color: #ccd3d9;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none
}
.form-control[multiple] {
	padding: 5px 0
}
.form-control[multiple] option {
	padding: 3px 5px;
	margin-bottom: 3px
}
.form-control[disabled] {
	opacity: .5
}

.form-control[type=file] {
	padding-top: 8px
}
input[type=file] {
	margin-top: 8px
}
.help-block {
	margin-bottom: 0
}
.has-success .app-checkbox span:after, .has-success .control-label, .has-success .help-block, .has-success label, .has-success.has-feedback .form-control-feedback {
	color: #76AB3C
}
.help-block.control-label {
	margin-top: 0;
	font-weight: 400
}
.file-input {
	position: relative;
	cursor: pointer;
	overflow: hidden
}
.file-input input[type=file], .file-input input[type=file]:focus, .file-input input[type=file]:hover {
	position: absolute;
	top: 0;
	left: 0;
	cursor: pointer;
	z-index: 2;
	outline: 0;
	width: 100%;
	height: 100%;
	-webkit-opacity: 0;
	-moz-opacity: 0;
	opacity: 0
}
.file-input-name {
	margin-left: 10px
}
.form-horizontal .control-label {
	text-align: left;
	font-weight: 600;
	padding-top: 10px
}
.form-horizontal .control-label.help-block {
	font-weight: 400
}
.checkbox, .radio {
	float: left;
	width: 100%;
	min-height: 20px;
	line-height: 20px
}
.checkbox:first-child, .radio:first-child {
	margin-top: -10px
}
.checkbox:first-child:last-child, .radio:first-child:last-child {
	margin-top: 0;
	margin-bottom: 0
}
.checkbox+.checkbox, .radio+.radio {
	margin-top: 0
}
.form-group, .input-group {
	margin-bottom: 15px;
	float: left;
	width: 100%;
	position: relative
}
.form-group .input-group {
	margin-bottom: 0
}
.form-group>label+.help-block {
	margin-top: -5px;
	margin-bottom: 10px
}
.form-group:last-child {
	margin-bottom: 0
}
.input-lg {
	height: 50px;
	font-size: 16px
}
.input-sm {
	height: 30px;
	font-size: 12px
}
.has-feedback label~.form-control-feedback {
	top: 25px
}
.form-control-feedback {
	width: 40px;
	height: 40px;
	line-height: 40px
}
.form-control-feedback .fa {
	font-size: 14px
}
.form-control-feedback [class^=icon-] {
	font-size: 20px
}

.btn-group.open .dropdown-toggle {
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.1)
}
.btn-group.btn-group-justified .btn-group:nth-child(n+2) .btn {
	margin-left: -1px
}
.btn-group.btn-group-justified .btn-group:nth-child(n+3) .btn {
	margin-left: -2px
}
.btn-group.btn-group-justified .btn-group:nth-child(n+4) .btn {
	margin-left: -3px
}
.btn-group.btn-group-justified .btn-group:nth-child(n+5) .btn {
	margin-left: -4px
}
.btn-group>.btn+.dropdown-toggle {
	padding-left: 15px;
	padding-right: 15px
}
.btn-group-vertical>.btn.active, .btn-group-vertical>.btn:active, .btn-group-vertical>.btn:focus, .btn-group-vertical>.btn:hover, .btn-group>.btn.active, .btn-group>.btn:active, .btn-group>.btn:focus, .btn-group>.btn:hover, .input-group-btn>.btn:active, .input-group-btn>.btn:focus, .input-group-btn>.btn:hover {
	z-index: 0
}
.input-group-btn:first-child>.btn, .input-group-btn:first-child>.btn-group {
	margin-right: -2px
}
@media (max-width:992px) {
.btn {
	margin-bottom: 5px
}
}
.app .app-content-tabs {
	float: left;
	width: 100%;
	padding: 10px 15px 0;
	background: #FFF;
	border-bottom: 1px solid #DBE0E4
}
.app .app-content-tabs>ul {
	float: left;
	width: auto;
	list-style: none;
	padding: 0;
	margin-bottom: -1px
}
.app .app-content-tabs>ul>li {
	width: auto
}
.app .app-content-tabs>ul>li>a {
	display: block;
	float: left;
	line-height: 30px;
	padding: 5px 20px;
	margin-right: 5px;
	border: 1px solid #DBE0E4;
	color: #7F8FA4;
	font-weight: 600;
	text-decoration: none;
	background: #FFF;
	transition: all .1s linear
}
.app .app-content-tabs>ul>li>a>span {
	float: left;
	line-height: 30px;
	margin-right: 10px;
	width: 20px;
	text-align: center
}
.app .app-content-tabs>ul>li>a>span.close-tab {
	margin-right: -10px;
	margin-left: 10px;
	float: right;
	vertical-align: baseline;
	line-height: 24px;
	margin-top: 4px
}
.app .app-content-tabs>ul>li>a span[class^=icon-] {
	font-size: 20px
}
.app .app-content-tabs>ul>li>a span[class^=fa-] {
	font-size: 14px
}
.app .app-content-tabs>ul>li>a.app-content-tabs-new {
	border: 0
}
.app .app-content-tabs>ul>li>a.app-content-tabs-new:hover {
	background: #FFF
}
.app .app-content-tabs>ul>li>a:hover {
	color: #454545;
	background: #F5F5F5
}
.app .app-content-tabs>ul>li>a.active {
	color: #1B2431;
	background: #EDEFF0;
	border-bottom-color: #EDEFF0
}
.app .app-content-tabs>ul>li.icon-only>a {
	padding: 3px 8px
}
.app .app-content-tabs>ul>li.icon-only>a>span {
	margin: 0
}
.app .app-content-tab {
	display: none
}
.app .app-content-tab.active {
	display: block
}
.app .app-heading {
	float: left;
	width: 100%;
	padding: 15px;
}
.app .app-heading>.button {
	float: left;
	margin-right: 20px
}
.app .app-heading .icon {
	float: left;
	margin-right: 10px;
	width: 20px;
	text-align: center;
	color: #7F8FA4
}
.app .app-heading .icon span {
	line-height: 40px;
	font-size: 20px
}
.app .app-heading .icon.icon-lg {
	width: 30px;
	margin-right: 15px
}
.app .app-heading .icon.icon-lg span {
	font-size: 30px
}
.app .app-heading .title {
	float: left
}
.app .app-heading .title h1, .app .app-heading .title h2, .app .app-heading .title h3, .app .app-heading .title h4, .app .app-heading .title h5, .app .app-heading .title h6 {
	margin: 0 0 5px;
	padding: 0;
	float: left;
	font-size: 15px;
	line-height: 20px;
	font-weight: 600;
	clear: both;
	color: #1B2431
}
.app .app-heading .title h1 small, .app .app-heading .title h2 small, .app .app-heading .title h3 small, .app .app-heading .title h4 small, .app .app-heading .title h5 small, .app .app-heading .title h6 small {
	display: inline-block;
	border-left: 1px solid #DBE0E4;
	padding-left: 10px;
	margin-left: 10px
}
.app .app-heading .title p {
	float: left;
	clear: both;
	margin-bottom: 0;
	font-weight: 400;
	line-height: 15px;
	margin-top: 0;
	color: #7F8FA4
}
.app .app-heading .heading-elements {
	float: right;
	position: relative
}
.app .app-heading.title-only {
	padding: 10px 15px
}
.app .app-heading.title-only .title h1, .app .app-heading.title-only .title h2, .app .app-heading.title-only .title h3, .app .app-heading.title-only .title h4, .app .app-heading.title-only .title h5, .app .app-heading.title-only .title h6 {
	line-height: 40px;
	margin-bottom: 0
}
.app .app-heading.heading-transparent {
	margin-top: 10px;
	background: 0 0;
	border: 0
}
.app .app-heading.app-heading-background {
	padding: 55px 15px;
	margin-top: 0;
	border: 0;
	color: #FFF
}
.app .app-heading.app-heading-small>.title h1, .app .app-heading.app-heading-small>.title h2, .app .app-heading.app-heading-small>.title h3, .app .app-heading.app-heading-small>.title h4, .app .app-heading.app-heading-small>.title h5, .app .app-heading.app-heading-small>.title h6 {
	font-size: 14px;
	font-weight: 600
}
.app .app-heading.app-heading-condensed.app-heading-small {
	padding-top: 0
}
.app .app-heading.app-heading-condensed:first-child {
	margin-top: 0
}
.app .app-heading.app-heading-condensed-horizontal {
	padding: 15px 0
}
.app .app-heading.app-heading-light>.icon {
	color: #F5F5F5
}
.app .app-heading.app-heading-light>.title h1, .app .app-heading.app-heading-light>.title h2, .app .app-heading.app-heading-light>.title h3, .app .app-heading.app-heading-light>.title h4, .app .app-heading.app-heading-light>.title h5, .app .app-heading.app-heading-light>.title h6 {
	color: #FFF
}
.app .app-heading.app-heading-light>.title p {
	color: #F5F5F5
}
.app .app-heading.app-heading-lead {
	padding-top: 25px
}
.app .app-heading.app-heading-bordered {
	border: 1px solid #DBE0E4
}
.app .app-heading.app-heading-bordered.app-heading-page {
	border-top: 0
}
.app .app-heading.app-heading-bordered-bottom {
	border-bottom: 1px solid #DBE0E4
}
.app .app-heading.app-heading-center {
	text-align: center
}
.app .app-heading.app-heading-center>.title {
	width: 100%
}
.app .app-heading .form-group, .app .app-heading .input-group {
	margin-bottom: 0
}
.app .app-heading .container.container-boxed, .app .app-heading-container .container.container-boxed {
	margin: 0 auto
}
.app .app-heading>.contact {
	width: auto
}
.app .app-heading.app-heading-condensed {
	padding: 10px 15px
}
.app .app-heading-container {
	float: left;
	width: 100%;
	line-height: 40px;
	background: #F5F5F5;
	padding: 0 15px
}
.app .app-heading-container.app-heading-bordered {
	border: 1px solid #DBE0E4
}
.app .app-heading-container.app-heading-bordered.top {
	border-bottom: 0
}
.app .app-heading-container.app-heading-bordered.bottom {
	border-top: 0
}
.app .app-content>.app-heading-container.app-heading-bordered, .app .app-content>.app-heading.app-heading-bordered {
	border-left: 0;
	border-right: 0
}
.app .app-sidepanel .app-heading {
	background: 0 0
}
.app .breadcrumb {
	float: left;
	background: 0 0;
	border-radius: 0;
	margin-bottom: 0;
	padding: 12px 0 13px;
	width: auto
}
.app .breadcrumb>li {
	line-height: 15px;
	float: left;
	font-size: 12px;
	width: auto
}
.app .breadcrumb>li>a {
	float: left;
	line-height: 15px;
	color: #7F8FA4;
	text-decoration: none;
	-webkit-transition: color .1s linear;
	-moz-transition: color .1s linear;
	-ms-transition: color .1s linear;
	-o-transition: color .1s linear;
	transition: color .1s linear
}
.app .breadcrumb>li>a:hover {
	color: #64758c
}
.app .breadcrumb>li.active {
	color: #454545
}
.app .breadcrumb>li+li:before {
	line-height: 14px;
	padding: 0 0 0 2px;
	content: "\f105";
	font-family: FontAwesome;
	font-size: 12px;
	float: left;
	width: 20px;
	text-align: center;
	color: #7F8FA4;
	margin-top: 1px
}
.app .breadcrumb.breadcrumb-condensed {
	padding: 0
}
.app .app-header .breadcrumb {
	margin-right: 10px
}
.app .pagination {
	width: auto;
	margin: 0
}
.app .pagination li {
	width: auto
}
.app .pagination li>a, .app .pagination li>span {
	padding: 10px;
	line-height: 20px;
	border-color: #DBE0E4;
	background: #FFF;
	min-width: 40px;
	text-align: center;
	color: #454545;
	transition: all .1s linear;
	margin-bottom: 3px
}
.app .pagination li>a:hover {
	background: #F5F5F5
}
.app .pagination li.active span, .app .pagination li.active>a {
	background: #E5ECF4;
	color: #000 !important;
}
.app .pagination li.disabled span, .app .pagination li.disabled>a {
	-webkit-opacity: .7;
	-moz-opacity: .7;
	opacity: .7
}
.app .pagination li.disabled>a:hover {
	background: #FFF
}
.app .pagination.pagination-separated li {
	margin-right: 5px
}
.app .pagination.pagination-separated li:last-child {
	margin-right: 0
}
.app .pagination.pagination-noborder li, .app .pagination.pagination-rounded li {
	margin-right: 5px
}
.app .pagination.pagination-rounded li>a, .app .pagination.pagination-rounded li>span {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .pagination.pagination-noborder li>a, .app .pagination.pagination-noborder li>span {
	border: 0;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .call-box, .app .pager li>a {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px
}
.app .pagination.pagination-sm li>a, .app .pagination.pagination-sm li>span {
	padding: 0 10px;
	min-width: 20px;
	font-size: 12px
}
.app .pagination.pagination-lg li>a, .app .pagination.pagination-lg li>span {
	padding: 20px 10px;
	min-width: 60px
}
.app .pager li {
	width: auto;
	float: none
}
.app .pager li>a {
	color: #454545;
	background: #FFF;
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear;
	border-radius: 5px;
	line-height: 20px;
	padding: 10px 15px
}
.app .pager li>a:hover {
	background: #F5F5F5
}
.app .pager li.disabled>a {
	-webkit-opacity: .7;
	-moz-opacity: .7;
	opacity: .7
}
.app .pager li.disabled>a:hover {
	color: #454545;
	background: #FFF
}
.app .call-box, .app .modal-content-calling {
	background: #292f43;
	color: #FFF
}
.app .container {
	float: left;
	width: 100%;
	margin: 15px 0
}
.app .container>.app-heading {
	margin-top: 15px
}
.app .container.container-boxed {
	width: 1200px;
	margin: 15px auto;
	float: none;
	zoom: 1
}
.app .container.container-boxed:after, .app .container.container-boxed:before {
	content: "";
	display: table
}
.app .container.container-boxed:after {
	clear: both
}
.app .container.container-full-size {
	width: 100%;
	margin: 0;
	padding: 0
}
.app .row.row-table {
	margin-left: 0;
	margin-right: 0;
	border-bottom: 1px solid #DBE0E4
}
.app .row.row-table>div[class^=col-] {
	border-right: 1px solid #DBE0E4
}
.app .row.row-table>div[class^=col-]:last-child {
	border-right: 0
}
.app .row-table-holder {
	padding: 0!important;
	margin: 0!important
}
.app .row-table-holder .row.row-table>div[class^=col-] {
	padding: 15px
}
.app .row-table-holder .row.row-table:last-child {
	border-bottom: 0
}
.app .call-box {
	float: left;
	width: 100%;
	padding: 15px 15px 15px 70px;
	border-radius: 5px;
	margin-bottom: 15px;
	position: relative
}
.app .call-box .call-box-endcall {
	position: absolute;
	left: 15px;
	top: 15px
}
.app .call-box .call-box-timer {
	float: left;
	width: 100%;
	height: 40px;
	line-height: 40px;
	background: #1f2433;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	padding: 0 20px;
	text-align: center
}
.app .call-box .call-box-timer .status, .app .call-box .call-box-timer .timer {
	width: 50%;
	font-size: 13px;
	font-weight: 600;
	float: left
}
.app .call-box .call-box-timer .status {
	opacity: .5;
	font-style: italic
}
.app .calling {
	width: 150px;
	height: 150px;
	text-align: center;
	margin: 10px auto 20px;
	position: relative;
	color: #FFF;
	-webkit-animation: pulse-call 1s linear infinite;
	animation: pulse-call 1s linear infinite
}
.app .calling:after, .app .calling:before {
	width: 120px;
	height: 120px;
	background: rgba(79,181,221,.3);
	position: absolute;
	left: 15px;
	top: 15px;
	content: " ";
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	z-index: 1
}
.app .calling:after {
	width: 90px;
	height: 90px;
	left: 30px;
	top: 30px
}
.app .calling span {
	position: absolute;
	width: 150px;
	height: 150px;
	line-height: 150px;
	font-size: 56px;
	left: 0;
	top: 0;
	background: rgba(79,181,221,.2);
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	z-index: 2
}
.app .table-responsive {
	float: left;
	width: 100%
}
.app .app-sidebar-user {
	float: left;
	width: 100%;
	background: rgba(0,0,0,.4);
	padding: 15px 10px 15px 15px
}
.app .app-sidebar-user>.contact.contact-bordered:after {
	border-color: rgba(0,0,0,.3)
}
.app .app-sidebar-user>.contact.contact-lg {
	margin: 0
}
.app .container.container-full-size.block-flying-container {
	position: relative
}
.app .container.container-full-size.block-flying-container .block.block-flying {
	position: absolute;
	float: none;
	width: 400px;
	height: 96%;
	top: 2%;
	left: 15px;
	z-index: 1000
}
@media (max-width:992px) {
.app .app-content-tabs>ul>li>a {
	font-size: 0;
	text-indent: -9999px
}
.app .app-content-tabs>ul>li>a>span {
	text-indent: initial;
	margin-right: 0
}
.app .app-content-tabs>ul>li>a>span.close-tab {
	display: none
}
.app .row.row-table {
	border-bottom: 0
}
.app .row.row-table>div[class^=col-] {
	border-bottom: 1px solid #DBE0E4;
	border-right: 0;
	margin-bottom: 0
}
.app .call-box div[class^=col-] {
	float: left;
	width: 100%;
	margin-bottom: 15px
}
}
@media (max-width:480px) {
.app .app-heading .heading-elements {
	float: left;
	width: 100%;
	margin-top: 10px
}
.app .app-heading.title-only .heading-elements {
	margin-top: 0
}
}
@media (max-width:1200px) {
.app .container.container-boxed {
	float: left;
	width: 100%
}
}
@-webkit-keyframes pulse-call {
0%, 100% {
opacity:1
}
80% {
opacity:.8
}
}
@keyframes pulse-call {
0%, 100% {
opacity:1
}
80% {
opacity:.8
}
}
.app .block {
	position: relative;
	float: left;
	width: 100%;
	padding: 10px 20px 20px;
	margin-bottom: 0px;
	background: #FFF;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 0px
}
.app .block .app-heading {
	/*background: 0 0*/
}
.app .block>.app-heading {
	margin-top: 20px;
	margin-bottom: 15px;
	padding: 15px 0
}
.app .block>.app-heading:first-child {
	margin-top: 0
}
.app .block>.block-heading {
	float: left;
	width: 100%;
	margin-bottom: 15px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomright: 0;
	-moz-border-radius-bottomleft: 0;
	-moz-border-radius-topleft: 5px;
	-webkit-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0
}
.app .block>.block-content {
	float: left;
	width: 100%;
	margin-bottom: 15px
}
.app .block>.block-content.mCustomScrollbar {
	padding-right: 0!important
}
.app .block>.block-content.mCustomScrollbar .mCSB_container {
	padding-right: 20px
}
.app .block .block-content.block-content-inside {
	float: left;
	width: 100%;
	padding: 15px
}
.app .block>.block-footer {
	float: left;
	width: 100%;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px
}
.app .block.block-primary, .app .block.block-success {
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 0 5px 5px
}
.app .block .block-divider {
	float: left;
	width: 100%;
	height: 1px;
	background: #DBE0E4;
	margin-bottom: 15px;
	position: relative;
	margin-top: 10px
}
.app .block .block-divider span {
	display: block;
	position: absolute;
	width: 20px;
	height: 20px;
	background: #FFF;
	text-align: center;
	line-height: 20px;
	left: 50%;
	top: -10px;
	margin-left: -10px
}
.app .block.block-toggled>.block-content, .app .block.block-toggled>.block-footer, .app .panel.panel-toggled>div:not(.panel-heading) {
	display: none
}
.app .block .block-divider span.fa {
	font-size: 14px
}
.app .block .block-divider span[class^=icon-] {
	font-size: 20px
}
.app .block .block-divider.dir-left span {
	left: 20px;
	margin-left: 0
}
.app .block .block-divider.dir-right span {
	right: 20px;
	margin-left: 0
}
.app .block .block-divider-text {
	float: left;
	width: 100%;
	padding: 5px 20px;
	line-height: 20px;
	margin-top: 10px;
	margin-bottom: 15px;
	background: #f2f2f2;
	border-top: 1px solid #DBE0E4;
	border-bottom: 1px solid #DBE0E4;
	font-size: 10px;
	font-weight: 700;
	text-transform: uppercase
}
.app .block .block-divider-text span {
	margin-right: 5px
}
.app .block .block-divider-text span.fa {
	font-size: 14px
}
.app .block .block-divider-text span[class^=icon-] {
	font-size: 20px
}
.app .block.block-highlight {
	-webkit-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-moz-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .block.block-highlight-hover:hover, .app .tile-basic.tile-basic-shadow {
	-webkit-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-moz-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .block.block-highlight-hover {
	-webkit-transition: box-shadow .1s linear;
	-moz-transition: box-shadow .1s linear;
	-ms-transition: box-shadow .1s linear;
	-o-transition: box-shadow .1s linear;
	transition: box-shadow .1s linear
}
.app .block.block-highlight-hover:hover {
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .block.block-primary {
	border-top: 2px solid #292f43;
	border-radius: 0 0 5px 5px
}
.app .block.block-success {
	border-top: 2px solid #76AB3C;
	border-radius: 0 0 5px 5px
}
.app .block.block-info, .app .block.block-warning {

	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 0 5px 5px
}
.app .block.block-warning {
	border-top: 2px solid #F69F00;
	border-radius: 0 0 5px 5px
}
.app .block.block-info {
	border-top: 2px solid #4FB5DD;
	border-radius: 0 0 5px 5px
}
.app .block.block-danger {
	border-top: 2px solid #F04E51;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px
}
.app .block.block-condensed {
	padding: 0
}
.app .block.block-condensed>.app-heading {
	padding: 10px 20px 10px;
}
.app .block.block-condensed>.block-heading {
	padding: 10px 20px;
	border-bottom: 1px solid #DBE0E4
}
.app .block.block-condensed>.block-heading>.app-heading {
	padding: 10px 0;
	background: 0 0
}
.app .block.block-condensed>.block-content {
	padding: 0px 10px
}
.app .block.block-condensed>.block-footer {
	background: #E5ECF4;
	border-top: 1px solid #DBE0E4;
	padding: 10px 20px 10px;
}

.app .block.block-condensed-v {
	padding: 0 15px
}
.app .block.block-condensed-h {
	padding: 15px 0
}
.app .block.block-toggled {
	padding-bottom: 10px
}
.app .panel>.panel-footer, .app .panel>.panel-heading {
	padding: 10px 15px;
	line-height: 40px
}
.app .block.block-toggled>.app-heading {
	margin-bottom: 0
}
.app .block.block-expanded {
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	z-index: 1050;
	border: 0;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.app .block.block-arrow-top {
	position: relative
}
.app .block.block-arrow-top:after, .app .block.block-arrow-top:before {
	bottom: 100%;
	left: 30px;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none
}
.app .block.block-arrow-top:after {
	border-color: rgba(136,183,213,0);
	border-bottom-color: #FFF;
	border-width: 10px;
	margin-left: -10px
}
.app .block.block-arrow-top:before {
	border-color: rgba(194,225,245,0);
	border-bottom-color: #DBE0E4;
	border-width: 11px;
	margin-left: -11px
}
.app .block>.block-loading-layer {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: rgba(255,255,255,.5)
}
.app .block>.block-loading-layer .app-spinner {
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -10px 0 0 -10px
}
.app .panel, .app .panel>.panel-body, .app .panel>.panel-footer, .app .panel>.panel-heading {
	float: left;
	width: 100%
}
.app .panel>.panel-heading .panel-title {
	float: left;
	line-height: 40px;
	font-size: 14px;
	font-weight: 600;
	width: auto
}
.app .panel>.panel-heading .panel-title span {
	float: left;
	margin-right: 10px;
	line-height: 40px
}
.app .panel>.panel-heading .panel-title span[class^=icon-] {
	font-size: 20px
}
.alert .alert-icon span.fa, .app .panel>.panel-heading .panel-title span.fa {
	font-size: 14px
}
.alert, .alert.alert-dismissible>.close span {
	line-height: 20px
}
.app .panel .panel-elements {
	float: left;
	margin-left: -5px
}
.app .panel .panel-elements .btn {
	float: left
}
.app .panel .panel-elements .form-group, .app .panel .panel-elements .input-group {
	margin-bottom: 0
}
.app .panel .panel-elements.pull-right {
	margin-left: 0;
	margin-right: -5px
}
.app .panel .panel-elements.panel-elements-cp {
	margin-left: 0
}
.app .panel .panel-elements.panel-elements-cp.pull-right {
	margin-right: 0
}
.app .panel .panel-collapse {
	float: left;
	width: 100%
}
.app .panel.panel-default, .app .panel.panel-default .panel-footer, .app .panel.panel-default .panel-heading {
	border-color: #DBE0E4
}
.app .panel.panel-expanded {
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	z-index: 1050;
	border: 0;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.app .panel-group .panel>.panel-heading {

	padding: 5px 15px
}
.app .panel-group .panel>.panel-heading .panel-elements {
	margin-left: -10px
}
.app .panel-group .panel>.panel-heading .panel-elements.pull-right {
	margin-right: -10px
}
.alert {
	position: relative;
	float: left;
	width: 100%;
	margin-bottom: 15px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.alert .alert-icon {
	float: left;
	width: 20px;
	height: 20px;
	margin-right: 10px;
	line-height: 20px;
	text-align: center
}
.alert .alert-icon span[class^=icon-] {
	font-size: 20px
}
.alert.alert-icon-block {
	padding-left: 60px;
	position: relative
}
.alert.alert-icon-block .alert-icon {
	position: absolute;
	left: 0;
	top: 0;
	min-width: 50px;
	height: 100%;
	padding: 15px;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 0;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-radius: 5px 0 0 5px;
	border-radius: 5px 0 0 5px
}
.alert.alert-icon-block.dir-right {
	padding-left: 15px;
	padding-right: 60px
}
.alert.alert-icon-block.dir-right .alert-icon {
	left: auto;
	right: 0;
	margin-right: 0;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 0;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 5px 5px 0;
	border-radius: 0 5px 5px 0
}
.alert.alert-transparency {
	opacity: .8
}
.alert strong {
	font-weight: 600
}
.alert.alert-default {
	background: #FFF;
	color: #454545;
	border: 1px solid #DBE0E4
}
.alert.alert-default.alert-icon-block .alert-icon {
	background: #f7f7f7;
	border-right: 1px solid #dee3e6
}
.alert.alert-default.alert-icon-block.dir-right .alert-icon {
	border-right: 0;
	border-left: 1px solid #dee3e6
}
.alert.alert-primary {
	background: #292f43;
	color: #FFF;
	border: 1px solid #232839
}
.alert.alert-primary.alert-icon-block .alert-icon {
	background: #232839;
	border-right: 1px solid #252a3c
}
.alert.alert-primary.alert-icon-block.dir-right .alert-icon {
	border-right: 0;
	border-left: 1px solid #252a3c
}
.alert.alert-success {
	background: #76AB3C;
	color: #FFF;
	border: 1px solid #6ea038
}
.alert.alert-success.alert-icon-block .alert-icon {
	background: #6ea038;
	border-right: 1px solid #71a339
}
.alert.alert-success.alert-icon-block.dir-right .alert-icon {
	border-right: 0;
	border-left: 1px solid #71a339
}
.alert.alert-info {
	background: #4FB5DD;
	color: #FFF;
	border: 1px solid #42b0db
}
.alert.alert-info.alert-icon-block .alert-icon {
	background: #42b0db;
	border-right: 1px solid #46b1db
}
.alert.alert-info.alert-icon-block.dir-right .alert-icon {
	border-right: 0;
	border-left: 1px solid #46b1db
}
.alert.alert-warning {
	background: #F69F00;
	color: #FFF;
	border: 1px solid #e79500
}
.alert.alert-warning.alert-icon-block .alert-icon {
	background: #e79500;
	border-right: 1px solid #ec9800
}
.alert.alert-warning.alert-icon-block.dir-right .alert-icon {
	border-right: 0;
	border-left: 1px solid #ec9800
}
.alert.alert-danger {
	background: #F04E51;
	color: #FFF;
	border: 1px solid #ef4043
}
.alert.alert-danger.alert-icon-block .alert-icon {
	background: #ef4043;
	border-right: 1px solid #ef4548
}
.alert.alert-danger.alert-icon-block.dir-right .alert-icon {
	border-right: 0;
	border-left: 1px solid #ef4548
}
.alert.alert-inside {
	border: 0;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.alert.alert-dismissible>.close {
	position: absolute;
	right: 10px;
	top: 12px;
	color: #FFF;
	-webkit-transition: opacity .1s linear;
	-moz-transition: opacity .1s linear;
	-ms-transition: opacity .1s linear;
	-o-transition: opacity .1s linear;
	transition: opacity .1s linear
}
.app .label, .nav>li>a {
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear
}
.alert.alert-dismissible>.close .fa {
	font-size: 14px
}
.alert.alert-dismissible>.close span[class^=icon-], .dropdown-menu>li span[class^=icon-] {
	font-size: 20px
}
.alert.alert-dismissible.alert-default .close {
	color: #000
}
.nav.nav-pills>li>a, .nav.nav-tabs>li>a {
	color: #454545;
	font-weight: 600
}
.nav>li>a {
	padding: 9px 15px;
	transition: all .1s linear
}
.nav>li>a:hover {
	background: #F5F5F5;
	border-color: transparent transparent #DBE0E4
}
.nav.nav-tabs>li {
	width: auto
}
.nav.nav-tabs>li.active>a {
	border-color: #DBE0E4 #DBE0E4 #FFF
}
.nav.nav-pills.nav-pills-bordered>li>a:hover, .nav.nav-pills>li>a {
	border: 1px solid transparent
}
.nav.nav-pills>li {
	width: auto;
	margin-right: 5px
}
.nav.nav-pills>li>a {
	background: 0 0
}
.nav.nav-pills>li>a:hover {
	background: #F5F5F5
}
.nav.nav-pills>li.active>a {
	background: #2D3349;
	color: #FFF
}
.nav.nav-pills.nav-pills-bordered>li.active>a {
	background: 0 0;
	border: 1px solid #2D3349;
	color: #2D3349
}
.nav.nav-justified>li {
	width: 1%
}
.tab-content {
	float: left;
	width: 100%;
	margin-top: 20px
}
.tab-content.tab-content-bordered {
	margin-top: 0;
	background: #FFF;
	border: 1px solid #DBE0E4;
	border-top: 0;
	padding: 15px;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px
}
.dropdown-menu, .dropdown-menu>li>a .label {
	margin-top: 5px
}
@media (max-width:992px) {
.nav.nav-justified>li {
	width: 100%
}
.nav.nav-justified>li>a, .tab-content.tab-content-bordered {
	border: 1px solid #DBE0E4
}
}
.dropdown, .dropup {
	float: left
}
.dropdown-menu {
	min-width: 220px;
	background: #FFF;
	border-color: #DBE0E4;
	box-shadow: 0 2px 8px rgba(0,0,0,.1)
}
.dropdown-menu>li>a {
	display: block;
	float: left;
	width: 100%;
	padding: 5px 15px;
	line-height: 30px;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.dropdown-menu>li>a .label.pull-right {
	position: absolute;
	right: 15px
}
.dropdown-menu>li .fa, .dropdown-menu>li span[class^=icon-] {
	float: left;
	margin-right: 10px;
	line-height: 30px
}
.dropdown-menu>li .fa {
	font-size: 14px
}
.dropdown-menu>li .app-checkbox, .dropdown-menu>li .app-radio {
	float: left;
	width: auto;
	margin: 5px 0
}
.dropdown-menu>li.active>a, .dropdown-menu>li.active>a:focus, .dropdown-menu>li.active>a:hover {
	background: #F5F5F5;
	color: #454545
}
.dropdown-menu>li.dropdown-header {
	margin-top: 5px;
	padding: 5px 15px;
	line-height: 30px;
	font-size: 13px;
	color: #454545;
	font-weight: 600
}
.modal .modal-dialog.modal-danger .modal-header .modal-title, .modal .modal-dialog.modal-info .modal-header .modal-title, .modal .modal-dialog.modal-primary .modal-header .modal-title, .modal .modal-dialog.modal-success .modal-header .modal-title, .modal .modal-dialog.modal-warning .modal-header .modal-title {
	color: #FFF
}
.dropdown-menu>li.dropdown-header.highlight {
	background: #ededed
}
.dropdown-menu>li.dropdown-header:first-child {
	margin-top: 0
}
.dropdown-menu .divider {
	margin: 5px 0
}
.popover.bottom>.arrow:after, .popover.top>.arrow, .popover.top>.arrow:after {
	margin-left: -5px
}
.dropdown-menu.dropdown-left {
	left: auto;
	right: 0
}
.dropdown-menu.dropdown-form {
	padding: 0;
	width: 340px
}
.dropdown-menu.dropdown-form>li {
	padding: 15px
}
.dropdown-menu.dropdown-form>li .fa, .dropdown-menu.dropdown-form>li>span[class^=icon-] {
	float: none;
	margin-right: 0;
	line-height: 20px
}
.dropdown-menu.dropdown-form.dropdown-form-wide {
	width: 420px
}
.popover {
	padding: 0;
	border: 1px solid #DBE0E4;
	-webkit-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	-moz-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	box-shadow: 0 2px 8px rgba(0,0,0,.1)
}
.popover>.arrow {
	border-width: 6px
}
.popover>.arrow:after {
	border-width: 5px
}
.popover.top>.arrow {
	bottom: -6px
}
.popover.left>.arrow:after, .popover.right>.arrow:after {
	bottom: -5px
}
.popover.left>.arrow {
	right: -6px;
	margin-top: -5px
}
.popover.right>.arrow {
	left: -6px;
	margin-top: -5px
}
.popover.bottom>.arrow {
	margin-left: -5px;
	top: -6px
}
.popover .popover-title {
	float: left;
	width: 100%;
	padding: 10px 15px;
	line-height: 20px;
	font-weight: 600;
	border: 0;
	border-bottom: 1px solid #DBE0E4
}
.popover .popover-content {
	float: left;
	width: 100%;
	padding: 15px
}
.modal .modal-dialog {
	margin: 100px auto 0
}
.modal .modal-dialog .modal-content {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	border-color: transparent;
	-webkit-box-shadow: 0 0 0 10px rgba(0,0,0,.1);
	-moz-box-shadow: 0 0 0 10px rgba(0,0,0,.1);
	box-shadow: 0 0 0 10px rgba(0,0,0,.1);
	zoom: 1
}
.modal .modal-dialog .modal-content:after, .modal .modal-dialog .modal-content:before {
	content: "";
	display: table
}
.modal .modal-dialog .modal-content:after {
	clear: both
}
.modal .modal-dialog .modal-content .modal-header {
	border: 0;
	float: left;
	width: 100%;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.modal .modal-dialog .modal-content .modal-header .modal-title {
	font-size: 14px;
	font-weight: 600;
	line-height: 30px
}
.modal .modal-dialog .modal-content .modal-body {
	float: left;
	width: 100%
}
.modal .modal-dialog .modal-content .modal-body .app-heading {
	background: 0 0
}
.modal .modal-dialog .modal-content .modal-footer {
	float: left;
	width: 100%;
	border: 0
}
.modal .modal-dialog>.close {
	position: absolute;
	top: -14px;
	right: -35px;
	color: #FFF;
	width: 20px;
	height: 20px;
	line-height: 20px;
	text-align: center;
	opacity: .5;
	-webkit-transition: opacity .1s linear;
	-moz-transition: opacity .1s linear;
	-ms-transition: opacity .1s linear;
	-o-transition: opacity .1s linear;
	transition: opacity .1s linear
}
.modal .modal-dialog>.close [class^=icon-] {
	font-size: 20px
}
.modal .modal-dialog>.close .fa {
	font-size: 14px
}
.modal .modal-dialog>.close:hover {
	opacity: .8
}
.modal .modal-dialog.modal-fw {
	width: 94%
}
.modal .modal-dialog.modal-primary .modal-header {
	background: #292f43
}
.modal .modal-dialog.modal-info .modal-header {
	background: #4FB5DD
}
.modal .modal-dialog.modal-success .modal-header {
	background: #76AB3C
}
.modal .modal-dialog.modal-warning .modal-header {
	background: #F69F00
}
.modal .modal-dialog.modal-danger .modal-header {
	background: #F04E51
}
.tooltip .tooltip-inner {
	font-size: 9px;
	text-transform: uppercase;
	font-weight: 600;
	letter-spacing: 1.1px;
	padding: 5px 10px
}
.noty_text strong {
	text-transform: uppercase;
	font-size: 11px;
	font-weight: 700;
	margin-bottom: 5px;
	display: block;
	width: 100%
}
@media (max-width:992px) {
.modal {
	padding-left: 15px
}
.modal .modal-dialog {
	margin: 50px auto 0;
	width: 100%
}
.modal .modal-dialog .modal-content {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	width: 100%
}
}
.app-accordion {
	float: left;
	width: 100%
}
.app-accordion .item {
	float: left;
	width: 100%;
	overflow: hidden;
	height: 50px;
	border: 1px solid #DBE0E4;
	border-bottom: 0
}
.app-accordion .item .heading {
	float: left;
	width: 100%;
	height: 50px;
	background: #FFF;
	padding: 0 20px;
	cursor: pointer;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear;
	user-select: none
}
.app-accordion .item .heading .title {
	float: left;
	font-size: 14px;
	font-weight: 600;
	line-height: 50px;
	margin: 0;
	padding: 0
}
.app .badge, .app .label, .app .table>thead>tr>th {
	font-weight: 700;
	text-transform: uppercase
}
.app-accordion .item .heading:hover {
	background: #F5F5F5
}
.app-accordion .item .content {
	float: left;
	width: 100%
}
.app-accordion .item .content .block {
	padding: 15px;
	border: 0
}
.app-accordion .item.open .heading {
	border-bottom: 1px solid #e8e8e8;
	background: #F5F5F5
}
.app-accordion .item:first-child {
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomright: 0;
	-moz-border-radius-bottomleft: 0;
	-moz-border-radius-topleft: 5px;
	-webkit-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0
}
.app-accordion .item:last-child {
	border-bottom: 1px solid #DBE0E4;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	-webkit-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px
}
.app-accordion.app-accordion-simple .item.open {
	height: auto
}
.app .app-sidebar>.app-accordion {
	overflow-y: hidden;
	background: #FFF;
	border-left: 1px solid #DBE0E4
}
.app .app-sidebar>.app-accordion .item {
	border-left: 0;
	border-right: 0
}
.app .label {
	position: relative;
	line-height: 14px;
	padding: 3px 5px;
	font-size: 10px;
	letter-spacing: .5px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	transition: all .1s linear
}
.app .label.label-default {
	background: #DBE0E4!important;
	color: #454545!important
}
.app .label.label-primary {
	background: #292f43!important;
	color: #FFF!important
}
.app .label.label-success {
	background: #76AB3C!important;
	color: #FFF!important
}
.app .label.label-info {
	background: #4FB5DD!important;
	color: #FFF!important
}
.app .label.label-warning {
	background: #F69F00!important;
	color: #FFF!important
}
.app .label.label-danger {
	background: #F04E51!important;
	color: #FFF!important
}
.app .label.label-bordered {
	padding: 2px 5px;
	background: 0 0
}
.app .label.label-bordered.label-default {
	border: 1px solid #DBE0E4;
	color: #454545
}
.app .label.label-bordered.label-default.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(219,224,228,.15);
	-moz-box-shadow: 0 0 0 3px rgba(219,224,228,.15);
	box-shadow: 0 0 0 3px rgba(219,224,228,.15)
}
.app .label.label-bordered.label-default[href]:hover {
	background: 0 0;
	border-color: #bec7ce;
	color: #2b2b2b
}
.app .label.label-bordered.label-primary {
	border: 1px solid #292f43;
	color: #292f43
}
.app .label.label-bordered.label-primary.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(41,47,67,.15);
	-moz-box-shadow: 0 0 0 3px rgba(41,47,67,.15);
	box-shadow: 0 0 0 3px rgba(41,47,67,.15)
}
.app .label.label-bordered.label-primary[href]:hover {
	background: 0 0;
	border-color: #161923;
	color: #161923
}
.app .label.label-bordered.label-success {
	border: 1px solid #76AB3C;
	color: #76AB3C
}
.app .label.label-bordered.label-success.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(118,171,60,.15);
	-moz-box-shadow: 0 0 0 3px rgba(118,171,60,.15);
	box-shadow: 0 0 0 3px rgba(118,171,60,.15)
}
.app .label.label-bordered.label-success[href]:hover {
	background: 0 0;
	border-color: #5c852f;
	color: #5c852f
}
.app .label.label-bordered.label-info {
	border: 1px solid #4FB5DD;
	color: #4FB5DD
}
.app .label.label-bordered.label-info.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(79,181,221,.15);
	-moz-box-shadow: 0 0 0 3px rgba(79,181,221,.15);
	box-shadow: 0 0 0 3px rgba(79,181,221,.15)
}
.app .label.label-bordered.label-info[href]:hover {
	background: 0 0;
	border-color: #28a1d1;
	color: #28a1d1
}
.app .label.label-bordered.label-warning {
	border: 1px solid #F69F00;
	color: #F69F00
}
.app .label.label-bordered.label-warning.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(246,159,0,.15);
	-moz-box-shadow: 0 0 0 3px rgba(246,159,0,.15);
	box-shadow: 0 0 0 3px rgba(246,159,0,.15)
}
.app .label.label-bordered.label-warning[href]:hover {
	background: 0 0;
	border-color: #c37e00;
	color: #c37e00
}
.app .label.label-bordered.label-danger {
	border: 1px solid #F04E51;
	color: #F04E51
}
.app .label.label-bordered.label-danger.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(240,78,81,.15);
	-moz-box-shadow: 0 0 0 3px rgba(240,78,81,.15);
	box-shadow: 0 0 0 3px rgba(240,78,81,.15)
}
.app .label.label-bordered.label-danger[href]:hover {
	background: 0 0;
	border-color: #ec1f23;
	color: #ec1f23
}
.app .label.label-rounded {
	border-radius: 10px;
	padding-left: 8px;
	padding-right: 8px
}
.app .label.label-ghost {
	margin: 0 0 0 5px
}
.app .badge {
	padding: 4px 6px 5px;
	font-size: 11px;
	letter-spacing: .5px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px
}
.app .badge.badge-primary {
	background: #292f43;
	color: #FFF
}
.app .badge.badge-primary[href]:hover {
	background: #161923;
	color: #e6e6e6
}
.app .badge.badge-success {
	background: #76AB3C;
	color: #FFF
}
.app .badge.badge-success[href]:hover {
	background: #5c852f;
	color: #e6e6e6
}
.app .badge.badge-info {
	background: #4FB5DD;
	color: #FFF
}
.app .badge.badge-info[href]:hover {
	background: #28a1d1;
	color: #e6e6e6
}
.app .badge.badge-warning {
	background: #F69F00;
	color: #FFF
}
.app .badge.badge-warning[href]:hover {
	background: #c37e00;
	color: #e6e6e6
}
.app .badge.badge-danger {
	background: #F04E51;
	color: #FFF
}
.app .badge.badge-danger[href]:hover {
	background: #ec1f23;
	color: #e6e6e6
}
.app .badge.badge-bordered {
	background: 0 0;
	padding: 2px 7px 3px
}
.app .badge.badge-bordered.badge-default {
	border: 2px solid #DBE0E4;
	color: #454545
}
.app .badge.badge-bordered.badge-primary {
	border: 2px solid #292f43;
	color: #292f43
}
.app .badge.badge-bordered.badge-success {
	border: 2px solid #76AB3C;
	color: #76AB3C
}
.app .badge.badge-bordered.badge-info {
	border: 2px solid #4FB5DD;
	color: #4FB5DD
}
.app .badge.badge-bordered.badge-warning {
	border: 2px solid #F69F00;
	color: #F69F00
}
.app .badge.badge-bordered.badge-danger {
	border: 2px solid #F04E51;
	color: #F04E51
}
.app .label-icon {
	line-height: 20px;
	padding: 5px;
	text-align: center;
	min-width: 30px;
	background: #DBE0E4;
	display: inline-block;
	border-radius: 3px;
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear;
	text-decoration: none
}
.app .label-icon.label-icon-primary {
	background: #292f43;
	color: #FFF
}
.app .label-icon.label-icon-primary[href]:hover {
	background: #161923;
	color: #e6e6e6
}
.app .label-icon.label-icon-success {
	background: #76AB3C;
	color: #FFF
}
.app .label-icon.label-icon-success[href]:hover {
	background: #5c852f;
	color: #e6e6e6
}
.app .label-icon.label-icon-info {
	background: #4FB5DD;
	color: #FFF
}
.app .label-icon.label-icon-info[href]:hover {
	background: #28a1d1;
	color: #e6e6e6
}
.app .label-icon.label-icon-warning {
	background: #F69F00;
	color: #FFF
}
.app .label-icon.label-icon-warning[href]:hover {
	background: #c37e00;
	color: #e6e6e6
}
.app .label-icon.label-icon-danger {
	background: #F04E51;
	color: #FFF
}
.app .label-icon.label-icon-danger[href]:hover {
	background: #ec1f23;
	color: #e6e6e6
}
.app .label-icon.label-icon-bordered {
	background: 0 0;
	padding: 4px 5px
}
.app .label-icon.label-icon-bordered.label-icon-default {
	border: 1px solid #DBE0E4;
	color: #454545
}
.app .label-icon.label-icon-bordered.label-icon-default.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(219,224,228,.15);
	-moz-box-shadow: 0 0 0 3px rgba(219,224,228,.15);
	box-shadow: 0 0 0 3px rgba(219,224,228,.15)
}
.app .label-icon.label-icon-bordered.label-icon-default[href]:hover {
	background: 0 0;
	border-color: #bec7ce;
	color: #2b2b2b
}
.app .label-icon.label-icon-bordered.label-icon-primary {
	border: 1px solid #292f43;
	color: #292f43
}
.app .label-icon.label-icon-bordered.label-icon-primary.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(41,47,67,.15);
	-moz-box-shadow: 0 0 0 3px rgba(41,47,67,.15);
	box-shadow: 0 0 0 3px rgba(41,47,67,.15)
}
.app .label-icon.label-icon-bordered.label-icon-primary[href]:hover {
	background: 0 0;
	border-color: #161923;
	color: #161923
}
.app .label-icon.label-icon-bordered.label-icon-success {
	border: 1px solid #76AB3C;
	color: #76AB3C
}
.app .label-icon.label-icon-bordered.label-icon-success.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(118,171,60,.15);
	-moz-box-shadow: 0 0 0 3px rgba(118,171,60,.15);
	box-shadow: 0 0 0 3px rgba(118,171,60,.15)
}
.app .label-icon.label-icon-bordered.label-icon-success[href]:hover {
	background: 0 0;
	border-color: #5c852f;
	color: #5c852f
}
.app .label-icon.label-icon-bordered.label-icon-info {
	border: 1px solid #4FB5DD;
	color: #4FB5DD
}
.app .label-icon.label-icon-bordered.label-icon-info.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(79,181,221,.15);
	-moz-box-shadow: 0 0 0 3px rgba(79,181,221,.15);
	box-shadow: 0 0 0 3px rgba(79,181,221,.15)
}
.app .label-icon.label-icon-bordered.label-icon-info[href]:hover {
	background: 0 0;
	border-color: #28a1d1;
	color: #28a1d1
}
.app .label-icon.label-icon-bordered.label-icon-warning {
	border: 1px solid #F69F00;
	color: #F69F00
}
.app .label-icon.label-icon-bordered.label-icon-warning.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(246,159,0,.15);
	-moz-box-shadow: 0 0 0 3px rgba(246,159,0,.15);
	box-shadow: 0 0 0 3px rgba(246,159,0,.15)
}
.app .label-icon.label-icon-bordered.label-icon-warning[href]:hover {
	background: 0 0;
	border-color: #c37e00;
	color: #c37e00
}
.app .label-icon.label-icon-bordered.label-icon-danger {
	border: 1px solid #F04E51;
	color: #F04E51
}
.app .label-icon.label-icon-bordered.label-icon-danger.label-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(240,78,81,.15);
	-moz-box-shadow: 0 0 0 3px rgba(240,78,81,.15);
	box-shadow: 0 0 0 3px rgba(240,78,81,.15)
}
.app .label-icon.label-icon-bordered.label-icon-danger[href]:hover {
	background: 0 0;
	border-color: #ec1f23;
	color: #ec1f23
}
.app .table.table-hover>tbody>tr:hover>td, .app .table.table-striped>tbody>tr:nth-of-type(odd) {
	background: #F5F5F5
}
.app .table>tbody>tr>td, .app .table>thead>tr>th {
	border-bottom: 1px solid #DBE0E4
}
.app .label-icon.label-icon-rounded {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .label-icon .fa {
	font-size: 14px
}
.app .label-icon.label-icon-sm {
	min-width: 20px;
	padding: 0
}
.app .label-icon.label-icon-sm.label-icon-bordered {
	line-height: 18px
}
.app .label-icon.label-icon-lg {
	min-width: 40px;
	padding: 9px 5px 5px
}
.app .label-icon.label-icon-lg [class^=icon-] {
	font-size: 20px
}
.app .label-icon.label-icon-lg .fa {
	font-size: 18px;
	display: block;
	width: 20px;
	height: 20px;
	text-align: center;
	margin: 2px auto
}
.app .label-icon.label-icon-xlg {
	min-width: 80px;
	line-height: 50px;
	padding: 20px 0 3px
}
.app .label-icon.label-icon-xlg .fa {
	font-size: 28px
}
.app .label-icon.label-icon-xlg [class^=icon-] {
	font-size: 40px
}
.app .table tr td, .app .table tr th {
	line-height: 20px;
	padding: 10px 15px;
	vertical-align: middle
}
.app .table>thead>tr>th {
	font-size: 11px;
	color: #1B2431
}
.app .table>tbody>tr:last-child>td {
	border-bottom: 0
}
.app .table.table-bordered {
	border: 1px solid #DBE0E4
}
.app .table.table-bordered>tbody>tr>td {
	border: 0;
	border-bottom: 1px solid #DBE0E4;
	border-right: 1px solid #DBE0E4
}
.app .block>.table.table-bordered>tbody>tr>td:last-child, .app .block>.table.table-bordered>thead>tr>th:last-child, .app .table.table-bordered>tbody>tr>td:last-child {
	border-right: 0
}
.app .table.table-bordered>tbody>tr:last-child>td {
	border-bottom: 0
}
.app .table.table-head-light>thead>tr>th {
	color: #7F8FA4
}
.app .table.table-head-custom>thead>tr>th {
	background: #2D3349;
	color: #FFF
}
.app .table.table-noborder>tbody>tr>td, .app .table.table-noborder>thead>tr>th {
	border: 0
}
.app .table.table-clean-paddings>tbody>tr>td:first-child, .app .table.table-clean-paddings>thead>tr>th:first-child {
	padding-left: 0
}
.app .table.table-clean-paddings>tbody>tr>td:last-child, .app .table.table-clean-paddings>thead>tr>th:last-child {
	padding-right: 0
}
.app .block>.table.table-bordered {
	border-left: 0;
	border-right: 0
}
.app .block>.table.table-bordered>tbody>tr>td, .app .block>.table.table-bordered>thead>tr>th {
	border-left: 0
}
.app .block>.table:last-child {
	margin-bottom: 0;
	border-bottom: 0
}
.app .table .contact.contact-lg, .app .table .contact.contact-single, .app .table .contact.contact-xlg {
	margin-bottom: 0
}
@media (max-width:992px) {
.table-responsive {
	border: 0
}
}
.app .tile-basic {
	float: left;
	width: 100%;
	background: #FFF;
	color: #454545;
	margin-bottom: 20px;
	position: relative
}
.app .tile-basic .tile-image {
	display: block;
	float: left;
	width: 100%;
	position: relative;
	overflow: hidden
}
.app .tile-basic .tile-image img {
	width: 100%
}
.app .tile-basic .tile-image .tile-image-container {
	width: 100%;
	padding: 15px;
	position: absolute;
	left: 0;
	top: 0
}
.app .tile-basic .tile-image .tile-image-title {
	width: 100%;
	padding: 15px;
	position: absolute;
	left: 0;
	bottom: 0;
	color: #FFF;
	background: rgba(0,0,0,.2);
	text-shadow: 0 2px 5px #000;
	-webkit-transition: all .1s ease-in;
	-moz-transition: all .1s ease-in;
	-ms-transition: all .1s ease-in;
	-o-transition: all .1s ease-in;
	transition: all .1s ease-in
}
.app .tile-basic .tile-image .tile-image-title .tile-title {
	color: #FFF;
	font-size: 14px;
	line-height: 26px;
	font-weight: 600;
	text-decoration: none
}
.app .tile-basic .tile-image .tile-image-title p {
	margin-top: 0;
	color: #F0F0F0
}
.app .tile-basic .tile-image .tile-image-title.tile-image-dir-top {
	bottom: auto;
	top: 0
}
.app .tile-basic .tile-image .tile-image-title.tile-image-title-hover {
	bottom: -200px
}
.app .tile-basic .tile-image .tile-image-hover {
	position: absolute;
	left: 0;
	top: -300px;
	background: rgba(0,0,0,.5);
	height: 100%;
	width: 100%;
	opacity: 0;
	-webkit-transition: opacity .2s ease-in;
	-moz-transition: opacity .2s ease-in;
	-ms-transition: opacity .2s ease-in;
	-o-transition: opacity .2s ease-in;
	transition: opacity .2s ease-in
}
.app .tile-basic .tile-image .tile-image-hover .tile-image-container-vertical {
	position: absolute;
	width: 100%;
	top: 50%;
	margin-top: -20px
}
.app .tile-basic .tile-image .tile-image-hover.tile-image-hover-light {
	background: rgba(255,255,255,.9)
}
.app .tile-basic .tile-image:hover .tile-image-title {
	background: rgba(0,0,0,.4)
}
.app .tile-basic .tile-image:hover .tile-image-title.tile-image-title-hover {
	bottom: 0
}
.app .tile-basic .tile-image:hover .tile-image-title.tile-image-title-hide-hover {
	bottom: -200px
}
.app .tile-basic .tile-image:hover .tile-image-hover {
	top: 0;
	opacity: 1
}
.app .tile-basic .tile-image.tile-image-padding {
	padding: 3px 3px 0
}
.app .tile-basic .tile-image.tile-image-hover-grayscale>img {
	-webkit-filter: grayscale(0);
	filter: grayscale(0);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out
}
.app .tile-basic .tile-image.tile-image-hover-grayscale:hover>img {
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%)
}
.app .tile-basic>.tile-icon {
	display: block;
	float: left;
	width: 100%;
	text-align: center;
	padding: 30px 0 0;
	color: #7F8FA4
}
.app .tile-basic>.tile-icon .fa, .app .tile-basic>.tile-icon span[class^=icon-] {
	display: block;
	margin: 0 auto;
	width: 80px;
	height: 80px;
	line-height: 80px;
	border: 1px solid #DBE0E4;
	text-align: center;
	font-size: 40px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .tile-basic>.tile-icon .fa {
	font-size: 42px
}
.app .tile-basic>.tile-icon.tile-icon-dashed .fa, .app .tile-basic>.tile-icon.tile-icon-dashed span[class^=icon-] {
	border-style: dashed
}
.app .tile-basic>.tile-icon.tile-icon-bg {
	background: #F5F5F5;
	padding-top: 0
}
.app .tile-basic>.tile-icon.tile-icon-bg .fa, .app .tile-basic>.tile-icon.tile-icon-bg span[class^=icon-] {
	border: 0
}
.app .tile-basic .tile-content {
	float: left;
	width: 100%;
	padding: 30px
}
.app .tile-basic .tile-content .tile-title {
	display: block;
	margin-bottom: 0;
	color: #1B2431;
	position: relative
}
.app .tile-basic .tile-content .tile-title.tile-title-underlined {
	margin-bottom: 15px
}
.app .tile-basic .tile-content .tile-title.tile-title-underlined:after {
	content: " ";
	position: absolute;
	top: 100%;
	left: 50%;
	margin-left: -25px;
	width: 50px;
	height: 2px;
	background: #2D3349;
	margin-top: 8px
}
.app .tile-basic .tile-content .tile-title:last-child {
	margin-bottom: 0
}
.app .tile-basic .tile-content a.tile-title {
	font-size: 16px;
	line-height: 26px
}
.app .tile-basic .tile-content .tile-subtitle {
	float: left;
	width: 100%;
	margin-bottom: 5px;
	color: #7F8FA4;
	text-transform: uppercase;
	font-size: 90%
}
.app .tile-basic .tile-content .tile-subtitle.pull-left, .app .tile-basic .tile-content .tile-subtitle.pull-right {
	width: auto
}
.app .tile-basic .tile-content .tile-subtitle .fa {
	font-size: 14px;
	margin-right: 5px
}
.app .tile-basic .tile-content .tile-subtitle:first-child, .app .tile-basic .tile-content .tile-subtitle:last-child {
	margin-bottom: 0
}
.app .tile-basic .tile-content p:first-child {
	margin-top: 0
}
.app .tile-basic .tile-content.tile-content-condensed-bottom {
	padding-bottom: 20px
}
.app .tile-basic .tile-content.tile-content-icon {
	position: relative;
	padding-left: 70px
}
.app .tile-basic .tile-content.tile-content-icon .tile-icon {
	position: absolute;
	left: 15px;
	top: 20px;
	height: 40px;
	width: 40px;
	line-height: 40px
}
.app .tile-basic .tile-content.tile-content-icon .tile-icon span[class^=icon-] {
	font-size: 40px
}
.app .tile-basic .tile-content.tile-content-icon .tile-icon .fa {
	font-size: 42px
}
.app .tile-basic .tile-image+.tile-content {
	padding-top: 20px
}
.app .tile-basic.tile-basic-icon-top {
	margin-top: 40px
}
.app .tile-basic.tile-basic-icon-top .tile-icon {
	padding-top: 0;
	margin-top: -40px
}
.app .tile-basic.tile-basic-icon-top .tile-icon .fa, .app .tile-basic.tile-basic-icon-top .tile-icon span[class^=icon-] {
	background: #FFF;
	border-color: #EDEFF0;
	border-width: 5px;
	width: 90px;
	height: 90px
}
.app .list-group, .app .listing, .app .listing .listing-item {
	width: 100%;
	float: left
}
.app .tile-basic.tile-basic-icon-top .tile-icon+.tile-content {
	padding-top: 20px
}
.app .tile-basic.tile-basic-shadow {
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .tile-basic.tile-basic-hover-shadow {
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear
}
.app .tile-basic.tile-basic-hover-shadow:hover {
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .tile-basic.tile-basic-bordered {
	border: 1px solid #DBE0E4
}
.app .tile-basic.tile-transparent {
	background: 0 0;
	border: 0
}
.app .list-group .list-group-item {
	background: #FFF;
	border-color: #DBE0E4;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear;
	line-height: 20px
}
.app .list-group.list-group-adapt .list-group-item:first-child, .app .list-group.list-group-inline.list-group-adapt-top .list-group-item {
	border-top: 0
}
.app .list-group .list-group-item .fa, .app .list-group .list-group-item span[class^=icon] {
	float: left;
	font-size: 20px;
	margin-right: 10px;
	line-height: 20px
}
.app .list-group .list-group-item .fa {
	font-size: 14px
}
.app .list-group .list-group-item.active, .app .list-group .list-group-item.active:focus, .app .list-group .list-group-item.active:hover {
	background: #2D3349;
	color: #FFF;
	font-weight: 600;
	z-index: 0
}
.app .list-group .list-group-item.disabled, .app .list-group .list-group-item.disabled:focus, .app .list-group .list-group-item.disabled:hover {
	background: #F5F5F5
}
.app .list-group .list-group-item.list-group-item-highlighted {
	background: #fafafa
}
.app .list-group .list-group-title {
	font-weight: 700;
	font-size: 11px;
	text-transform: uppercase;
	line-height: 20px;
	margin-top: 15px;
	margin-bottom: 5px;
	color: #2b2b2b;
	padding: 5px 15px
}
.app .app-feature-gallery-horizontal>.app-feature-gallery, .app .list-group .list-group-title:first-child {
	margin-top: 0
}
.app .list-group a.list-group-item:focus, .app .list-group a.list-group-item:hover, .app .list-group button.list-group-item:focus, .app .list-group button.list-group-item:hover {
	background: #F5F5F5
}
.app .list-group.list-group-noborder .list-group-item {
	border: 0
}
.app .list-group.list-group-noborder .list-group-item.active, .app .list-group.list-group-noborder .list-group-item.active:focus, .app .list-group.list-group-noborder .list-group-item.active:hover {
	background: #F5F5F5;
	color: #454545
}
.app .list-group.list-group-noborder .list-group-item.disabled, .app .list-group.list-group-noborder .list-group-item.disabled:focus, .app .list-group.list-group-noborder .list-group-item.disabled:hover {
	background: #FFF
}
.app .list-group.list-group-condensed .list-group-item {
	border: 0;
	padding: 8px 0;
	background: 0 0;
	color: #1B2431;
	-webkit-transition: color .1s linear;
	-moz-transition: color .1s linear;
	-ms-transition: color .1s linear;
	-o-transition: color .1s linear;
	transition: color .1s linear
}
.app .list-group.list-group-condensed .list-group-item.active, .app .list-group.list-group-condensed .list-group-item.active:focus, .app .list-group.list-group-condensed .list-group-item.active:hover {
	background: 0 0;
	color: #0c7dba
}
.app .list-group.list-group-condensed a.list-group-item:focus, .app .list-group.list-group-condensed a.list-group-item:hover, .app .list-group.list-group-condensed button.list-group-item:focus, .app .list-group.list-group-condensed button.list-group-item:hover {
	background: 0 0;
	color: #0F9DEA
}
.app .list-group.list-group-condensed .list-group-title {
	padding: 0
}
.app .list-group.list-group-condensed .list-group-title:first-child {
	margin-top: 10px
}
.app .list-group.list-group-inline .list-group-item {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.app .list-group.list-group-inline .list-group-item:not(:last-child) {
	border-right: 0
}
.app .list-group.list-group-inline.list-group-adapt-bottom .list-group-item {
	border-bottom: 0
}
.app .list-group.list-group-inline.list-group-adapt-side .list-group-item:first-child {
	border-left: 0
}
.app .list-group.list-group-inline.list-group-adapt-side .list-group-item:last-child {
	border-right: 0
}
.app .list-group.list-group-adapt .list-group-item {
	float: left;
	width: 100%;
	border-left: 0;
	border-right: 0;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	padding: 15px
}
.app .list-group.list-group-adapt .list-group-item.active, .app .list-group.list-group-adapt .list-group-item.active:focus, .app .list-group.list-group-adapt .list-group-item.active:hover {
	background: #F5F5F5;
	color: #454545;
	font-weight: 400
}
.app .list-group.list-group-adapt .list-group-item.disabled, .app .list-group.list-group-adapt .list-group-item.disabled:focus, .app .list-group.list-group-adapt .list-group-item.disabled:hover {
	background: #FFF
}
.app .list-group.list-group-adapt .list-group-item:last-child {
	border-bottom: 0
}
.app .block .app-heading+.list-group {
	margin-top: -5px
}
.app .block>.list-group {
	margin-bottom: 0
}
.app .block>.list-group .list-group-item {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	border-left: 0;
	border-right: 0
}
.app .block>.list-group:last-child .list-group-item:last-child {
	border-bottom: 0;
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px
}
.app .block>.list-group.list-group-inline .list-group-item {
	border-right: 1px solid #DBE0E4;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.app .block>.list-group.list-group-inline:last-child .list-group-item:first-child {
	-webkit-border-radius: 0 0 0 5px;
	-moz-border-radius: 0 0 0 5px;
	border-radius: 0 0 0 5px
}
.app .block>.list-group.list-group-inline:last-child .list-group-item:last-child {
	-webkit-border-radius: 0 0 5px;
	-moz-border-radius: 0 0 5px;
	border-radius: 0 0 5px
}
.app .panel>.list-group.list-group-inline .list-group-item {
	border-top: 0;
	border-bottom: 0;
	border-right: 1px solid #DBE0E4;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.app .panel>.list-group.list-group-inline:last-child .list-group-item:first-child {
	-webkit-border-radius: 0 0 0 5px;
	-moz-border-radius: 0 0 0 5px;
	border-radius: 0 0 0 5px
}
.app .panel>.list-group.list-group-inline:last-child .list-group-item:last-child {
	-webkit-border-radius: 0 0 5px;
	-moz-border-radius: 0 0 5px;
	border-radius: 0 0 5px
}
.app .listing {
	list-style: none;
	padding: 0;
	margin-bottom: 20px
}
.app .listing .listing-item {
	position: relative;
	line-height: 20px;
	padding: 5px 0
}
.app .listing .listing-item a {
	font-weight: 600
}
.app .listing .listing-item .fa {
	font-size: 14px
}
.app .listing .listing-item>.row {
	margin: 0
}
.app .listing .listing-item>.row>div[class^=col-] {
	padding: 0 15px 0 0
}
.app .listing .listing-item>.row>div[class^=col-]>img {
	margin-top: 6px
}
.app .listing .listing-item>.row>div[class^=col-]:last-child {
	padding-right: 0
}
.app .listing .listing-item.listing-item-with-icon {
	padding-left: 30px
}
.app .listing .listing-item.listing-item-with-icon .listing-item-icon {
	position: absolute;
	left: 0;
	top: 5px;
	width: 20px;
	text-align: center;
	font-size: 20px;
	line-height: 20px
}
.app .listing.dir-right .listing-item.listing-item-with-icon {
	padding-right: 30px;
	padding-left: 0
}
.app .listing.dir-right .listing-item.listing-item-with-icon .listing-item-icon {
	position: absolute;
	right: 0;
	left: auto;
	top: 5px
}
.app .listing.listing-separated .listing-item {
	border-bottom: 1px solid #DBE0E4;
	padding-bottom: 10px
}
.app .listing.listing-separated .listing-item:last-child {
	border-bottom: 0;
	padding-bottom: 0
}
.app .listing.mCustomScrollbar {
	padding-right: 0!important
}
.app .listing.mCustomScrollbar .mCSB_container {
	padding-right: 20px
}
.app .listing-large-box {
	float: left;
	width: 100%;
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 1px dashed #DBE0E4
}
.app .listing-large-box:last-child {
	border-bottom: 0;
	margin-bottom: 0
}
.app .gm-style .listing-large-box {
	margin-bottom: 0;
	padding-bottom: 0
}
.app .gm-style .listing-large-box .row {
	margin-left: 0;
	margin-right: 0
}
.app .gm-style .listing-large-box .row div[class^=col-] {
	padding-left: 0;
	padding-right: 0
}
@media (max-width:992px) {
.app .listing>.listing-item>.row>div[class^=col-] {
	padding: 0
}
}
.app .contact {
	position: relative;
	display: block;
	float: left;
	width: 100%;
	text-decoration: none;
	line-height: 20px;
	padding: 10px 0 10px 30px
}
.app .contact>img {
	width: 20px;
	position: absolute;
	left: 0;
	top: 10px
}
.app .contact.contact-lg, .app .contact.contact-single, .app .contact.contact-xlg {
	padding: 0 0 0 0px;
	margin-bottom: 20px
}
.app .contact.contact-lg>img, .app .contact.contact-single>img, .app .contact.contact-xlg>img {
	top: 0;
	width: 40px
}
.app .contact.contact-lg>.contact-container>a, .app .contact.contact-lg>.contact-container>p, .app .contact.contact-lg>.contact-container>span, .app .contact.contact-single>.contact-container>a, .app .contact.contact-single>.contact-container>p, .app .contact.contact-single>.contact-container>span, .app .contact.contact-xlg>.contact-container>a, .app .contact.contact-xlg>.contact-container>p, .app .contact.contact-xlg>.contact-container>span {
	width: 100%;
	line-height: 20px;
	margin: 0;
	padding: 0;
	display: block;
	text-decoration: none
}
.app .contact.contact-lg>.contact-container>a, .app .contact.contact-single>.contact-container>a, .app .contact.contact-xlg>.contact-container>a {
	font-weight: 600
}
.app .contact.contact-lg>.contact-container>span, .app .contact.contact-single>.contact-container>span, .app .contact.contact-xlg>.contact-container>span {
	color: #7F8FA4
}
.app .contact.contact-lg>.contact-container strong, .app .contact.contact-single>.contact-container strong, .app .contact.contact-xlg>.contact-container strong {
	font-weight: 600
}
.app .contact.contact-lg>.contact-controls, .app .contact.contact-single>.contact-controls, .app .contact.contact-xlg>.contact-controls {
	position: absolute;
	right: 0;
	top: 0
}
.app .contact.contact-xlg {
	padding: 0 0 0 70px
}
.app .contact.contact-xlg>img {
	top: 0;
	width: 60px
}
.app .contact.contact-xlg>.contact-controls {
	top: 10px
}
.app .contact.contact-rounded>img {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .contact.contact-bordered:after {
	position: absolute;
	content: " ";
	width: 26px;
	height: 26px;
	border: 1px solid #DBE0E4;
	background: 0 0;
	left: -3px;
	top: 7px
}
.app .contact.contact-bordered.contact-rounded:after {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .contact.contact-bordered.contact-lg:after {
	width: 46px;
	height: 46px;
	top: -3px
}
.app .contact.contact-bordered.contact-xlg:after {
	width: 66px;
	height: 66px;
	top: -3px
}
.app .contact.contact-dir-right {
	padding-left: 0;
	padding-right: 30px
}
.app .contact.contact-dir-right.contact-lg, .app .contact.contact-ps-controls {
	padding-right: 50px
}
.app .contact.contact-dir-right>img {
	left: auto;
	right: 3px
}
.app .contact.contact-dir-right.contact-xlg {
	padding-right: 70px
}
.app .contact.contact-dir-right.contact-bordered:after {
	left: auto;
	right: 0
}
.app .contact.contact-faded>img {
	-webkit-opacity: .7;
	-moz-opacity: .7;
	opacity: .7;
	-webkit-transition: opacity .1s linear;
	-moz-transition: opacity .1s linear;
	-ms-transition: opacity .1s linear;
	-o-transition: opacity .1s linear;
	transition: opacity .1s linear
}
.app .contact.contact-faded:hover>img {
	-webkit-opacity: 1;
	-moz-opacity: 1;
	opacity: 1
}
.app .contact.contact-single {
	text-align: center;
	padding: 0
}
.app .contact.contact-single>img {
	position: relative;
	top: auto;
	left: auto;
	display: inline-block;
	width: 60px;
	margin: 0 0 15px
}
.app .contact.contact-single.contact-bordered:after {
	left: 50%;
	top: -3px;
	margin-left: -33px;
	width: 66px;
	height: 66px
}
.app .contact.contact-single .contact-controls {
	right: 50%;
	margin-right: 40px;
	top: 10px
}
.app .contact.contact-single .contact-controls.contact-controls-dir-right {
	right: auto;
	left: 50%;
	margin-right: 0;
	margin-left: 40px
}
.app .contact.status-away:before, .app .contact.status-offline:before, .app .contact.status-online:before {
	content: " ";
	position: absolute;
	left: -10px;
	top: 14px;
	width: 14px;
	height: 14px;
	border: 2px solid #FFF;
	background: #DBE0E4;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	z-index: 1
}
.app .contact.status-away.contact-lg:before, .app .contact.status-offline.contact-lg:before, .app .contact.status-online.contact-lg:before {
	width: 16px;
	height: 16px;
	top: 28px;
	left: 28px
}
.app .contact.status-away.contact-xlg:before, .app .contact.status-offline.contact-xlg:before, .app .contact.status-online.contact-xlg:before {
	width: 20px;
	height: 20px;
	top: 42px;
	left: 42px
}
.app .contact.status-away.contact-single:before, .app .contact.status-offline.contact-single:before, .app .contact.status-online.contact-single:before {
	width: 16px;
	height: 16px;
	left: 50%;
	top: 48px;
	margin-left: 14px
}
.app .contact.status-online:before {
	background: #76AB3C
}
.app .contact.status-away:before {
	background: #F69F00
}
.app .contact.contact-image-only {
	width: auto;
	padding: 0;
	margin-right: 10px
}
.app .contact.contact-image-only img {
	position: relative;
	top: 0;
	float: left
}
.app .contact.contact-image-only:after {
	top: -3px
}
.app .app-feature-gallery {
	list-style: none;
	display: block;
	float: left;
	width: 100%;
	padding: 0;
	margin-top: 10px;
	margin-bottom: 5px;
	position: relative
}
.app .app-feature-gallery>li {
	left: 0;
	top: 0;
	position: absolute;
	width: 100%;
	height: 100%;
	z-index: 0;
	cursor: pointer;
	-webkit-transform: scale(.85);
	-moz-transform: scale(.85);
	-ms-transform: scale(.85);
	-o-transform: scale(.85);
	transform: scale(.85);
	-webkit-opacity: 0;
	-moz-opacity: 0;
	opacity: 0;
	-webkit-box-shadow: 0 3px 6px rgba(0,0,0,.1);
	-moz-box-shadow: 0 3px 6px rgba(0,0,0,.1);
	box-shadow: 0 3px 6px rgba(0,0,0,.1);
	-webkit-transition: all .3s linear;
	-moz-transition: all .3s linear;
	-ms-transition: all .3s linear;
	-o-transition: all .3s linear;
	transition: all .3s linear;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .app-feature-gallery>li:nth-child(1) {
	z-index: 3;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
	-webkit-opacity: 1;
	-moz-opacity: 1;
	opacity: 1
}
.app .app-feature-gallery>li:nth-child(2) {
	z-index: 2;
	top: -15px;
	-webkit-transform: scale(.95);
	-moz-transform: scale(.95);
	-ms-transform: scale(.95);
	-o-transform: scale(.95);
	transform: scale(.95);
	-webkit-opacity: .9;
	-moz-opacity: .9;
	opacity: .9
}
.app .app-feature-gallery>li:nth-child(3) {
	z-index: 1;
	top: -28px;
	-webkit-transform: scale(.9);
	-moz-transform: scale(.9);
	-ms-transform: scale(.9);
	-o-transform: scale(.9);
	transform: scale(.9);
	-webkit-opacity: .8;
	-moz-opacity: .8;
	opacity: .8
}
.app .app-feature-gallery.app-feature-gallery-noshadow>li {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none
}
.app .app-feature-gallery-horizontal {
	float: left;
	width: 100%;
	padding-right: 30px
}
.app .app-feature-gallery-horizontal>.app-feature-gallery>li {
	top: 0;
	left: auto;
	right: 0
}
.app .app-feature-gallery-horizontal>.app-feature-gallery>li:nth-child(1) {
	right: 0
}
.app .app-feature-gallery-horizontal>.app-feature-gallery>li:nth-child(2) {
	right: -24px
}
.app .app-feature-gallery-horizontal>.app-feature-gallery>li:nth-child(3) {
	right: -45px
}
.app .app-feature-gallery-horizontal>.app-feature-gallery>li:nth-child(4) {
	right: -72px
}
.app .app-feature-gallery-horizontal.dir-left {
	padding-right: 0;
	padding-left: 30px
}
.app .app-feature-gallery-horizontal.dir-left>.app-feature-gallery>li {
	left: 0;
	right: auto
}
.app .app-feature-gallery-horizontal.dir-left>.app-feature-gallery>li:nth-child(1) {
	left: 0
}
.app .app-feature-gallery-horizontal.dir-left>.app-feature-gallery>li:nth-child(2) {
	left: -24px
}
.app .app-feature-gallery-horizontal.dir-left>.app-feature-gallery>li:nth-child(3) {
	left: -45px
}
.app .app-feature-gallery-horizontal.dir-left>.app-feature-gallery>li:nth-child(4) {
	left: -72px
}
.app .app-feature-gallery>li .block, .app .app-feature-gallery>li .tile-basic {
	margin-bottom: 0
}
.app .app-preview-video {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 25px;
	height: 0;
	float: left;
	width: 100%
}
.app .app-preview-video iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%
}
.app-loading {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 5px;
	background: rgba(0,0,0,.2);
	z-index: 1001;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.3);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.3);
	box-shadow: 0 1px 2px rgba(0,0,0,.3)
}
.app-loading .app-loading-progress {
	background: #FFF;
	display: block;
	float: left;
	height: 5px
}
.app-loading .app-loading-progress.app-loading-primary {
	background: #292f43
}
.app-loading .app-loading-progress.app-loading-warning {
	background: #F69F00
}
.app-loading .app-loading-progress.app-loading-success {
	background: #76AB3C
}
.app-loading .app-loading-progress.app-loading-info {
	background: #4FB5DD
}
.app-loading .app-loading-progress.app-loading-danger {
	background: #F04E51
}
.app-loading.bottom {
	top: auto;
	bottom: 0
}
.app .app-tip {
	float: left;
	width: 100%;
	padding: 5px 10px;
	line-height: 20px;
	background: #FFF;
	color: #454545;
	border: 1px solid #DBE0E4;
	margin-bottom: 10px
}
.app .app-tip.app-tip-runing {
	overflow: hidden
}
.app .app-tip.app-tip-runing .app-tip-runner {
	-moz-transform: translateX(100%);
	-webkit-transform: translateX(100%);
	transform: translateX(100%);
	-moz-animation: scroll-left 10s linear infinite;
	-webkit-animation: scroll-left 10s linear infinite;
	animation: scroll-left 10s linear infinite
}
.app .app-tip.app-tip-runing .app-tip-runner.app-tip-runner-right {
	-moz-transform: translateX(-100%);
	-webkit-transform: translateX(-100%);
	transform: translateX(-100%);
	-moz-animation: scroll-right 10s linear infinite;
	-webkit-animation: scroll-right 10s linear infinite;
	animation: scroll-right 10s linear infinite
}
.app .app-tip.app-tip-runing .app-tip-runner.app-tip-speed-slow {
	-moz-animation-duration: 20s;
	-webkit-animation-duration: 20s;
	animation-duration: 20s
}
.app .app-tip.app-tip-noborder {
	border: 0
}
.app .app-tip.app-tip-primary {
	background: #292f43;
	color: #FFF;
	border-color: #1f2433
}
.app .app-tip.app-tip-info {
	background: #4FB5DD;
	color: #FFF;
	border-color: #3aacd9
}
.app .app-tip.app-tip-success {
	background: #76AB3C;
	color: #FFF;
	border-color: #699835
}
.app .app-tip.app-tip-warning {
	background: #F69F00;
	color: #FFF;
	border-color: #dd8f00
}
.app .app-tip.app-tip-danger {
	background: #F04E51;
	color: #FFF;
	border-color: #ee363a
}
.app .app-tip.app-tip-lg {
	padding: 10px
}
@-moz-keyframes scroll-left {
0% {
-moz-transform:translateX(100%)
}
100% {
-moz-transform:translateX(-100%)
}
}
@-webkit-keyframes scroll-left {
0% {
-webkit-transform:translateX(100%)
}
100% {
-webkit-transform:translateX(-100%)
}
}
@keyframes scroll-left {
0% {
-moz-transform:translateX(100%);
-webkit-transform:translateX(100%);
transform:translateX(100%)
}
100% {
-moz-transform:translateX(-100%);
-webkit-transform:translateX(-100%);
transform:translateX(-100%)
}
}
@-moz-keyframes scroll-right {
0% {
-moz-transform:translateX(-100%)
}
100% {
-moz-transform:translateX(100%)
}
}
@-webkit-keyframes scroll-right {
0% {
-webkit-transform:translateX(-100%)
}
100% {
-webkit-transform:translateX(100%)
}
}
@keyframes scroll-right {
0% {
-moz-transform:translateX(-100%);
-webkit-transform:translateX(-100%);
transform:translateX(-100%)
}
100% {
-moz-transform:translateX(100%);
-webkit-transform:translateX(100%);
transform:translateX(100%)
}
}
.app-statusbar {
	position: fixed;
	bottom: 0;
	width: 100%;
	padding: 10px;
	background: rgba(0,0,0,.9);
	display: none;
	z-index: 20;
	-webkit-box-shadow: -1px 0 6px 0 rgba(0,0,0,.1);
	-moz-box-shadow: -1px 0 6px 0 rgba(0,0,0,.1);
	box-shadow: -1px 0 6px 0 rgba(0,0,0,.1)
}
.app-statusbar .app-statusbar-icon {
	float: left;
	margin: 10px 10px 0;
	color: #FFF
}
.app-statusbar .app-statusbar-icon [class^=icon] {
	font-size: 20px;
	line-height: 20px
}
.app-statusbar .app-statusbar-icon .app-spinner {
	margin: 0 5px 0 0
}
.app-statusbar .app-statusbar-text {
	font-weight: 600;
	color: #FFF;
	float: left;
	padding-right: 30px;
	line-height: 40px
}
.app-statusbar .app-statusbar-body {
	float: left;
	width: 100%;
	padding-right: 30px
}
.app-statusbar .app-statusbar-close {
	position: absolute;
	right: 20px;
	top: 50%;
	margin-top: -6px;
	cursor: pointer;
	opacity: .5;
	color: #FFF
}
.app-statusbar .app-statusbar-close:hover {
	opacity: .8
}
.app-statusbar.app-statusbar-top {
	bottom: auto;
	top: 0
}
.app-statusbar.app-statusbar-default {
	background: rgba(255,255,255,.9)
}
.app-statusbar.app-statusbar-default .app-statusbar-close, .app-statusbar.app-statusbar-default .app-statusbar-icon, .app-statusbar.app-statusbar-default .app-statusbar-text {
	color: #454545
}
.app-statusbar.app-statusbar-danger .app-statusbar-close, .app-statusbar.app-statusbar-danger .app-statusbar-icon, .app-statusbar.app-statusbar-danger .app-statusbar-text, .app-statusbar.app-statusbar-info .app-statusbar-close, .app-statusbar.app-statusbar-info .app-statusbar-icon, .app-statusbar.app-statusbar-info .app-statusbar-text, .app-statusbar.app-statusbar-primary .app-statusbar-close, .app-statusbar.app-statusbar-primary .app-statusbar-icon, .app-statusbar.app-statusbar-primary .app-statusbar-text, .app-statusbar.app-statusbar-success .app-statusbar-close, .app-statusbar.app-statusbar-success .app-statusbar-icon, .app-statusbar.app-statusbar-success .app-statusbar-text, .app-statusbar.app-statusbar-warning .app-statusbar-close, .app-statusbar.app-statusbar-warning .app-statusbar-icon, .app-statusbar.app-statusbar-warning .app-statusbar-text {
	color: #FFF
}
.app-statusbar.app-statusbar-primary {
	background: rgba(41,47,67,.9)
}
.app-statusbar.app-statusbar-info {
	background: rgba(79,181,221,.9)
}
.app-statusbar.app-statusbar-success {
	background: rgba(118,171,60,.9)
}
.app-statusbar.app-statusbar-warning {
	background: rgba(246,159,0,.9)
}
.app-statusbar.app-statusbar-danger {
	background: rgba(240,78,81,.9)
}
.app-spinner.loading {
	float: left;
	border-radius: 50%;
	margin: 10px 5px 10px 0;
	width: 20px;
	height: 20px;
	border: 3px solid rgba(219,224,228,.1);
	border-top-color: #DBE0E4;
	animation: spin 1s infinite linear
}
.app-spinner.loading.loading-primary {
	border-color: rgba(41,47,67,.3);
	border-top-color: #292f43
}
.app-spinner.loading.loading-info {
	border-color: rgba(79,181,221,.3);
	border-top-color: #4FB5DD
}
.app-spinner.loading.loading-success {
	border-color: rgba(118,171,60,.3);
	border-top-color: #76AB3C
}
.app-spinner.loading.loading-warning {
	border-color: rgba(246,159,0,.3);
	border-top-color: #F69F00
}
.app-spinner.loading.loading-danger {
	border-color: rgba(240,78,81,.3);
	border-top-color: #F04E51
}
.app-spinner.pulse {
	float: left;
	position: relative;
	width: 5px;
	height: 20px;
	margin: 10px 15px 10px 10px;
	background: rgba(219,224,228,.1);
	animation: pulse 750ms infinite;
	animation-delay: 250ms
}
.app-spinner.pulse:after, .app-spinner.pulse:before {
	content: '';
	position: absolute;
	display: block;
	height: 12px;
	width: 5px;
	background: rgba(219,224,228,.1);
	top: 50%;
	transform: translateY(-50%);
	animation: pulse 750ms infinite
}
.app-spinner.pulsate, .app-spinner.rotating, .app-spinner.scaleout, .app-spinner.snake {
	width: 20px;
	height: 20px;
	margin: 10px 5px 10px 0;
	float: left
}
.app-spinner.pulse:before {
	left: -10px
}
.app-spinner.pulse:after {
	left: 10px;
	animation-delay: 250ms
}
.app-spinner.pulse.pulse-primary, .app-spinner.pulse.pulse-primary:after, .app-spinner.pulse.pulse-primary:before {
	background: #292f43
}
.app-spinner.pulse.pulse-info, .app-spinner.pulse.pulse-info:after, .app-spinner.pulse.pulse-info:before {
	background: #4FB5DD
}
.app-spinner.pulse.pulse-success, .app-spinner.pulse.pulse-success:after, .app-spinner.pulse.pulse-success:before {
	background: #76AB3C
}
.app-spinner.pulse.pulse-warning, .app-spinner.pulse.pulse-warning:after, .app-spinner.pulse.pulse-warning:before {
	background: #F69F00
}
.app-spinner.pulse.pulse-danger, .app-spinner.pulse.pulse-danger:after, .app-spinner.pulse.pulse-danger:before {
	background: #F04E51
}
.app-spinner.scaleout {
	background-color: #DBE0E4;
	border-radius: 100%;
	-webkit-animation: scaleout 1s infinite ease-in-out;
	animation: scaleout 1s infinite ease-in-out
}
.app-spinner.scaleout.scaleout-primary {
	background-color: #292f43
}
.app-spinner.scaleout.scaleout-info {
	background-color: #4FB5DD
}
.app-spinner.scaleout.scaleout-success {
	background-color: #76AB3C
}
.app-spinner.scaleout.scaleout-warning {
	background-color: #F69F00
}
.app-spinner.scaleout.scaleout-danger {
	background-color: #F04E51
}
.app-spinner.rotating {
	position: relative;
	animation: rotate 1.4s infinite ease-in-out, background 1.4s infinite ease-in-out alternate
}
.app-spinner.snake {
	position: relative;
	border: 3px solid #292f43;
	border-right-color: transparent;
	border-radius: 50%;
	animation: spin 1s infinite linear
}
.app-spinner.pulsate {
	position: relative;
	border: 3px solid #292f43;
	border-radius: 50%;
	animation: pulsate 1s infinite linear
}
.btn>.app-spinner {
	margin: 4px 10px 4px 0
}
@-webkit-keyframes scaleout {
0% {
-webkit-transform:scale(0)
}
100% {
-webkit-transform:scale(1);
opacity:0
}
}
@keyframes scaleout {
0% {
-webkit-transform:scale(0);
transform:scale(0)
}
100% {
-webkit-transform:scale(1);
transform:scale(1);
opacity:0
}
}
@keyframes spin {
0% {
transform:rotate(0)
}
100% {
transform:rotate(360deg)
}
}
@keyframes pulse {
50% {
background:#DBE0E4
}
}
@keyframes pulsate {
0% {
transform:scale(.1);
opacity:0
}
50% {
opacity:1
}
100% {
transform:scale(1.2);
opacity:0
}
}
@keyframes rotate {
0% {
transform:perspective(120px) rotateX(0) rotateY(0)
}
50% {
transform:perspective(120px) rotateX(-180deg) rotateY(0)
}
100% {
transform:perspective(120px) rotateX(-180deg) rotateY(-180deg)
}
}
@keyframes background {
0% {
background-color:#292f43
}
50% {
background-color:#4FB5DD
}
100% {
background-color:#76AB3C
}
}
.app .app-widget-button {
	position: relative;
	display: inline-block;
	width: 40px;
	height: 40px;
	text-align: center;
	text-decoration: none;
	color: #1B2431;
	background: #FFF;
	border: 1px solid #DBE0E4;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	margin: 0 5px 10px 0;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.app .app-widget-button .fa {
	font-size: 28px;
	line-height: 37px
}
.app .app-widget-button [class^=icon-] {
	font-size: 20px;
	line-height: 37px
}
.app .app-widget-button:hover {
	background: #F5F5F5
}
.app .app-widget-button.app-widget-button-bordered:before {
	content: " ";
	position: absolute;
	left: -4px;
	top: -4px;
	width: 46px;
	height: 46px;
	border: 1px dashed #DBE0E4;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px
}
.app .app-widget-button.app-widget-button-lg {
	width: 80px;
	height: 80px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .app-widget-button.app-widget-button-lg .fa {
	font-size: 42px;
	line-height: 80px
}
.app .app-widget-button.app-widget-button-lg [class^=icon-] {
	font-size: 40px;
	line-height: 80px
}
.app .app-widget-button.app-widget-button-lg.app-widget-button-bordered:before {
	width: 86px;
	height: 86px
}
.app .app-widget-button.app-widget-button-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(219,224,228,.5);
	-moz-box-shadow: 0 0 0 3px rgba(219,224,228,.5);
	box-shadow: 0 0 0 3px rgba(219,224,228,.5)
}
.app .app-widget-button.app-widget-button-primary {
	background: #292f43;
	color: #FFF;
	border-color: #232839
}
.app .app-widget-button.app-widget-button-primary:hover {
	background: #1f2433
}
.app .app-widget-button.app-widget-button-primary.app-widget-button-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(41,47,67,.3);
	-moz-box-shadow: 0 0 0 3px rgba(41,47,67,.3);
	box-shadow: 0 0 0 3px rgba(41,47,67,.3)
}
.app .app-widget-button.app-widget-button-primary.app-widget-button-bordered:before {
	border-color: rgba(41,47,67,.5);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px
}
.app .app-widget-button.app-widget-button-info {
	background: #4FB5DD;
	color: #FFF;
	border-color: #42b0db
}
.app .app-widget-button.app-widget-button-info:hover {
	background: #3aacd9
}
.app .app-widget-button.app-widget-button-info.app-widget-button-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(79,181,221,.3);
	-moz-box-shadow: 0 0 0 3px rgba(79,181,221,.3);
	box-shadow: 0 0 0 3px rgba(79,181,221,.3)
}
.app .app-widget-button.app-widget-button-info.app-widget-button-bordered:before {
	border-color: rgba(79,181,221,.5);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px
}
.app .app-widget-button.app-widget-button-success {
	background: #76AB3C;
	color: #FFF;
	border-color: #6ea038
}
.app .app-widget-button.app-widget-button-success:hover {
	background: #699835
}
.app .app-widget-button.app-widget-button-success.app-widget-button-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(118,171,60,.3);
	-moz-box-shadow: 0 0 0 3px rgba(118,171,60,.3);
	box-shadow: 0 0 0 3px rgba(118,171,60,.3)
}
.app .app-widget-button.app-widget-button-success.app-widget-button-bordered:before {
	border-color: rgba(118,171,60,.5);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px
}
.app .app-widget-button.app-widget-button-warning {
	background: #F69F00;
	color: #FFF;
	border-color: #e79500
}
.app .app-widget-button.app-widget-button-warning:hover {
	background: #dd8f00
}
.app .app-widget-button.app-widget-button-warning.app-widget-button-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(246,159,0,.3);
	-moz-box-shadow: 0 0 0 3px rgba(246,159,0,.3);
	box-shadow: 0 0 0 3px rgba(246,159,0,.3)
}
.app .app-widget-button.app-widget-button-warning.app-widget-button-bordered:before {
	border-color: rgba(246,159,0,.5);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px
}
.app .app-widget-button.app-widget-button-danger {
	background: #F04E51;
	color: #FFF;
	border-color: #ef4043
}
.app .app-widget-button.app-widget-button-danger:hover {
	background: #ee363a
}
.app .app-widget-button.app-widget-button-danger.app-widget-button-ghost {
	-webkit-box-shadow: 0 0 0 3px rgba(240,78,81,.3);
	-moz-box-shadow: 0 0 0 3px rgba(240,78,81,.3);
	box-shadow: 0 0 0 3px rgba(240,78,81,.3)
}
.app .app-widget-button.app-widget-button-danger.app-widget-button-bordered:before {
	border-color: rgba(240,78,81,.5);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px
}
.app .app-widget-tile {
	float: left;
	width: 100%;
	padding: 10px 15px;
	min-width: 90px;
	background: #FFF;
	border: 1px solid #DBE0E4;
	margin-bottom: 20px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	zoom: 1
}
.app .app-widget-tile:after, .app .app-widget-tile:before {
	content: "";
	display: table
}
.app .app-widget-tile:after {
	clear: both
}
.app .app-widget-tile .row {
	margin: 0
}
.app .app-widget-tile .row [class^=col-] {
	padding: 0
}
.app .app-widget-tile .line {
	float: left;
	width: 100%
}
.app .app-widget-tile .subtitle, .app .app-widget-tile .title {
	color: #1B2431;
	font-size: 11px;
	font-weight: 600;
	float: left;
text-transform: capitalize;}
.app .app-widget-tile .subtitle {
	color: #7F8FA4
}
.app .app-widget-tile .intval {
	font-size: 20px;
	line-height: 50px;
	font-weight: 600;
	text-align: center;
	float: left;
	width: 100%
}
.app .app-widget-tile .intval small {
	font-size: 16px;
	color: #7F8FA4;
	text-transform: uppercase;
	line-height: 20px
}
.app .app-widget-tile .intval.intval-lg {
	line-height: 60px;
	font-size: 34px
}
.app .app-widget-tile .icon {
	float: left;
	width: 100%;
	text-align: center;
	padding-right: 10px
}
.app .app-widget-tile .icon .fa {
	font-size: 42px;
	line-height: 60px
}
.app .app-widget-tile .icon [class^=icon-] {
	font-size: 40px;
	line-height: 70px
}
.app .app-widget-tile .icon.icon-right {
	padding-right: 0;
	padding-left: 10px
}
.app .app-widget-tile .icon.icon-lg .fa {
	font-size: 31px;
	line-height:50px
}
.app .app-widget-tile .icon.icon-lg [class^=icon-] {
	font-size: 60px;
	line-height: 90px
}
.app .app-widget-informer .subtitle, .app .app-widget-informer .title {
	font-size: 11px;
	width: 100%;

	font-weight: 600;
	float: left;
	text-transform: uppercase
}
.app .app-widget-tile.app-widget-highlight {
	-webkit-box-shadow: 0 2px 6px rgba(0,0,0,.03);
	-moz-box-shadow: 0 2px 6px rgba(0,0,0,.03);
	box-shadow: 0 2px 6px rgba(0,0,0,.03)
}
.app .app-widget-tile.app-widget-tile-primary {
	background: #292f43;
	border: 1px solid #272c40
}
.app .app-widget-tile.app-widget-tile-primary .icon, .app .app-widget-tile.app-widget-tile-primary .intval, .app .app-widget-tile.app-widget-tile-primary .title {
	color: #FFF
}
.app .app-widget-tile.app-widget-tile-primary .subtitle {
	color: #e6e6e6
}
.app .app-widget-tile.app-widget-tile-primary.app-widget-gradient {
	background-color: #292f43;
	background-image: -webkit-gradient(linear, left top, right top, from(#292f43), to(#161923));
	background-image: -webkit-linear-gradient(left, #292f43, #161923);
	background-image: -moz-linear-gradient(left, #292f43, #161923);
	background-image: -ms-linear-gradient(left, #292f43, #161923);
	background-image: -o-linear-gradient(left, #292f43, #161923)
}
.app .app-widget-tile.app-widget-tile-info {
	background: #4FB5DD;
	border: 1px solid #4bb3dc
}
.app .app-widget-tile.app-widget-tile-info .icon, .app .app-widget-tile.app-widget-tile-info .intval, .app .app-widget-tile.app-widget-tile-info .title {
	color: #FFF
}
.app .app-widget-tile.app-widget-tile-info .subtitle {
	color: #e6e6e6
}
.app .app-widget-tile.app-widget-tile-info.app-widget-gradient {
	background-color: #4FB5DD;
	background-image: -webkit-gradient(linear, left top, right top, from(#4FB5DD), to(#28a1d1));
	background-image: -webkit-linear-gradient(left, #4FB5DD, #28a1d1);
	background-image: -moz-linear-gradient(left, #4FB5DD, #28a1d1);
	background-image: -ms-linear-gradient(left, #4FB5DD, #28a1d1);
	background-image: -o-linear-gradient(left, #4FB5DD, #28a1d1)
}
.app .app-widget-tile.app-widget-tile-success {
	background: #76AB3C;
	border: 1px solid #73a73b
}
.app .app-widget-tile.app-widget-tile-success .icon, .app .app-widget-tile.app-widget-tile-success .intval, .app .app-widget-tile.app-widget-tile-success .title {
	color: #FFF
}
.app .app-widget-tile.app-widget-tile-success .subtitle {
	color: #e6e6e6
}
.app .app-widget-tile.app-widget-tile-success.app-widget-gradient {
	background-color: #76AB3C;
	background-image: -webkit-gradient(linear, left top, right top, from(#76AB3C), to(#5c852f));
	background-image: -webkit-linear-gradient(left, #76AB3C, #5c852f);
	background-image: -moz-linear-gradient(left, #76AB3C, #5c852f);
	background-image: -ms-linear-gradient(left, #76AB3C, #5c852f);
	background-image: -o-linear-gradient(left, #76AB3C, #5c852f)
}
.app .app-widget-tile.app-widget-tile-warning {
	background: #F69F00;
	border: 1px solid #f19c00
}
.app .app-widget-tile.app-widget-tile-warning .icon, .app .app-widget-tile.app-widget-tile-warning .intval, .app .app-widget-tile.app-widget-tile-warning .title {
	color: #FFF
}
.app .app-widget-tile.app-widget-tile-warning .subtitle {
	color: #e6e6e6
}
.app .app-widget-tile.app-widget-tile-warning.app-widget-gradient {
	background-color: #F69F00;
	background-image: -webkit-gradient(linear, left top, right top, from(#F69F00), to(#c37e00));
	background-image: -webkit-linear-gradient(left, #F69F00, #c37e00);
	background-image: -moz-linear-gradient(left, #F69F00, #c37e00);
	background-image: -ms-linear-gradient(left, #F69F00, #c37e00);
	background-image: -o-linear-gradient(left, #F69F00, #c37e00)
}
.app .app-widget-tile.app-widget-tile-danger {
	background: #F04E51;
	border: 1px solid #f0494c
}
.app .app-widget-tile.app-widget-tile-danger .icon, .app .app-widget-tile.app-widget-tile-danger .intval, .app .app-widget-tile.app-widget-tile-danger .title {
	color: #FFF
}
.app .app-widget-tile.app-widget-tile-danger .subtitle {
	color: #e6e6e6
}
.app .app-widget-tile.app-widget-tile-danger.app-widget-gradient {
	background-color: #F04E51;
	background-image: -webkit-gradient(linear, left top, right top, from(#F04E51), to(#ec1f23));
	background-image: -webkit-linear-gradient(left, #F04E51, #ec1f23);
	background-image: -moz-linear-gradient(left, #F04E51, #ec1f23);
	background-image: -ms-linear-gradient(left, #F04E51, #ec1f23);
	background-image: -o-linear-gradient(left, #F04E51, #ec1f23)
}
.app .app-widget-informer {
	float: left;
	width: 100%;
	margin-bottom: 20px
}
.app .app-widget-informer .title {
	color: #1B2431
}
.app .app-widget-informer .subtitle {
	color: #7F8FA4
}
.app .app-widget-informer .subtitle .fa, .app .app-widget-informer .subtitle [class^=icon-], .app .app-widget-informer .title .fa, .app .app-widget-informer .title [class^=icon-] {
	margin-right: 5px;
	font-size: 14px
}
.app .app-widget-informer .subtitle .fa.pull-right, .app .app-widget-informer .subtitle [class^=icon-].pull-right, .app .app-widget-informer .title .fa.pull-right, .app .app-widget-informer .title [class^=icon-].pull-right {
	margin-right: 0;
	margin-left: 5px
}
.app .app-widget-informer .intval {
	font-size: 27px;
	line-height: 35px;
	color: #1B2431;
	font-weight: 600;
	float: left;
	width: 100%
}
.app .app-widget-informer .intval small {
	font-size: 14px;
	color: #7F8FA4;
	font-weight: 600
}
.app .app-widget-informer .intval.intval-floated {
	width: auto;
	margin-right: 20px;
	line-height: 40px
}
.app .app-widget-informer .tinyintval {
	font-size: 15px;
	font-weight: 700;
	color: #1B2431;
	float: left;
	width: 100%
}
.app .app-widget-informer .tinyintval small {
	font-size: 12px;
	color: #7F8FA4;
	font-weight: 600
}
.app .app-widget-informer .app-widget-informer-side {
	display: inline
}
.app .app-widget-informer .app-widget-informer-side .subtitle, .app .app-widget-informer .app-widget-informer-side .title {
	width: auto;
	float: none
}
.app .progress {
	float: left;
	width: 100%;
	height: 20px;
	margin-bottom: 0
}
.app .progress .progress-bar {
	line-height: 20px;
	font-size: 11px;
	font-weight: 600
}
.app .progress.progress-sm {
	height: 4px;
	margin: 8px 0
}
.app .progress.progress-sm .progress-bar {
	line-height: 4px;
	height: 4px
}
.app .progress.progress-md {
	height: 10px;
	margin: 5px 0
}
.app .progress.progress-md .progress-bar {
	line-height: 10px;
	height: 10px
}
.app .progress.progress-lg {
	height: 30px;
	margin: 5px 0
}
.app .progress.progress-lg .progress-bar {
	line-height: 30px;
	height: 30px
}
.app-faq {
	float: left;
	width: 100%
}
.app-faq .app-faq-item {
	float: left;
	width: 100%;
	margin-bottom: 10px;
	background: #FFF;
	border: 1px solid #DBE0E4;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.app .app-lock .app-lock-user img, .app-settings {
	-moz-transition: all .1s linear;
	-o-transition: all .1s linear
}
.app-faq .app-faq-item .app-faq-item-title {
	float: left;
	width: 100%;
	padding: 15px 15px 15px 45px;
	line-height: 20px;
	font-size: 13px;
	cursor: pointer;
	font-weight: 600;
	position: relative
}
.app-faq .app-faq-item .app-faq-item-title:after {
	position: absolute;
	content: "\e888";
	font-family: linearicons;
	left: 15px;
	top: 15px;
	width: 20px;
	height: 20px;
	font-size: 20px;
	speak: none;
	font-style: normal;
	font-weight: 400;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	color: #2D3349
}
.app-faq .app-faq-item .app-faq-item-content {
	float: left;
	width: 100%;
	padding: 0;
	max-height: 0;
	overflow: hidden
}
.app-faq .app-faq-item .app-faq-item-content .app-faq-highlight {
	color: #76AB3C;
	text-decoration: underline
}
.app-faq .app-faq-item.open {
	background: #fafafa
}
.app-faq .app-faq-item.open .app-faq-item-title:after {
	content: "\e887"
}
.app-faq .app-faq-item.open .app-faq-item-content {
	padding: 0 15px 15px;
	max-height: 500px
}
.app-faq .app-faq-item:hover {
	background: #F5F5F5
}
.app-faq .app-faq-item:last-child {
	margin-bottom: 0
}
.app .app-login-box {
	width: 340px;
	margin: 10% auto;
	background: #FFF;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	zoom: 1;
/*	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
*/}
.app .app-login-box:after, .app .app-login-box:before {
	content: "";
	display: table
}
.app .app-login-box:after {
	clear: both
}
.app .app-login-box .app-login-box-user {
	width: 100%;
	float: left;
	text-align: center;
	margin-bottom: 20px;
	padding: 30px 30px 0
}
.app .app-login-box .app-login-box-user img {
	width: 100px;
	border: 1px solid #DBE0E4;
	padding: 5px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .app-login-box .app-login-box-title {
	float: left;
	width: 100%;
	text-align: center;
	margin-bottom: 20px;
	padding: 0 30px
}
.app .app-login-box .app-login-box-title .title {
	font-size: 18px;
	font-weight: 400;
	color: #1B2431;
	margin-bottom: 5px
}
.app .app-login-box .app-login-box-title .subtitle {
	font-size: 14px;
	color: #7F8FA4
}
.app .app-login-box .app-login-box-container {
	float: left;
	width: 100%;
	padding: 0 30px 30px
}
.app .app-login-box .app-login-box-container>.title {
	float: left;
	width: 100%;
	font-size: 14px;
	font-weight: 400;
	color: #7F8FA4;
	margin-bottom: 20px;
	text-align: center
}
.app .app-login-box .app-login-box-or {
	float: left;
	width: 100%;
	padding: 10px 0 40px
}
.app .app-login-box .app-login-box-or .or {
	width: 40px;
	height: 40px;
	margin: 0 auto;
	position: relative;
	line-height: 40px;
	text-align: center;
	font-weight: 700;
	color: #7F8FA4
}
.app .app-login-box .app-login-box-or .or:after {
	content: " ";
	width: 40px;
	height: 40px;
	border: 1px solid #DBE0E4;
	position: absolute;
	left: 0;
	top: 0;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg)
}
.app .app-login-box .app-login-box-footer {
	float: left;
	width: 100%;
	background: #fafafa;
	padding: 15px 30px;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-topleft: 0;
	text-align: center;
	-webkit-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px
}
.app.app-fh, .app.app-fh .app-container {
	/*! height: 100%; */
}
.app .app-lock {
	width: 360px;
	position: absolute;
	left: 50%;
	margin-left: -180px;
	top: 50%;
	margin-top: -150px
}
.app .app-lock .app-lock-user {
	width: 100%;
	height: 100px;
	float: left;
	text-align: center;
	cursor: pointer
}
.app .app-lock .app-lock-user img {
	width: 100px;
	border: 1px solid #DBE0E4;
	padding: 5px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	-webkit-transition: all .1s linear;
	-ms-transition: all .1s linear;
	transition: all .1s linear;
	-webkit-box-shadow: 0 4px 20px 5px transparent;
	-moz-box-shadow: 0 4px 20px 5px transparent;
	box-shadow: 0 4px 20px 5px transparent
}
.app .app-lock .app-lock-user:hover img {
	-webkit-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-moz-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .app-lock .app-lock-form {
	position: relative;
	float: left;
	width: 100%;
	margin-top: 30px;
	background: #FFF;
	border: 1px solid #DBE0E4;
	display: none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	padding: 15px;
	-webkit-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-moz-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-webkit-transition: all .5s linear;
	-moz-transition: all .5s linear;
	-ms-transition: all .5s linear;
	-o-transition: all .5s linear;
	transition: all .5s linear
}
.app .app-lock .app-lock-form .form-control {
	text-align: center
}
.app .app-lock .app-lock-form:after, .app .app-lock .app-lock-form:before {
	bottom: 100%;
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none
}
.app .app-lock .app-lock-form:after {
	border-color: rgba(136,183,213,0);
	border-bottom-color: #FFF;
	border-width: 10px;
	margin-left: -10px
}
.app .app-lock .app-lock-form:before {
	border-color: rgba(194,225,245,0);
	border-bottom-color: #DBE0E4;
	border-width: 11px;
	margin-left: -11px
}
.app .app-lock.app-lock-open .app-lock-user img {
	-webkit-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-moz-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
.app .messages .messages-item {
	float: left;
	width: 100%;
	padding-right: 65px;
	position: relative;
	margin-bottom: 20px
}
.app .messages .messages-item .user {
	position: absolute;
	right: 0;
	top: 0
}
.app .messages .messages-item .user>img {
	width: 46px;
	padding: 3px;
	border: 1px solid #64baec;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.app .messages .messages-item .text {
	position: relative;
	float: right;
	width: 80%;
	border: 1px solid #64baec;
	background: #7bc4ef;
	color: #FFF;
	padding: 15px;
	margin-bottom: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .messages .messages-item .text:after, .app .messages .messages-item .text:before {
	left: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none
}
.app .messages .messages-item .text:after {
	border-color: rgba(245,245,245,0);
	border-left-color: #7bc4ef;
	border-width: 6px;
	margin-top: -6px
}
.app .messages .messages-item .text:before {
	border-color: rgba(240,240,240,0);
	border-left-color: #64baec;
	border-width: 7px;
	margin-top: -7px
}
.app .messages .messages-item .date {
	float: right;
	width: 80%;
	color: #7F8FA4;
	text-align: center
}
.app .messages .messages-item.inbox {
	padding-right: 0;
	padding-left: 65px
}
.app .messages .messages-item.inbox .user>img {
	border-color: #50b85d
}
.app .messages .messages-item.inbox .text {
	float: left;
	background: #62bf6e;
	border-color: #50b85d;
	color: #FFF
}
.app .messages .messages-item.inbox .text:after, .app .messages .messages-item.inbox .text:before {
	left: auto;
	right: 100%
}
.app .messages .messages-item.inbox .text:after {
	border-left-color: transparent;
	border-right-color: #62bf6e
}
.app .messages .messages-item.inbox .text:before {
	border-left-color: transparent;
	border-right-color: #50b85d
}
.app .messages .messages-item.inbox .date {
	float: left
}
.app .messages .messages-item.inbox .user {
	left: 0;
	right: auto
}
.app .messages.messages-comments .messages-item.inbox .user>img {
	border-color: #DBE0E4
}
.app .messages.messages-comments .messages-item.inbox .text {
	width: 100%;
	background: #FFF;
	border-color: #DBE0E4;
	color: #454545
}
.app .messages.messages-comments .messages-item.inbox .text:after {
	border-left-color: transparent;
	border-right-color: #FFF
}
.app .messages.messages-comments .messages-item.inbox .text:before {
	border-left-color: transparent;
	border-right-color: #DBE0E4
}
.app .messages.messages-comments .messages-item.inbox .date {
	text-align: left
}
.app .app-blog-important-block {
	margin: 0 0 20px;
	float: left;
	width: 100%;
	-webkit-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	-moz-box-shadow: 0 2px 8px rgba(0,0,0,.1);
	box-shadow: 0 2px 8px rgba(0,0,0,.1)
}
.app .app-blog-important-block>div[class^=col-] {
	padding: 0
}
.app .app-blog-important-block .tile-basic {
	margin-bottom: 0
}
.app .app-blog-blocks {
	margin-left: -10px;
	margin-right: -10px;
	margin-bottom: 20px
}
.app .app-blog-blocks>div[class^=col-] {
	padding-left: 10px;
	padding-right: 10px
}
.app .app-blog-banner {
	float: left;
	text-align: center;
	width: 100%;
	margin-bottom: 20px
}
.app .app-timeline {
	padding: 20px 0;
	float: left;
	width: 100%
}
.app .app-timeline .app-timeline-item {
	float: left;
	width: 95%;
	padding-left: 70px;
	position: relative;
	padding-bottom: 30px
}
.app .app-timeline .app-timeline-item>.user {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 2
}
.app .app-timeline .app-timeline-item>.user>img {
	width: 45px;
	height: 45px;
	padding: 2px;
	border: 1px solid #DBE0E4;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: #FFF
}
.app .app-timeline .app-timeline-item>.dot {
	position: absolute;
	left: 13px;
	top: 13px;
	width: 21px;
	height: 21px;
	background: #DBE0E4;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	z-index: 2
}
.app .app-timeline .app-timeline-item>.dot:before {
	content: " ";
	position: absolute;
	top: 11px;
	left: 13px;
	width: 20px;
	height: 1px;
	z-index: 1;
	background: #DBE0E4
}
.app .app-timeline .app-timeline-item>.dot:after {
	content: " ";
	position: absolute;
	width: 11px;
	height: 11px;
	background: #FFF;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	top: 5px;
	left: 5px;
	z-index: 3
}
.app .app-timeline .app-timeline-item>.dot.dot-primary:after {
	background: #292f43
}
.app .app-timeline .app-timeline-item>.dot.dot-info:after {
	background: #4FB5DD
}
.app .app-timeline .app-timeline-item>.dot.dot-success:after {
	background: #76AB3C
}
.app .app-timeline .app-timeline-item>.dot.dot-warning:after {
	background: #F69F00
}
.app .app-timeline .app-timeline-item>.dot.dot-danger:after {
	background: #F04E51
}
.app .app-timeline .app-timeline-item>.content {
	padding: 12px 20px;
	float: left;
	width: 100%;
	background: #FFF;
	border: 1px solid #DBE0E4;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .app-timeline .app-timeline-item>.content .title {
	margin-bottom: 10px;
	float: left;
	/*width: 100%;*/
	color: #7F8FA4
}
.app .app-timeline .app-timeline-item>.content .title>a {
	font-weight: 600
}
.app .app-timeline .app-timeline-item>.content strong {
	font-weight: 600;
	color: #1B2431
}
.app .app-timeline .app-timeline-item>.content .comments {
	position: relative;
	float: left;
	width: 100%;
	margin-top: 20px;
	margin-bottom: 5px;
	border: 1px solid #ebebeb
}
.app .app-timeline .app-timeline-item>.content .comments .total {
	float: left;
	width: 100%;
	line-height: 30px;
	background: #f2f2f2;
	padding: 10px 20px;
	border-bottom: 1px solid #ebebeb;
	font-weight: 600
}
.app .app-timeline .app-timeline-item>.content .comments .comment {
	float: left;
	width: 100%;
	padding: 15px 20px 0;
	background: #f7f7f7;
	border-bottom: 1px dashed #DBE0E4
}
.app .app-timeline .app-timeline-item>.content .comments .comment:last-child {
	border-bottom: 0
}
.app .app-timeline .app-timeline-item>.content .comments .form {
	display: block;
	float: left;
	background: #f2f2f2;
	padding: 10px 15px
}
.app .app-timeline .app-timeline-item:after, .app .app-timeline .app-timeline-item:before {
	position: absolute;
	background: #DBE0E4;
	content: " ";
	z-index: 1
}
.app .app-timeline .app-timeline-item>.content .comments:after, .app .app-timeline .app-timeline-item>.content .comments:before {
	bottom: 100%;
	left: 20px;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none
}
.app .app-timeline .app-timeline-item>.content .comments:after {
	border-color: rgba(136,183,213,0);
	border-bottom-color: #f2f2f2;
	border-width: 8px;
	margin-left: -8px
}
.app .app-timeline .app-timeline-item>.content .comments:before {
	border-color: rgba(194,225,245,0);
	border-bottom-color: #e6e6e6;
	border-width: 9px;
	margin-left: -9px
}
.app .app-timeline .app-timeline-item:after {
	width: 26px;
	height: 1px;
	left: 45px;
	top: 24px
}
.app .app-timeline .app-timeline-item:before {
	width: 1px;
	height: 100%;
	left: 23px;
	top: 0
}
.app .app-timeline .app-timeline-more {
	float: left;
	width: 100%;
	height: 50px;
	position: relative
}
.app .app-timeline .app-timeline-more>a {
	position: absolute;
	width: 45px;
	height: 45px;
	background: #FFF;
	border: 1px solid #DBE0E4;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	line-height: 32px;
	font-size: 21px;
	text-align: center;
	font-weight: 700;
	text-decoration: none;
	color: #454545;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.app .app-timeline .app-timeline-more>a:hover {
	color: #1B2431;
	background: #F5F5F5
}
.wizard .anchor li a:before, .wizard .anchor:after {
	bottom: 0;
	height: 3px;
	background: #DBE0E4;
	width: 100%
}
.app .app-timeline.dir-right .app-timeline-item {
	padding-left: 0;
	padding-right: 70px
}
.app .app-timeline.dir-right .app-timeline-item>.user {
	left: auto;
	right: 0
}
.app .app-timeline.dir-right .app-timeline-item:after {
	left: auto;
	right: 45px
}
.app .app-timeline.dir-right .app-timeline-item:before {
	left: auto;
	right: 23px
}
.app .app-timeline.dir-right .app-timeline-more>a {
	right: 0
}
.app .app-timeline.dir-right.app-timeline-simple .app-timeline-item>.dot, .app .app-timeline.dir-right.app-timeline-simple .app-timeline-item>.dot:before {
	left: auto;
	right: 13px
}
.app .app-timeline.app-timeline-simple .app-timeline-item {
	padding-left: 45px;
	padding-bottom: 15px
}
.app .app-timeline.app-timeline-simple .app-timeline-item:after {
	display: none
}
.app .app-timeline.app-timeline-simple .app-timeline-item:last-child {
	padding-bottom: 0
}
.app .app-timeline.mCustomScrollbar {
	padding-right: 0!important
}
.app .app-timeline.mCustomScrollbar .mCSB_container {
	padding-right: 20px
}
.wizard {
	float: left;
	width: 100%;
	margin-bottom: 20px
}
.wizard .anchor {
	width: 100%;
	float: left;
	padding: 0;
	margin: 0;
	list-style: none;
	display: block;
	position: relative
}
.wizard .anchor:after {
	content: " ";
	position: absolute;
	left: 0;
	z-index: 1;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px
}
.wizard .anchor li {
	float: left;
	display: block
}
.wizard .anchor li a {
	color: #1B2431;
	text-decoration: none;
	display: block;
	padding: 10px 20px 30px 0;
	position: relative;
	font-size: 16px
}
.wizard .actionBar .btn-primary, .wizard .actionBar .loader, .wizard .anchor li a .stepNumber {
	display: none
}
.wizard .anchor li a:after, .wizard .anchor li a:before {
	content: " ";
	position: absolute;
	left: 0
}
.wizard .anchor li a .stepDesc {
	font-size: 12px;
	font-weight: 600;
	line-height: 20px;
	text-transform: uppercase
}
.wizard .anchor li a .stepDesc small {
	color: #7F8FA4;
	font-size: 11px;
	font-weight: 600;
	line-height: 20px
}
.wizard .anchor li a:before {
	z-index: 2
}
.wizard .anchor li a:after {
	bottom: -15px;
	width: 35px;
	height: 35px;
	background: #FFF;
	border: 3px solid #DBE0E4;
	z-index: 3;
	text-align: center;
	line-height: 28px;
	color: #1B2431;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px
}
.wizard .anchor li a.done:after {
	border-color: #76AB3C;
	background: #83bd43;
	color: #FFF;
	content: "\f00c";
	font-family: FontAwesome
}
.wizard .anchor li a.done:before {
	background-color: #76AB3C;
	background-image: -webkit-gradient(linear, left top, right top, from(#76AB3C), to(#292f43));
	background-image: -webkit-linear-gradient(left, #76AB3C, #292f43);
	background-image: -moz-linear-gradient(left, #76AB3C, #292f43);
	background-image: -ms-linear-gradient(left, #76AB3C, #292f43);
	background-image: -o-linear-gradient(left, #76AB3C, #292f43)
}
.wizard .anchor li a.done.active:before {
	background-color: #76AB3C;
	background-image: -webkit-gradient(linear, left top, right top, from(#76AB3C), to(#76AB3C));
	background-image: -webkit-linear-gradient(left, #76AB3C, #76AB3C);
	background-image: -moz-linear-gradient(left, #76AB3C, #76AB3C);
	background-image: -ms-linear-gradient(left, #76AB3C, #76AB3C);
	background-image: -o-linear-gradient(left, #76AB3C, #76AB3C)
}
.wizard .anchor li a.error:after {
	border-color: #F04E51;
	background: #f26668;
	content: "\f00d";
	font-family: FontAwesome;
	color: #FFF
}
.wizard .anchor li a.error:before {
	background: #F04E51
}
.wizard .anchor li a.selected:after {
	border-color: #292f43;
	background: #333a52;
	content: "\f0da";
	font-family: FontAwesome;
	color: #FFF;
	padding-left: 2px;
	border-width: 3px;
	line-height: 28px
}
.wizard .anchor li a.selected:before {
	background-color: #292f43;
	background-image: -webkit-gradient(linear, left top, right top, from(#292f43), to(#DBE0E4));
	background-image: -webkit-linear-gradient(left, #292f43, #DBE0E4);
	background-image: -moz-linear-gradient(left, #292f43, #DBE0E4);
	background-image: -ms-linear-gradient(left, #292f43, #DBE0E4);
	background-image: -o-linear-gradient(left, #292f43, #DBE0E4)
}
.wizard .anchor li a.selected.active:after {
	border-color: #76AB3C;
	background: #76AB3C;
	color: #FFF;
	content: "\f00c";
	padding-left: 0
}
.wizard .anchor li a.selected.active:before {
	background-color: #76AB3C;
	background-image: -webkit-gradient(linear, left top, right top, from(#76AB3C), to(#76AB3C));
	background-image: -webkit-linear-gradient(left, #76AB3C, #76AB3C);
	background-image: -moz-linear-gradient(left, #76AB3C, #76AB3C);
	background-image: -ms-linear-gradient(left, #76AB3C, #76AB3C);
	background-image: -o-linear-gradient(left, #76AB3C, #76AB3C)
}
.wizard .anchor.steps_1 li {
	width: 100%
}
.wizard .anchor.steps_2 li {
	width: 50%
}
.wizard .anchor.steps_3 li {
	width: 33.333333%
}
.wizard .anchor.steps_4 li {
	width: 25%
}
.wizard .anchor.steps_5 li {
	width: 20%
}
.wizard .anchor.steps_6 li {
	width: 16.666666%
}
.wizard .anchor.steps_7 li {
	width: 14.285714%
}
.wizard .anchor.steps_8 li {
	width: 12.5%
}
.wizard .actionBar, .wizard .stepContainer {
	float: left;
	width: 100%;
	margin-top: 50px
}
.wizard .actionBar {
	margin-top: 20px
}
.wizard .actionBar .btn.pull-right {
	margin-left: 5px
}
.app .invoice {
	float: left;
	width: 100%;
	background: #FFF;
	border: 1px solid #DBE0E4;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app .invoice .invoice-container.invoice-container-highlight, .app .invoice .invoice-table-highlight>td {
	background: #f2f2f2
}
.app .invoice .invoice-container {
	float: left;
	width: 100%;
	padding: 50px 0
}
.app .invoice .invoice-table-total {
	width: 300px;
	float: right
}
.app .invoice .invoice-thanks {
	float: left;
	width: 100%;
	margin-top: 50px
}
.app .invoice .invoice-thanks .title {
	font-size: 15px;
	font-weight: 600;
	text-transform: uppercase;
	color: #1B2431;
	line-height: 20px
}
.app .invoice .invoice-thanks p {
	color: #7F8FA4;
	margin-top: 0
}
.app .invoice .invoice-company {
	position: relative;
	float: left;
	width: 100%;
	padding-left: 55px
}
.app .invoice .invoice-company h2 {
	font-size: 15px;
	font-weight: 700;
	margin: 15px 0 0;
	line-height: 20px;
	padding: 0;
	text-transform: uppercase;
	color: #1B2431
}
.app .invoice .invoice-company p {
	font-size: 13px;
	font-weight: 400;
	margin-top: 0;
	color: #7F8FA4
}
.app .invoice .invoice-company>img {
	position: absolute;
	left: 0;
	top: 0
}
.app .invoice .invoice-number {
	float: left;
	width: 100%;
	text-align: right
}
.app .invoice .invoice-number h3 {
	font-size: 15px;
	font-weight: 600;
	margin: 15px 0 0;
	line-height: 20px;
	padding: 0;
	text-transform: uppercase;
	color: #1B2431
}
.app .invoice .invoice-number p {
	font-size: 13px;
	font-weight: 400;
	margin-top: 0;
	color: #7F8FA4
}
.app .pricing-table {
	float: left;
	width: 100%;
	background: #FFF;
	border: 1px solid #DBE0E4;
	margin-top: 50px;
	margin-bottom: 30px
}
.app .pricing-table .button-holder, .app .pricing-table .divider, .app .pricing-table .features, .app .pricing-table .price, .app .pricing-table .subtitle, .app .pricing-table .title {
	float: left;
	width: 100%;
	text-align: center;
	padding: 20px
}
.app .pricing-table .title {
	font-size: 15px;
	font-weight: 700;
	text-transform: uppercase;
	color: #1B2431
}
.app .pricing-table .price {
	padding-bottom: 10px;
	line-height: 50px;
	font-family: sans-serif;
	font-size: 52px;
	font-weight: 700;
	color: #1B2431
}
.app .pricing-table .subtitle {
	padding-top: 0;
	font-style: italic;
	color: #7F8FA4
}
.app .pricing-table .divider {
	height: 1px;
	background: #DBE0E4;
	padding: 0
}
.app .pricing-table .features .line {
	float: left;
	width: 100%;
	line-height: 30px;
	margin-bottom: 5px
}
.app .pricing-table .features .line span {
	font-size: 14px;
	margin-right: 10px
}
.app .pricing-table .features .line span.fa-check {
	color: #76AB3C
}
.app .pricing-table .features .line span.fa-times {
	color: #F04E51
}
.app .pricing-table .button-holder {
	padding: 20px
}
.app .pricing-table.featured {
	border-top: 5px solid #F04E51;
	margin-top: 26px;
	z-index: 2;
	-webkit-box-shadow: 0 0 12px rgba(0,0,0,.1);
	-moz-box-shadow: 0 0 12px rgba(0,0,0,.1);
	box-shadow: 0 0 12px rgba(0,0,0,.1)
}
.app .pricing-table.featured .price {
	line-height: 70px;
	font-size: 65px
}
.app .pricing-table.pricing-table-primary {
	background: #292f43;
	border-color: #1f2433;
	color: #FFF
}
.app .pricing-table.pricing-table-primary .price, .app .pricing-table.pricing-table-primary .subtitle, .app .pricing-table.pricing-table-primary .title {
	color: #FFF
}
.app .pricing-table.pricing-table-primary .divider {
	background: #1f2433
}
.app .pricing-table.pricing-table-success {
	background: #76AB3C;
	border-color: #699835;
	color: #FFF
}
.app .pricing-table.pricing-table-success .price, .app .pricing-table.pricing-table-success .subtitle, .app .pricing-table.pricing-table-success .title {
	color: #FFF
}
.app .pricing-table.pricing-table-success .divider {
	background: #699835
}
.app .pricing-table.pricing-table-warning {
	background: #F69F00;
	border-color: #dd8f00;
	color: #FFF
}
.app .pricing-table.pricing-table-warning .price, .app .pricing-table.pricing-table-warning .subtitle, .app .pricing-table.pricing-table-warning .title {
	color: #FFF
}
.app .pricing-table.pricing-table-warning .divider {
	background: #dd8f00
}
.app .pricing-table.pricing-table-danger {
	background: #F04E51;
	border-color: #ee363a;
	color: #FFF
}
.app .pricing-table.pricing-table-danger .price, .app .pricing-table.pricing-table-danger .subtitle, .app .pricing-table.pricing-table-danger .title {
	color: #FFF
}
.app .pricing-table.pricing-table-danger .divider {
	background: #ee363a
}
.app .pricing-table.pricing-table-info {
	background: #4FB5DD;
	border-color: #3aacd9;
	color: #FFF
}
.app .pricing-table.pricing-table-info .price, .app .pricing-table.pricing-table-info .subtitle, .app .pricing-table.pricing-table-info .title {
	color: #FFF
}
.app .pricing-table.pricing-table-info .divider {
	background: #3aacd9
}
.app .pricing-tables.pricing-tables-condensed {
	margin: 0
}
.app .pricing-tables.pricing-tables-condensed>div[class^=col-] {
	padding: 0;
	margin-left: -1px
}
.app .pricing-tables.pricing-tables-condensed .pricing-table {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none
}
.app .credit-card {
	float: left;
	width: 100%;
	padding: 20px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	background: #FFF;
	border: 1px solid #DBE0E4;
	min-width: 340px;
	overflow-x: auto;
	margin-bottom: 20px;
	-webkit-transition: box-shadow .1s linear;
	-moz-transition: box-shadow .1s linear;
	-ms-transition: box-shadow .1s linear;
	-o-transition: box-shadow .1s linear;
	transition: box-shadow .1s linear
}
.app .credit-card .row {
	margin-bottom: 25px
}
.app .credit-card .row:last-child {
	margin-bottom: 0
}
.app .credit-card .company {
	margin: 0
}
.app .credit-card .number {
	font-size: 26px;
	color: #1B2431;
	font-weight: 700;
	line-height: 30px;
	text-align: center
}
.app .credit-card .number>div {
	margin-top: 9px
}
.app .credit-card .number>div:last-child {
	margin-top: 0;
	line-height: 40px
}
.app .credit-card .subtitle {
	float: left;
	width: 100%;
	font-size: 11px;
	font-weight: 600;
	color: #7F8FA4;
	text-transform: uppercase;
	line-height: 16px
}
.app .credit-card .title {
	float: left;
	width: 100%;
	font-size: 13px;
	font-weight: 600;
	color: #1B2431;
	text-transform: uppercase;
	line-height: 20px
}
.app .credit-card:hover {
	-webkit-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	-moz-box-shadow: 0 4px 20px 5px rgba(0,0,0,.05);
	box-shadow: 0 4px 20px 5px rgba(0,0,0,.05)
}
@media (max-width:1200px) {
.app .invoice .invoice-container {
	padding: 30px 20px
}
}
@media (max-width:992px) {
.app .invoice .invoice-table-total {
	width: 100%
}
.app .pricing-table {
	margin-top: 20px;
	margin-bottom: 0
}
}
.icons-preview {
	list-style: none;
	padding: 0;
	margin: 0;
	display: block;
	width: 100%;
	text-align: center
}
.icons-preview li {
	float: none;
	display: inline-block;
	width: 40px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	border: 1px solid #DBE0E4;
	margin: 0 1px 4px 0;
	cursor: pointer;
	background: #FFF;
	-webkit-transition: background .1s linear;
	-moz-transition: background .1s linear;
	-ms-transition: background .1s linear;
	-o-transition: background .1s linear;
	transition: background .1s linear
}
.icons-preview li span.fa, .icons-preview li span[class^=icon-] {
	line-height: 40px;
	font-size: 20px
}
.icons-preview li span.fa {
	font-size: 14px
}
.icons-preview li span.name {
	display: none
}
.icons-preview li:hover {
	background: #F5F5F5
}
.icons-preview.extended li {
	width: 100px;
	height: 100px;
	padding: 5px;
	margin: 0 1px 0 0;
	overflow: hidden
}
.icons-preview.extended li span.fa, .icons-preview.extended li span[class^=icon-] {
	line-height: 60px;
	font-size: 40px;
	display: block;
	float: left;
	width: 100%
}
.icons-preview.extended li span.fa {
	font-size: 28px
}
.icons-preview.extended li span.name {
	display: block;
	float: left;
	width: 100%;
	font-size: 11px;
	font-weight: 600;
	line-height: 14px
}
.modal-icon-preview-icon span[class^=icon-] {
	font-size: 60px
}
.modal-icon-preview-icon span.fa {
	font-size: 42px
}
.dropdown.dropdown-example>.dropdown-menu, .dropup.dropdown-example>.dropdown-menu {
	position: static;
	display: block;
	margin-bottom: 1px;
	clear: left
}
.app-chart-wrapper {
	float: left;
	width: 100%;
	position: relative
}
.app-chart-wrapper.app-chart-with-axis {
	padding-left: 20px;
	padding-bottom: 20px
}
.app-chart-wrapper.app-chart-with-axis .app-chart-yaxis {
	position: absolute;
	left: 0;
	height: 100%;
	width: 20px
}
.app-chart-wrapper.app-chart-with-axis .app-chart-xaxis {
	position: absolute;
	width: 100%;
	height: 21px;
	left: 20px;
	bottom: 0
}
.app-chart-wrapper.app-chart-with-axis .rickshaw_graph .x_ticks_d3 path, .app-chart-wrapper.app-chart-with-axis .rickshaw_graph .y_ticks path {
	stroke: #DDD
}
.app-chart-wrapper.app-chart-with-axis .detail .x_label {
	display: none!important
}
.simple-code-sample {
	float: left;
	width: 100%;
	background: #F5F5F5;
	color: #333;
	padding: 15px 20px;
	line-height: 25px;
	font-weight: 600;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.app-chart-holder {
	float: left;
	width: 100%
}
.chart-legend {
	position: absolute;
	top: 5px;
	right: 5px
}
.rickshaw_legend {
	background: rgba(255,255,255,.4)
}
.rickshaw_legend .label {
	color: #000
}
.jqstooltip {
	display: block!important;
	padding: 0!important;
	border: 0!important
}
.jqsfield {
	padding: 4px 5px 5px;
	display: inline-block;
	line-height: 20px
}
.doc_fix_nav {
	position: relative
}
.doc_fix_nav.fixed {
	position: fixed;
	top: 15px;
	width: 100%
}
.doc_fix_nav.fixed.stack {
	top: auto;
	bottom: 392px
}
.app-settings {
	position: fixed;
	top: 140px;
	right: -260px;
	width: 260px;
	padding: 10px;
	background: #FFF;
	border: 1px solid #DBE0E4;
	border-right: 0;
	z-index: 100;
	color: #454545;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 0;
	-moz-border-radius-bottomleft: 3px;
	-moz-border-radius-topleft: 3px;
	-webkit-transition: all .1s linear;
	-ms-transition: all .1s linear;
	transition: all .1s linear;
	-webkit-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px
}
.app-settings>.app-settings-button {
	position: absolute;
	left: -40px;
	top: 10px;
	width: 40px;
	height: 40px;
	background: #F04E51;
	color: #FFF;
	border: 1px solid #ef4548;
	line-height: 41px;
	text-align: center;
	font-size: 20px;
	cursor: pointer;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 0;
	-moz-border-radius-bottomleft: 3px;
	-moz-border-radius-topleft: 3px;
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-ms-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear;
	-webkit-box-shadow: -2px 0 3px 2px rgba(0,0,0,.05);
	-moz-box-shadow: -2px 0 3px 2px rgba(0,0,0,.05);
	box-shadow: -2px 0 3px 2px rgba(0,0,0,.05);
	-webkit-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px
}
.app-settings>.app-settings-button:hover {
	background: #ef4043
}
.app-settings>.app-settings-setting {
	float: left;
	width: 100%;
	margin-top: 20px
}
.app-settings>p {
	margin-top: 20px;
	float: left;
	width: 100%;
	font-size: 12px;
	color: #7F8FA4
}
.app-settings>p>span {
	font-size: 13px;
	font-weight: 600;
	color: #454545
}
.app-settings>.app-settings-themes-footer, .app-settings>.app-settings-themes-header, .app-settings>.app-settings-themes-navigation {
	float: left;
	width: 100%
}
.app-settings>.app-settings-themes-footer>span, .app-settings>.app-settings-themes-header>span, .app-settings>.app-settings-themes-navigation>span {
	display: block;
	float: left;
	width: 100%;
	margin-bottom: 10px;
	line-height: 20px;
	font-size: 13px;
	font-weight: 600
}
.app-settings>.app-settings-themes-footer>div, .app-settings>.app-settings-themes-header>div, .app-settings>.app-settings-themes-navigation>div {
	width: 40px;
	height: 40px;
	float: left;
	margin: 0 5px 5px 0;
	cursor: pointer
}
.app-settings .app-settings-themes-footer>span, .app-settings .app-settings-themes-navigation>span {
	margin-top: 20px
}
.app-settings>.app-settings-themes-footer>div.active, .app-settings>.app-settings-themes-header>div.active, .app-settings>.app-settings-themes-navigation>div.active {
	-webkit-box-shadow: 0 0 0 2px rgba(240,78,81,.4);
	-moz-box-shadow: 0 0 0 2px rgba(240,78,81,.4);
	box-shadow: 0 0 0 2px rgba(240,78,81,.4)
}
.app-settings>.app-settings-themes-header>div.app-header-design-default {
	border: 1px solid #DBE0E4;
	background: #FFF
}
.app-settings>.app-settings-themes-header>div.app-header-design-dark {
	border: 1px solid #292f43;
	background: #272c40
}
.app-settings>.app-settings-themes-header>div.app-header-design-lightblue {
	border: 1px solid #dae5f0;
	background: #f7f9fb
}
.app-settings>.app-settings-themes-header>div.app-header-design-orange {
	border: 1px solid #f8bf63;
	background: #f8c36d
}
.app-settings>.app-settings-themes-header>div.app-header-design-blue {
	border: 1px solid #204d78;
	background: #225280
}
.app-settings .app-settings-themes-navigation>div.app-navigation-style-default {
	border: 1px solid #292f43;
	background: #2D3349
}
.app-settings .app-settings-themes-navigation>div.app-navigation-style-light {
	border: 1px solid #F2F2F2;
	background: #FFF
}
.app-settings .app-settings-themes-navigation>div.app-navigation-style-lightblue {
	border: 1px solid #e1eaf3;
	background: #f7f9fb
}
.app-settings .app-settings-themes-navigation>div.app-navigation-style-purple {
	border: 1px solid #362c42;
	background: #3b3048
}
.app-settings .app-settings-themes-navigation>div.app-navigation-style-blue {
	border: 1px solid #204d78;
	background: #225280
}
.app-settings .app-settings-themes-footer>div.app-footer-default {
	border: 1px solid #212636;
	background: #252a3c
}
.app-settings .app-settings-themes-footer>div.app-footer-dark {
	border: 1px solid #000;
	background: #111
}
.app-settings .app-settings-themes-footer>div.app-footer-light {
	border: 1px solid #E5E5E5;
	background: #FFF
}
.app-settings .app-settings-themes-footer>div.app-footer-purple {
	border: 1px solid #362c42;
	background: #3b3048
}
.app-settings .app-settings-themes-footer>div.app-footer-blue {
	border: 1px solid #204d78;
	background: #225280
}
.app-settings.open {
	right: 0;
	border: 1px solid #E5E5E5;
	-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.1);
	-moz-box-shadow: 0 2px 5px 0 rgba(0,0,0,.1);
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.1)
}
.app-settings.open>.app-settings-button {
	background: #FFF;
	border: 1px solid #E5E5E5;
	color: #454545;
	border-right-color: #FFF
}
.img-thumbnail {
	padding: 3px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	width: 100%
}
.app .app-error-container {
	float: left;
	width: 100%;
	min-height: 100%;
	background: url(../img/backgrounds/sky.png) center center
}
.app .app-error-container .app-error {
	position: absolute;
	left: 50%;
	top: 50%;
	margin-top: -175px;
	margin-left: -250px;
	width: 500px;
	height: 350px;
	text-align: center
}
.app .app-error-container .app-error .app-error-code {
	font-size: 220px;
	font-weight: 300;
	float: left;
	width: 100%;
	line-height: 200px;
	color: #2D3349;
	margin-bottom: 20px
}
.app .app-error-container .app-error .app-error-message {
	float: left;
	width: 100%;
	font-size: 17px;
	font-weight: 600;
	line-height: 30px;
	color: #7F8FA4;
	margin-bottom: 50px
}
.app .app-error-container .app-error .app-error-button {
	float: left;
	width: 100%
}
.app.app-rtl .app-navigation .app-navigation-logo {
	background: url(../img/logo-rtl.png) right top no-repeat #272c40
}
.app.app-rtl .app-navigation nav ul>li.openable>a:after {
	content: "\e874";
	right: auto;
	left: 0;
	padding: 10px
}
.app.app-rtl .app-navigation nav ul>li.openable>a span.label {
	left: 40px
}
.app.app-rtl .app-navigation nav>ul>li a {
	text-align: right;
	padding: 10px 15px 10px 30px
}
.app.app-rtl .app-navigation nav>ul>li a span {
	float: right;
	margin: 0 0 0 15px
}
.app.app-rtl .app-navigation nav>ul>li a span.label {
	margin: 0;
	right: auto;
	left: 10px
}
.app.app-rtl .app-navigation nav>ul>li ul>li>a {
	padding-right: 30px
}
.app.app-rtl .app-navigation nav>ul>li ul>li ul>li>a {
	padding-right: 45px
}
.app.app-rtl .app-navigation nav>ul>li.title {
	text-align: right;
	padding: 20px 15px 10px 0
}
.app.app-rtl .app-navigation.app-navigation-minimized .app-navigation-logo {
	background-image: url(../img/logo-sm.png)
}
.app.app-rtl .app-navigation.app-navigation-minimized nav>ul>li>a {
	padding: 10px!important
}
.app.app-rtl .app-navigation.app-navigation-minimized nav>ul>li>a span {
	float: right;
	margin-left: 0;
	margin-top: 0;
	text-align: center
}
.app.app-rtl .app-navigation.app-navigation-minimized nav ul>li>a {
	padding-right: 15px
}
.app.app-rtl .app-navigation.app-navigation-minimized nav ul>li.openable>a:after {
	content: "\e93c"
}
.app.app-rtl .app-navigation.app-navigation-minimized nav ul>li.open>a:after {
	content: "\e93b"
}
.app.app-rtl .app-heading .icon {
	float: right;
	margin-right: 0;
	margin-left: 15px
}
.app.app-rtl .app-heading .title {
	float: right;
	text-align: right
}
.app.app-rtl .app-heading .heading-elements {
	float: left
}
.app.app-rtl .breadcrumb {
	float: right
}
.app.app-rtl .breadcrumb>li+li:before {
	content: "\f104"
}





























.challenge-title {
  text-align: center;
  padding: 0;
  margin: 1rem 0 0.5rem;
  color: #2b9348;
  font-size: 2rem;
  font-weight: bold;
}

.challenge-subtitle {
  text-align: center;
  margin: 0;
  font-size: 1.125rem;
  font-weight: 400;
  color: #b5bbc3;
}

.challenge-part-of {
  text-align: center;
  margin: 1rem 0 0;
  font-size: 0.875rem;
  color: #b5bbc3;
  position: fixed;
  bottom: 1rem;
  right: 1rem;
}
.challenge-part-of a,
.challenge-part-of a:visited {
  color: #b5bbc3;
  -webkit-text-decoration-style: wavy;
          text-decoration-style: wavy;
}
.challenge-part-of a:hover, .challenge-part-of a:active,
.challenge-part-of a:visited:hover,
.challenge-part-of a:visited:active {
  color: #d1d5da;
}

.container {
  margin: 1.5rem;
  padding: 0rem 1rem 1rem 1rem;
  width: 1000px;
  /*min-height: 300px;*/
}

    </style>

</head>
<body>

<div class="app app-fh">
		<!-- START APP CONTAINER -->
		<div class="app-container" style="background: url(https://srtscrm.theofficearea.in/assets/assets/images/background/bg-11.jpg) center center no-repeat fixed">
			<div class="app-login-box">
				<div class="app-login-box-user"><img src="https://srtscrm.theofficearea.in/assets/assets/images/background/no-image.png"></div>
				<div class="app-login-box-title">
					<div class="title"> SRTS CRM </div>
					<div class="subtitle">Sign in to your account</div>
					<!-- Web tracking -->
					<input type="hidden" class="form-control" name="url_path" id="url_path" >
					<input type="hidden" class="form-control" name="ip_adreess" id="ip_adreess" >
						<!-- end Web tracking -->
				</div>
				<div data-matomo-form data-matomo-name="myformname" class="app-login-box-container" id="loginform" >
					<form  method="POST" action="{{ url('/login_action')}}" id="login_form">
						@csrf
						<div class="form-group">

							<input  type="text" class="form-control" name="username" placeholder="Email Address or username" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-xs-6">

										<label>
											<input type="checkbox" name="app-checkbox-1" value="0"> Remember me</label>

								</div>
								<div class="col-md-12 col-xs-12">
									<button type="submit" name="submit" class="btn btn-success btn-block">Sign In</button>

									<p data-track-content="" data-content-name="LognForm" data-content-piece="forget_password" data-content-target="forget_password"  style="text-align: center;"><a href="#">Forget Password</a></p>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- <div class="app-login-box-or">
					<div class="or">OR</div>
				</div>
				<div class="app-login-box-container">
					<button class="btn btn-facebook btn-block" disabled>Connect With Facebook</button>
					<button class="btn btn-twitter btn-block" disabled>Connect With Gmail</button>
				</div> -->

			</div>
		</div>
		<!-- END APP CONTAINER -->
	</div>

</body>
</html>

























