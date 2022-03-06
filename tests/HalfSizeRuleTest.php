<?php

use DehaSoft\JpStringHelper\Rules\HalfSize;
use PHPUnit\Framework\TestCase;

class HalfSizeRuleTest extends TestCase
{
    /**
     * @var HalfSize
     */
    protected $rule;

    public function setUp(): void
    {
        parent::setUp();
        $this->rule = new HalfSize();
    }

    public function test_is_valid_when_string_is_only_half_size()
    {
        $this->assertTrue($this->rule->passes('test', 'ｧﾝｻ'));
    }

    public function test_is_invalid_when_string_is_not_only_half_size()
    {
        $this->assertFalse($this->rule->passes('test', 'ｻﾞﾁﾞﾌﾟあい'));
    }
}