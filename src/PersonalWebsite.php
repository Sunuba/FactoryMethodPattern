<?php


namespace Factory;

class  PersonalWebsite extends Website
{

    public function createWebsite()
    {
        $homePage = new HomePage();
        $aboutPage = new AboutPage();
        $contactPage = new ContactPage();

        array_push ($this->pageList, $homePage);
        array_push ($this->pageList, $aboutPage);
        array_push ($this->pageList, $contactPage);
    }
}