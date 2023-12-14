<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'ErgoComfort Office Chair',
            'image' => 'resized_office_1.jpg',
            'summary' => 'A comfortable and ergonomic office chair designed for long hours of work.',
            'color' => 'Black',
            'material' => 'Mesh, PU Leather',
            'unit_price' => '299.99',
            'description' => 'The ErgoComfort Office Chair features adjustable lumbar support, padded armrests, and a breathable mesh back for optimal comfort during extended periods of sitting. The PU leather seat adds a touch of elegance while ensuring durability. Its ergonomic design promotes proper posture and reduces strain on the back and neck.',
            'brand' => 'ComfortMax',
            'weight' => '35',
            'dimensions' => '24x26x45 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Cozy Bedroom Chair',
            'image' => 'resized_bedroom_2.jpg',
            'summary' => 'A comfortable chair for your bedroom.',
            'color' => 'White',
            'material' => 'Wood and Fabric',
            'unit_price' => '149.99',
            'description' => 'This cozy bedroom chair offers a perfect blend of comfort and style. Its wooden frame and soft fabric upholstery make it an ideal choice for your bedroom.',
            'brand' => 'Furniture Comforts',
            'weight' => '15',
            'dimensions' => '3025x35 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([   
            'name' => 'Elegant Bedroom Chair',
            'image' => 'resized_bedroom_4.jpg',
            'summary' => 'An elegant addition to your bedroom decor.',
            'color' => 'Red',
            'material' => 'Metal and Leather',
            'unit_price' => '199.99',
            'description' => 'Enhance your bedroom ambiance with this elegant chair. Its sleek metal frame and luxurious leather seat make it a perfect blend of style and sophistication.',
            'brand' => 'Luxury Living',
            'weight' => '18',
            'dimensions' => '28x22x38 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([  
            'name' => 'Modern Bedroom Chair',
            'image' => 'resized_bedroom_8.jpg',
            'summary' => 'A modern touch to your bedroom.',
            'color' => 'Gray',
            'material' => 'Plastic and Fabric',
            'unit_price' => '129.99',
            'description' => 'Introduce modernity into your bedroom with this chair. Its sleek design, made of durable plastic and soft fabric, offers both style and comfort.',
            'brand' => 'Contemporary Living',
            'weight' => '12',
            'dimensions' => '32x24x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Classic Bedside Table',
            'image' => 'resized_bedroom_1.jpg',
            'summary' => 'A versatile bedside table for your essentials.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '79.99',
            'description' => 'This classic bedside table offers functionality and style. Made from sturdy wood, it provides ample space for your nighttime essentials.',
            'brand' => 'Home Elegance',
            'weight' => '7',
            'dimensions' => '20x18x25 inches',
            'created_at' => date('m/d/Y'),
        ]);  
        DB::table('products')->insert([
            'name' => 'Comfy Living Room Sofa Set',
            'image' => 'resized_bedroom_9.jpg',
            'summary' => 'Elegant and comfortable sofa set for your living room.',
            'color' => 'Gray',
            'material' => 'Fabric',
            'unit_price' => '599.99',
            'description' => 'This comfy sofa set is designed to provide both style and comfort. Made with high-quality fabric, it adds an elegant touch to your living room while offering a cozy seating experience.',
            'brand' => 'Living Luxuries',
            'weight' => '45',
            'dimensions' => '80x32x35 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Leather Sofa Set',
            'image' => 'resized_bedroom_3.jpg',
            'summary' => 'Sleek and modern sofa set for contemporary spaces.',
            'color' => 'Black',
            'material' => 'Leather',
            'unit_price' => '899.99',
            'description' => 'This modern sofa set features sleek lines and premium leather upholstery. Its contemporary design complements modern spaces while providing durability and style.',
            'brand' => 'Urban Designs',
            'weight' => '55',
            'dimensions' => '78x34x32 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Elegant Upholstered Bed',
            'image' => 'resized_bedroom_6.jpg',
            'summary' => 'An elegant bed for a comfortable night’s sleep.',
            'color' => 'Beige',
            'material' => 'Fabric and Wood',
            'unit_price' => '699.99',
            'description' => 'This elegant upholstered bed offers both style and comfort. Its soft fabric and sturdy wooden frame provide a cozy and luxurious sleeping experience, adding charm to your bedroom.',
            'brand' => 'Dream Haven',
            'weight' => '40 kg',
            'dimensions' => '65x85x45 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Platform Bed',
            'image' => 'resized_bedroom_5.jpg',
            'summary' => 'A sleek and minimalist bed for contemporary bedrooms.',
            'color' => 'White',
            'material' => 'Metal and Wood',
            'unit_price' => '549.99',
            'description' => 'This modern platform bed boasts a minimalist design with a combination of metal and wood. It’s perfect for contemporary bedrooms, offering both style and durability.',
            'brand' => 'Urban Style',
            'weight' => '35',
            'dimensions' => '60x80x12 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Upholstered Stool',
            'image' => 'resized_bedroom_7.jpg',
            'summary' => 'A stylish and versatile upholstered stool.',
            'color' => 'Gray',
            'material' => 'Fabric and Wood',
            'unit_price' => '49.99',
            'description' => 'This modern upholstered stool combines comfort with style. Its soft fabric and sturdy wooden frame make it a versatile addition to your living space, serving as extra seating or a decorative accent.',
            'brand' => 'Chic Home',
            'weight' => '5',
            'dimensions' => '16x16x18 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Standing Clothing Rack',
            'image' => 'resized_bedroom_10.jpg',
            'summary' => 'A sleek and functional standing clothing rack.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '79.99',
            'description' => 'This modern clothing rack offers a sleek solution for organizing your wardrobe. Made from durable metal, it provides ample space for hanging clothes and adds a contemporary touch to your space.',
            'brand' => 'Urban Wardrobe',
            'weight' => '7',
            'dimensions' => '48x18x60 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Wooden Farmhouse Dining Table',
            'image' => 'resized_Dining_2.jpg',
            'summary' => 'A classic wooden dining table perfect for family gatherings.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '299.99',
            'description' => 'Crafted from sturdy wood, this farmhouse-style dining table brings a rustic charm to your dining area. Its spacious surface accommodates large meals and provides a warm, inviting atmosphere for family gatherings.',
            'brand' => 'Rustic Living',
            'weight' => '20',
            'dimensions' => '72x36x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Glass Round Dining Table',
            'image' => 'resized_Dining_1.jpg',
            'summary' => 'A sleek and modern glass dining table for contemporary spaces.',
            'color' => 'Transparent',
            'material' => 'Glass',
            'unit_price' => '499.99',
            'description' => 'This round dining table features a tempered glass top supported by a stylish metallic base, creating an elegant centerpiece for your dining room. Its compact size makes it perfect for smaller spaces without compromising on style.',
            'brand' => 'Modern Essence',
            'weight' => '15',
            'dimensions' => '48x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Glass Top Dining Table',
            'image' => 'resized_Dining_9.jpg',
            'summary' => 'A sleek and contemporary dining table with a glass top.',
            'color' => 'Black',
            'material' => 'Glass, Metal',
            'unit_price' => '899.99',
            'description' => 'Featuring a sleek metal base and a tempered glass top, this modern dining table adds sophistication to your dining area. Its contemporary design and high-quality materials make it a striking focal point for any modern home.',
            'brand' => 'Contemporary Living Designs',
            'weight' => '30',
            'dimensions' => '60x36x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Small Wooden Coffee Table',
            'image' => 'resized_Dining_5.jpg',
            'summary' => 'A compact wooden coffee table perfect for cozy spaces.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '129.99',
            'description' => 'This small coffee table, made from durable wood, is an ideal addition to cozy corners. Its compact size and warm brown hue create a welcoming spot for placing drinks or displaying decor in your living area.',
            'brand' => 'CozyHome Creations',
            'weight' => '8',
            'dimensions' => '36x18x18 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Small Wooden Stool',
            'image' => 'resized_Dining_7.jpg',
            'summary' => 'A compact and versatile wooden stool.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '49.99',
            'description' => 'This small wooden stool is crafted from sturdy wood, offering a versatile seating or accent option for various spaces. Its compact size makes it perfect for additional seating or as a decorative element in any room.',
            'brand' => 'Woodcraft Essentials',
            'weight' => '5',
            'dimensions' => '12x12x18 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Small Wooden Dining Table',
            'image' => 'resized_Dining_4.jpg',
            'summary' => 'A compact wooden dining table for intimate gatherings.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '249.99',
            'description' => 'Crafted from durable wood, this small dining table is perfect for intimate gatherings or smaller dining spaces. Its compact size doesn’t compromise on style or functionality, providing a cozy and inviting dining experience.',
            'brand' => 'CozyDine Furnishings',
            'weight' => '15',
            'dimensions' => '48x30x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Small Wooden Coffee Table',
            'image' => 'resized_Dining_9.jpg',
            'summary' => 'A compact wooden coffee table for cozy spaces.',
            'color' => 'Brown',
            'material' => 'Wood',
            'unit_price' => '149.99',
            'description' => 'Crafted from durable wood, this small coffee table is designed for cozy living spaces. Its compact size and charming design make it a perfect centerpiece for your living area, providing a spot for drinks or decor.',
            'brand' => 'CozyHome Furnishings',
            'weight' => '10',
            'dimensions' => '36x24x18 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Upholstered Dining Chair',
            'image' => 'resized_Dining_10.jpg',
            'summary' => 'A sleek and comfortable upholstered dining chair.',
            'color' => 'Gray',
            'material' => 'Fabric, Metal',
            'unit_price' => '129.99',
            'description' => 'This modern dining chair features a stylish upholstered seat and backrest supported by metal legs, offering both comfort and contemporary flair. Its sleek design and cushioned seating make it an excellent addition to modern dining spaces.',
            'brand' => 'Contemporary Comfort Designs',
            'weight' => '6',
            'dimensions' => '20x22x32 inhes',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Classic Dining Chairs',
            'image' => 'resized_Dining_6.jpg',
            'summary' => 'A timeless dining chairs for traditional spaces.',
            'color' => 'Colourful',
            'material' => 'Metal',
            'unit_price' => '79.99',
            'description' => 'These classic dining chairs are crafted from sturdy wood, providing both durability and elegance. It is timeless design and comfortable seating make it an ideal choice for complementing traditional dining tables or adding a touch of warmth to any space.',
            'brand' => 'Vintage Home Furnishings',
            'weight' => '8',
            'dimensions' => '18x18x36 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Marble Top Rectangular Dining Table',
            'image' => 'resized_Dining_3.jpg',
            'summary' => 'A luxurious marble top dining table with a contemporary feel.',
            'color' => 'Brown',
            'material' => 'Marble, Metal',
            'unit_price' => '899.99',
            'description' => 'This rectangular dining table features a luxurious marble top paired with sleek metal legs, creating a sophisticated look for your dining area. Its durable construction and elegant design make it a focal point of any modern home.',
            'brand' => 'Luxury Living',
            'weight' => '30',
            'dimensions' => '72x42x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'ErgoComfort Office Chair set',
            'image' => 'resized_office_2.jpg',
            'summary' => 'A comfortable and ergonomic office chair set designed for long hours of work.',
            'color' => 'Black',
            'material' => 'Mesh, PU Metal',
            'unit_price' => '299.99',
            'description' => 'The ErgoComfort Office Chair features adjustable lumbar support, padded armrests, and a breathable mesh back for optimal comfort during extended periods of sitting. The PU leather seat adds a touch of elegance while ensuring durability. Its ergonomic design promotes proper posture and reduces strain on the back and neck.',
            'brand' => 'ComfortMax',
            'weight' => '35',
            'dimensions' => '24x26x45 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Geometric Hanging Lamp set',
            'image' => 'resized_office_3.jpg',
            'summary' => 'A contemporary geometric hanging lamps for stylish illumination.',
            'color' => 'Gold',
            'material' => 'Metal',
            'unit_price' => '149.99',
            'description' => 'The Modern Geometric Hanging Lamp set features a sleek design with gold accents, adding a contemporary touch to any room. Its geometric shape and metal construction exude elegance and sophistication. Ideal for modern interiors seeking a statement lighting fixture.',
            'brand' => 'ElegantGlow',
            'weight' => '4',
            'dimensions' => '14x14x20 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Vintage Industrial Pendant Light',
            'image' => 'resized_office_6.jpg',
            'summary' => 'A vintage-style pendant light for rustic ambiance.',
            'color' => 'Bronze',
            'material' => 'Metal, Glass',
            'unit_price' => '79.99',
            'description' => 'The Vintage Industrial Pendant Light adds a rustic charm to your space. Crafted with metal and glass, this pendant light features a vintage design that complements industrial or farmhouse decor. Hang it above dining tables or in living areas to create a warm and inviting ambiance.',
            'brand' => 'RusticGlow',
            'weight' => '5',
            'dimensions' => '12x12x16 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Leather Office Sofa',
            'image' => 'resized_office_4.jpg',
            'summary' => 'A modern leather sofa for comfortable office spaces.',
            'color' => 'Brown',
            'material' => 'Leather',
            'unit_price' => '599.99',
            'description' => 'The Modern Leather Office Sofa offers both comfort and style. Upholstered in premium leather, this sofa provides ample seating for office receptions or lounge areas. Its modern design and sturdy construction ensure durability while maintaining a professional look for your workspace.',
            'brand' => 'OfficeLux',
            'weight' => '80',
            'dimensions' => '72x30x32 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Contemporary Fabric Office Sofa',
            'image' => 'resized_office_5.jpg',
            'summary' => 'A contemporary fabric sofa for versatile office settings.',
            'color' => 'Green',
            'material' => 'Fabric',
            'unit_price' => '499.99',
            'description' => 'The Contemporary Fabric Office Sofa combines comfort with a sleek design. With its soft fabric upholstery and spacious seating, this sofa is perfect for collaborative spaces or casual meeting areas in offices. Its neutral color and contemporary style blend seamlessly with various office decors.',
            'brand' => 'ModernOffice',
            'weight' => '65',
            'dimensions' => '68x32x34 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Ergonomic Reclining Office Sofa',
            'image' => 'resized_office_10.jpg',
            'summary' => 'An ergonomic reclining sofa for versatile office relaxation.',
            'color' => 'Brown',
            'material' => 'Leatherette',
            'unit_price' => '699.99',
            'description' => 'The Ergonomic Reclining Office Sofa offers exceptional comfort and functionality. Crafted with durable leatherette material, this sofa features reclining seats and adjustable headrests, providing a perfect setting for relaxation or brief rest periods in office spaces. Its ergonomic design ensures proper support and comfort for extended use.',
            'brand' => 'RelaxOffice',
            'weight' => '75',
            'dimensions' => '70x35x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Wooden Mid-Century Side Table',
            'image' => 'resized_office_7.jpg',
            'summary' => 'A wooden mid-century side table for a retro office vibe.',
            'color' => 'Natural Wood',
            'material' => 'Wood',
            'unit_price' => '89.99',
            'description' => 'The Wooden Mid-Century Side Table evokes a retro charm with its mid-century design. Crafted from sturdy wood, this side table features a compact size suitable for limited office spaces. Its natural wood finish and tapered legs add a touch of vintage elegance to your office interior.',
            'brand' => 'RetroVibe',
            'weight' => '10',
            'dimensions' => '16x16x22 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Mesh Back Side Chair',
            'image' => 'resized_office_7.jpg',
            'summary' => 'A modern mesh back side chair for comfortable seating.',
            'color' => 'Gray',
            'material' => 'Mesh, Wood',
            'unit_price' => '79.99',
            'description' => 'The Modern Mesh Back Side Chair combines style and comfort. Featuring a breathable mesh backrest and a sturdy steel frame, this side chair provides ergonomic support for extended seating. Its contemporary design makes it suitable for office waiting areas or as additional seating in workspaces.',
            'brand' => 'ContempoSeat',
            'weight' => '12',
            'dimensions' => '20x20x32 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Executive Metal Side Chair',
            'image' => 'resized_office_9.jpg',
            'summary' => 'An executive metal side chair for a professional touch.',
            'color' => 'Black',
            'material' => 'Metal',
            'unit_price' => '129.99',
            'description' => 'The Executive metal Side Chair exudes sophistication with its genuine leather upholstery and metal frame. Ideal for office guests or conference rooms, this chair offers a blend of comfort and elegance. Its classic black color and refined design elevate the ambiance of any professional setting.',
            'brand' => 'ExecuSeat',
            'weight' => '18',
            'dimensions' => '22x24x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Green Top Side Table',
            'image' => 'resized_living_1.jpg',
            'summary' => 'A stylish green top  side table for modern living rooms.',
            'color' => 'Green',
            'material' => 'Wood',
            'unit_price' => '299.99',
            'description' => 'The Wooden Top Side Table exudes elegance with its marble tabletop and gold-finished metal base. Its sleek design and luxurious materials make it a focal point in modern living rooms. The rectangular shape and compact size make it a functional and stylish addition to your home decor.',
            'brand' => 'LuxLiving',
            'weight' => '15',
            'dimensions' => '18x18x22 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Classic Wingback Chair',
            'image' => 'resized_living_2.jpg',
            'summary' => 'A classic wingback chair for timeless elegance.',
            'color' => 'Beige',
            'material' => 'Linen, Wood',
            'unit_price' => '299.99',
            'description' => 'The Classic Wingback Chair exudes elegance with its wingback design and linen upholstery. This chair is perfect for adding a touch of sophistication to your living room decor. Its sturdy wooden legs and comfortable cushioning make it an ideal choice for both style and relaxation.',
            'brand' => 'EleganceHome',
            'weight' => '30',
            'dimensions' => '28x32x38 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Leather chair',
            'image' => 'resized_living_5.jpg',
            'summary' => 'A modern leather chair for contemporary living spaces.',
            'color' => 'White',
            'material' => 'Leather',
            'unit_price' => '399.99',
            'description' => 'The Modern Leather chair is a statement piece with its sleek design and premium leather upholstery. Its metal frame  offer durability and a modern touch. This chair is designed for both comfort and style, making it a perfect addition to your contemporary living room.',
            'brand' => 'UrbanStyle',
            'weight' => '28',
            'dimensions' => '30x34x36 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Modern Leather Armchair',
            'image' => 'resized_living_8.jpg',
            'summary' => 'A modern leather armchair for contemporary living spaces.',
            'color' => 'Brown',
            'material' => 'Velvet, Wood',
            'unit_price' => '349.99',
            'description' => 'The Modern Leather Armchair is a statement piece with its sleek design and premium leather upholstery. Its metal frame and armrests offer durability and a modern touch. This chair is designed for both comfort and style, making it a perfect addition to your contemporary living room.',
            'brand' => 'LuxuryLounge',
            'weight' => '26',
            'dimensions' => '29x32x30 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Mid-Century Modern Accent Chair',
            'image' => 'resized_living_10.jpg',
            'summary' => 'A mid-century modern accent chair for stylish living spaces.',
            'color' => 'Black',
            'material' => 'Metal',
            'unit_price' => '249.99',
            'description' => 'The Mid-Century Modern Accent Chair combines retro style with modern comfort. Featuring a fabric upholstery and wooden legs, this chair adds a touch of sophistication to your living room. Its ergonomic design and cushioned seat provide comfortable seating while enhancing the aesthetic appeal of your space.',
            'brand' => 'RetroVibe',
            'weight' => '25',
            'dimensions' => '26x30x32 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Compact Loveseat Sofa',
            'image' => 'resized_living_7.jpg',
            'summary' => 'A compact loveseat sofa for cozy living rooms.',
            'color' => 'Charcoal Gray',
            'material' => 'Fabric',
            'unit_price' => '599.99',
            'description' => 'The Compact Loveseat Sofa offers comfort in a space-saving design. Upholstered in soft fabric, this loveseat sofa is perfect for small living rooms or as an additional seating option. Its modern style and sturdy construction make it a versatile piece for enhancing the coziness of your living space.',
            'brand' => 'CozyHome',
            'weight' => '65',
            'dimensions' => '60x32x34 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Mid-Century Modern Sleeper Sofa',
            'image' => 'resized_living_3.jpg',
            'summary' => 'A mid-century modern sleeper sofa for multifunctional living rooms.',
            'color' => 'Teal Blue',
            'material' => 'Velvet, Wood',
            'unit_price' => '799.99',
            'description' => 'The Mid-Century Modern Sleeper Sofa combines style and functionality. Upholstered in luxurious velvet, this sofa features a sleek design and the added convenience of a sleeper function. Its vibrant teal blue color and mid-century wooden legs elevate the aesthetics of your living room.',
            'brand' => 'ModernVibe',
            'weight' => '85',
            'dimensions' => '80x36x32 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Sectional Chaise Sofa',
            'image' => 'resized_living_4.jpg',
            'summary' => 'A sectional chaise sofa for versatile seating arrangements.',
            'color' => 'Light Beige',
            'material' => 'Microfiber',
            'unit_price' => '899.99',
            'description' => 'The Sectional Chaise Sofa offers flexibility and comfort in a sectional design. Its plush microfiber upholstery and chaise section provide ample seating for relaxation or entertaining guests in your living room. This sofa allows for customizable seating arrangements to suit your space.',
            'brand' => 'ComfortLiving',
            'weight' => '100',
            'dimensions' => '96x64x36 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Wooden Rectangular Coffee Table',
            'image' => 'resized_living_6.jpg',
            'summary' => 'A wooden rectangular coffee table for versatile living rooms.',
            'color' => 'White',
            'material' => 'Wood',
            'unit_price' => '249.99',
            'description' => 'The Wooden Rectangular Coffee Table offers a blend of functionality and elegance. Crafted from durable wood with a rich dark walnut finish, this table provides ample space for placing decor items or serving refreshments. Its classic design makes it a versatile addition to various living room settings.',
            'brand' => 'ClassicHome',
            'weight' => '40',
            'dimensions' => '48x24x18 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Aurora Steel Curve Lamp',
            'image' => 'resized_living_6.jpg',
            'summary' => 'Illuminate your space with elegance using our sleek steel overhead lamp featuring a beautifully curved stand',
            'color' => 'Silver',
            'material' => 'Stainless Steel',
            'unit_price' => '129.99',
            'description' => 'Crafted with durable stainless steel, this lamp adds a modern touch to any room. Its curved stand provides a unique design element while casting a soft, ambient light.',
            'brand' => 'LuminaLux',
            'weight' => '5',
            'dimensions' => '160x24x18',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Ceramic Glazed Flower Pot',
            'image' => 'resized_garden_9.jpg',
            'summary' => 'A beautifully glazed ceramic flower pot for indoor and outdoor use.',
            'color' => 'Blue',
            'material' => 'Ceramic',
            'unit_price' => '19.99',
            'description' => 'This ceramic flower pot features a stunning glazed finish, adding a pop of color to any space. Its durable construction makes it suitable for both indoor and outdoor use. Perfect for showcasing your favorite plants and flowers.',
            'brand' => 'GardenBliss',
            'weight' => '5',
            'dimensions' => '10x10x10 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Terracotta Round Flower Pot',
            'image' => 'resized_garden_1.jpg',
            'summary' => 'A classic terracotta flower pot for gardening enthusiasts.',
            'color' => 'Terracotta',
            'material' => 'Terracotta',
            'unit_price' => '12.50',
            'description' => 'The Terracotta Round Flower Pot is a timeless choice for gardening. Its natural terracotta finish complements various plant types. With a sturdy build, it\'s ideal for planting herbs, flowers, or small shrubs both indoors and outdoors.',
            'brand' => 'NatureCraft',
            'weight' => '3',
            'dimensions' => '8x8x8 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Rattan Decorative Plants Pot',
            'image' => 'resized_garden_7.jpg',
            'summary' => 'A decorative rattan plant pot to add a rustic charm to your space.',
            'color' => 'White',
            'material' => 'Rattan',
            'unit_price' => '29.99',
            'description' => 'Add a touch of rustic elegance to your garden or home with this decorative rattan plant pot. Crafted from natural rattan, it boasts intricate weaving and a rich white hue. Perfect for showcasing your favorite plants in style.',
            'brand' => 'RusticVibe',
            'weight' => '4',
            'dimensions' => '9x9x9 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Plastic Stackable Flower Pot Set',
            'image' => 'resized_garden_8.jpg',
            'summary' => 'A set of stackable plastic flower pots for versatile planting.',
            'color' => 'White',
            'material' => 'Plastic',
            'unit_price' => '15.99',
            'description' => 'This set of stackable flower pots is perfect for those short on space. Made from durable, weather-resistant plastic, these pots are easy to stack, allowing you to create an attractive vertical garden. Ideal for planting herbs, flowers, or succulents.',
            'brand' => 'GrowEase',
            'weight' => '1',
            'dimensions' => '6x6x6 inches each',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Garden Small Stool',
            'image' => 'resized_garden_2.jpg',
            'summary' => 'A compact and sturdy stool for your garden or outdoor space.',
            'color' => 'White',
            'material' => 'Wood',
            'unit_price' => '14.99',
            'description' => 'This garden small stool is designed for both functionality and portability. Made of durable and weather-resistant plastic, it withstands outdoor conditions while providing a convenient seat for gardening or outdoor activities. Its compact size makes it easy to move and store.',
            'brand' => 'OutdoorComfort',
            'weight' => '2',
            'dimensions' => '12x12x12 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Weatherproof Garden Chair',
            'image' => 'resized_garden_3.jpg',
            'summary' => 'A comfortable and durable garden chair for outdoor relaxation.',
            'color' => 'Beige',
            'material' => 'Metal and Textilene',
            'unit_price' => '49.99',
            'description' => 'This weatherproof garden chair combines comfort and durability. Constructed with a sturdy metal frame and a breathable textilene seat, it is designed to withstand outdoor conditions. The ergonomic design provides excellent support, making it ideal for relaxing in your garden or patio.',
            'brand' => 'OutdoorComfort',
            'weight' => '5',
            'dimensions' => '24x24x36 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Compact Indoor Coffee Set',
            'image' => 'resized_garden_4.jpg',
            'summary' => 'A stylish and space-saving coffee set for indoor use.',
            'color' => 'Espresso White',
            'material' => 'Wood and Glass',
            'unit_price' => '129.99',
            'description' => 'This compact indoor coffee set is perfect for smaller spaces. Crafted with quality wood and accented with glass tabletops, it exudes elegance while saving space. The set includes a coffee table and two matching stools, offering a cozy setup for intimate gatherings or casual dining indoors.',
            'brand' => 'UrbanLiving',
            'weight' => '15',
            'dimensions' => '36x20x18 inches (table), 16x16x18 inches (stools)',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Indoor Plant Pot Table',
            'image' => 'resized_garden_5.jpg',
            'summary' => 'A multi-tiered table designed to display indoor plants elegantly.',
            'color' => 'White',
            'material' => 'Metal and Wood',
            'unit_price' => '79.99',
            'description' => 'This indoor plant pot table offers a stylish way to showcase your indoor greenery. Constructed with a sturdy metal frame and wooden shelves, it features multiple tiers for arranging different plants. The sleek design adds an aesthetic touch to any room while providing ample space for various plant sizes and decorations.',
            'brand' => 'GreenHaven',
            'weight' => '10',
            'dimensions' => '30x12x36 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Indoor Plant Pot Area Divider',
            'image' => 'resized_garden_7.jpg',
            'summary' => 'A decorative area divider with integrated plant pots for indoor spaces.',
            'color' => 'Brown',
            'material' => 'Wood and Metal',
            'unit_price' => '149.99',
            'description' => 'This indoor plant pot area divider adds charm to your living space while offering a functional division. Crafted with wooden panels and integrated metal plant pot holders, it creates a natural partition for different areas within a room. The versatile design allows you to create an indoor garden or delineate spaces while maintaining an elegant aesthetic.',
            'brand' => 'InteriorGreens',
            'weight' => '20',
            'dimensions' => '60x12x72 inches',
            'created_at' => date('m/d/Y'),
        ]);
        DB::table('products')->insert([
            'name' => 'Handmade Dreamcatcher Wall Decor',
            'image' => 'resized_garden_10.jpg',
            'summary' => 'A beautifully crafted dreamcatcher for wall decoration.',
            'color' => 'Green',
            'material' => 'Feathers, Beads, and Thread',
            'unit_price' => '29.99',
            'description' => 'This handmade dreamcatcher adds a bohemian touch to any room. Intricately crafted with feathers, beads, and colorful threads, it is believed to catch bad dreams and let only good dreams pass through. Hang it on your wall for both aesthetic appeal and a touch of mysticism.',
            'brand' => 'BohoArtistry',
            'weight' => '1',
            'dimensions' => '12-inch diameter, 24-inch length (including hanging string)',
            'created_at' => date('m/d/Y'),
        ]);

    }
}