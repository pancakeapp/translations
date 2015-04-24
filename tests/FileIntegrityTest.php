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
        $return   = array();
        $ignore   = array();
        $ignore[] = 'composer.json';
        $ignore[] = 'composer.lock';
        $ignore[] = 'index.html';
        $ignore[] = 'vendor';
        $ignore[] = 'tests';
        $ignore[] = 'README.txt';
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
        $base = dirname(__FILE__) . "/../";
        $buffer = $this->get_recursive_file_list($base);
        $return = array();
        foreach ($buffer as $file) {
            $lang_file = explode("/", $file, 2);
            $english_lang_file = "english/" . $lang_file[1];
            $return[] = array($base . $file, $file, $base . $english_lang_file);
        }
        return $return;
    }

    /**
     * @dataProvider provider
     */
    public function testFilesCanBeParsedAndHaveLangArray($file, $short_file) {
        ob_start();
        require $file;
        ob_end_clean();
        $this->assertTrue(isset($lang), "A \$lang variable should be set (in $short_file).");
        $this->assertTrue(is_array($lang), "The \$lang variable should be an array (in $short_file).");
    }

    /**
     * @dataProvider provider
     * @depends      testFilesCanBeParsedAndHaveLangArray
     */
    public function testFilesDoNotProduceOutput($file, $short_file) {
        ob_start();
        require $file;
        $contents = ob_get_contents();
        ob_end_clean();
        $this->assertTrue(empty($contents), "Loading $short_file should not produce any output whatsoever.");
    }

    /**
     * @dataProvider provider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFileKeysHaveTheRightVariables($file, $short_file, $english_file) {
        require $english_file;
        $english_lang = $lang;
        require $file;

        foreach ($english_lang as $key => $value) {
            # We only check for cases where $lang[$key] is set because another test makes sure all keys exist.
            if (isset($lang[$key])) {
                $variables_in_english = [];
                $variables_in_new_language = [];
                $regex = "/(?<!00)((?::[0-9]+)|(?:{[^}]+}))/ui";
                preg_match_all($regex, $value, $variables_in_english);
                preg_match_all($regex, $lang[$key], $variables_in_new_language);
                $this->assertEquals($variables_in_english[1], $variables_in_new_language[1], "One of the variables in '$key' key (in $short_file) doesn't match what's expected.");
            }
        }
    }

    /**
     * @dataProvider provider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFilesHaveTheRightKeys($file, $short_file, $english_file) {
        require $english_file;
        $english_lang = $lang;
        require $file;

        foreach ($english_lang as $key => $value) {
            $this->assertTrue(isset($lang[$key]), "The \$lang variable should have a '$key' key (in $short_file).");
        }
    }

    /**
     * @dataProvider provider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFilesDontHaveExtraKeys($file, $short_file, $english_file) {
        require $english_file;
        $english_lang = $lang;
        require $file;

        foreach ($lang as $key => $value) {
            $this->assertTrue(isset($english_lang[$key]), "The \$lang variable should NOT have a '$key' key (in $short_file).");
        }
    }

}
