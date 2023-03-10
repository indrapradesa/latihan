<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Yanto Basna',
        //     'email' => 'yanto@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Network',
            'slug' => 'network',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint quis sit excepturi voluptatem optio et?...',
        //     'body' => '<p>Aperiam repudiandae hic sit dolores aliquid? Architecto hic dolorum aliquam suscipit aut magnam blanditiis corporis sequi placeat, pariatur illum, saepe a facere eius dolores delectus nemo fuga optio adipisci at odio repellat neque distinctio mollitia? Nihil sapiente neque eius. Reprehenderit ducimus quis ipsa error cumque incidunt a molestias, numquam necessitatibus, non, magnam eligendi ratione facilis consequuntur est voluptate. Magnam sit rerum eveniet pariatur odio, <p>veritatis eligendi ab eum amet in nihil ipsum cupiditate sed praesentium exercitationem nisi perspiciatis nam at nobis quibusdam itaque. Reiciendis deleniti veritatis magni animi quisquam fugiat ex suscipit ipsum, </p>sit tenetur pariatur amet illum quasi ratione provident quidem veniam praesentium labore?</p>',
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam corporis quo adipisci eius nesciunt facilis, error ad doloribus laudantium ipsam veritatis reiciendis sint, at ex perspiciatis nulla quam ullam rerum, consequuntur aperiam commodi. Cum officiis enim culpa id. Doloremque iste recusandae quaerat vel, nam labore in perspiciatis error exercitationem neque corrupti illum aut porro ipsum! At laboriosam harum cupiditate odit aperiam necessitatibus enim ipsa pariatur exercitationem temporibus ut alias suscipit, laudantium ducimus minima eveniet? Impedit dolorem inventore eius! Officiis laborum nihil, saepe, sunt, et porro repellat nulla veniam odio enim perspiciatis esse hic itaque.....',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam corporis quo adipisci eius nesciunt facilis, error ad doloribus laudantium ipsam veritatis reiciendis sint, at ex perspiciatis nulla quam ullam rerum, consequuntur aperiam commodi. Cum officiis enim culpa id. Doloremque iste recusandae quaerat vel, nam labore in perspiciatis error exercitationem neque corrupti illum aut porro ipsum! At laboriosam harum cupiditate odit aperiam necessitatibus enim ipsa pariatur exercitationem temporibus ut alias suscipit, laudantium ducimus minima eveniet? Impedit dolorem inventore eius! Officiis laborum nihil, saepe, sunt, et porro repellat nulla veniam odio enim perspiciatis esse hic itaque alias quo exercitationem iste dignissimos labore?</p>
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum recusandae totam delectus aut magnam placeat, maxime repudiandae eveniet veritatis, beatae harum consectetur. Earum maxime vero doloremque nam! Quos magni omnis nemo. Amet perferendis provident sequi explicabo magnam architecto expedita rerum iusto quaerat quasi suscipit ducimus neque sint consequatur, animi recusandae reiciendis dicta natus velit molestias voluptatum eius vero. Sint eius neque rerum? Nam nostrum corporis facilis porro architecto numquam itaque minus nulla voluptate. Voluptatum explicabo laboriosam beatae saepe, vel porro deleniti odit a ab repudiandae. Ducimus vel quos consectetur recusandae modi, quam exercitationem error fugit dolore ipsum odit suscipit. Dolorum adipisci quo rem ratione. Obcaecati, sunt facere! Distinctio excepturi cupiditate quia consectetur ipsum quis soluta reiciendis, a deleniti exercitationem nulla rerum sit est suscipit, nemo nihil accusamus. Quod eveniet, error expedita id explicabo fugit aut quas totam alias autem ratione perferendis excepturi quasi, modi rem consectetur, asperiores impedit dolores repellat.
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ducimus deserunt minima ab illo ipsum nostrum delectus ea, aliquam dolorum reiciendis esse rem eius recusandae explicabo libero labore voluptas nemo! Veniam explicabo quae quod suscipit sunt officiis non, consequatur autem nobis totam exercitationem asperiores, quis dignissimos, fugit illo voluptate. Optio accusamus facere adipisci, nam libero tempora illum sapiente incidunt officia maiores mollitia ipsa tempore ab eum ex odio corporis, nobis excepturi! Minima aut esse iusto perferendis, eos provident tenetur quisquam a ut, vero laboriosam nemo suscipit et accusantium obcaecati voluptatibus neque. Commodi quam ea harum incidunt, dolorem dicta vero necessitatibus aliquam ipsum deserunt illo quibusdam facilis illum eius? Fugiat officia est labore esse velit perspiciatis numquam a sed eligendi odit similique vero sunt, repellendus ratione distinctio iusto quisquam ab? Quidem.
        //     ',
        // ]);
    }
}
