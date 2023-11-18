SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `registration` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) 



INSERT INTO `registration` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Hasan Imam', 'hasan@gmail.com', 'Hello', 'Hi'),

COMMIT;