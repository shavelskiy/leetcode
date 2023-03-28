Create table If Not Exists Weather (id int, recordDate date, temperature int);
Truncate table Weather;
insert into Weather (id, recordDate, temperature) values (1, '2015-01-01', 10);
insert into Weather (id, recordDate, temperature) values (2, '2015-01-02', 25);
insert into Weather (id, recordDate, temperature) values (3, '2015-01-03', 20);
insert into Weather (id, recordDate, temperature) values (4, '2015-01-04', 30);
insert into Weather (id, recordDate, temperature) values (407, '1998-11-01', -9);
insert into Weather (id, recordDate, temperature) values (636, '1998-10-31', -32);

select w.id
from Weather w join Weather w2 on datediff(w.recordDate, w2.recordDate) = 1
where w.temperature > w2.temperature;
