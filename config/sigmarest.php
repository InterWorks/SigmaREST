<?php

return [

    /*
    |---------------------------------------------------------------------------
    | Sigma API URL
    |---------------------------------------------------------------------------
    |
    | This value is the API URL that requests are made against for Sigma. The
    | API URL depends on the cloud your Sigma organization is hosted on. Find
    | this in the Sigma application > Administration > Site labeled "Cloud".
    |
    */

    'url' => env('SIGMA_API_URL'),

    /*
    |---------------------------------------------------------------------------
    | Sigma Client ID
    |---------------------------------------------------------------------------
    |
    | This value is the client ID, required to make authenticated API calls.
    | This can be located or created in the Sigma application located at
    | Administration > Developer access.
    |
    */

    'client-id' => env('SIGMA_CLIENT_ID'),

    /*
    |---------------------------------------------------------------------------
    | Sigma Client Secret
    |---------------------------------------------------------------------------
    |
    | This value is the client secret, required to make authenticated API calls.
    | This can be located or created in the Sigma application located at
    | Administration > Developer access.
    |
    */

    'client-secret' => env('SIGMA_CLIENT_SECRET'),

];
