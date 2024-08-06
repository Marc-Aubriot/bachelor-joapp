# RUN SQL FROM HERE

insert into articles (title, photo, alt)
values 
('Consultez la cartographie des JO!', 'jo-map.png', 'Carte des JO 2024'),
('Les épreuves de surf !', 'surf.jpg', 'Un surfeur sur une vague'),
('Les épreuves de natation !', 'arena.jpg', 'La piscine des JOs'),
('Les épreuves de hanball !', 'handball.jpg', 'Terrain de hand des JOs'),
('Les épreuves de basketball !', 'basket.jpg', 'Terrain de basket des JOs'),
('Les épreuves de triathlon !', 'triatlon.jpg', 'Photo de triathlon');

insert into banner_photos (name)
values 
('st-denis.jpg'),
('grand-palais.jpg'),
('bercy.jpg'),
('vaires.jpg'),
('versailles.jpg');

insert into tickets (title, photo, price, description, color, stripe_item_price)
values
('Duo', 'duo.jpg', '400', 'Billet pour 2 entrées', 'blue', 'price_1PgXmtRtjtpXYIzjcNO9UDsP'),
('Solo', 'solo.jpg', '250', 'Billet pour 1 entrée', 'white', 'price_1PkAikRtjtpXYIzjKnnFdh0W'),
('Familiale', 'familiale.jpg', '700', 'Billet pour 4 entrées', 'red', 'price_1PgXnMRtjtpXYIzj4oLrOWXj');