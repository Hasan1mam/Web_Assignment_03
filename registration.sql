CREATE TABLE `registration` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
)



INSERT INTO `registration` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Hasan', 'Hasan@gmail.com', 'Hi', 'Hello'),
('Imam', 'Imam@gmail.com', 'Bye', 'Good bye');
COMMIT;
