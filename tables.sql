CREATE TABLE tests(
    id TINYINT(2) PRIMARY KEY AUTO_INCREMENT,
    questions VARCHAR(200),
    first VARCHAR(200) NOT NULL,
    second VARCHAR(200) NOT NULL,
    third VARCHAR(200) NOT NULL,
    answer VARCHAR(6) NOT NULL
)
