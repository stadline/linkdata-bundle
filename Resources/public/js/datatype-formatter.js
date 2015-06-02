(function($) {
    window.Datatype = {
        keys: {
            1:   'HR_CURRENT',
            3:   'HR_MAX',
            5:   'DISTANCE',
            6:   'SPEED_CURRENT',
            7:   'SPEED_MAX',
            8:   'SPEED_MIN',
            9:   'SPEED_AVG',
            10:  'CADENCE_CURRENT',
            14:  'ELEVATION_CURRENT',
            18:  'ASCENT',
            19:  'DESCENT',
            23:  'CALORIES_BURNT',
            24:  'DURATION',
            25:  'HR_PERCENTAGE_MIN',
            26:  'HR_PERCENTAGE_MAX',
            28:  'HR_REST',
            98:  'ACTIVITY_NUMBER',
            99:  'POINTS_EARNED',
            100: 'RPM_CURRENT',

            // special datatypes
            10000: 'ELAPSED_TIME',
            10001: 'SPEED_RATE_CURRENT',
            10002: 'VERTICAL_SPEED_CURRENT',
            10003: 'ASCENT_SPEED_AVG',
            10004: 'DESCENT_SPEED_AVG',
            10005: 'TIME_OF_DAY',
            10006: 'LOCATION',
            10007: 'MONTH_FIRST_LETTER',
            10008: 'MONTH',
            10009: 'SPEED_RATE_AVG',
            10010: 'SPEED_RATE_MAX',
            10011: 'HR_LITERAL_ZONE',
            10012: 'ELEVATION_PERCENTAGE',
            10013: 'ELEVATION_PERCENTAGE_ASCENT',
            10014: 'ELEVATION_PERCENTAGE_DESCENT'
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

        getFormatter: function(datatypeId) {
            var key = this.getKey(datatypeId);
            
            if (key && $.inArray(key, ['ELEVATION_CURRENT', 'ELEVATION_MAX', 'ELEVATION_MIN', 'ASCENT', 'DESCENT']) !== -1) {
                return ElevationFormatter;
            }
            
            if (key && $.inArray(key, ['HR_PERCENTAGE_MAX', 'HR_PERCENTAGE_MIN']) !== -1) {
                return HeartratePercentageFormatter;
            }
            
            if (key && $.inArray(key, ['RPM_CURRENT']) !== -1) {
                return RPMFormatter;
            }

            if (key && $.inArray(key, ['CADENCE_CURRENT']) !== -1) {
                return CadenceFormatter;
            }
            
            if (key && $.inArray(key, ['SPEED_AVG', 'SPEED_CURRENT', 'SPEED_MIN', 'SPEED_MAX']) !== -1) {
                return SpeedFormatter;
            }
            
            if (key && $.inArray(key, ['SPEED_RATE_CURRENT', 'SPEED_RATE_AVG', 'SPEED_RATE_MAX']) !== -1) {
                return SpeedRateFormatter;
            }
            
            if (key && $.inArray(key, ['DISTANCE']) !== -1) {
                return DistanceFormatter;
            }
            
            if (key && $.inArray(key, ['DURATION', 'ACTIVE_TIME', 'ELAPSED_TIME']) !== -1) {
                return DurationFormatter;
            }
            
            if (key && $.inArray(key, ['TIME_OF_DAY']) !== -1) {
                return TimeOfDayFormatter;
            }

            if (key && $.inArray(key, ['MONTH_FIRST_LETTER']) !== -1) {
                return MonthFirstLetterFormatter;
            }

            if (key && $.inArray(key, ['MONTH']) !== -1) {
                return MonthFormatter;
            }

            if (key && $.inArray(key, ['HR_LITERAL_ZONE']) !== -1) {
                return HRLiteralZoneFormatter;
            }
            
            if (key && $.inArray(key, ['HR_AVG', 'HR_CURRENT', 'HR_MIN', 'HR_MAX']) !== -1) {
                return HealthRateFormatter;
            }
            
            if (key && $.inArray(key, ['CALORIES_BURNT']) !== -1) {
                return CalorieFormatter;
            }
            
            if (key && $.inArray(key, ['ACTIVITY_NUMBER']) !== -1) {
            	return ActivityNumberFormatter;
            }
            
            if (key && $.inArray(key, ['POINTS_EARNED']) !== -1) {
                return PointFormatter;
            }
            
            if (key && $.inArray(key, ['VERTICAL_SPEED_CURRENT', 'ASCENT_SPEED_AVG', 'DESCENT_SPEED_AVG']) !== -1) {
                return VerticalSpeedFormatter;
            }

            if (key && $.inArray(key, ['ELEVATION_PERCENTAGE']) !== -1) {
                return ElevationPercentageFormatter;
            }
            
            // no formatter found, return default formatter
            return DefaultFormatter;
        },

        getDefaultFormatter: function() {
            return DefaultFormatter;
        }
    };
    
    /**
     * DefaultFormatter
     */
    
    var DefaultFormatter = {
        formatValue: function(value, withUnit) {
            if (withUnit && this.getUnit()) {
                return this.clean(value)+' '+this.getUnit();
            }
            else {
                return this.clean(value);
            }
        },
        clean: function(value) {
            if (!isNaN(value)) {
                return this.round(value);
            }
            else {
                return value;
            }
        },
        getUnit: function() {
            var unitTranslationKey = this.getUnitTranslationKey();
            if (unitTranslationKey) {
                return Translator.get('units:'+this.getUnitTranslationKey());
            }
            else {
                return null;
            }
        },
        getUnitTranslationKey: function() {
            return null;
        },
        round: function(value, precision) {
            var p = precision ? Math.pow(10, precision) : 1;
            return (Math.round(value * p) / p).toFixed(precision);
        }
    };
    
    /**
     * Specific formatters
     */
    
    var CalorieFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.kilocalories";
        }
    });

    var CadenceFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.cadence";
        }
    });    
    var DistanceFormatter = $.extend({}, DefaultFormatter, {
    	clean: function(value) {
    		return this.round(value/1000, 2);
    	},
    	getUnitTranslationKey: function() {
    		return "unit.kilometer";
    	}
    });
    var ActivityNumberFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.activity_number";
        }
    });
    
    var DurationFormatter = $.extend({}, DefaultFormatter, {
        formatValue: function(value, withUnit) {
            if (withUnit) {
                return this.formatTimestamp(value);
            }
            else {
                return this.clean(value);
            }
        },
        formatTimestamp: function(timestamp) {
            var now = new Date(0);
            var date = new Date(timestamp*1000 + now.getTimezoneOffset()*60000);

            var seconds   = (date.getSeconds() > 9) ? date.getSeconds()+'"' : '0'+date.getSeconds()+'"';
            var minutes   = (date.getMinutes() > 9) ? date.getMinutes()+"'" : '0'+date.getMinutes()+"'";
            var fullHours = Math.floor(timestamp/3600);
            var hours     = (fullHours > 9)   ? fullHours+':'   : (fullHours > 0) ? '0'+fullHours+':' : '';

            return hours+minutes+seconds;
        }
    });
    
    var TimeOfDayFormatter = $.extend({}, DefaultFormatter, {
        formatValue: function(value, withUnit) {
            var offset = 10800;
            
            if (withUnit) {
                return this.formatTimestamp(value + offset);
            }
            else {
                return this.clean(value + offset);
            }
        },
        formatTimestamp: function(timestamp) {
            var now = new Date(0);
            var date = new Date(timestamp*1000 + now.getTimezoneOffset()*60000);

            var hours   = date.getHours()+':';
            var minutes = (date.getMinutes() > 9) ? date.getMinutes()   : '0'+date.getMinutes();

            return hours+minutes;
        }
    });
    
    var HRLiteralZoneFormatter= $.extend({}, DefaultFormatter, {
        formatValue: function(value, withUnit) {
        	
        	value = parseInt(value);
        	
        	if (value <= 60 )
        	{
        		value = Translator.get("healthrate:hr.zone.start");
        	}
        	else if (value > 60 && value <= 70)
    		{
        		value = Translator.get("healthrate:hr.zone.calorie");
    		}
        	else if (value > 70 && value <= 80)
    		{
        		value = Translator.get("healthrate:hr.zone.endurance");
    		}
        	else if (value > 80 && value <= 90)
    		{
        		value = Translator.get("healthrate:hr.zone.performance");
    		}
        	else if (value > 90 && value <= 95)
    		{
        		value = Translator.get("healthrate:hr.zone.expert");
    		}
        	else if (value > 95)
    		{
        		value = Translator.get("healthrate:hr.zone.danger");
    		}

        	return value;
        }
    });
    
    var MonthFormatter = $.extend({}, DefaultFormatter, {
        formatValue: function(value, withUnit) {
        	switch (value)
        	{
        	case 1:
        		value = Translator.get("month:month.january");
        		break;
        	case 2:
        		value = Translator.get("month:month.february");
        		break;
        	case 3:
        		value = Translator.get("month:month.march");
        		break;
        	case 4:
        		value = Translator.get("month:month.april");
        		break;
        	case 5:
        		value = Translator.get("month:month.may");
        		break;
        	case 6:
        		value = Translator.get("month:month.june");
        		break;
        	case 7:
        		value = Translator.get("month:month.july");
        		break;
        	case 8:
        		value = Translator.get("month:month.august");
        		break;
        	case 9:
        		value = Translator.get("month:month.september");
        		break;
        	case 10:
        		value = Translator.get("month:month.october");
        		break;
        	case 11:
        		value = Translator.get("month:month.november");
        		break;
        	case 12:
        		value = Translator.get("month:month.december");
        		break;
        	default:
        		value="";
        	}
        	
        	return value;
        }
    });
    
    var MonthFirstLetterFormatter = $.extend({}, DefaultFormatter, {
        formatValue: function(value, withUnit) {
        	return MonthFormatter.formatValue(value,withUnit).substr(0,1);
        }
    });    
    
    var ElevationFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.meter";
        }
    });
    
    var HealthRateFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.healthrate";
        }
    });
    
    var PercentageFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.percent";
        }
    });

    var ElevationPercentageFormatter = $.extend({}, PercentageFormatter, {
        clean: function(value) {
            return Math.round(value*10)/10;
        },getUnitTranslationKey: function() {
            return "unit.percent";
        }
    });
    
    var HeartratePercentageFormatter = $.extend({}, DefaultFormatter, {
        clean: function(value) {
            return Math.floor(value);
        },getUnitTranslationKey: function() {
            return "unit.percent.hrm";
        }
    });
    
    var PointFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.point.on";
        }
    });
    
    var RPMFormatter = $.extend({}, DefaultFormatter, {
        getUnitTranslationKey: function() {
            return "unit.rpm";
        }
    });
    
    var SpeedFormatter = $.extend({}, DefaultFormatter, {
        clean: function(value) {
            return this.round(value/1000, 2);
        },
        getUnitTranslationKey: function() {
            return "unit.speed";
        }
    });
    
    var SpeedRateFormatter = $.extend({}, DefaultFormatter, {
        formatValue: function(value, withUnit) {
            var minutes = 60000 * value;
            var seconds = (minutes - Math.floor(minutes)) * 60;
            
            if (withUnit) {
                minutes = Math.floor(minutes);
                seconds = (seconds > 9) ? Math.floor(seconds) : '0'+Math.floor(seconds);
                
                return minutes+"'"+seconds+'" /km';
            } else {
                return Math.round(minutes, 1);
            }
        },
        getUnitTranslationKey: function() {
            return "unit.speed_rate";
        }
    });
    
    var VerticalSpeedFormatter = $.extend({}, DefaultFormatter, {
        clean: function(value) {
            return this.round(value, 2);
        },
        getUnitTranslationKey: function() {
            return "unit.vertical_speed";
        }
    });
    
})(jQuery);