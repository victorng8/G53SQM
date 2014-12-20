CREATE TABLE departure ( 
    flight_id int(2) NOT NULL auto_increment, 
    departure varchar(25) NOT NULL default '', 
    PRIMARY KEY (flight_id)
) ENGINE=MyISAM; 

# # Dumping data for table `departure` # 
INSERT INTO departure VALUES (1, 'Kuala Lumpur (KUL)');
INSERT INTO departure VALUES (2, 'Jakarta (CGK)');
INSERT INTO departure VALUES (3, 'Singapore (SIN)');
INSERT INTO departure VALUES (4, 'Bangkok (DMK)');

 # -------------------------------------------------------- # # Table structure for table `arrival` # 
CREATE TABLE arrival (
    flight_id int(2) NOT NULL default '0',
    arrival varchar(25) NOT NULL default ''
) ENGINE=MyISAM; 

# # Dumping data for table `arrival` # 
INSERT INTO arrival VALUES (1, 'Jakarta (CGK)');
INSERT INTO arrival VALUES (1, 'Singapore (SIN)');
INSERT INTO arrival VALUES (1, 'Bangkok (DMK)');

INSERT INTO arrival VALUES (2, 'Kuala Lumpur (KUL)');
INSERT INTO arrival VALUES (2, 'Singapore (SIN)');
INSERT INTO arrival VALUES (2, 'Bangkok (DMK)');

INSERT INTO arrival VALUES (3, 'Kuala Lumpur (KUL)');
INSERT INTO arrival VALUES (3, 'Jakarta (CGK)');
INSERT INTO arrival VALUES (3, 'Bangkok (DMK)');

INSERT INTO arrival VALUES (4, 'Kuala Lumpur (KUL)');
INSERT INTO arrival VALUES (4, 'Jakarta (CGK)');
INSERT INTO arrival VALUES (4, 'Singapore (SIN)');
