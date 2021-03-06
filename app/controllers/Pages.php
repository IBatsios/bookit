<?php

//require '../vendor/autoload.php';

/**
 * Pages controller: This controller handles all data transfers for any view within the 'pages' directory. Each method
 * corresponds to a view (the name must be EXACTLY the same).
 *
 * @author Christopher Thacker, Ioannis Batsios
 */
class Pages extends Controller {

    /**
     * Index: THIS METHOD IS REQUIRED. It helps prevent access to the application directory index and is the
     * default method that is called when no method is specified in the URL. For example, without this method, if
     * someone typed "localhost/sprayit/pages" into the browser, without a method, THE PROGRAM WOULD CRASH because
     * an index method would not be found. Use this method to redirect to another page.
     *
     * @author Christopher Thacker
     */
    public function index() {
        Redirect::to(POSTS_HOME);
    }

    /**
     * 404: Loads the 404 page not found view.
     *
     * @author Christopher Thacker
     */
    public function not_found() {
        $this->view(NOT_FOUND_PATH);
    }
}