<?php
 Route::get('/storage-link', function(){
      $targetFolder = storage_path('app/public');
      $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
      symlink($targetFolder,$linkFolder);
?>