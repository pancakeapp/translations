<?php
declare(strict_types=1);

class FileIntegrityTest extends PHPUnit_Framework_TestCase {

    public $variable_regex = "/(?<!00)((?::[0-9]+)|(?:{[^}]+}))/ui";

    /**
     * Returns a list of all files in a directory.
     * With $prefix, it can prefix all items in the list with a certain path.
     *
     * @param string $folder
     * @param string $prefix
     *
     * @return array
     */
    protected function get_recursive_file_list($folder, $prefix = '') {
        # Add trailing slash
        $folder = (substr($folder, strlen($folder) - 1, 1) == '/') ? $folder : $folder . '/';
        $return = array();
        $ignore = array();
        $ignore[] = 'composer.json';
        $ignore[] = 'composer.lock';
        $ignore[] = 'index.html';
        $ignore[] = 'vendor';
        $ignore[] = 'tests';
        $ignore[] = 'README.txt';
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

    /**
     * Provides the list of available files to tests.
     *
     * @return array
     */
    public function filesProvider() {
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
     * Provides the list of all english vs language keys to tests.
     *
     * @return array
     */
    public function keysProvider() {
        $base = dirname(__FILE__) . "/../";
        $buffer = $this->get_recursive_file_list($base);
        $return = array();
        foreach ($buffer as $file) {
            $lang_file = explode("/", $file, 2);
            $english_lang_file = "english/" . $lang_file[1];

            $lang = [];
            require $english_lang_file;

            $english_lang = $lang;

            $lang = [];
            require $file;

            if ($english_lang_file != $file) {
                foreach ($english_lang as $key => $value) {
                    $return[] = array($key, (isset($lang[$key]) ? $lang[$key] : null), $value, $file);
                }
            }
        }

        return $return;
    }

    public function variableKeysProvider() {
        $english_variables = [];
        $base = dirname(__FILE__) . "/../";
        $buffer = $this->get_recursive_file_list($base);
        $return = array();
        foreach ($buffer as $file) {
            $lang_file = explode("/", $file, 2);
            $english_lang_file = "english/" . $lang_file[1];

            if (!isset($english_variables[$english_lang_file])) {
                $english_variables[$english_lang_file] = [];

                $lang = [];
                require $english_lang_file;
                foreach ($lang as $key => $value) {
                    $variables_in_english = [];
                    preg_match_all($this->variable_regex, $value, $variables_in_english);
                    $english_variables[$english_lang_file][$key] = $variables_in_english[1];
                }
            }

            $lang = [];
            require $file;

            foreach ($lang as $key => $value) {
                if (isset($value) && isset($english_variables[$english_lang_file][$key])) {
                    $variables_in_new_language = [];
                    preg_match_all($this->variable_regex, $value, $variables_in_new_language);
                    $return[] = array($key, $english_variables[$english_lang_file][$key], $variables_in_new_language[1], $file);
                }
            }
        }

        return $return;
    }

    /**
     * @dataProvider filesProvider
     */
    public function testFilesCanBeParsedAndHaveLangArray($file, $short_file) {
        ob_start();
        $lang = [];
        require $file;
        ob_end_clean();
        $this->assertTrue(isset($lang), "A \$lang variable should be set (in $short_file).");
        $this->assertTrue(is_array($lang), "The \$lang variable should be an array (in $short_file).");
    }

    /**
     * @dataProvider filesProvider
     * @depends      testFilesCanBeParsedAndHaveLangArray
     */
    public function testFilesDoNotProduceOutput($file, $short_file) {
        ob_start();
        $lang = [];
        require $file;
        $contents = ob_get_contents();
        ob_end_clean();
        $this->assertTrue(empty($contents), "Loading $short_file should not produce any output whatsoever.");
    }

    /**
     * @dataProvider variableKeysProvider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFileKeysHaveTheRightVariables($key, $variables_in_english, $variables_in_new_language, $short_file) {
        $this->assertEquals($variables_in_english, $variables_in_new_language, "One of the variables in '$key' key (in $short_file) doesn't match what's expected.");
    }

    /**
     * @dataProvider keysProvider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFileKeysAreTranslated($key, $translated_value, $english_value, $short_file) {
        $this->assertNotEquals($english_value, $translated_value, "The '$key' key (in $short_file) is not translated.");
    }

    /**
     * @dataProvider keysProvider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFilesHaveTheRightKeys($key, $translated_value, $english_value, $short_file) {
        $this->assertNotNull($translated_value, "The \$lang variable should have a '$key' key (in $short_file).");
    }

    /**
     * @dataProvider filesProvider
     * @depends      testFilesDoNotProduceOutput
     */
    public function testFilesDontHaveExtraKeys($file, $short_file, $english_file) {
        $lang = [];
        require $english_file;
        $english_lang = $lang;

        $lang = [];
        require $file;

        foreach ($lang as $key => $value) {
            $this->assertTrue(isset($english_lang[$key]), "The \$lang variable should NOT have a '$key' key (in $short_file).");
        }
    }

}
