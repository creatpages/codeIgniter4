<?php namespace CodeIgniter\Database\Exceptions;

class DataException extends \RuntimeException implements ExceptionInterface
{
	/**
	 * Used by the Model's trigger() method when the callback cannot be found.
	 *
	 * @param string $method
	 *
	 * @return \CodeIgniter\Database\Exceptions\DataException
	 */
	public static function forInvalidMethodTriggered(string $method)
	{
		return new static(lang('Database.invalidEvent', [$method]));
	}

	/**
	 * Used by Model's insert/update methods when there isn't
	 * any data to actually work with.
	 *
	 * @param string $mode
	 *
	 * @return \CodeIgniter\Database\Exceptions\DataException
	 */
	public static function forEmptyDataset(string $mode)
	{
		return new static(lang('Database.emptyDataset', [$mode]));
	}

	/**
	 * Thrown when an argument for one of the Model's methods
	 * were empty or otherwise invalid, and they could not be
	 * to work correctly for that method.
	 *
	 * @param string $argument
	 *
	 * @return \CodeIgniter\Database\Exceptions\DataException
	 */
	public static function forInvalidArgument(string $argument)
	{
		return new static(lang('Database.invalidArgument', [$argument]));
	}

	public static function forInvalidAllowedFields(string $model)
	{
		return new static(lang('Database.invalidAllowedFields', [$model]));
	}
	
	/**
	 * Used by Model's findColumn method
	 *
	 * @return \CodeIgniter\Database\Exceptions\DataException
	 */
	public static function forFindColumnIsNotAString()
	{
		return new static(lang('Database.findColumnIsNotAString'));
	}
}
