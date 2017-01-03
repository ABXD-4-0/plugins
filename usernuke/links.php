<?php

global $loguser;
if(CURRENT_PAGE == "profile" && $loguser["powerlevel"] >= 3)
	$links -> add(new PipeMenuLinkEntry(__("Nuke user"), "nuke", $_GET["id"], "", "trash"));

