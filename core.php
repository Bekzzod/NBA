<?php
include('core_functions.php');
ob_start('FillProperties');
if(!in_array($_SERVER['REQUEST_URI'], NBACore::$pagesWithNoHeader))
    NBACore::ShowHeader();
NBACore::ShowRequestedPage($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']);
NBACore::ShowFooter();
ob_end_flush();