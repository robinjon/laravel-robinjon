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
        $description = "For å kvalitetssikre og effektivisere sertifikat genereringen lagede vi et program som rensket loggdata og regnet ut sensorens nøyaktighet. Dette programmet laget et sertifikat i PDF format.";
        DB::table('projects')->insert([
	            'title' => 'Rapportgenerator',
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
    }
}
