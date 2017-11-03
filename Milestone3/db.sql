/* Table 1: Login table with user information*/
CREATE TABLE IF NOT EXISTS logintable ( UserID Int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, \
                                        Name VARCHAR(40) NOT NULL, \
                                        UserName VARCHAR(40) NOT NULL, \
                                        Password VARCHAR(40) NOT NULL);

/* Thse are the initial (test) values added to the table,
further values are added using separate php script that takes user input*/
INSERT INTO logintable (Name, UserName, Password) VALUES
('Allie', 'AL1234', 'Password1'),
('Tanner', 'TA9297', 'Password2'),
('Yang', 'YA2376', 'Password3'),
('Ben', 'BE8245', 'Password4');

/*Table 2: Score table with scores connected to UserID Primary Key*/
CREATE TABLE IF NOT EXISTS scoretable( UserID Int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,\
                                       Game1Score Int(2),\
                                       Game2Score Int(2));

/* Note: scoretable values are inserted and updated using a separate php script*/
