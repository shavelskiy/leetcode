Create table If Not Exists Tree (id int, p_id int);
Truncate table Tree;
insert into Tree (id, p_id) values (1, null);
insert into Tree (id, p_id) values (2, 1);
insert into Tree (id, p_id) values (3, 1);
insert into Tree (id, p_id) values (4, 2);
insert into Tree (id, p_id) values (5, 2);

select id, 'Root' as type from Tree where p_id is null
union
select id, 'Inner' as type from Tree where p_id is not null and id in (select p_id from Tree where p_id is not null)
union
select id, 'Leaf' as type from Tree where p_id is not null and id not in (select p_id from Tree where p_id is not null);
