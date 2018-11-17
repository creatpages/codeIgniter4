<?php declare(strict_types=1);
namespace CodeIgniter\Database\Live;

use CodeIgniter\Test\CIDatabaseTestCase;

class AliasTest extends CIDatabaseTestCase
{
	protected $refresh = true;

	protected $seed = 'Tests\Support\Database\Seeds\CITestSeeder';

	public function testAlias()
	{
		$builder = $this->db->table('job j');

		$jobs = $builder
			->where('j.name', 'Developer')
			->get();

		$this->assertEquals(1, count($jobs->getResult()));
	}

	//--------------------------------------------------------------------

}
