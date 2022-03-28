<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Neil Evans(nme6)</td></tr>
<tr><td> <em>Generated: </em> 3/27/2022 10:50:26 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/hw-html5-canvas-game/grade/nme6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>The game I chose to edit/modify was the &quot;Collect the Squares&quot; game by<br>Ben Centra.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/M6/html5.html">https://nme6-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/33">https://github.com/nme6/IT202-010/pull/33</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>My first change/modification is related to adding a second square for the player<br>to collect and having it randomly generate the same way that the first<br>green cube is (within the canvas&#39; region/borders). It functions exactly the same as<br>the original square that the user collects but acts separately (so to speak)<br>when it comes to random generation as it has its own functions and<br>variables to control it.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/160316392-71fcef66-4804-4830-abf3-70e9d3316718.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of the two randomly generated squares (that the user collects for<br>points) working as expected.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/160315494-89017c13-8cfa-4640-8cf0-0d44a153205b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of before and after in the code showing the changes made<br>to make the code work within the game for adding another randomly generating<br>square that the player can collect.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>My second change/modification is allowing the user to replay the game via pressing<br>the SPACEBAR on their keyboard. The way it functions is very simple actually.<br>The same area that does the &quot;keydown&quot; event for all the arrow keys<br>for controls is where I added a keybind for the keycode of SPACEBAR<br>(32) that triggers the page to reload via &quot;window.location.reload()&quot;. As previously stated, pressing<br>SPACEBAR reloads the page. The text at the end of the game is<br>also changed to reflect the user being able to do this and has<br>moved the end screen text around as well to fit all the old<br>text and new added text on the canvas nicely. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/160316435-6d3c071c-ef9c-4d6d-94ba-6b6e60bc21ac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot showing that the text is popping up for how to replay<br>for the user. If I was able to submit a gif (let alone<br>properly create one to show it in action), the gif would have shown<br>me hitting spacebar (somehow) and the page reloading (which is how the game<br>restarts).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/160315553-78082088-0814-4ac2-8403-d074c2e22c8e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of before and after in the code showing the changes made<br>to make the code work within the game for adding a replay function<br>via reloading the page.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned during this assignment that I am not the best when it<br>comes to HTML5 Canvas and games and coding all this stuff in JavaScript.<br>It took me 3+ hours to completely figure all this out and make<br>it work properly. I understand overall what this homework was meant to do,<br>but I am admitting now that I am not as skilled as I<br>expected when it comes down to it at the end of the day.<br>If I were to do this again, I would probably still take 3+<br>hours to figure out 2 new features that would work properly.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/hw-html5-canvas-game/grade/nme6" target="_blank">Grading</a></td></tr></table>