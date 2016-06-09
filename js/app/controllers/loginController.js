/*
 @author: Luis Gallegos
 @author: Francisco Lozano
 @version: 1.0
 This is the JavaScript File help us to send the values to the php files.
 */
 define([], function( ){
   return function($http,$scope){
       $scope.url = '../presenters/loginPresenter.php';
       $scope.url2 = '../presenters/insert-Login.php';
       $scope.encodedString = "";
       $scope.encodedString2 = "";
       this.postForm = function () {   //First Function that obtains the Username and Password
       $scope.encodedString = 'username=' + encodeURIComponent(this.inputData.username) +  //String where we save the values that the user writes
                 '&password=' + encodeURIComponent(this.inputData.password);
                //console.log($scope.encodedString);
         $http({
             method: 'POST', //Method of the function http
             url:  $scope.url, //Url of the file
             data:  $scope.encodedString, //Data that was send
             headers: {'Content-Type': 'application/x-www-form-urlencoded'} //headers
         })
                 .success(function (data, status, headers, config) { //In case of Success
                     //console.log(data);
                     if (data.trim() === 'correct') { //If the PHP file throw "correct" the user is correct login
                         sweetAlert({                //SweetAlert message
                             title: "Good job!",     //Title
                             text: "You have logged in successfully!", //Body
                             type: "success" //Type of Message
                         },
                                 function () { //Funcion that send us to the Home page
                                     window.location.href = "../views/general.php";
                                 });
                     } else if (data.trim() === 'wrongS') { //If the user is block
                         sweetAlert("Oops...", "Something went wrong! Your user is block", "error");//Different kind of Message
                     } else if (data.trim() === 'wrong') {//If the Password or SSO is wrong
                         sweetAlert("Oops...", "Something went wrong! Wrong SSO or Password", "error");
                     } else {//In other kind of error
                         sweetAlert("Error!", "Unable to submit form!", "error");
                     }
                 })
                 .error(function (data, status, headers, config) { //If we lost the conection to the server
                     sweetAlert({
                         title: "Error!",
                         text: "Unable to submit form!",
                         type: "error",
                         confirmButtonText: "Click to continue"
                     });
                 });
     };

     $scope.user= function (){ //name of the global function
         $scope.sso;         //new global sso
         swal({      //Firt input that ask us from SSO
             title: "New User!",//Title
             text: 'Write SSO!',//Message
             type: 'input',//Type
             showCancelButton: true,//Show Cancel Button
             closeOnConfirm: false,//Dont close on Confirm
             animation: "slide-from-top",//Animayion
             inputPlaceholder: "SSO"//PlaceHolder SSO
         },
         function(sso){
             if (sso === false||sso === ""||!/^([0-9]{9})*$/.test(sso)){ //new if
                 swal.showInputError("Write a Correct SSO!");
             }else {
               $scope.sso=sso; //save the value into the global var
               $scope.email(); //call of the next fuction
             }
         });
     };

     $scope.email=function (){
         $scope.email1; //new global email
         swal({
             title: "New User!",
             text: 'Write your GE email!', //Write a e-mail
             type: 'input',
             showCancelButton: true,
             closeOnConfirm: false,
             animation: "slide-from-top",
             inputPlaceholder: "Email"
             },
             function(email){
                 //Posible expresion regular .*?(\\.).*?(@)(ge)(\\.)

             if (email === false||email === "" ||!/^\w*\.\w*@ge\.com$/.test(email)) //new if
                 swal.showInputError("Write a Correct e-mail! ");
             else{
                 $scope.email1=email; //save the value into the global var
                 $scope.pass1();//call of the next fuction
             }
         });

     };

     $scope.pass1=function (){
        $scope.password1;//new global password1
         swal({
             title: "New User!",
             text: 'Write Password!', //Password
             type: 'input',
             inputType: "password", //Input Type: Password
             showCancelButton: true,
             closeOnConfirm: false,
             animation: "slide-from-top",
             inputPlaceholder: "Password"
             },
             function(passw1){
             if (passw1 === false||passw1 === ""){
                 swal.showInputError("You need to write Password!");
             }else{
               $scope.password1=passw1;//save the value into the global var
               $scope.pass2();//call of the next fuction
             }
         });
     };

     $scope.pass2=function (){
        $scope.password2;//new global password2
         swal({
             title: "New User!",
             text: 'Repeat Password!', //Password
             type: 'input',
             inputType: "password", //Input Type: Password
             showCancelButton: true,
             closeOnConfirm: false,
             animation: "slide-from-top",
             inputPlaceholder: "Password"
             },
             function(passw2){
             if (passw2 === false||passw2 === ""){
                 swa2.showInputError("You need to write Password!");
             }else{
               $scope.password2=passw2;//save the value into the global var
               $scope.val();//call of the next fuction
             }
         });
     };

     $scope.val=function(){
         if ($scope.password1 === $scope.password2) { //Ckeck both Passwords if they are the same with the $scope var
             $scope.encodedString2 = 'username=' + $scope.sso + '&password=' + $scope.password1 + '&email=' + $scope.email1;//String that save all the information
              //sweetAlert("Error!", "" + encodedString2 + "", "error");

             $http({
                 method: 'POST', //Type of HTTP function "Post"
                 url: $scope.url2,//Url of the page
                 data: $scope.encodedString2,//Data
                 headers: {'Content-Type': 'application/x-www-form-urlencoded'}//Headers
                 })
                     .success(function (data, status, headers, config){// In case of success
                     //console.log(data.trim());
                     if (data.trim() === 'correct') {//Message that show us that the user is created
                         sweetAlert({
                             title: "Good job!", // Message of Confimation
                             text: "You have Signed Up successfully!",
                             type: "success"
                             });
                             }else if(data.trim() === 'wrong'){//In case of error
                                 sweetAlert("Oops...", "Something went wrong! The user already exists", "error");//SSO of curent created
                                     }else{
                                         sweetAlert("Error!", "Unable to submit form!", "error");//In other case
                                         }
                     })
                     .error(function (data, status, headers, config){// If we lost connecction with the server
                         sweetAlert({
                             title: "Error!",
                             text: "Unable to submit form!",
                             type: "error",
                             confirmButtonText: "Click to continue"
                             });
                     });
             }else{
                 sweetAlert("Error!", "The Passwords are different please repeat the process", "error"); //Message that show us that the passowrds are different we need to make all the process
          }
     };

     this.signIn=function(){
         $scope.user();//Call the Ususer fuction
     };

     this.createSigma= function(){
       bodyController.newsigma();
     };
   }
 });
/*
angular.module('Post', ['ngCookies'])                               //Module
        .controller('PostController', ['$http','$scope', function ($http,$scope) { //Controller named PostController

        }]);

        */
