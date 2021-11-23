# lab 8
This is the readme file for the eigth lab of Web Systems & Development class.
RCSID: liuj42
Link to repo for this class: https://github.com/liuj-42/webdev
> Every lab you turn in will have a README.md file. This file will contain a running work log of everything you did for this lab. I especially want to know where you got stuck along the way and what you did to get out of being stuck. One to two sentences isn’t going to cut it here: this is the only opportunity you are going to get to document your own progression so take it seriously. At the end of the semester, I should be able to read through all the README.md files and have a good idea of your growth--as should you!

Parts 1 and 2 were relatively painless, but I tried to implement some new ideas that I had for part 3, which took a lot of effort from my side in the form of debugging and browsing stack overflow pages and documentation trying to figure out how to use a particular thing. Initially, I tried making the side menu prettier but I spend way too much time on that and trying to reverse engineer other examples that I had found on the web, and settled for a quick thing that I whipped up. For part 3, I had a lot of trouble with figuring out how to make buttons that could run php functions while also passing in paremeters. I first used a form that buttons that submtited things, but I coulnd't get the parameters to be passed through, so I did some more researching until I found how to run php with ajax calls. After that, it was smooth sailing with creating the databse and deleting it. Creating the login page was a bit of a hassle, as I was having hard time understanding how the verify_password function worked becuase when I hashed a password, every single time I would get a different result and I didn't see how verify_password could handle that. The fact that I had a semantic error in for the first try with using verify_password with a hashed password didnt help either, as I just kept on thinking that I needed to have the exact same paswords for it to work. I eventually got it though, and it was intersting reading the php documentation about the verify_password and password_hash functions. All in all, I think this lab taught me a great deal about authentication with PHP and solidifying my understanding of how to use PHP and databses together.

As for the authorization, I ended up going with a mixture between the code that we used in class and some code that I found online. I still ended up converting any msqli parts to prepared statements though.

> Additionally, you must cite any tutorials/walkthroughs/YouTube videos/etc. that you used to create both the group portfolio and your personal portfolio. Plagiarism is no good! If you looked at it, you drop the link in your cited sources list. Simple as that. Failure to cite all referenced works will result in a zero for the assignment and a full letter drop in your final grade. When in doubt, email me or the TA.

https://stackoverflow.com/questions/9612758/add-a-css-border-on-hover-without-moving-the-element

https://stackoverflow.com/questions/4044845/retrieving-a-property-of-a-json-object-by-index

https://www.php.net/manual/en/function.echo.php

https://www.php.net/manual/en/function.password-hash.php

https://stackoverflow.com/questions/30279321/how-to-use-phps-password-hash-to-hash-and-verify-passwords

https://stackoverflow.com/questions/2513734/generating-a-salt-in-php/34173258#34173258

https://www.php.net/manual/en/function.password-verify.php

https://stackoverflow.com/questions/37765456/php-password-hash-changing-every-time

https://www.w3schools.com/jsref/jsref_toLowerCase.asp

https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals

https://stackoverflow.com/questions/13782698/get-total-number-of-items-on-json-object

https://gomakethings.com/how-to-create-a-sticky-navigation-with-only-css/

https://codeshack.io/secure-login-system-php-mysql/

https://api.jquery.com/html/

https://stackoverflow.com/questions/32586594/how-to-add-a-class-to-multiple-elements

https://learn.jquery.com/using-jquery-core/document-ready/

https://www.guru99.com/delete-and-update.html

https://stackoverflow.com/questions/34336960/what-is-the-es6-equivalent-of-python-enumerate-for-a-sequence