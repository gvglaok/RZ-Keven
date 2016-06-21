<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>rgzn</title>
	
	<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
	<!--<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
	<!---<script src="http://cdn.bootcss.com/angular.js/1.3.15/angular.min.js"></script>-->

	<!-- 程序使用angular 1.2.15-version -->
	<script src="http://cdn.bootcss.com/angular.js/1.2.15/angular.min.js"></script>
	<script type="text/javascript">
	//定义angular模块
	var dataApp=angular.module('dataApp', []);

	//创建angular 控制器, 使用
	function dataCon($scope,$http){

		$scope.formData={};
		//处理表单
		$scope.processForm=function(){
			$http({
				method : 'post',
				url : 'getData.php',
				data : $.param($scope.formData),
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).success(function (data) {
				/*数据post成功  当时angular 再获取数据 绑定时 出错 ，*/
				//console.log(data);
				//alert("ok");
				console.log(data);
				$scope.mesInfo=data.mes;
				$scope.errorInfo=data.err;
				$scope.formData.ms=data.mes;

				/*if(!data.success){
					$scope.mesInfo=data.mes;
					$scope.errorInfo=data.err;
				} else {
					alert(data.mes);
					$scope.mesInfo=data.mes;
					$scope.errorInfo=data.err;
				}*/

			});
		};

	};

	

	</script>
</head>
<body class="container" ng-app="dataApp" ng-controller="dataCon" >
	<br><br>
	<div class="row">

		<div class="col-lg-6">
			<form action="">
				<div class="form-group">
					<label class="control-label" for="ms_return">MS_return:</label>
					<textarea name="" id="ms" ng-model="formData.ms" cols="30" rows="6" class="form-control">
						<!-- {{ mesInfo }} -->
					</textarea>
				</div>
			</form>
		</div>

		<div class="col-lg-6">
			<form ng-submit="processForm()" method="post">
				<div class="form-group">
					<label class="control-label" for="hu_return">HU_return:</label>
					<textarea id="hu" name="hu" ng-model="formData.hu"  cols="30" rows="6" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

	</div>

	<div class="col-lg-12">
		<!-- SHOW DATA FROM INPUTS AS THEY ARE BEING TYPED -->

	        调试消息：<br>
	        
	        ng-json数据：{{ formData }}<br>

	        消息：{{ mesInfo }}<br>

	        错误：{{ errorInfo }}<br>

	</div>
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li>s</li>
	</ul>
	

</body>
</html>