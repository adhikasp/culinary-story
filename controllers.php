<?php

function show_home()
{
    require 'template/home.php';
}


function show_stories()
{
    insert_review();
    $reviews = get_all_reviews();
    require 'template/stories.php';
}