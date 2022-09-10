## Registration Form App

A small project to demonstrate my PHP learning while utilizing XAMPP and HTML/CSS.

This App allows the user to register via entering a username and a password. The PHP script
checks the database whether the entered username already exists. If not, the script will proceed 
to perform SQL query via `mysqli_query` to insert an entry into the database based on user inputs.

If the username already exists, the script will redirect the browser to `user-exists.html`. If an error is 
encountered after the query, the script will redirect the browser to `error.html`. Conversely, 
`register-success.html` is shown in the browser to tell the user that registration has been successful or, 
specifically, the entered username and password have been successfully inserted into the database.
