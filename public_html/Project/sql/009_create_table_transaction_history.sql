CREATE TABLE IF NOT EXISTS Transaction_History (
    id int AUTO_INCREMENT PRIMARY KEY, 
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP, 
    account_src int, 
    account_dest int, 
    balance_change int, 
    transaction_type varchar(15) not null, 
    memo varchar(280) default null, 
    expected_total int, 
    FOREIGN KEY (account_src) REFERENCES Accounts(id), 
    FOREIGN KEY (account_dest) REFERENCES Accounts(id),
    constraint ZeroTransferNotAllowed CHECK(balance_change != 0)
)