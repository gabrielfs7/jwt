<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Test\Signer;

use Lcobucci\JWT\Signer\Factory;
use Lcobucci\JWT\Signer\Sha256;
use Lcobucci\JWT\Signer\Sha384;
use Lcobucci\JWT\Signer\Sha512;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 0.1.0
 *
 * @coversDefaultClass Lcobucci\JWT\Signer\Factory
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers ::create
     */
    public function createMustBeAbleReturnASha256Signer()
    {
        $factory = new Factory();

        $this->assertInstanceOf(Sha256::class, $factory->create('HS256'));
    }

    /**
     * @test
     * @covers ::create
     */
    public function createMustBeAbleReturnASha384Signer()
    {
        $factory = new Factory();

        $this->assertInstanceOf(Sha384::class, $factory->create('HS384'));
    }

    /**
     * @test
     * @covers ::create
     */
    public function createMustBeAbleReturnASha512Signer()
    {
        $factory = new Factory();

        $this->assertInstanceOf(Sha512::class, $factory->create('HS512'));
    }

    /**
     * @test
     * @covers ::create
     *
     * @expectedException InvalidArgumentException
     */
    public function createMustRaiseExceptionWhenIdIsInvalid()
    {
        $factory = new Factory();
        $factory->create('testing');
    }
}
