
-- ============================ categories data ========================
INSERT INTO cats (name) 
VALUES 
    ('Labtop'),
    ('PCs'),
    ('Mobiles')
;


-- ========================== products data =========================
INSERT INTO products(name , `desc`, price, img, pices_no, cats_id)
VALUES 
('lenovo z51-70', 'dummy description for testing lenovo', 10000, '2.jpg' , 2, 1),
('lenovo idepad 300', 'dummy description for testing lenovo', 13000, '3.jpg', 1, 1),
('lenovo x1-carbon', 'dummy description for testing lenovo', 18000, '2.jpg', 1, 1),
('samsung note 10', 'dummy description for testing Notes', 16000, '5.jpg', 1, 3),
('samsung tab s7', 'dummy description for testing Tabs', 3000, '1.jpg', 1, 3),
('nokia 3310', 'dummy description for testing Mobiles', 600, '8.jpg', 1, 3),
('alcatel 770', 'dummy description for testing Mobiles', 400, '7.jpg', 1, 3),
('sony ps4', 'dummy description for testing plastation', 4000, '6.jpg', 1, 2),
('mous omega spacw', 'dummy description for testing mouse', 200, '10.jpg', 1, 2)
;

-- ---------------=================== admins data ------------------------------

INSERT INTO  admins (name, email, password) 
VALUES
('waleed abbas' , 'walid@walid.com', '$2y$10$fIBU3SxTjeV269LPDl5tfuLL5uwhjlHJauggfNEi9hPfS8/h7gYpS')

;
