<?php

use Illuminate\Database\Seeder;
use App\Mesage;
use App\Chat;
use App\Listachat;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $arrayMesage = array (
    	array(
    		'text' => 'Primer mensage de prueba'
    	),
    	array(
    		'text' => 'Segundo mensage de prueba'
    	)
    );
    private $arrayChat = array (
    	array(
    		'name' => 'Hacking'
    	),
    	array(
    		'name' => 'Exploits'
    	)
    );

    private $arraylistaChat = array (
    	array(
    		'id_mesage' => 1,
    		'id_chat' => 1
    	),
    	array(
    		'id_mesage' => 2,
    		'id_chat' => 2
    	)
    );


    private $arrayUsers = array(
    array(

      'name' => 'Albert', 
      'email' => 'albert_sanchezbcn@hotmail.com', 
      'password' => '13246589'
    ),
    array(

      'name' => 'Jordi', 
      'email' => 'jordi_sanchezbcn@hotmail.com', 
      'password' => '13246589'
    )
  );

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
          // Borramos los datos de la tabla
        self::seedMesage();
  		$this->command->info('Tabla Mesage inicializada con datos!');

  		self::seedChat();
  		$this->command->info('Tabla Chat inicializada con datos!');

  		self::seedListachat();
  		$this->command->info('Tabla ListaChat inicializada con datos!');

       self::seedUsers();
      $this->command->info('Tabla usuarios inicializada con datos!');

  		/*self::seedListachat();
  		$this->command->info('Tabla ListaChat inicializada con datos!');
  		*/
    }

    public function seedMesage(){

    	DB::table('mesages')->delete();
    	foreach( $this->arrayMesage as $mesage ) {
		    $m = new Mesage;
		    $m->text = $mesage['text'];
		    $m->save();
		  }

    }

    public function seedChat(){

    	DB::table('chat')->delete();
    	foreach( $this->arrayChat as $chat ) {
		    $m = new Chat;
		    $m->name = $chat['name'];
		    $m->save();
		  }

    }

     public function seedListachat(){

    	DB::table('listachat')->delete();
    	foreach( $this->arraylistaChat as $Lchat ) {
		    $m = new Listachat;
		    $m->id_mesage = $Lchat['id_mesage'];
		    $m->id_chat = $Lchat['id_chat'];
		    $m->save();
		  }

    }
    public function seedUsers(){

      DB::table('users')->delete();
      foreach( $this->arrayUsers as $User ) {
        $u = new User;
        $u->name = $User['name'];
        $u->email = $User['email'];
        $u->password = bcrypt($User['password']);
        $u->save();
      }

    }
}
