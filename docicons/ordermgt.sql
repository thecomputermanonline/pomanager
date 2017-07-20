SET NAMES 'UTF8';
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `Customers` CASCADE;
CREATE TABLE `Customers` (
	`CustomerID` int NOT NULL,
	`CompanyName` varchar(50) NOT NULL,
	`FirstName` varchar(30) NOT NULL,
	`LastName` varchar(50) NOT NULL,
	`BillingAddress` varchar(255) NOT NULL,
	`City` varchar(50) NOT NULL,
	`StateOrProvince` varchar(20) NOT NULL,
	`ZIPCode` varchar(20) NOT NULL,
	`Email` varchar(75),
	`CompanyWebsite` text(8000) NOT NULL,
	`PhoneNumber` varchar(30) NOT NULL,
	`FaxNumber` varchar(30) NOT NULL,
	`ShipAddress` varchar(255) NOT NULL,
	`ShipCity` varchar(50) NOT NULL,
	`ShipStateOrProvince` varchar(50) NOT NULL,
	`ShipZIPCode` varchar(20) NOT NULL,
	`ShipPhoneNumber` varchar(30) NOT NULL,
	`Notes` text(8000),
	PRIMARY KEY (`CustomerID`),
	INDEX `CompanyName` (`CompanyName` ASC),
	INDEX `ContactLastName` (`LastName` ASC),
	INDEX `PostalCode` (`ZIPCode` ASC),
	INDEX `ShipZIPCode` (`ShipZIPCode` ASC)
);

INSERT INTO `Customers` (`CustomerID`, `CompanyName`, `FirstName`, `LastName`, `BillingAddress`, `City`, `StateOrProvince`, `ZIPCode`, `Email`, `CompanyWebsite`, `PhoneNumber`, `FaxNumber`, `ShipAddress`, `ShipCity`, `ShipStateOrProvince`, `ShipZIPCode`, `ShipPhoneNumber`, `Notes`) VALUES (1, 'A. Datum Corporation', 'Terry', 'Adams', '1234 Brown Street', 'Furntree', 'WA', '680526789', null, '#http://www.adatum.com/
http://www.adatum.com/#', '6065550134', '4255550144', '1234 Brown Street', 'Furntree Gulley', 'WA', '680526789', '4255550134', null);
INSERT INTO `Customers` (`CustomerID`, `CompanyName`, `FirstName`, `LastName`, `BillingAddress`, `City`, `StateOrProvince`, `ZIPCode`, `Email`, `CompanyWebsite`, `PhoneNumber`, `FaxNumber`, `ShipAddress`, `ShipCity`, `ShipStateOrProvince`, `ShipZIPCode`, `ShipPhoneNumber`, `Notes`) VALUES (2, 'Contoso, Ltd', 'Jo', 'Berry', '4567 Green Road', 'Clovelly', 'CA', '863924444', null, '#http://www.contoso.com/#', '4255550135', '4255550145', '4567 Green Road', 'Clovelly', 'CA', '863924444', '4255550135', null);
INSERT INTO `Customers` (`CustomerID`, `CompanyName`, `FirstName`, `LastName`, `BillingAddress`, `City`, `StateOrProvince`, `ZIPCode`, `Email`, `CompanyWebsite`, `PhoneNumber`, `FaxNumber`, `ShipAddress`, `ShipCity`, `ShipStateOrProvince`, `ShipZIPCode`, `ShipPhoneNumber`, `Notes`) VALUES (3, 'Trey Research', 'Kim', 'Akers', '5678 Yellow Place', 'Beecroft', 'MO', '564781234', null, '#http://www.treyresearch.net/#', '4255550136', '4255550146', '5678 Yellow Place', 'Beecroft', 'MO', '564781234', '4255550136', null);
INSERT INTO `Customers` (`CustomerID`, `CompanyName`, `FirstName`, `LastName`, `BillingAddress`, `City`, `StateOrProvince`, `ZIPCode`, `Email`, `CompanyWebsite`, `PhoneNumber`, `FaxNumber`, `ShipAddress`, `ShipCity`, `ShipStateOrProvince`, `ShipZIPCode`, `ShipPhoneNumber`, `Notes`) VALUES (4, 'Litware, Inc', 'Robin', 'Counts', '2345 Brick Road', 'Irvine', 'AZ', '234893456', null, '#http://www.litwareinc.com#', '8065550137', '8065550147', '2345 Brick Road', 'Irvine', 'AZ', '234893456', '8065550137', null);

DROP TABLE IF EXISTS `Employees` CASCADE;
CREATE TABLE `Employees` (
	`EmployeeID` int NOT NULL,
	`FirstName` varchar(50) NOT NULL,
	`LastName` varchar(50) NOT NULL,
	`Title` varchar(50) NOT NULL,
	`WorkPhone` varchar(30) NOT NULL,
	PRIMARY KEY (`EmployeeID`),
	INDEX `LastName` (`LastName` ASC)
);

INSERT INTO `Employees` (`EmployeeID`, `FirstName`, `LastName`, `Title`, `WorkPhone`) VALUES (1, 'Adam', 'Barr', 'Sales Representative', '2065550123');
INSERT INTO `Employees` (`EmployeeID`, `FirstName`, `LastName`, `Title`, `WorkPhone`) VALUES (2, 'Oliver', 'Cox', 'Sales Manager', '2065550126');
INSERT INTO `Employees` (`EmployeeID`, `FirstName`, `LastName`, `Title`, `WorkPhone`) VALUES (3, 'Chris', 'Cannon', 'Sales Representative', '2065550125');
INSERT INTO `Employees` (`EmployeeID`, `FirstName`, `LastName`, `Title`, `WorkPhone`) VALUES (4, 'Eva', 'Corets', 'Product Manager', '2065550127');
INSERT INTO `Employees` (`EmployeeID`, `FirstName`, `LastName`, `Title`, `WorkPhone`) VALUES (5, 'Doris', 'Hartwig', 'Sales Representative', '2065550128');

DROP TABLE IF EXISTS `Order Details` CASCADE;
CREATE TABLE `Order Details` (
	`OrderDetailID` int NOT NULL,
	`OrderID` int,
	`ProductID` int COMMENT 'Actually displays product.',
	`Quantity` float,
	`UnitPrice` float,
	`Discount` float,
	PRIMARY KEY (`OrderDetailID`),
	INDEX `OrderID` (`OrderID` ASC),
	INDEX `ProductID` (`ProductID` ASC)
);

INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (1, 1, 4, 15, 5.0000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (2, 2, 7, 10, 7.5000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (3, 3, 8, 5, 4.0000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (5, 4, 9, 100, 5.0000, 0.05);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (6, 5, 6, 5, 7.0000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (7, 5, 9, 30, 5.0000, 0.05);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (9, 1, 1, 9, 6.0000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (11, 13, 4, 1, 5.0000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (12, 13, 1, 2, 2.5000, 0);
INSERT INTO `Order Details` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`, `Discount`) VALUES (13, 13, 7, 1, 7.5000, 0);

DROP TABLE IF EXISTS `Orders` CASCADE;
CREATE TABLE `Orders` (
	`OrderID` int NOT NULL,
	`CustomerID` int,
	`EmployeeID` int,
	`OrderDate` datetime,
	`PurchaseOrderNumber` varchar(30) NOT NULL,
	`ShipDate` datetime,
	`ShippingMethodID` int,
	`FreightCharge` float,
	`Taxes` float,
	`PaymentReceived` char,
	`Comment` text(8000),
	PRIMARY KEY (`OrderID`),
	INDEX `CustomerID` (`CustomerID` ASC),
	INDEX `EmployeeID` (`EmployeeID` ASC),
	INDEX `OrderDate` (`OrderDate` ASC),
	INDEX `ShippingMethodID` (`ShippingMethodID` ASC)
);

INSERT INTO `Orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `PurchaseOrderNumber`, `ShipDate`, `ShippingMethodID`, `FreightCharge`, `Taxes`, `PaymentReceived`, `Comment`) VALUES (1, 2, 1, '2005-04-23 00:00:00', '10', '2005-04-29 00:00:00', 1, 64.0000, 5, 0, null);
INSERT INTO `Orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `PurchaseOrderNumber`, `ShipDate`, `ShippingMethodID`, `FreightCharge`, `Taxes`, `PaymentReceived`, `Comment`) VALUES (2, 1, 1, '2005-03-23 00:00:00', '11', '2005-03-29 00:00:00', 1, null, 5, 0, null);
INSERT INTO `Orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `PurchaseOrderNumber`, `ShipDate`, `ShippingMethodID`, `FreightCharge`, `Taxes`, `PaymentReceived`, `Comment`) VALUES (3, 3, 3, '2005-01-21 00:00:00', '30', '2005-06-28 00:00:00', 5, null, 5, 0, null);
INSERT INTO `Orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `PurchaseOrderNumber`, `ShipDate`, `ShippingMethodID`, `FreightCharge`, `Taxes`, `PaymentReceived`, `Comment`) VALUES (4, 2, 2, '2005-05-05 00:00:00', '26', '2005-09-19 00:00:00', 2, null, 5, 0, null);
INSERT INTO `Orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `PurchaseOrderNumber`, `ShipDate`, `ShippingMethodID`, `FreightCharge`, `Taxes`, `PaymentReceived`, `Comment`) VALUES (5, 4, 5, '2005-05-02 00:00:00', '32', '2005-09-27 00:00:00', 2, null, 5, 0, null);
INSERT INTO `Orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `PurchaseOrderNumber`, `ShipDate`, `ShippingMethodID`, `FreightCharge`, `Taxes`, `PaymentReceived`, `Comment`) VALUES (13, 1, 1, '2008-02-29 00:00:00', '1', null, 2, 50.0000, 5, 0, null);

DROP TABLE IF EXISTS `Our Company Info` CASCADE;
CREATE TABLE `Our Company Info` (
	`SetupID` int NOT NULL,
	`CompanyName` varchar(50) NOT NULL,
	`Address` varchar(255) NOT NULL,
	`City` varchar(50) NOT NULL,
	`StateOrProvince` varchar(20) NOT NULL,
	`ZIPCode` varchar(20) NOT NULL,
	`PhoneNumber` varchar(30) NOT NULL,
	`FaxNumber` varchar(30) NOT NULL,
	PRIMARY KEY (`SetupID`),
	INDEX `CompanyName` (`CompanyName` ASC),
	INDEX `PostalCode` (`ZIPCode` ASC)
);

INSERT INTO `Our Company Info` (`SetupID`, `CompanyName`, `Address`, `City`, `StateOrProvince`, `ZIPCode`, `PhoneNumber`, `FaxNumber`) VALUES (1, 'Fourth Coffee', '2345 Harry Street', 'Cooperville', 'IA', '653218999', '5605550123', '5605550124');

DROP TABLE IF EXISTS `Payment Methods` CASCADE;
CREATE TABLE `Payment Methods` (
	`PaymentMethodID` int NOT NULL,
	`PaymentMethod` varchar(50) NOT NULL,
	PRIMARY KEY (`PaymentMethodID`)
);

INSERT INTO `Payment Methods` (`PaymentMethodID`, `PaymentMethod`) VALUES (1, 'Check');
INSERT INTO `Payment Methods` (`PaymentMethodID`, `PaymentMethod`) VALUES (2, 'Discover');
INSERT INTO `Payment Methods` (`PaymentMethodID`, `PaymentMethod`) VALUES (3, 'Mastercard');
INSERT INTO `Payment Methods` (`PaymentMethodID`, `PaymentMethod`) VALUES (4, 'VISA');

DROP TABLE IF EXISTS `Products` CASCADE;
CREATE TABLE `Products` (
	`ProductID` int NOT NULL,
	`ProductName` varchar(50) NOT NULL,
	`UnitPrice` float,
	`InStock` char,
	PRIMARY KEY (`ProductID`),
	INDEX `ProductName` (`ProductName` ASC)
);

INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (1, 'Blue Mug', 2.5000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (2, 'Red Mug', 4.0000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (3, 'Green Mug', 2.5000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (4, 'Black Mug', 5.0000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (5, 'Yellow Mug', 2.5000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (6, 'Silver Mug', 7.0000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (7, 'Gold Mug', 7.5000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (8, 'White Mug', 4.0000, 1);
INSERT INTO `Products` (`ProductID`, `ProductName`, `UnitPrice`, `InStock`) VALUES (9, 'US Flag Mug', 5.0000, 1);

DROP TABLE IF EXISTS `Shipping Methods` CASCADE;
CREATE TABLE `Shipping Methods` (
	`ShippingMethodID` int NOT NULL,
	`ShippingMethod` varchar(20) NOT NULL,
	PRIMARY KEY (`ShippingMethodID`)
);

INSERT INTO `Shipping Methods` (`ShippingMethodID`, `ShippingMethod`) VALUES (1, 'Federal Express');
INSERT INTO `Shipping Methods` (`ShippingMethodID`, `ShippingMethod`) VALUES (2, 'UPS Ground');
INSERT INTO `Shipping Methods` (`ShippingMethodID`, `ShippingMethod`) VALUES (3, 'UPS Second Day');
INSERT INTO `Shipping Methods` (`ShippingMethodID`, `ShippingMethod`) VALUES (4, 'US Mail Overnight');
INSERT INTO `Shipping Methods` (`ShippingMethodID`, `ShippingMethod`) VALUES (5, 'US Certified Mail');

ALTER TABLE `Orders` ADD CONSTRAINT `{4AA06063-4E6D-4B41-BB45-A39A65DDBE78}` FOREIGN KEY (`ShippingMethodID`) REFERENCES `Shipping Methods` (`ShippingMethodID`) ON UPDATE SET NULL ON DELETE SET NULL;
ALTER TABLE `Orders` ADD CONSTRAINT `{24B90133-48FD-46C7-A738-F3A57F1A68A2}` FOREIGN KEY (`CustomerID`) REFERENCES `Customers` (`CustomerID`) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE `Order Details` ADD CONSTRAINT `{81885213-20D9-46EB-B2F3-83022631CF42}` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`) ON UPDATE SET NULL ON DELETE SET NULL;
ALTER TABLE `Orders` ADD CONSTRAINT `{E6AD2D33-DAEF-4124-BA86-F17F47F28304}` FOREIGN KEY (`EmployeeID`) REFERENCES `Employees` (`EmployeeID`) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE `Order Details` ADD CONSTRAINT `{EDA1F5D2-AB2E-42EE-B612-23F51177A175}` FOREIGN KEY (`OrderID`) REFERENCES `Orders` (`OrderID`) ON UPDATE CASCADE ON DELETE CASCADE;


SET FOREIGN_KEY_CHECKS = 1;
