<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
         $array_comic = config('comic');
         
         foreach($array_comic as $comic){
             $newComic = new Comic();
             $newComic->title = $comic['title'];
             $newComic->description = $comic['description'];
             $newComic->type = $comic['type'];
             $newComic->thumb = $comic['thumb'];
             $newComic->sale_date = $comic['sale_date'];
             $newComic->price = $comic['price'];
             $newComic->save();
         
         }
        
        // $table->id();
        // $table->string('title',50);
        // $table->text('description');
        // $table->string('type',50);
        // $table->text('thumb');
        // $table->string('sale_date',20);
        // $table->float('price',10,2);
        // $table->timestamps();
    }
}
