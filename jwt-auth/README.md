## Working with JSON Web Token
From [developer.okta.com/blog/2019/02/04/create-and-verify-jwts-in-php](https://developer.okta.com/blog/2019/02/04/create-and-verify-jwts-in-php)     
Also see [openid.net/specs](https://openid.net/specs/draft-jones-json-web-token-07.html#:~:text=The%20iat%20(issued%20at)%20claim,string)  

To generate a secret to use for the app:  
```
> php generate_key.php
```  
Copy the key to your `.env` file.   

To Generate a token:  
```
> php generate_jwt.php
```
This will generate a token of the form `eyJ0eXAiOiJKV1QiLCJhbGciOiJoczI1N...`  

To validate the token:  
```
> php validate_jwt.php eyJ0eXAiOiJKV1QiLCJhbGciOiJoczI1N...
```