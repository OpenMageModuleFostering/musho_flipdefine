<?php

	class Musho_Flipdefine_Block_Products extends Mage_Core_Block_Template{
		public function getAllProducts(){
			foreach(Mage::getModel('catalog/product')->getCollection() as $product){	
				$id = $product->getId();
				$pr = $product->load($id);
				$result[$id]= $pr->getData('name') . " (" . $pr->getSku() . ")";
				//($product->load($product->getId())->getData('name'));
				//die(print_r($product->getData()));
			}
			die('<div id="Mage_Extension">' . json_encode($result) . '</div>');
		}
		
		public function getAllCategories(){
			foreach(Mage::getModel('catalog/category')->getCollection() as $category){	
				$result[$category->getId()] = $category->getName();
			}
			return json_encode($result);
			
		}
	}
	
	
	
?>