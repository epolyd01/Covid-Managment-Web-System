DELIMITER //
CREATE PROCEDURE countPositives()
BEGIN
SELECT COUNT(*) 
FROM `User` , `TestedPositive`
WHERE `User.`Username` = `TestedPositive`.`UN` AND DATE_ADD(`TestedPositive`.`PositiveTestDate`, INTERVAL 7 DAY)<= CURDATE() ; 
END; //
DELIMITER ;



DELIMITER //
CREATE PROCEDURE countNegatives()
BEGIN
SELECT COUNT(*) 
FROM `User` , `TestedPositive`
WHERE `User.`Username` = `TestedPositive`.`UN` AND (DATE_ADD(`TestedPositive`.`PositiveTestDate`, INTERVAL 7 DAY)> CURDATE() OR `TestedPositive`.`PositiveTestDate` is null ); 
END; //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE countEmployees()
BEGIN
SELECT COUNT(*) 
FROM `User` 
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE countQuarantined()
BEGIN
SELECT COUNT(*) 
FROM `User` , `TestedPositive`, `CloseContact`, `Vaccine`
WHERE `User.`Username` = `TestedPositive`.`UN` AND `Vaccine`.`NumOfDoses`=1 AND (DATE_ADD(`TestedPositive`.`PositiveTestDate`, INTERVAL 7 DAY)<= CURDATE() OR DATE_ADD(`CloseContact`.`ContactDate`, INTERVAL 3 DAY)<= CURDATE()); 
END; //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE count1Dose()
BEGIN
SELECT COUNT(*) 
FROM `User` , `Vaccine`
WHERE `User.`Username` = `Vaccine`.`UN` AND `Vaccine`.`NumOfDoses`=1; 
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE count2Doses()
BEGIN
SELECT COUNT(*) 
FROM `User` , `Vaccine`
WHERE `User.`Username` = `Vaccine`.`UN` AND `Vaccine`.`NumOfDoses`=2; 
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE count3Doses()
BEGIN
SELECT COUNT(*) 
FROM `User` , `Vaccine`
WHERE `User.`Username` = `Vaccine`.`UN` AND `Vaccine`.`NumOfDoses`=3; 
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE countNotVaccinated()
BEGIN
SELECT COUNT(*) 
FROM `User` , `Vaccine`
WHERE `User.`Username` = `Vaccine`.`UN` AND `Vaccine`.`NumOfDoses` is null; 
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE countTotalVaccineCompanies()
BEGIN
SELECT COUNT(Manufacturer) 
FROM  `Vaccine`
END; //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE countEachVaccineCompany()
BEGIN
SELECT COUNT(`Vaccine`.`UN`) 
FROM  `Vaccine`, `User`
WHERE `Vaccine`.`UN` = `User`.`Username`
GROUP BY `Vaccine`.`Manufacturer`
END; //
DELIMITER;
