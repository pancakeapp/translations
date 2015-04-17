<?php

class FileIntegrityTest extends PHPUnit_Framework_TestCase {

    /**
     * Returns a list of all files in a directory.
     *
     * With $prefix, it can prefix all items in the list with a certain path.
     *
     * @param string $folder
     * @param string $prefix
     *
     * @return array
     */
    protected function get_recursive_file_list($folder, $prefix = '') {
        # Add trailing slash
        $folder   = (substr($folder, strlen($folder) - 1, 1) == '/') ? $folder : $folder . '/';
        $return   = [];
        $ignore   = [];
        $ignore[] = 'composer.json';
        $ignore[] = 'composer.lock';
        $ignore[] = 'index.html';
        $ignore[] = 'vendor';
        $ignore[] = 'tests';
        $ignore[] = 'README.md';
        $ignore[] = 'phpunit.xml';

        foreach (scandir($folder) as $file) {
            if (!in_array($file, $ignore) && substr($file, 0, 1) != ".") {
                if (is_dir($folder . $file)) {
                    $return = array_merge($return, $this->get_recursive_file_list($folder . $file, $prefix . $file . '/'));
                } else {
                    $return[] = $prefix . $file;
                }
            }
        }

        return $return;
    }

    public function provider() {
        $base = dirname(__FILE__)."/../";
        $buffer = $this->get_recursive_file_list($base);
        $return = array();
        foreach ($buffer as $file) {
            $return[] = array($base.$file);
        }
        return $return;
    }

    /**
     * @dataProvider provider
     */
    public function testFilesCanBeParsedAndHaveLangArray($file) {
        require_once $file;
        $this->assertTrue(isset($lang), "A \$lang variable should be set.");
        $this->assertTrue(is_array($lang), "The \$lang variable should be an array.");
    }

}
