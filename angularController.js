app.controller('angularController', function($scope, $http) {


	$scope.save=function(isValid){
	
				
       var FormData = {
                    'id' : $scope.value,
					'first_name' : $scope.firstName,
					'middle_name':$scope.middleName,
					'last_name':$scope.lastName,
					'email' :$scope.email,
					'gender':$scope.gender,
					'contact_no' :$scope.contactNo,
					'alternate_contact_no' :$scope.alternateContactNo,
					'stability' :$scope.stability,
					'employment_type' :$scope.employmentType
			};
		var config = {headers : {'Content-Type': 'application/json;'}};
       // console.log(FormData);
        $http.post('db.php', FormData,config)
            .then(function (response) {
                console.log(response)
            }, function(response){
                console.log(response)
            });
    
	}

	$scope.search=function(){
	
		var FormData = {
					'id' : $scope.value,
					};
		
		console.log($scope.value);
		var config = {headers : {'Content-Type': 'application/json;'}};

       $http.post('db1.php',FormData,config)
            .then(function (response) {
            	console.log(response);
                console.log(response.data.id);
                console.log(response.data.first_name);
                console.log(response.data.middle_name);
                console.log(response.data.last_name);
                console.log(response.data.email);
                console.log(response.data.gender);
                console.log(response.data.contact_no);
                console.log(response.data.alternate_contact_no);
                console.log(response.data.stability);
                console.log(response.data.employment_type);
                
                $scope.firstName = response.data.first_name;
                $scope.middleName = response.data.middle_name;
                $scope.lastName = response.data.last_name;
                $scope.email = response.data.email;
                $scope.gender = response.data.gender;
                $scope.contactNo = response.data.contact_no;
                $scope.alternateContactNo = response.data.alternate_contact_no;
                $scope.stability = response.data.stability;
                $scope.employmentType = response.data.employment_type;
            }, function(response){
                console.log(response)
            });
	}

    $scope.delete=function(){

        var FormData = {
                    'id' : $scope.value,
                    };
            var config = {headers : {'Content-Type': 'application/json;'}};

            $http.post('db2.php', FormData,config)
            .then(function (response) {

                console.log(response)
            }, function(response){
                console.log(response)
            });
    }
	
	});
