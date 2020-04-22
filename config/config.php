<?php

return [
    /**
     * This is the path where you will see the submissions you've received
     * i.e. https://example.com/submissions
     */
    'private_url' => 'submissions',

    /**
     * This is the middleware that will be applied to the above route.
     */
    'private_middleware' => ['web'],

    /**
     * This is the path where the submission form exists and where submissions
     * will be posted to. 
     * i.e. https://example.com/contact
     */
    'public_url' => 'contact',

    /**
     * this is the middleware that will be applied to the public route.
     */
    'public_middleware' => ['web'],

    /**
     * This is the table that will be created in the migration to store the 
     * submissions you receive.
     */
    'table' => 'submissions'
];
