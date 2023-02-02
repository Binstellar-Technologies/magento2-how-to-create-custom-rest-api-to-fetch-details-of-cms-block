## Magento2 How to create custom REST API to fetch details of CMS Block

> Magento2 Content Management System (CMS) Blocks also know as static blocks are used to store many dynamic information of the client which needs to be changed by client on regular bases. Same thing needs to be sometimes shared via Rest API.

Wondering how to achieve that? Don't worry we have got the solution for it.

> Install our module Binstellar/TopHeaderMenuAPI


## Installation Steps

Step 1 : Download the Zip file from Github & Unzip it
Step 2 : Create a directory under app/code/Binstellar/TopHeaderMenuAPI
Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/TopHeaderMenuAPI
Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade 
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1