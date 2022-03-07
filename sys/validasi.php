<?php 
	$errors = array(); 
	function validasiNip(&$errors, $field_list, $field_name)  {
		$pattern = "/^[0-9]*$/"; // format numerik
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*NIM harus diisi';  
			return false;
		}
		else if (!preg_match($pattern, $field_list[$field_name])) {
  			$field_list[$field_name] = "";
			$errors[$field_name] = "*hanya boleh diisi angka";
			return false;
		}
		else if (strlen($field_list[$field_name]) != 12) {
  			$errors[$field_name] = "*NIM harus terdiri dari 12 angka";
			return false;
		}
		else {
			return true;
		}
	}
	function validasiNama(&$errors, $field_list, $field_name)  {
		$pattern = "/^[a-zA-Z ]+$/"; // format alfabet 
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*nama harus diisi';
			return false;
		}
		else if(strlen($field_list[$field_name]) < 3){
			$errors[$field_name] = '*panjang nama harus lebih dari 3 huruf';
			return false;
		}
		else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = '*hanya boleh diisi huruf';
			return false;
		}
		else {
			return true;
		}
	}
	function validasiAlamat(&$errors, $field_list, $field_name){
		$pattern = "/^[a-zA-Z0-9 ]+$/";
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*alamat harus diisi';
			return false;
		}
		else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = '*hanya boleh diisi huruf dan angka';
			return false;
		}
		else {
			return true;
		}
	}
	function validasiNoTelp(&$errors, $field_list, $field_name)  {
		$pattern = "/^[0-9]*$/"; // format numerik
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*nomor whatsapp harus diisi';
			return false;
		}
		else if (!preg_match($pattern, $field_list[$field_name])) {
  			$errors[$field_name] = "*hanya boleh diisi angka";
			return false;
		}
		else if (strlen($field_list[$field_name]) <= 9) {
  			$errors[$field_name] = "*nomor whatsapp kurang dari 10 angka";
			return false;
		}
		else if (strlen($field_list[$field_name]) >= 13) {
  			$errors[$field_name] = "*nomor whatsapp tidak boleh lebih dari 13 angka";
			return false;
		}
		else {
			return true;
		}
	}
	
	function validasiEmail(&$errors, $field_list, $field_name)  {
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*email harus diisi';
			return false;
		}
		else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
  			$errors[$field_name] = "*alamat email salah";
			return false;
		}
		else {
			return true;
		}
	}
	
	function validasiPass(&$errors, $field_list, $field_name)  {
		$pattern = "/^[a-zA-Z0-9]+$/";
		$patternalfa = "/^[a-zA-Z'-]+$/";
		$patternnum = "/^[0-9]*$/";
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*password harus diisi';
			return false;
		}
		else if (strlen($field_list[$field_name]) < 8) {
  			$errors[$field_name] = "*panjang password kurang dari 8 karakter";
  			return false;
		}
		else if (preg_match($patternalfa, $field_list[$field_name]) || preg_match($patternnum, $field_list[$field_name])) {
  			$errors[$field_name] = "*harus berisi alfabet dan numerik";
  			return false;
		}
		else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = "*harus berisi alfabet dan numerik";
			return false;
		}
		else{
			return true;
		}
	}

	function validasiLogin(&$errors, $field_list, $field_name){
		if ($field_list[$field_name] == "0"){ 
			$errors[$field_name] = '*harus diisi';
			return false;
		}
		else{
			return true;
		}
	}



?>