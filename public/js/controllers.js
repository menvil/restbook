angular.module('bookApp.controllers',[]).controller('BookListController',function($scope,$state,popupService,$window,Book){

    $scope.books=Book.query();

    $scope.deleteBook=function(book){
        if(popupService.showPopup('Really delete this?')){
            book.$delete(function(){
                $window.location.href='';
            });
        }
    }

}).controller('BookViewController',function($scope,$stateParams,Book){

    $scope.book=Book.get({id:$stateParams.id});

}).controller('BookCreateController',function($scope,$state,$stateParams,Book){

    $scope.book=new Book();

    $scope.addBook=function(){
        $scope.book.$save(function(){
            $state.go('books');
        });
    }

}).controller('BookEditController',function($scope,$state,$stateParams,Book){

    $scope.updateBook=function(){
        $scope.book.$update(function(){
            $state.go('books');
        });
    };

    $scope.loadBook=function(){
        $scope.book=Book.get({id:$stateParams.id});
    };

    $scope.loadBook();
});