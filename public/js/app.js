

var app = angular.module('employeeRecords', ['employees', 'employeeService'])
    .constant('API_URL', 'http://localhost:8000/');