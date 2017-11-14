<?php

use Aws\S3\S3Client;

require 'vendor/autoload.php';

$config = require('config.php');

use Aws\S3\S3Client;
//s3

$s3 = S3Client::fctory([
			'key' => $config['s3']['key'],
			'secret' => $config['s3']['secret'],

]);