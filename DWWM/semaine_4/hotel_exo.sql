-- ---------------------------------------------
-- E X E R C I S E   1   :   B A S E   H O T E L 
-- ---------------------------------------------
-- 1. Afficher la liste des hôtels avec leur station.

CREATE VIEW v_hotel_station_v1
AS
SELECT hotel.hot_nom, station.sta_nom 
FROM hotel
JOIN station
on hotel.hot_sta_id = station.sta_id;

-- otherwise

CREATE VIEW v_hotel_station_v2
AS
SELECT hot_nom, sta_nom
FROM hotel, station
WHERE hotel.hot_sta_id = station.sta_id;

-- 2. Afficher la liste des chambres et leur hôtel

CREATE VIEW v_hotel_chambres
AS
SELECT chambre.cha_numero, hotel.hot_nom
FROM chambre
JOIN hotel
ON chambre.cha_hot_id = hotel.hot_id;

-- otherwise it is possible to get it done through the second method mentioned above.

-- 3. Afficher la liste des réservations avec le nom des clients

CREATE VIEW v_reservation_client
AS
SELECT reservation.res_id, client.cli_nom
FROM reservation
JOIN client
ON reservation.res_cli_id = client.cli_id;

-- 4. Afficher la liste des chambres avec le nom de l'hôtel et le nom de la station

CREATE VIEW v_chambres_hotel_station
AS
SELECT chambre.cha_numero, hotel.hot_nom, station.sta_nom
FROM chambre
JOIN hotel ON chambre.cha_hot_id = hotel.hot_id
JOIN station ON hotel.hot_sta_id = station.sta_id;

-- 5. Afficher les réservations avec le nom du client et le nom de l'hôtel

CREATE VIEW v_reservation_client
AS
SELECT reservation.res_id, client.cli_nom, hotel.hot_nom
FROM reservation
JOIN client ON reservation.res_cli_id = client.cli_id
JOIN hotel ON reservation.res_cha_id = chambre.cha_hot_id;

-- -----------------------------------------------
-- E X E R C I S E   2   :   B A S E   G E S C O M  
-- -----------------------------------------------