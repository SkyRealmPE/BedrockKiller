<?php


namspace BedRock\Main;

use pocketmine\block\Block;
use pocketmine\block;
use pocketmine\block\Bedrock;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
class Main extends Bedrock{

   public function onEnable(){
      $this->getLogger()->info("Skyrealm's Bedrock Killer Plugin has been enabled! Developer is Crafter20162017
");
   
   }
   
   public function onDisable(){       
   
 $this->getLogger()->info("SkyRealm's Bedrock Killer Plugin has been enabled! Developer is Crafter20162017");
  
   }
   
   pubic function getBlastResistance() : float{
      return 100;
   }





}
