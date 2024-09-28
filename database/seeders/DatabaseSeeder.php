<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Database\Factories\TicketFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $settings = ['slider' => [
                        'slider1' => [
                            'title' => 'Spinella',
                            'subtitle' => 'Saffron',
                            'text' => 'Experience purity with Spinella; Where authenticity and quality come together in each strand of saffron.',
                            'image' => 'slide-1.jpg',
                        ],
                        'slider2' => [
                            'title' => 'Spinella',
                            'subtitle' => 'Saffron',
                            'text' => 'Experience purity with Spinella; Where authenticity and quality come together in each strand of saffron.',
                            'image' => 'slide-2.jpg',
                        ],
                        'slider3' => [
                            'title' => 'Spinella',
                            'subtitle' => 'Saffron',
                            'text' => 'Experience purity with Spinella; Where authenticity and quality come together in each strand of saffron.',
                            'image' => 'slide-3.jpg',
                        ],
                    ],
                    'interview' => [
                        'title' => 'Discovereeeee',
                        'subtitle' => 'Our Story',
                        'text' => 'Spinella is the Latin root of the word spinel, which means ruby. The reason for this name, apart from the color, is the valuable similarity of ruby and saffron as the most expensive spices in the world, as well as the many healing properties of saffron and ruby, which have been known for a long time in our history and culture.',
                        'image' => 'bg-1.jpg',
                    ],
                    'why' => [
                        'why1' => [
                            'title' => 'Unique packaging',
                            'text' => 'Our unique packaging preserves the freshness and quality of our products, ensuring an exceptional experience from first glance to final taste.',
                        ],
                        'why2' => [
                            'title' => 'Premium quality',
                            'text' => 'Our premium quality products are crafted with the highest standards, delivering unmatched flavor and excellence in every detail.',
                        ],
                        'why3' => [
                            'title' => 'Direct Supply',
                            'text' => 'We ensure direct supply from farm to you, guaranteeing freshness and authenticity in every product.',
                        ],
                        'why4' => [
                            'title' => 'Product with your brand',
                            'text' => 'Upon your request, we have the ability to package all our products with your own brand and present them to you.',
                        ],
                    ],
                    'banner' => [
                        'banner1' => [
                            'title' => 'Premium',
                            'text' => 'Saffron',
                            'image' => 'bg-2.jpg',
                        ],
                        'banner2' => [
                            'title' => 'Spinella',
                            'text' => 'From Our Fields to Your Table',
                            'image' => 'bg-4.jpg',
                        ],
                    ],
                    'products' => [
                        'title' => 'Saffron',
                        'image' => 'bg-3.jpg',
                        'product1' => [
                            'name' => 'Ordinary Saffron',
                            'desc' => 'A classic blend of saffron',
                        ],
                        'product2' => [
                            'name' => 'Precious Saffron',
                            'desc' => 'Good quality of saffron with extras',
                        ],
                        'product3' => [
                            'name' => 'Super Precious Saffron',
                            'desc' => 'High quality of saffron with extras',
                        ],
                        'product4' => [
                            'name' => 'Gift Saffron',
                            'desc' => 'Saffron with extras for gift',
                        ],
                        'product5' => [
                            'name' => 'Pushal Saffron',
                            'desc' => 'Saffron with extras for pushal',
                        ],
                    ],
                    'desc' => [
                        'text' => 'Spinella is a leading company specializing in the production and export of premium agricultural products, including saffron, dried fruits, spices, and nuts. Our name, derived from the Latin word "spinel," meaning ruby, reflects the rich color and high value of our offerings. Utilizing top-notch production and packaging methods, we deliver high-quality products to global markets while adhering to sustainability and environmental respect. At Spinella, our dedicated and experienced team is committed to providing exceptional products and services to earn the trust and satisfaction of our customers.',
                        'image' => 'bg-5.jpg',
                    ],
                    'gallery' => [
                        'image1' => 'pf (1)',
                        'image2' => 'pf (2)',
                        'image3' => 'pf (3)',
                        'image4' => 'pf (4)',
                        'image5' => 'pf (5)',
                        'image6' => 'pf (6)',
                    ],
                    'recipe' => [
                        'title' => 'Recipe',
                        'subtitle' => 'Foods with Saffron',
                        'text' => 'In this section, recipes for cooking some dishes with saffron have been taught. Click to view these recipes.',
                        'image' => 'bg-side-1.jpg',
                    ],
                    'slogan' => [
                        'title' => 'Spinella offers Original and Premium Selection Products.',
                    ],
                    'footer' => [
                        'contact' => [
                            'address' => 'No. 3, 2nd floor, Shahab St., West Mehrdad Alley, Qaitarieh-Pourheidari-Tehran',
                            'phone' => '+98 900 68 900 84',
                            'email' => 'info@spinellasaffron.com',
                        ],
                        'info' => [
                            'logo' => 'footer-logo1.png',
                            'desc' => 'Spinella exports premium Iranian saffron, dried fruits, spices, and nuts. We are committed to delivering the highest quality products to our customers worldwide.',
                        ],
                        'social' => [
                            'fb' => 'https://facebook.com/spinellasaffron',
                            'ig' => 'https://instagram.com/spinellasaffron',
                            'wa' => 'https://wa.me/989006890084',
                            'tg' => 'https://t.me/+989006890084',
                            'sk' => 'skype:+989006890084?call',
                        ],
                    ],
                ];

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'test@example.com',
            'password' => 'admin',
        ]);

        Setting::create([
            'page' => 'home',
            'json' => $settings,
            'lang' => 'en' 
        ]);

        TicketFactory::new()->count(50)->create();
    }
}
