DELIMITER //
CREATE PROCEDURE getContactDate(username varchar(0))
BEGIN
SELECT ContactDate FROM `CloseContact` WHERE username = User.`Username` ;
END;//
DELIMITER;

DELIMITER //
CREATE PROCEDURE getContactReleaseDate(username varchar(30))
BEGIN
SELECT DATE_ADD(ContactDate,INTERVAL 3 DAY)
FROM CloseContact
WHERE username = CloseContact.`UN` ;
END;//
DELIMITER;

DELIMITER //
CREATE PROCEDURE getPositiveTestDate(username varchar(30))
BEGIN
SELECT PositiveTestDate 
FROM TestedPositive 
WHERE username = TestedPositive.`UN` ;
END;//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE getPositiveTestReleaseDate(username varchar(30))
BEGIN
SELECT DATE_ADD(PositiveTestDate, INTERVAL 7 DAY) 
FROM TestedPositive 
WHERE username = TestedPositive.`UN` ;
END;//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE insertTestedPositiveDetails(date DATE)
BEGIN
INSERT INTO TestedPositive (TestedPositive.`PositiveTestDate`)
VALUES (date);
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE insertCloseContactDetails(date DATE)
BEGIN
INSERT INTO CloseContact (ContactDate.`ContactDate`)
VALUES (date);
END; //
DELIMITER ;

