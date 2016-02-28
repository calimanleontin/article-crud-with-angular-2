
$(document).ready(function(){
    $("#btn-add").click(function(){
        $("#myModal").show();
    });

    $("#btn-edit").click(function(){
        $("#myModal").show();
    });

    $("#hide").click(function(){
        $("#myModal").hide();
    });
});

var app = angular.module('employeeRecords', [])
    .constant('API_URL', 'http://localhost:8000/');