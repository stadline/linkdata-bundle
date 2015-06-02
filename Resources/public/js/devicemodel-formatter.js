(function($) {
    window.DeviceModel = {
        keys: {
        	13:   'ONDAILY',
        	27:   'FORERUNNER_10',
        	28:   'FORERUNNER_110',
        	29:   'FORERUNNER_205',
        	30:   'FORERUNNER_210',
        	31:   'FORERUNNER_220',
        	32:   'FORERUNNER_305',
        	33:   'FORERUNNER_310XT',
        	34:   'FORERUNNER_405',
        	35:   'FORERUNNER_405CX',
        	36:   'FORERUNNER_410',
        	37:   'FORERUNNER_610',
        	38:   'FORERUNNER_620',
        	39:   'FORERUNNER_910',
        	40:   'FORERUNNER_15',
        	41:   'EDGE_200',
        	42:   'EDGE_210',
        	43:   'EDGE_500',
        	44:   'EDGE_510',
        	45:   'EDGE_800',
        	46:   'EDGE_810',
        	47:   'GARMIN_COMMUNICATOR'
        },
        
        getKey: function(id) {
            return this.keys[id];
        },
        
        getId: function(key) {
            var keys = this.keys;
            
            for (var id in keys) {
                if (keys.hasOwnProperty(id) && keys[id] === key) {
                    return parseInt(id, 10);
                }
            }
        },

        getIdFromName: function(name) {
            var key = name.toUpperCase().replace(' ', '_');

            return this.getId(key);
        }
    };
})(jQuery);