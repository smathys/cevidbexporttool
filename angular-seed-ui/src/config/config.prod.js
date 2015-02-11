var CONFIG = {
    /**
     *
     * @preserve
     * Prod and dev properties (may have different value in dev)
     *
     * Numbers may be minified to format XeY, e.g. 2e3 = 2000, for changes in production use standard number format
     *
     */
    url: {
        api: '/context/api'
    },

    log: {
        level: 'info'
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
        request: 30000
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