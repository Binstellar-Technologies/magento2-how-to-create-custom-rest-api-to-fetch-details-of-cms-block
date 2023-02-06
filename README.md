## Magento2 How to create custom REST API to fetch details of CMS Block

> Magento 2 REST (Representational State Transfer) API: It identifies various functions which can be used to perform requests and receive responses.

&nbsp;
&nbsp;

> In the following blog we are going to learn about how to call CMS Block data via REST API

&nbsp;
&nbsp;

> Magento2 Content Management System (CMS) Blocks also know as static blocks are used to store many dynamic information of the client which needs to be changed by client on regular bases. Same thing needs to be sometimes shared via Rest API.

&nbsp;
&nbsp;

Wondering how to achieve that? Don't worry we have got the solution for it.

&nbsp;
&nbsp;

> Install our module Binstellar/TopHeaderMenuAPI

&nbsp;
&nbsp;

## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/TopHeaderMenuAPI
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/TopHeaderMenuAPI
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush

&nbsp;
&nbsp;

<kbd>

![image1](https://user-images.githubusercontent.com/123800304/216293254-b4417c0d-d6b1-4ed6-8e04-c3fa690dd770.png)

</kbd>

## Note : We have tested this option in Magento ver. 2.4.5-p1
