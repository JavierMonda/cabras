<?php

use Illuminate\Database\Seeder;
use App\Capa;
use App\User;

class DatabaseSeeder extends Seeder {
    /**
     * Array para rellenar la tabla capas con datos iniciales
     *
     * @return void
     */
    private $arrayCapas = array(
            array(
                'nombre' => 'Puipana',
                'imagen' => 'puipana.jpg',
                'descripcion' => 'Una de las más frecuentes. También llamada Pupana'
            ),        
            array(
                'nombre' => 'Blanca',
                'imagen' => 'blanca.jpg',
                'descripcion' => 'Como su propio nombre indica es totalmente blanca'
            )
        );

    /**
     * Array para rellenar la tabla users con datos iniciales
     *
     * @return void
     */
    private $arrayUsers = array(
            array(
                'name' => 'Usuario1',
                'email' => 'usuario1@cabras.com',
                'password' => 'majada'
            ),        
            array(
                'name' => 'Usuario2',
                'email' => 'usuario2@cabras.com',
                'password' => 'majada'
            )
        );

    private function seedUsers() {
        DB::table('users')->delete();
        foreach( $this->arrayUsers as $user ) {
            $c = new User;
            $c->name = $user['name'];
            $c->email = $user['email'];
            $c->password = bcrypt($user['password']);
            $c->save();
        }
    }

	private function seedCatalog() {
        DB::table('capas')->delete();
        foreach( $this->arrayCapas as $capa ) {
            $c = new Capa;
            $c->nombre = $capa['nombre'];
            $c->imagen = $capa['imagen'];
            $c->descripcion = $capa['descripcion'];
            $c->save();
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        self::seedCatalog();
        $this->command->info('Tabla capas inicializada con datos!');

        // ... Llamada al seed del catálogo
        self::seedUsers();
        $this->command->info('Tabla users inicializada con datos!');
    }
}
