<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi Networks S.L.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Bundle\CartCouponBundle\Tests\Functional\Services;

use Elcodi\Bundle\TestCommonBundle\Functional\WebTestCase;
use Elcodi\Component\Cart\Entity\Cart;

/**
 * Class CartCouponManagerTest
 */
class CartCouponManagerTest extends WebTestCase
{
    /**
     * Returns the callable name of the service
     *
     * @return string[] service name
     */
    public function getServiceCallableName()
    {
        return ['elcodi.manager.cart_coupon'];
    }

    /**
     * Tests that if cart is new, getCartCoupons return empty Collection
     */
    public function testGetCartCouponsNewCart()
    {
        $cart = new Cart();

        $this->assertEmpty($this
            ->get('elcodi.manager.cart_coupon')
            ->getCartCoupons($cart)
        );
    }

    /**
     * Tests that if cart is new, getCartCoupons return empty Collection
     */
    public function testGetCouponsNewCart()
    {
        $cart = new Cart();

        $this->assertEmpty($this
            ->get('elcodi.manager.cart_coupon')
            ->getCoupons($cart)
        );
    }
}
