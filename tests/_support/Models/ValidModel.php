<?php declare(strict_types=1);
namespace Tests\Support\Models;

use CodeIgniter\Model;

class ValidModel extends Model
{
	protected $table = 'job';

	protected $returnType = 'object';

	protected $useSoftDeletes = false;

	protected $dateFormat = 'integer';

	protected $allowedFields = [
		'name',
		'description',
	];

	protected $validationRules = [
		'name'  => [
			'required',
			'min_length[3]',
		],
		'token' => 'in_list[{id}]',
	];

	protected $validationMessages = [
		'name' => [
			'required'   => 'You forgot to name the baby.',
			'min_length' => 'Too short, man!',
		],
	];
}
