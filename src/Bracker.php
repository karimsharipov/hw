<?php

namespace "tzar";

Class Bracker
{	
	static public function check($str)
	{
		
		for($i=0;$i<strlen($str);$i++)
		{
			
			if($str[$i] == '(')
				$open++;
			else if($str[$i]==')')
				$close++;
			else if($str[$i]=='\n' || $str[$i] == '\t' || $str[$i]=='\r')
				continue;
			else
				throw new InvalidArgumentException("не те символы");
	
			if($close>$open)
				return false;
		}
		
		if($open != $close)
			return false;
		else
			return true;
	}
}
