(function($) {
    window.Sports = {
        keys: {
        	113:   'MARCHE',
        	121:   'COURSE_A_PIED',
        	91:    'FITNESS',
        	98:    'MUSCULATION_EN_SALLE'
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
        }
    };
})(jQuery);