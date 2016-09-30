<?php
namespace WorldChat;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this , $this);
  }
  public function onChat(\pocketmine\event\player\PlayerChatEvent $event){
    $event->setCancelled();
    $event->getPlayer()->level->getPlayers()->sendMessage($event->getPlayer()->getNameTag()." > ".$event->getMessage());
  }
}
?>
