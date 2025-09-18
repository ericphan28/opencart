-- An Nhiên Farm Store Configuration
-- Update store information for farm business

-- Update main store information
UPDATE oc_setting SET value = 'An Nhiên Farm' WHERE `key` = 'config_name' AND store_id = 0;
-- Cập nhật thông tin store
UPDATE `oc_setting` SET `value` = 'An Nhiên Farm - Thực phẩm cao cấp' WHERE `key` = 'config_meta_title';
UPDATE `oc_setting` SET `value` = 'An Nhiên Farm chuyên cung cấp nông sản sạch, thịt bò nhập khẩu, hải sản đông lạnh và nước sốt tiện lợi. Thực phẩm cao cấp, giao hàng tận nơi.' WHERE `key` = 'config_meta_description';
UPDATE `oc_setting` SET `value` = 'an nhien farm, nong san sach, thit bo nhap khau, hai san dong lanh, nuoc sot tien loi, thuc pham cao cap' WHERE `key` = 'config_meta_keyword';
UPDATE `oc_setting` SET `value` = 'An Nhiên Farm - Cung cấp đa dạng thực phẩm chất lượng cao: nông sản sạch từ nông trại, thịt bò nhập khẩu cao cấp, hải sản đông lạnh tươi ngon và các loại nước sốt tiện lợi cho gia đình Việt.' WHERE `key` = 'config_description';
UPDATE oc_setting SET value = 'An Nhiên Farm, thịt bò nhập khẩu, hải sản đông lạnh, nước sốt lẩu, nước sốt nướng, nông sản sạch, rau củ quả tươi, hữu cơ, organic, farm fresh' WHERE `key` = 'config_meta_keyword' AND store_id = 0;
UPDATE oc_setting SET value = 'contact@annhienfarm.com' WHERE `key` = 'config_email' AND store_id = 0;
UPDATE oc_setting SET value = '0888 123 456' WHERE `key` = 'config_telephone' AND store_id = 0;
UPDATE oc_setting SET value = '123 Đường Nông Trại, Phường An Nhiên, Quận Tân Bình, TP.HCM' WHERE `key` = 'config_address' AND store_id = 0;

-- Update admin settings  
UPDATE oc_setting SET value = 'An Nhiên Farm Admin' WHERE `key` = 'config_name' AND store_id = 0;
UPDATE oc_setting SET value = 'Hệ thống quản lý An Nhiên Farm' WHERE `key` = 'config_title' AND store_id = 0;

-- Create expanded farm categories including imported meats, seafood, and sauces
INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES
(100, '', 0, 1, 1),
(101, '', 0, 2, 1),
(102, '', 0, 3, 1),
(103, '', 0, 4, 1),
(104, '', 0, 5, 1),
(105, '', 0, 6, 1),
(106, '', 0, 7, 1),
(107, '', 0, 8, 1);

-- Category descriptions in Vietnamese for all product lines
INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES
(100, 2, 'Rau Xanh Tươi', '<p>Rau xanh tươi ngon được trồng theo phương pháp hữu cơ tại nông trại An Nhiên Farm</p>', 'Rau Xanh Tươi - An Nhiên Farm', 'Rau xanh tươi hữu cơ chất lượng cao từ An Nhiên Farm', 'rau xanh, rau tươi, rau hữu cơ, organic vegetables'),
(101, 2, 'Củ Quả Tươi', '<p>Củ quả tươi ngon, giàu dinh dưỡng trồng theo tiêu chuẩn VietGAP</p>', 'Củ Quả Tươi - An Nhiên Farm', 'Củ quả tươi chất lượng cao từ nông trại An Nhiên', 'củ quả, củ tươi, khoai tây, cà rốt'),
(102, 2, 'Trái Cây Tươi', '<p>Trái cây tươi ngọt tự nhiên, không hóa chất từ vườn An Nhiên Farm</p>', 'Trái Cây Tươi - An Nhiên Farm', 'Trái cây tươi ngon tự nhiên từ An Nhiên Farm', 'trái cây, hoa quả, fruit, tươi ngon'),
(103, 2, 'Thảo Mộc & Gia Vị', '<p>Thảo mộc tự nhiên và gia vị tươi từ nông trại hữu cơ</p>', 'Thảo Mộc & Gia Vị - An Nhiên Farm', 'Thảo mộc và gia vị tự nhiên từ An Nhiên Farm', 'thảo mộc, gia vị, herbs, spices'),
(104, 2, 'Sản Phẩm Chế Biến', '<p>Sản phẩm chế biến từ nông sản sạch của An Nhiên Farm</p>', 'Sản Phẩm Chế Biến - An Nhiên Farm', 'Sản phẩm chế biến từ nông sản sạch', 'chế biến, processed, nông sản'),
(105, 2, 'Thịt Bò Nhập Khẩu', '<p>Thịt bò cao cấp nhập khẩu từ Úc, Mỹ với chứng nhận chất lượng quốc tế. Tươi ngon, đảm bảo an toàn thực phẩm</p>', 'Thịt Bò Nhập Khẩu - An Nhiên Farm', 'Thịt bò nhập khẩu cao cấp từ Úc, Mỹ chất lượng đảm bảo', 'thịt bò, beef, nhập khẩu, úc, mỹ, wagyu, angus'),
(106, 2, 'Hải Sản Đông Lạnh', '<p>Hải sản đông lạnh tươi ngon nhập khẩu từ Na Uy, Canada. Cá hồi, tôm, cua, sò điệp cao cấp</p>', 'Hải Sản Đông Lạnh - An Nhiên Farm', 'Hải sản đông lạnh nhập khẩu cao cấp từ Na Uy, Canada', 'hải sản, cá hồi, tôm, cua, sò điệp, na uy, canada, đông lạnh'),
(107, 2, 'Nước Sốt Tiện Lợi', '<p>Các loại nước sốt tiện lợi chất lượng cao: sốt lẩu, nướng, kho cá, chấm. Giúp món ăn thêm đậm đà hương vị</p>', 'Nước Sốt Tiện Lợi - An Nhiên Farm', 'Nước sốt lẩu, nướng, kho cá, chấm tiện lợi chất lượng cao', 'nước sốt, sốt lẩu, sốt nướng, sốt kho cá, sốt chấm, gia vị, tiện lợi');

-- Category to store mapping for all categories
INSERT INTO oc_category_to_store (category_id, store_id) VALUES
(100, 0), (101, 0), (102, 0), (103, 0), (104, 0), (105, 0), (106, 0), (107, 0);

-- Add subcategories for imported meats
INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES
(110, '', 105, 1, 1), -- Thịt Bò Úc
(111, '', 105, 2, 1), -- Thịt Bò Mỹ  
(112, '', 105, 3, 1); -- Thịt Bò Wagyu

INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES
(110, 2, 'Thịt Bò Úc', '<p>Thịt bò Úc cao cấp, thịt mềm, vị ngọt tự nhiên</p>', 'Thịt Bò Úc - An Nhiên Farm', 'Thịt bò Úc chất lượng cao nhập khẩu trực tiếp', 'thịt bò úc, australian beef, angus'),
(111, 2, 'Thịt Bò Mỹ', '<p>Thịt bò Mỹ USDA Prime, marbling đẹp, hương vị đậm đà</p>', 'Thịt Bò Mỹ - An Nhiên Farm', 'Thịt bò Mỹ USDA Prime cao cấp nhập khẩu', 'thịt bò mỹ, usda prime, american beef'),
(112, 2, 'Thịt Bò Wagyu', '<p>Thịt bò Wagyu đặc biệt, marbling cực cao, tan trong miệng</p>', 'Thịt Bò Wagyu - An Nhiên Farm', 'Thịt bò Wagyu cao cấp nhất thế giới', 'wagyu, thịt bò wagyu, japanese beef');

-- Add subcategories for frozen seafood
INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES
(120, '', 106, 1, 1), -- Cá Hồi Na Uy
(121, '', 106, 2, 1), -- Tôm Canada
(122, '', 106, 3, 1), -- Cua Alaska
(123, '', 106, 4, 1); -- Sò Điệp

INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES
(120, 2, 'Cá Hồi Na Uy', '<p>Cá hồi Na Uy tươi ngon, giàu Omega-3, đông lạnh ngay tại biển</p>', 'Cá Hồi Na Uy - An Nhiên Farm', 'Cá hồi Na Uy tươi ngon giàu Omega-3', 'cá hồi na uy, norwegian salmon, omega 3'),
(121, 2, 'Tôm Canada', '<p>Tôm Canada tự nhiên, size lớn, thịt chắc ngọt</p>', 'Tôm Canada - An Nhiên Farm', 'Tôm Canada tự nhiên size lớn chất lượng cao', 'tôm canada, canadian shrimp, lobster'),
(122, 2, 'Cua Alaska', '<p>Cua Alaska King size, thịt ngọt đậm đà, chân to</p>', 'Cua Alaska - An Nhiên Farm', 'Cua Alaska King size thịt ngọt chất lượng cao', 'cua alaska, alaskan crab, king crab'),
(123, 2, 'Sò Điệp', '<p>Sò điệp tươi ngon từ vùng biển lạnh Canada</p>', 'Sò Điệp - An Nhiên Farm', 'Sò điệp tươi ngon từ Canada chất lượng cao', 'sò điệp, scallop, canadian scallop');

-- Add subcategories for sauces
INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES
(130, '', 107, 1, 1), -- Nước Sốt Lẩu
(131, '', 107, 2, 1), -- Nước Sốt Nướng
(132, '', 107, 3, 1), -- Nước Sốt Kho Cá
(133, '', 107, 4, 1); -- Nước Sốt Chấm

INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES
(130, 2, 'Nước Sốt Lẩu', '<p>Nước sốt lẩu đậm đà: Thái, chua cay, nấm, hải sản</p>', 'Nước Sốt Lẩu - An Nhiên Farm', 'Nước sốt lẩu đậm đà các loại: Thái, chua cay, nấm', 'nước sốt lẩu, lẩu thái, lẩu chua cay, lẩu nấm'),
(131, 2, 'Nước Sốt Nướng', '<p>Nước sốt nướng BBQ: Hàn Quốc, Nhật Bản, Mỹ</p>', 'Nước Sốt Nướng - An Nhiên Farm', 'Nước sốt nướng BBQ Hàn Quốc, Nhật, Mỹ chất lượng cao', 'nước sốt nướng, bbq sauce, sốt bulgogi, sốt teriyaki'),
(132, 2, 'Nước Sốt Kho Cá', '<p>Nước sốt kho cá truyền thống và hiện đại</p>', 'Nước Sốt Kho Cá - An Nhiên Farm', 'Nước sốt kho cá truyền thống và hiện đại đậm đà', 'nước sốt kho cá, kho cá, sốt cá'),
(133, 2, 'Nước Sốt Chấm', '<p>Nước sốt chấm: Mắm nêm, mắm ruốc, tương ớt</p>', 'Nước Sốt Chấm - An Nhiên Farm', 'Nước sốt chấm đặc sản: mắm nêm, mắm ruốc, tương ớt', 'nước sốt chấm, mắm nêm, mắm ruốc, tương ớt');

-- Map subcategories to store  
INSERT INTO oc_category_to_store (category_id, store_id) VALUES
(110, 0), (111, 0), (112, 0), (120, 0), (121, 0), (122, 0), (123, 0), (130, 0), (131, 0), (132, 0), (133, 0);

-- Set up Vietnamese language as default
UPDATE oc_setting SET value = 'vi-vn' WHERE `key` = 'config_language' AND store_id = 0;
UPDATE oc_setting SET value = 'vi-vn' WHERE `key` = 'config_language_admin' AND store_id = 0;
