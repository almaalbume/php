(function () {
    'use strict';

    angular
            .module('app')
            .controller('ClientController', ClientController);

    ClientController.$inject = ['ClientFactory'];

    function ClientController(ClientFactory) {
        var self = this;
        self.clientList = [];
        self.firstname = null;
        self.lastname = null;
        self.birthday = "2017-03-12";
        self.gender = "F";

        self.getClientList = getClientList;
        self.addClient = addClient;


        init();

        function init() {
            getClientList();
        }

        function getClientList() {
            self.clientList = [];
            ClientFactory.getClientList()
                    .then(function (data) {
                        self.clientList = data;
                    });
        }

        function addClient() {
            var clientInstance = {
                firstname: self.firstname,
                lastname: self.lastname,
                birthday: self.birthday,
                gender: self.gender
            };
            ClientFactory.addClient(clientInstance)
                    .then(function (data) {
                        console.log(data);
                        getClientList();
                    });
        }



    }
})();