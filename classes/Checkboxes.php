<?php


namespace classes;


class Checkboxes
{
	public function echoIntoCheckboxes(array $names)
	{
		$checkboxes = $this->returnTagsCheckboxesWithNames($names);

		$checkboxes_Names = $this->combineValues($checkboxes, $names);

		$id_Checkboxes_Names = $this->CombineKey_Value($checkboxes_Names);

		$this->echoEachValueNewLine($id_Checkboxes_Names);
	}

	private function returnTagsCheckboxesWithNames(array $names) : array
	{
		$checkboxes = [];

		foreach ($names as $name) 
		{
			$checkboxes[] = "<input type='checkbox' name='$name'>";
		}

		return $checkboxes;
	}

    private function combineValues(array $values1, array $values2) : array
	{
		$sizeVal1 = count($values1);
        $sizeVal2 = count($values2);

        if ($sizeVal1 === $sizeVal2) $newSize = $sizeVal1;
        elseif ($sizeVal1 > $sizeVal2){
             $newSize = $sizeVal1;
             $diff = $sizeVal1 - $sizeVal2;
             $addition = array_fill($sizeVal2, $diff, '');
             $values2 = array_merge($values2, $addition);
        }else {
             $newSize = $sizeVal2;
             $diff = $sizeVal2 - $sizeVal1;
             $addition = array_fill($sizeVal1, $diff, '');
             $values1 = array_merge($values1, $addition);
        }

		$combined = [];
		for ($i=0; $i < $newSize; $i++) {
			$combined[] = $values1[$i] . $values2[$i];
		}

		return $combined;
	}

    private function CombineKey_Value(array $array) : array
	{
		$combinedKey_Value = [];
		foreach ($array as $key => $value) {
			$combinedKey_Value[] = $key . $value;
		}

		return $combinedKey_Value;
	}

	private function echoEachValueNewLine(array $arrayWithValues)
	{
		foreach ($arrayWithValues as $value) 
		{
			echo $value . '<br>';
		}
	}
}