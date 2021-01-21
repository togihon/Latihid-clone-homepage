<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   function rupiah($angka){
	
	$convert = "Rp " . number_format($angka,0,',','.');
	return $convert;
 
	}
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/FtUxCn6UTOPHZvzTYA22' rel='icon' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:72,height:72/https://www.filepicker.io/api/file/FtUxCn6UTOPHZvzTYA22' rel='apple-touch-icon' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:144,height:144/https://www.filepicker.io/api/file/FtUxCn6UTOPHZvzTYA22' rel='apple-touch-icon' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:320,height:345/https://www.filepicker.io/api/file/iwKYeGzTRiNt4KJM5j7J' rel='apple-touch-startup-image' type='image/png'>
      <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:640,height:690/https://www.filepicker.io/api/file/iwKYeGzTRiNt4KJM5j7J' rel='apple-touch-startup-image' type='image/png'>
      <meta name='apple-mobile-web-app-capable' content='yes' />
      <meta charset="UTF-8">
      <meta name="csrf-param" content="authenticity_token" />
      <meta name="csrf-token" content="l1ZH+y7LE+uI1UyNTEkogbxzzCL5XWI3m+JjQl3BsnUST5df4RMeLnH8si7uYAm/hAKt1djm1t3Z0Y9bmKQYWQ==" />
      <style type='text/css'>:root{--brand_primary: #ffffff;--brand_secondary: #FC8047;--brand_heading: #2b3636;--brand_text: #2b3636;--brand_navbar_text: #2b3636;--brand_navbar_fixed_text: #2b3636;--brand_homepage_heading: #ffffff;--brand_course_heading: #ffffff;--brand_video_player_color: #09A59A;--font_family:Lato;} @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-LightItalic.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-LightItalic.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-LightItalic.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-LightItalic.ttf") format("truetype");
         font-weight: 300;
         font-style: italic;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Regular.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Regular.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-Regular.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-Regular.ttf") format("truetype");
         font-weight: normal;
         font-style: normal;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-BlackItalic.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-BlackItalic.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-BlackItalic.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-BlackItalic.ttf") format("truetype");
         font-weight: 900;
         font-style: italic;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Light.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Light.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-Light.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-Light.ttf") format("truetype");
         font-weight: 300;
         font-style: normal;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Bold.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Bold.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-Bold.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-Bold.ttf") format("truetype");
         font-weight: bold;
         font-style: normal;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Italic.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Italic.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-Italic.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-Italic.ttf") format("truetype");
         font-weight: normal;
         font-style: italic;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-BoldItalic.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-BoldItalic.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-BoldItalic.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-BoldItalic.ttf") format("truetype");
         font-weight: bold;
         font-style: italic;
         font-display: swap; }
         @font-face {
         font-family: 'Lato';
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Black.eot");
         src: url("//assets.teachablecdn.com/fonts/lato/Lato-Black.eot?#iefix") format("embedded-opentype"), url("//assets.teachablecdn.com/fonts/lato/Lato-Black.woff") format("woff"), url("//assets.teachablecdn.com/fonts/lato/Lato-Black.ttf") format("truetype");
         font-weight: 900;
         font-style: normal;
         font-display: swap; }
      </style>
      <link rel="stylesheet" media="screen" href="https://fedora.teachablecdn.com/assets/pages-6288d01eb51d12142db712822bb0c1f7c1432c047dbf23d6f819c3e23efa3a29.css" />
      <style>
         .block__text-with-image-grid__column__heading-text p {
         letter-spacing:1px !important;
         text-align:center !important; 
         }
         .b-22754648-subheading_text_color {
         letter-spacing: 1px !important;
         }
         .ql-align-center {
         letter-spacing: 1px !important;
         }
         .block__text-with-image-grid__column__heading-text {
         letter-spacing: 1px !important;
         }
         .base-button {
         letter-spacing: 1px !important;
         }
         .navbar__menu__list>li>a {
         letter-spacing: 1px !important;
         padding: 5px 5px 5px 5px;
         }
         /*
         Custom New
         Date added: 14 oct 2020
         */
         .navbar__menu__list .navLink-left{
         position: relative;
         right: 150px;
         }
         .flex-column {
         width:50%;
         padding:23px;
         }
         .cardInner {
         background: #fff;
         box-shadow:  0px 0px 10px rgba(155, 155, 155, 0.25);
         }
         .cardInner__header {
         padding: 14px;
         }
         .cardInner__body {
         padding: 14px;
         padding-top:0;
         }
         .cardInner__body--title a {
         font-size: 23px;
         font-family: 'Nunito Sans', sans-serif;
         color: #262627;
         }
         .cardInner__body--title:hover a {
         color: #FC8047;
         text-decoration: none;
         }
         .cardInner__thumbnail {
         width: 30%;
         background: #eee;
         }
         .cardInner__desc {
         width: 70%;
         }
         /*
         * update: design system button
         * date:Thursday, october 22, 2020
         */
         body {
         font-family: sans-serif;
         }
         .l-btn {
         display: inline-block;
         padding: 8px 15px;
         background-color: transparent;
         border-color: transparent;
         border-width: 2px;
         border-style: solid;
         outline: none;
         font-size: 16px;
         line-height: 18px;
         cursor: pointer;
         border-radius: .5rem;
         background: #5CBCD2;
         color: #fff;
         }
         a.l-btn {
         text-decoration: none;
         }
         .l-btn:hover {
         filter: brightness(85%);
         transition: all 0.3s ease;
         }
         .l-btn-primary {
         background: #FC8047;
         color: #fff;
         }
         .l-btn-secondary {
         background: #163F5B;
         color: #fff;
         }
         .l-btn-warning {
         background: rgba(255, 194, 51, 1);
         color: #fff;
         }
         .l-btn-danger {
         background: rgba(229, 57, 53, 1);
         color: #fff;
         }
         .l-btn-success {
         background:  rgba(46, 204, 113, 1);
         color: #fff;
         }
         /* Size Button */
         .l-btn-small {
         padding: calc(4px + 2px) calc(16px - 2px);
         font-size: calc(16px - 2px);
         }
         .l-btn-large {
         padding: calc(8px + 2px) calc(24px + 2px);
         font-size: calc(16px + 2px);
         }
         .l-btn-block {
         display:block;
         width:100%;
         }
         .l-btn-disabled {
         opacity: 0.8;
         box-shadow: none;
         cursor: not-allowed;
         }
         .l-btn-radius-small {
         border-radius: 6px;
         }
         .l-btn-radius-medium {
         border-radius: 8px;
         }
         .l-btn-radius-large {
         border-radius: 9rem;
         }
         @media screen and (max-width:768px){
         .navbar__menu__list .navLink-left, .nav .navLink-left {
         position: unset;
         }
         .cardInner__thumbnail{
         display:none;
         }
         .cardInner__desc, .flex-column {
         width: 100%;
         }
         .blog-container .post {
         width:100%;
         }
         .post-content a {
         word-break: break-word;
         }
         }
         /*.navbar__menu__list a:hover {*/
         /*  padding: 5px 5px 5px 5px;*/
         /*  display: block;*/
         /*  background-color: #0092db;*/
         /*  text-decoration: none !important;*/
         /*}*/
         /*
         .footer__inner {
         letter-spacing: 1px !important;
         padding: 5px 5px 5px 5px;
         margin-top: 10px;
         margin-bottom: 10px;
         }
         .footer__inner a:hover {
         text-decoration: none;
         color: #0092db;
         } 
         */
         .loader {
         border: 16px solid #f3f3f3;
         border-radius: 50%;
         border-top: 16px solid #3498db;
         width: 100px;
         height: 100px;
         -webkit-animation: spin 2s linear infinite; /* Safari */
         animation: spin 2s linear infinite;
         }
         /* Safari */
         @-webkit-keyframes spin {
         0% { -webkit-transform: rotate(0deg); }
         100% { -webkit-transform: rotate(360deg); }
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
         .block__text-with-image-grid__column__image {
         display:block;
         margin-left:auto;
         margin-right:auto;
         height: auto;
         width: 80%;
         }
         /* Footer section */
         ul {
         list-style: none;
         padding-left: 0;
         }
         footer {
         background-color: #EAF6F9;
         color: #163F5B;
         line-height: 1.5;
         }
         footer a {
         text-decoration: none;
         font-size: 14px;
         color: #163F5B;
         letter-spacing: 1px;
         }
         a:hover {
         text-decoration: underline;
         }
         .ft-title {
         color: #163F5B;
         font-size: 14px;
         padding-bottom: 0.625rem;
         font-weight: bold;
         letter-spacing: 1px;
         }
         body {
         display: flex;
         min-height: 100vh;
         flex-direction: column;
         }
         .container {
         flex: 1;    /* same as flex-grow: 1; */
         }
         .ft-main {
         padding: 1.25rem 1.875rem;
         display: flex;
         flex-wrap: wrap;
         }
         .ft-main-item {
         padding: 1.25rem;
         min-width: 12.5rem /*200px*/;
         }
         .navbar__menu__list ul li ul {
         background: orange;
         visibility: hidden;
         opacity: 0;
         min-width: 5rem;
         position: absolute;
         transition: all 0.5s ease;
         margin-top: 1rem;
         left: 0;
         display: none;
         }
         .navbar__menu__list ul li:hover > ul,
         .navbar__menu__list ul li ul:hover {
         visibility: visible;
         opacity: 1;
         display: block;
         }
         .navbar__menu__list ul li ul li {
         clear: both;
         width: 100%;
         }
         @media only screen and (min-width: 29.8125rem /*477px*/) {
         .ft-main {
         justify-content: space-around;
         }
         }
         @media only screen and (min-width: 77.5rem /*1240px*/ ) {
         .ft-main {
         justify-content: space-evenly;
         }
         }
         .ft-form {
         display: flex;
         flex-wrap: wrap;
         }
         /*input[type="email"] {*/
         /*  border: 0;*/
         /*  padding: 0.625rem;*/
         /*  margin-top: 0.3125rem;*/
         /*}*/
         input[type="submit"] {
         background-color: #ff6a0e;
         color: #fff;
         cursor: pointer;
         border: 0;
         padding: 0.625rem 0.9375rem;
         margin-top: 0.3125rem;
         }
         .ft-legal {
         padding: 0.7rem;
         background-color: #eaf6f9;
         text-align:center;
         }
         /* Footer end section */
         /*subscription block*/
         body {
         background: #f1f3f4;
         }
         .validate2 {
         width: 500px;
         margin: 2% auto;
         text-align: center;
         }
         .subs-input {
         display: flex;
         align-items: center;
         }
         .subs-button {
         height: 44px;
         border: none;
         }
         #mcee-EMAIL {
         width: 75%;
         background: #FDFCFB;
         font-family: inherit;
         color: #737373;
         letter-spacing: 1px;
         text-indent: 5%;
         border-radius: 5px 0 0 5px;
         }
         #mce-embedded-subscribe {
         width: 25%;
         height: 46px;
         background: #ff6a0e;
         font-family: inherit;
         font-weight: bold;
         color: #ffffff;
         letter-spacing: 1px;
         border-radius: 0 5px 5px 0;
         cursor: pointer;
         transition: background .3s ease-in-out;
         }
         #submit:hover {
         background: #f7cc0a;
         }
         input:focus {
         outline: none;
         /*outline: 2px solid #E86C8D;*/
         box-shadow: 0 0 2px #5DBCD2;
         }
         /*subscription block end*/
         /*team slider start*/
         .slideshow-container{
         position:relative;
         box-sizing:border-box;
         }
         .p-row {
         overflow:Hidden;
         }
         .p-column {
         float: left;
         width: 32%;
         margin-bottom: 16px;
         padding: 0 8px;
         }
         @media screen and (max-width: 650px) {
         .p-column {
         width: 100%;
         display: block;
         }
         }
         .p-card {
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
         padding: 30px;
         }
         .p-container {
         padding: 0 16px;
         text-align: center;
         }
         .p-container::after, .p-row::after {
         content: "";
         clear: both;
         display: table;
         }
         .p-title {
         color: grey;
         }
         /*List Pembayaran*/
         #dotStatus {
         height: 16px;
         width: 16px;
         border-radius: 50%;
         }
         #other-info p {
         font-style: normal;
         font-weight: normal;
         font-size: 18px;
         line-height: 32px;
         }
         #other-info {
         margin:10px 0px;
         }
         .pay-info {
         margin:30px 50px 30px 10px;
         padding:20px 30px; 
         background:white;
         box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.1);
         }
         #info-title {
         font-style: normal;
         font-weight: bold;
         font-size: 24px;
         line-height: 32px; width:50%; float:left;
         }
         #info-status {
         font-style: normal;
         font-weight: normal;
         font-size: 18px;
         line-height: 32px; float:left; text-align: center;
         }
         .detail-button {
         border: 2px solid #FC8047;
         border-radius: 8px;
         background:white;
         font-style: normal;
         font-weight: normal;
         font-size: 18px;
         line-height: 32px;
         color:#FC8047;
         margin-top:20px;
         padding:5px 15px;
         }
         .detail-button:hover {
         color:white;
         background:#FC8047;
         }
         .prefill_bar {
         background: #F6F7F8;
         width:100%; 
         height:100%;
         position:relative;
         animation-duration:1s;
         animation-iteration-count:infinite; 
         animation-name:loadingGradient;
         background-image:linear-gradient(to right, #e8ebed 0%, #e8ebed 20%, #e8ebed 40%, #e8ebed 100%);
         background-repeat:no-repeat;
         }
         @keyframes loadingGradient {
         0% {
         background-position:-400px 0px;
         } 
         100% {
         background-position:400px 0px;
         }
         }
         /* Next & previous buttons */
         /*.prev, .next {*/
         /*  cursor: pointer;*/
         /*  position: absolute;*/
         /*  top: 50%;*/
         /*  width: auto;*/
         /*  padding: 16px;*/
         /*  margin-top: -22px;*/
         /*  color: black;*/
         /*  font-weight: bold;*/
         /*  font-size: 18px;*/
         /*  transition: 0.6s ease;*/
         /*  border-radius: 0 3px 3px 0;*/
         /*  user-select: none;*/
         /*}*/
         /* Position the "next button" to the right */
         /*.next {*/
         /*  right: 0;*/
         /*  border-radius: 3px 0 0 3px;*/
         /*}*/
         /* On hover, add a black background color with a little bit see-through */
         /*.prev:hover, .next:hover {*/
         /*  background-color: rgba(0,0,0,0.8);*/
         /*}*/
         /*Upana Style Css*/
         .navbar{
         background-color: #fff;
         /*-webkit-box-shadow: 0px 1px 22px -11px rgba(0,0,0,0.50);*/
         /*-moz-box-shadow: 0px 1px 22px -11px rgba(0,0,0,0.50);*/
         box-shadow: 0px 1px 22px -11px rgba(0,0,0,0.50);
         }
         .navbar__header__logolink img {
         width: 125px;
         }
         .header-logo img{
         width: 125px;
         height: 35.5px !important;
         margin-top: 10px;
         }
         .column-12 {
         float: left;
         width: 100%;
         padding: 0px 7.5px;
         }
         .column-6 {
         float: left;
         width: 50%;
         padding: 0px 7.5px;
         }
         .column-4 {
         float: left;
         width: 25%;
         }
         .column-3 {
         float: left;
         width: 33.33%;
         }
         .column-md-6,.column-sm-6,.column-md-6-2 {
         float: left;
         width: 50%;
         }
         .column-md-4,.column-sm-4 {
         float: left;
         width: 25%;
         }
         .column-md-3,.column-sm-3,.column-md-3-2 {
         float: left;
         width: 33.33%;
         }
         .sectionJoinUs{
         display: flex;
         }
         .float-center{
         float: center;
         }
         .mt-5{
         margin-top: 3rem !important;
         }
         .mb-5{
         margin-bottom: 3rem !important;
         }
         /* Clear floats after the columns */
         .row:after {
         content: "";
         display: table;
         clear: both;
         }
         .keunggulan-item{
         padding-left: 15px;
         padding-right: 15px;
         }
         .keunggulan-img{
         height: 80px;
         margin-bottom: 15px;
         }
         .keunggulan-info{
         margin-top: 10px;
         font-size: 18px;
         line-height: 1.55;
         }
         .keunggulan-judul{
         margin-top: 10px;
         font-size: 18px;
         line-height: 1.55;
         font-weight: bold;
         }
         .b-22577593-background_color{
         padding-bottom: 0px;
         }
         .signup-info{
         font-size: 28px;
         font-weight: bold;
         line-height: 1.5;
         margin-top: 12rem;
         }
         .btnx{
         padding: 10px 10px !important;
         min-width: 100px;
         border-radius: 5px;
         }
         .btn_signup{
         width: 30%;
         }
         .inputan{
         border-radius: 5px;
         border: 1px solid #E0E0E0;
         padding: 5px 20px; line-height: 28px;
         }
         .inputanSelect{
         padding: 10px 20px; line-height: 28px;
         }
         #btnSignup{
         margin-left: auto;
         margin-right: auto;
         }
         .hamburger span, .hamburger::after, .hamburger::before{
         background-color: #153e5b;
         }
         /*ul.footer__list:first-of-type:before {*/
         /*    content: url(https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/Logo%20LatihID%20-%20New/NEW%20LOGO%20LATIHID%20Color.png);*/
         /*    display: block;*/
         /*    margin-bottom: 5px;*/
         /*}*/
         .bottom-menu{
         padding: 0px;
         position: relative;
         }
         body{
         padding-bottom: 0px !important;
         }
         /* Slideshow container */
         .slideshow-container {
         position: relative;
         margin-bottom: -10px;
         padding-bottom: 0px;
         background-color: white;
         }
         .dotList{
         margin-bottom: 20px;
         padding-bottom: 20px;
         background-color: white;
         }
         #block-28863949{
         background-color: white;
         }
         /* Next & previous buttons */
         /*.prev, .next {*/
         /*  cursor: pointer;*/
         /*  position: absolute;*/
         /*  top: 50%;*/
         /*  width: auto;*/
         /*  padding: 16px;*/
         /*  margin-top: -22px;*/
         /*  color: white;*/
         /*  font-weight: bold;*/
         /*  font-size: 18px;*/
         /*  transition: 0.6s ease;*/
         /*  border-radius: 0 3px 3px 0;*/
         /*  user-select: none;*/
         /*}*/
         /* Position the "next button" to the right */
         /*.next {*/
         /*  right: 0;*/
         /*  border-radius: 3px 0 0 3px;*/
         /*}*/
         /* On hover, add a black background color with a little bit see-through */
         /*.prev:hover, .next:hover {*/
         /*  background-color: rgba(0,0,0,0.8);*/
         /*}*/
         /* Caption text */
         /*.text {*/
         /*  color: #f2f2f2;*/
         /*  font-size: 15px;*/
         /*  padding: 8px 12px;*/
         /*  position: absolute;*/
         /*  bottom: 8px;*/
         /*  width: 100%;*/
         /*  text-align: center;*/
         /*}*/
         /* Number text (1/3 etc) */
         .numbertext {
         color: #f2f2f2;
         font-size: 12px;
         padding: 8px 12px;
         position: absolute;
         top: 0;
         }
         /* The dots/bullets/indicators */
         .dot {
         cursor: pointer;
         height: 15px;
         width: 15px;
         margin: 0 2px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.6s ease;
         }
         .active, .dot:hover {
         background-color: #717171;
         }
         /* Fading animation */
         .fade {
         -webkit-animation-name: fade;
         -webkit-animation-duration: 1.5s;
         animation-name: fade;
         animation-duration: 1.5s;
         }
         @-webkit-keyframes fade {
         from {opacity: .4} 
         to {opacity: 1}
         }
         @keyframes fade {
         from {opacity: .4} 
         to {opacity: 1}
         }
         /* On smaller screens, decrease text size */
         @media only screen and (max-width: 300px) {
         .prev, .next,.text {font-size: 11px}
         }
         .judulSection{
         width: 37.5%;
         margin-left: auto;
         margin-right: auto;
         display: block;
         margin-top: 25px;
         }
         #block-19199043 .b1{
         padding-top: 0px;
         }
         #form div[data-role="form-footer"] {
         display: none !important;
         }
         #tentangKami-header{
         padding-top:0px;
         padding-bottom:25px;
         }
         #imgPlace{
         position: relative;
         }
         /*#imgPlace img{*/
         /*    position: fixed;*/
         /*    top: 0;*/
         /*    left: 0;*/
         /*}*/
         .tkInfo{
         position: absolute;
         top: 40%;
         left: 8%;
         z-index: 4;
         }
         .tentangkamiinfo{
         position: absolute;
         top: 15%;
         left: 8%;
         z-index: 4;
         }
         .judulInfo{
         font-size:4vw;
         line-height: 1.7;
         font-weight: 500;
         color:#163F5B;
         }
         .tentangkami-judulinfo2{
         font-size:40px;
         line-height: 50px;
         font-weight: 500;
         color:#163F5B;
         padding-bottom: 57px;
         }
         .tentangkami-judulinfo{
         font-size:40px;
         line-height: 50px;
         font-weight: 500;
         color:#163F5B;
         }
         .textInfo{
         font-size: 1.6vw;
         line-height: 1.3;
         color: black;
         }
         .tentangkami-textinfo{
         margin-top: 30px;
         font-size: 18px;
         line-height: 20px;
         color: black;
         }
         .tentangkami-textinfo2{
         font-size: 18px;
         line-height: 12px;
         color: #163F5B;
         }
         .judul-section{
         text-align:center;
         font-size: 3.1rem;
         color:#163F5B;
         margin-bottom: 20px;
         }
         .info-section{
         text-align:center;
         font-size: 1.5rem;
         line-height: 1.5;
         color: black;
         }
         .navbar__menu__list button, .navbar__menu__list>li>a {
         letter-spacing: 1px;
         }
         .at-top{
         box-shadow: 0px 1px 22px -11px rgba(0,0,0,0)
         }
         .span.namaProgram {
         margin-bottom:20px;
         }
         .namaProgram{
         font-size: 2.7rem;
         line-height: 1.5;
         margin-bottom: 20px;
         }
         /*Homepage Feedback - by Arnold*/
         .namaPengguna{
         font-size: 1.4vw; 
         font-weight: bold; 
         margin-top: 15px; 
         margin-bottom: 8px; 
         text-align: center;
         }
         .jobDeskPengguna{
         font-size: 1.2vw; 
         font-weight: bold; 
         text-align: center;
         }
         .deskripsiPengguna{
         font-size: 1.2vw; 
         line-height: 1.3; 
         margin-top: 15px; 
         text-align: center;
         }
         /*Akhir Homepage Feedback*/
         .penjelasanProgram{
         margin-top: 10px;
         font-size: 18px;
         line-height: 1.5;
         }
         .blockProgram a{
         line-height: 2;
         font-size: 1.5rem;
         color: var(--brand_text);
         }
         .cardPeserta{
         width: 70%;
         min-height: 340px;
         display: block;
         margin-left: auto;
         margin-right: auto;
         border-radius: 10px;
         padding: 30px 10px;
         box-shadow: 0px 0px 18px 0px rgba(252,128,71,0.50);
         }
         .counterPeserta{
         font-size: 4rem;
         font-weight: bold;
         margin-bottom: 10px;
         }
         .text-peserta{
         font-size: 1.6rem;
         font-weight: bold;
         margin-bottom: 15px;
         }
         .deskripsiPeserta{
         font-size: 1.3rem;
         line-height: 1.3;
         }
         .btTim{
         position: fixed;
         }
         /* Slider */
         .slick-slide {
         margin: 0px 20px;
         }
         #bannerHeader .slick-slide{
         margin:0px;
         }
         .slick-slide img {
         width: 100%;
         }
         .slick-slider
         {
         position: relative;
         display: block;
         box-sizing: border-box;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         -webkit-touch-callout: none;
         -khtml-user-select: none;
         -ms-touch-action: pan-y;
         touch-action: pan-y;
         -webkit-tap-highlight-color: transparent;
         }
         .slick-list
         {
         position: relative;
         display: block;
         overflow: hidden;
         margin: 0;
         padding: 0;
         }
         .slick-list:focus
         {
         outline: none;
         }
         .slick-list.dragging
         {
         cursor: pointer;
         cursor: hand;
         }
         .slick-slider .slick-track,
         .slick-slider .slick-list
         {
         -webkit-transform: translate3d(0, 0, 0);
         -moz-transform: translate3d(0, 0, 0);
         -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
         transform: translate3d(0, 0, 0);
         }
         .slick-track
         {
         position: relative;
         top: 0;
         left: 0;
         display: block;
         }
         .slick-track:before,
         .slick-track:after
         {
         display: table;
         content: '';
         }
         .slick-track:after
         {
         clear: both;
         }
         .slick-loading .slick-track
         {
         visibility: hidden;
         }
         .slick-slide
         {
         display: none;
         float: left;
         height: 100%;
         min-height: 1px;
         }
         [dir='rtl'] .slick-slide
         {
         float: right;
         }
         .slick-slide img
         {
         display: block;
         }
         .slick-slide.slick-loading img
         {
         display: none;
         }
         .slick-slide.dragging img
         {
         pointer-events: none;
         }
         .slick-initialized .slick-slide
         {
         display: block;
         }
         .slick-loading .slick-slide
         {
         /*visibility: hidden;*/
         }
         .slick-vertical .slick-slide
         {
         display: block;
         height: auto;
         border: 1px solid transparent;
         }
         .slick-arrow.slick-hidden {
         /*display: none;*/
         }
         #partnerLogo .slick-prev::before, #partnerLogo .slick-next::before{
         color:#5cbcd2 !important;
         opacity: 1;
         font-size: 24px;
         }
         #timLatihID{
         top: 120px;
         left: 0;
         width: 100%;
         padding-left: 5%;
         padding-right: 5%;
         position: absolute;
         }
         #timLatihID .slick-prev::before, #timLatihID .slick-next::before{
         color: #FFA67C !important;
         opacity: 1;
         font-size: 24px;
         }
         .namaTim{
         font-size: 2rem;
         margin-top: 15px;
         margin-bottom: 8px;
         text-align: center;
         }
         .jobDeskTim{
         font-size: 1.7rem;
         text-align: center;
         }
         .deskripsiTim{
         font-size: 1.4rem;
         line-height: 1.3;
         margin-top: 15px;
         text-align: center;
         }
         #timLatihID .slick-slide img {
         width: 17vw;
         height: 17vw;
         object-fit : cover;
         border-radius: 50%;
         display: block;
         margin-left: auto;
         margin-right: auto;
         }
         .slick-dots{
         bottom: -40px !important;
         }
         .accordion-container{
         position: relative;
         max-width: 500px;
         height: auto;
         margin: 10px auto;
         }
         .accordion-container > h2{
         text-align: center;
         color: #fff;
         padding-bottom: 5px;
         margin-bottom: 20px;
         padding-bottom: 15px;
         border-bottom: 1px solid #ddd;
         }
         .set{
         position: relative;
         width: 100%;
         height: auto;
         background-color: white;
         box-shadow: 0px 10px 22px -6px rgba(252,128,71,0.5);
         border-radius: 10px;
         margin-bottom: 20px;
         }
         .set > a{
         display: block;
         padding: 16px 15px;
         text-decoration: none;
         color: #555;
         font-weight: 600;
         /*border-bottom: 1px solid #ddd;*/
         -webkit-transition:all 0.2s linear;
         -moz-transition:all 0.2s linear;
         transition:all 0.2s linear;
         border-radius: 10px;
         font-size: 1.3rem;
         line-height: 1.5;
         }
         .set > a i{
         float: right;
         margin-top: 2px;
         }
         .set > a.active{
         background-color: #fc8047;
         color: white;
         border-radius: 10px 10px 0px 0px;
         }
         .content{
         background-color: #fff0;
         /*border-bottom: 1px solid #ddd;*/
         display:none;
         }
         .content p{
         padding: 15px 15px;
         margin: 0;
         color: #333;
         font-size: 1.4rem;
         line-height: 1.4;
         }
         .inner-menu a {
         /*padding-top: 16px !important;*/
         font-size: 15px;
         max-height: 60px;
         color: #2b3636 !important;
         cursor: pointer;
         }
         #form div[data-role="page"]{
         box-shadow: 0 0 10px 0 rgba(0,0,0,0);
         }
         #form{
         padding-top: 0px !important;
         }
         .course-filter:first-child{
         /*display:none !important;    */
         }
         .course-directory{
         background: url(https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/bg/2-bg.svg) no-repeat !important;
         /*background-size: cover !important;*/
         background-position: 50% -30% !important; 
         }
         .counter {
         animation-duration: 1s;
         animation-delay: 0s;
         }
         .tampilanDesktop{
         display: block;
         }
         .tampilanMobile{
         display: none; 
         }
         .blog-container .post h1 a {
         font-size: 2.5rem;
         line-height: 0.8;
         }
         .nav.navbar-nav > li .fedora-navbar-link{
         font-weight: 500;
         }
         .navbar-fedora .navbar-collapse.in .nav.navbar-nav ul.dropdown-menu li a{
         color: #333;
         }
         .daftarButton{
         padding: 5px 15px !important; 
         background-color: #FF6621; 
         color: white !important; 
         border-radius: 15px;
         }
         .cardMediaSocial{
         width: 80% !important;
         min-height: 100px !important;
         }
         .navbar-fedora.is-at-top.is-not-signed-in.is-blog{
         /*background: white !important;*/
         }
         .is-at-top{
         box-shadow: 0px 1px 22px -11px rgba(0,0,0,0.0);
         }
         .homepage-hero{
         margin-top: -60px;
         }
         .homepage-hero.blog {
         height: 510px;
         }
         .bannerMisiKami{
         width:100% !important; 
         }
         .post-ellipsis { 
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis; 
         height:100px;
         }
         #mc-embedded-subscribe{
         margin: 0em 0 0em 0% !important;
         }
         .blog-container{
         padding-bottom: 85px !important;
         background-color: white;
         }
         .blog-container .post{
         box-shadow: 4px 4px 15px -5px rgba(0,0,0,0.1);
         }
         .blog-container .flex-wrap{
         position: relative;
         }
         .blog-container center{
         position: absolute;
         bottom: -125px;
         left: 32vw;
         }
         .homepage-hero.blog .headline a {
         /*color: #fff;*/
         display:none;
         }
         div.scrollable {
         height: 370px;
         overflow-x: hidden;
         overflow-y: auto;
         text-align: center;
         padding: 20px;
         }
         .modulBanner{
         width: 100%;
         min-height: 100px;
         background-color: #D7EFF4;
         border-radius: 7px;
         padding: 20px;
         }
         .btnSelengkapnya{
         padding-left: 20px !important;
         padding-right:20px !important;
         border-radius: 20px; 
         background-color: #163f5b; 
         color: white;
         font-size: 1.4rem;
         cursor: pointer;
         }
         .cardMod, .cardModOrange{
         position: relative;
         width: 100%;
         background-color: white;
         border-radius: 5px;
         height: 315px;
         box-shadow: 4px 4px 15px -5px rgba(0,0,0,0.1);
         }
         .cardMod:hover{
         box-shadow: 0px 0px 0px 1px #f7d9cc;
         border: 1px solid #f7d9cc;
         }
         .cardModOrange:hover{
         box-shadow: 0px 0px 0px 1px #d7eff4;
         border: 1px solid #d7eff4;
         }
         .cardMod:hover a{
         color: #ff6a0e !important;
         }
         .imgThumbnail img{
         object-fit:cover;
         width: 100%;
         border-radius: 5px 5px 0px 0px;
         }
         .svgCard{
         width: 80px; 
         margin-bottom: 10px;
         }
         .cardMod a{
         text-decoration: none;
         }
         .cardMod a:hover{
         color: #ff6a0e !important;
         }
         .jdlModul{
         font-size: 1.5rem !important;
         font-weight: bold !important;
         color: #212121 !important;
         line-height: 1.5 !important;
         cursor: pointer;
         }
         .fontgratis{
         font-size: 1.5rem !important;
         font-weight: light !important;
         color: #FF6A0E !important;
         line-height: 1.5 !important;
         cursor: pointer; 
         }
         .btnGratis{
         background-color: #FF6A0E;
         color: white;
         padding: 5px 15px 5px 15px;
         border-radius: 20px;
         text-decoration: none;
         cursor: pointer;
         border: none;
         }
         .is-blog{
         background-color: transparent !important;
         border-bottom: 0px solid #f2f2f2;
         }
         .is-scrolling{
         background-color: white !important;
         box-shadow: 0px 1px 22px -11px rgba(0,0,0,0.50);
         }
         .navbar-trans{
         box-shadow: 0px 1px 22px -11px rgba(0,0,0,0.50);
         }
         .at-top{
         box-shadow: 0px 1px 22px -11px rgba(0,0,0,0);
         }
         #mce-MMERGE1{
         width: 209% !important;
         }
         .slick-dots li.slick-active button::before {
         color: #d67004 !important;
         }
         .latihIdTextBanner{
         max-height: 30px;
         max-width: 225px;
         line-height: 30px;
         font-weight: 200;
         font-size: 15px;
         text-overflow: ellipsis;
         overflow: hidden;
         white-space: nowrap;
         margin-left: 5px;
         }
         #bannerHeader .slick-prev {
         left: 34px;
         z-index: 99;
         color: white;
         opacity: 1;
         }
         #bannerHeader .slick-next {
         right: 38px;
         color: white;
         opacity: 1;
         }
         .ft-main-item img{
         display: block;
         margin: auto;
         }
         .deskripsiLatih{
         font-size: 1.2rem;
         text-align: center;
         }
         .courseFooter .deskripsiLatih{
         font-size: 1.2rem;
         line-height: 1;
         font-weight: 500;
         }
         .linkBannerHome{
         cursor: pointer;
         }
         @media(max-width: 960px){
         html, body {
         max-width: 100%;
         overflow-x: hidden;
         }
         .navbar__menu__list{
         padding: 10px;
         }
         .blog-container center {
         bottom: -125px;
         left: -37.5%;
         }
         }
         @media(max-width: 720px){
         .keunggulan-img{
         margin-left: auto;
         margin-right: auto;
         }
         .column-md-3 {
         float: left;
         display: block;
         text-align: center;
         width: 100%;
         margin-bottom: 30px;
         }
         .sectionJoinUs{
         display:block;
         }
         .column-md-3-2 {
         float: left;
         display: block;
         text-align: center;
         width: 100%;
         }
         /* Homepage Feedback - by Arnold */
         .namaPengguna {
         font-size: 18px;
         }
         .jobDeskPengguna {
         font-size: 16px;
         }
         .deskripsiPengguna {
         font-size: 16px;
         }
         .feedback {
         padding-top:25px !important;
         padding-bottom:25px !important;
         height:40em;
         }
         /* Akhir Homepage Feedback */
         .column-md-4{
         float: left;
         display: block;
         text-align: center;
         width: 100%;
         margin-bottom: 30px;
         }
         .column-md-6 {
         float: left;
         display: block;
         width: 100%;
         text-align: center;
         margin-bottom: 30px;
         }
         .mitraSection {
         padding-left: 10%;padding-right: 10%;
         }
         .indentKeunggulan {
         padding-left:0px !important;
         }
         .indentGambarKeunggulan {
         margin-top:0px !important;
         }
         .column-md-6-2 {
         float: left;
         display: block;
         width: 100%;
         text-align: center;
         }
         .btn_signup{
         width: 100%;
         }
         .judul-section{
         font-size: 2.4rem;
         font-weight:bold;
         }
         .info-section{
         font-size: 1.3rem;
         }
         .keunggulan-info{
         font-size: 14px;
         }
         .cardPeserta{
         min-height:280px;
         }
         .judulSection{
         width: 75% !important;
         }
         .judulSection-tim{
         width: 45% !important;
         }
         .judulSection-apa{
         width: 100% !important;
         }
         .sectionBar{
         padding-top: 25px !important;
         padding-bottom: 25px !important;
         }
         .sectionKamiPercaya{
         padding-top: 200px!important;
         }
         .tampilanDesktop{
         display: none;
         }
         .tampilanMobile{
         display: block;
         }
         .signup-info{
         margin-top: 1rem;
         font-size: 2.2rem;
         }
         .flex-column{
         max-width: 100% !important;
         }
         .blog-container .post h1 a {
         font-size: 2.5rem;
         }
         #timLatihID{
         top: 60px;
         }
         #timLatihID .slick-slide img{
         width: 30vw;
         height: 30vw;
         }
         .slick-dots{
         display:none !important;
         }
         .slick-prev{
         left: -10px !important;
         }
         .slick-next {
         right: -6px !important;
         }
         .cardPeserta{
         width: 90%;
         }
         .daftarButton{
         padding-left: 38% !important;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .navbar-fedora .navbar-collapse.in, .navbar-fedora .navbar-collapse.collapsing {
         width: 67% !important;
         }
         .menu-trigger, .navbar__menu__list {
         font-size: 1.5rem;
         margin-left:-4px;
         }
         #hamburger-menu li{
         padding: 12.5px 5px !important;
         }
         #header-sign-up-btn{
         background-color: #FF6621 !important;
         margin-top: 15px !important;
         width: 100%;
         padding: 5px !important;
         padding-left: 5px;
         margin-bottom: 20px !important;
         border-radius: 35px !important;
         padding-left: 43% !important;
         }
         #program-menu a {
         padding-top 0px !important;
         }
         .course-directory{
         background-position: 50% -10% !important; 
         }
         .bannerMisiKami{
         width:146% !important;
         }
         .judulInfo{
         font-size: 8vw;
         }
         .textInfo{
         font-size: 3.25vw;
         }
         .pagination{
         position: absolute !important;
         bottom: 7.5% !important;
         left: 38% !important;
         right: auto !important;
         }
         .blog-container center{
         width: 130vw !important;
         }
         .blog-container center {
         bottom: -125px;
         left: -41%;
         }
         .homepage-hero.blog {
         height: 330px;
         }
         .homepage-hero::after{
         background: url("https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/bg/bg_artikelMobile.png") !important;
         background-size: cover !important;
         background-color: white !important;
         }
         .svgCard{
         display: block;
         margin-left: auto;
         margin-right: auto;
         }
         .faqPadding{
         padding-left: 8% !important;
         padding-right:8% !important;
         }
         .faqCol{
         margin-bottom:0px;
         padding: 0px !important;
         }
         .centerMobile{
         text-align:center !important;
         }
         .blog-container center {
         bottom: -125px;
         left: -40%;
         }
         #bannerHeader .slick-prev {
         left: 24px !important;
         }
         #bannerHeader .slick-next {
         right: 25px !important;
         }
         }
      </style>
      <title>Homepage | LatihID</title>
      <meta name="description" content="new Homepage">
      <link rel="canonical" href="https://www.latihid.com/">
      <meta property="og:title" content="Homepage">
      <meta property="og:type" content="website">
      <meta property="og:image" content="https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1">
      <meta property="og:url" content="https://www.latihid.com/p/homepage">
      <meta property="og:description" content="new Homepage">
      <meta name="brand_video_player_color" content="#09A59A">
      <meta name="site_title" content="LatihID">
      <script src='//fast.wistia.com/assets/external/E-v1.js'></script>
      <script src='https://www.recaptcha.net/recaptcha/api.js' async defer></script>
      <!-- Facebook Pixel Code -->
      <script>
         !function(f,b,e,v,n,t,s)
         {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};
         if(!f.fbq)f.fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
         n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t,s)}(window, document,'script',
         'https://connect.facebook.net/en_US/fbevents.js');
         fbq('dataProcessingOptions', ['LDU'], 0, 0);
         fbq('init', '298374884874970');
         fbq('track', 'PageView');
      </script>
      <noscript>
         <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=298374884874970&ev=PageView&noscript=1"/>
      </noscript>
      <!-- End Facebook Pixel Code -->
      <meta name="asset_host" content="https://fedora.teachablecdn.com">
      <script src="https://fedora.teachablecdn.com/packs/pages-6b035fdf2e698cefda59.js"></script>
      <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->
      <!--
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
         
         -->
      <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
      <link rel="stylesheet" href="https://design.upanastudio.com/latih_id_asset/glide-3.4.1/glide-3.4.1/dist/css/glide.core.min.css">
      <meta name="google-site-verification" content="PlzRyevxN3DRuY_W1ZJzglIXFzeesAGr0tdxRbCTRRA" />
      <!-- Global site tag (gtag.js) - Google Ads: 606798312 -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-606798312"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'AW-606798312');
      </script>
      <!-- Event snippet for Website traffic conversion page -->
      <script>
         gtag('event', 'conversion', {'send_to': 'AW-606798312/51quCNvf-toBEOiDrKEC'});
      </script>
      <script 
         type="text/javascript"
         src="https://app.midtrans.com/snap/snap.js"
         data-client-key="Mid-client-Z6SA-tSb8hOUJdrl"
         ></script>
      <!-- Event snippet for Website lead conversion page
         In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
      <script>
         function gtag_report_conversion(url) {
           var callback = function () {
             if (typeof(url) != 'undefined') {
               window.location = url;
             }
           };
           gtag('event', 'conversion', {
               'send_to': 'AW-606798312/8lR0CJ-WldsBEOiDrKEC',
               'event_callback': callback
           });
           return false;
         }
      </script>
      <!--Footer for Courses Page-->
      <script>
         document.addEventListener("DOMContentLoaded", function(){
            try { 
            document.getElementsByClassName("bottom-menu-inverse")[0].innerHTML=`
            <section class="ft-main">
                 <div class="ft-main-item">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/Logo%20LatihID%20-%20New/NEW%20LOGO%20LATIHID%20Color.png" alt="Girl in a jacket" width="70">
                    <div class="courseFooter">
                    <p class="deskripsiLatih" style="margin-top: 20px; text-align:left;">LatihID adalah suatu platform penyedia</p>
                    <p class="deskripsiLatih" style="text-align:left;">pelatihan gratis dan berkualitas untuk</p>
                    <p class="deskripsiLatih" style="text-align:left;">UMKM di Indonesia</p>
                    </div>
                 </div>
                 <div class="ft-main-item">
                   <h2 class="ft-title">Menu</h2>
                   <ul>
                     <li><a href="https://www.latihid.com">Beranda</a></li>
                     <li><a href="/courses">Modul</a></li>
                     <li><a href="https://www.latihid.com/p/tentangkami">Tentang Kami</a></li>
                     <li><a href="https://www.latihid.com/p/contact">Hubungi Kami</a></li>
                   </ul>
                 </div>
                 <div class="ft-main-item">
                   <h2 class="ft-title">Info</h2>
                   <ul>
                   <li><a href="/p/bantuan">FAQ</a></li>
                     <li><a href="/p/ayokolaborasi">Ayo Kolaborasi</a></li>
                     <li><a href="https://www.latihid.com/p/privacy">Kebijakan Privasi</a></li>
                     <li><a href="https://www.latihid.com/p/terms">Syarat Penggunaan</a></li>
                     
                   </ul>
                 </div>
                 <div class="ft-main-item">
                   <h2 class="ft-title">Ikuti Kami</h2>
                   <ul>
                     <li><a target="_blank" href="https://www.youtube.com/channel/UCi2WG2vnvehuplyf6R5T2Ew"> <i class="fa fa-youtube-play"></i> LatihID Official</a></li>
                     <li><a target="_blank" href="https://www.instagram.com/latihidofficial/"> <i class="fa fa-instagram" ></i> @latihidofficial</a></li>
                     <li><a target="_blank" href="https://www.facebook.com/latihidofficial/"> <i class="fa fa-facebook-square"></i> Latih ID</a></li>
                     
                   </ul>
                 </div>
                 
                 <div class="ft-main-item">
                 <h2 class="ft-title">Tetap terhubung dengan kami</h2>
                   <div id="mc_embed_signup">
                     <form action="https://latihid.us19.list-manage.com/subscribe/post?u=b9566c387466e869bbafe27aa&amp;id=55ccb2e4bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                     <div id="mc_embed_signup_scroll">
         	        <div class="mc-field-group" style="margin-bottom: 7px">
                 	  <input type="text" placeholder="Nama" value="" name="nama" class="required inputan" id="nama" style="width: 100%">
                   </div>
                   <div class="mc-field-group" style="margin-bottom: 7px">
                 	  <input type="email" placeholder="Masukkan email" value="" name="EMAIL" class="required inputan" id="mce-EMAIL" style="width: 100%">
                   </div>
         	        <div id="mce-responses" class="clear">
         		        <div class="response" id="mce-error-response" style="display:none"></div>
         		        <div class="response" id="mce-success-response" style="display:none"></div>
         	        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                   <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9566c387466e869bbafe27aa_55ccb2e4bd" tabindex="-1" value=""></div>
                   <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btnx" style="width: 100%"></div>
                   </div>
                   </form></div>
                     
                 </div>
               </section>
               
             <section class="ft-legal">
                 <h2 class="ft-title">© 2020 Copyright LatihID</h2>
             </section>`;
            }
            catch {
                console.log("footer error");
            }
             
         });
         
      </script>
      <!--Akhir Footer courses-->
      <script>
         document.addEventListener("DOMContentLoaded", function(){
             document.getElementsByClassName("navbar__menu__list")[0].innerHTML=`
             <li class="navLink-left">
             <button class="menu-trigger" onclick="toggleMenu('program-menu')">
             Program<i class="caret"></i>
             </button>
             <ul id="program-menu" class="inner-menu menu hidden" tabindex="0">
                <li class="user-profile">
                   <a href="https://www.latihid.com/courses/category/LatihIDModul">
                   LatihID Modul
                   </a>
                </li>
                <li>
                   <a href="https://www.latihid.com/courses/category/LatihIDTalks">
                   LatihID Talks
                   </a>
                </li>
                <li>
                   <a href="/p/peta">
                   LatihID PETA
                   </a>
                </li>
                <li>
                   <a href="/p/maju">
                   LatihID MAJU
                   </a>
                </li>
             </ul>
          </li>
          <li class="navLink-left">
             <a class="link" data-no-turbolink="true" href="/blog">
             Artikel
             </a>
          </li>
          <li class="navLink-left">
             <a class="link" data-no-turbolink="true" href="/p/tentangkami">
             Tentang Kami
             </a>
          </li>
          <li class="navLink-left">
             <a class="link" data-no-turbolink="true" href="/p/ayokolaborasi">
             Ayo Kolaborasi
             </a>
          </li>
          <li class="navLink-left">
             <button class="menu-trigger" onclick="toggleMenu('bantuan-menu')">
             Bantuan<i class="caret"></i>
             </button>
             <ul id="bantuan-menu" class="inner-menu menu hidden" tabindex="0">
                <li class="user-profile">
                   <a href="/p/bantuan">
                   FAQ
                   </a>
                </li>
                <li>
                   <a href="/p/contact">
                   Kontak Kami
                   </a>
                </li>
             </ul>
          </li>
          <li>
             <a href="/sign_in">
             Masuk
             </a>
          </li>
          <li>
             <a class="daftarButton" style="" href="/sign_up">
             Daftar
             </a>
          </li>
             `;
         });
      </script>
      <script>
         if(typeof ga != 'function') {
           (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
           })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         }
         ga('create', 'UA-44397410-1', 'auto', {'name': 'fedoraTracker', 'allowLinker': true});
         ga('fedoraTracker.set', 'anonymizeIp', false);
         ga('fedoraTracker.require', 'linker');
         ga('fedoraTracker.linker:autoLink', ['www.latihid.com'] );
         ga('fedoraTracker.require', 'ecommerce');
         ga('fedoraTracker.require', 'ec');
         ga('fedoraTracker.send', 'pageview');
         ga('create', 'UA-44397410-4', 'auto', {'name': 'teachableTracker', 'allowLinker': true});
         ga('teachableTracker.set', 'anonymizeIp', false);
         ga('teachableTracker.require', 'linker');
         ga('teachableTracker.linker:autoLink', ['www.latihid.com'] );
         ga('teachableTracker.require', 'ecommerce');
         ga('teachableTracker.require', 'ec');
         ga('teachableTracker.send', 'pageview');
      </script>
      <meta id='iris-url' data-iris-url=https://eventable.teachable.cloud />
      <link href="/blog/rss" rel="alternate" title="RSS Feed" type="application/rss+xml" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
   </head>
   <body>
      <meta http-content='IE=Edge' http-equiv='X-UA-Compatible'>
      <meta content='width=device-width,initial-scale=1.0,user-scalable=no' name='viewport'>
      <meta id="fedora-keys" data-commit-sha="2a15b93b630dd104e8f83f59aeddd25621204a9a" data-env="production" data-sentry-public-dsn="https://8149a85a83fa4ec69640c43ddd69017d@sentry.io/120346" data-stripe="pk_live_hkgvgSBxG4TAl3zGlXiB1KUX" data-track-all-ahoy="false" data-track-changes-ahoy="false" data-track-clicks-ahoy="false" data-track-sumbits-ahoy="false" data-filepicker="ADNupMnWyR7kCWRvm76Laz" data-iris-url="https://eventable.teachable.cloud" />
      <meta id="fedora-data" data-report-card="{}" data-course-ids="[]" data-completed-lecture-ids="[]" data-school-id="517824" data-school-launched="true" data-preview="logged_out" data-turn-off-fedora-branding="true" data-plan-supports-whitelabeling="true" data-powered-by-text="Powered by" data-asset-path="//https://fedora.teachablecdn.com/assets/footer/teachable-logomark-white-31d2296978598bacace50e6d48a2e1223c20a9b074af424acdd465676f81560f.svg" data-school-preferences="{&quot;ssl_forced&quot;:&quot;true&quot;,&quot;paypal_enabled&quot;:&quot;false&quot;,&quot;autoplay_lectures&quot;:&quot;true&quot;,&quot;comments_threaded&quot;:&quot;true&quot;,&quot;course_blocks_beta&quot;:&quot;true&quot;,&quot;eu_vat_tax_enabled&quot;:&quot;false&quot;,&quot;legacy_back_office&quot;:&quot;false&quot;,&quot;themeable_disabled&quot;:&quot;false&quot;,&quot;back_office_enabled&quot;:&quot;false&quot;,&quot;comments_moderation&quot;:&quot;false&quot;,&quot;eu_vat_tax_eligible&quot;:&quot;true&quot;,&quot;charge_exclusive_tax&quot;:&quot;true&quot;,&quot;send_receipts_emails&quot;:&quot;true&quot;,&quot;autocomplete_lectures&quot;:&quot;false&quot;,&quot;class_periods_enabled&quot;:&quot;false&quot;,&quot;authors_can_manage_pbc&quot;:&quot;true&quot;,&quot;css_properties_enabled&quot;:&quot;false&quot;,&quot;preenrollments_enabled&quot;:&quot;false&quot;,&quot;new_text_editor_enabled&quot;:&quot;true&quot;,&quot;require_terms_agreement&quot;:&quot;true&quot;,&quot;send_new_comment_emails&quot;:&quot;true&quot;,&quot;send_drip_content_emails&quot;:&quot;true&quot;,&quot;ssl_forced_from_creation&quot;:&quot;true&quot;,&quot;turn_off_fedora_branding&quot;:&quot;true&quot;,&quot;allow_comment_attachments&quot;:&quot;true&quot;,&quot;authors_can_email_students&quot;:&quot;false&quot;,&quot;authors_can_manage_coupons&quot;:&quot;false&quot;,&quot;teachable_accounts_enabled&quot;:&quot;true&quot;,&quot;teachable_payments_enabled&quot;:&quot;true&quot;,&quot;authors_can_import_students&quot;:&quot;false&quot;,&quot;authors_can_publish_courses&quot;:&quot;false&quot;,&quot;internal_subscriptions_beta&quot;:&quot;true&quot;,&quot;recaptcha_enabled_on_signup&quot;:&quot;true&quot;,&quot;display_vat_inclusive_prices&quot;:&quot;true&quot;,&quot;single_page_checkout_enabled&quot;:&quot;true&quot;,&quot;authors_can_set_course_prices&quot;:&quot;false&quot;,&quot;affiliate_cookie_duration_days&quot;:&quot;365&quot;,&quot;authors_can_issue_certificates&quot;:&quot;false&quot;,&quot;store_student_cards_separately&quot;:&quot;true&quot;,&quot;authors_can_manage_certificates&quot;:&quot;false&quot;,&quot;authors_can_manage_course_pages&quot;:&quot;false&quot;,&quot;disable_js_course_event_tracking&quot;:&quot;false&quot;,&quot;exclusive_vat_on_custom_gateways&quot;:&quot;true&quot;,&quot;is_edit_site_onboarding_complete&quot;:&quot;false&quot;,&quot;send_certificate_issuance_emails&quot;:&quot;true&quot;,&quot;owner_teachable_accounts_required&quot;:&quot;true&quot;,&quot;prevent_payment_plan_cancellation&quot;:&quot;true&quot;,&quot;send_subscription_reminder_emails&quot;:&quot;true&quot;,&quot;automatically_add_disqus_attachments&quot;:&quot;true&quot;,&quot;recalc_course_pct_on_lecture_publish&quot;:&quot;false&quot;,&quot;send_confirmation_instructions_emails&quot;:&quot;true&quot;,&quot;send_limited_time_unenrollment_emails&quot;:&quot;true&quot;,&quot;turn_off_myteachable_sign_up_branding&quot;:&quot;true&quot;}" data-accessible-features="[&quot;bulk_enroll_students&quot;,&quot;manually_importing_users&quot;,&quot;native_certificates&quot;,&quot;earnings_statements&quot;,&quot;teachable_payments&quot;,&quot;teachable_u&quot;,&quot;course_compliance&quot;,&quot;page_editor_v2&quot;,&quot;page_editor_v2_only&quot;,&quot;certificates_editor_v2&quot;,&quot;drip_content&quot;,&quot;custom_domain&quot;,&quot;coupons&quot;,&quot;graded_quizzes&quot;,&quot;power_editor&quot;,&quot;email&quot;,&quot;course_reports&quot;,&quot;webhooks&quot;,&quot;integrations&quot;,&quot;zapier_action_create_user&quot;,&quot;teachable_payments_payout_view&quot;,&quot;pbc&quot;,&quot;upsells&quot;,&quot;facebook_pixel&quot;,&quot;user_search_filters&quot;,&quot;multiple_course_pages&quot;,&quot;proration_upgrade_flow&quot;,&quot;cross_border_payments&quot;,&quot;new_teachable_payments&quot;,&quot;limited_time_enrollments&quot;,&quot;sales_tax_on_student_checkout&quot;,&quot;new_device_confirmation&quot;,&quot;elasticsearch_users&quot;,&quot;elasticsearch_transactions&quot;,&quot;reset_progress&quot;,&quot;fraud_warnings&quot;,&quot;paypal_through_tp&quot;,&quot;new_creator_checkout&quot;]" data-course-data="{}" />
      <meta id="analytics-keys" name="analytics" data-analytics="{&quot;Google Analytics&quot;:{&quot;trackingId&quot;:&quot;UA-169836219-1&quot;,&quot;enhancedEcommerce&quot;:true,&quot;sendUserId&quot;:true,&quot;anonymizeIp&quot;:true}}" />
      <div class="root" onclick="offMenu(event)">
         <!-- HEADER -->
         <a id="top"></a>
         <style id="ncs">
            :root {
            --header_width: 960px;
            }
         </style>
         <header id="header" class="header header-sticky">
            <!-- Navbar -->
            <nav
               class="navbar is-not-signed-in is-homepage  at-top"
               id='navbar'
               role='navigation'>
               <div class='navbar__header'>
                  <!-- Site logo -->
                  <a class='navbar__header__logolink' href='https://www.latihid.com'>
                  <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:60/https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1" alt="LatihID" srcset="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:120/https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1 2x" />
                  </a>
                  <!-- Header Menu -->
                  <div class="navbar__menu">
                     <button for="f-toggle" tabindex="0" role="button" id="hamburger" class="hamburger" aria-label="Toggle navigation"
                        onclick="toggleMenu('hamburger-menu')">
                     <span></span>
                     </button>
                     <ul class='navbar__menu__list menu hidden' id="hamburger-menu" role="menu" aria-describedby="hamburger" tabindex="0">
                        <li>
                           <a href='/courses' target=''>
                           Program
                           </a>
                        </li>
                        <li>
                           <a href='/blog' target=''>
                           Artikel
                           </a>
                        </li>
                        <li>
                           <a href='https://www.latihid.com/p/tentangkami' target=''>
                           Tentang Kami
                           </a>
                        </li>
                        <li>
                           <a href='https://www.latihid.com/p/ayokolaborasi' target=''>
                           Ayo Kolaborasi
                           </a>
                        </li>
                        <li>
                           <a href='https://www.latihid.com/p/bantuan' target=''>
                           Bantuan
                           </a>
                        </li>
                        <!-- If more than 5 links, collapse the rest in a dropdown -->
                        <li>
                           <a href='/sign_in'>
                           Masuk
                           </a>
                        </li>
                        <li>
                           <a href='/sign_up'>
                           Daftar
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <main class='view-school page-layout-v2 main'>
            <div id="blocks" class="blocks-page blocks-page-blank_page_v2 ">
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-banner " id="block-49618812">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <div style="background-color: white;padding-top: 0px;padding-bottom: 30px;padding-left: 0%;padding-right: 0%">
                     <div style="position: relative">
                        <!--<p class="judul-section" style="margin-bottom:60px">Tim LatihID</p>-->
                        <!--<img class="bgTim" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/bg/6-bg2.svg"  style="width:100%"> -->
                        <div id="bannerHeader" class="tampilanDesktop">
                           <section class="banner-view slider-banner " style="width: 100%">
                              <div class="slide ">
                                 <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul?_ga=2.89604959.574234990.1596349825-860036232.1593510817">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5e7b5d2f46049ebbc421c67a/5f265df315da6c63b7b28769_web%20banner%20pc.png">
                                 </a>
                              </div>
                              <div class="slide ">
                                 <a class="linkBannerHome" href="whttps://www.latihid.com/p/lit-17">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5ffc6646e6ae96a859472787_Copy%20of%20Banner%20LIT%2017.png">
                                 </a>
                              </div>
                              <div class="slide">
                                 <a class="linkBannerHome" href="/p/peta">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f60287bb9d5a99ae8ab3867_Banner%20web%20PETA%20Desktop-p-2600.png">
                                 </a>
                              </div>
                              <div class="slide">
                                 <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f5f3a90e55ab0fd5d9ce4c7_Banner%20Modul%20Desktop-p-2600.png">
                                 </a>
                              </div>
                           </section>
                        </div>
                        <div id="bannerHeader" class="tampilanMobile">
                           <section class="banner-view slider-banner " style="width: 100%">
                              <div class="slide ">
                                 <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul?_ga=2.89604959.574234990.1596349825-860036232.1593510817">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5e7b5d2f46049ebbc421c67a/5f265df1be698effeac0f9a8_web%20banner%20mobile.png" >
                                 </a>
                              </div>
                              <div class="slide ">
                                 <a class="linkBannerHome" href="whttps://www.latihid.com/p/lit-17">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5ffc6648796cccaad769f1f2_Copy%20of%20Copy%20of%20Banner%20Mobile%20lit%2017%20(1).png" >
                                 </a>
                              </div>
                              <div class="slide">
                                 <a class="linkBannerHome" href="/p/peta">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f60287bffadf64b745d3090_Banner%20Web%20PETA%20Mobile.png" >
                                 </a>
                              </div>
                              <div class="slide">
                                 <a class="linkBannerHome" href="https://www.latihid.com/courses/category/LatihIDModul">
                                 <img style="width:100%" src="https://uploads-ssl.webflow.com/5f13e626a1dac6a3bd6b0c13/5f5f3a92999a265fb4ab6ff1_Banner%20Web%20Modul%20Mobile.png" >
                                 </a>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-keunggulan " id="block-49618813">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <div style="background-color: #fff">
                     <div class="sectionItem" style="padding-left: 13.3%;padding-right: 13.3%; padding-top: 25px; padding-bottom: 25px">
                        <div class="">
                           <!--<img class="judulSection judul-img" src="https://design.upanastudio.com/latih_id_asset/Keunggulan%20LatihID.png" style="">-->
                           <p class="judul-section" style="margin-bottom:50px">Kenapa memilih LatihID?</p>
                        </div>
                        <div class="row mt-5">
                           <div class=" column-md-3 keunggulan-item">
                              <img class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_1.svg" width="80"> 
                              <p class="keunggulan-judul" style="">Fokus pada UMKM</p>
                              <p class="keunggulan-info" style="">Konten Berfokus untuk Pengembangan Bisnis UMKM Indonesia</p>
                           </div>
                           <div class=" column-md-3 keunggulan-item">
                              <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_2.svg" width="80">
                              <p class="keunggulan-judul" style="">Bebas Akses Dimana Saja</p>
                              <p class="keunggulan-info">Modul Pelatihan Dapat Diakses dari Perangkat Apa Saja Melihat Website</p>
                           </div>
                           <div class=" column-md-3 keunggulan-item">
                              <img class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" width="80">
                              <p class="keunggulan-judul" style="">Akses Seumur Hidup</p>
                              <p class="keunggulan-info">Akses Seumur Hidup dan Satu Login untuk Semua Kursus Pelatihan yang Ada</p>
                           </div>
                        </div>
                        <div class="row mt-5">
                           <div class=" column-md-3 keunggulan-item">
                              <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_4.svg" width="80"> 
                              <p class="keunggulan-judul" style="">Akses Kapan Saja</p>
                              <p class="keunggulan-info">Akses 24/7 untuk Semua Modul Pelatihan</p>
                           </div>
                           <div class=" column-md-3 keunggulan-item">
                              <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_5.svg" width="80">
                              <p class="keunggulan-judul" style="">Akses Gratis</p>
                              <p class="keunggulan-info">Akses Gratis untuk Semua Modul Pelatihan</p>
                           </div>
                           <div class=" column-md-3 keunggulan-item">
                              <img  class="keunggulan-img" src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_6.svg" width="80">
                              <p class="keunggulan-judul" style="">Konten yang Praktis</p>
                              <p class="keunggulan-info">Pelatihan Praktis yang Dapat Langsung Diterapkan</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-kelas-gratis-populer " id="block-49618814">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <section id="kelas-gratis-section" class="section-container">
                     <div class="programUnggulan__container">
                        <div class="modulBanner" style="background: #D7EFF4">
                           <div class="modulBanner__row">
                              <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;padding-bottom: 30px;display: flex;flex-wrap: wrap;align-items: center;">
                                 <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-Modul.svg" class="svgCard" style="width: 30%;">
                                 <!--<p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Pelatihan online yang bertujuan untuk berbagi pengetahuan secara berkelanjutan melalui media internet</p>-->
                                 <div class="keunggulan__Left" style="width:70%;padding-left: 20px;">
                                    <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold;padding-bottom: 25px;padding-left: 5px;">Kelas Gratis Populer</p>
                                    <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="l-btn l-btn-secondary l-btn-radius-large" style="" id="">Lihat Modul Lainnya</a>
                                 </div>
                              </div>
                              <div class="keunggulan__col slider-view-style-1" style="width: 100%;">
						   <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 1));
							 foreach ($query->result() as $row) {
							?>
                              <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="https://www.latihid.com/p/kerjasama-tim-dalam-kesuksesan-umkm">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
							  <?php } ?>
                           </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-kelas-terbaru " id="block-49618815">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <section id="kelas-terbaru-section" class="section-container">
                     <div class="programUnggulan__container">
                        <div class="modulBanner" style="background: #d6d2c4">
                           <div class="modulBanner__row">
                              <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                                 <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" class="svgCard" style="">
                                 <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas LatihID Terbaru</p>
                                 <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">LatihID selalu berkomitment untuk memberikan pelatihan-pelatihan terbaru yang sesuai dengan trend, pasar, dan kondisi nyata di lapangan.</p>
                                 <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                              </div>
                               <div class="keunggulan__col slider-view-top">
						   <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 2));
							 foreach ($query->result() as $row) {
							?>
                              <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="https://www.latihid.com/p/copywriting-untuk-meningkatkan-bisnis-kita">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
							 <?php } ?>
                           </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-expert-class " id="block-49618816">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <section id="expert-class-section" class="section-container">
                     <div class="programUnggulan__container">
                        <div class="modulBanner" style="background: #ffe7dc">
                           <div class="modulBanner__row">
                              <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;padding-bottom: 30px;display: flex;flex-wrap: wrap;align-items: center;">
                                 <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/2-Talks.svg" class="svgCard" style="width: 30%;">
                                 <!--<p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Pelatihan online yang bertujuan untuk berbagi pengetahuan secara berkelanjutan melalui media internet</p>-->
                                 <div class="keunggulan__Left" style="width:70%;padding-left: 20px;">
                                    <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold;padding-bottom: 25px;padding-left: 5px;">Expert Class</p>
                                    <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="l-btn l-btn-secondary l-btn-radius-large" style="" id="">Lihat Kelas Lainnya</a>
                                 </div>
                              </div>
                              <div class="keunggulan__col slider-view-style-1" style="width: 100%;">
                                <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 3));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='https://www.latihid.com/p/strategi-pemasaran';">
                                    <div class="imgThumbnail">
                                       <a href="https://www.latihid.com/p/strategi-pemasaran">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="https://www.latihid.com/p/strategi-pemasaran">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
							 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-modul,-talks,-peta " id="block-49618817">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                   <section id="latihid-modul-section" class="section-container">
                  <div class="programUnggulan__container" style="padding-left: 12.3%;padding-right: 12.3%;">
                     <div class="programUnggulan__inner programUnggulan__inner--flex">
                        <div id="latihid__talk" class="programUnggulan__columns">
                           <div class="programUnggulan__Box1">
                              <div class="programUnggulanBox__header">
                                 <p class="judul-section" style="margin-bottom:50px">LatihID Modul</p>
                                 <a class="l-btn l-btn-secondary l-btn-radius-large" href="https://www.latihid.com/courses/category/LatihIDModul">Lihat Modul Lainnya</a>
                              </div>
                              <!--Slider Section-->
                              <div class="slider-view">
                                 <div class="keunggulan__row">
								  <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 4));
								  $this->db->limit(3);
									$query = $this->db->get();
							 $this->db->limit(1,2);
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                            <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
								 <div class="keunggulan__row">
								  <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 4));
								  $this->db->limit(3);
								$query = $this->db->get();
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="location.href='#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                            <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
                                 <!--Slider Section-->
                              </div>
                              <!--End BOX Section-->
                           </div>
                           <!--End Section-->
                        </div>
                        <div id="latihid__peta" class="programUnggulan__columns">
                           <div class="programUnggulan__Box2">
                              <div class="programUnggulanBox__header">
                                 <p class="judul-section" style="margin-bottom:50px">LatihID Talks</p>
                                 <a class="l-btn l-btn-secondary l-btn-radius-large" href="https://www.latihid.com/courses/category/LatihIDTalks">Lihat Talks Lainnya</a>
                              </div>
                              <!--Slider Section-->
                              <div class="slider-view">
                                 <div class="keunggulan__row">
								 <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 5));
								  $this->db->limit(3);
									$query = $this->db->get();
									$this->db->limit(1,2);
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"><?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                 </div>
                                 <!--End row Section-->
                                 <div class="keunggulan__row">
								 <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 5));
								  $this->db->limit(3);
									$query = $this->db->get();
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"><?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                 </div>
                                 <!--Slider Section-->
                              </div>
                           </div>
                        </div>
                        <div id="latihid__latest" class="programUnggulan__columns">
                           <div class="programUnggulan__Box">
                              <div class="programUnggulanBox__header">
                                 <p class="judul-section" style="margin-bottom:50px">LatihID PETA</p>
                                 <a class="l-btn l-btn-secondary l-btn-radius-large" href="https://www.latihid.com/p/peta">Lihat PETA Lainnya</a>
                              </div>
                              <!--Slider Section-->
                              <div class="slider-view">
								 <div class="keunggulan__row">
								  <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 6));
								  $this->db->limit(3);
									$query = $this->db->get();
									$this->db->limit(1,2);
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                    
                                 </div>
                                 <!--End row Section-->
                                 <div class="keunggulan__row">
                                     <?php 
								  $this->db->select('*');
								  $this->db->from('modul');
								  $this->db->where(array('id_kategori' => 6));
								  $this->db->limit(3);
									$query = $this->db->get();
							 foreach ($query->result() as $row) {
							?>
                                    <div class="keunggulan__columns">
                                       <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                          <div class="imgThumbnail">
                                             <a href="#">
                                             <img src="<?= $row->gambar; ?>">
                                             </a>
                                          </div>
                                          <div class="keunggulan__colBody">
                                             <a class="jdlModul" href="#">
                                             <?= $row->nama_modul; ?>
                                             </a>
                                             <div class="fontgratis"> <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                          </div>
                                       </div>
                                    </div>
							 <?php } ?>
                                       <!--End row Section-->
                                    </div>
                                 </div>
                                 <!--Slider Section-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-memulai-bisnis " id="block-49618818">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="bisnis-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_1.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas Memulai Bisnis</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Bingung mau mulai Bisnis ? Sudah punya Ide tapi belum tahu cara implementasi bisnis nya? Gabung di kelas memulai bisnis sekarang !</p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 7));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="#">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis">  <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
                              
							  <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-pemasaran " id="block-49618819">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="pemasaran-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_2.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas Pemasaran</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Ingin bisnismu lebih dikenal oleh pasar ? Ikuti kelas tentang pemasaran dan dapatkan manfaatnya dalam bisnismu !</p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 8));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="#">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis">  <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
                              
							  <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
            <div class="course-block block custom_html block-custom-name-managemen-operasional " id="block-49618820">
               <!-- if no liquid block data saved we render a default state -->
               <style>
                  .blank-template-body {
                  color: #36414D;
                  font-size: 16px;
                  font-weight: 400;
                  line-height: 24px;
                  opacity: 0.6;
                  width: 750px;
                  text-align: left;
                  }
               </style>
               <section id="manajemen-class-section" class="section-container">
                  <div class="programUnggulan__container">
                     <div class="modulBanner" style="background: #d6d2c4">
                        <div class="modulBanner__row">
                           <div class="keunggulan__col keunggulan__col--left" style="padding: 10px;padding-top: 30px;">
                              <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/misc/1-KeunggulanLatihID_3.svg" class="svgCard" style="">
                              <p class="bannerJudul" style="font-size: 2.2rem; font-weight: bold; margin-bottom: 15px">Kelas Manajemen Operasional</p>
                              <p class="bannerInfo" style="font-size: 1.6rem;line-height: 1.4;margin-bottom: 20px">Belajar Manajemen Operasional menjadi mudah dengan ikut kelas-kelas di sini! Bisa kamu praktekan langsung di Usahamu. </p>
                              <a href="https://www.latihid.com/courses/category/LatihIDModul"  type="submit" name="" class="button btnx btnSelengkapnya" style="" id="">Lihat Modul Lainnya</a>
                           </div>
                           <div class="keunggulan__col slider-view-top">
                              <?php 
							 $query = $this->db->get_where("modul", array('id_kategori' => 9));
							 foreach ($query->result() as $row) {
							?>
							  <div class=" keunggulan__columns" style="padding: unset">
                                 <div class="keunggulan__innner" style="cursor: pointer" onclick="#';">
                                    <div class="imgThumbnail">
                                       <a href="#">
                                       <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/<?= $row->gambar; ?>">
                                       </a>
                                    </div>
                                    <div class="keunggulan__colBody">
                                       <a class="jdlModul" href="#">
                                       <?= $row->nama_modul; ?>
                                       </a>
                                       <div class="fontgratis">  <?php if($row->harga_modul == 0){ echo "GRATIS"; } else if ($row->harga_modul == 1){ echo "Pay as you wish"; } else { echo rupiah($row->harga_modul); } ?></div>
                                    </div>
                                 </div>
                              </div>
                              
							  <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-last-section " id="block-49618821">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <section class="section-container">
                     <div class="d-flex">
                        <div class="columns-50" style="background-image: url(https://1.bp.blogspot.com/-xj9cgzCuR2o/X4-SU5KwgDI/AAAAAAAAE7k/Y5pAuUEp7rUZXtnTVBtLISC2yJsWUVk_ACLcBGAsYHQ/s0/meeting.png)">
                           <div class="cardWrap">
                              <h2 class="cardTitle">Menjadi Pembicara</h2>
                              <p class="cardDesc">
                                 Kami membuka kesempatan untuk individu/lembaga yang ingin menjadi pemateri pada LatihID Modul, Talks, ataupun Pojok Cerita (PETA).
                              </p>
                              <div class="btnBlock">
                                 <a href="https://www.latihid.com/p/ayokolaborasi" class="l-btn l-btn-primary l-btn-radius-large">Ayo Kolaborasi</a>
                              </div>
                           </div>
                        </div>
                        <div class="columns-50" style="background-image: url(https://1.bp.blogspot.com/-WaLs1vlpcp0/X4-SU7KKPRI/AAAAAAAAE7g/YfKvSUalBRIxfTOumstN75xszg8Ts-B7wCLcBGAsYHQ/s0/Deal.png)">
                           <div class="cardWrap">
                              <h2 class="cardTitle">Menjadi Mitra</h2>
                              <p class="cardDesc">
                                 Kami menerima individu/lembaga yang ingin bekerja sama untuk jenis kemitraan lainnya, seperti media partner.
                              </p>
                              <div class="btnBlock">
                                 <a href="https://www.latihid.com/p/ayokolaborasi" class="l-btn l-btn-primary l-btn-radius-large">Ayo Kolaborasi</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-footer " id="block-49618822">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <footer>
                     <!-- Footer main -->
                     <section class="ft-main">
                        <div class="ft-main-item">
                           <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/Logo%20LatihID%20-%20New/NEW%20LOGO%20LATIHID%20Color.png" alt="Girl in a jacket" width="70"> 
                           <p class="deskripsiLatih" style="margin-top: 20px; text-align:left">LatihID adalah suatu platform penyedia </p>
                           <p class="deskripsiLatih" style="text-align:left">pelatihan gratis dan berkualitas untuk</p>
                           <p class="deskripsiLatih" style="text-align:left">UMKM di Indonesia</p>
                        </div>
                        <div class="ft-main-item">
                           <h2 class="ft-title">Menu</h2>
                           <ul>
                              <li><a href="https://www.latihid.com">Beranda</a></li>
                              <li><a href="/courses">Modul</a></li>
                              <li><a href="https://www.latihid.com/p/tentangkami">Tentang Kami</a></li>
                              <li><a href="https://www.latihid.com/p/contact">Hubungi Kami</a></li>
                           </ul>
                        </div>
                        <div class="ft-main-item">
                           <h2 class="ft-title">Info</h2>
                           <ul>
                              <li><a href="https://www.latihid.com/p/bantuan">FAQ</a></li>
                              <li><a href="https://www.latihid.com/p/ayokolaborasi">Ayo Kolaborasi</a></li>
                              <li><a href="https://www.latihid.com/p/privacy">Kebijakan Privasi</a></li>
                              <li><a href="https://www.latihid.com/p/terms">Syarat Penggunaan</a></li>
                           </ul>
                        </div>
                        <div class="ft-main-item">
                           <h2 class="ft-title">Ikuti Kami</h2>
                           <ul>
                              <li><a target="_blank" href="https://www.youtube.com/channel/UCi2WG2vnvehuplyf6R5T2Ew"> <i class="fa fa-youtube-play"></i> LatihID Official</a></li>
                              <li><a target="_blank" href="https://www.instagram.com/latihidofficial/"> <i class="fa fa-instagram" ></i> @latihidofficial</a></li>
                              <li><a target="_blank" href="https://www.facebook.com/latihidofficial/"> <i class="fa fa-facebook-square"></i> Latih ID</a></li>
                           </ul>
                        </div>
                        <div class="ft-main-item">
                           <h2 class="ft-title">Jadi yang pertama mengetahui</h2>
                           <h2 class="ft-title" style=" text-align: center; margin-bottom: 5px">update terbaru dari kami !</h2>
                           <div id="mc_embed_signuxp">
                              <form action="https://latihid.us19.list-manage.com/subscribe/post?u=b9566c387466e869bbafe27aa&amp;id=55ccb2e4bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                                 <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group" style="margin-bottom: 7px">
                                       <input type="text" placeholder="Nama" value="" name="nama" class="required inputan" id="nama" style="width: 100%">
                                    </div>
                                    <div class="mc-field-group" style="margin-bottom: 7px">
                                       <input type="email" placeholder="Email" value="" name="EMAIL" class="required inputan" id="mce-EMAIL" style="width: 100%">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                       <div class="response" id="mce-error-response" style="display:none"></div>
                                       <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9566c387466e869bbafe27aa_55ccb2e4bd" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btnx" style="width: 100%"></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </section>
                     <section class="ft-legal">
                        <h2 class="ft-title">© 2020 Copyright LatihID</h2>
                     </section>
                     <!-- Footer social -->
                  </footer>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-css-in-pages " id="block-49618823">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <style>
                     .blockMobile__program {
                     display: none;
                     }
                     .title-nav {
                     text-align: center;
                     font-size: 1.8rem;
                     padding-bottom: 8px;
                     font-weight: 700;
                     }
                     .desc-nav {
                     font-style: normal;
                     font-size: 1vw;
                     line-height: 1.5vw;
                     text-align: center;
                     color: black
                     }
                     .section-container {
                     /*padding: 40px 0;*/
                     background: #fff;
                     }
                     #timLatihID .slick-prev::before, #timLatihID .slick-next::before {
                     color: #5CBCD2 !important
                     }
                     .d-flex {
                     display: flex;
                     flex-wrap: wrap;
                     justify-content: center;
                     }
                     .columns-50 {
                     width: 50%;
                     padding: 14px;
                     box-sizing: border-box;
                     color: #fff;
                     position: relative;
                     background-repeat: no-repeat;
                     background-size: cover;
                     background-position: center;
                     }
                     .cardWrap {
                     position: inherit;
                     padding: 23px;
                     line-height: 2;
                     z-index: 2
                     }
                     .cardTitle {
                     font-size: 30px;
                     }
                     .cardDesc {
                     font-size: 18px;
                     line-height: 1.5;
                     padding-bottom: 15px;
                     width: 400px;
                     z-index: 99;
                     }
                     .columns-50:first-child:after {
                     content:'';
                     position:absolute;
                     top:0;
                     bottom:0;
                     left:0;
                     right:0;
                     background:rgba(19, 71, 0, 0.6);
                     z-index:1;
                     }
                     .columns-50:last-child:after {
                     content:'';
                     position:absolute;
                     top:0;
                     bottom:0;
                     left:0;
                     right:0;
                     z-index:1;
                     background:rgba(0, 71, 67, 0.6);
                     }
                     .navTab {
                     padding-left: 20%;
                     padding-right: 20%;
                     display: flex;
                     }
                     /*
                     * Program Unggulan
                     */
                     .programUnggulan__container {
                     width: 100%;
                     padding-left: 13.3%;
                     padding-right: 13.3%;
                     padding-top: 25px;
                     padding-bottom: 25px;
                     }
                     .programUnggulan__inner--flex {
                     display: flex;
                     flex-wrap: wrap;
                     }
                     .programUnggulan__columns {
                     width: 33.3333%;
                     padding: 14px;
                     }
                     .programUnggulan__columns .judul-section {
                     text-align: left;
                     margin-bottom: 20px !important;
                     }
                     .keunggulan__row {
                     display: flex;
                     flex-wrap: wrap;
                     flex-direction: column;
                     }
                     .keunggulan__innner {
                     position:relative;
                     border-radius: 11px;
                     box-shadow: 0px 2px 15px 0.5px rgba(0,0,0,0.1);
                     min-height: 290px;
                     background: #fff;
                     }
                     .keunggulan__columns {
                     padding: 14px;
                     }
                     .keunggulan__colBody {
                     padding: 14px;
                     }
                     .programUnggulan__Box {
                     padding: 23px;
                     background: #D7EFF4;
                     border-radius: 11px;
                     }
                     .programUnggulan__Box1 {
                     padding: 23px;
                     background: #D7EFF4;
                     border-radius: 11px;
                     }
                     .programUnggulan__Box2 {
                     padding: 23px;
                     background: #D7EFF4;
                     border-radius: 11px;
                     }
                     .programUnggulanBox__header {
                     padding: 15px 35px;
                     }
                     .programUnggulanBox1__header {
                     padding: 15px 35px;
                     }
                     .programUnggulanBox2__header {
                     padding: 15px 35px;
                     }
                     .modulBanner__row {
                     display: flex;
                     flex-wrap: wrap;
                     }
                     .keunggulan__col.slider-view-top {
                     width: 70%;
                     }
                     .keunggulan__col {
                     width: 30%;
                     }
                     .slick-next {
                     right: -13px;
                     }
                     .slick-prev {
                     left: -12px;
                     }
                     .fontgratis {
                     position: absolute;
                     bottom: 10px;
                     }
                     @media screen and (max-width: 768px) {
                     .programUnggulan__columns {
                     width: 100%;
                     }
                     .keunggulan__col, .keunggulan__col.slider-view-top {
                     width: 100%;
                     }
                     .keunggulan__col--left {
                     text-align: center;
                     padding-bottom:40px !important;
                     }
                     .block__dekstopProgram {
                     display: none;
                     }
                     .blockMobile__program {
                     display: block;
                     }
                     .navTab {
                     padding-left: unset;
                     padding-right: unset;
                     display: flex;
                     }
                     .title-nav {
                     font-size: 1.8rem;
                     height: 0;
                     }
                     #petaNav .title-nav {
                     width:100px;
                     padding-bottom: 20px;
                     }
                     .desc-nav {
                     padding-top: 25px;
                     font-size: 1.4rem;
                     line-height: 1;
                     }
                     .separator-mobile {
                     padding-top: 300px;
                     }
                     .columns-50 {
                     width: 100%;
                     }
                     .bgTim {
                     display:none;
                     }
                     .cardWrap {
                     text-align: center;
                     }
                     .cardWrap .cardDesc {
                     width:100%
                     }
                     }
                  </style>
               </div>
               <!-- in live preview mode we add an extra wrapper around each block, and remove the `block.show` check -->
               <div class="course-block block custom_html block-custom-name-js-in-pages " id="block-49618824">
                  <!-- if no liquid block data saved we render a default state -->
                  <style>
                     .blank-template-body {
                     color: #36414D;
                     font-size: 16px;
                     font-weight: 400;
                     line-height: 24px;
                     opacity: 0.6;
                     width: 750px;
                     text-align: left;
                     }
                  </style>
                  <!--CDN-->
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
                  <script>
                     // slider
                     document.addEventListener("DOMContentLoaded", function() {
                     
                       $('.slider-banner').slick({
                             slidesToShow: 1,
                             slidesToScroll: 1,
                             autoplay: true,
                             autoplaySpeed: 4000,
                             arrows: true,
                             infinite: true,
                             dots: true,
                             pauseOnHover: false,
                             responsive: [{
                                 breakpoint: 768,
                                 settings: {
                                     slidesToShow: 1
                                 }
                             }, {
                                 breakpoint: 520,
                                 settings: {
                                     slidesToShow: 1
                                 }
                             }]
                         });
                       
                        $('.slider-view').slick({
                             lazyLoad: 'progressive',
                             slidesToShow: 1,
                             slidesToScroll: 1,
                             autoplay: false,
                             autoplaySpeed: 4000,
                             arrows: true,
                             infinite: true,
                             dots: false,
                             pauseOnHover: false,
                             responsive: [{
                                 breakpoint: 768,
                                 settings: {
                                     slidesToShow: 2,
                                 }
                             }, {
                                 breakpoint: 520,
                                 settings: {
                                     slidesToShow: 1,
                                 }
                             }]
                       }); 
                       
                         
                        $('.slider-view-top').slick({
                             lazyLoad: 'progressive',
                             slidesToShow: 3,
                             slidesToScroll: 1,
                             autoplay: true,
                             autoplaySpeed: 4000,
                             arrows: true,
                             infinite: true,
                             dots: true,
                             pauseOnHover: false,
                             responsive: [{
                                 breakpoint: 768,
                                 settings: {
                                     slidesToShow: 2,
                                 }
                             }, {
                                 breakpoint: 520,
                                 settings: {
                                     slidesToShow: 1,
                                 }
                             }]
                       }); 
                       
                        $('.slider-view-style-1').slick({
                             lazyLoad: 'progressive',
                             slidesToShow: 4,
                             slidesToScroll: 1,
                             autoplay: true,
                             autoplaySpeed: 4000,
                             arrows: true,
                             infinite: true,
                             dots: true,
                             pauseOnHover: false,
                             responsive: [{
                                 breakpoint: 768,
                                 settings: {
                                     slidesToShow: 2,
                                 }
                             }, {
                                 breakpoint: 520,
                                 settings: {
                                     slidesToShow: 1,
                                 }
                             }]
                       }); 
                     
                     });
                  </script>
               </div>
            </div>
         </main>
      </div>
      <script>
         if (!Element.prototype.closest) {
           Element.prototype.closest = function(s) {
             let el = this;
             do {
               if (el.matches(s)) return el;
               el = el.parentElement || el.parentNode;
             } while (el !== null && el.nodeType === 1);
             return null;
           };
         }
         const offMenu = event => {
         if (event.target.closest('.navbar__menu')) return
         document
           .querySelectorAll('.menu')
           .forEach(item => {
             item.classList.add('hidden')
             item.setAttribute('aria-hidden', 'true')
           })
         }
         const toggleMenu = id => {
         const el = document.getElementById(id)
         if (el.classList.contains('hidden')) {
         document
         .querySelectorAll('.inner-menu')
         .forEach(item => {
           item.classList.add('hidden')
           item.setAttribute('aria-hidden', 'true')
         })
         el.classList.remove('hidden')
         el.setAttribute('aria-hidden', 'false')
         } else {
         el.classList.add('hidden')
         el.setAttribute('aria-hidden', 'true')
         }
         !el.classList.contains('hidden') && el.focus()
         }
         
         const domBody = document.body
         const usingMouse = 'using-mouse'
         domBody.addEventListener('mousedown', () => {
           domBody.classList.add(usingMouse)
         })
         domBody.addEventListener('keydown', () => {
           domBody.classList.remove(usingMouse)
         })
         
         const headerEl = document.querySelector('#navbar')
         const topHook = document.querySelector('#top')
         if (
           "IntersectionObserver" in window
         ) {
           const observer = new IntersectionObserver(entries => {
             if (entries[0].boundingClientRect.y < 0) {
               headerEl.classList.remove('at-top')
             } else {
               headerEl.classList.add('at-top')
             }
           },{threshold: 1});
           observer.observe(topHook)
         }
      </script>
      <script type="text/javascript">(function(){window['__CF$cv$params']={r:'6145bed6cf9dc33b',m:'1cf7d6f0c6e14daf591aab86687891dafece3590-1611113727-1800-AY+Typg90zfWA5SsuPJDtvbXGu891Xr7a0L7nyooNiklc/+mkjsZTxG5EgKDhLwV4jQu4Je5PDhGagk3t50P1137KZYPLv/KqV3wUiKPlohc/iYgSffu3hKtCA1h8bDZgw==',s:[0xefb6dc30b7,0xa06007ccd2],}})();</script>
   </body>
</html>