
CREATE TABLE team5DB.Users(
    Username VARCHAR(20) NOT NULL,
    Password VARCHAR(40) NOT NULL,
    Name VARCHAR(30) NOT NULL,
    Surname VARCHAR(30) NOT NULL,
    PhoneNum VARCHAR(20),
    EmergencyPhone VARCHAR(20),
    Address VARCHAR(70) ,
    Birthdate DATE ,
    Work_from_home BIT NOT NULL,
    ID INT NOT NULL,
    DNumber INT NOT NULL,
    Type CHAR NOT NULL,
    UNIQUE (ID),
    PRIMARY KEY(Username),
    FOREIGN KEY (DNumber) REFERENCES Department(DNumber)
)ENGINE = InnoDB;

CREATE TABLE team5DB.Department(
    DNumber INT NOT NULL PRIMARY KEY,
    Name VARCHAR(20) NOT NULL,
    Address VARCHAR(70) NOT NULL
    
    

)ENGINE = InnoDB;

CREATE TABLE team5DB.Vaccine(
    Company VARCHAR(30),
    LastDoseDate DATE,
    NumOfDoses TINYINT,
    UN VARCHAR(20) NOT NULL,
    FOREIGN KEY (UN) REFERENCES Users(Username)
    
)ENGINE = InnoDB;

CREATE TABLE team5DB.TestedPositive(
    PositiveTestDate DATE,
  UN VARCHAR(20) NOT NULL,
     FOREIGN KEY (UN) REFERENCES Users(Username)
   
)ENGINE = InnoDB;

CREATE TABLE team5DB.CloseContact(
    ContactDate DATE,
    UN VARCHAR(20) NOT NULL,
     FOREIGN KEY (UN) REFERENCES Users(Username)
    
)ENGINE = InnoDB;


CREATE TABLE team5DB.Profile(
    TripDepartureDate DATE,
    TripReturnDate DATE,
 	UN VARCHAR(20) NOT NULL,
     FOREIGN KEY (UN) REFERENCES Users(Username)
  
)ENGINE = InnoDB;
