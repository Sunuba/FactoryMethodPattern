<?php


namespace Factory;


class WebsiteFactory
{

    public static function getWebsite($type)
    {
        if ( $type == 'personal' )
        {
            return new PersonalWebsite();
        } else {
            return new CorporateWebsite();
        }
    }

}