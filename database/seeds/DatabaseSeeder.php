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
        
        $description = "As part of development of new pressure sensors there is a need for cyclic pressure testing. To make the process more efficient I created a pressure cycling system. This is estimated to save approximately 66 labour hours for each new product.
        ";
        DB::table('projects')->insert([
	            'title' => 'Automated qualifaction',
	            'description' => $description,
	            'gitlink' => null,
                'priority' => $i,
	        ]);
        
        $i++;
                
        $description = "My goal is to create a robot that uses the Kinect to “see”. As part of this I created this program to get more familiar with the Kinect sensor and OpenGL.";
        DB::table('projects')->insert([
	            'title' => 'Kinect poit cloud capture',
	            'description' => $description,
	            'gitlink' => "https://github.com/robinjon/PointCloudCapture",
                'priority' => $i,
	        ]);
        
        $i++;
        
        $description = "This robot is controlled using LabView and was part of main thesis. We used a camera and image processing to detect the ball and hole.";
        DB::table('projects')->insert([
	            'title' => 'DTU RoboCup',
	            'description' => $description,
	            'gitlink' => null,
                'priority' => $i,
	        ]);
        
        $i++;
        

        
        $description = "I got invited to join a class in basic programming the first semester. This resulted in this project.
<h4>The technical side</h4>
Created a Java control terminal, robot controller and programmed a BASIC stamp microcontroller to control the servos and motors. Communication was done via a MySQL data base.
";
        DB::table('projects')->insert([
	            'title' => 'The Cooper robot',
	            'description' => $description,
	            'gitlink' => null,
                'priority' => $i,
	        ]);
        
        $i++;
        
                
        $description = "Inspired by my class in Boolean algebra I created a digital display in Minecraft.";
        DB::table('projects')->insert([
	            'title' => 'Digital display and calculator',
	            'description' => $description,
	            'gitlink' => null,
                'priority' => $i,
	        ]);
        
//        $i++;
//        
//    	$faker = Faker::create();
//    	foreach (range(1,10) as $index) {
//            $i++;
//	        DB::table('projects')->insert([
//	            'title' => $faker->name,
//	            'description' => $faker->text,
//	            'gitlink' => $faker->url,
//                'priority' => $i,
//	        ]);
//        }
        
        //Images
        /*
        DB::table('images')->insert([
	            'title' => 'Logic analyzer',
	            'description' => 'Equpment on site',
	            'src' => 'IMG_0035.JPG',
	        ]);
        DB::table('images')->insert([
	            'title' => 'Lab power supply',
	            'description' => 'Equpment on site',
	            'src' => 'IMG_0874.JPG',
	        ]);
        
        
        // Image pivot table
        DB::table('image_project')->insert([
	            'image_id' => 1,
	            'project_id' => 2,
	        ]);
                DB::table('image_project')->insert([
	            'image_id' => 2,
	            'project_id' => 2,
	        ]);
        */
        
        //Videos
        DB::table('videos')->insert([
	            'title' => '130 kW Water pump',
	            'description' => 'Water pump controlled using software I developed',
	            'src' => 'http://atiro.no/robinjon/images/test6.mp4',
                'youtube' => false,
	        ]);
        

        DB::table('videos')->insert([
	            'title' => 'Automated qualification',
	            'description' => 'Cycling of pressure',
	            'src' => 'http://atiro.no/robinjon/images/IMG_1439.mp4',
                'youtube' => false,
	        ]);
        
        DB::table('videos')->insert([
	            'title' => 'Point cloud',
	            'description' => 'Created using kinect',
	            'src' => 'http://atiro.no/robinjon/images/PointCloud.mp4',
                'youtube' => false,
	        ]);
        
       DB::table('videos')->insert([
	            'title' => 'DTU RoboCup',
	            'description' => 'Main thesis',
	            'src' => 'https://www.youtube.com/embed/jaqw5JfSI1s?autoplay=1&origin=http://www.atiro.no&start=60',
                'youtube' => true,
	        ]);
        
       DB::table('videos')->insert([
	            'title' => 'The Cooper robot',
	            'description' => 'Robot in action',
	            'src' => 'https://www.youtube.com/embed/ggzG3MGo1Pk?autoplay=1&origin=http://www.atiro.no',
                'youtube' => true,
	        ]);
        
       DB::table('videos')->insert([
	            'title' => 'DTU RoboCup',
	            'description' => 'Main thesis',
	            'src' => 'https://www.youtube.com/embed/3tarfLB4Qq8?autoplay=1&origin=http://www.atiro.no&start=319',
                'youtube' => true,
	        ]);
        // https://youtu.be/jaqw5JfSI1s?t=1m3s
        
        
        // Videos pivot to projects
        DB::table('project_video')->insert([
	            'video_id' => 1,
	            'project_id' => 1,
            ]);
        

        DB::table('project_video')->insert([
	            'video_id' => 2,
	            'project_id' => 2,
            ]);
        
        DB::table('project_video')->insert([
	            'video_id' => 3,
	            'project_id' => 3,
            ]);
        
        DB::table('project_video')->insert([
	            'video_id' => 4,
	            'project_id' => 4,
            ]);
        
        DB::table('project_video')->insert([
	            'video_id' => 5,
	            'project_id' => 5,
            ]);
        
       DB::table('project_video')->insert([
	            'video_id' => 6,
	            'project_id' => 6,
            ]);
        
    }
}
