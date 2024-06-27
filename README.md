# coding-challenge
CRUD Application for a Book Collection

## Challenges:
  1. When using composer to install CodeIgniter 3.1.13, there is an error message in running the post-install script:

    > sed -i s/name{0}/name[0]/ vendor/mikey179/vfsstream/src/main/php/org/bovigo/vfs/vfsStream.php
    > sed: 1: "vendor/mikey179/vfsstre ...": invalid command code v
    > Script sed -i s/name{0}/name[0]/ vendor/mikey179/vfsstream/src/main/php/org/bovigo/vfs/vfsStream.php handling the post-update-cmd event returned with error code 1
    
***Solution:*** Asked in ChatGPT then got an answer saying there is a different format for "sed" script for different operating systems. I changed the script of both post-install and post-update to
    
  ```sed -i '' s/name{0}/name[0]/ vendor/mikey179/vfsstream/src/main/php/org/bovigo/vfs/vfsStream.php```

  2. XAMPP web server is using PHP 8.2
     This cuased errors like  ```Creation of dynamic property CI_URI::$config is deprecated```.  

     ***Solution:*** Was trying to edit config files to change the PHP version XAMPP is using but then realised I need to install a different version of XAMPP.

  3. Integration of CodeIgniter3 and Vue2  
     Had no experience in integrating these 2, having difficulties in figuring out how to display vue component in view correctly.

     ***Solution:*** Search online and learnt how to install Vue, create Vue project, run build, move built files to CodeIgniter project, and render in view.

  4. Routing path  
     ```BaseUrl/books``` didn't work and shown 404 error message.
     
     ***Solution:*** Turned out to be needing to add index.php in between the url ```BaseUrl/index.php/books```. Added .htaccess to rewrite the path.

  5. Routing syntax  
     CI3's Syntax for routing to specific request method in ```routes.php``` is different from CI4. I first searched online and found an article says CI3 does not support routing with request method in ```routes.php```, but have to check the request method in controller. 
     
     ***Solution:*** When I was looking at CI3's documentation, I caught a glimpse on the ```Using HTTP verbs in routes``` section and realised CI3 does support the syntax for route path with request method.
