<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bower_components/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body ng-controller="ClientController as main">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h2 class="text-center text-primary">Registro de Clientes</h2>
                    <hr/>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstName">Nombre:</label>
                        <input class="form-control" type="text" ng-model="main.firstname" id="firstName" name="firstName" placeholder="Ingrese su nombre"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastName">Apellido:</label>
                        <input type="text" class="form-control" ng-model="main.lastname" id="lastName" name="lastName" placeholder="Ingrese su apellido"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="birthDay">F. Nacimiento:</label>
                        <input type="date" ng-model="main.birthday" id="birthDay" name="birthDay" class="form-control"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Género:</label>
                        <br/>
                        <label class="radio-inline">
                            <input type="radio" ng-model="main.gender" id="gender" name="gender" value="F">Femenino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" ng-model="main.gender" id="gender" name="gender" value="M">Masculino
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary" ng-click="main.addClient()">Guardar</button>
                </div>
            </div>
            <div class="col-md-12">
                <hr/>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Género</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="client in main.clientList">
                            <td>{{client.id}}</td>
                            <td>{{client.firstname}}</td>
                            <td>{{client.Lastname}}</td>
                            <td>{{client.birthday}}</td>
                            <td>{{client.gender}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="bower_components/angular/angular.min.js" type="text/javascript"></script>
        <script src="module.js" type="text/javascript"></script>
        <script src="Client/ClientController.js" type="text/javascript"></script>
        <script src="Client/ClientFactory.js" type="text/javascript"></script>
    </body>
</html>
