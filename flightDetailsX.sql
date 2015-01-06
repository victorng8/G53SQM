# **********************
# *** TABLE CREATION ***
# **********************

CREATE TABLE flightsX
(
id                  INT NOT NULL auto_increment,
prefix              char(30) NOT NULL,
DepartureCity       varchar(50),
ArrivalCity	        varchar(50),
DepartureDate       DATE,
DepartureTime       TIME,
ArrivalDate         DATE,
ArrivalTime         TIME,
Price               decimal(6,2),
SeatingCapacity     smallint(3),
SeatsAvailable      smallint(3),

PRIMARY KEY (id,prefix)
);


# *************************
# *** DATA FOR SCENARIO ***
# *************************
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('1', '1', 'Kuala Lumpur (KUL)', 'Jakarta (CGK)', '2014-12-12', '07:00:00','2014-12-12', '08:00:00', '149.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('2', '1','Kuala Lumpur (KUL)', 'Singapore (SIN)','2014-12-12', '10:45:00','2014-12-12', '11:45:00', '205.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('3', '1', 'Kuala Lumpur (KUL)', 'Bangkok (DMK)','2014-12-12', '13:15:00','2014-12-12', '14:25:00', '419.00', '180', '180');

INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('1', '2', 'Jakarta (CGK)', 'Kuala Lumpur (KUL)','2014-12-19', '06:25:00','2014-12-19', '09:25:00', '133.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('2', '2', 'Jakarta (CGK)', 'Singapore (SIN)','2014-12-19', '14:30:00','2014-12-19', '17:10:00', '185.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('3', '2', 'Jakarta (CGK)', 'Bangkok (DMK)','2014-12-19', '07:20:00','2014-12-19', '10:45:00', '541.00', '180', '180');

INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('1', '3','Singapore (SIN)', 'Kuala Lumpur (KUL)','2014-12-20', '21:45:00','2014-12-20', '22:50:00', '206.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('2', '3','Singapore (SIN)', 'Jakarta (CGK)','2014-12-20', '10:20:00','2014-12-20', '11:00:00', '302.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('3', '3', 'Singapore (SIN)', 'Bangkok (DMK)','2014-12-20', '17:05:00','2014-12-20', '18:35:00', '633.00', '180', '180');

INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('1', '4', 'Bangkok (DMK)', 'Kuala Lumpur (KUL)','2014-12-21', '07:05:00','2014-12-21', '10:15:00', '382.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('2', '4','Bangkok (DMK)', 'Jakarta (CGK)','2014-12-21', '11:25:00','2014-12-21', '14:45:00', '951.00', '180', '180');
INSERT INTO flightsX (prefix, id, DepartureCity, ArrivalCity, DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, Price, SeatingCapacity, SeatsAvailable) VALUES ('3', '4', 'Bangkok (DMK)', 'Singapore (SIN)','2014-12-21', '20:15:00','2014-12-21', '23:45:00', '849.00', '375', '375');


commit;
