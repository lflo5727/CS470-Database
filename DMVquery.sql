

use dmv;

create table person (
	
	dl_id				varchar(10)		not null,
	first				varchar(15)		not null,
	last				varchar(15)		not null,
	ssn 				varchar(9) 		not null,
    sex 				char 			not null,
    eye_color			varchar(3) 		null,
    date_of_birth 		date 			not null,
    height				varchar(6)		null,
    weight				varchar(3)		null,
    primary key(ssn)
);



create table license_plate (
	number 				varchar(6) 		not null,
    type 				char(1)			null,
    handicap 			bit 			not null,
    status				bit				not null,
	owner_dl_id			varchar(10)		not null,
	vehicle_vin			varchar(10)		not null,
    primary key(number)
);




create table license_card (
	endorsements 			varchar(20) 		null,
    dl_number 				varchar(10)			not null,
    expiration				date 				not null,
    restrictions 			char 				null,
    state					varchar(2)			not null,
	class 					char 				not null,
    photo 					varbinary(50)		not null,
    owners_signature		varchar(6) 			not null,
    donor 					bit 				null,
    issued_date				date				null,
	authorized_signature	varbinary(50)		not null,
	dd_number				int					not null,
	owner_dl_id				varchar(10)			not null,
    primary key(dl_number)
);




create table vehicle (
	registered_drivers		varchar(6) 			not null,
    owner_dl_id				varchar(10)			not null,
    vin						varchar(17) 		not null,
    make 					varchar(20) 		not null,
    model					varchar(20)			not null,
	year					varchar(4)			not null,
	vehicle_type			varchar(20)			not null,
	license_plate			varchar(6)			not null,
    primary key(vin)
);




create table address (
	uid						int 				not null,
    county 					varchar(20)			not null,
    house_number			int 				not null,
	apartment_number		varchar(4)		 	null,
    zip_code 				int 				not null,
    state					varchar(2)			not null,
	street					varchar(20)			not null,
	city					varchar(30)			not null,
	owner_dl_id				varchar(10)			not null,
    primary key(uid)
);




 insert into person(dl_id,first, last, ssn,sex, eye_color,date_of_birth,height,weight)
 values ('R123456789','John', 'Smith','123456789','M','Br','2019/04/10','6ft0"','100');

 insert into person(dl_id,first, last, ssn,sex, eye_color,date_of_birth,height,weight)
 values ('R012345678','Amy', 'Jones','012345678','F','Gr','2019/04/10','5ft4"','150');

 insert into license_plate(number, handicap,status,owner_dl_id, vehicle_vin)
 values ('123456',0,'0','R123456789','1234567890');

 insert into license_plate(number, handicap,status,owner_dl_id, vehicle_vin)
 values ('JOHN',0,'0','R123456789', '77777777');

 insert into license_plate(number, handicap,status,owner_dl_id,vehicle_vin)
 values ('123',1,'1','R012345678','1111111');


 insert into vehicle(registered_drivers,owner_dl_id,vin,make,model,year, vehicle_type,license_plate)
 values ('Smith','R123456789','1234567890','Ford','Fusion','2016','sedan','123456');

 insert into vehicle(registered_drivers,owner_dl_id,vin,make,model,year, vehicle_type,license_plate)
 values ('Smith','R123456789','77777777','Ford','F-150','2018','truck','JOHN');

 insert into vehicle(registered_drivers,owner_dl_id,vin,make,model,year, vehicle_type,license_plate)
 values ('Jones','R012345678','1111111','Subaru','Forester','2019','SUV','123');

 insert into address(uid, county, house_number,zip_code,state,street,city,owner_dl_id)
 values('1','Jackson','123','64106','MO','Main St.','Kansas City','R123456789');

 insert into address(uid,county,house_number,zip_code,state,street,city,owner_dl_id)
 values('2','Boone','888','65203','MO','Walnut St.','Columbia','R012345678');


 /*get the name of all drivers who have an suv*/
 select first, last
 from person
 INNER JOIN
 vehicle 
 on person.dl_id=vehicle.owner_dl_id
 where vehicle.vehicle_type='SUV';


 /*find all owners who have more than 1 car*/
 select  last, count(vehicle.vin) as Num_of_cars
 from person
 INNER JOIN
 vehicle
 on person.dl_id=vehicle.owner_dl_id
 group by last
 HAVING COUNT(vehicle.vin)>1;


 /*find everyone who's license starts with 1*/
 select first, last
 from person
 INNER JOIN
 license_plate
 on person.dl_id=license_plate.owner_dl_id
 where license_plate.number LIKE '1%';

 /*find the city of drivers of an SUV with license starting 12*/
 select city
 from address
 INNER JOIN
 person
 on address.owner_dl_id=person.dl_id
 INNER JOIN
 vehicle
 on vehicle.owner_dl_id=person.dl_id
 INNER JOIN
 license_plate
 on license_plate.owner_dl_id=vehicle.owner_dl_id
 where vehicle.vehicle_type='SUV' and license_plate.number LIKE '12%';
 
  Select DL_ID from Person;