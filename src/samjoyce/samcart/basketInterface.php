<?php
namespace samjoyce\samcart;

/**
 *
 * @author Sam
 */
interface basketInterface {
   public function returnItem($id);
   public function returnBaket();
   public function returnSubTotal();
}
