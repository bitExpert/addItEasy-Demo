<?php

$EASY_CONF = [];

// addITeasy configuration
$EASY_CONF["app"] = [];
$EASY_CONF["app"]["cachedir"] = __DIR__ . "/../cache";
$EASY_CONF["app"]["assetdir"] = __DIR__ . "/../assets";
$EASY_CONF["app"]["logfile"] = $EASY_CONF["app"]["cachedir"] . "/addITeasy.log";
$EASY_CONF["app"]["datadir"] = __DIR__ . "/../content";
$EASY_CONF["app"]["templatedir"] = __DIR__ . "/../template/";
$EASY_CONF["app"]["exportdir"] = __DIR__ . "/../export";
$EASY_CONF["app"]["defaultpage"] = "";

// Site configuration (these variables will get passed to the twig template)
$EASY_CONF["site"][] = "";
$EASY_CONF["site"]["title"] = "addITeasy";
