CREATE TABLE sea(
   id          INTEGER  NOT NULL PRIMARY KEY 
  ,Name        VARCHAR(21) NOT NULL
  ,Description VARCHAR(126)
  ,half        VARCHAR(6) NOT NULL
  ,fullprice        VARCHAR(7) NOT NULL
);
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (203,'Fried Calamari','Served with your choice of hot,mild,sweet red sauce','$45.00','$75.00');
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (204,'Shrimp Parmigiana','Breaded shrimp topped with homemade tomato sauce and melted mozzarella','$60.00','$105.00');
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (205,'Shrimp Fra''diavolo','Sauteed Shrimp in a mix of our homemade marinara sauce and white wine with crushed hot peppers. Also available sweet.','$55.00','$100.00');
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (206,'Fried Fish Fillet','Fish fried to a golden brown, served with tarter sauce','$40.00','$70.00');
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (207,'Seafood Salad','Cooked Calamari, Mussels, and Shrimp mixed together with celery and roasted peppers served in our garlic olive oil lemon sauce','$40.00','$70.00');
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (208,'Fried Shrimp',NULL,'$55.00','$100.00');
INSERT INTO sea(id,Name,Description,half,fullprice) VALUES (209,'Mussels(Red or White)','Mussels cooked in homemade marinara sauce, or in white wine, butter and garlic sauce','$55.00','$100.00');
