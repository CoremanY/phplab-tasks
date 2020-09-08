<div class="container" id="request">
	<table>

		<tr>
			<th colspan="3">Request</th>
		</tr>
		<tr>
			<td>
				<p>`get($key, $default = null)`</p>

			</td>
			<td>
				<form action="" method="GET">
					<input type="text" name="request_get" minlength="1" maxlength="25" value="<?= $request->get('request_get', null) ?>" required>
					<input type="submit" value="SEND GET">
				</form>

			</td>
			<td><?= $request->get('request_get') ?></td>
		</tr>

		<tr>
			<td>
				<p>`post($key, $default = null)`</p>

			</td>
			<td>
				<form action="" method="POST">
					<input type="text" name="request_post" minlength="1" maxlength="25" value="<?= $request->post('request_post', null) ?>" required>
					<input type="submit" value="SEND POST">
				</form>

			</td>
			<td><?= $request->post('request_post') ?></td>
		</tr>

		<tr>
			<td>
				<p>`request($key, $default = null)`</p>
			<td>-</td>
			</td>

			<td>
				<?= $request->request('request_get') ?>
				<?= $request->request('request_post') ?>
			</td>
		</tr>

		<tr>
			<td rowspan="2">
				<p>`all(array $only = [])`</p>

			</td>
			<td><code>-</code></td>
			<td>
				<pre><?php print_r($request->all());	?></pre>
			</td>
		</tr>

		<tr>
			<td>-</td>
			<td>
				<pre><?php print_r($request->all(['key one' => 'value one', 'key two' => 'value two']));	?></pre>
			</td>
		</tr>

		<tr>
			<td>
				<p>`has($key)`</p>

			</td>
			<td>-</td>
			<td>
				'get': <?= var_export($request->has('request_get')) ?><br>
				'post': <?= var_export($request->has('request_post')) ?><br>
				'key?': <?= var_export($request->has('some_key')) ?>
			</td>
		</tr>

		<tr>
			<td>
				<p>`ip()`</p>

			</td>
			<td>-</td>
			<td><?= $request->ip() ?></td>
		</tr>

		<tr>
			<td>
				<p>`userAgent()`</p>

			</td>
			<td>-</td>
			<td><?= $request->userAgent() ?></td>
		</tr>
	</table>
</div>

<div class="container" id="cookies">
	<table>

		<tr>
			<th colspan="3">Cookies</th>
		</tr>
		<tr>
			<td rowspan="2">
				<p>`all(array $only = [])`</p>

			</td>
			<td>-</td>
			<td>
				<pre><?php print_r($cookies->all()); ?></pre>
			</td>
		</tr>

		<tr>
			<td>-</td>
			<td>
				<pre><?php print_r($cookies->all(['key one' => 'value one', 'key two' => 'value two']));	?></pre>
			</td>
		</tr>

		<tr>
			<td>
				<p>`get($key, $default = null)`</p>

			</td>
			<td>Session ID</code></td>
			<td><?= $cookies->get('PHPSESSID', null) ?></td>
		</tr>

		<tr>
			<td>
				<p>`set($key, $value)`</p>

			</td>
			<td>
				<form action="" method="POST">
					<input type="text" name="cookie_key" minlength="1" maxlength="25" value="" required>
					<input type="text" name="cookie_value" minlength="1" maxlength="25" value="" required>
					<input type="submit" value="SET KEY \ VALUE">
				</form>
			</td>
			<td>-</td>
		</tr>

		<tr>
			<td>
				<p>`has($key)`</p>

			</td>
			<td>-</td>
			<td>
				'cookie': <?= var_export($cookies->has('cookie_one')) ?>
			</td>
		</tr>

		<tr>
			<td>
				<p>`remove($key)`</p>

			</td>
			<td>
				<form action="" method="POST">
					<input type="text" name="cookie_key_unset" minlength="1" maxlength="25" value="" required>
					<input type="submit" value="REMOVE COOKIE">
				</form>
			</td>
			<td>-</td>
		</tr>



	</table>
</div>

<div class="container" id="session">
<table>

<tr>
	<th colspan="3">Session</th>
</tr>
<tr>
	<td rowspan="2">
		<p>`all(array $only = [])`</p>

	</td>
	<td>-</td>
	<td>
		<pre><?php print_r($session->all()); ?></pre>
	</td>
</tr>

<tr>
	<td>-</td>
	<td>
		<pre><?php print_r($session->all(['key one' => 'value one', 'key two' => 'value two']));	?></pre>
	</td>
</tr>

<tr>
	<td>
		<p>`get($key, $default = null)`</p>

	</td>
	<td>-</td>
	<td><?= $session->get('test_session', 'create a session with a key "test_session" to see the result') ?></td>
</tr>

<tr>
	<td>
		<p>`set($key, $value)`</p>

	</td>
	<td>
		<form action="" method="POST">
			<input type="text" name="session_key" minlength="1" maxlength="25" value="" required>
			<input type="text" name="session_value" minlength="1" maxlength="25" value="" required>
			<input type="submit" value="SET KET \ VALUE">
		</form>
	</td>
	<td>-</td>
</tr>

<tr>
	<td>
		<p>`has($key)`</p>

	</td>
	<td>-</td>
	<td>
		'test_session': <?= var_export($session->has('test_session')) ?>
	</td>
</tr>

<tr>
	<td>
		<p>`remove($key)`</p>
	</td>
	<td>
		<form action="" method="POST">
			<input type="text" name="session_key_unset" minlength="1" maxlength="25" value="" required>
			<input type="submit" value="REMOVE SESSION KEY">
		</form>
	</td>
	<td>-</td>
</tr>

<tr>
	<td>
		<p>`clear()`</p>
	</td>
	<td><a href="?unset_session=true">CLEAR THE SESSION</a></td>
	<td>-</td>
</tr>

</table>
</div>
