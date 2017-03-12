<?php
/**
 * SignOutController.php
 *
 * This will just accept the JWT as it is and return 204.
 * In reality nothing gets deleted due to the nature of JWT tokens.
 *
 * If one wants, this can be extended to delete the actual token from a
 * cache or similar, and updating the Auth check to scan this cache for
 * valid tokens..
 *
 * @package  Nofuzz-Tutorial-Blog
 */
#################################################################################################################################

namespace App\Controllers\v1;

class SignOutController extends \App\Controllers\v1\AbstractAuthController
{
  /**
   * DELETE handler
   *
   * @param  array  $args [description]
   * @return bool
   */
  public function handleDELETE(array $args)
  {
    # Send an empty body as return
    response()
      ->setCacheControl('private, no-cache, no-store')
      ->setStatusCode( 204 )
      ->setBody('');

    return true;
  }

}
