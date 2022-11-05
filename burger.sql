CREATE TABLE burger(
   id          INTEGER  NOT NULL PRIMARY KEY 
  ,Name        VARCHAR(23) NOT NULL
  ,Description VARCHAR(57)
  ,Price       VARCHAR(5) NOT NULL
);
INSERT INTO burger(id,Name,Description,Price) VALUES (111,'Hamburger','Served with Lettuce and Tomato','$2.95');
INSERT INTO burger(id,Name,Description,Price) VALUES (112,'Cheeseburger','Served with Lettuce and Tomato','$3.95');
INSERT INTO burger(id,Name,Description,Price) VALUES (113,'Hamburger Deluxe','Served with Lettuce and Tomato and a side of French Fries','$5.25');
INSERT INTO burger(id,Name,Description,Price) VALUES (114,'Cheeseburger Deluxe','Served with Lettuce and Tomato and a side of French Fries','$6.25');
INSERT INTO burger(id,Name,Description,Price) VALUES (115,'Pizza Burger',NULL,'$3.95');
INSERT INTO burger(id,Name,Description,Price) VALUES (116,'California Cheeseburger','Served with Lettuce, Tomato and Mayo','$4.95');
