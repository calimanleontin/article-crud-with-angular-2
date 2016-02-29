angular.module('employeeService', [])

    .factory('Employee', function($http){
        return{
            get : function(){
                return $http.get('/employees');
            },

            edit : function(employee){
                var url = null;
                if(employee.id == null)
                    url = '/employees';
                else
                    url = '/employees/' + employee.id;
                return $http({
                    method : 'POST',
                    url : url,
                    data : $.param(employee),
                    headers : {'Content-Type' : 'application/x-www-form-urlencoded'}
                });
            },

            one : function(id){
                return $http.get('/employees/' + id)
            },

            destroy : function(id)
            {
                return $http.delete('/employees/delete/' + id);
            }
        }
    });