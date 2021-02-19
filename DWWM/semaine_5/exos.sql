-- FODE EXO 1
SELECT ode_ord_id
FROM gescom.orders_details
WHERE ode_pro_id IN
	(SELECT pro_id FROM gescom.products WHERE products.pro_color = 'rouge')
;
-- FODE EXO 2
SELECT cus_firstname, cus_lastname
FROM gescom.customers
WHERE cus_id IN
    (SELECT ord_cus_id FROM gescom.orders WHERE ord_id IN
        (SELECT pro_id FROM gescom.products WHERE products.pro_price = 100)
    )
;
-- FODE EXO 3 - la blague du siecle MDR
SELECT sup_id, sup_name
FROM gescom.suppliers
WHERE sup_id IN
    (SELECT pro_sup_id FROM gescom.products WHERE pro_id IN
        (SELECT ode_pro_id FROM gescom.orders_details WHERE ode_ord_id IN
            (SELECT ord_id FROM gescom.orders WHERE ord_cus_id IN
                (SELECT cus_id FROM gescom.customers WHERE cus_zipcode = 80080)
            )
        )
    )
;

-- EXO Procédure stockée avec déclaration de variable(s)
DELIMITER |

CREATE PROCEDURE ajoutFournisseur(
    IN p_nom VARCHAR(50), 
    IN p_countries_id CHAR(2),  
    IN p_address VARCHAR(150),
    IN p_zipcode VARCHAR(5),  
    IN p_contact VARCHAR(100),  
    IN p_phone VARCHAR(10),  
    IN p_mail VARCHAR(75)
)

BEGIN
   DECLARE v_ville VARCHAR (50);
   SET v_ville = 'Amiens';   

   INSERT INTO suppliers(sup_name, sup_city, sup_countries_id, sup_address, sup_zipcode, sup_contact, sup_phone, sup_mail) 
   VALUES (p_nom, v_ville, p_countries_id, p_address, p_zipcode, p_contact, p_phone, p_mail);
END |

DELIMITER ;

call ajoutFournisseur(
	'Jaeger & Co.',
	'FR',
    'Rue de Eldia',
    '13013',
    'Eren Jaeger',
    '013131313',
    'eren.jaeger@eldia.el'
);

-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
-- E X O s - P r o g r a m m e r   d e s   p r o c é d u r e s   s t o c k é e s 
-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

-- EXO 1.1
DELIMITER |

CREATE PROCEDURE Lst_Suppliers()

BEGIN
    SELECT sup_id, sup_name
    FROM suppliers
    join products
    on sup_id = pro_sup_id;
END
DELIMITER ;

-- EXO 1.2
