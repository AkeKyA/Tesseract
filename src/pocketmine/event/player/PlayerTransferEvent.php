<?php

/*
 *
 *    _______                                _
 *   |__   __|                              | |
 *      | | ___  ___ ___  ___ _ __ __ _  ___| |_
 *      | |/ _ \/ __/ __|/ _ \  __/ _` |/ __| __|
 *      | |  __/\__ \__ \  __/ | | (_| | (__| |_
 *      |_|\___||___/___/\___|_|  \__,_|\___|\__|
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author Tesseract Team
 * @link http://www.github.com/TesseractTeam/Tesseract
 * 
 *
 */

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\Player;

class PlayerTransferEvent extends PlayerEvent implements Cancellable{
	public static $handlerList = null;

	protected $address;
	protected $port = 19132;
	protected $message;

	public function __construct(Player $player, string $address, int $port, string $message){
		$this->player = $player;
		$this->address = $address;
		$this->port = $port;
		$this->message = $message;
	}

	public function getAddress() : string{
		return $this->address;
	}

	public function setAddress(string $address){
		$this->address = $address;
	}

	public function getPort() : int{
		return $this->port;
	}

	public function setPort(int $port){
		$this->port = $port;
	}

	public function getMessage() : string{
		return $this->message;
	}

	public function setMessage(string $message){
		$this->message = $message;
	}
	
	/**
	 * @return EventName|string
     */
	public function getName(){
		return "PlayerTransferEvent";
	}
}