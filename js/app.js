'use strict';

var app = angular.module('App', ['ngRoute', 'ngResource', 'ngCookies'])
.config(['$routeProvider', '$compileProvider', '$locationProvider', '$httpProvider', function ($routeProvider, $compileProvider, $locationProvider, $httpProvider) {
	
	$routeProvider
		.when('/main', {
            controller: 'mainController',
            templateUrl: 'main.php',
			authenticated:true
        })
        .otherwise({ redirectTo: '/main' });
}]);