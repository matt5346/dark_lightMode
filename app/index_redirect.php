<?php
if(isset($_POST["submit2"]))
{
  header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/c3b319e6e3.js" crossorigin="anonymous"></script>
</head>
<body>
<form class="form" action="" method="post">
    <button type="submit" name="submit2"><i class="fas fa-arrow-circle-left"></i></button>

</form>

<div class="wrapper" id="button">
<h3 id="checkbox_title">Turn on/off (DarkMode)</h3>
        <input type="checkbox" id="switch">
        <label id="switch_checkbox" for="switch"></label>
</div>

<section class="section_mode">
    <div id="dark">
        <h1>Dark mode</h1>
    </div>
    <div id="light">
        <h1>Light mode</h1>
    </div>

    <!-- sun -->
    <svg 
        id="darkMode"
        width="56" 
        height="55" 
        viewBox="0 0 56 55" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg">
        <path 
        class="sun" 
        d="M56 27.5C56 42.6878 43.464 55 28 55C12.536 55 0 42.6878 0 27.5C0 12.3122 12.536 0 28 0C43.464 0 56 12.3122 56 27.5Z" 
        fill="#FFE600"/>
    </svg>

    <!-- Light mode mountains -->
    <svg 
        id="mountain"
        width="332" 
        height="154" 
        viewBox="0 0 332 154" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg">
        <path id="left_block" d="M0 57.5L121 132L0 153.5V57.5Z" 
        fill="#5FE110"/>
        <path id="right_block" d="M331 57V154H2L331 57Z" 
        fill="#64C02C"/>
        <path id="right_block2" d="M74 103L307 29.5L330.5 57.5L107.5 125.5L74 103Z" 
        fill="#C9FAB2" 
        fill-opacity="0.33"/>
        <path id="cloud_block" d="M42.5919 23.4864C39.0105 22.752 35.4291 18.1358 31.8477 30.0958L21.3593 30.0958L17 36.6151L21.3593 43H59.9873C60.0725 39.433 59.9873 32.299 51.0338 32.299L42.5919 23.4864Z" 
        fill="#A2A2A2" 
        fill-opacity="0.1" 
        stroke="#A29393" 
        stroke-opacity="0.26"/>
        <path id="cloud_block2" d="M99.5919 2.48638C96.0105 1.752 92.4291 -2.86417 88.8477 9.09582L78.3593 9.09583L74 15.6151L78.3593 22H116.987C117.073 18.433 116.987 11.299 108.034 11.299L99.5919 2.48638Z" 
        fill="#A2A2A2" 
        fill-opacity="0.1" 
        stroke="#A29393" 
        stroke-opacity="0.26"/>
    </svg>

    <!-- Dark mode mountains -->

    <svg 
    id="mountain2"
    width="331" 
    height="125" 
    viewBox="0 0 331 125"
    fill="none" 
    xmlns="http://www.w3.org/2000/svg">
    <path class="dark_left" id="dark_left_block" d="M0 28.5L121 103L0 124.5V28.5Z" 
    fill="#D2DEE9"/>
    <path class="dark_right" id="dark_right_block" d="M331 28V125H2L331 28Z" 
    fill="#98C0E6"/>
    <path class="dark_right" id="dark_right_block2" d="M74 74L307 0.5L330.5 28.5L107.5 96.5L74 74Z"
    fill="#57C5DD" 
    fill-opacity="0.19"/>
    </svg>




</section>

<script src="./jquery.min.js"></script>
<script src="./js/common.js"></script>
<script src="./anime.min.js"></script>


</body>
</html>