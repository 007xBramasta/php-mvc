<?php

namespace Bramasta\Belajar\PHP\MVC\App;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class RegexTest extends TestCase
{

    public function testRegex()
    {

        $path = "/products/12345/categories/abcd";

        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

        $result = preg_match($pattern, $path, $variables);

        self::assertEquals(1, $result);

        var_dump($variables);

        array_shift($variables);
        var_dump($variables);

    }

}