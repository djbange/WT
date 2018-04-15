<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>MySQL using AngularJS with PHP</title>  
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>  
<body>  
<div class="col-md-12">
	<h3 align="center">Insert, Update, Delete Data in MySQL using AngularJS with PHP</h3>
	<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
		<div class="col-md-6">
		   	<label>Name</label>
            <input type="text" name="name" ng-model="name" class="form-control">
            <br/>
            <label>Email</label>
            <input type="email" name="email" ng-model="email" class="form-control">
            <br/>
            <label>Academic Year</label>
            <input type="text" name="year" ng-model="year" class="form-control">
            <br/>
            <label>DOB</label>
            <input type="date" name="dob" ng-model="dob" class="form-control">
            <br/>
            <input type="hidden" ng-model="id">
            <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
		</div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Year</th>
                    <th>DOB</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr ng-repeat="x in names">
                    <td>{{x.id}}</td>
                    <td>{{x.name}}</td>
                    <td>{{x.email}}</td>
                    <td>{{x.year}}</td>
                    <td>{{x.dob}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" ng-click="update_data(x.id, x.name, x.email, x.year. x.dob)">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-xs" ng-click="delete_data(x.id )">
                            <span class="glyphicon glyphicon-trash"></span> Delete
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>  
var app = angular.module("sa_app", []);                 
app.controller("controller", function($scope, $http) {
    $scope.btnName = "Insert";
    $scope.insert = function() {
        if ($scope.name == null) {
            alert("Enter Your Name");
        } else if ($scope.email == null) {
            alert("Enter Your Email ID");
        } else if ($scope.year == null) {
            alert("Enter Your Year");
        } else if ($scope.dob == null) {
            alert("Enter Your DOB");
        } else {
            $http.post(
                "insert.php", {
                    'id': $scope.id,
                    'name': $scope.name,
                    'email': $scope.email,
                    'year': $scope.year,
                    'dob': $scope.dob,
                    'btnName': $scope.btnName,
                    
                }
            ).success(function(data) {
                alert(data);
                $scope.name = null;
                $scope.email = null;
                $scope.year = null;
                $scope.btnName = "Insert";
                $scope.show_data();
            });
        }
    }
    $scope.show_data = function() {
        $http.get("display.php")
            .success(function(data) {
                $scope.names = data;
            });
    }
    $scope.update_data = function(id, names, email, year) {
        $scope.id = id;
        $scope.name = name;
        $scope.email = email;
        $scope.year = year;
        $scope.btnName = "Update";
    }
    $scope.delete_data = function(id) {
        if (confirm("Are you sure you want to delete?")) {
            $http.post("delete.php", {
                    'id': id
                })
                .success(function(data) {
                    alert(data);
                    $scope.show_data();
                });
        } else {
            return false;
        }
    }
});
</script>  
</body>  
</html>  