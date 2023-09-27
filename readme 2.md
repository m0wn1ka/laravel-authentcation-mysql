## modifying  as necessary
change welcome page 
change ```http://127.0.0.1:8000/register``` to ```http://127.0.0.1:8000/registration/create/post```
<br>
edit create.blade.php for more fields
<br>
create post for http://127.0.0.1:8000/register
<br>
change registraion controller
<br>
change create_registration_table in database/migraions folder
<br>
run ```php artisan migrate:refresh```
<br>
update registration model
## adding mail feature
https://www.tutorialspoint.com/laravel/laravel_sending_email.htm

php artisan config:cache