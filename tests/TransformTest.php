<?php

use DehaSoft\JpStringHelper\Transform;
use PHPUnit\Framework\TestCase;

class TransformTest extends TestCase
{
    public function testTransformToHalfSize()
    {
        $fullSizeStr = "１２３４５ザヂプａｂｃｄ";
        $output = Transform::toHalfSize($fullSizeStr);
        $this->assertEquals("12345ｻﾞﾁﾞﾌﾟabcd", $output);
    }

    public function testTransformToFullSize()
    {
        $halfSizeStr = "12345ｻﾞﾁﾞﾌﾟabcd";
        $output = Transform::toFullSize($halfSizeStr);
        $this->assertEquals("１２３４５ザヂプａｂｃｄ", $output);
    }
}