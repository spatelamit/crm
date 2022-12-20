<?php
     
namespace App\Http\Traits;
 
use App\Http\Controllers\ActivityController;
 
trait GlobalTrait {
 
    public function getNotiCount() 
    {
        // Fetch all the settings from the 'settings' table.
		$ActivityController=new ActivityController();
         $note_count=$this->ActivityController->notification_count();
        return $note_count;
    }
}