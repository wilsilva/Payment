<?php

return [

	"pagseguro" => [
		"company_name" => "my_company_name",
		"release" => "1.0.0",
		"environment" => "sandbox", // or production
		"email" => "your_pagseguro_email",
		"token_production" => "your_production_token",
		"token_sandbox" => "your_sandbox_token",
		"app_id_production" => "your_production_application_id",
		"app_id_sandbox" => "your_sandbox_application_id",
		"app_key_production" => "your_production_application_key",
		"app_key_sandbox" => "your_sandbox_application_key",
		"charset" => "UTF-8",
		"log_active" => true,
		"log_location" => storage_path('logs/pagseguro.log'),
	],
];