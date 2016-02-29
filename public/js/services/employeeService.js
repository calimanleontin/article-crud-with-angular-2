angular.module('employeeService', [])

    .factory('Employee', function($http){
        return{
            get : function(){
                $http.get('/employees');
            }
        }
    });