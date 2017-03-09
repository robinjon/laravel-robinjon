<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        
        // Jobbhistorie 1: Rapportgenerator
        $description = "Late 2015 GE – Presens started production of a new type of sensor, creating a need for å flow loop for testing these sensors. To achieve required flowrates we needed to implement a new water pump. I was tasked to build software for controlling the pump and creating an easy to use interface for the LabView software engineer responsible for the site.

        <h4>The technical side</h4> 
        The pump uses ModbusTCP for communication, I decided to build the control software using C# width an interface to LabView. I created my own ModbusTCP library, as I did not find an existing library fitting my requirements. The end result was a dll that I imported to LabView and created sub-VIs from.
        ";
        DB::table('projects')->insert([
	            'title' => 'Control software flow loop',
	            'description' => $description,
	            'gitlink' => null,
                'priority' => $i,
	        ]);
        
        $i++;
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
            $i++;
	        DB::table('projects')->insert([
	            'title' => $faker->name,
	            'description' => $faker->text,
	            'gitlink' => $faker->url,
                'priority' => $i,
	        ]);
        }
        
        //Images
        DB::table('images')->insert([
	            'title' => 'Logic analyzer',
	            'description' => 'Equpment on site',
	            'src' => 'IMG_0035.JPG',
	        ]);
        DB::table('images')->insert([
	            'title' => 'Lab Power supply',
	            'description' => 'Equpment on site',
	            'src' => 'IMG_0874.JPG',
	        ]);
        
        
        // Image pivot table
        DB::table('image_project')->insert([
	            'image_id' => 1,
	            'project_id' => 1,
	        ]);
                DB::table('image_project')->insert([
	            'image_id' => 2,
	            'project_id' => 1,
	        ]);
        
        
        //Videos
        DB::table('videos')->insert([
	            'title' => '130 KW Water pump',
	            'description' => 'Water pump controlled using my software',
	            'src' => 'http://atiro.no/robinjon/images/test6.mp4',
                'youtube' => false,
	        ]);
        
        // Videos pivot to projects
        DB::table('project_video')->insert([
	            'video_id' => 1,
	            'project_id' => 1,
            ]);
        
        
        
    }
}
