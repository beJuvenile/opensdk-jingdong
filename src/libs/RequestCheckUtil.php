<?php
namespace OpenSDK\JingDong\Libs;

class RequestCheckUtil
{
	/**
	 *
	 * @param mixed $value
     * @param string $fieldName
     * @throws \Exception
	 */
	public static function checkNotNull($value, $fieldName)
    {
		if (self::checkEmpty($value))
		    throw new \Exception("client-check-error:Missing Required Arguments: {$fieldName}" , 40);
	}

	/**
	 *
	 * @param string $value
     * @param int $maxLength
     * @param string $fieldName
     * @throws \Exception
	 */
	public static function checkMaxLength($value, $maxLength, $fieldName)
    {
		if (!self::checkEmpty($value) && mb_strlen($value , 'UTF-8') > $maxLength)
		    throw new \Exception("client-check-error:Invalid Arguments:the length of {$fieldName} can not be larger than {$maxLength} ." , 41);
	}

	/**
	 *
	 * @param string $value
     * @param int $maxSize
     * @param string $fieldName
     * @throws \Exception
	 */
	public static function checkMaxListSize($value, $maxSize, $fieldName)
    {
		if (self::checkEmpty($value))
			return ;

		$list = explode(',', $value);
		if (count($list) > $maxSize)
		    throw new \Exception("client-check-error:Invalid Arguments:the listsize(the string split by \",\") of {$fieldName} must be less than {$maxSize} ." , 41);
	}

	/**
	 *
	 * @param integer|float $value
     * @param integer|float $maxValue
     * @param string $fieldName
     * @throws \Exception
	 */
	public static function checkMaxValue($value, $maxValue, $fieldName)
    {
		if(self::checkEmpty($value))
			return ;

		self::checkNumeric($value,$fieldName);

		if ($value > $maxValue)
		    throw new \Exception("client-check-error:Invalid Arguments:the value of {$fieldName} can not be larger than {$maxValue} ." , 41);
	}

	/**
	 *
	 * @param integer|float $value
     * @param integer|float $minValue
     * @param string $fieldName
     * @throws \Exception
	 **/
	public static function checkMinValue($value, $minValue, $fieldName)
    {
		if (self::checkEmpty($value))
			return ;

		self::checkNumeric($value,$fieldName);
		
		if ($value < $minValue)
		    throw new \Exception("client-check-error:Invalid Arguments:the value of {$fieldName} can not be less than {$minValue} ." , 41);
	}

	/**
	 *
     * @param mixed $value
     * @param string $fieldName
     * @throws \Exception
	 */
	protected static function checkNumeric($value, $fieldName)
    {
		if (!is_numeric($value))
			throw new \Exception("client-check-error:Invalid Arguments:the value of {$fieldName} is not number : {$value} ." , 41);
	}

	/**
	 *
     * @param mixed $value
     * @return bool
	 */
	public static function checkEmpty($value)
    {
		if (!isset($value))
			return true ;
		if ($value === null )
			return true;
		if (is_array($value) && count($value) == 0)
			return true;
		if (is_string($value) &&trim($value) === "")
			return true;
		
		return false;
	}

}