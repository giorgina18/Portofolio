CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  link VARCHAR(255) NOT NULL,
  category VARCHAR(100) NOT NULL
);

-- Example data
INSERT INTO projects (title, description, image, link, category) VALUES
('Webshop', 'De opdracht van dit project was om een webshop te maken op basis van de gegeven layout en stijl. Ik heb de webshop gebaseerd op Bol.com en voorzien van drie features die we moesten maken.', 'img/webshop.png', 'https://36725.hosts2.ma-cloud.nl/webshop_BO/', 'Webshop'),
('Input Output', 'De opdracht van dit project was om een input-output toepassing te maken. Mijn idee was een autootje te bouwen dat bestuurd wordt met een joystick, de joystick dient als input en het autootje als output.', 'img/input_output.png', '#', 'Input Output'),
('SV-Unity', 'De opdracht van dit project was om tijdens een gesprek met de klant hun ideeën te verzamelen en deze vervolgens zelfstandig uit te werken tot een passend eindproduct.', 'img/SV-unity.png', '#', 'SV-Unity'),
('Back end', 'De opdracht van dit project was om de back-end security te versterken, zodat gebruikers niet te maken krijgen met broken access control.', 'img/registratie.png', '#', 'Back end'),
('NXT museum', 'De opdracht van dit project was om een professionele, tweetalige museumwebsite te maken met informatie, afbeeldingen en bezoekersreviews.', 'img/nxtmuseum.png', 'http://localhost/nxtmuseum/', 'Museum');
