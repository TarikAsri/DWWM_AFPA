-----------------------------------------------------------------------------------------------------
---------------------------------------- E V A L U A T I O N ----------------------------------------
----------------- S T R U C T U R E D - Q U E R Y  - L A N G U A G E  - S Q L -----------------------
-----------------------------------------------------------------------------------------------------

-- 1. Liste des contacts français :
SELECT CompanyName AS 'Société',ContactName AS 'contact', ContactTitle AS 'Fonction', Phone AS 'Téléphone' 
FROM Customers 
WHERE Country = "france";


-- 2. Produits vendus par le fournisseur « Exotic Liquids » :
SELECT ProductName AS 'Produit', UnitPrice AS 'Prix' 
FROM products 
INNER JOIN suppliers 
ON suppliers.SupplierID = products.SupplierID 
WHERE CompanyName = "Exotic Liquids";


-- 3. Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :
SELECT CompanyName AS Fournisseur, COUNT(suppliers.SupplierID) AS Nbre_produits 
FROM products 
INNER JOIN suppliers 
ON suppliers.SupplierID = products.SupplierID 
WHERE Country = "France" 
GROUP BY suppliers.SupplierID 
ORDER BY Nbre_produits DESC;


-- 4. Liste des clients Français ayant plus de 10 commandes :
SELECT CompanyName AS Client, COUNT(orders.CustomerID) AS 'Nbre commandes' 
FROM customers 
INNER JOIN orders 
ON orders.CustomerID = customers.CustomerID 
WHERE Country = "france" 
GROUP BY orders.CustomerID 
HAVING COUNT(orders.CustomerID)  > 10;


-- 5. Liste des clients ayant un chiffre d’affaires > 30.000 :
SELECT CompanyName AS Client, sum(UnitPrice * Quantity) AS 'CA', Country AS Pays 
FROM customers 
JOIN orders 
ON orders.CustomerID = customers.CustomerID 
JOIN `order details` 
ON `order details`.OrderID = orders.OrderID    
GROUP BY orders.CustomerID 
HAVING sum(UnitPrice * Quantity) > 30000 
ORDER BY CA DESC;

-- 6. Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids » :

SELECT ShipCountry AS Pays 
FROM `order details` 
JOIN orders 
ON `order details`.OrderID = orders.OrderID 
JOIN products 
ON  products.ProductID = `order details`.ProductID 
JOIN suppliers 
ON suppliers.SupplierID = products.SupplierID 
AND suppliers.CompanyName = "Exotic Liquids"  
GROUP BY  ShipCountry 
ORDER BY ShipCountry ASC;

-- 7. Montant des ventes de 1997 :
SELECT round(sum(UnitPrice * Quantity)) AS 'Montant Ventes 97'
FROM `order details` 
JOIN orders 
ON orders.OrderID = `order details`.OrderID 
AND Year(OrderDate) = "1997";

-- 8. Montant des ventes de 1997 mois par mois :
SELECT MONTH(OrderDate) AS `Mois 97`, sum(UnitPrice * Quantity) AS 'Montant Ventes' 
FROM `order details` 
JOIN orders 
ON orders.OrderID = `order details`.OrderID 
AND Year(OrderDate) = "1997" 
GROUP BY MONTH(OrderDate);

-- 9. Depuis quelle date le client « Du monde entier » n’a plus commandé ?
SELECT OrderDate AS 'Date de dernière commande' 
FROM `order details` 
JOIN orders 
ON orders.OrderID = `order details`.OrderID 
JOIN customers 
ON customers.CustomerID = orders.CustomerID 
AND CompanyName ="Du monde entier"  
ORDER BY OrderDate DESC 
LIMIT 1;

-- 10. Quel est le délai moyen de livraison en jours ?
select round(AVG(DATEDIFF(ShippedDate, OrderDate))) AS 'Moyen de délai - livraison en jours'
from orders;

-------------------------------- M E R C I - B C P - ! --------------------------------