
# lab 5
This is the readme file for the fourth lab of Web Systems & Development class. 
RCSID: liuj42

Link to repo for this class: https://github.com/liuj-42/webdev
> Every lab you turn in will have a README.md file. This file will contain a running work log of everything you did for this lab. I especially want to know where you got stuck along the way and what you did to get out of being stuck. One to two sentences isn’t going to cut it here: this is the only opportunity you are going to get to document your own progression so take it seriously. At the end of the semester, I should be able to read through all the README.md files and have a good idea of your growth--as should you!

1. separate css/js, js defer attribute
All I had to do was add a script tag at the bottom of the file and a link tag at the beginning for the js and css.
3. css more efiicient selectors
	- got rid of duplicates (.points .rank, .today-answers .yesterday-answers, etc.)
	- combined classes with only 1 attribute in them 
4. js letters and todayletters and not as many getElementById calls
	- many getElementById calls that just added css once and never changed anything all
	- reduced the number of getElementById calls to 34
5. changing a href from "." to "#"
	- href="." will refresh the page, while '#' just moves you to the top of the page
7. replace hexagon images with css hexagons instead
	- I learned about implmenting variables and pseudoelements, I looked a lot of tutorials for this and either this step or the 4th optimization was definitely the one that took the longes.
9. compress letter images
	-  I uploaded this to a site and just resized them and downloaded the resized image
11. compress css and js
	- I pasted this to a minifier website and replaced my css/js files with it.

> Additionally, you must cite any tutorials/walkthroughs/YouTube videos/etc. that you used to create both the group portfolio and your personal portfolio. Plagiarism is no good! If you looked at it, you drop the link in your cited sources list. Simple as that. Failure to cite all referenced works will result in a zero for the assignment and a full letter drop in your final grade. When in doubt, email me or the TA.

https://www.toptal.com/developers/cssminifier/
https://jscompress.com/
https://www.w3schools.com/js/js_loop_for.asp
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/switch
https://jtauber.github.io/articles/css-hexagon.html
https://eager.io/blog/communicating-between-javascript-and-css-with-css-variables/
https://developer.mozilla.org/en-US/docs/Web/CSS/border-width
https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/style
https://www.samanthaming.com/tidbits/83-4-ways-to-convert-string-to-character-array/
https://stackoverflow.com/questions/5775469/whats-the-valid-way-to-include-an-image-with-no-src