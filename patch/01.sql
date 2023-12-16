-- JESSICA
-- 25/09/2012

ALTER TABLE `rent_sell` ADD `furnish` ENUM( 'F', 'P', 'U' ) NOT NULL DEFAULT 'U' AFTER `aircon` ,
ADD INDEX ( `furnish` );

ALTER TABLE `rent_sell` ADD `latitude` FLOAT( 9, 6 ) NOT NULL AFTER `postal_code` ,
ADD `longitude` FLOAT( 9, 6 ) NOT NULL AFTER `latitude`;

ALTER TABLE `rent_sell` ADD INDEX ( `area_id` );

ALTER TABLE `rent_sell` ADD INDEX ( `district_id` );

ALTER TABLE `rent_sell` ADD INDEX ( `mrt_id` );

ALTER TABLE `rent_sell` ADD INDEX ( `aircon` );

ALTER TABLE `rent_sell` ADD INDEX ( `unit_room` );

ALTER TABLE `mrt` ADD `code` VARCHAR( 5 ) NOT NULL AFTER `type`;

INSERT INTO `property_type` (`id`, `name`, `description`) VALUES
(1, 'Landed House', 'Landed House Property'),
(2, 'Condo', 'Condo Property'),
(3, 'HDB - 2I (Improved)', '45 sqm/484 sqft'),
(4, 'HDB - 2S', '41 sqm/441 sqft'),
(5, 'HDB - 3A (Modified)', '90 sqm/969 sqft'),
(6, 'HDB - 3NG (Modified)', '83 sqm/896 sqft'),
(7, 'HDB - 3A', '75 sqm/807 sqft'),
(8, 'HDB - 3NG (New Generation)', '69 sqm/743 sqft\r\n(2 toilets, master bedroom with attached bathroom)'),
(9, 'HDB - 3I (Modified)', '70 sqm/750 sqft'),
(10, 'HDB 3S (Simplified)', '65 sqm/700 sqft'),
(11, 'HDB - 3I (Improved)', '60 sqm/646 sqft\r\n(No attached bath, toilet and bath separated, no storeroom)'),
(12, 'HDB - 3STD (Standard)', '54 sqm/581 sqft\r\n(No attached bathroom/storeroom. Upgraded units have extra utility room or toilet)'),
(13, 'HDB - 4A', '105 sqm/1130 sqft\r\n(2 bathrooms, master bedroom with attached toilet, storeroom)'),
(14, 'HDB - 4NG (New Generation)', '92 sqm/990 sqft'),
(15, 'HDB - 4S (Simplified)', '85 sqm/914 sqft\r\n(2 bathrooms, master bedroom with attached toilet, storeroom)'),
(16, 'HDB - 4I (Improved)', '83 sqm/893 sqft\r\n(toilet and bath separated, no storeroom)'),
(17, 'HDB - 4STD (Standard)', '73 sqm/786 sqft'),
(18, 'HDB - 5A', '135 sqm/1453 sqft'),
(19, 'HDB - 5I', '123 sqm/1313 sqft'),
(20, 'HDB - 5S', '121 sqm/1300 sqft'),
(21, 'EA (Exec Apartment)', '141 sqm/1518 sqft (single storey)'),
(22, 'EM (Exec Maisonette)', '145sqm/1560sqft (double storey)'),
(23, 'MG (Multi-Generation)', '165 sqm/1776 sqft'),
(24, 'Other HDB Type', 'Other HDB type like studio, jumbo flat, etc');

-- END