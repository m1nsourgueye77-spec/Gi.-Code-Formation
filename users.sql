CREATE TABLE IF NOT EXISTS elearning (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  login VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role VARCHAR(20) NOT NULL
);

INSERT INTO elearning (name, email, login, password, role)
VALUES ('Mansour Gueye', 'gmansour1977@gmail.com', 'mansourg', 'F1tim@', 'admin');
