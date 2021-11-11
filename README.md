
# CSE330S
 Module 2 Group work



## Name ID username

#### _Tomson Li 488501 tomsonlee13_
#### _Rain 487627 Rain-0219_


## Link to file transfer website
http://ec2-18-188-5-184.us-east-2.compute.amazonaws.com/~tomsonlee/module2-group-487627-488501/login_check.php

## Available test users
### _user1 user2 user3 testuser_

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


### Grading:
 - -1.5: Not filtering input. Ex: $user_name = $_GET['userName']; 
 - -3: Main page does not pass the W3C validator: (Error: Element link is missing one or more of the following attributes: href, resource.)
 - -2: Site is not easy to navigate, need to manually pressing the back button after uploading or deleting file
 - +1 extra point: Login page is visually appealing!
 - -5: Not enough creative portion
