<?php

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['name' => 'Dhaka', 'parent_id' => null],['name' => 'Chattogram', 'parent_id' => null],
            ['name' => 'Sylhet', 'parent_id' => null],['name' => 'Rajshahi', 'parent_id' => null],
            ['name' => 'Rangpur', 'parent_id' => null],['name' => 'Khulna', 'parent_id' => null],
            ['name' => 'Barisal', 'parent_id' => null],['name' => 'Mymensingh', 'parent_id' => null],
            
            ['name' => 'Dhaka', 'parent_id' => 1],['name' => 'Gazipur', 'parent_id' => 1],
            ['name' => 'Narayanganj', 'parent_id' => 1],['name' => 'Narsingdi', 'parent_id' => 1],
            ['name' => 'Manikganj', 'parent_id' => 1],['name' => 'Kishoreganj', 'parent_id' => 1],  
            ['name' => 'Chattogram', 'parent_id' => 2],['name' => "Cox's Bazar", 'parent_id' => 2],  
            ['name' => 'Rangamati', 'parent_id' => 2],['name' => 'Bandarban', 'parent_id' => 2],
            ['name' => 'Khagrachhari', 'parent_id' => 2],['name' => 'Cumilla', 'parent_id' => 2],
            ['name' => 'Noakhali', 'parent_id' => 2],['name' => 'Feni', 'parent_id' => 2],
            ['name' => 'Sunamganj', 'parent_id' => 3],['name' => 'Sylhet', 'parent_id' => 3],
            ['name' => 'Joypurhat', 'parent_id' => 4],['name' => 'Rajshahi', 'parent_id' => 4],
            ['name' => 'Rangpur', 'parent_id' => 5],['name' => 'Kurigram', 'parent_id' => 5],
            ['name' => 'Bagerhat', 'parent_id' => 6],['name' => 'Khulna', 'parent_id' => 6],
            ['name' => 'Barguna', 'parent_id' => 7],['name' => 'Barisal', 'parent_id' => 7],
            ['name' => 'Netrokona', 'parent_id' => 8],['name' => 'Mymensingh', 'parent_id' => 8],
        ];

        foreach ($districts as $district) {
            District::create(array(
                'name' => $district["name"],
                'parent_id' => $district["parent_id"],
                'created_at' => now(),
                'updated_at' => now(),
            ));
        }
    }
}
