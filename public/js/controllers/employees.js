angular.module('employees', [])
    .controller('employeesController', function($scope, $http, API_URL, Employee) {
        //retrieve employees listing from API
        Employee.get()
            .success(function(data){
                $scope.employees = data;
            });

        //show modal form
        $scope.toggle = function(modalstate, id) {
            $scope.modalstate = modalstate;

            switch (modalstate) {
                case 'add':
                    $scope.employee = null;
                    $scope.form_title = "Add New Employee";
                    break;
                case 'edit':
                    $scope.form_title = "Employee Detail";
                    Employee.one(id)
                        .success(function(data){
                            $scope.employee = data;
                        });
                default:
                    break;
            }
            console.log(id);

        };

        //save new record / update existing record
        $scope.save = function(modalstate, id) {
            var url = API_URL + "employees";

            Employee.edit($scope.employee)
                .success(function(data){
                    Employee.get()
                        .success(function (data) {
                            $scope.employees = data;
                            $('#myModal').modal('hide');
                        });
                });

        }

        //delete record
        $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
                Employee.destroy(id)
                    .success(function(data){
                        Employee.get()
                            .success(function (getData) {
                                $scope.employees = getData;
                            });
                    });
            } else {
                return false;
            }
        }

        $scope.empty = function(){
            $scope.employee = null;
        }
    });
