<?php
class NightsWatch implements IFighter
{
	public function recruit($fighter)
	{
		$this->fighters[] = $fighter;
		return ;
	}

	public function fight()
	{
		foreach ($this->fighters as $fighter)
		{
			if ($fighter instanceof IFighter)
				$fighter->fight();
		}
		return ;
	}
}
?>
