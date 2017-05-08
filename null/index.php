<?php

if ($redirect = get_option('null_theme_redirect_uri')) {
	header("Location: {$redirect}");
}

