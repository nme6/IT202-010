<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Bank Project</td></tr>
<tr><td> <em>Student: </em> Neil Evans(nme6)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 8:54:08 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-4-bank-project/grade/nme6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168085329-7913c7e4-0eaa-4e41-ae4a-4901a3479f18.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the new column on the Users table (visibility) for toggling public/private profiles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168086021-e48b89be-ce14-43f8-9398-8b44ec2322a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168087583-263aae92-1560-4e60-9549-d3e1092eb419.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing updated profile view view (email is NOT shown publicly)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/91">https://github.com/nme6/IT202-010/pull/91</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://nme6-prod.herokuapp.com/Project/profile.php">http://nme6-prod.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>The logic behind public/private profiles works as follows. First, I declare the variables<br>$user_id, $isMe, and $edit.  The $user_id variable is set to a safer<br>echo of id with the value equaling what the function &quot;get_user_id()&quot; pulls. The<br>$isMe variable is set equal to a little PHP formula that checks if<br>$user_id is IDENTICAL (===) to the value in the &quot;get_user_id()&quot; function. The $edit<br>variable is set to either a true or false value (whether the user<br>is editing or not) regardless of the data. By default, it is set<br>to false so that you will be in view mode if you are<br>looking at the profile.php page.</p><br><p>The PHP IF statement that initially only checked if<br>the save variable is set in the POST state is now checking for<br>not only that but also checking if $isMe and $edit are true. What<br>that means specifically is that it is allowing profile updating if the profile<br>belongs to the user visiting this page and it&#39;s in edit mode. If<br>the IF statement is met, it will allow editing as per usual. The<br>only real addition to the code so to speak is the addition of<br>the &quot;visibility&quot; variable to any piece of code referencing specifically the Users table<br>and a standalone declaration of $visibility with a ternary operator determining the visibility<br>(1 being visible, 0 being not visible). </p><br><p>Going down to what is actually<br>shown on screen, we just add visibility to the list of pre-declared variables<br>and it is set by putting it equal to the function &quot;get_user_visibility()&quot; (which<br>checks if the user is visible (if they are a 1 or a<br>0 on the table)). The button is based on an IF-ELSE statement that<br>first checks if $isMe is true (if the user IS the user viewing<br>it). The second check in the IF-ELSE statement is checking if editing is<br>true (if editing is enabled (true) or not (false)). If $isMe is true,<br>the button (in general) will appear to the user. Depending on the default<br>state (which it should be false (and is)), the button will either show<br>&quot;View&quot; or &quot;Edit&quot;. If it is in view mode ($edit is false (!$edit)),<br>then the user will only see their username, first name, and last name<br>that they&#39;ve input on their profile under the &quot;Edit&quot; button. If the user<br>clicks on the &quot;Edit&quot; button, it will trigger the next IF statement which<br>checks if $isMe and $edit are true (which they should be once clicking<br>the &quot;Edit&quot; button). This will display the entire Profile editing page, reflect the<br>change in the URL, and there will now be a switch that toggles<br>profile visibility ($visibility) that the user can click to change their visibility once<br>they save changes.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to open a savings account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the create account page for savings with the form filled in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168131203-70c11b45-cb74-4314-9352-5d5838f5242d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a screenshot of the create account page with the form filled in<br>for creating a savings account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the code that determines the APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168131539-06c7bcd0-80ab-40e1-b04f-165c10d001a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of the code that determines the APY (pulling from the System_Properties<br>table the appropriate apy based on the apy_type)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the related error and success messages when creating a savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168134358-cce7d55a-7c57-4ef5-a4af-827623c78004.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message shown when inputting less than $5<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168135131-33cbe447-9414-4f55-9ab3-1966a0fe46e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message showing the savings account created (at the top of the list)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the db showing the new savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168136230-fc85e122-e190-4d14-a294-dc9462d2cb19.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the Accounts table with the new savings account (with all other accounts<br>censored as they aren&#39;t needed to be seen). You can also see the<br>APY for savings account in the &quot;apy&quot; column (0.06% (found based on FDIC<br>tables from April 2022))<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/92">https://github.com/nme6/IT202-010/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://nme6-prod.herokuapp.com/Project/create_account.php">http://nme6-prod.herokuapp.com/Project/create_account.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the logic behind the APY value</td></tr>
<tr><td> <em>Response:</em> <p>The logic behind the APY value is as follows. I will first list<br>where I got the numbers at the very least so you have sources:<br>-<br>0.06 APY for Savings (from FDIC (<a href="https://www.fdic.gov/resources/bankers/national-rates/index.html">https://www.fdic.gov/resources/bankers/national-rates/index.html</a>))</p><br><ul><br><li>5.74 APY for Loans (from Bankrate,<br>specifically LightStream (<a href="https://www.bankrate.com/loans/personal-loans/low-interest-rates/">https://www.bankrate.com/loans/personal-loans/low-interest-rates/</a>))</li><br></ul><br><p>Now to the ACTUAL logic behind the APY value. The function<br>of get_APY() is that it takes a variable (the default/replaceable variable when in<br>use is $apy_type). What the actual function does is that it builds a<br>query based on the System_Properties table that was made to hold the apy_type<br>and apy values. In the table, there are 3 apy_type and apy values<br>that match each apy_type. Those 3 apy_type are &quot;checkings&quot;, &quot;savings&quot;, and &quot;loan&quot;. The<br>apy for each apy_type is as follows (read as percentages IRL): 0.06 <br>for &quot;savings&quot;, 0.00 for &quot;checkings&quot;, and 5.74 for &quot;loan&quot;. Anyways, got a bit<br>sidetracked, we&#39;re talking about what the actual function does. It will build a<br>query based on apy_type and apy from the System_Properties table and the parameters<br>will be set to whatever $apy_type was entered into the function. The database<br>will be called, the statement will be prepared based on the query, the<br>$results array will be created, you know, the usual. Then a try-catch block<br>is ran. The TRY statement of the try-catch block executes the statement based<br>on the parameters and checks if $results is empty. If it is empty,<br>it will flash an error message saying &quot;No accounts found&quot;. If it isn&#39;t<br>empty,  $results will be set equal to $r (which is doing a<br>fetchAll on PDO (specifically FETCH_KEY_PAIR) which means its fetching ALL key pairs found<br>within the PDO. The CATCH statement of the try-catch block catches any PDOException<br>errors and if they are caught, then an error message will be displayed<br>saying the error. Finally, at the bottom of the function, the variable $apy<br>is set to a safer echo based on the $results of $apy_type and<br>is returned as the result of running the entire function.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to take out a loan </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the form for opening a loan along with the system generated APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168144679-32fd72d0-c6e0-4e24-afca-d18f884ee1b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the form for opening a loan along with the system generated APY<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing the user's accounts that can be deposited into</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168145003-0515d120-5332-4964-9cf1-afa0288fb42f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the accounts the user has that can have a loan deposited into<br>it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot from the db showing the loan account has a negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168149472-c2e0eaeb-eb0e-419d-a096-3711cc33cbec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the DB with the loan account. It isn&#39;t negative because of a<br>constraint I have in my SQL when the account table was created. It<br>still works properly though<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot from the User's account list page showing the loan displaying as a positive value</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168151693-2547f525-052f-4b40-adc5-d4a32085f4cd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the loan is displaying as a positive value (and negative where<br>it needs to be)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the code logic for updating the loan's balance per the requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168149949-1c9c25f4-1255-43ae-a0c4-f536b0d155f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the code logic for updating the loan balance based on requirements (it<br>being set to negative)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot showing user can't transfer more money from a loan account (alternatively don't show loan accounts in the dropdown for transfer transactions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168151088-04969783-a8e5-46e7-85fd-0e898d2182a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that user can&#39;t transfer money if its a loan from deposit.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168151214-421d767a-43ab-41ad-a206-f307d567bcdc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that user can&#39;t transfer money if its a loan from withdraw.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168151416-378487b4-6a53-4e3d-9a16-c33a293c3157.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that user can&#39;t transfer money if its a loan from external_transfer.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add screenshots of any other errors and success</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168151935-56aeccb2-b5ec-45ea-b60c-3c3baaaba4d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message showing that the loan amount is too small (less than 500)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168148501-983806f7-a284-47d9-a1ce-907b32a63488.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the loan displaying as a positive value on the account list page<br>(my_accounts.php) (with a success message on creation and an error message (which I<br>can&#39;t seem to fix))<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/93">https://github.com/nme6/IT202-010/pull/93</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to create/open loan page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/loans.php">https://nme6-prod.herokuapp.com/Project/loans.php</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain the special code implementations for loans</td></tr>
<tr><td> <em>Response:</em> <p>The special code implementations for loans were simple enough (so to speak). For<br>keeping transfers the same as normal, I just added a section where it<br>checked if the money being transferred was going to a loan account. This<br>check also had a check inside it checking if the owed amount left<br>was less than the transferred amount. If it was, it would display a<br>message showing how much left you owed. If it didn&#39;t (because you paid<br>off the loan), it would do the transfer as normal but flash a<br>message saying &quot;Congratulations! You&#39;ve paid off your loan!!!&quot;. For a completed loan, the<br>code knows when it is 0 and won&#39;t allow any transfers into the<br>account since the loan was paid off (and its a loan account). The<br>close account button will show up as it should in my_accounts.php for closing<br>the account.  <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Listing accounts should show applicable APY or - if none is set for a particular account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the account list showing a combination of checkings, savings, loans, etc</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168169022-61c1eb6f-2519-40db-b8a7-6d99580ba940.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the account list with a combination of checkings, savings, and loans<br>account.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168169241-bfd72183-8893-484d-98d0-a6eca9b28d91.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Relevant screenshot showing APY shown when More Info is clicked for Savings accounts<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168169318-ec0c22d2-e118-4297-9b62-fd349696654b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Relevant screenshot showing APY shown when More Info is clicked for Loan accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/92">https://github.com/nme6/IT202-010/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Account list page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/my_accounts.php">https://nme6-prod.herokuapp.com/Project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> User will be able to close an account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing validation that an account can't be closed if it has a balance (regular account and loan)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168169911-27cc76d1-5aaa-43ce-aa1f-c2e0d8bcb167.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the validation code that allows an account to close or not. Literally<br>regardless of what account type, if the balance is 0 for that account,<br>the close <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168170216-9b1dc406-00b4-4083-a1e9-e0cdaa5ad571.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that an account with a balance that isn&#39;t 0 (aka has money<br>still) cannot be closed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168170136-d5c61c88-d5dd-4d9b-b52f-ecd8a6f0d300.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that an account with a balance of 0 can be closed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot from the DB showing a closed account as inactive</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168172641-d0a9aa12-607f-459f-942d-9e1fae9d46cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the database sees the clsoed account as inactive (I gave up on<br>scribbling, too time consuming). To see the closed account, look at the row<br>for id 20.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the various account list queries (in the code) showing the changes to use is_active (be sure to include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184685-0500dbf8-40b4-4b11-8e7e-3e218e1b45cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in my_accounts.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184734-e46265de-4a61-4a0e-8955-1433285e0f51.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in get_account_balance.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184793-bb5ee454-56d9-4c01-8a49-5ae3b4482c77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in get_account_type.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184840-9695366d-9ed1-4e1d-b798-84b1d5c063ac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in deposit.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184906-e7fed9c3-1019-4aad-a2d1-7adaf609d60e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in withdraw.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184954-96f3a044-a7f6-41b5-a571-a47d997d3ae1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in transfer.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168184986-5bef4531-17b0-4c77-a121-e1f1a6d07204.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in external_transfer.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168185067-7d8d6bb6-a811-4bc5-b4a1-e276eedf5998.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the account list queries in the code that change in loans.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/94">https://github.com/nme6/IT202-010/pull/94</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to the page where a user can close an account</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/my_accounts.php">https://nme6-prod.herokuapp.com/Project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin role </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of user search with search results shown (show the user's name, link to view their accounts, link to open account, and link/button to deactivate user)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168185704-783b4a67-ca0f-47a7-ad06-02b835588259.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the search results on the Manage Users page (manage_users.php) with all the<br>proper things shown (filter, buttons to open accounts and deactivate users)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the updated User's table of the new is_active column</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168186437-f497cc9f-3bb2-4858-bf05-10495cf7cbff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the updated User&#39;s table with the new &quot;is_active&quot; column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the admin's view of listing another user's account (from the user search results link) Show a mix of frozen and unfrozen accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168186695-2af6405d-a1a1-4b32-bd4c-65e1ff84b1cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the admin&#39;s view of another user (deactivateme01 (my account that I will<br>deactivate later)) and their accounts. The savings account is frozen, the checkings account<br>is unfrozen. As per the details, the FROZEN account cannot be interacted with<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the admin's view of listing another user's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168187565-beb9b00d-1532-462f-902e-447318293e47.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing admin&#39;s view of another user&#39;s transaction history<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of account lookup page with partial result matches (ensure it has links to the transactions page of the account and the ability to freeze/unfreeze)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168187897-243aa700-db31-4056-b471-6c895be8a6f3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing using partial results (only the first name) on the view accounts<br>page of any users.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/95">https://github.com/nme6/IT202-010/pull/95</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/manage_users.php">https://nme6-prod.herokuapp.com/Project/manage_users.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/view_accounts.php">https://nme6-prod.herokuapp.com/Project/view_accounts.php</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code logic for the different views and admin actions</td></tr>
<tr><td> <em>Response:</em> <p>A brief explanation will not be fully brief for the different views. I&#39;ll<br>just do two paragraphs for each view (Manage Users and View Accounts). This<br>first paragraph will talk about the Manage Users view. The logic for the<br>two buttons once a search is done (Create Account, Deactivate User) is similar<br>to other code implemented. For the &quot;Open An Account&quot; button, it literally just<br>activates a similar copy of the code from create_account.php on the &quot;manage_users.php&quot; page.<br>The logic for deactivating a user when clicking the &quot;Deactivate User&quot; button is<br>similar to closing an account on my_accounts.php. By that, I mean there are<br>slight variable changes here and there (&quot;c_aid&quot; to &quot;de_uid&quot; in the check of<br>the IF statement, &quot;Users&quot; instead of &quot;Accounts&quot; in the query ($q), etc.). The<br>layouts for each are revealed similarly to how my_accounts.php gets things to display<br>when clicking &quot;More Info&quot;. When the &quot;Filter&quot; button is clicked, the search results<br>are generated similarly to how items are generated in my_accounts.php. When &quot;Open An<br>Account&quot; is clicked, the account creation is shown via an IF statement checking<br>if &quot;open&quot; is set (which is the name of the button in the<br>code). When &quot;Deactivate User&quot; is clicked, this triggers a pop-up asking if the<br>user is sure. If the user says &quot;OK&quot; and deactivates the user, the<br>code is triggered and the user is deactivated.</p><br><p>Now, for the explanation of the<br>View Accounts page. Similar to Manage Users, one button has its code almost<br>completely ripped from &quot;my_accounts.php&quot; and the other button has similar functionality to closing<br>an account in my_accounts.php. The More Info button takes the ripped code cake<br>as the button triggers basically almost the exact same code that made the<br>same tables from &quot;my_accounts.php&quot; display on the View Accounts page. Even the filtering<br>and pagination code for the &quot;More Info&quot; button on the View Accounts page<br>is almost the exact same code. For the &quot;Freeze Account&quot; button, the code<br>is again similar to closing an account, just replaced variables again (&quot;c_aid&quot; to<br>&quot;freeze_aid&quot; in the check of the IF statement, etc.).  The layouts for<br>each are revealed similarly to how my_accounts.php gets things to display when clicking<br>&quot;More Info&quot;. When the &quot;Filter&quot; button is clicked, the search results are generated<br>similarly to how items are generated in my_accounts.php. When &quot;More Info&quot; is clicked,<br>the information in the tables is shown the same way my_accounts.php loads the<br>info, just under the &quot;View Accounts&quot; page instead. When &quot;Freeze Account&quot; is clicked,<br>this triggers a pop-up asking if the user is sure. If the user<br>says &quot;OK&quot; and freezes the account, the code is triggered and the account<br>is frozen.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168190036-5c6a25a1-fb68-44b1-a7fb-27f4b8fcbbc0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the first 3 of 6 features on Proposal.md<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168190143-5f0b84c4-48c2-4773-b3b3-98241d0445d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the last 3 of 6 features on Proposal.md<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/168190218-02b369c4-7955-4b46-bf1d-d0eea1dafb69.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing completed/done/closed issues on the project board for Milestone 4<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-4-bank-project/grade/nme6" target="_blank">Grading</a></td></tr></table>