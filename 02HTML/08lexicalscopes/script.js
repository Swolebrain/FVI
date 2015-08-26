/*jslint devel: true */
(function () {
    "use strict";
    var x;
    function func1() {
        var frodo = "baggins";
        x = function () {
            console.log(frodo);
        };

    }
    func1();

    function funcRuner(param) {
        console.log("Your function is about to run!!");
        param();

    }
    function squareOf1000() {
        console.log(1000000);
    }
    //funcRuner(squareOf1000);
    funcRuner(function () {
        console.log("this function can do");
        console.log("a bunch of stuff");
    });
}());
