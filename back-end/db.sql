DROP TABLE IF EXISTS chat_messages;
CREATE TABLE chat_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    session_hash CHAR(64) NOT NULL,
    page VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);