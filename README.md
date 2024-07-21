## Installing module ##

Go to apps/code in your project and run the following command
```shell
 git clone git@github.com:andreyz11288/CustomModule.git
```
After that run the following commands 
```shell
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento cache:clean
php bin/magento cache:flush
```
QuickBuy module is installed.
