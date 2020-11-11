<?php


namespace classes;


class processes
{
    /**
     * @var array
     */
    private $symbols;
    /**
     * @var string
     */
    private $lastSymbol;
    /**
     * @var int
     */
    private $lastKey;

	protected function processSymbols()
	{

		$this->processEnter();
		$this->resetKeys();
		/*echo "\nTHE END processEnter\n";
		print_r($symbols);
		echo "\n";*/


		$this->processBraked();
		$this->resetKeys();
		/*echo "\nTHE END processBraked\n";
		print_r($symbols);
		echo "\n";*/

		$this->processShortWordsWithPoint();
		$this->resetKeys();
		/*echo "\nTHE END processShortWordsWithPoint\n";
		print_r($symbols);
		echo "\n";*/

		$this->processShortWordsWithApostrophe();
		$this->resetKeys();
		/*echo "\nTHE END processShortWordsWithApostrophe\n";
		print_r($symbols);
		echo "\n";*/

		$this->filterOut();
		$this->resetKeys();
		/*echo "\nTHE END filterOut\n";
		print_r($symbols);
		echo "\n";*/

		$this->processSomeSpaceToOne();
		$this->resetKeys();
		/*echo "\nTHE END processSomeSpaceToOne\n";
		print_r($symbols);
		echo "\n";*/

		$this->processLastSpace();
		$this->resetKeys();
		/*echo "\nTHE END processLastSpace\n";
		print_r($symbols);
		echo "\n";*/
	}

	private function processEnter()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "\n")
			{
				unset ($this->symbols[$i-1]);
				$this->symbols[$i] = " ";
			}
            /*if (current($this->symbols) == "\n")
			{
                prev($this->symbols);
                $prevKey = key($this->symbols);
                next($this->symbols);
				unset ($this->symbols[$prevKey]);
			    $currKey = key($this->symbols);
				$this->symbols[$currKey] = " ";
			}
			next($this->symbols);*/
		}
	}

	private function processBraked()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "(" || $this->symbols[$i] == ")") {

				if ($this->symbols[$i-1] == " " ||
					$this->symbols[$i+1] == " ") unset($this->symbols[$i]);
				else $this->symbols[$i] = " ";

			}
		}
	}

	private function processShortWordsWithPoint()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == ".") {

				/*** a.m ***/
					if ($this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "A"  &&
						$this->symbols[$i+1] == "M")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/*** p.m ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "P"  &&
						$this->symbols[$i+1] == "M")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/*** e.g. ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "E"  &&
						$this->symbols[$i+1] == "G"  &&
						$this->symbols[$i+2] == ".")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/*** i.e. ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "I"  &&
						$this->symbols[$i+1] == "E"  &&
						$this->symbols[$i+2] == ".")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/*** vs. ***/
					elseif (
						$this->symbols[$i-3] == " "  &&
						$this->symbols[$i-2] == "V"  &&
						$this->symbols[$i-1] == "S")
					{
						unset($this->symbols[$i-2]);
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
					}
				/*** a.i. ***/
					elseif (
						$this->symbols[$i-2] == " "  &&
						$this->symbols[$i-1] == "A"  &&
						$this->symbols[$i+1] == "I"  &&
						$this->symbols[$i+2] == ".")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}

			}
		}
	}

	private function processShortWordsWithApostrophe()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == "'") {

				/***  're  ***/
					if ($this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "r" &&
						$this->symbols[$i+2] == "e")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  's  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "s")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  'm  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "m")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  'em  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "e" &&
						$this->symbols[$i+2] == "m")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  'll  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "l" &&
						$this->symbols[$i+2] == "l")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  n't  ***/
					elseif (
						$this->symbols[$i-2] != " " &&
						$this->symbols[$i-1] == "n" &&
						$this->symbols[$i+1] == "t")
					{
						unset($this->symbols[$i-1]);
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  'd  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "d")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						$i += 1;
					}
				/***  've  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == "v" &&
						$this->symbols[$i+2] == "e")
					{
						unset($this->symbols[$i]);
						unset($this->symbols[$i+1]);
						unset($this->symbols[$i+2]);
						$i += 2;
					}
				/***  '(space)  ***/
					elseif (
						$this->symbols[$i-1] != " " &&
						$this->symbols[$i+1] == " ")
					{
						unset($this->symbols[$i]);
					}

			}
		}
	}

    /**
     * Filter out EN alphabet and spaces.
     * @return void
     */
    private function filterOut()
    {
        $this->symbols = array_filter($this->symbols, function ($value){
            $en_alp = "a-zA-Z";
            return preg_match("/^[$en_alp\s]+$/", $value);
        });
	}

	private function processSomeSpaceToOne()
	{
		for ($i=0, $size = count($this->symbols); $i < $size; $i++) {
			if ($this->symbols[$i] == " ")
			{
				if ($this->symbols[$i-1] == " ") {
					unset ($this->symbols[$i-1]);
				}
			}
		}
	}

	private function processLastSpace()
	{
		if($this->getLastSymbol() == ' ')
			$this->unsetLastSymbol();
	}

    private function resetKeys()
    {
        $this->symbols = array_values($this->symbols);
	}

    private function unsetLastSymbol()
    {
        unset($this->symbols[$this->getLastKey()]);
    }

    /**
     * @return array
     */
    protected function getSymbols()
    {
        return $this->symbols;
    }

    /**
     * @param array $symbols
     */
    protected function setSymbols($symbols): void
    {
        $this->symbols = $symbols;
    }

    /**
     * @return string
     */
    private function getLastSymbol()
    {
        $this->setLastSymbol();
        return $this->lastSymbol;
    }

    private function setLastSymbol(): void
    {
        $this->lastSymbol = $this->symbols[$this->getLastKey()];
    }

    /**
     * @return int
     */
    private function getLastKey(): int
    {
        $this->setLastKey();
        return $this->lastKey;
    }

    private function setLastKey(): void
    {
        $count = count($this->symbols);
		$lastKey = $count - 1;
        $this->lastKey = $lastKey;
    }
}