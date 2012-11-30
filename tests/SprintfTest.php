<?php

require_once __DIR__.'/../src/Jalet/Util/Sprintf.php';

class SprintfTest extends PHPUnit_Framework_TestCase
{
    public function testCanFormatSimpleString()
    {
        $str1 = 'I am a %animal%.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('animal' => 'dog'));
        $this->assertEquals('I am a dog.', $str2);
    }

    public function testCanFormatMultiParamsString()
    {
        $str1 = 'I am a %color% %animal%.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('animal' => 'dog', 'color' => 'brown'));
        $this->assertEquals('I am a brown dog.', $str2);
    }

    public function testCanFormatMultiParamsString2()
    {
        $str1 = 'I am a %color% %animal% with %color% eyes.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('animal' => 'dog', 'color' => 'brown'));
        $this->assertEquals('I am a brown dog with brown eyes.', $str2);
    }

    public function testCanFormatWithCastedIntString()
    {
        $str1 = 'I am a %age:int% years old.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('age' => '13y'));
        $this->assertEquals('I am a 13 years old.', $str2);
    }

    public function testCanFormatWithCastedFloatString()
    {
        $str1 = 'I am a %age:float% years old.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('age' => '13.5y'));
        $this->assertEquals('I am a 13.5 years old.', $str2);
    }

    public function testCanFormatWithCastedBoolString()
    {
        $str1 = 'I am a %val:bool% believer.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('val' => 1));
        $this->assertEquals('I am a 1 believer.', $str2);
    }

    public function testCanFormatWithCastedBoolIntString()
    {
        $str1 = 'I am a %val:bool:int% believer.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('val' => 1));
        $this->assertEquals('I am a 1 believer.', $str2);
    }

    public function testCanFormatWithCastedBoolStrString()
    {
        $str1 = 'I am a %val:bool:str% believer.';
        $str2 = Jalet\Util\Sprintf::f($str1, array('val' => 1));
        $this->assertEquals('I am a true believer.', $str2);
    }

}
