<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>{if embed:title}{embed:title} | {site_name}{if:else}{site_name}{/if}</title>

  <meta name="description" content="">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
  <script type="text/javascript" src="/assets/js/modernizr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" href="/assets/css/style.css">
  
</head>

<body{if segment_2 == "directions"} onload="initialize()"{/if}>
  <header class="clear">
  <a href="/"><img src="/assets/images/logo.png" alt="{site_name}" id="logo" /></a>
    <nav id="top">
      <ul>
        <li{if segment_1 == "health"} class="active"{/if}><a href="/health">Health</a></li>
        <li{if segment_1 == "education"} class="active"{/if}><a href="/education">Education</a></li>
        <li{if segment_1 == "resources"} class="active"{/if}><a href="/resources">Resources</a></li>
        <li{if segment_1 == "donate"} class="active"{/if}><a href="/donate">Donate</a></li>
        <li{if segment_1 == "about"} class="active"{/if}><a href="/about">About Us</a></li>
      </ul>
    </nav>
  </header>
  <div id="main" class="clear rounded">
    <div id="pg_sdw_left"></div>
    <div id="pg_sdw_right"></div>