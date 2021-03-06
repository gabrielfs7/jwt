<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Test\Signer;

use Lcobucci\JWT\Signer\Sha512;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 0.1.0
 *
 * @coversDefaultClass Lcobucci\JWT\Signer\Sha512
 */
class Sha512Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers ::getAlgorithmId
     */
    public function getAlgorithmIdMustBeCorrect()
    {
        $signer = new Sha512();

        $this->assertEquals('HS512', $signer->getAlgorithmId());
    }

    /**
     * @test
     * @covers ::getAlgorithm
     */
    public function getAlgorithmMustBeCorrect()
    {
        $signer = new Sha512();

        $this->assertEquals('sha512', $signer->getAlgorithm());
    }
}
