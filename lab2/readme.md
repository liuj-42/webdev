# Lab 2

This is the readme file for the first lab of Web Systems & Development class. 
RCSID: liuj42

Link to repo for this class: https://github.com/liuj-42/webdev

discord tag: `e g g#0507` or `᲼᲼#7009` (the id is 190556758362685442) and both accounts have egg profile pictures

> Every lab you turn in will have a README.md file. This file will contain a running work log of everything you did for this lab. I especially want to know where you got stuck along the way and what you did to get out of being stuck. One to two sentences isn’t going to cut it here: this is the only opportunity you are going to get to document your own progression so take it seriously. At the end of the semester, I should be able to read through all the README.md files and have a good idea of your growth--as should you!

I had used the accordion widget before on my personal website in intro to ITWS, so I let my group members that I could creat the initial layout of the site with the constution split up by articles/ammendments and my other group members would then add the annotations and make the website look better.
After messing with the accordions for a bit trying to get them to work, I settled on making 1 accordion section per article and putting all of the sections into divs inside the accordion section. I had some trouble with figuring out how to make a nested accordion, but after some experimenting and googling I figured out a way. The thing that I got stuck on the most was caused by me misunderstanding what I was looking at and a typo - I wanted to center align the accordions and make them a bit les wide. There was a section on the jQuery widget website for a resizeable accordion that I thought would match what I was lookiing for - I thought that I needed this in order to resize the accordion, but it turns out that I didn't. I spent a long time trying to figure how to get it work, and after finally getting it work I realized that I didn't need it. One reason why I thought that I needed the resizable thing was because I had actually misspelled the name of my stylesheet in my head of the html file, so I didn't see any changes that were supposed to show up with my stylesheet. I eventually realized this and once I fixed this and removed the resizable element in my html file. Overall this project was interseting as I worked with my group for this project and instead split up the tasks with each other.

> Additionally, you must cite any tutorials/walkthroughs/YouTube videos/etc. that you used to create both the group portfolio and your personal portfolio. Plagiarism is no good! If you looked at it, you drop the link in your cited sources list. Simple as that. Failure to cite all referenced works will result in a zero for the assignment and a full letter drop in your final grade. When in doubt, email me or the TA.

1. https://jqueryui.com/accordion/
	- I used this site as a guide on how to make an accordion and how to change the scale of it
2. https://www.w3schools.com/css/css_align.asp
	- I keep on forgetting how to center align a div so I come back to this link a lot
3. https://stackoverflow.com/questions/5723289/jquery-ui-accordion-in-accordion
 	- I first used this stackoverflow page in my first attempt at nested accordions, I had something like this:
```javascript
    $( function() {
        $("#accordion1", "#accordion2").accordion({
            heightStyle: "content"
        });
    } );
```
- This worked until I was messing the the CSS in order to try to center the accordion and after lots of troubleshooting (in the end it was actually me spelling "stylesheet" wrong) I changed the IDs to classes instead:
```javascript
		$( function() {
				$(".accordion").accordion({
						heightStyle: "content",
						active: false,
						collapsible: true
				})
		})
```
- I actually did this because of a problem that I was having that was unrelated in this stackoverflow page: 
	- https://stackoverflow.com/questions/27554092/jquery-ui-nested-accordion-clicking-on-child-accordion-closes-the-parent
