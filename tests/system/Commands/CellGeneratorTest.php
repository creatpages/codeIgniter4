<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Commands;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\StreamFilterTrait;

/**
 * @internal
 *
 * @group Others
 */
final class CellGeneratorTest extends CIUnitTestCase
{
    use StreamFilterTrait;

    protected function tearDown(): void
    {
        $dirName = APPPATH . DIRECTORY_SEPARATOR . 'Cells';
        // remove dir
        if (is_dir($dirName)) {
            $files = array_diff(scandir($dirName), ['.', '..']);

            foreach ($files as $file) {
                (is_dir("{$dirName}/{$file}")) ? rmdir("{$dirName}/{$file}") : unlink("{$dirName}/{$file}");
            }
            rmdir($dirName);
        }
    }

    protected function getFileContents(string $filepath): string
    {
        if (! is_file($filepath)) {
            return '';
        }

        return file_get_contents($filepath) ?: '';
    }

    /**
     * @group Others
     */
    public function testGenerateCell()
    {
        command('make:cell RecentCell');

        // Check the class was generated
        $file = APPPATH . 'Cells/RecentCell.php';
        $this->assertFileExists($file);
        $contents = $this->getFileContents($file);
        $this->assertStringContainsString('class RecentCell extends Cell', $contents);

        // Check the view was generated
        $file = APPPATH . 'Cells/recent_cell.php';
        $this->assertStringContainsString('File created: ', $this->getStreamFilterBuffer());
        $this->assertFileExists($file);
    }

    /**
     * @group Others
     */
    public function testGenerateCellSimpleName()
    {
        command('make:cell Another');

        // Check the class was generated
        $file = APPPATH . 'Cells/Another.php';
        $this->assertFileExists($file);
        $contents = $this->getFileContents($file);
        $this->assertStringContainsString('class Another extends Cell', $contents);

        // Check the view was generated
        $file = APPPATH . 'Cells/another_cell.php';
        $this->assertStringContainsString('File created: ', $this->getStreamFilterBuffer());
        $this->assertFileExists($file);
    }

    private function cleanUp()
    {
        $result = str_replace(["\033[0;32m", "\033[0m", "\n"], '', $this->getStreamFilterBuffer());
        $file   = str_replace('APPPATH' . DIRECTORY_SEPARATOR, APPPATH, trim(substr($result, 14)));
        $dir    = dirname($file);

        if (is_file($file)) {
            unlink($file);
        }
        if (is_dir($dir) && strpos($dir, 'Cells') !== false) {
            rmdir($dir);
        }
    }
}
