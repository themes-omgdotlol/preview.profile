<?php
$bgBody = $_GET["bgBody"];
$bgmain = $_GET["bgmain"];
$mainRadius = $_GET["mainRadius"];
$pictureRadius = $_GET["pictureRadius"];
$font = $_GET["font"];
$titleColor = $_GET["titleColor"];
$detailsColor = $_GET["detailsColor"];
$detailsIcon = $_GET["detailsIcon"];
$pronounsColor = $_GET["pronounsColor"];
$bioColor = $_GET["bioColor"];
$linkColor = $_GET["linkColor"];
$linkHover = $_GET["linkHover"];
$verifyBadge = $_GET["verifyBadge"];
$verifyHover = $_GET["verifyHover"];
$linkIcon = $_GET["linkIcon"];
$linkIconHover = $_GET["linkIconHover"];
$textAlign = $_GET["textAlign"];
$footerState = $_GET["footerState"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>MatseVH (He/Him)</title>
  <meta charset="utf-8">
  <meta property="og:type" content="website">
  <meta property="og:title" content="MatseVH (He/Him)">
  <meta property="og:description" content="I'm a Developer located in Belgium. I have a serious passion for development. In my spare time next to development I play basketball. ">
  <meta name="viewport" content="width=device-width">
  <link href="/default.profile.css" rel="stylesheet">
  <style>
    /* 
Copyright (c) 2021 Matse Van Horebeek. All rights reserved.

Author: Matse Van Horebeek (@matsevh)
Designer Version: Beta
Description: Create your own custom profile design with the designer tool
*/

    :root {
      --background-color: #<?php print $bgBody; ?>;
      --main-background-color: #<?php print $bgmain; ?>;
      --main-border-radius: <?php print $mainRadius; ?>px;
      --picture-border-radius: <?php print $pictureRadius; ?>%;
      --font: <?php print $font; ?>;
      --title-color: #<?php print $titleColor; ?>;
      --details-color: #<?php print $detailsColor; ?>;
      --details-icon-color: #<?php print $detailsIcon; ?>;
      --pronouns-color: #<?php print $pronounsColor; ?>;
      --bio-color: #<?php print $bioColor; ?>;
      --link-color: #<?php print $linkColor; ?>;
      --link-hover-color: #<?php print $linkHover; ?>;
      --verification-badge-color: #<?php print $verifyBadge; ?>;
      --verification-badge-hover-color: #<?php print $verifyHover; ?>;
      --link-icon-color: #<?php print $linkIcon; ?>;
      --link-icon-hover-color: #<?php print $linkIconHover; ?>;

      --text-align: <?php print $textAlign; ?>;
      --footer-state: <?php print $footerState; ?>;
    }

    body {
      background: var(--background-color);
    }

    main {
      background-color: var(--main-background-color);
      border-radius: var(--main-border-radius);
    }

    #profile-picture {
      border-radius: var(--picture-border-radius) !important;
    }

    #name {
      color: var(--title-color);
    }

    .fa-badge-check {
      color: var(--verification-badge-color) !important;
    }

    .fa-badge-check:hover {
      color: var(--verification-badge-hover-color) !important;
    }

    #pronouns {
      color: var(--pronouns-color);
    }

    #details>.fas {
      color: var(--details-color);
    }

    #details>.fas {
      color: var(--details-icon-color);
    }

    #bio {
      text-align: var(--text-align);
      color: var(--bio-color);
    }

    a {
      color: var(--link-color) !important;
    }

    a:hover {
      color: var(--link-hover-color) !important;
      text-decoration: underline;
      text-decoration-color: var(--link-hover-color);
    }

    .fa-li {
      color: var(--link-icon-color) !important;
    }

    a:hover>.fa-li {
      color: var(--link-icon-hover-color) !important;
    }

    #footer {
      visibility: var(--footer-state);
    }
  </style>
</head>

<body>

  <main>

    <div id="profile-picture-container">
      <img alt="matsevh’s profile picture" id="profile-picture" src="https://profile.alpha.omg.lol/matsevh/picture">
    </div>

    <h1 id="name">MatseVH <a title="This address is verified." style="text-decoration: none; border: 0;" href="https://meta.omg.lol/help/profile-verification"><i style="font-size: 80%; color: #0089cf;" class="fas fa-badge-check"></i></a></h1>

    <div id="pronouns">He/Him</div>
    <div id="details">

      <div id="occupation"><i class="fas fa-briefcase"></i> Student</div>

      <div id="location"><i class="fas fa-map-marker-alt"></i> Belgium</div>
    </div>

    <div id="bio">
      <p>I'm a Developer located in Belgium. I have a serious passion for development. In my spare time next to
        development I play basketball. </p>
    </div>

    <div id="profile-items">

      <ul class="fa-ul">

        <li><span class="fa-li"><i class="fas fa-link"></i></span><a rel="me" href="https://matsevh.eu">matsevh.eu</a>
        </li>

        <li><span class="fa-li"><i class="fas fa-link"></i></span><a rel="me" href="https://verkoopuwkind.vanhorebeek.be">verkoopuwkind.vanhorebeek.be</a></li>
      </ul>
    </div>

    <div id="footer"><a href="https://omg.lol/"><i class="fas fa-plug"></i> Powered by OMG.LOL</a></div>

  </main>

  <script>
    window.addEventListener('load', function() {
      //console.log('hello?');
    }, false);
  </script>

</body>

</html>