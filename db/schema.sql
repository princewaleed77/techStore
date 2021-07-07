-- ---------------------------------- categories table ----------------------------
CREATE TABLE cats (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  created_at DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY(id)
);
-- --------------------------------------- products table -------------------------------

CREATE TABLE products (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  `desc` TEXT NOT NULL,
  img VARCHAR(255) NOT NULL,
  price DECIMAL (8, 2) NOT NULL,
  pices_no INT NOT NULL,
  created_at DATETIME NOT NULL DEFAULT now(),
  cats_id INT UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (cats_id) REFERENCES cats(id) ON DELETE
  SET
    NULL
);
-- ----------------------------------- orders table -------------------------------
CREATE TABLE orders (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  phone VARCHAR(255) NOT NULL,
  `address` VARCHAR(255),
  `status` enum ('pending', 'approved', 'canceld') NOT NULL DEFAULT 'pending',
  created_at DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (id)
);
-- ------------------------------- order details table
CREATE TABLE order_details(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  order_id INT UNSIGNED,
  product_id INT UNSIGNED,
  qty INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE
  SET
    NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE
  SET
    NULL
);
-- ------------------------------- dashbord ---------------------------------
-- admins table
CREATE TABLE admins (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR (255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  is_super ENUM('yes', 'no') DEFAULT 'no',
  created_at DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY(id)
);