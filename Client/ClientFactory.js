(function () {
    'use strict';

    angular
            .module('app')
            .factory('ClientFactory', ClientFactory);

    ClientFactory.$inject = ['$http'];

    function ClientFactory($http) {
        return  {
            getClientList: getClientList,
            addClient: addClient
        };

        function getClientList() {
            return $http({
                method: 'GET',
                url: 'http://localhost/anguarPHP/Client/readAllClients.php'
            }).then(function (response) {
                return response.data;
            }, function () {
                return null;
                console.log("Error:  (getClientList)");
            });
        }

        function addClient(clientInstance) {
            return $http({
                method: 'POST',
                data: clientInstance,
                url: 'http://localhost/anguarPHP/Client/addClient.php'
            }).then(function (response) {
                return response.data;
            }, function () {
                console.log("Error:  (addClient)");
            });
        }

    }
})();