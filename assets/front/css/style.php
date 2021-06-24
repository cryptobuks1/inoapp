<?php
header("Content-Type:text/css");
$color = "#f0f"; // Change your Color Here

function checkhexcolor($color)
{
    return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if (isset($_GET['color']) AND $_GET['color'] != '') {
    $color = "#" . $_GET['color'];
}

if (!$color OR !checkhexcolor($color)) {
    $color = "#336699";
}

?>


@import url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i');


*/
/*-----------------
@Typography
-----------------*/
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900");
/*---------------------------
** Global Scss
---------------------------*/

.blog-details-content .single-blog-post .meta-time {
background-color: <?php echo $color ?>;
}




@charset "UTF-8";
/*
--------------------------
Css Indexing
--------------------------
** @typography
--------------------------
** Global css
--------------------------
** Breadcumb Area
--------------------------
** Preloader
--------------------------
** Normalize
--------------------------
** Navbar Area
--------------------------
** Header Area
--------------------------
** Service Area
--------------------------
** Video Area
--------------------------
** Testimonial Area
--------------------------
** Achivement Area
--------------------------
** Faq Area
--------------------------
** Marketing Area
--------------------------
** Footer Area
--------------------------
** About Page
--------------------------
** Service Page
--------------------------
** Testimonial Page
--------------------------
** Blog Page
--------------------------
** Blog Details Page
--------------------------
** Contact Page
--------------------------
** Login Page
--------------------------

*/
/*-----------------
@Typography
-----------------*/
@import url("https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Poppins:400,500,600,700,800");

/*---------------------------
** Global Scss
---------------------------*/
.section-bg-1 {
background-color: #141a66;
}

.section-bg-2 {
background-color: #19206e;
}

.bg-green {
background-color: #17b212 !important;
}

.remove-col-padding {
padding: 0;
}

.navbar-toggler {
border-color: rgba(0, 0, 0, 0.1);
}

.mobile-logo {
display: none;
}

.navbar-toggler-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.50)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}

.remove-col-padding-right {
padding-right: 0;
}

.remove-col-padding-left {
padding-left: 0;
}

.padding-left-0 {
padding-left: 0;
}

.padding-left-10 {
padding-left: 10px;
}

.padding-left-20 {
padding-left: 20px;
}

.padding-left-30 {
padding-left: 30px;
}

.padding-left-40 {
padding-left: 40px;
}

.padding-right-0 {
padding-left: 0;
}

.padding-top-10 {
padding-top: 10px;
}

.padding-top-20 {
padding-top: 20px;
}

.padding-top-30 {
padding-top: 30px;
}

.padding-top-40 {
padding-top: 40px;
}

.padding-top-50 {
padding-top: 50px;
}

.padding-top-60 {
padding-top: 60px;
}

.padding-top-70 {
padding-top: 70px;
}

.padding-top-80 {
padding-top: 80px;
}

.padding-top-90 {
padding-top: 90px;
}

.padding-top-100 {
padding-top: 100px;
}

.margin-top-10 {
margin-top: 10px;
}

.margin-top-20 {
margin-top: 20px;
}

.margin-top-30 {
margin-top: 30px;
}

.margin-top-40 {
margin-top: 40px;
}

.margin-top-50 {
margin-top: 50px;
}

.margin-top-60 {
margin-top: 60px;
}

.margin-top-70 {
margin-top: 70px;
}

.margin-top-80 {
margin-top: 80px;
}

.margin-top-90 {
margin-top: 90px;
}

.margin-top-100 {
margin-top: 100px;
}

.margin-bottom-0 {
margin-bottom: 0px !important;
}

.margin-bottom-10 {
margin-bottom: 10px;
}

.margin-bottom-15 {
margin-bottom: 15px;
}

.margin-bottom-20 {
margin-bottom: 20px;
}

.margin-bottom-30 {
margin-bottom: 30px;
}

.margin-bottom-40 {
margin-bottom: 40px;
}

.margin-bottom-50 {
margin-bottom: 50px;
}

.margin-bottom-60 {
margin-bottom: 60px;
}

.margin-bottom-70 {
margin-bottom: 70px;
}

.margin-bottom-80 {
margin-bottom: 80px;
}

.margin-bottom-90 {
margin-bottom: 90px;
}

.margin-top-100 {
margin-bottom: 100px;
}

.margin-top-120 {
margin-top: 120px;
}

.padding-left-0 {
padding-left: 0px !important;
}

.navbar-expand-lg .navbar-nav .nav-link {
padding-right: .4rem;
padding-left: 0.4rem;
}

.btn-clr,
.btn-clr:active,
.btn-clr:focus,
.btn-clr:visited,
.btn-clr:hover {
background-color: <?php echo $color ?> !important;
border: 2px solid <?php echo $color ?> !important;
border-radius: 0;
color: #fff;
}

.back-to-top {
position: fixed;
right: 30px;
bottom: 30px;
width: 50px;
height: 50px;
background-color: <?php echo $color ?>;
color: #fff;
text-align: center;
line-height: 60px;
border-radius: 50%;
z-index: 99;
font-size: 25px;
cursor: pointer;
-webkit-box-shadow: 0 0 5px rgba(255, 137, 57, 0);
box-shadow: 0 0 5px rgba(255, 137, 57, 0);
}

.back-to-top i {
-ms-transform: rotate(-45deg);
/* IE 9 */
-webkit-transform: rotate(-45deg);
/* Chrome, Safari, Opera */
transform: rotate(-45deg);
}

.br-10 {
border-radius: 10px;
}

.boxed-btn {
display: inline-block;
text-align: center;
height: 60px;
line-height: 60px;
font-size: 16px;
font-weight: 700;
color: #fff;
width: 160px;
background-color: <?php echo $color ?>;
padding: 0 20px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.boxed-btn:hover {
color: #fff;
background-color: <?php echo $color ?>;
}

.boxed-btn.btn-rounded {
border-radius: 30px;
}

.boxed-btn.blank {
background-color: transparent;
border: 2px solid #1e3056;
color: #1e3056;
}

.boxed-btn.blank:hover {
background-color: <?php echo $color ?>;
color: #fff;
}

.mwd-700 {
max-width: 700px;
}

.section-title {
text-align: center;
margin-bottom: 77px;
}

.section-title.extra .title {
margin-bottom: 25px;
}

.section-title .title {
font-size: 48px;
line-height: 58px;
margin-bottom: 13px;
color: #1e3056;
font-weight: 700;
}

.section-title p {
font-size: 16px;
line-height: 26px;
color: rgba(30, 48, 86, 0.9);
}

.c-white {
color: #fff;
}

.blue-bg {
background-color: #1e3056;
}

.dark-blug-lg {
background-color: #14213a;
}

.c-red {
color: <?php echo $color ?>;
}

.cmn-btn,
.bg-red {
background-color: <?php echo $color ?>;
}

.c-green {
color: #00cf92;
}

.submit-btn {
width: 250px;
height: 60px;
text-align: center;
font-weight: 700;
font-size: 14px;
line-height: 40px;
color: #fff;
text-transform: uppercase;
background-color: <?php echo $color ?>;
border: none;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
cursor: pointer;
}

.submit-btn:hover {
background-color: #1e3056;
}

.submit-btn.btn-rounded {
border-radius: 30px;
}

.submit-btn.btn-center {
display: block;
margin: 0 auto;
margin-top: 25px;
}

.submit-btn:focus {
outline: none;
}

.section-title-inner {
text-align: center;
margin-bottom: 45px;
}

.section-title-inner .subtitle {
font-size: 18px;
line-height: 28px;
text-transform: uppercase;
font-weight: 700;
color: <?php echo $color ?>;
margin-bottom: 20px;
display: block;
}

.section-title-inner .title {
font-size: 48px;
font-weight: 700;
line-height: 58px;
}

.form-element.margin-bottom-30 {
margin-bottom: 27px;
}

.form-element label {
color: #1e3056;
font-size: 14px;
font-weight: 700;
line-height: 32px;
}

.form-element label span {
color: #BE1F27;
}

.form-element select {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}

.has-icon {
position: relative;
display: block;
}

.has-icon.textarea .the-icon {
top: 25px;
}

.has-icon .input-field {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}

.has-icon .the-icon {
font-size: 14px;
position: absolute;
right: 30px;
top: 50%;
-ms-transform: translateY(-50%);
/* IE 9 */
-webkit-transform: translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateY(-50%);
color: #7c7c90;
}

.input-field {
width: 100%;
height: 50px;
padding: 0 30px;
border-radius: 5px;
color: #7c7c90;
}

.input-field::-webkit-input-placeholder {
/* WebKit browsers */
color: #7c7c90;
}

.input-field:-moz-placeholder {
/* Mozilla Firefox 4 to 18 */
color: #7c7c90;
}

.input-field::-moz-placeholder {
/* Mozilla Firefox 19+ */
color: #7c7c90;
}

.input-field:-ms-input-placeholder {
/* Internet Explorer 10+ */
color: #7c7c90;
}

.input-field.borderd {
border: 2px solid rgba(0, 0, 0, 0.1);
}

.input-field.borderd:focus {
border: 2px solid rgba(0, 0, 0, 0.1);
}

.input-field.textarea {
min-height: 120px;
padding: 20px 30px;
resize: none;
}

.input-field.error {
border: 1px solid #dc3545;
}

.input-field.error::-webkit-input-placeholder {
/* WebKit browsers */
color: #dc3545;
}

.input-field.error:-moz-placeholder {
/* Mozilla Firefox 4 to 18 */
color: #dc3545;
}

.input-field.error::-moz-placeholder {
/* Mozilla Firefox 19+ */
color: #dc3545;
}

.input-field.error:-ms-input-placeholder {
/* Internet Explorer 10+ */
color: #dc3545;
}

.input-field.error:focus {
border-color: #dc3545;
}

.gray-bg {
background-color: #fafafd;
}

.video-play-btn {
position: relative;
z-index: 1;
display: inline-block;
width: 70px;
height: 70px;
line-height: 70px;
text-align: center;
font-size: 16px;
background-color: #fff;
border-radius: 50%;
color: #313131;
}

.video-play-btn:before {
content: "";
position: absolute;
z-index: 0;
left: 50%;
top: 50%;
-ms-transform: translateX(-50%) translateY(-50%);
/* IE 9 */
-webkit-transform: translateX(-50%) translateY(-50%);
/* Chrome, Safari, Opera */
transform: translateX(-50%) translateY(-50%);
display: block;
width: 80px;
height: 80px;
background: #fff;
border-radius: 50%;
-webkit-animation: pulse-border 1500ms ease-out infinite;
animation: pulse-border 1500ms ease-out infinite;
z-index: -1;
}

.video-play-btn:hover {
color: #313131;
}

.email-success {
display: block;
width: 100%;
}

.checkbox-element {
display: inline-block;
}

.checkbox-wrapper {
display: inline-block;
}

.checkbox-inner {
display: block;
position: relative;
padding-left: 30px;
margin-bottom: 12px;
cursor: pointer;
font-size: 14px;
line-height: 24px;
color: rgba(30, 48, 86, 0.7);
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

.checkbox-inner input {
position: absolute;
opacity: 0;
cursor: pointer;
}

.checkbox-inner .checkmark {
position: absolute;
top: 0;
left: 0;
height: 20px;
width: 20px;
background-color: transparent;
border: 2px solid <?php echo $color ?>;
border-radius: 2px;
}

.checkbox-inner .checkmark:after {
content: "";
position: absolute;
display: none;
}

.checkbox-inner input:checked ~ .checkmark:after {
display: block;
}

.checkbox-inner .checkmark:after {
left: 5px;
top: 2px;
width: 5px;
height: 10px;
border: solid <?php echo $color ?>;
border-width: 0 3px 3px 0;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg);
}

.table-responsive {
display: table;
}

@-webkit-keyframes pulse-border {
0% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1;
}
100% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0;
}
}

@-moz-keyframes pulse-border {
0% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1;
}
100% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0;
}
}

@-o-keyframes pulse-border {
0% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1;
}
100% {
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0;
}
}

@keyframes pulse-border {
0% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
opacity: 1;
}
100% {
-webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
opacity: 0;
}
}

@media only screen and (max-width: 767px) {
.row.reorder-xs {
-ms-transform: rotate(180deg);
/* IE 9 */
-webkit-transform: rotate(180deg);
/* Chrome, Safari, Opera */
transform: rotate(180deg);
direction: rtl;
}

.row.reorder-xs > [class*="col-"] {
-ms-transform: rotate(-180deg);
/* IE 9 */
-webkit-transform: rotate(-180deg);
/* Chrome, Safari, Opera */
transform: rotate(-180deg);
direction: ltr;
}
}

.switch {
position: relative;
display: inline-block;
width: 70px;
height: 30px;
}

.switch input {
display: none;
}

.switch .slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #f0faff;
-webkit-transition: 0.4s;
-moz-transition: 0.4s;
-o-transition: 0.4s;
transition: 0.4s;
}

.switch .slider.round {
border-radius: 34px;
}

.switch .slider.round:before {
border-radius: 50%;
}

.switch .slider:before {
position: absolute;
content: "";
height: 30px;
width: 30px;
left: 0px;
bottom: 0px;
background-color: #1e3056;
-webkit-transition: 0.4s;
-moz-transition: 0.4s;
-o-transition: 0.4s;
transition: 0.4s;
}

input:checked + .slider:before {
background-color: <?php echo $color ?>;
}

input:checked + .slider {
background-color: #f0faff;
}

input:focus + .slider {
-webkit-box-shadow: 0 0 1px #f0faff;
box-shadow: 0 0 1px #f0faff;
}

input:checked + .slider:before {
-ms-transform: translateX(41px);
/* IE 9 */
-webkit-transform: translateX(41px);
/* Chrome, Safari, Opera */
transform: translateX(41px);
}

/*---------------------
Breadcumb Area
----------------------*/
.breadcrumb-area {
padding: 237px 0 95px 0;
background-color: #f6f7f8;
}

.breadcrumb-area.white-bg {
background-color: #fff;
}

.breadcrumb-area.extra {
padding-bottom: 112px;
}

.breadcrumb-area.breadcrumb-bg {
background-image: url(../img/bg/breadcrumb-bg.png);
background-position: center;
background-size: cover;
}

.breadcrumb-area .title {
font-size: 60px;
line-height: 70px;
font-weight: 700;
color: #fff;
}

/*-------------------------
Preloader Css
---------------------------*/
.preloader-inner {
position: fixed;
left: 0;
top: 0;
z-index: 9;
background-color: #fff;
width: 100%;
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
opacity: .8;
}

.preloader-container {
position: absolute;
width: 200px;
height: 200px;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
}

.item {
width: 100px;
height: 100px;
position: absolute;
}

.item-1 {
background-color: #FA5667;
top: 0;
left: 0;
z-index: 1;
-webkit-animation: item-1_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
animation: item-1_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
}

.item-2 {
background-color: #7A45E5;
top: 0;
right: 0;
-webkit-animation: item-2_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
animation: item-2_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
}

.item-3 {
background-color: #1B91F7;
bottom: 0;
right: 0;
z-index: 1;
-webkit-animation: item-3_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
animation: item-3_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
}

.item-4 {
background-color: #FAC24C;
bottom: 0;
left: 0;
-webkit-animation: item-4_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
animation: item-4_move 1.8s cubic-bezier(0.6, 0.01, 0.4, 1) infinite;
}

@-webkit-keyframes item-1_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(0, 100px);
transform: translate(0, 100px);
}
50% {
-webkit-transform: translate(100px, 100px);
transform: translate(100px, 100px);
}
75% {
-webkit-transform: translate(100px, 0);
transform: translate(100px, 0);
}
}

@keyframes item-1_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(0, 100px);
transform: translate(0, 100px);
}
50% {
-webkit-transform: translate(100px, 100px);
transform: translate(100px, 100px);
}
75% {
-webkit-transform: translate(100px, 0);
transform: translate(100px, 0);
}
}

@-webkit-keyframes item-2_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(-100px, 0);
transform: translate(-100px, 0);
}
50% {
-webkit-transform: translate(-100px, 100px);
transform: translate(-100px, 100px);
}
75% {
-webkit-transform: translate(0, 100px);
transform: translate(0, 100px);
}
}

@keyframes item-2_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(-100px, 0);
transform: translate(-100px, 0);
}
50% {
-webkit-transform: translate(-100px, 100px);
transform: translate(-100px, 100px);
}
75% {
-webkit-transform: translate(0, 100px);
transform: translate(0, 100px);
}
}

@-webkit-keyframes item-3_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(0, -100px);
transform: translate(0, -100px);
}
50% {
-webkit-transform: translate(-100px, -100px);
transform: translate(-100px, -100px);
}
75% {
-webkit-transform: translate(-100px, 0);
transform: translate(-100px, 0);
}
}

@keyframes item-3_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(0, -100px);
transform: translate(0, -100px);
}
50% {
-webkit-transform: translate(-100px, -100px);
transform: translate(-100px, -100px);
}
75% {
-webkit-transform: translate(-100px, 0);
transform: translate(-100px, 0);
}
}

@-webkit-keyframes item-4_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(100px, 0);
transform: translate(100px, 0);
}
50% {
-webkit-transform: translate(100px, -100px);
transform: translate(100px, -100px);
}
75% {
-webkit-transform: translate(0, -100px);
transform: translate(0, -100px);
}
}

@keyframes item-4_move {
0%, 100% {
-webkit-transform: translate(0, 0);
transform: translate(0, 0);
}
25% {
-webkit-transform: translate(100px, 0);
transform: translate(100px, 0);
}
50% {
-webkit-transform: translate(100px, -100px);
transform: translate(100px, -100px);
}
75% {
-webkit-transform: translate(0, -100px);
transform: translate(0, -100px);
}
}

/*====================
** Normalize
====================*/
html {
font-family: "Poppins", sans-serif;
-webkit-text-size-adjust: 100%;
-ms-text-size-adjust: 100%;
overflow-x: hidden;
}

body {
font-family: "Poppins", sans-serif;
font-size: 14px;
margin: 0;
color: rgba(30, 48, 86, 0.9);
overflow-x: hidden;
}

h1 {
font-size: 60px;
line-height: 1.0833333333333333;
}

h2 {
font-size: 48px;
line-height: 1.4444444444444444;
}

h3 {
font-size: 26px;
line-height: 1.0833333333333333;
}

h4 {
font-size: 22px;
line-height: 1.2380952380952381;
}

h1,
h2,
h3,
h4,
h5,
h6 {
color: #1e3056;
font-weight: 700;
font-family: "Comfortaa", cursive;
}

p {
font-size: 14px;
color: #1e3056;
line-height: 1.625;
-webkit-hyphens: auto;
-moz-hyphens: auto;
-ms-hyphens: auto;
hyphens: auto;
}

a {
color: #1e3056;
text-decoration: none;
}

a,
a:hover,
a:focus,
a:active {
text-decoration: none;
outline: none;
}

a i {
padding: 0 2px;
}

img {
max-width: 100%;
}

/*input and button type focus outline disable*/
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
textarea:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
select:focus {
outline: none;
-webkit-box-shadow: none;
box-shadow: none;
border: 1px solid #ddd;
}

/**
* 5.0 - Alignments
*/
.alignleft {
float: left;
}

.alignright {
float: right;
}

.aligncenter {
clear: both;
display: block;
margin: 0 auto 1.75em;
}

ul {
margin: 0;
padding: 0;
list-style: none;
}

/*------------------------------
Navbar Area
------------------------------*/
.navbar-area .right-btn-wrapper .boxed-btn:hover {
background-color: <?php echo $color ?>;
}
.navbar-area .navbar-collapse .navbar-nav .nav-item:hover .dropdown-menu .dropdown-item:hover {
background-color: <?php echo $color ?>;
}
.navbar-area .navbar-collapse .navbar-nav .nav-item .dropdown-menu.show .dropdown-item:hover {
background-color: <?php echo $color ?>;
color: #fff;
}

/*------------------------------
Header Area
------------------------------*/
.header-area {
position: relative;
padding: 315px 0 323px 0;
}

.header-area .scroll-down {
position: absolute;
left: 20px;
bottom: 100px;
-webkit-writing-mode: tb-rl;
-ms-writing-mode: tb-rl;
writing-mode: tb-rl;
-ms-transform: translateX(-50%) rotate(180deg);
/* IE 9 */
-webkit-transform: translateX(-50%) rotate(180deg);
/* Chrome, Safari, Opera */
transform: translateX(-50%) rotate(180deg);
letter-spacing: 1px;
}

.header-area.header-bg {
background-image: url(../img/bg/header-bg.png);
background-size: cover;
background-position: center;
}

.header-area .header-inner .title {
font-size: 60px;
line-height: 70px;
font-weight: 700;
color: #fff;
margin-bottom: 32px;
}

.header-area .header-inner p {
font-size: 20px;
line-height: 30px;
color: #f2f2f2;
max-width: 800px;
margin: 0 auto;
}

.header-area .header-inner .btn-wrapper {
margin-top: 38px;
}

.header-area .header-inner .btn-wrapper .boxed-btn {
width: 230px;
-webkit-box-shadow: 0 0 15px rgba(255, 137, 57, 0.5);
box-shadow: 0 0 15px rgba(255, 137, 57, 0.5);
font-family: "Comfortaa", cursive;
}

/*----------------------
Service area
----------------------*/
.service-area {
padding: 115px 0 120px 0;
}

.service-area.service-page {
padding-bottom: 90px;
}

.service-area .btn-wrapper {
margin-top: 30px;
}

.service-area .btn-wrapper .boxed-btn {
width: 200px;
height: 60px;
line-height: 65px;
font-size: 18px;
font-family: "Comfortaa", cursive;
}

.service-area .btn-wrapper .boxed-btn:hover {
-webkit-box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
}

.service-area .single-service-item {
background-color: #f6f6f8;
padding: 40px 50px 22px 50px;
margin-bottom: 30px;
border-radius: 10px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.service-area .single-service-item:hover {
-webkit-box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
background-color: #fff;
}

.service-area .single-service-item .icon {
margin-bottom: 22px;
}

.service-area .single-service-item .content .title {
font-size: 24px;
line-height: 34px;
color: #1e3056;
font-weight: 600;
font-family: "Poppins", sans-serif;
margin-bottom: 15px;
}

.service-area .single-service-item .content p {
font-size: 16px;
line-height: 26px;
letter-spacing: 1px;
color: rgba(30, 48, 86, 0.9);
}

/*-------------------------
Video Area
--------------------------*/
.video-area {
position: relative;
z-index: 0;
padding: 120px 0 140px 0;
}

.video-area.grd-overlay:after {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
content: '';
z-index: -1;
background-image: -moz-linear-gradient(0deg, #9e43ff 0%, #db76ba 100%);
background-image: -webkit-linear-gradient(0deg, #9e43ff 0%, #db76ba 100%);
background-image: -ms-linear-gradient(0deg, #9e43ff 0%, #db76ba 100%);
opacity: .90;
}

.video-area.video-area-bg {
background-image: url(../../images/about-video-image.jpg);
background-size: cover;
background-position: center;
}

.video-area .video-area-content {
background-color: #fff;
position: relative;
border-radius: 10px;
z-index: 0;
padding: 95px 70px 100px 70px;
}

.video-area .video-area-content:after {
position: absolute;
left: -20px;
top: 20px;
background-color: rgba(255, 255, 255, 0.7);
width: 100%;
height: 100%;
z-index: -1;
content: '';
border-radius: 10px;
}

.video-area .video-area-content .title {
font-size: 36px;
color: #1e3056;
line-height: 46px;
margin-bottom: 22px;
}

.video-area .video-area-content .video-ply-wrapper {
position: absolute;
right: -35px;
bottom: 80px;
}

.video-area .video-area-content .video-ply-wrapper .video-play-btn {
background-color: #fff;
border: 10px solid rgba(255, 137, 57, 0.3);
z-index: 0;
width: 80px;
height: 80px;
line-height: 62px;
color: <?php echo $color ?>;
padding: 0;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.video-area .video-area-content .video-ply-wrapper .video-play-btn:hover {
background-color: <?php echo $color ?>;
color: #fff;
}

.video-area .video-area-content .video-ply-wrapper .video-play-btn:before {
-webkit-animation: none;
animation: none;
display: none;
}

.video-area .video-area-content p {
font-size: 16px;
line-height: 26px;
color: rgba(30, 48, 86, 0.9);
}

.video-area .video-area-content .btn-wrapper {
margin-top: 38px;
}

.video-area .video-area-content .btn-wrapper .boxed-btn {
width: 200px;
height: 60px;
font-family: "Comfortaa", cursive;
}

.video-area .video-area-content .btn-wrapper .boxed-btn:hover {
-webkit-box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
}

/*---------------------
Testimonial Area
-----------------------*/
.testimonial-area {
padding: 100px 0;
}

.testimonial-area .left-content-area {
margin-top: 20px;
margin-right: 50px;
}

.testimonial-area .left-content-area .title {
font-size: 50px;
line-height: 60px;
margin-bottom: 12px;
}

.testimonial-area .left-content-area p {
font-size: 16px;
line-height: 26px;
color: rgba(30, 48, 86, 0.9);
}
.testimonial-area .right-content-area .testimonial-carousel .single-testimonial-carousel::before,
.testimonial-area .right-content-area .testimonial-carousel .single-testimonial-carousel .author-details .content .post {
color: <?php echo $color ?>;
letter-spacing: 1px;
}

/*--------------------
Faq Area
--------------------*/
.faq-area {
padding: 115px 0 120px 0;
}

.faq-area .btn-wrapper {
margin-top: 30px;
}

.faq-area .btn-wrapper .boxed-btn {
width: 200px;
height: 60px;
line-height: 65px;
font-size: 18px;
font-family: "Comfortaa", cursive;
}

.faq-area .btn-wrapper .boxed-btn:hover {
-webkit-box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
}

.faq-area .left-content-wrapper .card {
border: none;
}

.faq-area .left-content-wrapper .card .card-header {
background-color: transparent;
padding: 0;
border: none;
}

.faq-area .left-content-wrapper .card .card-header a {
font-size: 18px;
line-height: 28px;
font-family: "Poppins", sans-serif;
font-weight: 500;
cursor: pointer;
display: block;
background-color: #edfeff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
padding: 28px 30px;
position: relative;
padding-left: 70px;
}

.faq-area .left-content-wrapper .card:not(:last-child) .card-header a {
    margin-bottom: 30px;
}
.faq-area .left-content-wrapper .card .card-header a:after {
position: absolute;
left: 30px;
top: 31px;
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
font-size: 12px;
width: 25px;
height: 25px;
border-radius: 50%;
border: 2px solid <?php echo $color ?>;
text-align: center;
line-height: 21px;
color: <?php echo $color ?>;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.faq-area .left-content-wrapper .card .card-header a[aria-expanded="true"] {
background-color: #fff;
border-bottom: none;
margin-bottom: 0;
padding-bottom: 3px;
}

.faq-area .left-content-wrapper .card .card-header a[aria-expanded="true"]:after {
content: '\f068';
background-color: <?php echo $color ?>;
color: #fff;
}

.faq-area .left-content-wrapper .card .card-body {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
background-color: #fff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
border-top: 0;
-webkit-box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
margin-bottom: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
padding-left: 70px;
padding-bottom: 25px;
}

.faq-area .right-content-wrapper .card {
border: none;
}

.faq-area .right-content-wrapper .card .card-header {
background-color: transparent;
padding: 0;
border: none;
}

.faq-area .right-content-wrapper .card .card-header a {
font-size: 18px;
line-height: 28px;
font-family: "Poppins", sans-serif;
font-weight: 500;
cursor: pointer;
display: block;
background-color: #edfeff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
padding: 28px 30px;
position: relative;
padding-left: 70px;
}

.faq-area .right-content-wrapper .card .card-header a:after {
position: absolute;
left: 30px;
top: 31px;
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
font-size: 12px;
width: 25px;
height: 25px;
border-radius: 50%;
border: 2px solid <?php echo $color ?>;
text-align: center;
line-height: 21px;
color: <?php echo $color ?>;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.faq-area .right-content-wrapper .card .card-header a[aria-expanded="true"] {
background-color: #fff;
border-bottom: none;
margin-bottom: 0;
padding-bottom: 3px;
}

.faq-area .right-content-wrapper .card .card-header a[aria-expanded="true"]:after {
content: '\f068';
background-color: <?php echo $color ?>;
color: #fff;
}

.faq-area .right-content-wrapper .card .card-body {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
background-color: #fff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
border-top: 0;
-webkit-box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
margin-bottom: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
padding-left: 70px;
padding-bottom: 25px;
}

/* Faq Area 2*/

/*--------------------
Faq Area
--------------------*/
.faq-area2 {
padding: 115px 0 120px 0;
}

.faq-area2 .btn-wrapper {
margin-top: 30px;
}

.faq-area2 .btn-wrapper .boxed-btn {
width: 200px;
height: 60px;
line-height: 65px;
font-size: 18px;
font-family: "Comfortaa", cursive;
}

.faq-area2 .btn-wrapper .boxed-btn:hover {
-webkit-box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
}

.faq-area2 .left-content-wrapper .card {
border: none;
}

.faq-area2 .left-content-wrapper .card .card-header {
background-color: transparent;
padding: 0;
border: none;
}

.faq-area2 .left-content-wrapper .card .card-header a {
font-size: 18px;
line-height: 28px;
font-family: "Poppins", sans-serif;
font-weight: 500;
cursor: pointer;
display: block;
background-color: #edfeff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
padding: 28px 30px;
position: relative;
padding-left: 70px;
margin-bottom: 30px;
}

.faq-area2 .left-content-wrapper .card .card-header a:after {
position: absolute;
right: 30px;
top: 31px;
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
font-size: 12px;
width: 25px;
height: 25px;
border-radius: 50%;
border: 2px solid <?php echo $color ?>;
text-align: center;
line-height: 21px;
color: <?php echo $color ?>;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.faq-area2 .left-content-wrapper .card .card-header a[aria-expanded="true"] {
background-color: #fff;
border-bottom: none;
margin-bottom: 0;
padding-bottom: 3px;
}

.faq-area2 .left-content-wrapper .card .card-header a[aria-expanded="true"]:after {
content: '\f068';
background-color: <?php echo $color ?>;
color: #fff;
}

.faq-area2 .left-content-wrapper .card .card-body {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
background-color: #fff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
border-top: 0;
-webkit-box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
margin-bottom: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
padding-left: 70px;
padding-bottom: 25px;
}

.faq-area2 .right-content-wrapper .card {
border: none;
}

.faq-area2 .right-content-wrapper .card .card-header {
background-color: transparent;
padding: 0;
border: none;
}

.faq-area2 .right-content-wrapper .card .card-header a {
font-size: 18px;
line-height: 28px;
font-family: "Poppins", sans-serif;
font-weight: 500;
cursor: pointer;
display: block;
background-color: #edfeff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
padding: 28px 30px;
position: relative;
padding-left: 70px;
margin-bottom: 30px;
}

.faq-area2 .right-content-wrapper .card .card-header a:after {
position: absolute;
left: 30px;
top: 31px;
content: "";
font-family: "Font Awesome 5 Free";
font-weight: 900;
font-size: 12px;
width: 25px;
height: 25px;
border-radius: 50%;
border: 2px solid <?php echo $color ?>;
text-align: center;
line-height: 21px;
color: <?php echo $color ?>;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.faq-area2 .right-content-wrapper .card .card-header a[aria-expanded="true"] {
background-color: #fff;
border-bottom: none;
margin-bottom: 0;
padding-bottom: 3px;
}

.faq-area2 .right-content-wrapper .card .card-header a[aria-expanded="true"]:after {
content: '\f068';
background-color: <?php echo $color ?>;
color: #fff;
}

.faq-area2 .right-content-wrapper .card .card-body {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
background-color: #fff;
border: 1px solid rgba(0, 0, 0, 0.03);
border-radius: 5px;
border-top: 0;
-webkit-box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
box-shadow: 0px 50px 150px 0px rgba(30, 48, 86, 0.05);
margin-bottom: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
padding-left: 70px;
padding-bottom: 25px;
}

.error {
color: red;
}


.marketing-area .marekting-inner .subscribe-form .submit-btn:hover {
-webkit-box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
background-color: <?php echo $color ?>;
}

/*---------------------
Footer area
-----------------------*/
.footer-area {
color: #fff;
padding: 80px 0 58px 0;
}

.footer-area .footer-widget.about {
margin-right: 50px;
}

.footer-area .footer-widget.about .footer-logo {
margin-bottom: 25px;
display: block;
}

.footer-area .footer-widget .widget-title .title {
color: #fff;
font-size: 21px;
font-weight: 700;
margin-bottom: 20px;
}

.footer-area .footer-widget .widget-body .social-icons {
margin: 0;
padding: 0;
}

.footer-area .footer-widget .widget-body .social-icons li {
display: inline-block;
margin: 0 5px;
}

.footer-area .footer-widget .widget-body .social-icons li:first-child {
margin-left: 0;
}

.footer-area .footer-widget .widget-body .social-icons li.facebook {
background-color: #3b5999;
}

.footer-area .footer-widget .widget-body .social-icons li.ico {
background-color: <?php echo $color ?>;
border-radius: 50%;
}


.footer-area .footer-widget .widget-body .social-icons li.twitter {
background-color: #55acee;
}

.footer-area .footer-widget .widget-body .social-icons li.linkedin {
background-color: #0077B5;
}

.footer-area .footer-widget .widget-body .social-icons li.instagram {
background-color: #e4405f;
}

.footer-area .footer-widget .widget-body .social-icons li a {
width: 30px;
height: 30px;
border-radius: 50%;
display: inline-block;
text-align: center;
line-height: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.footer-area .footer-widget .widget-body .social-icons li a:hover {
opacity: .5;
color: #fff;
}

.footer-area .footer-widget .widget-body p {
color: #fff;
font-size: 16px;
line-height: 30px;
}

.footer-area .footer-widget .widget-body ul {
margin: 0;
padding: 0;
}

.footer-area .footer-widget .widget-body ul li {
display: block;
margin: 8px 0px;
}

.footer-area .footer-widget .widget-body ul li:first-child {
margin-top: 0;
}

.footer-area .footer-widget .widget-body ul li a {
color: #fff;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.footer-area .footer-widget .widget-body ul li a:hover {
color: <?php echo $color ?>;
}

.footer-area .footer-widget .widget-body .details {
font-size: 14px;
line-height: 26px;
margin-bottom: 20px;
display: block;
}

.copyright-area {
color: #e6e6e6;
padding: 25px 0;
}

/*---------------------
About us Page
---------------------*/
.about-page-content-area {
background-color: #f6f7f8;
padding: 120px 0;
}

.about-page-content-area .about-page-content-inner {
-webkit-box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
text-align: center;
padding: 95px 70px 100px 70px;
}

.about-page-content-area .about-page-content-inner .title {
color: #1e3056;
font-weight: 700;
font-size: 36px;
line-height: 46px;
margin-bottom: 22px;
}

.about-page-content-area .about-page-content-inner p {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
}

.about-page-content-area .about-page-content-inner .video-inner-wrapper {
display: inline-block;
position: relative;
margin-top: 30px;
border-radius: 10px;
}

.about-page-content-area .about-page-content-inner .video-inner-wrapper img {
border-radius: 10px;
}

.about-page-content-area .about-page-content-inner .video-inner-wrapper .hover {
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 100%;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
}

.about-page-content-area .about-page-content-inner .video-inner-wrapper .hover .video-play-btn {
color: <?php echo $color ?>;
}

/*----------------------
Service Page
----------------------*/
.service-page-conent {
padding: 120px 0 170px 0;
}

.service-page-conent .service-page-content-inner {
position: relative;
}

.service-page-conent .service-page-content-inner .hover-conent {
background-color: #fff;
position: absolute;
left: 70px;
bottom: -50px;
max-width: 570px;
-webkit-box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
border-radius: 10px;
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner {
padding: 93px 70px 65px 70px;
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner .title {
color: rgba(30, 48, 86, 0.9);
font-size: 36px;
font-weight: 700;
line-height: 46px;
margin-bottom: 20px;
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner p {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner .service-counter {
margin-top: 35px;
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner .service-counter .single-achivement-item .number {
font-size: 36px;
line-height: 46px;
margin-bottom: 10px;
background: -webkit-linear-gradient(-25deg, #a045fd 0%, #eb83a8 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner .service-counter .single-achivement-item .number .num-count {
font-size: 60px;
}

.service-page-conent .service-page-content-inner .hover-conent .hover-content-inner .service-counter .single-achivement-item .title {
font-size: 16px;
line-height: 20x;
color: rgba(30, 48, 86, 0.9);
font-weight: 700;
}

/*----------------------
testimonial page
----------------------*/
.testimonial-page-conent {
padding: 120px 0 90px 0;
}

.testimonial-page-conent .single-testimonial-item {
text-align: center;
background-color: #f8f8f9;
margin-bottom: 30px;
border-radius: 6px;
padding: 40px 30px 35px 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.testimonial-page-conent .single-testimonial-item:hover {
-webkit-box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
background-color: #fff;
}

.testimonial-page-conent .single-testimonial-item .img-wrapper {
margin-bottom: 25px;
}

.testimonial-page-conent .single-testimonial-item .img-wrapper img {
width: 80px;
border-radius: 50%;
height: 80px;
}

.testimonial-page-conent .single-testimonial-item .content p {
font-size: 16px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
}

.testimonial-page-conent .single-testimonial-item .content .name {
font-size: 20px;
line-height: 30px;
color: rgba(30, 48, 86, 0.9);
margin-bottom: 0;
margin-top: 22px;
display: block;
}

.testimonial-page-conent .single-testimonial-item .content .post {
font-size: 14px;
color: <?php echo $color ?>;
line-height: 24px;
}

/*---------------------
Blog Pages
---------------------*/
.blog-page-conent {
padding: 120px 0 90px 0;
}

.blog-page-conent .single-blog-post {
margin-bottom: 30px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-page-conent .single-blog-post:hover {
-webkit-box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
box-shadow: 0px 30px 250px 0px rgba(30, 48, 86, 0.08);
}

.blog-page-conent .single-blog-post:hover .thumb img {
-webkit-filter: grayscale(100%);
filter: grayscale(100%);
}

.blog-page-conent .single-blog-post .thumb img {
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-page-conent .single-blog-post .content {
border: 1px solid rgba(0, 0, 0, 0.03);
padding: 25px 30px 25px 30px;
}

.blog-page-conent .single-blog-post .content .title {
font-size: 21px;
line-height: 31px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-page-conent .single-blog-post .content .title:hover {
color: <?php echo $color ?>;
}

.blog-page-conent .single-blog-post .content .post-meta {
margin-bottom: 20px;
}

.blog-page-conent .single-blog-post .content .post-meta span {
margin-right: 8px;
color: rgba(30, 48, 86, 0.7);
font-size: 14px;
}

.blog-page-conent .single-blog-post .content .post-meta a {
color: rgba(30, 48, 86, 0.7);
font-size: 14px;
line-height: 26px;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-page-conent .single-blog-post .content .post-meta a:hover {
color: <?php echo $color ?>;
}

.blog-page-conent .single-blog-post .content p {
color: rgba(30, 48, 86, 0.9);
}

.blog-page-conent .single-blog-post .content .readmore {
color: rgba(30, 48, 86, 0.9);
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-page-conent .single-blog-post .content .readmore:hover {
color: <?php echo $color ?>;
}

/*---------------------
- Blog Details Page
----------------------*/
.blog-details-page-conent .single-blog-details-post .content .post-meta .author:hover {
color: <?php echo $color ?>;
}
.blog-details-page-conent .single-blog-details-post .content .blockquote {
background-color: <?php echo $color ?>;
}
.blog-details-page-conent .post-meta-wrapper .left-content-wrapper ul li a:hover {
background-color: <?php echo $color ?>;
border-color: <?php echo $color ?>;
color: #fff;
}

.blog-details-page-conent .post-meta-wrapper .right-content-wrapper {
display: inline-block;
float: right;
}

.blog-details-page-conent .post-meta-wrapper .right-content-wrapper ul li {
margin: 0 8px;
display: inline-block;
}

.blog-details-page-conent .post-meta-wrapper .right-content-wrapper ul li:last-child {
margin-right: 0;
}

.blog-details-page-conent .post-meta-wrapper .right-content-wrapper ul li.title {
font-size: 18px;
line-height: 28px;
font-family: "Poppins", sans-serif;
font-weight: 600;
}

.blog-details-page-conent .post-meta-wrapper .right-content-wrapper ul li a {
color: rgba(30, 48, 86, 0.7);
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-details-page-conent .post-meta-wrapper .right-content-wrapper ul li a:hover {
color: <?php echo $color ?>;
}

.blog-details-page-conent .comments-list {
padding: 0px 100px;
margin: 40px 0 0 0;
}

.blog-details-page-conent .comments-list .title {
font-size: 26px;
line-height: 36px;
font-family: "Poppins", sans-serif;
font-weight: 600;
margin-bottom: 35px;
}

.blog-details-page-conent .comments-list ul li {
border-bottom: 1px solid rgba(0, 0, 0, 0.07);
padding-bottom: 5px;
margin: 30px 0;
}

.blog-details-page-conent .comments-list ul li:first-child {
margin-top: 0;
}

.blog-details-page-conent .comments-list ul li:last-child {
margin-bottom: 0;
}

.blog-details-page-conent .comments-list ul li .single-comments-list {
position: relative;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .reply {
position: absolute;
right: 0;
top: 0;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .reply:hover {
color: <?php echo $color ?>;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .thumb {
position: absolute;
left: 0;
top: 0;
display: inline-block;
border: 1px solid rgba(0, 0, 0, 0.02);
border-radius: 50%;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .thumb img {
max-width: 80px;
border-radius: 50%;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .content {
padding-left: 100px;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .content .name {
font-size: 18px;
font-family: "Poppins", sans-serif;
font-weight: 600;
margin-bottom: 5px;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .content .time {
font-size: 12px;
line-height: 22px;
color: rgba(30, 48, 86, 0.7);
display: block;
margin-bottom: 13px;
}

.blog-details-page-conent .comments-list ul li .single-comments-list .content p {
color: rgba(30, 48, 86, 0.9);
font-size: 16px;
line-height: 30px;
}

.blog-details-page-conent .comment-form-wrapper {
padding: 32px 100px 100px 100px;
}

.blog-details-page-conent .comment-form-wrapper .title {
font-size: 26px;
line-height: 36px;
font-family: "Poppins", sans-serif;
font-weight: 600;
margin-bottom: 32px;
}

.blog-details-page-conent .comment-form-wrapper .comments-form .form-element.textarea .input-field.textarea {
min-height: 180px;
}

.blog-details-page-conent .comment-form-wrapper .comments-form .form-element .input-field {
background-color: #edfeff;
border: none;
border: 1px solid rgba(0, 0, 0, 0.05);
}

.blog-details-page-conent .comment-form-wrapper .comments-form .submit-btn {
border-radius: 30px;
width: 220px;
font-family: "Comfortaa", cursive;
text-transform: none;
font-size: 18px;
}

.blog-details-page-conent .comment-form-wrapper .comments-form .submit-btn:hover {
background-color: <?php echo $color ?>;
-webkit-box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
box-shadow: 0 0 35px rgba(255, 137, 57, 0.7);
}

.contact-page-container .contact-form .submit-btn:hover {
background-color: <?php echo $color ?>;
}

.login-page-area .login-form-wrapper .btn-wrapper .left-content .submit-btn:hover {
background-color: <?php echo $color ?>;
}
.login-page-area .login-form-wrapper .btn-wrapper .right-content .anchor:hover {
color: <?php echo $color ?>;
}
.login-page-area .login-form-wrapper .from-footer a {
color: <?php echo $color ?>;
}


.post-navigation .pagination li.active a, .post-navigation .pagination .dashboard-nav .left-content-area .nav.nav-tabs li.nav-item.nav-link:hover a, .dashboard-nav .left-content-area .nav.nav-tabs .post-navigation .pagination li.nav-item.nav-link:hover a {
border: 2px solid <?php echo $color ?>;
color: <?php echo $color ?>;
}

.post-navigation .pagination li:first-child {
margin-left: 0;
}

.post-navigation .pagination li a {
display: block;
width: 40px;
height: 40px;
border-radius: 6px;
line-height: 40px;
text-align: center;
color: #fff;
background-color: <?php echo $color ?>;
font-weight: 700;
-webkit-transition: all 0.3s ease-in;
-moz-transition: all 0.3s ease-in;
-o-transition: all 0.3s ease-in;
transition: all 0.3s ease-in;
}

.post-navigation .pagination li a:hover {
background-color: #fff;
color: <?php echo $color ?>;
border: 2px solid <?php echo $color ?>;
}

.green{
color: darkgreen;
}
.red{
color: #ff131a;
}

.body-heading{
padding: 0px 0px 30px 0px ;
}
.top-up10{
font-size: 14px;
position: absolute;
right: 30px;
top: 40%;
-ms-transform: translateY(-50%);
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
color: #7c7c90;
}

.max-logo-height{
max-height: 100px;
}

.brance-icon {
    width: 70px;
    height: 70px;
    line-height: 70px;
    border-radius: 50%;
    font-size: 24px;
    border: 2px solid <?php echo $color ?>4d;
    color: <?php echo $color ?>;
    transition: all ease .3s;
    margin: 0 auto 20px;
}
.brance-item:hover .brance-icon {
    background: <?php echo $color ?>;
    color: #fff;
}
.dashboard-item {
    background: -webkit-linear-gradient(0deg, #9e43ff 0%, #db76ba 100%);
}

.table-wrapper::-webkit-scrollbar-button {
    background-color: <?php echo $color ?>;
}

.cmn-table-2 th {
    background: <?php echo $color ?>;
}

@media (max-width: 991px) {
    .cmn-table-2 tr:not(:last-child) {
        border-bottom: 1px solid <?php echo $color ?>;
    }
}
.card .card-header.bg-transparent,
.bg-transparent {
    background: transparent !important;
}
button.h-50px,
input.h-50px {
    line-height: 50px !important;
    height:50px !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
.card .card-header {
    background: <?php echo $color ?> !important;
}