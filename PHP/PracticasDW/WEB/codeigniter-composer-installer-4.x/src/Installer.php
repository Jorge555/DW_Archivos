<?php
/**
 * Part of CodeIgniter Composer Installer
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/codeigniter-composer-installer
 */

namespace Kenjis\CodeIgniter;

use Composer\Script\Event;

class Installer
{
    const DOCROOT = 'public';

    /**
     * Composer post install script
     *
     * @param Event $event
     */
    public static function postInstall(Event $event = null)
    {
        // Copy CodeIgniter files
        self::recursiveCopy('vendor/codeigniter4/framework/application', 'application');
        self::recursiveCopy('vendor/codeigniter4/framework/public', 'public');
        self::recursiveCopy('vendor/codeigniter4/framework/writable', 'writable');
        self::recursiveCopy('vendor/codeigniter4/framework/tests', 'tests');
        copy('vendor/codeigniter4/framework/spark', 'spark');
        copy('vendor/codeigniter4/framework/phpunit.xml.dist', 'phpunit.xml.dist');
        copy('vendor/codeigniter4/framework/.gitignore', '.gitignore');
        copy('vendor/codeigniter4/framework/env', 'env');

        // Fix paths in Paths.php
        self::replacePaths();

        // Fix paths in rewrite.php
        self::replaceRewrite();

        // Fix paths in index.php
        self::replaceIndex();

        // Create .env file
        self::createDotEnv();

        // Update composer.json
        copy('composer.json.dist', 'composer.json');

        // Run composer update
        self::composerUpdate();

        // Show message
        self::showMessage($event);

        // Delete unneeded files
        self::deleteSelf();
    }

    private static function createDotEnv()
    {
        copy('vendor/codeigniter4/framework/env', '.env');
        $file = '.env';
        $contents = file_get_contents($file);
        $contents = str_replace(
            '# app.baseURL = \'\'',
            'app.baseURL = \'http://localhost:8080/\'',
            $contents
        );
        file_put_contents($file, $contents);
    }

    private static function replacePaths()
    {
        $file = 'application/Config/Paths.php';
        $contents = file_get_contents($file);
        $contents = str_replace(
            'public $systemDirectory = \'system\';',
            'public $systemDirectory = \'vendor/codeigniter4/framework/system\';',
            $contents
        );
        file_put_contents($file, $contents);
    }

    /**
     * I don't want to modify a file in vendor/, but ...
     */
    private static function replaceRewrite()
    {
        $file = 'vendor/codeigniter4/framework/system/Commands/Server/rewrite.php';
        $contents = file_get_contents($file);
        $contents = str_replace(
            '$fcpath = realpath(__DIR__ . \'/../../../public\') . DIRECTORY_SEPARATOR;',
            '$fcpath = realpath(__DIR__ . \'/../../../../../../public\') . DIRECTORY_SEPARATOR;',
            $contents
        );
        file_put_contents($file, $contents);
    }

    private static function replaceIndex()
    {
        $file = 'public/index.php';
        $contents = file_get_contents($file);
        $contents = str_replace(
            '$app = require FCPATH . \'../system/bootstrap.php\';',
            '$app = require FCPATH . \'../vendor/codeigniter4/framework/system/bootstrap.php\';',
            $contents
        );
        file_put_contents($file, $contents);
    }

    private static function composerUpdate()
    {
        passthru('composer update');
    }

    /**
     * Composer post install script
     *
     * @param Event $event
     */
    private static function showMessage(Event $event = null)
    {
        $io = $event->getIO();
        $io->write('==================================================');
        $io->write('<info>CodeIgniter4 was installed.</info>');
        $io->write('If you want to know about this installer, see <https://github.com/kenjis/codeigniter-composer-installer/tree/4.x>.');
        $io->write('==================================================');
    }

    private static function deleteSelf()
    {
        unlink(__FILE__);
        rmdir('src');
        unlink('composer.json.dist');
        unlink('LICENSE.md');
    }

    /**
     * Recursive Copy
     *
     * @param string $src
     * @param string $dst
     */
    private static function recursiveCopy($src, $dst)
    {
        mkdir($dst, 0755);
        
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($src, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );
        
        foreach ($iterator as $file) {
            if ($file->isDir()) {
                mkdir($dst . '/' . $iterator->getSubPathName());
            } else {
                copy($file, $dst . '/' . $iterator->getSubPathName());
            }
        }
    }
}