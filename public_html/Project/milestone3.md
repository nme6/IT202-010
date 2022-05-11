<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Neil Evans(nme6)</td></tr>
<tr><td> <em>Generated: </em> 5/11/2022 12:43:35 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-bank-project/grade/nme6" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167727886-9d9c7471-448a-4ca4-bbca-6c8ebe388bff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a screenshot of the transfer page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167728669-44b484c8-c4a7-40c0-b4c7-d8e78aa00321.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing dropdown values for source account options<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167728743-afd0c551-b7ed-4807-a1c3-fdc4b90ce146.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing dropdown values for destination account options <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167729100-259df2bf-576c-41ae-8dfa-7ec75d891cc3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that user can&#39;t transfer more funds than they have when trying to<br>transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167729236-42e12474-4b48-440e-841c-d7591b45ad67.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the user can&#39;t transfer to the same account when trying to<br>transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167729587-25726eb0-3218-4290-9bda-cd7b3d07d324.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that you can&#39;t transfer a negative balance when trying to transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167730809-60b124a7-1498-499f-b551-a202c61ff736.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the generated transaction history (with a large censor over the rest<br>of the transactions because I wanted to censor it)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167732253-a2a3785f-1f5b-46de-8a7b-45036acd8f69.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the affected accounts in the table (with all other accounts (except<br>world/system account) censored)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>Starting with the dropdowns first. The dropdowns are grabbing onto the $accounts array<br>generated (basically the same array variable as seen in deposit and withdraw). They<br>are being generated basically the same as deposit and withdraw generated their dropdown<br>lists. By that, I mean there is a <select> tag that houses the<br>entries which is being populated via PHP statements. Specifically, it is first checking<br>(via an IF statement) if the $accounts array is empty. If it is,<br>display the appropriate message, otherwise, follow the FOREACH loop. This FOREACH loop checks<br>for each $account in the $accounts array and creates an option within the<br><select> tag for each account. When creating each option, it safer echoes the<br>info for the option (the account number, the account type, and the balance<br>(in that order formatted as so: &quot;AccountNumber (Type: (Account_Type); Balance = $X)&quot;). This<br>is done till it reaches the end of the $accounts array. Then, as<br>it should, there is PHP tags that end both the FOREACH loop and<br>the IF statement. Then, the <select> tag is closed. As I stated above,<br>this is repeated as one is needed for both source and destination accounts.</p><br><p>Now,<br>for the code process/flow how transfer works. The first half of the code<br>is quite literally the same as Deposit and Withdraw. Since I&#39;m gonna have<br>to re-explain the top part, here is how it goes. The code queries<br>all accounts under the user currently logged in. It will organize it by<br>descending order of last created (aka the most recently created at the top,<br>the oldest at the bottom). As per most of the code, it will<br>prep the database and get ready. It will fetch every account and store<br>it in the $results variable and set the $accounts array equal to $results.<br>These results will be displayed in a dropdown (noted as tag in HTML<br>code). If there are no accounts found, it will let the user know<br>via flashing an error message saying &quot;No accounts found&quot;. Try-catch does what it<br>has done for the majority of explanations with the catch catching any PDOExceptions.<br>and reporting the error in a flash message.</p><br><p>Now, we move onto the bottom<br>part that does the actual transfer of money between the accounts (both owned<br>by the user). The giant IF statement will check if 3 variables are<br>declared in POST (src_id, dest_id, and transfer). If it isn&#39;t met, then a<br>message will be flashed an error message saying &quot;No account has been selected&quot;.<br>If it is met, then it goes into the rest of the code.<br>This code sets the variables of $transfer, $src, $dest, and $memo to their<br>safer echoed equivalents (transfer, src_id, dest_id, and memo (under the POST)). There is<br>then a chain of an IF-ELSEIF-ELSE statements. The first IF statement of the<br>entire chain is checking if the source and destination account are the same,<br>and if this is the case, an error message will be shown to<br>the user saying &quot;Cannot transfer to the same account&quot;. If it isn&#39;t the<br>case, the first ELSE-IF statement comes into play and checks if the amount<br>being transferred isn&#39;t greater than 0. If it isn&#39;t greater than 0, an<br>error message will be shown saying &quot;Input a value to transfer (Greater than<br>0)&quot;. If it IS greater than 0, the next ELSE-IF statement is ran<br>and it will check if the amount being transferred is greater than actual<br>balance of the source account. If it is greater than the source account&#39;s<br>balance, an error message will be shown saying &quot;Insufficient Funds&quot;. If it isn&#39;t<br>greater than the source account&#39;s balance, the ELSE statement finally runs. This ELSE<br>statement houses the actual transferring of the amount between accounts. It calls the<br>balance_change function with the method knowing that it is a transfer through both<br>the balance_change type and the $transaction_type variable being set to &quot;transfer&quot;. Within the<br>same balance_change function, it is also setting the account ID to the $src<br>(the source account selected, setting the account_src (where the money is coming from)<br>to equal $src (the source account selected), setting the account_dest (where the money<br>is going) to equal $dest (the destionation account selected), and whatever the memo<br>entered by the user is. The code then refreshes both the source and<br>destination accounts selected to update their balances. A flash message is sent saying<br>&quot;Transfer was successful&quot; once the my_accounts.php loads (which is where the user is<br>redirected to after a successful transfer).<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/74">https://github.com/nme6/IT202-010/pull/74</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/transfer.php">https://nme6-prod.herokuapp.com/Project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167729962-b9aced07-379f-4f2a-852d-c0831f5eb939.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a successful transfer first (look at the top and bottom accounts (202202202211<br>and 202202202203)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167758156-fe13b4ba-339c-425b-8477-fca1fc2f2985.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the new transfer transaction in the transaction history page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167758601-ab913f96-ebf7-4dad-8bf5-c428c85d167d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing in general that filtering and pagination do exist on the page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167761294-5b1b9583-1d16-46b7-add1-c4c022c5eef7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing sort by deposit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167761364-1da450d1-d4c4-4b07-a917-37d9e4d81e56.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing sort by withdraw<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167761432-f1eb0ad0-6196-4625-8055-e708db6c3a32.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing sort by transfer<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167762430-5536cea2-2f2b-4b27-8e84-c8031938014e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing sort by external transfer (at this point in screenshots, I have not<br>tested/ran external transfer yet so the screenshot is accurate)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>Filtering has different ways to filter (Start Date to End Date (for how<br>far the transactions shown can be), Transaction Type Sorting (Deposit, Withdraw, Transfer, and<br>External Transfer), and Descending/Ascending order (New to Old  OR Old to New).<br>HTML-wise, I am using different inputs properly labeled with correct values and options<br>for each type of sorting filter. For pagination, there is a PHP call<br>at the bottom within the big PHP IF statement that checks if the<br>$_REQUEST on &quot;account_id&quot; is there. This is so it isn&#39;t visible until transaction<br>history is shown.</p><br><p>I have an IF statement in the higher PHP code on<br>the website (in the file at least) checking if the $_REQUEST of &quot;account_id&quot;<br>is set. There is no else statement to follow it. Within the giant<br>IF statement checking if the $_REQUEST of &quot;account_id&quot; is set, variables and arrays<br>for the account, filtering, and paginating are set up. Two queries are made,<br>base_query for data and total_query for total based on the Transaction_History SQL table.<br>A dynamic query is also made using the 1=1 clause to help build<br>AND clauses and an empty params array is created. The src filter <br>is applied to $query and $params and filtering is now starting to be<br>applied in the code. Starting with start and end-date filtering, there are IF<br>statements for each of them. The start date IF statement checks if it<br>basically exists and if it does, set the query and params properly for<br>$startDate variable. $endDate is similar but the params is set to 1 minute<br>off from the end of the day because clock logic. Then, the transaction<br>type filter is applied via an IF statement that checks if the $type<br>isn&#39;t empty. If it isn&#39;t empty (as it should be), then the query<br>and params are applied properly for  $type. Column and order sort (descending<br>and ascending transactions) is then applied via checking if $orderby is not empty.<br>If it isn&#39;t empty, sort by created based on $orderby. If it hits<br>the ELSE statement, it will sort the order of created by descending order.<br>Pagination is applied as $per_page is set to 10 (as asked (10 transactions<br>per page)) and the paginate function is called (and uses $total_query appended to<br>$query as query, $params as the params for paginate,  and $per_page (previously<br>set to 10) as the per_page). The $query and $params are properly set<br>for pagination for the $offset and the count for $per_page. The database is<br>called, an empty transactions array is made, and $stmt is prepped for that<br>base_query we talked about before for a dynamically generated query. It is converted<br>to a bindValue (integer) and then it checks that the data is integers<br>before mapping it to the array via FOREACH loop.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/79">https://github.com/nme6/IT202-010/pull/79</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/my_accounts.php">https://nme6-prod.herokuapp.com/Project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167764711-cacad60a-aad3-4945-8e55-9935a504d5c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the user&#39;s profile page with the new fields for first and last<br>name<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/77">https://github.com/nme6/IT202-010/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/profile.php">https://nme6-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167765331-e99fc43c-8cc3-481a-a643-3f515ca3f07c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the external transfer page filled with data ready to transfer to another<br>account (on a different user account I made)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167765496-fd0d419f-e4ff-42ba-9d9c-732959d3ebc4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the user can&#39;t send more than they have in their account balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167765562-ddfbe9dd-8daa-4133-9d20-7826d378514b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the user can&#39;t send a negative amount of money to another external<br>account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167766544-8dfc3b65-31d8-4c9f-abb1-d3f533ddec29.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the messages if a user doesn&#39;t exist and/or a destination account wasn&#39;t<br>found. I definitely should&#39;ve tested this before hand but I do not know<br>how to fix this error. I also simply just do not have the<br>time to fix said error.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167767404-287441c0-da10-45fe-92c1-654823d9d050.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the recorded transfer on the transactions table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167767445-2adcaaab-baa2-4176-9519-0fa12c5c0cd0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing updated account balance on the neil123 user side (previously $18, now $15)<br>(with also a success message)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167767091-88f129c2-17cb-48cc-8d59-e0bb688d2a40.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing updated account balance on the fakeemail1 user side (previously $15, now $18)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>The top half of the code is similar to transfer, deposit, and withdraw<br>with the small addition of declaring the $transfer, $src, $lastname, and $lastfour variables<br>ahead of time and setting what they are. The giant IF statement checks<br>if $transfer, $src, $lastname, and $lastfour are set in $_POST. If they aren&#39;t,<br>the else statement sends a warning message saying &quot;No account has been selected&quot;.<br>If they are, it will re-declare $transfer, $src, $lastname, and $lastfour and declare<br>$dest and $memo (all 6 based on user inputs). For $dest specifically, it<br>uses the function within the external_transfer.php page, get_dest_id($lastname, $lastfour). I will touch upon<br>this later. It checks if the source and destination are the same and<br>if they are, error message saying such. It also checks if the input<br>for lastname is empty and gives a proper error message. Same applies for<br>lastfour with checking if it is empty and giving an error message if<br>it is. It will also check if the transfer isn&#39;t greater than 0<br>and give the proper error message if it isn&#39;t. The same also applies<br>for checking that it&#39;s not over the account balance of the source account<br>and giving a proper error message if it is. Finally, if all criteria<br>are properly met for a proper external transfer to take place,  balance_change<br>will be called and the $balance_change will be set to &quot;transfer&quot;,  the<br>$transaction_type will be &quot;ext-transfer&quot;,  the $aid will be $src, the $account_src will<br>be $src, the $account_dest will be $dest, and $memo will be whatever memo<br>was input by the user. </p><br><p>Now, touching upon the get_dest_id() function from before.<br>The function queries specifically id, account_number, user_id from Accounts and last_name from Users<br>FROM the Account table (because it can pull from a different table through<br>another table). It then uses INNER JOIN with the Users table and user_id<br>from Accounts table setting it equal to &quot;id&quot; on Users table. Then it<br>uses WHERE on that newly assigned id to grab lastname with a temp<br>variable (:lastname) and using account_number based LIKE :an (using LIKE to determine specifically<br>account number. The params are then set properly for lastname and how lastfour<br>is grabbed from &quot;an&quot; (account number). The database is prepared and stmt is<br>prepared based on the query ($q in this case). The $results array is<br>made and it is basically the same try-catch you see with the appropriate<br>variable replacements seen in in the top half of the code. Also, after<br>the try-catch, the destination account ($dest_account) is set by default to the first<br>item in the $results array. The $dest_id is set to the safer echo<br>of $dest_account and then returned. This is how $dest from the giant IF<br>statement is calculated.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nme6/IT202-010/pull/80">https://github.com/nme6/IT202-010/pull/80</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nme6-prod.herokuapp.com/Project/external_transfer.php">https://nme6-prod.herokuapp.com/Project/external_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167770536-6646bc29-be81-4293-9cb3-6913cb46eb7f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the updated Proposal.md file with checkmarks, dates, and proper links to milestone3.md<br>and Heroku prod links<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98120877/167770695-4ea33b7c-30d3-4f55-b629-4d616348d707.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing all issues for Project 3 are done/closed on the project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-bank-project/grade/nme6" target="_blank">Grading</a></td></tr></table>