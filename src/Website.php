<?php


namespace Factory;


abstract class  Website
{
    public $pageList = [];
    public abstract function createWebsite();

    public function __construct()
    {
        $this->createWebsite();
    }

    public function getPageList(): array
    {
        return $this->pageList;
    }

}