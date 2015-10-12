angular.module('bookApp',['ui.router','ngResource','bookApp.controllers','bookApp.services']);

angular.module('bookApp').config(function($stateProvider,$httpProvider){
    $stateProvider.state('books',{
        url:'/books',
        templateUrl:'partials/books.html',
        controller:'BookListController'
    }).state('viewBook',{
       url:'/books/:id/view',
       templateUrl:'partials/book-view.html',
       controller:'BookViewController'
    }).state('newBook',{
        url:'/books/new',
        templateUrl:'partials/book-add.html',
        controller:'BookCreateController'
    }).state('editBook',{
        url:'/books/:id/edit',
        templateUrl:'partials/book-edit.html',
        controller:'BookEditController'
    });
}).run(function($state){
   $state.go('books');
});