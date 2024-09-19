<?php

namespace Database\Seeders;

use App\Functions\Helper;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv_file = fopen(__DIR__ . '/../data/comics.csv', 'r');

        $is_first_row = true;

        while (($row_data = fgetcsv($csv_file)) != false) {
            if (!$is_first_row) {
                $comic = new Comic();
                $comic->title = $row_data[0];
                $comic->series = $row_data[1];
                $comic->slug = Helper::generateSlug("{$row_data[1]}-{$row_data[0]}", Comic::class);
                $comic->issue_number = $row_data[2];
                $comic->summary = $row_data[3];
                $comic->cover_image = $row_data[4];
                $comic->release_date = $row_data[5];
                $comic->price = $row_data[6];
                $comic->page_count = $row_data[7];

                $comic->save();
            }

            $is_first_row = false;
        }
    }
}
