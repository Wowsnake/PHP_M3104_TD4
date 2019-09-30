<?php
class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($title, $author, $editor, $pageNb)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;

    }

    function getTitle(){
        return $this -> title;
    }

    function getAuthor(){
        return $this -> author;
    }

    function getEditor(){
        return $this->author;
    }

    function getPageNb(){
        return $this->author;
    }

    function setTitle($title){
        $this->title = $title;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    function setEditor($editor){
        $this->editor = $editor;
    }

    function setPageNb($pageNb){
        $this->pageNb = $pageNb;
    }

    function show(){
        echo '<div class = "author">' . PHP_EOL . '\t' . $this->getAuthor() . PHP_EOL . '</div>' . PHP_EOL;
    }
}