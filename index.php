<style>
table.imagetable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.imagetable th {
	background:#b5cfd2 url('cell-blue.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
}
table.imagetable td {
	background:#dcddc0 url('cell-grey.jpg');
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
}
.standings {
	margin-bottom: 50px; 
}
.groups {
	margin-top: 50px;
}
</style>

<?php

require_once('wc_pool.php');
echo '<a href="#groups">See Groups</a>';

$wc_pool = new WC_Pool();
$wc_pool->calculateStandings();
$wc_pool->displayStandings();
$wc_pool->displayTeams();
$wc_pool->displayGroups();

?>