app.controller('employeesController', function($scope, $http, API_URL){
    $http.get(API_URL + 'employees')
        .success(function(data){
            $scope.employees = data;
        });


});