<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Commands\Database;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use Config\Database;

/**
 * Get table data if it exists in the database.
 */
class ShowTableInfo extends BaseCommand
{
    /**
     * The group the command is lumped under
     * when listing commands.
     *
     * @var string
     */
    protected $group = 'Database';

    /**
     * The Command's name
     *
     * @var string
     */
    protected $name = 'db:table';

    /**
     * the Command's short description
     *
     * @var string
     */
    protected $description = 'Retrieves information on the selected table.';

    /**
     * the Command's usage
     *
     * @var string
     */
    protected $usage = 'db:table <table_name> [options]';

    /**
     * The Command's arguments
     *
     * @var array<string, string>
     */
    protected $arguments = [
        'table_name' => 'The table name for show information.',
    ];

    /**
     * The Command's options
     *
     * @var array<string, string>
     */
    protected $options = [
        '--show' => 'List the names of all database tables.',
    ];

    public function run(array $params)
    {
        $db     = Database::connect();
        $tables = $db->listTables();
        // The database does not have a table
        if ($getTables === []) {
            return CLI::error('Database has no tables!', 'light_gray', 'red');
        }

        // show all tables name
        if (CLI::getOption('show')) {
            CLI::write('list the names of all database tables : ', 'black', 'yellow');
            CLI::write(implode(' , ', $getTables), 'black', 'blue');

            return CLI::newLine();
        }

        $tableName = array_shift($params);
        // table name correct.
        if (in_array($tableName, $getTables, true)) {
            CLI::write("Data of table {$tableName} : ", 'black', 'yellow');
            $thead = $db->getFieldNames($tableName);
            $tbody = $db->table($tableName)->get()->getResultArray();

            return CLI::table($tbody, $thead);
        }

        $tableKey = CLI::promptByKey(['These are your tables List :', 'Which table do you want see info?'], $getTables);
        CLI::write("Data of table {$getTables[$tableKey]} : ", 'black', 'yellow');
        $thead = $db->getFieldNames($getTables[$tableKey]);
        $tbody = $db->table($getTables[$tableKey])->get()->getResultArray();

        return CLI::table($tbody, $thead);
    }
}
