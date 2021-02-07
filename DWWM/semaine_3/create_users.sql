create role 'r_gescom_admin'@'%';

grant all 
on gescom.* 
to 'r_gescom_admin'@'%';

create user 'loper_dave'@'%' identified by '1Kasable';

grant r_gescom_admin
to 'loper_dave'@'%';

create user 'util1'@'localhost' identified by 'util1';

create user 'util2'@'localhost' identified by 'util2';

create user 'util3'@'localhost' identified by 'util3';

grant all
on gescom.*
to 'util1'@'localhost';

grant select
on gescom.*
to 'util2'@'localhost';

grant show
on gescom.suppliers
to 'util3'@'localhost';