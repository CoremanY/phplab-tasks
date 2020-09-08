<?php


class Cookies {

	private $cookies;
	private $multiple_cookies;

	public function __construct() {
		$this->cookies = $_COOKIE;
		$this->multiple_cookies = isset($_SERVER['HTTP_COOKIE']) ? $_SERVER['HTTP_COOKIE'] : null;

	}

	
	public function all(array $only = []): array {
		return empty($only) ? $this->cookies : array_keys($only);
	}

	
	public function get(string $key, string $default = null): ?string {
		return array_key_exists($key, $this->cookies) ? $this->cookies[$key] : $default;
	}

	
	public function set(string $key, string $value) {
		setcookie($key, $value);
	}

	
	public function has(string $key): bool {
		return !empty($this->get($key));
	}

	
	public function remove(string $key) {
		setcookie($key, "", time()-1200);
	}

	

}
