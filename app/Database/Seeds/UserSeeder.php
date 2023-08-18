<?php

namespace App\Database\Seeds;

use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;
use CodeIgniter\Database\Exceptions\DatabaseException;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin_users = $this->createUser(2, 'admin');


        dd($admin_users);
    }

    public function createUser($count, $role)
    {

        $faker = Factory::create();

        try {
            $users = [];
            foreach (range(1, $count) as $index) {
                $users[] = [
                    'username' => $faker->userName,
                    'status' => 'active',
                    'status_message' => null,
                    'active' => 1,
                    'last_active' => Time::now(),
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                ];
            }

            $_users = $this->db->table('users')->insertBatch($users);
            $user_ids = $this->getLastIds($users);

            $auth_identities = [];
            foreach ($user_ids as $index => $user_id) {
                $auth_identities[] = [
                    'user_id' => $user_id,
                    'type' => 'email_password',
                    'name' => null,
                    'secret' => $users[$index]["username"] . "@example.com",
                    'secret2' => password_hash('12345678', PASSWORD_DEFAULT),
                    'expires' => null,
                    'extra' => null,
                    'force_reset' => 0,
                    'last_used_at' => null,
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                ];
            }

            $_auth_identities = $this->db->table('auth_identities')->insertBatch($auth_identities);
            $auth_identitie_ids = $this->getLastIds($auth_identities);

            $auth_groups_users = [];
            foreach ($user_ids as $index => $user_id) {
                $auth_groups_users[] = [
                    'user_id' => $user_id,
                    'group' => $role,
                    'created_at' => Time::now(),
                ];
            }

            $_auth_groups_users = $this->db->table('auth_groups_users')->insertBatch($auth_groups_users);
            $auth_groups_user_ids = $this->getLastIds($auth_groups_users);

            $this->db->transComplete();
            return compact('user_ids', 'auth_identitie_ids', 'auth_groups_user_ids', 'users', 'auth_identities', 'auth_groups_users');
        } catch (DatabaseException $th) {
            $this->db->transRollback();
            throw $th;
        }
    }

    public function getLastIds($array)
    {
        $startID = $this->db->insertID();
        $lastID = $startID + count($array) - 1;
        return range($startID, $lastID);
    }
}
