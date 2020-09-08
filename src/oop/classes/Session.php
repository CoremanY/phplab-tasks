<?php


class Session {

	private $session;

	public function __construct() {
		$this->session = &$_SESSION;
	}

	
	public function all(array $only = []): array {
		return empty($only) ? $this->session : array_keys($only);
	}

	
	public function get(string $key, string $default = null): ?string {
		return array_key_exists($key, $this->session) ? $this->session[$key] : $default;
	}

	
	public function set(string $key, string $value) {
		$this->session[$key] = $value;
	}

	
	public function has(string $key): bool {
		return !empty($this->get($key));
	}

	
	public function remove(string $key) {
		unset($this->session[$key]);
	}

	
	public function clear() {
		session_destroy();
	}

}
