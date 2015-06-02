(function($) {
    $.extend(Date.prototype, {
        localize: function(dateFormat, timeFormat, locale) {
            var options = {};

            // handle dateFormat
            if (dateFormat == "full") {
                $.extend(options, {
                    weekday: "long",
                    day: "numeric",
                    month: "long",
                    year: "numeric",
                    era: "short"
                });
            } else if (dateFormat == "long") {
                $.extend(options, {
                    day: "numeric",
                    month: "long",
                    year: "numeric"
                });
            } else if (dateFormat == "medium") {
                $.extend(options, {
                    day: "numeric",
                    month: "short",
                    year: "numeric"
                });
            } else if (dateFormat == "short") {
                $.extend(options, {
                    day: "2-digit",
                    month: "2-digit",
                    year: "2-digit"
                });
            } else {
                dateFormat = false;
            }

            // handle timeFormat
            if (timeFormat == "full") {
                $.extend(options, {
                    hour: "numeric",
                    minute: "2-digit",
                    second: "2-digit",
                    timeZoneName: "short"
                });
            } else if (timeFormat == "long") {
                $.extend(options, {
                    hour: "numeric",
                    minute: "2-digit",
                    second: "2-digit"
                });
            } else if (timeFormat == "medium") {
                $.extend(options, {
                    hour: "numeric",
                    minute: "2-digit",
                    second: "2-digit"
                });
            } else if (timeFormat == "short") {
                $.extend(options, {
                    hour: "numeric",
                    minute: "2-digit"
                });
            } else {
                timeFormat = false;
            }

            // handle locale
            if (!locale) {
                locale = document.documentElement.lang;
            }
            if (!locale) {
                locale = window.navigator.language;
            }

            // send localized date
            if (dateFormat && timeFormat) {
                return this.toLocaleString(locale, options);
            } else if (dateFormat) {
                return this.toLocaleDateString(locale, options);
            } else if (timeFormat) {
                return this.toLocaleTimeString(locale, options);
            }
        }
    });
})(jQuery);