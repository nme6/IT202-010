# Project Name: Simple Bank
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.

## Github Link: [https://github.com/nme6/IT202-010/tree/prod/public_html/Project](https://github.com/nme6/IT202-010/tree/prod/public_html/Project)
## Project Board Link: [https://github.com/nme6/IT202-010/projects/1](https://github.com/nme6/IT202-010/projects/1)
## Website Link: [https://nme6-prod.herokuapp.com/Project/](https://nme6-prod.herokuapp.com/Project/)
## Your Name: Neil Evans

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION -->
 
 
### Proposal Checklist and Evidence

- Milestone 1
  - Note: For any feature with a due date of 04/04/2022, this is because I am considering it completed after adding the validation JS to the respective feature. It also is because I pushed a PR out on 04/04/2022 and that included multiple features completion (whether validation JS or CSS styling).
  - [x] \(04/04/2022) User will be able to register a new account
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md) 
    - [http://nme6-prod.herokuapp.com/Project/register.php](http://nme6-prod.herokuapp.com/Project/register.php)
  - [x] \(04/04/2022) User will be able to login to their account (given they enter the correct credentials)
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [http://nme6-prod.herokuapp.com/Project/login.php](http://nme6-prod.herokuapp.com/Project/login.php)
  - [x] \(03/22/2022) User will be able to logout
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [http://nme6-prod.herokuapp.com/Project/logout.php](http://nme6-prod.herokuapp.com/Project/logout.php)
  - [x] \(04/04/2022) Basic security rules implemented
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [http://nme6-prod.herokuapp.com/Project/profile.php](http://nme6-prod.herokuapp.com/Project/profile.php)
  - [x] \(03/29/2022) Basic Roles implemented
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [http://nme6-prod.herokuapp.com/Project/admin/create_role.php](http://nme6-prod.herokuapp.com/Project/admin/create_role.php)
  - [x] \(04/04/2022) Site should have basic styles/theme applied; everything should be styled
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [https://nme6-prod.herokuapp.com/Project/profile.php](https://nme6-prod.herokuapp.com/Project/profile.php)
    - [https://nme6-prod.herokuapp.com/Project/styles.css](https://nme6-prod.herokuapp.com/Project/styles.css)
  - [x] \(03/22/2022 (Logout) and 04/04/2022 (Flash JS Validation)) Any output messages/errors should be “user friendly”
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [Profile Page (edit your user for example)](http://nme6-prod.herokuapp.com/Project/profile.php)
    - [Logout Page (will show message upon logout)](http://nme6-prod.herokuapp.com/Project/logout.php)
  - [x] \(04/04/2022) User will be able to see their profile
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [http://nme6-prod.herokuapp.com/Project/profile.php](http://nme6-prod.herokuapp.com/Project/profile.php)
  - [x] \(04/04/2022) User will be able to edit their profile
    - [Milestone 1](https://github.com/nme6/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
    - [http://nme6-prod.herokuapp.com/Project/profile.php](http://nme6-prod.herokuapp.com/Project/profile.php)
- Milestone 2
  - [x] \(04/18/2022)  Create the <span style="text-decoration:underline;">Accounts</span> table (id, account_number [unique, always 12 characters], user_id, balance (default 0), account_type, created, modified)
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/create_account.php](http://nme6-prod.herokuapp.com/Project/create_account.php)
  - [x] \(04/18/2022) Project setup steps:
    * Create these as initial setup scripts in the sql folder
        * Create a system user if they don’t exist (this will never be logged into, it’s just to keep things working per system requirements)
            * Hint, id should be a negative value
        * Create a world account in the Accounts table created below (if it doesn’t exist)
            * Account_number must be “000000000000”
            * User_id must be the id of the system user
            * Account type must be “world”
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(04/18/2022) Create the <span style="text-decoration:underline;">Transactions</span> table (see reference at end of document) 
    * Id, created, modified, account_src, account_dest, balance_change, transaction_type, memo, expected_total, created, modified
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(04/19/2022) Dashboard page
    * Will have links for Create Account, My Accounts, Deposit, Withdraw Transfer, Profile
        * Links that don’t have pages yet should just have href=”#”, you’ll update them later
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/home.php](http://nme6-prod.herokuapp.com/Project/home.php)
  - [x] \(04/24/2022) User will be able to create a checking account
    * System will generate a unique 12 digit account number
        * **Options (strike out the option you won’t do):**
            * ~~**Option 1:** Generate a random 12 digit/character value; must regenerate if a duplicate collision occurs~~
            * **Option 2:** Generate the number based on the id column; requires inserting a null first to get the last insert id, then update the record immediately after
    * System will associate the account to the user
    * Account type will be set as checking
    * Will require a minimum deposit of $5 (from the world account)
        * Entry will be recorded in the Transaction table as a transaction pair (per notes at end of document)
        * Account Balance will be updated based on SUM of **balance_change** of **account_src**
            * Do not set this value directly
    * User will see user-friendly error messages when appropriate
    * User will see user-friendly success message when account is created successfully
        * Redirect user to their Accounts page upon success
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/create_account.php](http://nme6-prod.herokuapp.com/Project/create_account.php)
  - [x] \(04/24/2022) User will be able to list their accounts
    * Limit results to 5 for now
    * Show account number, account type, modified, and balance
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(04/26/2022) User will be able to click an account for more information (a.k.a Transaction History page)
    * Show account number, account type, balance, opened/created date of the selected account
    * Show transaction history (from Transactions table)
        * For now limit results to 10 latest
        * Show the src/dest accounts, the transaction type, the change in balance, when it occurred, expected total, and the memo
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(05/01/2022) User will be able to deposit/withdraw from their account(s)
    * Form should have a dropdown of _their_ accounts to pick from
        * World account should not be in the dropdown as it’s not owned by anyone
    * Form should have a field to enter a positive numeric value
        * For now, allow any deposit value (1 - inf)
    * For withdraw, add a check to make sure they can’t withdraw more money than the account has
    * Form should allow the user to record a memo for the transaction
    * Each transaction is recorded as a transaction pair in the Transaction table per the details below and at the end of the document
        * These will reflect on the transaction history page (Account page’s “more info”)
        * After each transaction pair, make sure to update the Account Balance by SUMing the **balance_change** for the **account_src**
            * This will be done after the insert
        * Deposits will be **from** the “world account”
            * If the world account is using a positive id you must fetch the world account’s id (do not hard code the id as it may change if the application migrates or gets rebuilt)
            * If using a negative value and you’re sure it won’t change across migrations you can hard code it but label (via a comment) what it refers to
        * Withdraws will be **to** the “world account”
            * If the world account is using a positive id you must fetch the world account’s id (do not hard code the id as it may change if the application migrates or gets rebuilt)
            * If using a negative value and you’re sure it won’t change across migrations you can hard code it but label (via a comment) what it refers to
        * Transaction type should show accordingly (deposit/withdraw)
        * Calculate what the expected total would be for each account of the transaction pair
    * Show appropriate user-friendly error messages
    * Show user-friendly success messages
    -  [Milestone 2](https://github.com/nme6/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    -  [http://nme6-prod.herokuapp.com/Project/deposit.php](http://nme6-prod.herokuapp.com/Project/deposit.php)
    -  [http://nme6-prod.herokuapp.com/Project/withdraw.php](http://nme6-prod.herokuapp.com/Project/withdraw.php)
- Milestone 3
  - [x] \(05/05/2022) User will be able to transfer between their accounts
    * Form should include a dropdown first **account_src** and a dropdown for **account_dest** (only accounts the user owns; no world account)
    * Form should include a field for a positive numeric value
    * System shouldn’t allow the user to transfer more funds than what’s available in **account_src**
    * Form should allow the user to record a memo for the transaction
    * Each transaction is recorded as a transaction pair in the Transaction table
      * These will reflect in the transaction history page
    * Show appropriate user-friendly error messages
    * Show user-friendly success messages
    -  [Milestone 3](https://github.com/nme6/IT202-010/blob/Milestone3/public_html/Project/milestone3.md)
    -  [http://nme6-prod.herokuapp.com/Project/transfer.php](http://nme6-prod.herokuapp.com/Project/transfer.php)
  - [x] \(05/10/2022) Transaction History page
    * Will show the latest 10 transactions by default
    * User will be able to filter transactions between two dates
    * User will be able to filter transactions by type (deposit, withdraw, transfer)
    * Transactions should paginate results after the initial 10
    -  [Milestone 3](https://github.com/nme6/IT202-010/blob/Milestone3/public_html/Project/milestone3.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(05/09/2022) User’s profile page should record/show First and Last name
    -  [Milestone 3](https://github.com/nme6/IT202-010/blob/Milestone3/public_html/Project/milestone3.md)
    -  [http://nme6-prod.herokuapp.com/Project/register.php](http://nme6-prod.herokuapp.com/Project/register.php)
    -  [http://nme6-prod.herokuapp.com/Project/profile.php](http://nme6-prod.herokuapp.com/Project/profile.php)
  - [x] \(05/10/2022) User will be able to transfer funds to another user’s account
    * Form should include a dropdown of the current user’s accounts (as **account_src**)
    * Form should include a field for the destination user’s last name
    * Form should include a field for the last 4 digits of the destination user’s account number (to lookup AccountDest)
    * Form should include a field for a positive numerical value
    * Form should allow the user to record a memo for the transaction
    * System shouldn’t let the user transfer more than the balance of their account
    * System will lookup appropriate account based on destination user’s last name and the last 4 digits of the account number
    * Show appropriate user-friendly error messages
    * Show user-friendly success messages
    * Transaction will be recorded with the type as “ext-transfer”
    * Each transaction is recorded as a transaction pair in the Transaction table
      * These will reflect in the transaction history page
    -  [Milestone 3](https://github.com/nme6/IT202-010/blob/Milestone3/public_html/Project/milestone3.md)
    -  [http://nme6-prod.herokuapp.com/Project/external_transfer.php](http://nme6-prod.herokuapp.com/Project/external_transfer.php)
- Milestone 4
  - [x] \(05/11/2022) User can set their profile to be public or private (will need another column in Users table)
    * If profile is public, hide email address from **other** users (email address should not be publicly visible to others)
    -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)
    -  [http://nme6-prod.herokuapp.com/Project/profile.php](http://nme6-prod.herokuapp.com/Project/profile.php)
  - [x] \(05/11/2022) User will be able open a savings account
    * System will generate a 12 digit/character account number per the existing rules (see Checking Account above)
    * System will associate the account to the user
    * Account type will be set as savings
    * Will require a minimum deposit of $5 (from the world account)
        * Entry will be recorded in the Transaction table in a transaction pair (per notes previously and below)
        * Account Balance will be updated based on SUM of **balance_change** of **account_src**
    * System sets an APY that’ll be used to calculate monthly interest based on the balance of the account
        * Recommended to create a table for “**system properties**” and have this value stored there and fetched when needed, this will allow you to have an admin account change the value in the future)
    * User will see user-friendly error messages when appropriate
    * User will see user-friendly success message when account is created successfully
        * Redirect user to their Accounts page
    -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)
    -  [http://nme6-prod.herokuapp.com/Project/create_account.php](http://nme6-prod.herokuapp.com/Project/create_account.php)
  - [x] \(05/11/2022) User will be able to take out a loan
    * System will generate a 12 digit/character account number per the existing rules (see Checking Account above)
    * Account type will be set as loan
    * Will require a minimum value of $500
    * System will show an APY (before the user submits the form)
        * This will be used to add interest to the loan account
        * Recommended to create a table for “**system properties**” and have this value stored there and fetched when needed, this will allow you to have an admin account change the value in the future)
    * Form will have a dropdown of the user’s accounts of which to deposit the money into
    * **Special Case for Loans:**
        * Loans will show with a positive balance of what’s required to pay off (although it is a negative value in the database since the user owes it)
        * User will transfer funds to the loan account to pay it off
        * Transfers will continue to be recorded in the Transactions table per normal rules
        * Loan account’s balance will be the balance minus any transfers **to** this account
        * Interest will be applied to the current loan balance and add to it (causing the user to owe more)
        * A loan with 0 balance will be considered paid off and will not accrue interest and will be eligible to be marked as closed
        * User can’t transfer more money **from** a loan once it’s been opened and a loan account should not appear in the Account Source dropdowns
    * User will see user-friendly error messages when appropriate
    * User will see user-friendly success message when account is created successfully
        * Redirect user to their Accounts page
    -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)
    -  [http://nme6-prod.herokuapp.com/Project/loans.php](http://nme6-prod.herokuapp.com/Project/loans.php)
  - [x] \(05/11/2022) Listing accounts and/or viewing Account Details should show any applicable APY or “-” if none is set for the particular account
    -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(05/11/2022 ) User will be able to close an account
    * User must transfer or withdraw all funds out of the account before doing so (i.e., balance must be 0)
    * Account should have a column “is_active” that will get set as false (the default value should be true).
        * **All** queries for Accounts should be updated to pull only “active” = true accounts (i.e., dropdowns, My Accounts, etc)
        * Do not delete the record, we’re a soft delete so it doesn’t break transactions
    * Closed accounts should not be visible to the user anymore
    * If the account is a loan, it must be paid off in full first
    -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)
    -  [http://nme6-prod.herokuapp.com/Project/my_accounts.php](http://nme6-prod.herokuapp.com/Project/my_accounts.php)
  - [x] \(05/12/2022) Admin role (leave this section for last)
    * Will be able to search for users by firstname and/or lastname
        * List will show  the following
            * The user’s first name, last name
            * A link to view their accounts
                * The list will let the admin view the transaction history of the account
                * The list will let the admin freeze/unfreeze an account (see bullet two of admin for more details)
            * A link to create/open an account for that user
            * Will be able to deactivate a user
                * Requires a new column on the Users table (i.e., is_active)
                * Deactivated users will be restricted from logging in
                    * “Sorry your account is no longer active”
    * Will be able to look-up specific account numbers (partial match)
        * Selecting an account should redirect to a list of its transaction history
        * The list should have a button giving the ability to freeze an account (this is similar to disable/delete but it’s a different column)
        * **Frozen accounts** still show in results, but they can’t be interacted with
            * **[Dev note]**: Will want to add a column to Accounts table called frozen and default it to false
                * Update transactions logic to not allow frozen accounts to be used for a transaction
    -  [Milestone 4](https://github.com/nme6/IT202-010/blob/Milestone4/public_html/Project/milestone4.md)
    -  [http://nme6-prod.herokuapp.com/Project/admin/manage_users.php](http://nme6-prod.herokuapp.com/Project/admin/manage_users.php)
    -  [http://nme6-prod.herokuapp.com/Project/admin/view_accounts.php](http://nme6-prod.herokuapp.com/Project/admin/view_accounts.php)
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board