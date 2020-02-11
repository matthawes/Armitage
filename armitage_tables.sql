CREATE TABLE `alcohol_category` (
  `alcohol_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `alcohol_category_code` varchar(45) DEFAULT NULL,
  `alcohol_category_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`alcohol_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


CREATE TABLE `term` (
  `term_id` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`term_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(45) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `usertypeid_fk_idx` (`user_type_id`),
  CONSTRAINT `usertypeid_fk` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


CREATE TABLE `food_unit` (
  `food_unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit` varchar(45) DEFAULT NULL,
  `abbreviation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`food_unit_id`),
  KEY `unit_idx` (`unit`),
  KEY `abbr` (`abbreviation`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE `food_unit_conversion` (
  `original_unit` varchar(45) NOT NULL,
  `new_unit` varchar(45) NOT NULL,
  `conversion` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`original_unit`,`new_unit`),
  KEY `food_unit_fk4_idx` (`new_unit`),
  CONSTRAINT `food_unit_fk8` FOREIGN KEY (`original_unit`) REFERENCES `food_unit` (`abbreviation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `food_unit_fk9` FOREIGN KEY (`new_unit`) REFERENCES `food_unit` (`abbreviation`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `job_code` (
  `job_code_id` varchar(1) NOT NULL,
  `job_code` varchar(45) DEFAULT NULL,
  `position_location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`job_code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `SSN` varchar(45) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `job_code_id` varchar(1) DEFAULT NULL,
  `current_pay_rate` double DEFAULT NULL,
  `tipped` varchar(5) DEFAULT NULL,
  `filing_status` varchar(45) DEFAULT NULL,
  `allowances` varchar(45) DEFAULT NULL,
  `extra_withholding` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `termination_date` datetime DEFAULT NULL,
  `eligible_rehire` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `job_code_fk_idx` (`job_code_id`),
  CONSTRAINT `job_code_fk` FOREIGN KEY (`job_code_id`) REFERENCES `job_code` (`job_code_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`payment_method_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_code` varchar(45) DEFAULT NULL,
  `vendor_name` varchar(100) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`vendor_id`),
  KEY `term_fk_idx` (`term_id`),
  KEY `payment_method_fk_idx` (`payment_method_id`),
  CONSTRAINT `payment_method_fk` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `term_fk` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(45) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `target_food_cost_percentage` decimal(10,2) DEFAULT NULL,
  `target_alcohol_cost_percentage` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cost_of_goods` (
  `cost_of_goods_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_date` datetime DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cost_of_goods_id`),
  KEY `vendor_fk_idx` (`vendor_id`),
  CONSTRAINT `vendor_fk` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `daily_cash` (
  `daily_cash_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`daily_cash_id`),
  KEY `company_fk3_idx` (`company_id`),
  CONSTRAINT `company_fk3` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `dashboard_data` (
  `dashboard_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `dashboard_date` datetime DEFAULT NULL,
  `projected_food` decimal(10,2) DEFAULT NULL,
  `projected_alcohol` decimal(10,2) DEFAULT NULL,
  `actual_food` decimal(10,2) DEFAULT NULL,
  `actual_alcohol` decimal(10,2) DEFAULT NULL,
  `projected_boh` decimal(10,2) DEFAULT NULL,
  `projected_foh` decimal(10,2) DEFAULT NULL,
  `projected_boh_percentage` decimal(10,2) DEFAULT NULL,
  `projected_foh_percentage` decimal(10,2) DEFAULT NULL,
  `actual_boh` decimal(10,2) DEFAULT NULL,
  `actual_foh` decimal(10,2) DEFAULT NULL,
  `actual_boh_percentage` decimal(10,2) DEFAULT NULL,
  `actual_foh_percentage` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`dashboard_data_id`),
  KEY `company_fk9_idx` (`company_id`),
  CONSTRAINT `company_fk9` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `gl_code` (
  `gl_code_id` int(11) NOT NULL,
  `gl_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`gl_code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `employee_company` (
  `employee_id` int(11) NOT NULL,
  `ccmpany_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`,`ccmpany_id`),
  KEY `company_fk_idx` (`ccmpany_id`),
  CONSTRAINT `company_fk` FOREIGN KEY (`ccmpany_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `employee_history` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `SSN` varchar(45) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `job_code_id` varchar(1) DEFAULT NULL,
  `current_pay_rate` double DEFAULT NULL,
  `tipped` varchar(5) DEFAULT NULL,
  `filing_status` varchar(45) DEFAULT NULL,
  `allowances` varchar(45) DEFAULT NULL,
  `extra_withholding` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `termination_date` datetime DEFAULT NULL,
  `eligible_rehire` varchar(5) DEFAULT NULL,
  `effective_date` datetime DEFAULT NULL,
  `ending_date` datetime DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `job_code_fk2_idx` (`job_code_id`),
  CONSTRAINT `job_code_fk2` FOREIGN KEY (`job_code_id`) REFERENCES `job_code` (`job_code_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `food_item_cost` (
  `food_item_cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `food_unit_id` int(11) DEFAULT NULL,
  `gl_code_id` int(11) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`food_item_cost_id`),
  KEY `company_fk3_idx` (`company_id`),
  KEY `vendor_fk3_idx` (`vendor_id`),
  KEY `food_unit_fk_idx` (`food_unit_id`),
  KEY `gl_code_fk_idx` (`gl_code_id`),
  CONSTRAINT `company_fk4` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `food_unit_fk2` FOREIGN KEY (`food_unit_id`) REFERENCES `food_unit` (`food_unit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gl_code_fk` FOREIGN KEY (`gl_code_id`) REFERENCES `gl_code` (`gl_code_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `vendor_fk4` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(50) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `memo` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`),
  KEY `term_fk2_idx` (`term_id`),
  KEY `company_fk10_idx` (`company_id`),
  KEY `vendor_fk10_idx` (`vendor_id`),
  CONSTRAINT `company_fk10` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `vendor_fk10` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `term_fk2` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `invoice_line` (
  `invoice_line_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `food_item_cost_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`invoice_line_id`),
  KEY `food_item_cost_fk5_idx` (`food_item_cost_id`),
  KEY `invoice_fk_idx` (`invoice_id`),
  CONSTRAINT `food_item_cost_fk5` FOREIGN KEY (`food_item_cost_id`) REFERENCES `food_item_cost` (`food_item_cost_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `invoice_fk` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `in_time` datetime DEFAULT NULL,
  `out_time` datetime DEFAULT NULL,
  `position` decimal(10,2) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `company_fk8_idx` (`company_id`),
  KEY `employee_fk8_idx` (`employee_id`),
  CONSTRAINT `company_fk8` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `employee_fk8` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `user_company` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`company_id`),
  KEY `company_id_fk_idx` (`company_id`),
  CONSTRAINT `company_id_fk` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user_company_notes` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `notes` varchar(2000) DEFAULT NULL,
  `note_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`company_id`),
  KEY `company_id_fk_idx2` (`company_id`),
  CONSTRAINT `company_id_fk2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id_fk2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `alcohol_inventory` (
  `alcohol_inventory_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `alcohol_category_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `food_unit_id` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `begin` decimal(10,2) DEFAULT NULL,
  `purchased` decimal(10,2) DEFAULT NULL,
  `end` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`alcohol_inventory_id`),
  KEY `company_fk7_idx` (`company_id`),
  KEY `alcohol_category_fk_idx` (`alcohol_category_id`),
  KEY `vendor_fk7_idx` (`vendor_id`),
  KEY `food_unit_fk4_idx` (`food_unit_id`),
  CONSTRAINT `alcohol_category_fk` FOREIGN KEY (`alcohol_category_id`) REFERENCES `alcohol_category` (`alcohol_category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `company_fk7` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `food_unit_fk4` FOREIGN KEY (`food_unit_id`) REFERENCES `food_unit` (`food_unit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `vendor_fk7` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
