<?php


namespace Factory;

class  CorporateWebsite extends Website
{


    public function createWebsite()
    {
        $homePage = new HomePage();
        $aboutPage = new AboutPage();
        $contactPage = new ContactPage();
        $searchPage = new SearchPage();

        array_push ($this->pageList, $homePage);
        array_push ($this->pageList, $aboutPage);
        array_push ($this->pageList, $contactPage);
        array_push ($this->pageList, $searchPage);
    }
}