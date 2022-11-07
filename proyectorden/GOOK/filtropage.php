<?php
session_start();
include "conexion.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>GoodBook - Pagina Principal</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <link rel="stylesheet" href="css/select2.css">
  <link rel="stylesheet" href="css/dropzone.css">
  <link rel="stylesheet" href="css/uppy.min.css">
  <link rel="stylesheet" href="css/jquery.steps.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/quill.snow.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled>
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
  <link rel="stylesheet" href="css/stylelaunch.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
  <link rel="stylesheet" href="css/styleff.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/styleswiper.css">

</head>

<body class="vertical  dark  ">

  <div class="wrapper">





    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Busca algo..." aria-label="Search">
        <select class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" style="width: 200px;">
          <option style="background-color:#212529; color:#6c757d">Seleccione una...</option>
          <?php
          $result = mysqli_query($conexion, 'SELECT * FROM Categoria');
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option style='background-color:#212529; color:#6c757d' value='$row[idCat]'>$row[nomCat]</option>";
          }
          ?>
        </select>
      </form>






      <ul class="nav">

        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
            <span class="fe fe-grid fe-16"></span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="data:image/png;base64,<?= base64_encode($_SESSION["foto"]) ?>">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a class="dropdown-item" href="#">Ajustes de tu cuenta</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg width="auto" height="100px" viewBox="0 0 1920 645.52203" version="1.1" id="svg5" xml:space="preserve" inkscape:export-filename="..\..\..\..\..\..\..\..\Good Book\IconoGookFullAzul.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" sodipodi:docname="LogoPoquitaChiquito.svg" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
              <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" inkscape:document-units="px" showgrid="true" inkscape:zoom="0.5" inkscape:cx="771.00001" inkscape:cy="520" inkscape:window-width="1920" inkscape:window-height="1017" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="g509" />
              <defs id="defs2" />
              <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1" transform="translate(-3188.0814,-229.68417)">
                <g id="g509" transform="matrix(3.919041,0,0,3.919041,-72.733861,-141.06625)">
                  <path style="display:none;fill:#ffffff;stroke:none;stroke-width:12.9118" d="m 124.87409,119.69326 -10.24876,-7.68657 -5.40906,-2.2775 0.56937,29.60751 1.13875,69.46378 -0.56937,25.90658 22.49032,-5.40907 13.66501,0.28469 17.36594,1.70812 7.68657,1.99282 5.97844,3.13156 c 8.84472,5.3787 17.31183,3.96054 25.62188,-0.28469 l 11.10282,-3.41625 9.96407,-2.2775 h 19.64344 l 5.40907,0.56938 8.54063,1.42344 5.97844,1.70812 5.40906,2.2775 -0.56937,-125.83193 -7.97126,5.12438 -7.11719,3.98563 c -40.65051,29.33833 -83.47351,30.25339 -128.6788,0 z" id="path832" transform="translate(4.1775274e-6)" sodipodi:nodetypes="ccccccccccccccccccccccc" />
                  <path style="display:none;fill:#f9f9f9;stroke:none;stroke-width:12.9118" d="m 125.20056,105.06474 0.28469,112.59396 7.82891,-0.28468 12.38391,0.28468 14.23438,0.71172 8.96766,1.85047 11.10281,2.13516 7.97126,2.84688 1.42344,0.85406 3.55859,-0.42703 5.55141,-2.13516 c 0,0 7.11719,-1.99281 7.68657,-2.13516 0.56937,-0.14234 7.97125,-1.85047 7.97125,-1.85047 l 10.96047,-1.28109 13.09563,-0.71172 12.6686,0.99641 2.98922,-0.14235 0.42703,-70.46018 v -44.26893 l -13.38031,-0.99641 -16.65423,2.84688 -25.3372,13.52266 -8.68297,11.52985 -1.56578,2.98922 -2.70454,-8.68297 -10.10641,-8.96766 -10.67578,-6.83251 -17.79297,-5.26672 -21.92095,-0.85406 z" id="path447" />
                  <g id="g1123" transform="translate(888.27501,-6.4417388)">
                    <path id="path519" style="display:inline;fill:#2c57c4;fill-opacity:1;stroke-width:0.32" d="m 133.99301,101.09515 c -0.75265,0.0676 -0.21587,0.12355 1.19213,0.12455 1.40795,10e-4 2.02541,-0.0558 1.37006,-0.12455 -0.65534,-0.0686 -1.80953,-0.0676 -2.56219,0 z m 108.47933,0 c -0.75265,0.0676 -0.21587,0.12355 1.19213,0.12455 1.40796,10e-4 2.02541,-0.0558 1.37006,-0.12455 -0.65535,-0.0686 -1.80954,-0.0676 -2.56219,0 z m -29.3851,1.62361 c -0.98085,0.18761 -2.11982,0.66978 -3.82994,1.52574 -3.66382,1.83417 -5.48157,3.30218 -6.4633,5.22224 -1.4145,2.76645 -1.52175,3.89156 -1.52575,16.23165 l -0.004,11.73446 3.2828,3.0604 c 1.804,1.68401 3.3642,3.06528 3.46963,3.06928 0.10543,0.004 2.26306,-3.10379 4.79076,-6.90367 2.52769,-3.79988 4.84954,-7.20342 5.16441,-7.56646 0.52258,-0.60255 0.57797,-1.53014 0.59607,-10.61351 0.011,-5.47307 0.0251,-10.87526 0.0311,-12.00582 0.012,-2.30536 -0.39314,-2.83847 -2.63336,-3.50966 -1.07767,-0.32288 -1.89716,-0.43227 -2.87801,-0.24465 z m 67.21742,19.97706 -0.004,57.40014 c -0.007,54.99223 -0.0332,57.4466 -0.59607,58.68569 -0.71688,1.5782 -2.21586,2.89409 -3.80769,3.33618 -0.78315,0.2175 -12.62421,0.33062 -34.62958,0.33362 l -33.4419,0.004 -1.63696,0.7651 c -1.8088,0.84223 -2.771,1.94227 -4.22138,4.84413 -2.8879,5.7783 -7.0979,8.39354 -13.02446,8.08246 -2.04359,-0.10726 -3.03532,-0.33882 -4.47938,-1.04533 -2.51284,-1.22942 -5.12955,-3.97415 -6.81471,-7.15278 -1.51955,-2.86625 -3.2043,-4.54952 -5.13772,-5.12883 -0.90718,-0.27178 -10.41968,-0.3692 -35.47475,-0.3692 -25.34621,0 -34.51817,-0.10036 -35.32351,-0.3781 -1.68157,-0.57995 -2.787575,-1.53699 -3.518559,-3.04705 l -0.667237,-1.37895 0.235757,-57.44018 0.235757,-57.43573 h -3.007013 c -1.653788,9.8e-4 -3.553391,0.15579 -4.225832,0.34252 -1.633676,0.45366 -3.651865,2.32355 -4.070143,3.77211 -0.231386,0.80129 -0.309354,20.14679 -0.244654,61.98628 l 0.09341,60.82529 0.800684,1.18323 c 0.464365,0.68609 1.465512,1.51382 2.384259,1.97502 l 1.583575,0.79624 42.098186,0.009 42.09373,0.009 1.42789,2.57998 c 2.39234,4.33502 6.03484,7.81377 9.56373,9.13225 1.86391,0.69647 5.60692,0.39344 7.85559,-0.6361 2.37823,-1.08879 6.27621,-4.97327 7.9935,-7.96681 l 1.23661,-2.15295 41.48433,-0.089 41.47987,-0.089 1.36117,-0.72506 c 0.74781,-0.39948 1.75327,-1.32342 2.23746,-2.05509 l 0.88075,-1.33002 V 188.7119 c 0,-61.52702 4.5e-4,-61.62418 -0.65389,-62.73803 -0.36044,-0.61356 -1.27062,-1.54671 -2.0195,-2.07288 -1.26098,-0.88625 -1.60597,-0.96632 -4.70179,-1.08093 z" inkscape:export-filename="..\..\..\..\..\..\..\..\Users\andre\Desktop\Icon1.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" />
                    <path id="path511" style="display:inline;fill:#2c57c4;fill-opacity:1;stroke-width:0.32" d="m 241.58714,101.41987 c -7.16459,0.17206 -11.95615,0.76415 -17.44157,2.15295 -5.38455,1.36328 -5.28006,1.30286 -5.28006,3.13601 v 1.55244 l 3.59863,-1.03199 c 6.48602,-1.86279 10.74557,-2.44276 19.20307,-2.61557 4.18052,-0.0855 8.3917,-0.0586 9.3591,0.0623 l 1.76151,0.21797 v 56.02563 56.02564 l -2.48212,-0.21797 c -22.1946,-1.9395 -42.77086,0.50276 -57.46687,6.81916 -0.85059,0.36559 -1.60803,0.66279 -1.68143,0.66279 -0.0734,0 -0.13345,-20.91496 -0.13345,-46.47525 v -46.47081 l 1.17878,-1.92609 c 1.69407,-2.77291 3.76147,-5.41652 6.41882,-8.20256 2.321,-2.43389 2.32643,-2.43597 2.32643,-4.23918 0,-0.99244 -0.13051,-1.80599 -0.28469,-1.80599 -0.65374,0 -7.10203,6.87414 -9.1189,9.71942 l -2.19298,3.09598 -1.79264,-2.64671 c -2.65968,-3.93468 -9.04833,-10.1868 -13.3047,-13.01556 -6.17855,-4.10626 -12.50258,-6.89686 -19.66569,-8.67853 -5.77188,-1.43563 -9.86925,-1.94371 -17.16133,-2.13071 -7.97833,-0.2046 -13.53056,0.21175 -14.14986,1.05869 -0.32992,0.45122 -0.40924,11.93146 -0.40924,58.71682 0,65.62722 -0.26848,59.40322 2.5355,59.0371 16.61302,-2.16922 36.15617,-1.04083 49.9093,2.87801 3.62014,1.03152 9.34588,3.14561 11.55209,4.26587 2.19085,1.11237 2.58905,1.14177 4.20804,0.31582 6.85708,-3.49826 18.30432,-6.50789 29.87441,-7.8556 6.70443,-0.7812 22.04785,-0.78496 28.95807,-0.009 l 4.95979,0.55603 0.56048,-0.68948 c 0.5287,-0.65132 0.56048,-3.92667 0.56048,-58.67234 0,-46.64508 -0.0793,-58.09213 -0.40924,-58.54334 -0.61128,-0.83596 -6.13628,-1.26063 -13.98973,-1.07203 z m -104.70722,3.19384 c 10.89809,0.22113 16.78395,1.30155 25.3461,4.66176 10.06671,3.95062 19.39576,11.6719 24.34524,20.14165 l 1.2544,2.14405 v 46.32402 c 0,25.47856 -0.1082,46.31377 -0.2402,46.30177 -0.132,-0.012 -1.63248,-0.58455 -3.33619,-1.2722 -14.5968,-5.89156 -34.19439,-8.06727 -55.70536,-6.18751 l -2.47767,0.21797 V 160.91513 104.8895 l 1.45457,-0.21796 c 0.80035,-0.12 5.01146,-0.14624 9.35911,-0.0578 z m -27.93497,3.5497 c -0.27677,0.0706 -0.50267,0.23132 -0.76955,0.4982 l -0.67168,0.66724 v 63.68106 c 0,63.25286 0.005,63.6859 0.64054,64.32161 0.76922,0.76923 0.87652,0.77224 2.38426,0.14235 3.6724,-1.53443 13.39537,-3.84458 20.33737,-4.83525 6.22912,-0.88893 20.71973,-0.80686 26.56047,0.15124 5.2554,0.86217 11.8708,2.57321 15.74678,4.07015 1.58274,0.61125 2.99469,1.10761 3.14046,1.10761 0.54245,0 1.2722,-1.02852 1.2722,-1.79709 0,-0.65124 -0.3049,-0.93133 -1.68143,-1.53909 -4.65138,-2.05349 -12.95139,-4.20297 -20.07938,-5.2 -4.84156,-0.67722 -18.32404,-0.77042 -23.03745,-0.16014 -7.16235,0.92735 -14.12337,2.36426 -19.57673,4.03901 l -2.50436,0.76954 v -61.26121 -61.25677 l 1.11651,0.46706 c 1.47102,0.61463 3.81867,2.23563 5.60479,3.87442 0.792,0.72667 1.67388,1.40905 1.96167,1.51241 0.84882,0.30486 1.92786,-0.66064 1.81489,-1.62361 -0.21754,-1.85415 -7.82868,-7.02691 -11.18734,-7.60205 -0.46605,-0.0798 -0.79526,-0.0973 -1.07202,-0.0267 z m 160.51044,0.0133 c -0.31767,-0.001 -0.67937,0.046 -1.07648,0.13345 -2.38255,0.52496 -6.03834,2.57191 -8.95431,5.1822 -1.45253,1.3003 -1.83713,1.84755 -1.83713,2.59333 0,0.68582 0.19349,1.02145 0.71617,1.21882 0.88507,0.33421 1.19094,0.1712 3.60308,-1.89495 1.68783,-1.44573 5.45,-3.83884 6.03182,-3.83884 0.11504,0 0.20907,27.59201 0.20907,61.3146 0,58.26447 -0.0283,61.30115 -0.56048,61.09219 -3.62482,-1.4234 -13.09385,-3.5451 -20.2751,-4.54166 -5.6263,-0.78078 -19.121,-0.78077 -24.44755,0 -11.06798,1.62235 -21.9165,5.07474 -21.9165,6.9704 0,0.1565 0.29897,0.58366 0.66724,0.95192 0.36833,0.36833 0.90925,0.5971 1.20102,0.5071 0.29173,-0.09 1.94964,-0.68553 3.6876,-1.32113 3.64406,-1.33272 9.32947,-2.80828 13.48263,-3.50521 14.5176,-2.43618 31.9813,-1.00437 46.33736,3.7988 2.6926,0.90088 3.5736,1.07532 4.07014,0.80958 0.62868,-0.33628 0.63165,-0.88146 0.63165,-64.65523 v -64.31716 l -0.76065,-0.34697 c -0.21828,-0.0995 -0.49191,-0.14979 -0.80958,-0.15124 z m -32.45439,18.6248 c -1.23053,-0.12803 -3.06624,-0.0774 -5.70265,0.12455 -5.48183,0.41982 -11.92837,1.50437 -12.94439,2.17964 -0.18552,0.1233 -0.92916,1.10729 -1.65475,2.18409 l -1.32113,1.95723 2.87357,-0.903 c 4.14915,-1.30082 9.97801,-2.21151 15.5911,-2.43764 4.43087,-0.17843 4.92583,-0.25692 5.23113,-0.82737 0.23103,-0.43165 0.23601,-0.85391 0.0134,-1.34337 -0.22777,-0.4999 -0.8557,-0.8061 -2.08623,-0.93413 z m -92.26103,0.0356 c -4.48316,-0.0717 -5.23559,0.1448 -5.23559,1.50795 0,1.21486 0.60548,1.46347 3.5497,1.46347 8.65606,0 18.31001,2.11418 24.98134,5.4669 3.4107,1.71397 5.65363,3.23869 8.3627,5.69375 2.27344,2.06029 2.6333,2.21688 3.55415,1.54354 1.17743,-0.86096 0.54985,-2.10937 -2.28195,-4.54611 -7.99605,-6.88054 -19.95296,-10.92186 -32.93035,-11.1295 z m 56.40373,10.96047 -1.2455,1.20547 c -1.76879,1.71343 -1.98043,2.21104 -1.36562,3.14936 0.7237,1.10451 1.25954,0.98087 3.26057,-0.74286 l 1.76595,-1.5213 -1.20992,-1.04533 z m 34.078,0.33362 c -11.10876,0 -22.5073,3.10071 -30.21692,8.2248 -2.60636,1.73229 -6.93926,5.7124 -6.93926,6.37434 0,0.24163 0.28855,0.72892 0.64055,1.08092 0.352,0.352 0.77812,0.64055 0.94747,0.64055 0.16935,0 1.21534,-0.81479 2.32199,-1.80599 7.96839,-7.13705 18.01229,-10.77642 30.96867,-11.21847 4.08634,-0.13942 5.40716,-0.28859 5.84055,-0.66724 0.73027,-0.63808 0.7078,-1.20078 -0.0801,-1.98836 -0.54405,-0.544 -1.06355,-0.64055 -3.48298,-0.64055 z m -90.29491,0.009 c -1.28721,-0.0388 -2.31974,-0.007 -3.12266,0.0934 -1.60591,0.20119 -2.29975,0.68731 -2.29975,1.49016 0,1.32415 0.80289,1.60726 4.58614,1.61026 8.28879,0.006 16.33793,1.69213 22.81505,4.77742 3.75575,1.78904 6.15732,3.35362 9.55483,6.24088 2.01601,1.71333 2.54903,2.02581 3.13601,1.81044 0.47488,-0.17424 0.74043,-0.5746 0.80513,-1.21437 0.0826,-0.81672 -0.21354,-1.2448 -2.06398,-2.97588 -6.71524,-6.28169 -17.01219,-10.4049 -28.75345,-11.51205 -1.82819,-0.17239 -3.3701,-0.28151 -4.65732,-0.32028 z m 90.35719,12.14816 c -13.25884,0 -27.48797,5.06372 -35.8573,12.75756 -1.46068,1.34279 -1.65141,1.94721 -0.85851,2.74012 0.79981,0.7998 1.69591,0.59638 3.20718,-0.73396 3.46057,-3.04604 9.13111,-6.3558 14.04311,-8.19366 5.52984,-2.06909 12.66223,-3.36432 18.54028,-3.36732 3.0988,-0.002 3.92839,-0.0992 4.40376,-0.52935 0.72614,-0.65707 0.74157,-1.32562 0.0534,-2.08622 -0.4414,-0.4877 -1.02911,-0.58717 -3.5319,-0.58717 z m -93.22186,0.0133 c -1.06305,0.0726 -1.79808,0.23231 -2.05508,0.48931 -0.64764,0.6476 -0.63849,1.37798 0.0267,2.11292 0.45433,0.50209 1.05075,0.58717 4.19914,0.58717 11.91246,0 24.76503,4.52155 32.71239,11.51205 1.47525,1.29771 2.4576,1.58141 3.13601,0.90299 1.21429,-1.2142 -0.61827,-3.28766 -6.08075,-6.88143 -5.1788,-3.40708 -10.91681,-5.77683 -17.56167,-7.25064 -5.04534,-1.11903 -11.18734,-1.69009 -14.37673,-1.47237 z m 92.82596,11.22292 c -1.23955,-0.0305 -2.73138,-0.008 -4.26586,0.0578 -3.06903,0.1312 -6.3157,0.43659 -8.07801,0.84517 -8.01179,1.85741 -15.80718,5.76233 -21.97878,11.0094 -2.41001,2.04901 -2.82785,2.83654 -1.99726,3.75432 0.87019,0.96155 1.54298,0.75294 3.71873,-1.15209 4.53625,-3.97198 10.6145,-7.42898 16.25833,-9.25235 5.43648,-1.75636 8.41032,-2.21327 14.66142,-2.23747 4.95617,-0.0192 5.57909,-0.0806 5.86278,-0.58717 0.54868,-0.97971 0.0173,-1.7892 -1.42343,-2.17964 -0.53109,-0.14391 -1.51837,-0.22753 -2.75792,-0.258 z m -88.11082,0.0934 c -3.32167,-0.0354 -6.31373,0.11525 -6.74353,0.47151 -0.6241,0.51723 -0.70028,1.8099 -0.129,2.17964 0.22,0.14238 2.84854,0.27449 5.84054,0.29359 6.21222,0.0396 9.4684,0.53725 14.4479,2.20188 5.7849,1.93382 11.2265,5.01031 16.14268,9.12779 1.25788,1.0536 2.52939,1.9172 2.82463,1.9172 0.78656,0 1.30334,-0.6481 1.30334,-1.63251 0,-0.70507 -0.54542,-1.30842 -2.95809,-3.26056 -6.82477,-5.52215 -13.74434,-8.87502 -22.00101,-10.66244 -1.75319,-0.37955 -5.40571,-0.60068 -8.72746,-0.6361 z m 0.1379,12.06808 c -3.20672,-0.0967 -6.01066,0.0239 -6.60564,0.41369 -0.86615,0.56752 -1.08137,1.81131 -0.40479,2.34867 0.22742,0.18063 2.60925,0.31783 5.52027,0.31583 6.14,-0.003 9.96539,0.5812 15.23968,2.32643 6.11602,2.02372 11.2364,4.92155 15.76903,8.92763 2.35349,2.08008 2.45768,2.12978 3.4118,1.61916 1.03208,-0.55236 0.78746,-1.93847 -0.57827,-3.25612 -5.63113,-5.43282 -14.46113,-9.90113 -23.33104,-11.81009 -2.2037,-0.47427 -5.81433,-0.78846 -9.02104,-0.8852 z m 85.33511,0.1468 c -5.07998,0.0191 -6.76302,0.14876 -9.43027,0.72061 -6.51634,1.39704 -12.25434,3.79965 -17.57057,7.3574 -3.22483,2.15819 -7.18391,5.64228 -7.18391,6.3254 0,0.24841 0.28855,0.74227 0.64055,1.09427 0.352,0.352 0.77561,0.64055 0.94302,0.64055 0.16741,0 1.42981,-0.94628 2.8024,-2.09958 7.91322,-6.64895 16.23901,-10.08426 26.70281,-11.0183 1.99748,-0.17833 4.86068,-0.23069 6.36543,-0.1201 2.32447,0.17083 2.82069,0.11516 3.28281,-0.34696 0.66319,-0.66323 0.6851,-1.14372 0.089,-1.95723 -0.42467,-0.57925 -0.87411,-0.61766 -6.64123,-0.59606 z m 2.10402,11.1295 c -7.58437,-0.4259 -17.13581,1.50068 -23.64686,4.76407 -3.07499,1.54123 -6.92456,4.16306 -9.70162,6.61009 -2.73237,2.40774 -3.1855,3.13304 -2.62447,4.18135 0.60993,1.13965 1.93214,0.83504 3.53636,-0.81403 3.50531,-3.60331 9.84872,-7.4724 15.19075,-9.26569 4.99026,-1.67517 8.42475,-2.18177 15.10624,-2.23747 6.40934,-0.0534 7.13053,-0.20398 7.13053,-1.46347 0,-1.10194 -1.30779,-1.56802 -4.99093,-1.77485 z m -90.11697,0.0133 c -2.10172,0.11179 -3.75892,0.37179 -4.15911,0.73396 -0.62374,0.56448 -0.72363,1.28383 -0.28024,1.98391 0.22302,0.35217 1.60044,0.45711 6.63233,0.49821 5.21185,0.0426 6.94273,0.17752 9.6171,0.7562 8.07254,1.7467 14.72533,5.0918 20.09717,10.10196 2.20845,2.05976 3.1831,2.48843 3.9367,1.73482 0.83976,-0.83975 0.38055,-1.77364 -1.95278,-3.99008 -7.09384,-6.73845 -15.87023,-10.52822 -27.04977,-11.67219 -2.19191,-0.22429 -4.73976,-0.25859 -6.8414,-0.14679 z" />
                  </g>
                </g>
              </g>
            </svg>
          </a>
        </div>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>GOOK</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
            <a class="nav-link" href="main.php">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Home</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="main.php">
              <i class="fe fe-heart fe-16"></i>
              <span class="ml-3 item-text">Favoritos</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="main.php">
              <i class="fe fe-user fe-16"></i>
              <span class="ml-3 item-text">Perfil</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="see-book.php?variable=1">
              <i class="fe fe-profile fe-16"></i>
              <span class="ml-3 item-text">Home</span>
            </a>
          </li>

        </ul>
      </nav>
    </aside>
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Bienvenido </h2>
              </div>
              <div class="col-auto">
                <form class="form-inline">
                  <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="sr-only">Date Ranges</label>
                    <div id="reportrange" class="px-2 py-2 text-muted">
                      <span class="small"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 mb-4">
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="card-body">
                  <article>
                    <header style="background-image: url('https://images.unsplash.com/photo-1436891620584-47fd0e565afb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');">
                      <div class="upper-header">
                        <div class="mini-title">NUEVOS AÑADIDOS</div>
                        <div class="date-since">
                          <p><span class="date-value" id="sinceData"></span></p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <defs>
                              <style>
                                .d {
                                  width: 20px;
                                  fill: #fff;
                                  opacity: .5;
                                }
                              </style>
                            </defs>
                            <path class="d" d="M15,0C6.75,0,0,6.75,0,15s6.75,15,15,15,15-6.75,15-15S23.25,0,15,0Zm7.35,16.65h-7.35c-.83,0-1.5-.67-1.5-1.5V7.8c0-.9,.6-1.5,1.5-1.5s1.5,.6,1.5,1.5v5.85h5.85c.9,0,1.5,.6,1.5,1.5s-.6,1.5-1.5,1.5Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="lower-header">
                        <div class="tags-container">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <defs>
                              <style>
                                .d {
                                  width: 20px;
                                  fill: #fff;
                                  opacity: .75;
                                }
                              </style>
                            </defs>
                            <path class="d" d="M19.22,9.66L10.77,1.21c-.74-.74-1.86-1.21-2.97-1.21H1.67C.75,0,0,.75,0,1.67V7.8c0,1.11,.46,2.23,1.3,2.97l8.45,8.46c1,1,2.62,1,3.62,0l5.94-5.95c.93-.93,.93-2.6-.09-3.62ZM6.96,6.35c-.59,.59-1.56,.59-2.15,0-.59-.59-.59-1.56,0-2.15,.59-.59,1.56-.59,2.15,0,.59,.59,.59,1.56,0,2.15Z" />
                          </svg>
                          <span>Literatura</span><span>Juvenil</span>
                        </div>
                        <h1 class="title">Libros,Libros Los mas nuevos</h1>
                        <p class="subtitle"></p>
                      </div>
                    </header>
                  </article>
                </div>

              </div>
              <div class="col-md-6 mb-4">
                <div class="card-header">
                  <strong class="card-title">Ultimos Leidos</strong>
                </div>
                <div class="card-body">

                  <div class="options">
                    <?php

                    $sql = $conexion->query("SELECT idReciente, fecha, Libro_idLib, Recientecol,idLib, titLib, fecPub, fecLib, sinopsis, imagen, docLib, estado, Categoria_idCat,idUsu from Reciente
                  INNER JOIN Libro
                  ON Reciente.Libro_idLib=Libro.idLib
                  INNER JOIN Usuario
                  ON Reciente.Recientecol=Usuario.idUsu
                  limit 6");
                    while ($datos = $sql->fetch_object()) {
                    ?>
                      <div class="option active" style="--optionBackground:url(data:image/jpg;base64,<?php echo base64_encode($datos->imagen) ?>);">
                        <div class="shadow"></div>
                        <div class="label">

                          <div class="info">
                            <div class="main"><?= $datos->titLib ?></div>
                            <div class="sub"><?= $datos->fecha ?></div>
                            <a href="see-book.php?variable=<?= $datos->idLib ?>" class="subtitle"><i class="fe-maximize-2"></i></a>
                          </div>
                        </div>
                      </div>
                    <?php }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- / ACA EMPIEZA GOOK -->
            <div class="col-md-6 mb-4">
              <div class="card-header">
                <strong class="card-title">Aclamados por la critica</strong>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="row">
                <div class="container swiper">
                  <div class="slide-container">
                    <div class="card-wrapper swiper-wrapper">
                      <?php

                      $sql = $conexion->query("SELECT * from Libro order by lecturas DESC limit 5");
                      while ($datos = $sql->fetch_object()) {
                      ?>
                        <div class="card swiper-slide">
                          <div class="image-box">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($datos->imagen) ?>" alt="" />
                          </div>
                          <div class="profile-details">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($datos->imagen) ?>" alt="" />
                            <div class="name-job">
                              <h3 class="name"><?= $datos->titLib ?></h3>
                              <h4 class="name"><?= $datos->fecPub ?></h4>
                              <a href="see-book.php?variable=<?= $datos->idLib ?>" class="subtitle"><i class="fe-maximize-2"></i></a>
                            </div>
                          </div>
                        </div>
                      <?php }
                      ?>
                    </div>
                  </div>
                  <div class="swiper-button-next swiper-navBtn"></div>
                  <div class="swiper-button-prev swiper-navBtn"></div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="row">
                <?php

                $sql = $conexion->query("SELECT * from Categoria");
                while ($datos = $sql->fetch_object()) {
                ?>
                  <div class="col-6 col-lg-3 col-md-6">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                          <h6 class="font-extrabold mb-0"><?= $datos->nomCat ?></h6>
                        </div>
                      </div>
                      <hr class="my-4">
                    </div>
                  </div>
                <?php }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="card-body">
                  <article>
                    <header style="background-image: url('https://images.pexels.com/photos/4807060/pexels-photo-4807060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                      <div class="upper-header">
                        <div class="mini-title">HISTORIAS INSPIRADAS EN COLOMBIA</div>
                        <div class="date-since">
                          <p><span class="date-value" id="sinceData"></span></p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <defs>
                              <style>
                                .d {
                                  width: 20px;
                                  fill: #fff;
                                  opacity: .7;
                                }
                              </style>
                            </defs>
                            <path class="d" d="M15,0C6.75,0,0,6.75,0,15s6.75,15,15,15,15-6.75,15-15S23.25,0,15,0Zm7.35,16.65h-7.35c-.83,0-1.5-.67-1.5-1.5V7.8c0-.9,.6-1.5,1.5-1.5s1.5,.6,1.5,1.5v5.85h5.85c.9,0,1.5,.6,1.5,1.5s-.6,1.5-1.5,1.5Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="lower-header">
                        <div class="tags-container">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <defs>
                              <style>
                                .d {
                                  width: 20px;
                                  fill: #fff;
                                  opacity: .50;
                                }
                              </style>
                            </defs>
                            <path class="d" d="M19.22,9.66L10.77,1.21c-.74-.74-1.86-1.21-2.97-1.21H1.67C.75,0,0,.75,0,1.67V7.8c0,1.11,.46,2.23,1.3,2.97l8.45,8.46c1,1,2.62,1,3.62,0l5.94-5.95c.93-.93,.93-2.6-.09-3.62ZM6.96,6.35c-.59,.59-1.56,.59-2.15,0-.59-.59-.59-1.56,0-2.15,.59-.59,1.56-.59,2.15,0,.59,.59,.59,1.56,0,2.15Z" />
                          </svg>
                          <span>Literatura</span><span>Juvenil</span>
                        </div>
                        <h1 class="title">Lo mejor de colombia</h1>
                      </div>
                    </header>
                  </article>
                </div>

              </div>
              <div class="col-md-6 mb-4">
                <div class="card-header">
                  <strong class="card-title">Top de los más populares</strong>
                </div>
                <div class="card-body">

                  <div class="options">
                    <?php

                    $sql = $conexion->query("SELECT * from Libro order by lecturas DESC limit 5");
                    while ($datos = $sql->fetch_object()) {
                    ?>
                      <div class="option active" style="--optionBackground:url(data:image/jpg;base64,<?php echo base64_encode($datos->imagen) ?>);">
                        <div class="shadow"></div>
                        <div class="label">

                          <div class="info">
                            <div class="main"><?= $datos->titLib ?></div>
                            <div class="sub"><?= $datos->fecPub ?></div>
                            <a href="see-book.php?variable=<?= $datos->idLib ?>" class="subtitle"><i class="fe-maximize-2"></i></a>
                          </div>
                        </div>
                      </div>
                    <?php }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="card mb-3 custom_item2">
  <div class="row g-0">
    <div class="col-md-5 custom_thumb2">
      <a href="https://jkanime.net/vanitas-no-karte-2nd-season/"><img src="https://cdn.jkdesu.com/assets/images/animes/image/vanitas-no-karte-2nd-season.jpg" class="img-fluid rounded-start" alt="Vanitas no Karte 2nd Season"></a>
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title"><a href="https://jkanime.net/vanitas-no-karte-2nd-season/">Vanitas no Karte 2nd Season</a></h5>
        
         <p class="card-text ep">12 Eps, <small class="text-muted">Emitido Ene 14 de 2022</small></p>
        
         <div class="card-info"><p class="card-status finished">Concluido </p><p class="card-txt"> Anime
                                        </p></div>
        <p class="card-text synopsis">Segunda parte de Vanitas no Karte.</p>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
  <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="list-group list-group-flush my-n3">
            <div class="list-group-item bg-transparent">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="fe fe-box fe-24"></span>
                </div>
                <div class="col">
                  <small><strong>Package has uploaded successfull</strong></small>
                  <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                  <small class="badge badge-pill badge-light text-muted">1m ago</small>
                </div>
              </div>
            </div>
            <div class="list-group-item bg-transparent">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="fe fe-download fe-24"></span>
                </div>
                <div class="col">
                  <small><strong>Widgets are updated successfull</strong></small>
                  <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                  <small class="badge badge-pill badge-light text-muted">2m ago</small>
                </div>
              </div>
            </div>
            <div class="list-group-item bg-transparent">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="fe fe-inbox fe-24"></span>
                </div>
                <div class="col">
                  <small><strong>Notifications have been sent</strong></small>
                  <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                  <small class="badge badge-pill badge-light text-muted">30m ago</small>
                </div>
              </div> <!-- / .row -->
            </div>
            <div class="list-group-item bg-transparent">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="fe fe-link fe-24"></span>
                </div>
                <div class="col">
                  <small><strong>Link was attached to menu</strong></small>
                  <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                  <small class="badge badge-pill badge-light text-muted">1h ago</small>
                </div>
              </div>
            </div> <!-- / .row -->
          </div>


          <!-- / .ACA SE MUESTRA LOS ACCE DIRECTOS -->
          <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body px-5">
                  <div class="row align-items-center">
                    <div class="col-6 text-center">
                      <div class="squircle bg-success justify-content-center">
                        <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Control area</p>
                    </div>
                    <div class="col-6 text-center">
                      <div class="squircle bg-primary justify-content-center">
                        <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Activity</p>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-6 text-center">
                      <div class="squircle bg-primary justify-content-center">
                        <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Droplet</p>
                    </div>
                    <div class="col-6 text-center">
                      <div class="squircle bg-primary justify-content-center">
                        <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Upload</p>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-6 text-center">
                      <div class="squircle bg-primary justify-content-center">
                        <i class="fe fe-users fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Users</p>
                    </div>
                    <div class="col-6 text-center">
                      <div class="squircle bg-primary justify-content-center">
                        <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Settings</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </main> <!-- main -->
        </div> <!-- .wrapper -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/simplebar.min.js"></script>
        <script src='js/daterangepicker.js'></script>
        <script src='js/jquery.stickOnScroll.js'></script>
        <script src="js/tinycolor-min.js"></script>
        <script src="js/config.js"></script>
        <script src="js/d3.min.js"></script>
        <script src="js/topojson.min.js"></script>
        <script src="js/datamaps.all.min.js"></script>
        <script src="js/datamaps-zoomto.js"></script>
        <script src="js/datamaps.custom.js"></script>
        <script src="js/Chart.min.js"></script>
        <script>
          /* defind global options */
          Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
          Chart.defaults.global.defaultFontColor = colors.mutedColor;
        </script>
        <script src="js/gauge.min.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/apexcharts.min.js"></script>
        <script src="js/apexcharts.custom.js"></script>
        <script src='js/jquery.mask.min.js'></script>
        <script src='js/select2.min.js'></script>
        <script src='js/jquery.steps.min.js'></script>
        <script src='js/jquery.validate.min.js'></script>
        <script src='js/jquery.timepicker.js'></script>
        <script src='js/dropzone.min.js'></script>
        <script src='js/uppy.min.js'></script>
        <script src='js/quill.min.js'></script>
        <script>
          $('.select2').select2({
            theme: 'bootstrap4',
          });
          $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
          });
          $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
              format: 'MM/DD/YYYY'
            }
          });
          $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
          });
          /** date range picker */
          if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
              timePicker: true,
              startDate: moment().startOf('hour'),
              endDate: moment().startOf('hour').add(32, 'hour'),
              locale: {
                format: 'M/DD hh:mm A'
              }
            });
          }
          var start = moment().subtract(29, 'days');
          var end = moment();

          function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          }
          $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
          }, cb);
          cb(start, end);
          $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
          });
          $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
          });
          $('.input-money').mask("#.##0,00", {
            reverse: true
          });
          $('.input-phoneus').mask('(000) 000-0000');
          $('.input-mixed').mask('AAA 000-S0S');
          $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
              'Z': {
                pattern: /[0-9]/,
                optional: true
              }
            },
            placeholder: "___.___.___.___"
          });
          // editor
          var editor = document.getElementById('editor');
          if (editor) {
            var toolbarOptions = [
              [{
                'font': []
              }],
              [{
                'header': [1, 2, 3, 4, 5, 6, false]
              }],
              ['bold', 'italic', 'underline', 'strike'],
              ['blockquote', 'code-block'],
              [{
                  'header': 1
                },
                {
                  'header': 2
                }
              ],
              [{
                  'list': 'ordered'
                },
                {
                  'list': 'bullet'
                }
              ],
              [{
                  'script': 'sub'
                },
                {
                  'script': 'super'
                }
              ],
              [{
                  'indent': '-1'
                },
                {
                  'indent': '+1'
                }
              ], // outdent/indent
              [{
                'direction': 'rtl'
              }], // text direction
              [{
                  'color': []
                },
                {
                  'background': []
                }
              ], // dropdown with defaults from theme
              [{
                'align': []
              }],
              ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
              modules: {
                toolbar: toolbarOptions
              },
              theme: 'snow'
            });
          }
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
        <script>
          var uptarg = document.getElementById('drag-drop-area');
          if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
              inline: true,
              target: uptarg,
              proudlyDisplayPoweredByUppy: false,
              theme: 'dark',
              width: 770,
              height: 210,
              plugins: ['Webcam']
            }).use(Uppy.Tus, {
              endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
              console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
          }
        </script>
        <script src="js/apps.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
            dataLayer.push(arguments);
          }
          gtag('js', new Date());
          gtag('config', 'UA-56159088-1');
        </script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js'></script>
        <script src="js/scriptlaunc.js"></script>
        <script src="js/scriptff.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/scriptswiper.js"></script>
</body>

</html>