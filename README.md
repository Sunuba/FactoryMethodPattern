#Factory Method Pattern in PHP

In this demo, I tried to show you how to create two types of websites with factory
method. As factory method is not used in refactoring code, so you need to plan it
carefully before starting your project. As always I use composer for autoloading
capabilities and index.php to demo the code.

Set the website type and create it:

    $type = 'personal';
    $website = (new WebsiteFactory())::getWebsite ($type);
    print_r ($website);
    
Result:

    Factory\PersonalWebsite Object
    (
        [pageList] => Array
            (
                [0] => Factory\HomePage Object
                    (
                        [title:Factory\HomePage:private] => 
                        [body:Factory\HomePage:private] => 
                    )
    
                [1] => Factory\AboutPage Object
                    (
                    )
    
                [2] => Factory\ContactPage Object
                    (
                    )
    
            )
    
    )

$type other than 'personal' will be accepted as 'corporate' :) just for the sake
of demo. And you will get the following result:

    Factory\CorporateWebsite Object
    (
        [pageList] => Array
            (
                [0] => Factory\HomePage Object
                    (
                        [title:Factory\HomePage:private] => 
                        [body:Factory\HomePage:private] => 
                    )
    
                [1] => Factory\AboutPage Object
                    (
                    )
    
                [2] => Factory\ContactPage Object
                    (
                    )
    
                [3] => Factory\SearchPage Object
                    (
                    )
    
            )
    
    )
   
As you see we geg SearchPage Object in corporate website.