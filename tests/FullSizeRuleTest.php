<?php

use DehaSoft\JpStringHelper\Rules\FullSize;
use PHPUnit\Framework\TestCase;

class FullSizeRuleTest extends TestCase
{
    /**
     * @var FullSize
     */
    protected $rule;

    public function setUp(): void
    {
        parent::setUp();
        $this->rule = new FullSize();
    }

    public function test_is_valid_when_string_is_only_full_size()
    {
        $this->assertTrue($this->rule->passes('test', 'あいうえお'));
    }

    public function test_is_invalid_when_string_is_not_only_full_size()
    {
        $this->assertFalse($this->rule->passes('test', 'ｻﾞﾁﾞﾌﾟあい'));
    }
}