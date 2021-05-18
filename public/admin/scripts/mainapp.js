var app = angular.module("mainapp", ['ngRoute']);
app.config(function ($routeProvider) {
    $routeProvider

        .when("/", {
            templateUrl: "public/admin/views/dashboard.htm",
            controller: "dashboardCtrl"
        })
        .otherwise({ redirectTo: '/dashboard' });
});


app.controller('dashboardCtrl',function($scope,$http){
    console.log('Initialized App');
});