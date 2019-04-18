<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //BIRTHDAY

        Product::create([
            'id_product' => '10001', 
            'name_product' => 'Arrangement Your Day', 
            'description' => 'Jolly and bold colors, but in pastel shades, just to add a little refinement. With delicate flowers, such as peach roses or spray roses.', 
            'price' => 50, 
            'category' => 'Birthday', 
            'photo' => '/public/images/Products/BIRTHDAY/B1.png'
        ]);

        Product::create([
            'id_product' => '10002', 
            'name_product' => 'Arrangement Happy Birthday', 
            'description' => 'An arrangement like a miniature garden: greenery, scented flowers and the joy to have the nature within reach. ', 
            'price' => 47, 
            'category' => 'Birthday', 
            'photo' => '/public/images/Products/BIRTHDAY/B2.png'
        ]);

        Product::create([
            'id_product' => '10003', 
            'name_product' => 'Bouquet Happines petals', 
            'description' => 'How does a perfect day start? With a bright and full of cheerful bouquet. The bouquet contains: 1 white hydrangea, 11 yellow freesias, 3 yellow roses, greenery. \r\n', 
            'price' => 47, 
            'category' => 'Birthday', 
            'photo' => '/public/images/Products/BIRTHDAY/B3.png'
        ]);

        Product::create([
            'id_product' => '10004', 
            'name_product' => 'Bouquet A perfect day', 
            'description' => 'The most beautiful surprise when you want to make her happy ... a bunch of beautiful flowers! \r\nThis bouquet contains 1 green / pink hydrangea, 3 pink chrysanthemum, 4 purple irises, 3 red dianthus, 2 red roses, 3 cups of pink cymbidium orchids and greenery. ', 
            'price' => 52, 
            'category' => 'Birthday', 
            'photo' => '/public/images/Products/BIRTHDAY/B4.png'

        ]);

        Product::create([
            'id_product' => '10005', 
            'name_product' => 'Bouquet Summer Joy', 
            'description' => 'How does a perfect day start? With a bright and full of cheerful bouquet. The bouquet contains: 1 white hydrangea, 11 yellow freesias, 3 yellow roses, greenery. \r\n', 
            'price' => 65, 
            'category' => 'Birthday', 
            'photo' => '/public/images/Products/BIRTHDAY/B5.png'
        ]);




        //FESTIVAL

        Product::create([
            'id_product' => '20001', 
            'name_product' => 'Puppy festival', 
            'description' => 'White puppy made from flowers in  beautiful basket.', 
            'price' => 60, 
            'category' => 'BiFestivalrthday', 
            'photo' => '/public/images/Products/FESTIVAL/Fe1.png'
        ]);

        Product::create([
            'id_product' => '20002', 
            'name_product' => 'Puppy Easter', 
            'description' => 'White puppy with bunny ears made from flowers in  beautiful basket.', 
            'price' => 65, 
            'category' => 'Festival', 
            'photo' => '/public/images/Products/FESTIVAL/Fe2.png'
        ]);

        Product::create([
            'id_product' => '20003', 
            'name_product' => 'Bear Easter', 
            'description' => 'White Tedydy-bear made from delicate flowers.. ', 
            'price' => 55, 
            'category' => 'Festival', 
            'photo' => '/public/images/Products/FESTIVAL/Fe3.png'
        ]);

        Product::create([
            'id_product' => '20004', 
            'name_product' => 'Rainbow Roses', 
            'description' => 'Culorfull roses that will bring you joy! ', 
            'price' => 50, 
            'category' => 'Festival', 
            'photo' => '/public/images/Products/FESTIVAL/Fe4.png'
        ]);




        //FUNERAL

        Product::create([
            'id_product' => '30001', 
            'name_product' => 'Garden Wreath', 
            'description' => 'An exquisite round wreath with blooms inspired by the lasting impressions a loved one makes on our lives. Surround a treasured photograph, poem or other dear memento with sweet, green carnations, white and green chrysanthemums and the special beauty of green cymbidium orchids.', 
            'price' => 65, 
            'category' => 'Funeral', 
            'photo' => '/public/images/Products/FUNERAL/F1.png'
        ]);

        Product::create([
            'id_product' => '30002', 
            'name_product' => 'Funeral Cross', 
            'description' => 'Stunningly simple, this lovely floral cross is a beautiful addition to the memorial service, honoring someone for whom faith was an essential part of life. ', 
            'price' => 100, 
            'category' => 'Funeral', 
            'photo' => '/public/images/Products/FUNERAL/F2.png'
        ]);

        Product::create([
            'id_product' => '30003', 
            'name_product' => 'In Memoriam Wreath', 
            'description' => 'Keep fond memories close to your heart with this lovely feminine floral wreath. It is perfect to surround a framed photo of the departed.', 
            'price' => 125, 
            'category' => 'Funeral', 
            'photo' => '/public/images/Products/FUNERAL/F3.png'
        ]);

        Product::create([
            'id_product' => '30004', 
            'name_product' => 'Standing Spray', 
            'description' => 'This exquisite standing spray in white and green includes roses, Asiatic lilies, spray chrysanthemums and spray carnations arranged amongst palm fronds and lush greens. Accented by white satin ribbon and standing on a wire easel, this standing spray will make a truly beautiful addition to the service.', 
            'price' => 100, 
            'category' => 'Funeral', 
            'photo' => '/public/images/Products/FUNERAL/F4.png'
        ]);

        Product::create([
            'id_product' => '30005', 
            'name_product' => 'Teardrop Spray', 
            'description' => 'This traditional floral spray in varying shades of pink includes bright cerise germini plus light and dark pink carnations. These fresh flowers are carefully arranged and interspersed with white gypsophila, leather leaf and eucalyptus.', 
            'price' => 75, 
            'category' => 'Funeral', 
            'photo' => '/public/images/Products/FUNERAL/F5.png'
        ]);




        //VALENTINES

        Product::create([
            'id_product' => '40001', 
            'name_product' => 'Tender heart', 
            'description' => 'Tenderness brings peace and security in a relationship and expressed love without saying a word. When you are away from her, but want to treat her gentle, send her a Tender heart!', 
            'price' => 60, 
            'category' => 'Valentines', 
            'photo' => '/public/images/Products/VALENTINES/V1.png'
        ]);

        Product::create([
            'id_product' => '40002', 
            'name_product' => 'In the mood for love', 
            'description' => 'When you are craving for love, our designers recommend you an excellent recipe: take no more and no less than 7 pink roses, mix them well with purple phalenopsis and wax flowers, in a heart shaped bowl, till the composition becomes perfect!', 
            'price' => 53, 
            'category' => 'Valentines', 
            'photo' => '/public/images/Products/VALENTINES/V2.png'
        ]);

        Product::create([
            'id_product' => '40003', 
            'name_product' => 'The joy of love', 
            'description' => 'There is no greater joy than the one you feel when you love. For this joy, which we are sure you can feel it, we`ve created a special flower bouquet, on Valentine`s Day, in the most optimistic color and the moste sincere color. ', 
            'price' => 100, 
            'category' => 'Valentines', 
            'photo' => '/public/images/Products/VALENTINES/V3.png'
        ]);

        Product::create([
            'id_product' => '40004', 
            'name_product' => 'True love arrangement', 
            'description' => 'If you`ve found your true love really you are a really happy man. So it worths celebrating, especially on Valentine`s Day! Not only that you have found what all people seek, whole life, but you`ve also found the perfect gift for her and - the floral arrangement \"True love\"', 
            'price' => 75, 
            'category' => 'Valentines', 
            'photo' => '/public/images/Products/VALENTINES/V4.png'
        ]);

        Product::create([
            'id_product' => '40005', 
            'name_product' => 'Sweet Valentine', 
            'description' => 'You are romantic if sometimes you just want to send her a special bouquet with roses, just to see her smile. ', 
            'price' => 75, 
            'category' => 'Valentines', 
            'photo' => '/public/images/Products/VALENTINES/V5.png'
        ]);

        Product::create([
            'id_product' => '40006', 
            'name_product' => 'Eternity rose', 
            'description' => 'Do you remember that specific Disney movie? One of the most beautiful ones, with a really romantic symbol of love: the (almost) eternal rose under the dome. Well, our rose is even better!
            It will never lose its petals, since you’ve already found true love. Just pick a color, put it into your basket and we will deliver it in an extra big size for people with an XXL heart.', 
            'price' => 300, 
            'category' => 'Valentines', 
            'photo' => '/public/images/Products/VALENTINES/V6.png'
        ]);




        //WEDDING

        Product::create([
            'id_product' => '50001', 
            'name_product' => 'Pink Story', 
            'description' => 'The love story is what inspires us in creating the most delicate bouquet.', 
            'price' => 75, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W1.png'
        ]);

        Product::create([
            'id_product' => '50002', 
            'name_product' => 'Table decoration', 
            'description' => 'A floral arrangementmade of pink minirosa, purple roses, pink and purple lisianthus, white gladiolus, dendrobium orchidee, wax flower and a high vase. All thease will express the sincerity and purity of joining two destinies through the institution of marriage. ', 
            'price' => 92, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W2.png'
        ]);

        Product::create([
            'id_product' => '50003', 
            'name_product' => 'Vintage table arrangement', 
            'description' => 'Vintage table arrangement specifically designed for a vintage event, made to amaze through originality and color.', 
            'price' => 60, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W3.png'
        ]);

        Product::create([
            'id_product' => '50004', 
            'name_product' => 'Autumn wedding arrangement', 
            'description' => 'Autumn Wedding Arrangements for the most important event of your life. Choose to give joy to your guests with flowers in shades of autumn, colorful and special. ', 
            'price' => 67, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W4.png'
        ]);

        Product::create([
            'id_product' => '50005', 
            'name_product' => 'Painting', 
            'description' => 'Like a painting in it`s finest colors, chose the most delicate and colorful flowers for your unforgettable day!', 
            'price' => 115, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W5.png'
        ]);

        Product::create([
            'id_product' => '50006', 
            'name_product' => 'Passion', 
            'description' => 'Passion, love, refinement. The elements that form your story.', 
            'price' => 63, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W6.png'
        ]);

        Product::create([
            'id_product' => '50007', 
            'name_product' => 'Smile', 
            'description' => 'The best day is when you say \"YES\".', 
            'price' => 65, 
            'category' => 'Wedding', 
            'photo' => '/public/images/Products/WEDDING/W7.png',
        ]);




        //CUSTOM

        Product::create([
            'id_product' => '60001', 
            'name_product' => 'Tulip', 
            'description' => 'Tulip', 
            'price' => 5, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C1.png'
        ]);

        Product::create([
            'id_product' => '60002', 
            'name_product' => 'Rose', 
            'description' => 'Rose', 
            'price' => 7, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C2.png'
        ]);

        Product::create([
            'id_product' => '60003', 
            'name_product' => 'Cala', 
            'description' => 'Cala', 
            'price' => 6, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C3.png'
        ]);

        Product::create([
            'id_product' => '60004', 
            'name_product' => 'Lili', 
            'description' => 'Lili', 
            'price' => 13, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C4.png'
        ]);

        Product::create([
            'id_product' => '60005', 
            'name_product' => 'Orchid', 
            'description' => 'Orchid', 
            'price' => 4, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C5.png'
        ]);

        Product::create([
            'id_product' => '60006', 
            'name_product' => 'Freesia', 
            'description' => 'Freesia', 
            'price' => 4, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C6.png'
        ]);

        Product::create([
            'id_product' => '60007', 
            'name_product' => 'Carnation', 
            'description' => 'Carnation', 
            'price' => 3, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C7.png'
        ]);

        Product::create([
            'id_product' => '60008', 
            'name_product' => 'Gerbera', 
            'description' => 'Gerbera', 
            'price' => 5, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C8.png'
        ]);

        Product::create([
            'id_product' => '60009', 
            'name_product' => 'Iris', 
            'description' => 'Iris', 
            'price' => 6, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C9.png'
        ]);

        Product::create([
            'id_product' => '60010', 
            'name_product' => 'Alstromeria', 
            'description' => 'Alstromeria', 
            'price' => 6, 
            'category' => 'Custom', 
            'photo' => '/public/images/Products/CUSTOM/C10.png'
        ]);

    }
}
