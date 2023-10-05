<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase {
    //public function test_index_shows_good_hello()
    //{
    //    $_GET['name'] = "Rom";
    //    ob_start();
    //    include "index.php";
    //    $resultat = ob_get_clean();
//
    //    $this->assertEquals("Hello Rom", $resultat);
    //}
    public function test_homepage_says_hello(){

        // Given (situation initiale)
        $_GET['name'] = "Rom";

        // When (actioon)

        $controller = new \Twitter\Controller\HelloController();
        $response = $controller->hello();

        // Then (alors)
        $this->assertEquals("Hello Rom", $response->getContent());

    }
}
