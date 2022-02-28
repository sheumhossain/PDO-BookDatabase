<?php


function Create($db)
{
    $db->query(
        'CREATE TABLE if not exists book( 
            id   INT AUTO_INCREMENT,
            title  VARCHAR(500), 
            author VARCHAR(500), 
            available  VARCHAR(500),
            pages   VARCHAR(500),
            isbn   VARCHAR(500),
            PRIMARY KEY(id)
        )'
    );
}

function ADD($db, $title, $author, $available, $pages, $isbn)
{
    $create = $db->query("INSERT INTO book( title, author,available,pages,isbn) values ('$title','$author','$available','$pages','$isbn');");
}

function Delete($db, $id)
{
    $db->query("DELETE from book WHERE id IN( $id)");
}
function Search($db, $str)
{
    $result =  $db->query("SELECT * FROM book WHERE title like('%$str%')");
    return $result;
}
function Data($db)
{
    $result =  $db->query("SELECT * FROM book WHERE 1");
    return $result;
}