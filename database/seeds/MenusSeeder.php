<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Main Menu
        $Menu1 = new Menu();
        $Menu1->row_no = 1;
        $Menu1->father_id = 0;
        $Menu1->title_ar = "Главно Меню";
        $Menu1->title_en = "Main Menu";
        $Menu1->title_ru = "Main Menu";
        $Menu1->title_it = "Main Menu";
        $Menu1->status = 1;
        $Menu1->type = 0;
        $Menu1->cat_id = 0;
        $Menu1->link = "";
        $Menu1->created_by = 1;
        $Menu1->save();

        // Footer Menu
        $Menu2 = new Menu();
        $Menu2->row_no = 2;
        $Menu2->father_id = 0;
        $Menu2->title_ar = "Бързи връзки";
        $Menu2->title_en = "Quick Links";
        $Menu2->title_ru = "Quick Links";
        $Menu2->title_it = "Quick Links";
        $Menu2->status = 1;
        $Menu2->type = 0;
        $Menu2->cat_id = 0;
        $Menu2->link = "";
        $Menu2->created_by = 1;
        $Menu2->save();

        // Home
        $Menu = new Menu();
        $Menu->row_no = 1;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Начало";
        $Menu->title_en = "Home";
        $Menu->title_ru = "Начало";
        $Menu->title_it = "Home";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "home";
        $Menu->created_by = 1;
        $Menu->save();
        // About
        $Menu = new Menu();
        $Menu->row_no = 2;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "За Нас";
        $Menu->title_en = "About";
        $Menu->title_ru = "About";
        $Menu->title_it = "About";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/about";
        $Menu->created_by = 1;
        $Menu->save();
        // Services
        $Menu = new Menu();
        $Menu->row_no = 3;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Услуги";
        $Menu->title_en = "Services";
        $Menu->title_ru = "Services";
        $Menu->title_it = "Services";
        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 2;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // News
        $Menu = new Menu();
        $Menu->row_no = 4;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Новини";
        $Menu->title_en = "News";
        $Menu->title_ru = "News";
        $Menu->title_it = "News";
        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 3;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Photos
        $Menu = new Menu();
        $Menu->row_no = 5;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Снимки";
        $Menu->title_en = "Photos";
        $Menu->title_ru = "Photos";
        $Menu->title_it = "Photos";
        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 4;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Videos
        $Menu = new Menu();
        $Menu->row_no = 6;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Видео";
        $Menu->title_en = "Videos";
        $Menu->title_ru = "Videos";
        $Menu->title_it = "Videos";
        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 5;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Audio
        $Menu = new Menu();
        $Menu->row_no = 7;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Аудио";
        $Menu->title_en = "Audio";
        $Menu->title_ru = "Audio";
        $Menu->title_it = "Audio";
        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 6;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Products
        $Menu = new Menu();
        $Menu->row_no = 8;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Продукти";
        $Menu->title_en = "Products";
        $Menu->title_ru = "Products";
        $Menu->title_it = "Products";
        $Menu->status = 1;
        $Menu->type = 3;
        $Menu->cat_id = 8;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Blog
        $Menu = new Menu();
        $Menu->row_no = 9;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Blog";
        $Menu->title_en = "Blog";
        $Menu->title_ru = "Blog";
        $Menu->title_it = "Blog";
        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 7;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Contact
        $Menu = new Menu();
        $Menu->row_no = 10;
        $Menu->father_id = $Menu1->id;
        $Menu->title_ar = "Contact";
        $Menu->title_en = "Contact";
        $Menu->title_ru = "Contact";
        $Menu->title_it = "Contact";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "contact";
        $Menu->created_by = 1;
        $Menu->save();


        // Footer Menu Sub links
        // Home
        $Menu = new Menu();
        $Menu->row_no = 1;
        $Menu->father_id = $Menu2->id;
        $Menu->title_ar = "Начало";
        $Menu->title_en = "Home";
        $Menu->title_ru = "Home";
        $Menu->title_it = "Home";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "home";
        $Menu->created_by = 1;
        $Menu->save();
        // About
        $Menu = new Menu();
        $Menu->row_no = 2;
        $Menu->father_id = $Menu2->id;
        $Menu->title_ar = "About Us";
        $Menu->title_en = "About Us";
        $Menu->title_ru = "About Us";
        $Menu->title_it = "About Us";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/about";
        $Menu->created_by = 1;
        $Menu->save();
        // Blog
        $Menu = new Menu();
        $Menu->row_no = 3;
        $Menu->father_id = $Menu2->id;
        $Menu->title_ar = "Blog";
        $Menu->title_en = "Blog";
        $Menu->title_ru = "Blog";
        $Menu->title_it = "Blog";
        $Menu->status = 1;
        $Menu->type = 2;
        $Menu->cat_id = 7;
        $Menu->link = "";
        $Menu->created_by = 1;
        $Menu->save();
        // Privacy
        $Menu = new Menu();
        $Menu->row_no = 4;
        $Menu->father_id = $Menu2->id;
        $Menu->title_ar = "Privacy";
        $Menu->title_en = "Privacy";
        $Menu->title_ru = "Privacy";
        $Menu->title_it = "Privacy";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/privacy";
        $Menu->created_by = 1;
        $Menu->save();
        // Terms
        $Menu = new Menu();
        $Menu->row_no = 5;
        $Menu->father_id = $Menu2->id;
        $Menu->title_ar = "Terms & Conditions";
        $Menu->title_en = "Terms & Conditions";
        $Menu->title_ru = "Terms & Conditions";
        $Menu->title_it = "Terms & Conditions";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "topic/terms";
        $Menu->created_by = 1;
        $Menu->save();
        // Contact
        $Menu = new Menu();
        $Menu->row_no = 6;
        $Menu->father_id = $Menu2->id;
        $Menu->title_ar = "Contact us";
        $Menu->title_en = "Contact Us";
        $Menu->title_ru = "Contact Us";
        $Menu->title_it = "Contact Us";
        $Menu->status = 1;
        $Menu->type = 1;
        $Menu->cat_id = 0;
        $Menu->link = "contact";
        $Menu->created_by = 1;
        $Menu->save();
    }
}
