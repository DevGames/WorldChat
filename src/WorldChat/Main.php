<?php

namespace WorldChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;


class Main extends PluginBase implements Listener {

    public function onEnable() {
	  $this->getServer()->getPluginManager ()->registerEvents ( $this , $this );
    }
    
    public function onChat(\pocketmine\event\player\PlayerChatEvent $ev){
            $ev->setCancelled();
            $ev->getPlayer()->level->getPlayers()->sendMessage($ev->getMessage());
    }
}
