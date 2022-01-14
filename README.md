module to illustrate bug introduced in magento 2.4.3-p1.

Filtering product collection on a category page no longer work.

###Steps

- Install magento 2.4.3-p1 enterprise with sample data
- Copy module code to app/code
- run ```setup:upgrade``` and ```setup:di:compile```
- go to category page ```men/tops-men.html```
- expected - only two products should display, skus (MT12, MT01)
- actual - all or no products are displaying