<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /**
     * Test page is successful
     *
     * @dataProvider provideUrls
     * @param $url
     */
    public function testAdminPagesAreSuccessful($url)
    {
        $client = static::createClient();
        $client->request('GET', $url);
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * Urls provider
     *
     * @return array
     */
    public function provideUrls()
    {
        return array(
            array('/'),
        );
    }
}
