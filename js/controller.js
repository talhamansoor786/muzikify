app.controller("mainController", ['$scope', '$http', '$location', '$resource', '$timeout', '$rootScope', '$interval', function($scope, $http, $location, $resource, $timeout, $rootScope, $interval){

	$scope.getTokenFunc = function(){
		$http({
			method:'GET',
			url:'../muzikify/backend/getToken.php',
			headers: {'Content-Type': "application/json"}
		}).then( function successCallBack(response){
			$scope.response = response;
			if($scope.response.data.status){
				$scope.token = $scope.response.data.access_token;
				localStorage.setItem("token", $scope.token);
			}else{
				alert('Something went wrong please try again later');
			}
		}, function errorCallBack(response){
			$scope.status = status;
		});
	}
	$scope.getTokenFunc();

	$interval(function(){
        $scope.getTokenFunc();
    }, 3000000);

	$scope.resultShow	= true;
	$scope.bounce		= false;
	$scope.nothing		= false;
	$scope.resultDiv	= false;

	$scope.search = function(){
		if(!$scope.searchText){
			return false;
		}
		$scope.token = localStorage.getItem("token");
		$scope.resultShow	= false;
		$scope.bounce		= true;
		$scope.resultDiv	= false;
		$http({
			method:'GET',
			url:'https://api.spotify.com/v1/search?q=' + $scope.searchText + '&type=album,artist',
			headers: {'Content-Type': "application/json",
				'Authorization': 'Bearer ' + $scope.token}
		}).then( function successCallBack(response){
			$scope.response		= response;
			$scope.bounce		= false;
			$scope.albums		= $scope.response.data.albums.items;
			$scope.artists		= $scope.response.data.artists.items;
			if($scope.albums.length < 1 && $scope.artists.length < 1){
				$scope.nothing		= true;
				$scope.resultDiv	= false;
			}else{
				$scope.nothing		= false;
				$scope.resultDiv	= true;
			}
			$scope.searchText	= null;
			$scope.resultShow	= false;
		}, function errorCallBack(response){
			$scope.status		= status;
			$scope.searchText	= null;
			$scope.bounce		= false;
		});
	}

}]);