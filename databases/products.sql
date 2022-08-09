CREATE TABLE Products (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
	category VARCHAR(255) NOT NULL, 
    price1 DECIMAL(4,2) NOT NULL,
    sale1 DECIMAL(4,2),
    size1 INT NOT NULL,
	price2 DECIMAL(4,2),
    sale2 DECIMAL(4,2),
    size2 INT,
   	image1 VARCHAR(511) NOT NULL,
    image2 VARCHAR(511) NOT NULL,
    image3 VARCHAR(511)
);

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2, image3) 
VALUES ('Intrasdala Lotion', 'Intrasdala', 15.00, 475, 20.00, 700, 'images/product-page/intrasdala1.jpg', 'images/product-page/intrasdala2.jpg', 'images/product-page/intrasdala3.jpg');

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2) 
VALUES ('Niacinamide 10% + Zinc 1%', 'The Ordinary', 7.10, 30, 12.80, 60, 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dwb6ce6054/Images/products/The%20Ordinary/rdn-niacinamide-10pct-zinc-1pct-30ml.png', 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dwec39364c/Images/products/The%20Ordinary/Product%20Swatches/rdn-niacinamide-10pct-zinc-1pct-swatch.jpg');

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2) 
VALUES ('Salicylic Acid 2% Masque', 'The Ordinary', 13.10, 50, 25.10, 100, 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw8e328a23/Images/products/The%20Ordinary/rdn-salicylic-acid-2pct-masque-50ml.png', 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw41f17b4a/Images/products/The%20Ordinary/Product%20Swatches/rdn-salicylic-acid-2pct-masque-50ml-swatch.jpg');         

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2) 
VALUES ('Hyaluronic Acid 2% + B5', 'The Ordinary', 8.20, 30, 14.70, 60, 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dwa736cdde/Images/products/The%20Ordinary/rdn-hyaluronic-acid-2pct-b5-30ml.png', 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw6effbfff/Images/products/The%20Ordinary/Product%20Swatches/rdn-hyaluronic-acid-2pct-b5-swatch.jpg');                   

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2) 
VALUES ('Natural Moisturizing Factors + HA', 'The Ordinary', 6.40, 30, 11.50, 100, 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw996fd3fb/Images/products/The%20Ordinary/rdn-natural-moisturizing-factors-ha-30ml.png', 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dweb88d2b4/Images/products/The%20Ordinary/Product%20Swatches/rdn-natural-moisturizing-factors-ha-swatch.jpg');

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2) 
VALUES ('Alpha Arbutin 2% + HA', 'The Ordinary', 10.90, 30, 20.70, 60, 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw1327a99b/Images/products/The%20Ordinary/rdn-alpha-arbutin-2pct-ha-30ml.png', 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw74bbf219/Images/products/The%20Ordinary/Product%20Swatches/rdn-alpha-arbutin-2pct-ha-30ml-swatch.jpg');  

INSERT INTO Products (title, category, price1, size1, image1, image2) 
VALUES ('Vitamin C Suspension 30% in Silicone', 'The Ordinary', 8.20, 30, 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw845da38c/Images/products/The%20Ordinary/rdn-vitamin-c-suspension-30pct-in-silicone-30ml.png', 'https://theordinary.com/dw/image/v2/BFKJ_PRD/on/demandware.static/-/Sites-deciem-master/default/dw696c08c3/Images/products/The%20Ordinary/Product%20Swatches/rdn-vitamin-c-suspension-30pct-in-silicone-30ml-swatch.jpg');

INSERT INTO Products (title, category, price1, size1, image1, image2, image3) 
VALUES ('Futuredew', 'Glossier', 30.00, 30, 'https://images.ctfassets.net/p3w8f4svwgcg/xh08bsUhHnedJS0iPl9s8/d366344f475821ee283fd82a07c9df38/1.png?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/6Iw3ItF8SUncVYvzQgTme7/c9601836db0a9bca6d38b901f85dd410/4.png?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/4FmenwK86FfTwurn9wJrJW/8d4963dfd8b470c8be1a8c00e0c069a3/2.jpg?w=1400&q=80&fm=webp');

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2, image3) 
VALUES ('Milky Jelly Cleanser', 'Glossier', 11.00, 60, 22.00, 177, 'https://images.ctfassets.net/p3w8f4svwgcg/4yaPsX1SaYpFfGjaOxy0yt/39601e753821ef7459069d6ad198f043/MilkyJelly_Carousel_1.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/7D0qra4EFfzbCwou37WHwS/35598c5f366201815b96c54403b2d8da/MilkyJelly_Carousel_7.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/2uYYEPLZLVIpMeo4LLOVt9/9c5c97e853aeb63154567e2cc6174c11/MilkyJelly_Carousel_2.jpg?w=1400&q=80&fm=webp');

INSERT INTO Products (title, category, price1, size1, image1, image2, image3) 
VALUES ('Priming Moisturizer', 'Glossier', 27.00, 50, 'https://images.ctfassets.net/p3w8f4svwgcg/3Rb4Ls4oUTo8HfyU5RUQvt/ff63e1256c0115e770caa5b5afd66c48/PrimingMoisturizer.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/1VNsuSZkogEc5OmMOQQ0V5/e09a5a14f26fac40985477ff6a1650e4/Glossier-Priming-Moisturizer-06.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/7CZg37YzU0HwGbHAoVDHxY/929839afb9edd00989f52e03e9754ed2/Glossier-Priming-Moisturizer-05.jpg?w=1400&q=80&fm=webp');

INSERT INTO Products (title, category, price1, size1, image1, image2, image3) 
VALUES ('Super Bounce', 'Glossier', 35.00, 30, 'https://images.ctfassets.net/p3w8f4svwgcg/73N0vIqXUnMpB57dOVeJHx/9cec4d247d06a78308d6c7e0b3df2b68/SuperBounce_0_Global_01.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/7yWAtH4r08UPKRdSubKUqw/9a4659e4d17303988979982f845ed914/super-bounce_4.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/2q47lAL0Vv6p0IRxaxGsjK/44e59722a3a9fb91095845bcc7ae7321/super-bounce_5.jpg?w=1400&q=80&fm=webp');

INSERT INTO Products (title, category, price1, size1, image1, image2, image3) 
VALUES ('Super Glow', 'Glossier', 35.00, 30, 'https://images.ctfassets.net/p3w8f4svwgcg/6jYsk2gkdy7SdeQacRi5cD/91c5caac963a174980341a3573df6120/SuperGlow_0_Global_01.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/1hjr6r7iDcUs2JnKhnyFXJ/fb6e0148c882b9e12667fa81ae454e4a/super-glow_4.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/58EUXGe7OnDf4wN22ISSV8/ef003e9eac43de310a82d5154528cc12/SuperGlow_0_Global_02.jpg?w=1400&q=80&fm=webp');

INSERT INTO Products (title, category, price1, size1, image1, image2, image3) 
VALUES ('Super Pure', 'Glossier', 35.00, 30, 'https://images.ctfassets.net/p3w8f4svwgcg/5jezQz2OgrHmY2G2aPxOYJ/60f8e2ed5e86eaa52ad0f7e385dc32b6/SuperPure_0_Global_01.jpg?w=1400&q=80&fm=webp', 'https://images.ctfassets.net/p3w8f4svwgcg/2ty5q67ynAa0utOZZ3pJ2Y/7148065f8dd4c1919121df1b61349f84/super-pure_4.jpg?w=1400&q=80&fm=webp','https://images.ctfassets.net/p3w8f4svwgcg/22hiQdPxxNc7yju6EujpDJ/536008a0f9d8f7559eebc1c70f852b30/super-pure_2.jpg?w=1400&q=80&fm=webp');

INSERT INTO Products (title, category, price1, size1, price2, size2, image1, image2) 
VALUES ('Watermelon Glow PHA + BHA Pore-Tight Toner', 'Glow Recipe', 20.00, 40, 45.00, 150, 'https://www.sephora.com/productimages/sku/s2348431-main-zoom.jpg', 'https://www.sephora.com/productimages/sku/s2348431-av-02-zoom.jpg');

INSERT INTO Products (title, category, price1, size1, image1, image2) 
VALUES ('Strawberry Smooth BHA + AHA Salicylic Acid Serum', 'Glow Recipe', 53.00, 30, 'https://www.sephora.com/productimages/sku/s2535615-main-zoom.jpg', 'https://www.sephora.com/productimages/product/p482535-av-3-zoom.jpg');

INSERT INTO Products (title, category, price1, size1, image1, image2) 
VALUES ('Watermelon Glow Niacinamide Dew Drops', 'Glow Recipe', 45.00, 40, 'https://www.sephora.com/productimages/sku/s2404846-main-zoom.jpg', 'https://www.sephora.com/productimages/sku/s2404846-av-04-zoom.jpg');

INSERT INTO Products (title, category, price1, size1, image1, image2) 
VALUES ('Plum Plump Hyaluronic Acid Moisturizer', 'Glow Recipe', 52.00, 50, 'https://www.sephora.com/productimages/sku/s2535128-main-zoom.jpg', 'https://www.sephora.com/productimages/sku/s2535128-av-04-zoom.jpg');

INSERT INTO Products (title, category, price1, size1, image1, image2) 
VALUES ('Papaya Sorbet Smoothing Enzyme Cleansing Balm & Makeup Remover', 'Glow Recipe', 42.00, 100, 'https://www.sephora.com/productimages/sku/s2371516-main-zoom.jpg', 'https://www.sephora.com/productimages/sku/s2371516-av-03-zoom.jpg');

INSERT INTO Products (title, category, price1, size1, image1, image2) 
VALUES ('Avocado Ceramide Redness Relief Serum', 'Glow Recipe', 56.00, 30, 'https://www.sephora.com/productimages/sku/s2450096-main-zoom.jpg', 'https://www.sephora.com/productimages/sku/s2450096-av-02-zoom.jpg');