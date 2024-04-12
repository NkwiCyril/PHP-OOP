<?php
class HarvestedFruit
{
    public function isHarvestedFruit($state)
    {
				if ($state) {
					return true;
				} else {
					return false;
				}
    }
}
