<?php

function show_array($key, $array) {
	return array_map(function($item) use($key) {
		return $item[$key];
	}, $array);
}

$people = array(
	array('name' => 'b3n', 'loc' => 'tabun', 'age' => '28'),
	array('name' => 'rence', 'loc' => 'mview', 'age' => '29'),
	array('name' => 'jc', 'loc' => 'dau', 'age' => '18'),
);

print_r(show_array('loc', $people));
