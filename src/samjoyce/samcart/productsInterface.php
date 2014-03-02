<?php

namespace samjoyce\samcart;

/**
 *
 * @author Sam
 */
interface productsInterface {
    public function returnPrice($tax = true);
    public function returnName();
    public function returnOptions();
}
