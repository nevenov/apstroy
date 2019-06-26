<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Banner = new Banner();
        $Banner->row_no = 1;
        $Banner->section_id = 1;
        $Banner->title_ar = "Banner #1";
        $Banner->title_en = "Banner #1";
        $Banner->title_ru = "Banner #1";
        $Banner->title_it = "Banner #1";
        $Banner->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->file_ar = "noimg.png";
        $Banner->file_en = "noimg.png";
        $Banner->file_ru = "noimg.png";
        $Banner->file_it = "noimg.png";
        $Banner->link_url = "#";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

        $Banner = new Banner();
        $Banner->row_no = 2;
        $Banner->section_id = 1;
        $Banner->title_ar = "Banner #2";
        $Banner->title_en = "Banner #2";
        $Banner->title_ru = "Banner #2";
        $Banner->title_it = "Banner #2";
        $Banner->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->file_ar = "noimg.png";
        $Banner->file_en = "noimg.png";
        $Banner->file_ru = "noimg.png";
        $Banner->file_it = "noimg.png";
        $Banner->link_url = "#";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 1;
        $Banner->section_id = 2;
        $Banner->title_ar = "Responsive Design";
        $Banner->title_en = "Responsive Design";
        $Banner->title_ru = "Responsive Design";
        $Banner->title_it = "Responsive Design";
        $Banner->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ru = "";
        $Banner->file_it = "";
        $Banner->link_url = "#";
        $Banner->icon = "fa-object-group";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

        $Banner = new Banner();
        $Banner->row_no = 2;
        $Banner->section_id = 2;
        $Banner->title_ar = "HTML5 & CSS3";
        $Banner->title_en = "HTML5 & CSS3";
        $Banner->title_ru = "HTML5 & CSS3";
        $Banner->title_it = "HTML5 & CSS3";
        $Banner->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ru = "";
        $Banner->file_it = "";
        $Banner->link_url = "#";
        $Banner->icon = "fa-html5";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 3;
        $Banner->section_id = 2;
        $Banner->title_ar = "Bootstrap Used";
        $Banner->title_en = "Bootstrap Used";
        $Banner->title_ru = "Bootstrap Used";
        $Banner->title_it = "Bootstrap Used";
        $Banner->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ru = "";
        $Banner->file_it = "";
        $Banner->link_url = "#";
        $Banner->icon = "fa-code";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();


        $Banner = new Banner();
        $Banner->row_no = 4;
        $Banner->section_id = 2;
        $Banner->title_ar = "Classic Design";
        $Banner->title_en = "Classic Design";
        $Banner->title_ru = "Classic Design";
        $Banner->title_it = "Classic Design";
        $Banner->details_ar = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_en = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_ru = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->details_it = "It is a long established fact that a reader will be distracted by the readable content of a page.";
        $Banner->file_ar = "";
        $Banner->file_en = "";
        $Banner->file_ru = "";
        $Banner->file_it = "";
        $Banner->link_url = "#";
        $Banner->icon = "fa-laptop";
        $Banner->status = 1;
        $Banner->visits = 0;
        $Banner->created_by = 1;
        $Banner->save();

    }
}
