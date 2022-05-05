CREATE DATABASE complaint_form;
CREATE TABLE data(
Sr.No int(10) NOT NULL AUTO_INCREMENT,
First_Name mediumtext NOT NULL,
Last_Name mediumtext NOT NULL,
Phone_No bigint(10) NOT NULL,
Email_ID varchar(60) NOT NULL,
Complaint longtext NOT NULL,
Date_of_Inconvinience date NOT NULL,
Suggestions longtext NOT NULL,
Time_of_Submission date NOT NULL CURRENT_TIMESTAMP, 
PRIMARY KEY (Sr.No)
)
