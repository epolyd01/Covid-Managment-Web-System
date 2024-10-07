DELIMITER //
CREATE PROCEDURE getFName(username varchar(20))
BEGIN
SELECT FName FROM `User` WHERE username = `User`.`Username`
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE insertCloseContactDates(ContactDate DATE, ReleaseDate DATE )
BEGIN
INSERT INTO 'CloseContact' ('CloseContact'.'ContactDate', 'CloseContact'.'ReleaseDate')
VALUES (ContactDate, ReleaseDate)
END; //
DELIMITER ; 


--We need to add attribute ReleaseDate  and check if we can calculate the date
DELIMITER //
CREATE PROCEDURE insertPositiveTest(ContactDate DATE)
BEGIN
INSERT INTO 'TestedPositive' ('TestedPositive'.'ContactDate')
VALUES (ContactDate, ReleaseDate)
END; //
DELIMITER ; 

--We need to add attribute Manufacturer and ExpirationDate - check if we can calculate the exp date
DELIMITER //
CREATE PROCEDURE insertVaccineDetails(Manufacturer varchar(50), NumOfDoses INT, LastDoseDate DATE)
BEGIN
INSERT INTO 'Vaccine' ('Vaccine'.'Manufacturer','Vaccine'.'NumOfDoses', 'Vaccine'.'LastDoseDate')
VALUES (Manufacturer, NumOfDoses, LastDoseDate)
END; //
DELIMITER ; 


DELIMITER //
CREATE PROCEDURE insertProfileInfo(FirstName varchar(30) , LastName varchar(30), Username varchar(30), IDNumber INT, PhoneNumber INT, BirthDate DATE, DepartmentNumber INT, DepartmentName varchar(20), DepartureDate DATE, ReturnDate DATE)
BEGIN
INSERT INTO 'User' ('User'.'Name', 'User'.'Surname','User'.'Username', 'User'.'ID', 'User'.'PhoneNum', 'User'.'BirthDate', 'User'.'DNumber')
VALUES (FirstName, LastName, Username, IDNumber, PhoneNumber, BirthDate, DepartmentNumber) 
END; //
DELIMITER ; 



--we have to check if we can calculate the departure date 
INSERT INTO 'Profile' ('Profile'.'TripDepartureDate', 'Profile'.'TripDeparture')
VALUES (FirstName, LastName, Username, IDNumber, PhoneNumber, BirthDate, DepartmentNumber) 
END; //
DELIMITER ;