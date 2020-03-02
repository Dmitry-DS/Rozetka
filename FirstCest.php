<?php

/**
 * Class FirstCest
 *
 * @group firstTest
 */
class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function firstTest(AcceptanceTester $I)
    {
        $expected ="Доставка по всей Украине";

        $I->amOnPage('/');
        $actual = $I->grabAttributeFrom('meta[name="description"]', 'content');
        $I->assertStringContainsString($expected, $actual, "Тест упал потому, что не нашел текст доставка по Украине");
    }

    // tests
    public function secondTest(AcceptanceTester $I)
    {
        $expected ="Доставка по всей Украине";
        $I->amOnPage('/');
        $I->see($expected);
    }
}
