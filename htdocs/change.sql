ALTER TABLE `photo` ADD `typeid` TINYINT(2) NOT NULL DEFAULT '1' AFTER `ownerid`, ADD `type` VARCHAR(30) NULL AFTER `typeid`;