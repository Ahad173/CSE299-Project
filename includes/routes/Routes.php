<?php

Route::set('medicines', function() {
    Medicines::CreateView('Medicines');
    Medicines::onPageLoad();
});

Route::set('companies', function() {
    Companies::CreateView('Companies');
    Companies::onPageLoad();
});

Route::set('checkout', function() {
    Checkout::CreateView('checkout');
    Checkout::onPageLoad();
});

Route::set('representatives', function() {
  Representatives::createView('Representatives');
  Representatives::run();
  
});
Route::set('addRepresentatives', function() {
  AddRepresentatives::createView('AddRepresentatives');
  AddRepresentatives::run();
  
});

Route::set('addMedicines', function() {
  AddMedicines::createView('AddMedicines');
  AddMedicines::run();
  
});

Route::set('addEmployees', function() {
  AddEmployees::createView('AddEmployees');
  AddEmployees::run();
  
});

Route::set('addCompanies', function() {
  AddCompanies::createView('AddCompanies');
  AddCompanies::run();
  
});

Route::set('updateRepresentatives', function() {
  UpdateRepresentatives::createView('UpdateRepresentatives');
  UpdateRepresentatives::run();
  
});

Route::set('deleteRepresentatives', function() {
  DeleteRepresentatives::createView('DeleteRepresentatives');
  DeleteRepresentatives::run();
  
});

Route::set('deleteMedicines', function() {
  DeleteMedicines::createView('DeleteMedicines');
  DeleteMedicines::run();
  
});

Route::set('deleteEmployees', function() {
  DeleteEmployees::createView('DeleteEmployees');
  DeleteEmployees::run();
  
});

Route::set('deleteCompanies', function() {
  DeleteCompanies::createView('DeleteCompanies');
  DeleteCompanies::run();
  
});

Route::set('deleteComplete', function() {
  DeleteComplete::run();
  
});

Route::set('deleteCompleteMed', function() {
  DeleteCompleteMed::run();
  
});

Route::set('deleteCompleteEmp', function() {
  DeleteCompleteEmp::run();
  
});

Route::set('deleteCompleteCom', function() {
  DeleteCompleteCom::run();
  
});

Route::set('updateComplete', function() {
  UpdateComplete::run();
  
});

Route::set('home', function() {
  Home::createView('Home');
  Home::run();
  
});

Route::set('shortage', function() {
  Shortage::createView('Shortage');
  Shortage::run();
  
});

Route::set('index.php',function(){
    Index::CreateView('Index');
    Index::logged();
});

Route::set('employees',function(){
        Employees::CreateView('Employees');
        Employees::employee();
});


Route::set('sale',function(){
    Sales::CreateView('Sales');
    Sales::sale();
});
Route::set('update',function(){
    Update::CreateView('Update');
    Update::updateM();
});
Route::set('cart',function(){
    Cart::CreateView('Cart');
    Cart::cartP();
});
Route::set('addtocart',function(){
    AddToCart::addtocart2();
});
Route::set('removeanitem',function(){
    RemoveAnItem::removeItem();
});
Route::set('clearcart',function(){
   ClearCart::clearAll();
});

Route::set('logout',function(){
  Logout::run();
});

?>