define([], function() {
   return function($q, $http) {

      var serverUrl = '../presenters/candidatPresenter.php';
      //Angular Factories return an object
      //We return an object with multiples functions (properties) each with a server request.
      return {
         candidat : {
           name: '',
           fatherlast: '',
           motherlast: '',
           number: '',
           email: '',
           folioV:''
         },

         candidatUP:{
           idcandidat:'',
           name:'',
           fatherlast:'',
           motherlast:'',
           number:'',
           email:'',
           state:''
         },

        viewProject: function() {
            //We need to send a flag and data to process in server
            var dataToSend = {
               "flag": "viewCandidat"
            },
            //Required data to service request
            req = {
               method: 'POST',
               url: serverUrl,
               data: dataToSend,
               headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            },
            // We use a $q service, this object contains the promise we'll return,
            //and has some helper functions to let us build the promise.
            deferred = $q.defer();
            $http(req).then(
               function (response) {
                  // resolves the derived promise with response.data
                  deferred.resolve(response.data);
               }, function () {
                  //rejects the derived promise with a response
                  deferred.reject(response);
               }
            );
            //we return a promise
            return deferred.promise;
         },

         viewComboVacant: function() {
             //We need to send a flag and data to process in server
             var dataToSend = {
                "flag": "viewComboVacant"
             },
             //Required data to service request
             req = {
                method: 'POST',
                url: serverUrl,
                data: dataToSend,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
             },
             // We use a $q service, this object contains the promise we'll return,
             //and has some helper functions to let us build the promise.
             deferred = $q.defer();
             $http(req).then(
                function (response) {
                   // resolves the derived promise with response.data
                   deferred.resolve(response.data);
                }, function () {
                   //rejects the derived promise with a response
                   deferred.reject(response);
                }
             );
             //we return a promise
             return deferred.promise;
          },

      viewComboState: function() {
          //We need to send a flag and data to process in server
          var dataToSend = {
             "flag": "viewComboState"
          },
          //Required data to service request
          req = {
             method: 'POST',
             url: serverUrl,
             data: dataToSend,
             headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          },
          // We use a $q service, this object contains the promise we'll return,
          //and has some helper functions to let us build the promise.
          deferred = $q.defer();
          $http(req).then(
             function (response) {
                // resolves the derived promise with response.data
                deferred.resolve(response.data);
             }, function () {
                //rejects the derived promise with a response
                deferred.reject(response);
             }
          );
          //we return a promise
          return deferred.promise;
       },

      newCandidat: function(candidat) {
         //We need to send a flag and data to process in server
         var dataToSend = {
            "flag": "newCandidat",
            "candidat": candidat
         },
         //Required data to service request
         req = {
            method: 'POST',
            url: serverUrl,
            data: dataToSend,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
         },
         // We use a $q service, this object contains the promise we'll return,
         //and has some helper functions to let us build the promise.
         deferred = $q.defer();
         $http(req).then(
            function (response) {
               // resolves the derived promise with response.data
               deferred.resolve(response.data);
            }, function () {
               //rejects the derived promise with a response
               deferred.reject(response);
            }
         );
         //we return a promise
         return deferred.promise;
      },

      promoveCandidat: function(idCandidat) {
         //We need to send a flag and data to process in server
         var dataToSend = {
            "flag": "promoveCandidat",
            "candidat": idCandidat
         },
         //Required data to service request
         req = {
            method: 'POST',
            url: serverUrl,
            data: dataToSend,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
         },
         // We use a $q service, this object contains the promise we'll return,
         //and has some helper functions to let us build the promise.
         deferred = $q.defer();
         $http(req).then(
            function (response) {
               // resolves the derived promise with response.data
               deferred.resolve(response.data);
            }, function () {
               //rejects the derived promise with a response
               deferred.reject(response);
            }
         );
         //we return a promise
         return deferred.promise;
      },
      updatedCandidat: function(objectCandidatUpdated) {
         //We need to send a flag and data to process in server
         var dataToSend = {
            "flag": "updatedCandidat",
            "candidat": objectCandidatUpdated
         },
         //Required data to service request
         req = {
            method: 'POST',
            url: serverUrl,
            data: dataToSend,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
         },
         // We use a $q service, this object contains the promise we'll return,
         //and has some helper functions to let us build the promise.
         deferred = $q.defer();
         $http(req).then(
            function (response) {
               // resolves the derived promise with response.data
               deferred.resolve(response.data);
            }, function () {
               //rejects the derived promise with a response
               deferred.reject(response);
            }
         );
         //we return a promise
         return deferred.promise;
      }
   }

   };
});
