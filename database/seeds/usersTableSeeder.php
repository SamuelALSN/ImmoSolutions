<?php

use Illuminate\Database\Seeder;
use App\User;
use  App\Profile;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            countriesTableSeeder::class,
           // stateTableSeeder::class,
           // citiesTableSeeder::class,
            RolesAndPermissionsSeeder::class,

        ]);
        //
        $faker = Faker\Factory::create();
        $profile = new Profile();
        $adminRole = Role::whereName('Admin')->first();
        $customerRole = Role::whereName('customer')->first();
        $agentRole = Role::whereName('Agents')->first();

        //  seed admin

        $seededAdminEmail = 'samuelgwfirst@gmail.com';
        $user = User::where('email', '=', $seededAdminEmail)->first();

        if ($user === null) {
            $user = User::create([
                'country_id' => 1,
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $seededAdminEmail,
                'password' => Hash::make('123456789'),
                'activated' => true,
                'signup_confirmation_ip_address' => $faker->ipv4,
                'admin_ip_address' => $faker->ipv4,
            ]);

            $user->profiles()->save($profile);
            $user->assignRole($adminRole);
            $user->save();
        }


        // Seed test user
        $user = User::where('email', '=', 'agents@user.com')->first();
        if ($user === null) {
            $user = User::create([
                'country_id' => 1,
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => 'agents@user.com',
                'password' => Hash::make('password'),
                'activated' => true,
                'signup_ip_address' => $faker->ipv4,
                'signup_confirmation_ip_address' => $faker->ipv4,
            ]);

            $user->profiles()->save(new Profile());
            $user->assignRole($agentRole);
            $user->save();
        }

        // Seed test users

        // create here 10 users
        $users = factory(User::class, 10)->create()->each(function ($user) {
            $user->profiles()->save(factory(Profile::class)->make());
        });

        foreach ($users as $user) {
            if (!($user->hasRole('Admin')) && !($user->hasRole('Agents'))) {
                $user->assignRole($customerRole);
            }
        }

//        $user = factory(Profile::class, 5)->create();
//        $users = User::All();
//        foreach ($users as $user) {
//            if (!($user->hasRole('Admin')) && !($user->hasRole('Agents'))) {
//                $user->attachRole($customerRole);
//            }
//        }

//       // This will create 50 users for every role.
//
//        foreach(Spatie\Permission\Models\Role::all() as $role) {
//            $users = factory(User::class, 50)->create();
//            foreach($users as $user){
//                $user->assignRole($role);
//            }
//        }
//    }


    }
}
