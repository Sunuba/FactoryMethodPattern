# Factory Method Pattern in PHP

##### Before using Factory Method Pattern please ensure that you have planned it well ahead.

In this demo, I only showed how to generate page objects, but I did not show 
how to generate content of each pages, for this, we need to use another abstract
method. Then, we will also be able to set content (title and body in my case)
dynamically. That is why I always say plan it well before starting.

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
   
As you see we get SearchPage Object in corporate website.