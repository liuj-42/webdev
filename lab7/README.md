# lab 7
This is the readme file for the seventh lab of Web Systems & Development class.
RCSID: liuj42
Link to repo for this class: https://github.com/liuj-42/webdev
> Every lab you turn in will have a README.md file. This file will contain a running work log of everything you did for this lab. I especially want to know where you got stuck along the way and what you did to get out of being stuck. One to two sentences isn’t going to cut it here: this is the only opportunity you are going to get to document your own progression so take it seriously. At the end of the semester, I should be able to read through all the README.md files and have a good idea of your growth--as should you!

```sql
CREATE TABLE courses ( 
crn int(11) PRIMARY KEY, 
prefix varchar(4), 
number smallint(4) NOT NULL, 
title varchar(255) NOT NULL 
);

CREATE TABLE students ( 
RIN int(9) PRIMARY KEY, 
RCSID char(7), 
`first name` varchar(100) NOT NULL, 
`last name` varchar(100) NOT NULL, 
alias varchar(100) NOT NULL, 
phone int(10) 
);

ALTER TABLE students 
ADD street varchar(255), 
ADD city varchar(255), 
ADD state varchar(255), 
ADD zip int(5)

ALTER TABLE courses
ADD section int,
ADD year int

CREATE TABLE grades ( 
id int PRIMARY KEY AUTO_INCREMENT, 
crn int, 
RIN int, 
grade int(3) NOT NULL, 
FOREIGN KEY (crn) REFERENCES courses(crn), 
FOREIGN KEY (RIN) REFERENCES students(RIN) 
);

INSERT INTO courses (crn, prefix, number, title, section, year)
VALUES 
(60366, "CSCI", 1100, "Computer Science 1", 1, 2020),
(60371, "CSCI", 1200, "Data Structures", 1, 2021),
(62456, "CSCI", 2200, "Foundations of Computer Sci", 1, 2021),
(61510, "CSCI", 2500, "Computer Orginization", 1, 2021)

INSERT INTO students (RIN, RCSID, `first name`, `last name`, alias, phone, street, city, state, zip)
VALUES
(123454321, "studj2", "John", "Student", "John", 1111111111, "1999 Burdett Ave", "Troy", "NY", 12180),
(234565432, "clast2", "Thomas", "Classmate", "Tom", 2222222222, "87 street Ave", "Somwhere", "NJ", 16782),
(345676543, "spreis", " Steven", "Spreizer", "Steven", 3333333333, "12 road Ln", "Town", "MA", 38604),
(456787654, "lamr2", "Ryan", "Lam", "Ryan", 4444444444, "165 circle dr.", "City", "MI", 56037)

INSERT INTO grades (crn, RIN, grade)
VALUES
(60366, 123454321, 100),
(60366, 234565432, 82),
(60366, 345676543, 87),
(60366, 456787654, 90),
(60371, 123454321, 99),
(60371, 234565432, 67),
(60371, 345676543, 78),
(60371, 456787654, 55),
(61510, 123454321, 100),
(62456, 123454321, 100)

SELECT * FROM students 
ORDER BY `RIN`

SELECT * FROM students
ORDER BY `last name`

SELECT * FROM students
ORDER BY RCSID

SELECT * FROM students
ORDER BY `first name`

SELECT students.RIN, students.`first name`, students.`last name`, students.street, students.city, students.state, students.zip
FROM students INNER JOIN grades 
ON students.RIN = grades.RIN AND grades.grade >= 90

SELECT avg(grade), COUNT(*) 
FROM grades 
GROUP BY crn

SELECT crn, COUNT(*)
FROM grades
GROUP BY crn
```

I got a lot of experience learning how to do various SQL queries and also using mysqli and prepared statements for SQL queries using PHP. In part 2, I spent the longest with number 8 because I was having a hard time using inner join, but after I got it I was able to use it for part 3 when displaying the average grade for each course and the number of students in each course. Instead of listing the courses by CRN, I instead used inner join to show the course names which I thought was pretty cool.
Overall I think this lab helped me a lot with understanding how to integrate databases with PHP and I will use this knowledge I learned for my final project.

```sql
SELECT courses.title, avg(grades.grade) 
FROM grades INNER JOIN COURSES 
ON grades.crn = courses.crn 
GROUP BY courses.crn

SELECT courses.title, COUNT(*) 
FROM grades INNER JOIN courses 
ON grades.crn = courses.crn 
GROUP BY courses.crn

```
> Additionally, you must cite any tutorials/walkthroughs/YouTube videos/etc. that you used to create both the group portfolio and your personal portfolio. Plagiarism is no good! If you looked at it, you drop the link in your cited sources list. Simple as that. Failure to cite all referenced works will result in a zero for the assignment and a full letter drop in your final grade. When in doubt, email me or the TA.

https://www.w3resource.com/sql/aggregate-functions/count-with-group-by.php

https://www.w3schools.com/sql/sql_count_avg_sum.asp

https://dba.stackexchange.com/questions/129023/selecting-data-from-another-table-using-a-foreign-key

https://www.w3schools.com/sql/sql_exists.asp

https://www.w3schools.com/sql/sql_where.asp

https://www.w3schools.com/sql/sql_and_or.asp

https://www.w3schools.com/sql/sql_orderby.asp

https://www.ibm.com/docs/en/i/7.3?topic=statement-inserting-data-into-tables-referential-constraints

https://www.sqlservertutorial.net/sql-server-basics/sql-server-insert-multiple-rows/

https://www.w3schools.com/sql/sql_foreignkey.asp

https://www.w3schools.com/sql/sql_alter.asp