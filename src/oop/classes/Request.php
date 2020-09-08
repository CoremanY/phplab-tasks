<?php
require_once("Session.php");
require_once("Cookies.php");


class Request {

	private  $get;
	private  $post;
	private  $request_method;
	private  $ip;
	private  $ua;
	private  $referer;
	private  $request_uri;
	private  $cookies;
	private  $session;

	public function __construct() {
		$this->get = $_GET;
		$this->post = $_POST;
		$this->request_method = $_SERVER['REQUEST_METHOD'];
		$this->ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']; 
		$this->ua = $_SERVER['HTTP_USER_AGENT'];
		$this->ua_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$this->referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'referrer link is empty';
		$this->request_uri = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$this->cookies = new Cookies();
		$this->session = new Session();
	}

	
	public function get(string $key, string $default = null): ?string {
		return array_key_exists($key, $this->get) ? $this->get[$key] : $default;
	}

	
	public function post(string $key, string $default = null): ?string {
		return array_key_exists($key, $this->post) ? $this->post[$key] : $default;
	}

	
	public function request(string $key, string $default = null): ?string {
		if(!empty($_POST)) {
			$result = $this->post($key);
		} elseif (!empty($_GET)) {
			$result = $this->get($key);
		} else {
			$result = $default;  
		}

		return $result;
	}


	public function all(array $only = []): array {
		return empty($only) ? array_merge($this->get, $this->post) : array_keys($only);
	}

	
	public function has($key): bool {
		return !empty($this->request($key));
	}

	
	public function ip(): string {
		return $this->ip;
	}

	
	public function userAgent(): string {
		return $this->ua;
	}


	
	public function cookies(): object {
		return $this->cookies;
	}

	
	public function session(): object {
		return $this->session;
	}

}

?>