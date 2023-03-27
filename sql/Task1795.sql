Create table If Not Exists Products (product_id int, store1 int, store2 int, store3 int);
Truncate table Products;
insert into Products (product_id, store1, store2, store3) values ('0', '95', '100', '105');
insert into Products (product_id, store1, store2, store3) values ('1', '70', null, '80');

select 
    product_id,
    "store1" as store,
    store1 as price
from Products
where store1 != null;
