<?php

 require_once 'library/php-activerecord/ActiveRecord.php'; 
 
 ActiveRecord\Config::initialize(function($cfg)
         {
      $cfg->set_model_directory('models');
      $cfg->set_connections(array('development' => 'mysql://root:@localhost/ar')); 
   
	// dsavsavsavsavafs
        }); 
           echo '<pre>';
//        User::create(array(
//            'login'=>'servxg',
//            'password'=>'1234'
//        ));
//        Data::create(array(
//            'content'=>'new',
//        ));
        $data=Data::find_by_dataid(1);
        $data->content='new content';
        $data->save();
        print_r($data);
//           $user=User::find('all');
//        
//       $u=$user[0];
//       $u->login='ara';
//       $u->save();
//           foreach ($user as $u)
//           {
//               echo $u->login.'</br>';
//           }