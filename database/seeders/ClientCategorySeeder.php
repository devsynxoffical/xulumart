-- MEN'S
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ("Men's", 0, 1, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Shirt', @pid, 1, 1, 0, NOW(), NOW()),
('T-Shirt', @pid, 2, 1, 0, NOW(), NOW()),
('Trousers', @pid, 3, 1, 0, NOW(), NOW()),
('Wallet', @pid, 4, 1, 0, NOW(), NOW()),
('Sunglasses', @pid, 5, 1, 0, NOW(), NOW()),
('Others', @pid, 6, 1, 0, NOW(), NOW());

-- WOMEN'S
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ("Women's", 0, 2, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Shirt', @pid, 1, 1, 0, NOW(), NOW()),
('T-Shirt', @pid, 2, 1, 0, NOW(), NOW()),
('Dress', @pid, 3, 1, 0, NOW(), NOW()),
('Bags', @pid, 4, 1, 0, NOW(), NOW()),
('Shoes', @pid, 5, 1, 0, NOW(), NOW()),
('Sunglasses', @pid, 6, 1, 0, NOW(), NOW()),
('Others', @pid, 7, 1, 0, NOW(), NOW());

-- KIDS
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Kids', 0, 3, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Boys', @pid, 1, 1, 0, NOW(), NOW()),
('Girls', @pid, 2, 1, 0, NOW(), NOW()),
('Dress', @pid, 3, 1, 0, NOW(), NOW()),
('Pant', @pid, 4, 1, 0, NOW(), NOW()),
('Shirt', @pid, 5, 1, 0, NOW(), NOW()),
('T-Shirt', @pid, 6, 1, 0, NOW(), NOW()),
('School Bags', @pid, 7, 1, 0, NOW(), NOW());

-- KIDS TOYS
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Kids Toys', 0, 4, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Cars', @pid, 1, 1, 0, NOW(), NOW()),
('Educational Toys', @pid, 2, 1, 0, NOW(), NOW()),
('Guns', @pid, 3, 1, 0, NOW(), NOW()),
('Other Toys', @pid, 4, 1, 0, NOW(), NOW());

-- HANDICRAFT ITEMS
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Handicraft Items', 0, 5, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Decoration', @pid, 1, 1, 0, NOW(), NOW()),
('Flower Vase', @pid, 2, 1, 0, NOW(), NOW());

-- JUTE BAGS (no sub-categories)
INSERT INTO categories (title, parent_id, position, is_active, is_featured, description, created_at, updated_at) VALUES ('Jute Bags', 0, 6, 1, 0, 'Eco Friendly Bags', NOW(), NOW());

-- CARPETS (no sub-categories)
INSERT INTO categories (title, parent_id, position, is_active, is_featured, description, created_at, updated_at) VALUES ('Carpets', 0, 7, 1, 0, 'Shotoronji Fancy Carpets', NOW(), NOW());

-- LEATHER
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Leather', 0, 8, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Wallet', @pid, 1, 1, 0, NOW(), NOW()),
('Bags', @pid, 2, 1, 0, NOW(), NOW()),
('Office Bags', @pid, 3, 1, 0, NOW(), NOW()),
('Laptop Bags', @pid, 4, 1, 0, NOW(), NOW());

-- BEDSHEETS (no sub-categories)
INSERT INTO categories (title, parent_id, position, is_active, is_featured, description, created_at, updated_at) VALUES ('Bedsheets', 0, 9, 1, 0, 'Home Use Exclusive Bedsheets', NOW(), NOW());

-- TRAVEL BAGS (no sub-categories)
INSERT INTO categories (title, parent_id, position, is_active, is_featured, description, created_at, updated_at) VALUES ('Travel Bags', 0, 10, 1, 0, 'All Types of Travel Bags', NOW(), NOW());

-- STATIONARY ITEMS
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Stationary Items', 0, 11, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Pencil', @pid, 1, 1, 0, NOW(), NOW()),
('Pen', @pid, 2, 1, 0, NOW(), NOW()),
('Sharpener', @pid, 3, 1, 0, NOW(), NOW()),
('Note Books', @pid, 4, 1, 0, NOW(), NOW()),
('Eraser', @pid, 5, 1, 0, NOW(), NOW()),
('Pencil Box', @pid, 6, 1, 0, NOW(), NOW()),
('Tiffin Box', @pid, 7, 1, 0, NOW(), NOW()),
('School Bags', @pid, 8, 1, 0, NOW(), NOW()),
('Water Bottles', @pid, 9, 1, 0, NOW(), NOW());

-- HOME DECORATION (no sub-categories)
INSERT INTO categories (title, parent_id, position, is_active, is_featured, description, created_at, updated_at) VALUES ('Home Decoration', 0, 12, 1, 0, 'Exclusive Decoration Piece', NOW(), NOW());

-- HOUSEHOLD ITEMS
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Household Items', 0, 13, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Blenders', @pid, 1, 1, 0, NOW(), NOW()),
('Jug', @pid, 2, 1, 0, NOW(), NOW()),
('Other Items', @pid, 3, 1, 0, NOW(), NOW());

-- BLANKET
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES ('Blanket', 0, 14, 1, 0, NOW(), NOW());
SET @pid = LAST_INSERT_ID();
INSERT INTO categories (title, parent_id, position, is_active, is_featured, created_at, updated_at) VALUES
('Cotton', @pid, 1, 1, 0, NOW(), NOW()),
('Wool', @pid, 2, 1, 0, NOW(), NOW());