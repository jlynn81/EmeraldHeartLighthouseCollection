var app = angular.module('items', []);

app.controller('emerald_products', function($scope){
    $scope.elements = [
        {name:"Mystical Carousel Unicorn"},
        {name:"Star Clown"},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""},
        {name:""}
    ];

    $scope.showedElements = 10;

    $scope.showMore = function(){
        $scope.showedElements += 10;
    }
});

app.filter('showSome', function(){
    return function(input, n) {
        if (!(toString.call(input) === '[object Array]')){
            return input;
        }
        n = parseInt(n);
        return input.slice(0, n);
    };
});
