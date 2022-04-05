<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Neil Evans(nme6)</td></tr>
<tr><td> <em>Generated: </em> 4/5/2022 12:12:06 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/nme6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667214-195a8bfe-ce6e-4ff7-a583-eafe5ec16e2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Register message 1 (Duplicate email error)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667302-5019cc7f-9ef9-4453-afbd-65c16feec153.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Register message 2 (Duplicate username error)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667430-ea40a725-5d70-4b5b-854b-4cd6cf0518f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Register message 3 (Passwords don&#39;t match)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667527-1f72ec63-cb67-465e-9435-a34ad03d0af4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Register message 4 (Invalid email)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667755-f1758792-e3f9-448f-937f-a59133c26453.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Register message 5 (Invalid username)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667651-4dacfc4e-9467-4b30-96c0-431329af4e73.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Register message 6 (Succesful registration)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161669649-10cc51dd-886a-49ec-8214-e689270e2a33.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the users table (with newly registered user)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/37">https://github.com/nme6/IT202-010/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The process is simple. The user enters the required data into the fields<br>provided on the register page. The data is checked against both JavaScript Validation<br>and PHP Validation. If it passes in all regards during validation, it is<br>sent to the user&#39;s database to be added as a new user. In<br>return, it sends a flash message saying that the user has successfully registered.<br>If there are any errors in the entering of data in the fields<br>provided, when the user hits submit, they will be prompted with what mistakes<br>there are (whether it be email, username, or passwords that are the issue).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667863-f74ce586-c2bf-4eb6-b0c5-e7e1a46aad6c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login message 1 (Invalid email)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667918-688532a8-7710-4422-a7c4-7da5d82a682b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login message 2 (Invalid username)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668021-f69e9997-9379-473b-bb76-d0d27ac6a93c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login message 3 (Email/username cannot be empty)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668076-ee4d99a2-0873-4fd7-9c02-5505d807a8a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login message 4 (Successful login)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161672487-5b1bdeb1-713e-4ac8-878a-d04dd14a7779.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login (before) with email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161672516-307dbfc8-c573-46e5-8fbc-6edb36250b80.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login (before) with username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668275-7bc44e4b-9e69-45bb-872b-58c92a35e629.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Login message 4 (Successful login)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/37">https://github.com/nme6/IT202-010/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The process is simple here as well. The user is asked to input<br>their login credentials. If there is an error in their email or username,<br>they are prompted with the proper message. This is applies for an empty<br>email/username field as well. If the correct credentials are entered, they are logged<br>in and redirected to home.php. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161671274-b74c54c3-1299-4db9-b2d9-7902fe888063.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing what the logout screen looks like (as it redirects to login.php with<br>a flash message on the top to show you have successfully logged out)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161671478-56e337ab-9e0b-4967-9833-09725e464ea0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a user that has logged out trying to access home.php but being<br>redirected back to login.php with a message reflecting they don&#39;t have access to<br>the page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/32">https://github.com/nme6/IT202-010/pull/32</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The process for this is simple. The code for logout.php starts a session<br>very briefly and then resets the session that the user was loading. Due<br>to the way we coded logout.php, it redirects to the login.php with a<br>flash message saying that we successfully logged out and as such, disconnects the<br>user from their session of being logged in. The way the redirect for<br>access works is also easy to understand. In the code for nav.php, it<br>checks the function &quot;is_logged_in&quot; from user_helpers.php which checks if a user is logged<br>in. The function checks if the user is logged in and checks $redirect.<br>If the user isn&#39;t logged in and $redirect is passed, it causes the<br>website to react properly by redirecting the user to login.php with the flash<br>message saying that they can&#39;t access the page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161671478-56e337ab-9e0b-4967-9833-09725e464ea0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a user that has logged out trying to access home.php but being<br>redirected back to login.php with a message reflecting they don&#39;t have access to<br>the page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161672911-963e2965-9383-47cf-b593-6285c629e373.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Page shows that user doesn&#39;t have permission to the page as they do<br>not have the role required (admin)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161673038-0303c67b-c51e-4904-a5ff-0da6ba5aa962.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the Roles table with the only role on it (Admin)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161673103-c2abc0b9-9c85-4fa6-bcf3-4e1ddda7461b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the UserRoles table with data that shows that only the user with<br>the id 7 (neil123 on Users table) has admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/34">https://github.com/nme6/IT202-010/pull/34</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For the login-protected pages, this was already covered but I&#39;ll repeat myself. The<br>way the redirect for access works is also easy to understand. In the<br>code for nav.php, it checks the function &quot;is_logged_in&quot; from user_helpers.php which checks if<br>a user is logged in. The function checks if the user is logged<br>in and checks $redirect. If the user isn&#39;t logged in and $redirect is<br>passed, it causes the website to react properly by redirecting the user to<br>login.php with the flash message saying that they can&#39;t access the page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For role-protected pages, it works similarly but also not really. In user_helpers.php, there<br>is a function called &quot;has_role&quot; that checks the role of the user. In<br>any of the admin pages, this function is called and used to check<br>if the user has the &quot;Admin&quot; role. If they have the role, then<br>they are able to view the admin role-protected pages (and also have them<br>appear in the navbar (based on nav.php with the same function)). If they<br>do not have the &quot;Admin&quot; role, it will redirect them back to home.php.<br>In an ironic case of irony, if the user isn&#39;t logged in and<br>tries to do this, it will redirect to home.php which will then redirect<br>to login.php because the user is not logged in and therefore is not<br>allowed to see home.php. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161673728-33bf04c8-e3aa-4b5d-b1bc-8ef840c501b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing of the CSS styling of my website via the profile page as<br>that can show a large majority of the changes.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/37">https://github.com/nme6/IT202-010/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Since I have a lot of CSS, I will try to explain it<br>as briefly as I can. All fonts on the website (including inside fields<br>and buttons) are the same font-family (Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif; ). The<br>background on every page is changed to a darkish-red via background-color on my<br>body. Margin and padding are added to almost every element to properly space<br>them and keep them equal with each other depending on the page. The<br>alerts (every type) have been reformatted to only take a small portion up<br>of the screen instead of a giant bar across the screen. There is<br>an animation on any and all &quot;submit&quot; type buttons from forms that changes<br>when it has been hovered over.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668021-f69e9997-9379-473b-bb76-d0d27ac6a93c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that login.php wont allow an empty email/username field when trying to login.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161667863-f74ce586-c2bf-4eb6-b0c5-e7e1a46aad6c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that login.php is saying an email is invalid with an error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/37">https://github.com/nme6/IT202-010/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>I made the messages user-friendly by making tweaks to what they said or<br>changing the color or something. Previously, PHP flash messages/errors that popped up wouldn&#39;t<br>have any color other than teal for errors and whatnot. So I tweaked<br>each to properly fit the error/message sent. I don&#39;t know how I could&#39;ve<br>made them more user-friendly other than making them simple to understand. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161674979-eadbd2ea-cc36-4209-8bfa-7ac949d93f8b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the user can see their profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/37">https://github.com/nme6/IT202-010/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The process for (view only) on profile.php is simple. There is PHP code<br>that pulls the email and username of the current user from the table<br>and auto-fills the form based on the user.  They are pulled by<br>the &quot;get_user_email()&quot; and &quot;get_username()&quot; functions that do exactly as they say. Both functions<br>check if the user is logged into the website. It needs to check<br>login first because the user key may not exist. If the user is<br>logged in, it then pulls from the proper column in the Users table<br>for the data it needs and sends that back to where the function<br>is being called. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668275-7bc44e4b-9e69-45bb-872b-58c92a35e629.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Profile message 1 (Profile saved (email and user) but Current password is<br>invalid)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668368-9134c726-36b4-4791-816c-a278f6b0b9f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Profile message 2 (Profile saved (email and user) but new passwords don&#39;t<br>match)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668482-07e375d0-95a4-4adf-807a-14c1f960d1c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Profile message 3 (Invalid email and invalid username error (input was neil123@e<br>and neil123!))<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161668596-d508482c-e499-48e6-bea0-56f6f39fe190.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Profile message 4 (successful edit/profile saved AKA success)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161675420-3433ea5c-674c-479e-bffd-bd8c6c7527d3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the user can edit their profile and successfully save the new<br>data.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161669649-10cc51dd-886a-49ec-8214-e689270e2a33.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Before Users Table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161675587-7547fd86-d882-4743-9284-eaa1bdf4e932.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing After Users Table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/37">https://github.com/nme6/IT202-010/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The process for edit only works simply too. There is PHP and JS<br>validation checking that the fields are correct. If the email is typed incorrectly,<br> it prints a flash error message saying so. This applies for email,<br>username, current password (if typed incorrectly), and the new password and confirms password<br>(if they don&#39;t match). Once done, the user can hit the submit button.<br>If they meet all criteria properly, their data in the Users table will<br>be updated to reflect such. If not, as stated above, the proper errors<br>will be displayed. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161676254-2c464b83-490b-4a3b-b217-23a4871fe38c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the Proposal.md is marked properly and filled out properly with all<br>links, dates, and checkmarks.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/161677322-e7dba28f-780b-45ec-b1ae-d3385c4d6ef4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot showing all 9 issues are done/closed on the project board.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/nme6" target="_blank">Grading</a></td></tr></table>