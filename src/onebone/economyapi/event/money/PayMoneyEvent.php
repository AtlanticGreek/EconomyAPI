<?php

/*
 * EconomyS, the massive economy plugin with many features for PocketMine-MP
 * Copyright (C) 2013-2015  onebone <jyc00410@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace onebone\economyapi\event\money;

use onebone\economyapi\event\EconomyAPIEvent;
use onebone\economyapi\EconomyAPI;

class PayMoneyEvent extends EconomyAPIEvent{
	private $payer, $target, $amount;
	public static $handlerList;
	
	public function __construct(EconomyAPI $plugin, $payer, $target, $amount){
		parent::__construct($plugin, "PayCommand");
		
		$this->payer = $payer;
		$this->target = $target;
		$this->amount = $amount;
	}
	
	public function getPayer(){
		return $this->payer;
	}
	
	public function getTarget(){
		return $this->target;
	}
	
	public function getAmount(){
		return $this->amount;
	}
}