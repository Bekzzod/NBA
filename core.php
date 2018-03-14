<?php
include('core_functions.php');
NBACore::ShowHeader();
NBACore::ShowRequestedPage($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']);
NBACore::ShowFooter();