<?php

require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'internals'.DIRECTORY_SEPARATOR.'Header.inc.php';

$Layout = SK_Layout::getInstance();

$httpdoc = new component_ClsItemList;

$Layout->display($httpdoc);
