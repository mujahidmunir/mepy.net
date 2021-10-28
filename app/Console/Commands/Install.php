<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Category;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mepy:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:reset', ['--force' => true]);
        Artisan::call('migrate');
        Artisan::call('permission:create-role super_admin');
        Artisan::call('permission:create-role admin');
        $this->createTestingUser();
    }

    private function createTestingUser()
    {
        $this->createUsers();
        $this->giveRoles();
        $this->createCategories();
        $this->createClient();
        $this->createArticles();
        $this->createSliders();
        $this->createTalents();
    }

    private function createUsers()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'super admin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123')
            ],
        ];
        User::insert($users);
    }

    private function giveRoles()
    {
        User::find(2)->assignRole('admin');
        User::find(1)->assignRole('super_admin');
    }

    private function createCategories()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'About Profile',
                'slug' => 'about-profile',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Record',
                'slug' => 'record',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Creativa',
                'slug' => 'creativa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Talent Managament',
                'slug' => 'talent-managament',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Entertainment',
                'slug' => 'entertainment',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        Category::insert($categories);
    }

    private function createClient()
    {
        $client = [
            [
                'name' => 'Media Promosi Indonesia',
                'image' => 'media promo.png',
                'status' => '1'
            ],
            [
                'name' => 'Lazada',
                'image' => 'lazada.png',
                'status' => '1'
            ],
            [
                'name' => 'Bank BCA',
                'image' => 'bca.png',
                'status' => '1'
            ],
            [
                'name' => 'Ruang Guru',
                'image' => 'ruang guru.png',
                'status' => '1'
            ],
            [
                'name' => 'Zalora',
                'image' => 'zalora.png',
                'status' => '1'
            ],
        ];
        Client::insert($client);
    }

    private function createArticles()
    {
        $articles = [
            [
                'category_id' => 1,
                'title' => 'Mepy.ENT',
                'description' => 'The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam',
                'thumb' => 'image-1.jpg',
            ],
            [
                'category_id' => 2,
                'title' => 'Mepy Record',
                'description' => 'The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam',
                'thumb' => 'image-1.jpg',
            ],
            [
                'category_id' => 3,
                'title' => 'Mepy Creativa',
                'description' => 'The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam',
                'thumb' => 'image-1.jpg',
            ],
            [
                'category_id' => 4,
                'title' => 'Mepy Talent Management',
                'description' => 'The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam',
                'thumb' => 'image-1.jpg',
            ],


        ];

        Article::insert($articles);
    }

    private function createSliders()
    {
        $sliders = [
            [
                'title'         => '-',
                'description'   => '-',
                'image'         => 'banner-1.jpg',
                'status'        => 1,
                'page'          => 'home',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'title'         => '-',
                'description'   => '-',
                'image'         => 'banner-2.jpg',
                'status'        => 1,
                'page'          => 'home',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'title'         => '-',
                'description'   => '-',
                'image'         => 'banner-3.jpg',
                'status'        => 1,
                'page'          => 'home',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'title'         => '-',
                'description'   => '-',
                'image'         => 'banner.jpg',
                'status'        => 1,
                'page'          => 'talent',
                'created_at'    => now(),
                'updated_at'    => now()
            ]

        ];

        Slider::insert($sliders);
    }

    private function createTalents()
    {
        $talents = [
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-1.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-2.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-3.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-4.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-5.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-6.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-7.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-8.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-9.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-10.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-11.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'srticle_id' => 4,
                'name'       => '-',
                'job'        => '-',
                'image'      => 'image-12.jpg',
                'status'     => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Gallery::insert($talents);
    }

}
