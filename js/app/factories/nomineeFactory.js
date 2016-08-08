define([], function() {
   return function($q, $http) {

      var serverUrl = '../presenters/nomineePresenter.php';
      //Angular Factories return an object
      //We return an object with multiples functions (properties) each with a server request.
      return {

         viewProject: function() {
            //We need to send a flag and data to process in server
            var dataToSend = {
               "flag": "viewNominee"
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
