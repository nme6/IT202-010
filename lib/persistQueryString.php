<?php
//updates or inserts page into query string while persisting anything already present
function persistQueryString($page)
{
    //set the query param for easily building
    $_GET["page"] = $page;
    return http_build_query($_GET);
}