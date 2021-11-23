# QUIZ 2 README

old:
```sql
INSERT INTO `items` (`id`, `name`, `price`) VALUES (1, 'MacBook Pro', '2499'), 
(2, 'OpenBSD Tshirt, '20.0'),(3, 'Amazon echo', '99.99'),(4, 'Nvidia GTX 3080', '1999.99'),(5, 'AMD Ryzen 9 3900X’, '549.99');
```
removed quotes from all of the prices
fixed mismatched quotes and backticks for AMD Ryzen 9 3900X
```sql
INSERT INTO `items` (`id`, `name`, `price`)
VALUES (1, 'MacBook Pro', 2499),
       (2, 'OpenBSD Tshirt', 20.0),
       (3, 'Amazon echo', 99.99),
       (4, 'Nvidia GTX 3080', 1999.99),
       (5, 'AMD Ryzen 9 3900X', 549.99)
;
```

```sql
INSERT INTO `discounts` (`id`, `item_id`, `discount`)
VALUES (1, 1, 0.25),
       (2, 2, 0.5),
       (3, 3, 0.75),
       (4, 5, 0.1);
```
   this was fine

I did a similar approach to lab 7, where I had a place for my buttons to show different things and below that a section for output, I had some trouble with getting the query for ordering all items by price after discount but I eventually found a workaround where I would just check to see if the value was NULL before printing it out on my table.

