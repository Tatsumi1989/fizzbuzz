<?php
require_once 'index.php';
class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    /** 
     * @var FizzBuzz 
     */
    protected $object;
    /** 
     * setUpは各テストメソッドが実行される前に実行する 
     */
    protected function setUp() { 
        // テストするオブジェクトを生成する
        $this->object = new FizzBuzz(3, 5, 15);
    }
 
    /**
     * 数値の検証
     */
    public function testCheckNum() {
        $reflection = new \ReflectionClass($this->object);
        $method = $reflection->getMethod('checkNum');
        // protected や private なメソッドを実行できるようにする
        $method->setAccessible(true);
        // 通常の数値
        $res = $method->invoke($this->object, 1);
        $this->assertEquals(1, $res);
        // 3の倍数
        $res = $method->invoke($this->object, 3);
        $this->assertEquals('Fizz', $res);
        // 5の倍数
        $res = $method->invoke($this->object, 5);
        $this->assertEquals('Buzz', $res);
        // 3と5の倍数
        $res = $method->invoke($this->object, 15);
        $this->assertEquals('FizzBuzz', $res);
    }
    /**
     * 出力の検証
     */
    public function testPrintFizzBuzz() {
        // 出力が正しいか判定
        $this->expectOutputString('1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
');
        $this->object->printFizzBuzz();
    }
}