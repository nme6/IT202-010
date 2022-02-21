<table><tr><td> <em>Assignment: </em> JavaScript & CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Neil Evans(nme6)</td></tr>
<tr><td> <em>Generated: </em> 2/20/2022 11:55:43 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/javascript-csschallenge/grade/nme6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul>
<li>Reminder: Make sure you start in dev and it&#39;s up to date<ol>
<li><code>git checkout dev</code></li>
<li><code>git pull origin dev</code></li>
<li><code>git checkout -b M3-Challenge-HW</code></li>
</ol>
</li>
</ul>
<ol>
<li>Create a copy of the template given here: <a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a> </li>
<li>Implement the changes defined in the body of the code</li>
<li><strong>Do not</strong> edit anything where the comments tell you not to edit, you will lose points for not following directions</li>
<li>Make changes where the comments tell you (via TODO&#39;s or just above the lines that tell you not to edit below)<ol>
<li><strong>Hint</strong>: Just change things in the designated <code>&lt;style&gt;</code> and <code>&lt;script&gt;</code> tags</li>
<li><strong>Important</strong>: The function that drives one of the challenges is <code>updateCurrentPage(str)</code> which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li>
</ol>
</li>
<li>Create a branch called M3-Challenge-HW if you haven&#39;t yet</li>
<li>Add this template to that branch (git add/git commit)</li>
<li>Make a pull request for this branch once you push it</li>
<li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li>
<li>Create a new file <strong>m3_submission.md</strong> file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li>
<li>Add, commit, and push the submission file</li>
<li>Close the pull request by merging it to dev (double-check all looks good on dev)</li>
<li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li>
<li>Complete the merge to deploy to production</li>
<li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Primary page with the checklist items completed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/154891711-11f7eb81-d7ae-4d44-8b3d-54ed7903c27b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the primary page with the checklist items completed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot showing after the login link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/154891741-3fa90b79-e2cd-44cb-be31-f93477d03c13.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing after the login link is clicked<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot showing after the register link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/154891759-8c4dbf7e-e82f-4ad3-b8e5-0a433ebf52b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing after the register link is clicked<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Screenshot showing after the profile link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/154891768-90530320-d510-4543-a7f6-59429f876527.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing after the profile link is clicked<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Screenshot showing after the logout link is clicked (be sure to include the url)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/154891793-472af987-c018-4374-8306-0b0b2c88093b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing after the logout link is clicked<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>I made the navigation horizontal by taking away the list style type (the<br>bullets) and hiding any overflow for &quot;nav &gt; ul &gt; li&quot; (any &quot;li&quot;<br>element thats parent is a &quot;ul&quot; element thats parent is a &quot;nav&quot; element)<br>causing the links to sit on one line.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>I removed the navigation list item markers by setting the list style type<br>for &quot;nav &gt; ul &gt; li&quot; (previously explained above) to none which removes<br>the item markers.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>I gave the navigation a background by setting the &quot;background-color&quot; property in the<br>CSS to #5a3333 (a darkish red).<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <p>I made the links (or their surround area) change color no mouseover/hover by<br>setting the &quot;nav ul li a:hover&quot; to have a &quot;background-color&quot; property of #422626<br>(a darker red than the normal nav bar background).<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>With two separate &quot;ul li&quot; CSS declarations, I declared both to &quot;:not(nav *)&quot;<br>meaning that it would only change the &quot;ul&quot; and &quot;li&quot; properties elsewhere in<br>the HTML file to do two things. The first declaration got rid of<br>the style list type by setting it to none. The second declaration adds<br>a &quot;::before&quot; property which inserts something before the elements being declared (in this<br>case, &quot;ul&quot; and &quot;li&quot;) and I set it to the CSS unicode of<br>a checkmark (\2713). I also added some padding to the second declaration to<br>space the text a bit from the checkmark bullets.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <p>I made the h1 tags and anchor tags uppercased by declaring in separate<br>statements (&quot;nav li u a&quot; for the anchor tags and &quot;h1&quot; for h1)<br>to &quot;capitalize&quot; using the &quot;text-transform&quot; property which will capitalize the first character of<br>whatever it&#39;s applied to.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I chose the styling of my choice because I like the color red<br>so I kinda just went with a duller red palette as to not<br>burn someones eyes out with like a bright crimson red or something of<br>the sort. I chose beige for the text color because white just seemed<br>to plain to me so I wanted to add a little color to<br>it.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>Styling the challenge list doesn&#39;t impact the navigation list because I set the<br>CSS to not affect the navigation list. They also use some different elements<br>with the navigation list using mostly anchor tags and some unordered lists and<br>the challenge list using mostly an unordered list and headers. I just had<br>to declare the two separately and make sure they don&#39;t overlap each other.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>I used the getElementsByTagName(&quot;a&quot;) to grab the tag of each link in the<br>navigation list. From there, it&#39;s just setting up a for loop to say<br>when &quot;x&quot; link is clicked, change the value of the innerText (which is<br>referenced in the JS code we aren&#39;t allowed to remove that&#39;s linked in<br>the challenge HW) to what the link is called. From there, it does<br>that and there is a &quot;getCurrentSelection();&quot; line at the end of the <script><br>tags to actually make sure it goes through and updates. In simpler terms,<br>the JS code that is linked has a "updateCurrentPage()" function that will update<br>the h1 whenever a link is clicked.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>The updateCurrentPage() function from the JS script given to use for the HW<br>runs through the for loop written by me and whenever a link is<br>clicked, the title tag changes based on the link clicked.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>I learned that HTML and CSS (and JS) were a lot harder than<br>I expected them to be. I also had an error with trying to<br>get the &quot;Start&quot; and &quot;Challenge down because they were touching the navigation bar<br>on the right side. Luckily, a fellow student was able to help me<br>figure out a solution to it (adding whitespace and a line break (via<br>\A) and changing the font size so they would move down).<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/12">https://github.com/nme6/IT202-010/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/M3/challenge.html">https://nme6-prod.herokuapp.com/M3/challenge.html</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/javascript-csschallenge/grade/nme6" target="_blank">Grading</a></td></tr></table>