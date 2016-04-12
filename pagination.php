<?php
include("connection.php");

//display 5 rows first
$per_page=10;
$adjacents=5;
//count id how many row in this table
$pages_query=mysql_query("SELECT count(id), AssetName,SerialNo ,Model FROM assets") or die(mysql_error());

//get total no of pages to be shown from total result
$pages=ceil(mysql_result($pages_query, 0) / $per_page); 

//get curent page from url if not present set to 1
$page=(isset($_GET['page']))? (int)$_GET['page']: 1;

//calculate the actual start page with respect to mysql
$start=($page-1) * $per_page;

//execute all mysql query to retrieve all the result from the current page by ussing limit keyword in mysql
//if query failed stop further execution and show mysql error

$query=mysql_query("SELECT * FROM assets LIMIT $start ,$per_page") or die(mysql_error());
$query2=mysql_query("SELECT * FROM task LIMIT $start ,$per_page") or die(mysql_error());
$query3=mysql_query("SELECT * FROM users LIMIT $start ,$per_page") or die(mysql_error());



$pagination="pagination";

//if current page is first show first only else reduce 1 by current page
$Prev_page= ($page==1) ?:$page-1;

//if current page is last show last on else add 1 to current page
$Next_page=($page>=$pages)?$page:$page + 1;

//if we r not on the first page show the first link
if($page!=1) $pagination.='';

//if we r not on the first page show previous link
if($page!=1) $pagination.='<a href="?page='.$Prev_page.'">previous</a>';

//we r going to display five 5 links on paginaiton bar
$numberoflinks=5;

//find the number of links to show on the right of current page
$upage=ceil(($page)/$numberoflinks)*$numberoflinks;

//find the number of links to show on the left of the current page
$lpage=floor(($page)/$numberoflinks)*$numberoflinks;

//if number of links on left of current page are zero we start from one
$lpage=($lpage==0)?1:$lpage;

//find the number of links to show on right of current page and make sure  it must be less than total number of pages
$upage=($lpage==$upage)?$upage+$numberoflinks:$upage;

if($upage>$pages)$upage=($upage-1);

//start building links from left to right of the current page
for ($x=$lpage; $x<$upage ; $x++) { 
$pagination.=($x==$page) ?'<strong>'.$x.'</strong>' : '<a href="?page='.$x.'">'.$x.'</a>';
}

//we show next link and last link iif user doesnt on last link
if($page!=$pages) $pagination.= '<a href="?page='.$Next_page.'">Next</a>';
if($page!=$pages) $pagination.='<a href="?page='.$pages.'">Last</a>';
?>