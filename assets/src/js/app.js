(function() {

    "use strict";

    //var environmentUrl = "/wp-content/themes/chimichurris/";
    var environmentUrl = window.location.origin + "/chimichurri/wp-content/themes/chimichurris/"; // for localhost

    // Configure curl AMD loader
    window.curl.config({
        apiName: "require",
        baseUrl: environmentUrl + "assets/dist",
        paths: {
            component: "js/components",
            jquery: "vendor/jquery/jquery",
            slick: "vendor/slick/slick",
            groundwork : "vendor/groundwork/groundwork",
            scrollreveal: "vendor/scrollreveal/scrollreveal",
            readmore: "vendor/readmore/readmore"
        }
    });

    // Cut the mustard
    // <http://responsivenews.co.uk/post/18948466399/cutting-the-mustard>
    if ( ! document.querySelector) {
        return;
    }

    // Object.create() shim
    // <http://javascript.crockford.com/prototypal.html>
    if (typeof Object.create !== "function") {
        Object.create = function(o) {
            function F() {}
            F.prototype = o;
            return new F();
        };
    }

    require(["groundwork","jquery"], function(groundwork, $) {

        // Remove no-js class from document
        document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, "");

        // Boot up components on DOM ready
        $(document).ready( function(){
            groundwork.startup();
        });

    });

})();