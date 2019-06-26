<?php
use App\Topic;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // About
        $Topic = new Topic();
        $Topic->row_no = 1;
        $Topic->webmaster_id = 1;
        $Topic->title_ar = "За нас";
        $Topic->title_en = "About Us";
        $Topic->title_ru = "About Us";
        $Topic->title_it = "About Us";
        $Topic->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();


        // Contact
        $Topic = new Topic();
        $Topic->row_no = 2;
        $Topic->webmaster_id = 1;
        $Topic->title_ar = "Контакти";
        $Topic->title_en = "Contact Us";
        $Topic->title_ru = "Contact Us";
        $Topic->title_it = "Contact Us";
        $Topic->details_ar ="";
        $Topic->details_en = "";
        $Topic->details_ru = "";
        $Topic->details_it = "";
        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

        // Privacy
        $Topic = new Topic();
        $Topic->row_no = 3;
        $Topic->webmaster_id = 1;
        $Topic->title_ar = "Privacy";
        $Topic->title_en = "Privacy";
        $Topic->title_ru = "Privacy";
        $Topic->title_it = "Privacy";
        $Topic->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

        // Terms
        $Topic = new Topic();
        $Topic->row_no = 4;
        $Topic->webmaster_id = 1;
        $Topic->title_ar = "Terms & Conditions";
        $Topic->title_en = "Terms & Conditions";
        $Topic->title_ru = "Terms & Conditions";
        $Topic->title_it = "Terms & Conditions";
        $Topic->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Topic->date = date('Y-m-d');
        $Topic->status = 1;
        $Topic->visits = 0;
        $Topic->section_id = 0;
        $Topic->created_by = 1;
        $Topic->save();

    }
}
