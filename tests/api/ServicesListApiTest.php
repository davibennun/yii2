<?php


class ServicesListApiTest extends \Codeception\TestCase\Test
{
    /**
     * @var \ApiTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function ReturnsValidJson()
    {
       $expectedData = [];
       $expectedData[0] = $this->registerService();
       $expectedData[1] = $this->registerService();

       $this->tester->sendGET('/api/services/json');
       $response = $this->tester->grabResponse();
       $responseData = \yii\helpers\Json::decode($response);
       
       $this->assertInternalType('array', $responseData);
       $this->assertEquals($expectedData[0], $responseData[0]);
       $this->assertEquals($expectedData[1], $responseData[1]);
    }
}