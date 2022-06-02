<?php
declare (strict_types=1);

namespace BehavioralPatterns\Iterator;

require_once '../vendor/autoload.php';

function clientCode() {

    $channelList = new ChannelLists();

    $channelList->addchannel(new RadioChannel(99.0));
    $channelList->addchannel(new RadioChannel(101));
    $channelList->addchannel(new RadioChannel(101.2));
    $channelList->addchannel(new RadioChannel(156.1));
    
    foreach($channelList as $channel) {
        echo $channel->getChannel() . PHP_EOL;
    }
    
    $channelList->removechannel(new RadioChannel(101)); 
}

clientCode();
?>
