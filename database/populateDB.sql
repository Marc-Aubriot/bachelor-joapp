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

insert into tickets (title, photo, price, description, color, stripe_checkout_link)
values
('Duo', 'duo.jpg', '400', 'Billet pour 2 entrées', 'blue', 'https://buy.stripe.com/test_3cs4gF0hSeHydoc3cg'),
('Solo', 'solo.jpg', '250', 'Billet pour 1 entrée', 'white', 'https://buy.stripe.com/test_8wMdRfc0AgPGck828d'),
('Familiale', 'familiale.jpg', '740', 'Billet pour 4 entrées', 'red', 'https://buy.stripe.com/test_eVa4gF9Ss56Y4RG7su');