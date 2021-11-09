# lab 6
This is the readme file for the fourth lab of Web Systems & Development class. 
RCSID: liuj42
Link to repo for this class: https://github.com/liuj-42/webdev
> Every lab you turn in will have a README.md file. This file will contain a running work log of everything you did for this lab. I especially want to know where you got stuck along the way and what you did to get out of being stuck. One to two sentences isn’t going to cut it here: this is the only opportunity you are going to get to document your own progression so take it seriously. At the end of the semester, I should be able to read through all the README.md files and have a good idea of your growth--as should you!

I got the php done relatively fast, and started implementing some features for the website. I added a selector that would show either 1-variable functions with only 1 input visible or 2-variable functions with both of the inputs visible. After that, I started styling the website by adding some color and moving elements around. However, during my testing of the website at this stage, I ran into a problem - since the inputs would submit the form, the page would refresh and if I had opted to show the two-input functions before submitting the form would not show that and instead default to the one-input functions because by default the one-input functions are shown. My first idea was to just make it so the form would not submit (something like `onsubmit="return false;"` for the form) but that raised the problem of the php not running properly since the form never submitted, which led me to researching how to call php with ajax. That didn't pan out, and I had to find a different way. I stumbled upon a stackoverflow article about localstorage, and I used that sucessfully for "remembering" which kind of function I had selected before the page refreshed. However, it did not work with the result field because the form has to submit and then the php will run and give me the equation to display. This led me to learning about `$_SESSION[]` for php, which I used to display the result properly. In the end, I felt like I spend a lot more time figuring out how to fix my refresh issue than working on the atual part of the lab, but I think that I learned a great deal from that.

> Additionally, you must cite any tutorials/walkthroughs/YouTube videos/etc. that you used to create both the group portfolio and your personal portfolio. Plagiarism is no good! If you looked at it, you drop the link in your cited sources list. Simple as that. Failure to cite all referenced works will result in a zero for the assignment and a full letter drop in your final grade. When in doubt, email me or the TA.


https://stackoverflow.com/questions/195951/how-can-i-change-an-elements-class-with-javascript
https://mrfrontend.org/2017/10/2-ways-get-child-elements-javascript/

https://stackoverflow.com/questions/6805482/css3-transition-animation-on-load

https://stackoverflow.com/questions/17042201/how-to-style-input-and-submit-button-with-css

https://github.com/codrops/ButtonHoverStyles

https://fonts.google.com/ for fonts

https://learn.jquery.com/using-jquery-core/document-ready/

https://stackoverflow.com/questions/16365555/how-to-keep-variable-constant-even-after-page-refresh-in-php

https://stackoverflow.com/questions/16206322/how-to-get-js-variable-to-retain-value-after-page-refresh

https://stackoverflow.com/questions/19454310/stop-form-refreshing-page-on-submit

https://github.com/arcticicestudio/nord color pallete