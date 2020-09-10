# Simple Web App
A simple web app made with Laravel with a MySQL database.

## Functionality
A user can do the following:
- Add a new teacher, student or course to the database
- Edit a teacher, student or course.
- Delete a teacher, student or course.
- Add/remove a student to/from a course.
- A guest can only view teachers, students and courses

## Database
The tables in the database are as follows:
- students: studentid, firstname, lastname, addressid
- addresses: addressid, address, city, zipcode
- teachers: teacherid, firstname, lastname
- courses: courseid, title, teacherid
- studentClasses: courseid, studentid  

Students and addresses have a 1:1 relationship because 1 student can have only 1 address.
Teachers and courses have a 1:Many relationship because 1 teacher can have many courses they teach.
Students and courses have a Many:Many relationship because many  students can have many courses and vice versa.

## Video demo
Video demo can be found here https://drive.google.com/file/d/170KgfP1KimIhYCzPa-Iz5Ijy7__vGAV7/view?usp=sharing .
Tutorial followed can be found here https://www.youtube.com/watch?v=EcYXsp78Xy8&t=5146s
