

 create table if not exists `student`(
 `id` int(10) not null primary key AUTO_INCREMENT,
 `ussn` varchar(30) not null ,
 `name` varchar(50) not null ,
 `sem` int not null,
 `dept` varchar(30) not null,
 `fname` varchar(50) not null,
 `mname` varchar(50) not null,
 `dob` date not null,
 `address` varchar(100) not null,
 `gender` varchar(10) not null,
 `caste` varchar(50) not null,
 `category` varchar(50) not null,
 `phone` double not null,
 `base` varchar(10) not null,
 `lastinst` varchar(50) not null,
 `lyear` int not null,
 `marks` float not null ,
 `submitby` varchar(50) not null
 )ENGINE InnoDB default charset=latin1 auto_increment=1;
 
 
 
 create table if not exists `lecture`(
 `id` int(10) not null  primary key AUTO_INCREMENT,
 `lect_id` int(11) not null,
 `dept` varchar(30) not null,
 `type` varchar(30) not null,
 `name` varchar(50) not null,
 `phno` double not null,
 `address` varchar(300) not null,
 `gender` varchar(10) not null,
 `dob` date not null,
 `fname`  varchar(50) not null,
 `mname`  varchar(50) not null,
 `mstat` varchar(50) not null,
 `hname` varchar(50),
  `degree` varchar(200) not null,
 `dgrins` varchar(200) not null,
 `wrkexp` varchar(30) not null,
 `subhan` varchar(500) not null,
 `salary` int(10) not null,
 `submitby` varchar(300) not null
  )ENGINE InnoDB default charset=latin1 auto_increment=1;
  
  create table if not exists `subject`(
  `id` int(11)  not null primary key AUTO_INCREMENT,
  `sname` varchar(30) not null,
  `sshrct` varchar(10) not null,
  `subid` varchar(10) not null ,
  `dept` varchar(50) not null,
  `sem` int(11) not null,
  `lect` varchar(30) not null,
  `submitby` varchar(50) not null
  )ENGINE InnoDB default charset=latin1 auto_increment=1;
  
  
  create table if not exists `marks`(
  `sname` varchar(30) not null,  
  `subid` varchar(10) not null,
  `ussn` varchar(30) not null,
  `dept` varchar(100) not null,
  `sem` int  not null,
  `fi` int(11),
  `si` int(11),
  `ti` int(11),
  `lect` varchar(50) not null
  );
  
  create table if not exists `users`(
  `id` int(11) primary key not null auto_increment,
 `username` varchar(30) not null,
  `pswd` varchar(20) not null,
  `type` varchar(20) not null,
  `ussn` varchar(30) not null,
  `dept` varchar(100) not null,
  `phno` double not null
   )ENGINE InnoDB default charset=latin1 auto_increment=1;
  
  create table if not exists `fee` (
 `id` int primary key not null auto_increment,
 `ussnu` varchar(30) not null,
 `dept` varchar(50) not null,
 `sem` int not null,
 `total` int not null,
 `paid` int not null,
 `balance` int not null
  )ENGINE InnoDB default charset=latin1 auto_increment=1;
  
  create table if not exists `att`(
 `id` int primary key not null auto_increment,
 `ussn` varchar(30) not null,
 `subid` int not null,
 `total` int not null,
 `att` int not null
  )ENGINE InnoDB default charset=latin1 auto_increment=1;
  
  CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


