﻿<?php
if(!defined("PHORUM_ADMIN")) return;

$upgrade_queries[]="alter table {$PHORUM['message_table']} add key post_count (forum_id,status,parent_id)";

?>
