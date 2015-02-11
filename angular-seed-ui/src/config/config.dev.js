var CONFIG = {
    /**
     *
     * @preserve
     * Prod and dev properties (may have different value in prod)
     *
     */
    url: {
        api: 'http://localhost:8090/context/api'
    },

    log: {
        level: 'debug'
    },

    paging: {
        pageSize: 10
    },

    typeahead: {
        delay: 300,
        limit: 10
    },

    timeout: {
        notification: {
            info: 5000,
            success: 1500,
            warning: 6000,
            error: -1
        },
        request: 60000
    },

    /**
     *
     * @preserve
     * Dev only properties
     *
     */
    dev: {
        sendCredentials: true
    },

    /**
     *
     * @preserve
     * Business properties
     *
     */
    contact: {
        phone: "+41 58 464 54 01"
    }
};