<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Organic Apples',
                'price' => 3.99,
                'description' => 'Organic apples are a testament to the bounty of nature and the dedication of sustainable farming practices. Grown without the use of synthetic pesticides or artificial chemicals, these apples embody purity and nutrition in every bite. Sourced from local orchards committed to environmental stewardship, our organic apples are handpicked at the peak of freshness, ensuring optimal flavor and nutritional value.
        
                Each apple is a natural powerhouse of vitamins, antioxidants, and dietary fiber, making it an ideal choice for health-conscious individuals. Whether enjoyed fresh as a satisfying snack, incorporated into wholesome desserts, or added to savory dishes for a touch of sweetness, our organic apples offer versatility and superior taste. By choosing organic, you support sustainable agriculture and contribute to the preservation of our ecosystem.
        
                Our commitment to quality extends beyond the fruit itself. We prioritize the well-being of our orchards and the communities we serve, ensuring that every apple meets rigorous standards of organic certification. From tree to table, our organic apples represent a delicious and nutritious choice that nourishes both body and conscience.'
            ],
            [
                'name' => 'Whole Grain Bread',
                'price' => 2.99,
                'description' => 'Whole grain bread is a cornerstone of wholesome nutrition, crafted with care from 100% whole wheat flour and baked fresh daily. Our commitment to quality begins with selecting premium grains, milled to preserve their natural goodness and rich flavor. Each loaf is a testament to our dedication to providing nutritious food without compromise.
        
                Packed with essential nutrients, whole grain bread offers a wealth of dietary fiber, vitamins, and minerals essential for maintaining a balanced diet. It serves as a versatile staple for any meal, whether toasted for a hearty breakfast, layered with fresh ingredients for a nutritious sandwich, or served alongside soups and salads. Enjoy the satisfying texture and robust flavor that only whole grains can provide.
        
                We take pride in our artisanal approach to baking, ensuring each slice of our whole grain bread delivers superior taste and nutritional benefits. Free from added sugars and artificial preservatives, it represents a wholesome choice for discerning consumers seeking a healthier lifestyle. Embrace the goodness of whole grains with every bite, knowing you\'re making a delicious and nutritious choice for you and your family.'
            ],
            [
                'name' => 'Free-Range Eggs',
                'price' => 4.49,
                'description' => 'Our free-range eggs are a testament to the principles of ethical farming and superior quality. Sourced from chickens raised in open pastures, our hens enjoy the freedom to roam and forage, resulting in eggs with rich, golden yolks and exceptional flavor. We prioritize the welfare of our animals and adhere to rigorous standards of humane farming practices, ensuring the health and happiness of our flock.
        
                High in protein and essential nutrients, free-range eggs are a versatile addition to any kitchen. Whether used in baking to add moisture and richness, scrambled for a hearty breakfast, or boiled for a quick and nutritious snack, our eggs offer unmatched quality and taste. They serve as a nutritious foundation for a variety of dishes, providing vital nutrients for optimal health.
        
                By choosing free-range eggs, you support sustainable agriculture and animal welfare. Our commitment to quality extends from the pasture to your table, ensuring each egg meets our stringent standards for freshness and flavor. Embrace the difference with every bite, knowing you\'re making a conscious choice for your well-being and the environment.'
            ],
            [
                'name' => 'Almond Milk',
                'price' => 3.49,
                'description' => 'Almond milk offers a creamy and nutritious alternative to traditional dairy beverages, perfect for those with lactose intolerance or seeking a plant-based diet. Made from high-quality almonds, our almond milk is crafted to deliver a smooth texture and a rich, nutty flavor without the use of artificial additives or preservatives. It serves as a versatile staple in any kitchen, suitable for drinking, cooking, or adding to your favorite recipes.
        
                Rich in calcium, vitamin D, and other essential nutrients, almond milk provides a wholesome source of nutrition with every sip. It complements cereals, coffee, and smoothies, enhancing their taste and nutritional profile. Our commitment to quality ensures that each batch of almond milk meets strict standards for purity and freshness, offering a delicious and guilt-free beverage option.
        
                Choose almond milk as part of a balanced diet and enjoy its numerous health benefits, including improved bone health and heart function. Whether enjoyed cold or warm, our almond milk promises a satisfying experience that nourishes your body and delights your taste buds.'
            ],
            [
                'name' => 'Greek Yogurt',
                'price' => 5.99,
                'description' => 'Greek yogurt is renowned for its rich and creamy texture, packed with protein and probiotics essential for digestive health. Made from fresh milk, our Greek yogurt is crafted to deliver superior taste and nutritional benefits without the addition of sugars or artificial ingredients. It serves as a versatile addition to any meal, whether enjoyed plain, paired with honey, or mixed with your favorite fruits.
        
                High in protein, Greek yogurt supports muscle growth and repair, making it an ideal choice for athletes and health-conscious individuals alike. The probiotics present in yogurt contribute to a healthy gut microbiome, aiding digestion and boosting immune function. Embrace the goodness of probiotics with every spoonful, knowing you\'re making a nutritious choice for your well-being.
        
                Our commitment to quality extends to the sourcing of ingredients and the production process, ensuring each cup of Greek yogurt meets rigorous standards for freshness and flavor. Indulge in the richness of Greek yogurt and experience the satisfaction of a wholesome and delicious dairy product.'
            ],
            [
                'name' => 'Quinoa',
                'price' => 6.99,
                'description' => 'Quinoa is a versatile superfood known for its nutritional benefits and culinary versatility. Packed with protein, fiber, and essential amino acids, quinoa serves as a nutritious alternative to traditional grains. It\'s gluten-free and easy to digest, making it suitable for individuals with dietary restrictions or seeking a healthier lifestyle. From salads to stir-fries, quinoa adds a nutty flavor and satisfying texture to a variety of dishes.
        
                Our quinoa is sourced from responsible growers committed to sustainable farming practices, ensuring the highest quality and freshness. It\'s a complete protein source, providing all nine essential amino acids necessary for muscle repair and growth. Incorporate quinoa into your diet to enjoy its numerous health benefits, including improved digestion, enhanced energy levels, and better overall health.
        
                Embrace the versatility of quinoa and explore new culinary possibilities with this nutrient-dense superfood. Whether as a side dish, main ingredient, or even in baked goods, quinoa offers a delicious way to elevate your meals while supporting your nutritional goals.'
            ],
            [
                'name' => 'Organic Spinach',
                'price' => 2.99,
                'description' => 'Organic spinach is a powerhouse of essential vitamins and minerals, offering a crisp texture and vibrant flavor that enhances any dish. Grown without the use of synthetic pesticides or fertilizers, our spinach is cultivated in nutrient-rich soil to ensure superior taste and nutritional value. It\'s perfect for salads, smoothies, or cooked dishes, providing a convenient way to boost your daily intake of greens.
        
                Spinach is rich in antioxidants, vitamins A, C, and K, and minerals such as iron and calcium, essential for maintaining overall health. Its versatile nature makes it a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate organic spinach into your diet to enjoy its numerous health benefits, including improved immunity, enhanced bone health, and better digestion.
        
                Our commitment to organic farming practices and sustainable agriculture ensures that each leaf of spinach meets stringent quality standards. Taste the difference with every bite and savor the freshness and purity of our organic spinach, knowing you\'re making a nutritious choice for yourself and the planet.'
            ],
            [
                'name' => 'Brown Rice',
                'price' => 3.49,
                'description' => 'Brown rice is a wholesome and nutritious staple for any kitchen, offering a hearty texture and nutty flavor that complements a variety of dishes. Made from whole grain kernels with the bran intact, our brown rice retains its natural fiber and essential nutrients, including vitamins, minerals, and antioxidants. It serves as a versatile base for meals, whether used in stir-fries, soups, or as a side dish alongside your favorite proteins.
        
                High in dietary fiber, brown rice supports digestive health and helps regulate blood sugar levels, making it a suitable choice for individuals managing their weight or seeking to improve their overall well-being. Its gluten-free nature and rich nutritional profile make it an excellent alternative to refined grains. Embrace the goodness of whole grains with each serving of our brown rice, knowing you\'re making a nutritious and satisfying choice for yourself and your family.
        
                We take pride in sourcing the finest brown rice and adhering to strict quality standards throughout the production process. From field to fork, our brown rice reflects our commitment to providing wholesome and delicious food options that support a healthy lifestyle.'
            ],
            [
                'name' => 'Chia Seeds',
                'price' => 7.99,
                'description' => 'Chia seeds are nutrient-dense powerhouses, prized for their impressive health benefits and culinary versatility. Packed with omega-3 fatty acids, fiber, and protein, chia seeds serve as a valuable addition to any diet. They offer a mild, nutty flavor that complements a variety of foods, from smoothies and yogurt to baked goods and salads. Incorporating chia seeds into your meals provides sustained energy, supports heart health, and aids in digestion.
        
                Our chia seeds are sourced from reputable growers committed to sustainable farming practices, ensuring purity and freshness. They\'re rich in antioxidants, vitamins, and minerals essential for overall well-being. Whether you\'re looking to boost your nutrient intake, support weight management, or enhance your athletic performance, chia seeds offer a convenient and delicious solution.
        
                Embrace the versatility of chia seeds and explore new ways to incorporate them into your daily routine. From breakfast to dinner, these tiny seeds pack a nutritional punch that promotes optimal health and vitality.'
            ],
            [
                'name' => 'Raw Honey',
                'price' => 8.99,
                'description' => 'Raw honey is a natural sweetener prized for its rich flavor and numerous health benefits. Harvested from local beekeepers committed to sustainable practices, our raw honey is free from additives, preservatives, and processing. It retains its natural enzymes, antioxidants, and trace minerals, making it a healthier alternative to refined sugar. Enjoy raw honey drizzled over yogurt, spread on toast, or used in cooking and baking for a touch of natural sweetness.
        
                High in antioxidants, raw honey supports immune function and promotes healing. Its antibacterial properties can soothe sore throats and coughs, making it a versatile remedy for common ailments. Incorporate raw honey into your daily routine to experience its many health benefits and enhance the flavor of your favorite foods and beverages.
        
                Our commitment to quality extends to every jar of raw honey we offer, ensuring purity and freshness with each spoonful. Taste the difference with our locally sourced raw honey and savor the sweetness of nature, knowing you\'re making a wholesome choice for yourself and your family.'
            ],
            [
                'name' => 'Oatmeal',
                'price' => 4.49,
                'description' => 'Oatmeal is a heart-healthy breakfast choice made from 100% whole grain oats, offering a satisfying texture and robust flavor. Packed with dietary fiber, vitamins, and minerals, oatmeal serves as a nutritious foundation for your day. It supports digestive health, helps regulate cholesterol levels, and provides sustained energy to keep you feeling full and focused.
        
                Our oatmeal is free from added sugars and artificial ingredients, ensuring a wholesome and delicious start to your morning. Customize your bowl with fresh fruits, nuts, or a drizzle of honey to enhance its flavor and nutritional profile. Whether enjoyed hot or cold, oatmeal offers versatility and convenience without compromising on taste.
        
                Embrace the goodness of whole grains with each serving of our oatmeal and experience the satisfaction of a nutritious breakfast that fuels your day.'
            ],
            [
                'name' => 'Organic Carrots',
                'price' => 1.99,
                'description' => 'Organic carrots are a crisp and naturally sweet vegetable prized for their vibrant color and nutritional benefits. Grown without synthetic pesticides or fertilizers, our carrots are cultivated in nutrient-rich soil to ensure superior taste and purity. They\'re rich in beta-carotene, vitamins, and minerals essential for maintaining eye health, boosting immunity, and promoting overall well-being.
        
                Enjoy organic carrots raw as a crunchy snack, grated into salads for added texture, or roasted to bring out their natural sweetness. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate organic carrots into your diet to reap the benefits of their antioxidants, fiber, and phytonutrients.
        
                Our commitment to organic farming practices ensures that each carrot meets rigorous quality standards, from seed to harvest. Taste the difference with every bite and savor the freshness and purity of our organic carrots, knowing you\'re making a nutritious choice for yourself and the planet.'
            ],
            [
                'name' => 'Wild-Caught Salmon',
                'price' => 15.99,
                'description' => 'Wild-caught salmon is prized for its rich flavor, high-quality protein, and abundance of omega-3 fatty acids. Sustainably sourced from pristine waters, our salmon is responsibly harvested to ensure the health of ocean ecosystems and maintain fish populations. It\'s a nutritious choice for discerning consumers seeking seafood that\'s both delicious and environmentally friendly.
        
                High in omega-3 fatty acids, wild-caught salmon supports heart health, brain function, and overall well-being. Its lean protein content makes it a satisfying option for meals, whether grilled, baked, or pan-seared. Enjoy the rich flavor and tender texture of wild-caught salmon, knowing you\'re making a sustainable choice for your health and the planet.
        
                Our commitment to quality extends to every fillet of wild-caught salmon we offer, ensuring freshness and flavor with every bite. Taste the difference with our responsibly sourced salmon and enjoy the nutritional benefits of this versatile and delicious seafood.'
            ],
            [
                'name' => 'Avocado',
                'price' => 1.99,
                'description' => 'Avocado is a creamy and nutritious fruit prized for its rich flavor and versatility in culinary applications. High in healthy fats, vitamins, and minerals, avocados offer a host of health benefits, including support for heart health, improved digestion, and enhanced nutrient absorption. They serve as a delicious addition to salads, sandwiches, or simply enjoyed on their own.
        
                Embrace the natural goodness of avocados and enjoy their creamy texture and buttery flavor. They\'re a nutrient-dense fruit that adds a touch of indulgence to any meal while providing essential nutrients your body needs. Incorporate avocados into your diet to experience their numerous health benefits and culinary versatility.
        
                Our commitment to quality ensures that each avocado we offer meets rigorous standards for freshness and flavor. Taste the difference with our premium avocados and savor the natural goodness and nutritional benefits they provide.'
            ],
            [
                'name' => 'Broccoli',
                'price' => 2.49,
                'description' => 'Broccoli is a nutrient-dense vegetable prized for its crisp texture, vibrant color, and numerous health benefits. Rich in vitamins, minerals, and fiber, broccoli supports overall health and well-being. It\'s perfect for steaming, roasting, or adding to stir-fries, providing a convenient way to boost your daily intake of greens.
        
                Enjoy broccoli raw as a crunchy snack, lightly steamed to preserve its nutrients, or roasted to bring out its natural sweetness. Its versatility makes it a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate broccoli into your diet to reap the benefits of its antioxidants, fiber, and phytonutrients.
        
                Our commitment to quality ensures that each head of broccoli meets rigorous standards for freshness and flavor. Taste the difference with every bite and savor the crisp texture and vibrant flavor of our premium broccoli, knowing you\'re making a nutritious choice for yourself and your family.'
            ],
            [
                'name' => 'Sweet Potatoes',
                'price' => 3.49,
                'description' => 'Sweet potatoes are naturally sweet and nutrient-rich vegetables prized for their vibrant color and health benefits. High in fiber, vitamins, and antioxidants, sweet potatoes support digestive health, boost immunity, and promote overall well-being. They\'re perfect for baking, mashing, or roasting, offering a versatile option for meals and snacks.
        
                Enjoy sweet potatoes as a satisfying side dish, mashed with a touch of butter and seasoning, or roasted to caramelized perfection. Their natural sweetness makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate sweet potatoes into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to quality ensures that each sweet potato meets rigorous standards for freshness and flavor. Taste the difference with every bite and savor the rich flavor and nutritional benefits of our premium sweet potatoes, knowing you\'re making a wholesome choice for yourself and your family.'
            ],
            [
                'name' => 'Mixed Nuts',
                'price' => 9.99,
                'description' => 'Mixed nuts are a nutritious blend of almonds, cashews, walnuts, and pecans, offering a variety of flavors and health benefits. High in healthy fats, protein, and fiber, mixed nuts provide sustained energy and support overall health. They serve as a convenient snack option, perfect for on-the-go or as a topping for salads, yogurt, or oatmeal.
        
                Enjoy the rich flavors and textures of mixed nuts, whether eaten raw, roasted, or lightly salted. Their versatility makes them a favorite among health-conscious individuals seeking a satisfying snack. Incorporate mixed nuts into your diet to reap the benefits of their vitamins, minerals, and antioxidants.
        
                Our commitment to quality ensures that each batch of mixed nuts meets rigorous standards for freshness and flavor. Taste the difference with our premium blend of nuts and enjoy the natural goodness and nutritional benefits they provide.'
            ],
            [
                'name' => 'Coconut Oil',
                'price' => 7.99,
                'description' => 'Coconut oil is a versatile and nutritious oil prized for its health benefits and culinary applications. High in healthy fats, coconut oil offers a subtle coconut flavor and a wealth of nutritional advantages. It serves as an excellent alternative to traditional cooking oils, suitable for frying, baking, or sautéing.
        
                Enjoy the versatility of coconut oil in both savory and sweet dishes. Its high smoke point makes it ideal for high-heat cooking, while its natural sweetness enhances the flavor of baked goods and desserts. Incorporate coconut oil into your diet to experience its many health benefits, including improved heart health, enhanced metabolism, and support for brain function.
        
                Our commitment to quality ensures that each jar of coconut oil meets rigorous standards for purity and freshness. Taste the difference with our premium coconut oil and enjoy the natural goodness and nutritional benefits it provides.'
            ],
            [
                'name' => 'Berries',
                'price' => 5.99,
                'description' => 'Berries are vibrant and nutrient-rich fruits prized for their sweet flavor and numerous health benefits. Packed with antioxidants, vitamins, and fiber, berries support immune function, promote heart health, and enhance overall well-being. They serve as a delicious addition to smoothies, yogurt, or enjoyed fresh as a refreshing snack.
        
                Enjoy the natural sweetness and vibrant colors of berries, whether eaten alone or incorporated into your favorite recipes. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate berries into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to quality ensures that each batch of berries meets rigorous standards for freshness and flavor. Taste the difference with our premium selection of berries and enjoy the natural goodness and nutritional benefits they provide.'
            ],
            [
                'name' => 'Green Tea',
                'price' => 4.99,
                'description' => 'Green tea is a flavorful and nutritious beverage prized for its antioxidant properties and numerous health benefits. Made from the leaves of the Camellia sinensis plant, green tea offers a subtle earthy flavor and a wealth of phytonutrients. It serves as a refreshing drink, perfect for any time of day, hot or cold.
        
                Enjoy the natural goodness of green tea and experience its many health benefits, including support for heart health, enhanced metabolism, and improved cognitive function. Its mild caffeine content provides a gentle energy boost without the jitters associated with coffee. Incorporate green tea into your daily routine to reap the benefits of its antioxidants and promote overall well-being.
        
                Our commitment to quality ensures that each batch of green tea leaves is carefully selected and processed to preserve its freshness and flavor. Taste the difference with our premium green tea and savor the natural goodness and nutritional benefits it provides.'
            ],
            [
                'name' => 'Dark Chocolate',
                'price' => 6.99,
                'description' => 'Dark chocolate is a decadent treat prized for its rich flavor and numerous health benefits. Made from cocoa beans, dark chocolate contains antioxidants, vitamins, and minerals that support heart health, improve mood, and enhance cognitive function. It serves as a satisfying indulgence, perfect for satisfying your sweet tooth.
        
                Enjoy the rich, intense flavor of dark chocolate and experience its many health benefits, including reduced inflammation, improved blood flow, and enhanced brain function. Its moderate caffeine content provides a gentle energy boost while promoting relaxation and stress relief. Incorporate dark chocolate into your diet as a guilt-free treat that nourishes both body and soul.
        
                Our commitment to quality ensures that each bar of dark chocolate is crafted with care using the finest ingredients. Taste the difference with our premium dark chocolate and savor the richness and nutritional benefits it provides.'
            ],
            [
                'name' => 'Organic Tomatoes',
                'price' => 3.49,
                'description' => 'Organic tomatoes are a vibrant and flavorful fruit prized for their versatility and health benefits. Grown without synthetic pesticides or fertilizers, our tomatoes are cultivated in nutrient-rich soil to ensure superior taste and purity. They\'re rich in vitamins, minerals, and antioxidants essential for supporting immune function, promoting heart health, and enhancing overall well-being.
        
                Enjoy organic tomatoes fresh in salads, roasted to intensify their flavor, or blended into sauces and soups. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate organic tomatoes into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to organic farming practices ensures that each tomato meets rigorous standards for freshness and flavor. Taste the difference with every bite and savor the vibrant color and natural goodness of our organic tomatoes, knowing you\'re making a nutritious choice for yourself and the planet.'
            ],
            [
                'name' => 'Organic Kale',
                'price' => 2.99,
                'description' => 'Organic kale is a nutrient-dense leafy green prized for its robust flavor and numerous health benefits. Grown without synthetic pesticides or fertilizers, our kale is cultivated in nutrient-rich soil to ensure superior taste and purity. It\'s rich in vitamins A, C, and K, as well as antioxidants and fiber, essential for supporting immune function, promoting bone health, and enhancing overall well-being.
        
                Enjoy organic kale raw in salads, sautéed with garlic for a nutritious side dish, or blended into smoothies for a refreshing boost of greens. Its versatility makes it a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate organic kale into your diet to reap the benefits of its vitamins, minerals, and phytonutrients.
        
                Our commitment to organic farming practices ensures that each leaf of kale meets rigorous standards for freshness and flavor. Taste the difference with every bite and savor the robust flavor and natural goodness of our organic kale, knowing you\'re making a nutritious choice for yourself and the planet.'
            ],
            [
                'name' => 'Quinoa Flour',
                'price' => 4.99,
                'description' => 'Quinoa flour is a versatile and nutritious alternative to traditional wheat flour, prized for its high protein and fiber content. Made from finely ground quinoa seeds, quinoa flour offers a mild, nutty flavor that complements a variety of baked goods. It serves as a gluten-free option for individuals with dietary restrictions or those seeking a healthier alternative.
        
                Enjoy the nutritional benefits of quinoa flour in pancakes, muffins, bread, or as a thickening agent in sauces and soups. Its high protein content makes it a satisfying choice for maintaining energy levels and supporting muscle growth and repair. Incorporate quinoa flour into your baking recipes to add a nutritious boost and enhance the flavor and texture of your favorite treats.
        
                Our commitment to quality ensures that each batch of quinoa flour is carefully processed and tested to meet stringent standards for purity and freshness. Taste the difference with our premium quinoa flour and enjoy the natural goodness and nutritional benefits it provides.'
            ],
            [
                'name' => 'Organic Blueberries',
                'price' => 6.99,
                'description' => 'Organic blueberries are plump and flavorful fruits prized for their sweet taste and numerous health benefits. Grown without synthetic pesticides or fertilizers, our blueberries are cultivated in nutrient-rich soil to ensure superior taste and purity. They\'re packed with antioxidants, vitamins, and fiber, essential for supporting immune function, promoting heart health, and enhancing overall well-being.
        
                Enjoy organic blueberries fresh as a refreshing snack, blended into smoothies, or added to yogurt and cereal for a burst of flavor. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate organic blueberries into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to organic farming practices ensures that each blueberry meets rigorous standards for freshness and flavor. Taste the difference with every bite and savor the sweet flavor and natural goodness of our organic blueberries, knowing you\'re making a nutritious choice for yourself and the planet.'
            ],
            [
                'name' => 'Spinach',
                'price' => 2.99,
                'description' => 'Spinach is a versatile leafy green prized for its crisp texture, mild flavor, and numerous health benefits. Rich in vitamins, minerals, and antioxidants, spinach supports immune function, promotes bone health, and enhances overall well-being. It\'s perfect for salads, sautéed dishes, or blended into smoothies for a nutritious boost of greens.
        
                Enjoy spinach raw as a refreshing base for salads, sautéed with garlic and olive oil for a nutritious side dish, or blended into soups and sauces for added flavor and nutrients. Its versatility makes it a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate spinach into your diet to reap the benefits of its vitamins, minerals, and phytonutrients.
        
                Our commitment to quality ensures that each leaf of spinach meets rigorous standards for freshness and flavor. Taste the difference with every bite and savor the crisp texture and natural goodness of our premium spinach, knowing you\'re making a nutritious choice for yourself and your family.'
            ],
            [
                'name' => 'Black Beans',
                'price' => 1.99,
                'description' => 'Black beans are nutrient-dense legumes prized for their rich flavor, creamy texture, and numerous health benefits. High in protein, fiber, vitamins, and minerals, black beans support digestive health, promote heart health, and enhance overall well-being. They serve as a versatile ingredient in a variety of savory dishes, from soups and stews to salads and burritos.
        
                Enjoy black beans cooked and seasoned with spices, blended into dips and spreads, or added to salads for a satisfying protein boost. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate black beans into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to quality ensures that each batch of black beans meets rigorous standards for freshness and flavor. Taste the difference with our premium black beans and enjoy the rich flavor and nutritional benefits they provide.'
            ],
            [
                'name' => 'Peanut Butter',
                'price' => 5.99,
                'description' => 'Peanut butter is a creamy and nutritious spread made from roasted peanuts, prized for its rich flavor and numerous health benefits. High in protein, healthy fats, vitamins, and minerals, peanut butter supports energy production, muscle growth and repair, and overall well-being. It serves as a delicious addition to toast, smoothies, or enjoyed straight from the jar.
        
                Enjoy the natural goodness of peanut butter and experience its satisfying texture and rich flavor. It\'s a versatile ingredient that adds a nutty twist to both sweet and savory dishes. Incorporate peanut butter into your diet to reap the benefits of its vitamins, minerals, and antioxidants while satisfying your cravings.
        
                Our commitment to quality ensures that each jar of peanut butter is crafted with care using the finest ingredients. Taste the difference with our premium peanut butter and enjoy the rich flavor and nutritional benefits it provides.'
            ],
            [
                'name' => 'Chickpeas',
                'price' => 1.99,
                'description' => 'Chickpeas are nutrient-dense legumes prized for their mild flavor, creamy texture, and numerous health benefits. High in protein, fiber, vitamins, and minerals, chickpeas support digestive health, promote heart health, and enhance overall well-being. They serve as a versatile ingredient in a variety of savory dishes, from hummus and curries to salads and soups.
        
                Enjoy chickpeas cooked and seasoned with spices, blended into dips and spreads, or roasted for a crunchy snack. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate chickpeas into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to quality ensures that each batch of chickpeas meets rigorous standards for freshness and flavor. Taste the difference with our premium chickpeas and enjoy the rich flavor and nutritional benefits they provide.'
            ],
            [
                'name' => 'Lentils',
                'price' => 2.99,
                'description' => 'Lentils are nutrient-dense legumes prized for their earthy flavor, hearty texture, and numerous health benefits. High in protein, fiber, vitamins, and minerals, lentils support digestive health, promote heart health, and enhance overall well-being. They serve as a versatile ingredient in a variety of savory dishes, from soups and stews to salads and casseroles.
        
                Enjoy lentils cooked and seasoned with spices, blended into soups and sauces, or added to salads for a satisfying protein boost. Their versatility makes them a favorite among health-conscious individuals seeking nutrient-dense foods. Incorporate lentils into your diet to reap the benefits of their vitamins, minerals, and phytonutrients.
        
                Our commitment to quality ensures that each batch of lentils meets rigorous standards for freshness and flavor. Taste the difference with our premium lentils and enjoy the rich flavor and nutritional benefits they provide.'
            ],
            [
                'name' => 'Olive Oil',
                'price' => 7.99,
                'description' => 'Olive oil is a versatile and heart-healthy oil prized for its rich flavor and numerous health benefits. Cold-pressed from ripe olives, olive oil offers a fruity aroma and a wealth of antioxidants and healthy fats. It serves as an excellent choice for salad dressings, marinades, or as a finishing oil drizzled over roasted vegetables or grilled meats.
        
                Enjoy the natural goodness of olive oil in both culinary and beauty applications. Its high smoke point makes it ideal for cooking at higher temperatures, while its moisturizing properties make it a favorite ingredient in skincare products. Incorporate olive oil into your daily routine to experience its many health benefits, including support for heart health, reduced inflammation, and improved cognitive function.
        
                Our commitment to quality ensures that each bottle of olive oil is carefully selected and tested to meet stringent standards for purity and freshness. Taste the difference with our premium olive oil and enjoy the rich flavor and nutritional benefits it provides.'
            ],
            [
                'name' => 'Almond Milk',
                'price' => 3.99,
                'description' => 'Almond milk is a creamy and nutritious alternative to dairy milk, prized for its mild flavor and health benefits. Made from finely ground almonds and filtered water, almond milk offers a refreshing taste and a wealth of vitamins, minerals, and antioxidants. It serves as an excellent choice for individuals with lactose intolerance or those seeking a dairy-free alternative.
        
                Enjoy almond milk on its own, poured over cereal, or blended into smoothies and beverages. Its creamy texture and subtle nutty flavor make it a versatile ingredient in both sweet and savory dishes. Incorporate almond milk into your diet to reap the benefits of its vitamins, minerals, and healthy fats while enjoying a delicious dairy-free option.
        
                Our commitment to quality ensures that each bottle of almond milk is crafted with care using the finest ingredients. Taste the difference with our premium almond milk and enjoy the natural goodness and nutritional benefits it provides.'
            ],
            [
                'name' => 'Greek Yogurt',
                'price' => 4.99,
                'description' => 'Greek yogurt is a creamy and nutritious dairy product prized for its rich flavor and health benefits. Made from strained cow\'s milk, Greek yogurt offers a thick texture and a wealth of protein, vitamins, and minerals. It serves as an excellent choice for individuals seeking a satisfying snack or a versatile ingredient in both sweet and savory dishes.
        
                Enjoy Greek yogurt on its own, topped with fresh fruit and honey, or blended into smoothies and dips. Its creamy texture and tangy taste make it a favorite among health-conscious individuals seeking a delicious and nutritious option. Incorporate Greek yogurt into your diet to reap the benefits of its protein, calcium, and probiotics while enjoying the versatility of this versatile dairy product.
        
                Our commitment to quality ensures that each container of Greek yogurt is crafted with care using the finest ingredients. Taste the difference with our premium Greek yogurt and enjoy the rich flavor and nutritional benefits it provides.'
            ],
            [
                'name' => 'Free-Range Eggs',
                'price' => 4.49,
                'description' => 'Free-range eggs are nutrient-dense and protein-rich, prized for their vibrant yolks and health benefits. Sourced from hens raised in spacious, natural environments, free-range eggs offer a rich flavor and a wealth of vitamins, minerals, and healthy fats. They serve as a versatile ingredient in a variety of sweet and savory dishes, from breakfast to dinner.
        
                Enjoy free-range eggs cooked to perfection, whether scrambled, poached, or baked into casseroles and quiches. Their vibrant yolks and creamy texture make them a favorite among health-conscious individuals seeking high-quality protein. Incorporate free-range eggs into your diet to reap the benefits of their vitamins, minerals, and omega-3 fatty acids while supporting sustainable farming practices.
        
                Our commitment to quality ensures that each carton of free-range eggs meets rigorous standards for freshness and flavor. Taste the difference with our premium free-range eggs and enjoy the rich flavor and nutritional benefits they provide.'
            ],
            [
                'name' => 'Coconut Water',
                'price' => 3.99,
                'description' => 'Coconut water is a refreshing and hydrating beverage prized for its natural sweetness and health benefits. Extracted from young, green coconuts, coconut water offers a crisp taste and a wealth of vitamins, minerals, and electrolytes. It serves as an excellent choice for hydration after exercise or as a refreshing drink any time of day.
        
                Enjoy coconut water chilled on its own, blended into smoothies, or used as a base for tropical cocktails. Its natural sweetness and refreshing flavor make it a favorite among health-conscious individuals seeking a delicious and hydrating option. Incorporate coconut water into your routine to replenish electrolytes, support hydration, and enjoy the natural goodness of this tropical beverage.
        
                Our commitment to quality ensures that each bottle of coconut water is carefully selected and tested to meet stringent standards for purity and freshness. Taste the difference with our premium coconut water and savor the crisp flavor and nutritional benefits it provides.'
            ],
            [
                'name' => 'Apple Cider Vinegar',
                'price' => 4.99,
                'description' => 'Apple cider vinegar is a versatile and health-promoting vinegar prized for its tangy flavor and numerous benefits. Made from fermented apple cider, apple cider vinegar offers a wealth of vitamins, minerals, and probiotics. It serves as an excellent choice for salad dressings, marinades, or as a natural remedy for various health conditions.
        
                Enjoy apple cider vinegar in salad dressings, marinades, or diluted in water as a refreshing drink. Its tangy flavor and health-promoting properties make it a favorite among health-conscious individuals seeking a natural remedy. Incorporate apple cider vinegar into your daily routine to reap the benefits of its vitamins, minerals, and probiotics while enhancing the flavor of your favorite dishes.
        
                Our commitment to quality ensures that each bottle of apple cider vinegar is crafted with care using the finest ingredients. Taste the difference with our premium apple cider vinegar and enjoy the tangy flavor and health benefits it provides.'
            ]
        ]);
    }
}
