-----------------------------------------------------------------------------------------------------
---------------------------------------- E V A L U A T I O N ----------------------------------------
----------------- S T R U C T U R E D - Q U E R Y  - L A N G U A G E  - S Q L -----------------------
-----------------------------------------------------------------------------------------------------

DROP DATABASE IF EXISTS exo1;

CREATE DATABASE exo1;

USE exo1;

CREATE TABLE Client (
    cli_num INT NOT NULL, -- primary key / fk reference
    cli_nom VARCHAR (50) NOT NULL,
    cli_adresse VARCHAR (50) NOT NULL, 
    cli_tel VARCHAR(30) NOT NULL,
    CONSTRAINT client_pk PRIMARY KEY (cli_num));

CREATE TABLE Commande (
    com_num INT NOT NULL, -- primary key / fk reference
    cli_num INT NOT NULL,
    com_date datetime,
    com_obs VARCHAR(50) NOT NULL,
    CONSTRAINT commande_pk PRIMARY KEY (com_num),
    CONSTRAINT commande_client_fk FOREIGN KEY (cli_num) REFERENCES Client(cli_num));

CREATE TABLE Produit (
    pro_num INT NOT NULL, -- primary key / fk reference
    pro_libelle VARCHAR(50) NOT NULL,
    pro_description VARCHAR(50) NOT NULL,
    CONSTRAINT produit_pk PRIMARY KEY (pro_num));

CREATE TABLE est_compose (
    com_num INT NOT NULL,
    pro_num INT NOT NULL,
    est_qte INT NOT NULL,
    CONSTRAINT est_compose_pk PRIMARY KEY (com_num),
    CONSTRAINT est_compose_commande_fk FOREIGN KEY (com_num) REFERENCES Commande(com_num),
    CONSTRAINT est_compose_produit_fk FOREIGN KEY (pro_num) REFERENCES Produit(pro_num));

CREATE INDEX cli_nom_idx -- Créez un index sur le champ cli_nom de la table client.
on client (cli_nom);

-------------------------------- M E R C I - B C P - ! --------------------------------