<?php

use Illuminate\Database\Seeder;

class ServicesUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
        	'name' => 'Ray Pressley',
        	'email' => 'ray@gmail.com',
        	'location' => 'San Francisco',
        	'address' => '50 Hagiwara Tea Graden Dr, San Francisco, CA'
        ]);
        App\User::insert([
        	'name' => 'Harman Deboard',
        	'email' => 'harman@gmail.com',
        	'location' => 'New York',
        	'address' => 'MQ45+6P Roselle, New Jersey, United States'
        ]);
        App\User::insert([
        	'name' => 'Chris Bake',
        	'email' => 'chirs@gmail.com',
        	'location' => 'New York',
        	'address' => 'HRWG+HC Staten Island, New York, USA'
        ]);
        App\User::insert([
        	'name' => 'James Martin',
        	'email' => 'james@gmail.com',
        	'location' => 'Fremont',
        	'address' => 'V8HG+4Q Pocatello, California , United States'
        ]);
        App\User::insert([
        	'name' => 'Tomas Nowicki',
        	'email' => 'tomas@gmail.com',
        	'location' => 'Hermosa',
        	'address' => '4W33+WW San Gabriel, California, USA'
        ]);

        App\Service::insert([
        	'name' => 'Yoga and Pilate Training',
        	'type' => 'Training . Fitness',
        	'description' => 'Yoga is an effective way to maximize the joy of living in a fit and healthy body. Regular practice of yoga can give more flexibility, more stability and give your body',
        	'charge' => 80
        ]);

        App\Service::insert([
        	'name' => 'Karate',
        	'type' => 'Training . Fitness',
        	'description' => 'From a fitness perspective, the techniques practised by White belts each class involve the use of every muscle and bone in the body making it an excellent all-over body workout.',
        	'charge' => 120
        ]);
        App\Service::insert([
        	'name' => 'Music',
        	'type' => 'Music',
        	'description' => 'Open the Music app and find the song you want to add. Tap the More button (looks like •••) to the right of the music. Tap Add to My Music.',
        	'charge' => 250
        ]);
        App\Service::insert([
        	'name' => 'Arts',
        	'type' => 'Arts and Crafts',
        	'description' => 'By the end of the nineteenth century, Arts and Crafts ideals had influenced architecture, painting, sculpture, graphics,',
        	'charge' => 150
        ]);
        App\Service::insert([
        	'name' => 'Dance',
        	'type' => 'Dance',
        	'description' => 'Dance, the movement of the body in a rhythmic way, usually to music and within a given space, for the purpose of expressing an idea or emotion',
        	'charge' => 300
        ]);

        App\Booking::insert([
        	'schedules_date' => '2021-05-05',
        	'schedules_time' => '05:00:00',
        	'status' => 0,
        	'service_id' => 1,
            'user_id' => 1
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-05',
        	'schedules_time' => '06:00:00',
        	'status' => 0,
        	'service_id' => 1,
            'user_id' => 1
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-06',
        	'schedules_time' => '05:00:00',
        	'status' => 0,
        	'service_id' => 2,
            'user_id' => 2
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-06',
        	'schedules_time' => '07:00:00',
        	'status' => 0,
        	'service_id' => 2,
            'user_id' => 2
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-07',
        	'schedules_time' => '05:00:00',
        	'status' => 0,
        	'service_id' => 3,
            'user_id' => 3
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-07',
        	'schedules_time' => '06:00:00',
        	'status' => 0,
        	'service_id' => 3,
            'user_id' => 3
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-07',
        	'schedules_time' => '07:00:00',
        	'status' => 0,
        	'service_id' => 3,
            'user_id' => 3
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-08',
        	'schedules_time' => '05:00:00',
        	'status' => 0,
        	'service_id' => 4,
            'user_id' => 4
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-08',
        	'schedules_time' => '06:00:00',
        	'status' => 0,
        	'service_id' => 4,
            'user_id' => 4
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-08',
        	'schedules_time' => '07:00:00',
        	'status' => 0,
        	'service_id' => 4,
            'user_id' => 4
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-09',
        	'schedules_time' => '05:00:00',
        	'status' => 0,
        	'service_id' => 5,
            'user_id' => 5
        ]);
        App\Booking::insert([
        	'schedules_date' => '2021-05-09',
        	'schedules_time' => '06:00:00',
        	'status' => 0,
        	'service_id' => 5,
            'user_id' => 5
        ]);
    }
}
