# school-register

This is an example Laravel project which allows the user to store registration marks against a student for specific lessons.

# Get started

* Clone the repo/download the files
* Fill in your empty database credentials in .env (you'll need to create this file, please copy from .env.example)
* Navigate to the directory in terminal and run "composer install" to ensure we have all the required dependencies.
* Run "php artisan migrate" to create all the database tables
* Run "php artisan import:demo", this will import all the demo data available. You can edit these demo files in the /storage directory
* Run "php artisan serve", this will start the server on http:127.0.0.1:8000
* Feel free to test drive the system!

# To-Do

* Add account functionality
* Add two user groups, teacher and admin. Admin to view all lessons, teacher to view their own lessons.
* Allow teacher to update registration marks until a cut-off time.
* View the register after cut-off time
* Cycle through weeks instead of having one long list
* Show individual students attendance as a percentage and add alert for admin if student attendance drops below 90%
