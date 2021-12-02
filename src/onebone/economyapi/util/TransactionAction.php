<?php

/*
 * EconomyS, the massive economy plugin with many features for PocketMine-MP
 * Copyright (C) 2013-2021  onebone <me@onebone.me>
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

namespace onebone\economyapi\util;

use InvalidArgumentException;
use onebone\economyapi\currency\Currency;
use pocketmine\player\Player;

class TransactionAction {
	private int $type;
	private string|Player $player;
	private float $amount;
	private Currency $currency;

	/**
	 * @param int $type
	 * @param string|Player $player
	 * @param float $amount
	 * @param Currency $currency
	 */
	public function __construct(int $type, Player|string $player, float $amount, Currency $currency) {
		if($type > 2) {
			throw new InvalidArgumentException("Invalid transaction type given: $type");
		}

		if($player instanceof Player) {
			$player = $player->getName();
		}

		$this->type = $type;
		$this->player = $player;
		$this->amount = $amount;
		$this->currency = $currency;
	}

	public function getType(): int {
		return $this->type;
	}

	public function getPlayer(): string {
		return $this->player;
	}

	public function getAmount(): float {
		return $this->amount;
	}

	public function getCurrency(): Currency {
		return $this->currency;
	}
}
