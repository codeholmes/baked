CREATE TRIGGER add_wallet
AFTER INSERT ON user_account
FOR EACH ROW
BEGIN
INSERT INTO user_wallet (user_id)
SELECT user_id FROM user_account;
END;//


CREATE TRIGGER delete_wallet
BEFORE DELETE ON user_account
BEGIN
DELETE FROM user_wallet
WHERE user_id 
IN
(SELECT user_id FROM user_account);
END;//