# **********************
# *** TABLE CREATION ***
# **********************

CREATE TABLE flight
(
FlightID            integer auto_increment,
DepartureCity       varchar(50),
ArrivalCity	        varchar(50),
DepartureDateTime   timestamp(),
ArrivalDateTime     timestamp(),
Price               decimal(6,2),
SeatingCapacity     tinyint(3),
SeatsAvailable      tinyint(3),

PRIMARY KEY(FlightID)
);


# *************************
# *** DATA FOR SCENARIO ***
# *************************
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('1', 'Kuala Lumpur (KUL)', 'Jakarta (CGK)','2014-12-12 07:00:00','2014-12-12 08:00:00', '149.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('2', 'Kuala Lumpur (KUL)', 'Singapore (SIN)','2014-12-12 10:45:00','2014-12-12 11:45:00', '205.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('3', 'Kuala Lumpur (KUL)', 'Bangkok (DMK)','2014-12-12 13:15:00','2014-12-12 14:25:00', '419.00', '180', '180');

INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('4', 'Jakarta (CGK)', 'Kuala Lumpur (KUL)','2014-12-19 06:25:00','2014-12-19 09:25:00', '133.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('5', 'Jakarta (CGK)', 'Singapore (SIN)','2014-12-19 14:30:00','2014-12-19 17:10:00', '185.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('6', 'Jakarta (CGK)', 'Bangkok (DMK)','2014-12-19 07:20:00','2014-12-19 10:45:00', '541.00', '180', '180');

INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('7', 'Singapore (SIN)', 'Kuala Lumpur (KUL)','2014-12-20 21:45:00','2014-12-20 22:50:00', '206.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('8', 'Singapore (SIN)', 'Jakarta (CGK)','2014-12-20 10:20:00','2014-12-20 11:00:00', '302.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('9', 'Singapore (SIN)', 'Bangkok (DMK)','2014-12-20 17:05:00','2014-12-20 18:35:00', '633.00', '180', '180');

INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('10', 'Bangkok (DMK)', 'Kuala Lumpur (KUL)','2014-12-21 07:05:00','2014-12-21 10:15:00', '382.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('11', 'Bangkok (DMK)', 'Jakarta (CGK)','2014-12-21 11:25:00','2014-12-21 14:45:00', '951.00', '180', '180');
INSERT INTO quotes (FlightID, DepartureCity, ArrivalCity, DepartureTime, Price, SeatingCapacity) VALUES ('12', 'Bangkok (DMK)', 'Singapore (SIN)','2014-12-21 20:15:00','2014-12-21 23:45:00', '849.00', '375', '375');


commit;
