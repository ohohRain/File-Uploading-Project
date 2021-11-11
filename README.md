


## File Uploading Project


## Link to file transfer website
http://ec2-18-188-135-121.us-east-2.compute.amazonaws.com/~Rain/module2-group-487627-488501/login_check.php


## Creative Portion
We created an add user module to our file transfer system
When we add users, we first added the username to our users.txt, where we store all the valid usernames. Then we add
a user directory for that particular user.

We use the following code to open the users.txt and write to the end of the file
```sh
$h = fopen("../../users.txt", "a+");
```
Where "a+" means to append to the end of the file
We then use:
```sh
fwrite($h, $txt);
```
fwrite the txt, which is the new username to the end of our users.txt file to store the username for login

To create a directory for that user
```sh
mkdir("../../userfiles/".$user_name);
```
We just use mkdir to create a directory for the user

There are also codes to make sure no repeated username and/or empty username.


