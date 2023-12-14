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
    }
}