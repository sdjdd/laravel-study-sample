	<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'sdjdd';
        $user->email = 'sdjddrt@gmail.com';
        $user->password = bcrypt('gtmdc3p');
        $user->is_admin = true;
        $user->save();
    }
}
