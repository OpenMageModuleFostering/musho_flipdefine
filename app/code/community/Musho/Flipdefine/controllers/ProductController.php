<?php
	//touch app/code/local/MyCompanyName/HelloWorld/controllers/ProductController.php
class Musho_Flipdefine_ProductController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "We're echoing just to show that this is what's called, normally you'd have some kind of redirect going on here";
    }
}


?>